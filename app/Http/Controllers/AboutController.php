<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

use App\Models\Phone;
use App\Models\Email;
use App\Models\Comment;
use App\Models\TeamMember;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store_comment(Request $request)
    {
        $comment = new Comment;
        $comment->name = $request->input('name');
        $comment->position = $request->input('position');
        $comment->comment = $request->input('comment');

        if($request->file('photo'))
        {
            $imagename = $request->file('photo')->store('comments','public');
            $comment->photo = $imagename;
        }

        $comment->save();

        return redirect(route('index'))->with('success', 'Comentario registrado');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update_comment(Request $request, Comment $comment)
    {
        $comment->name = $request->input('name');
        $comment->position = $request->input('position');
        $comment->comment = $request->input('comment');

        if($request->file('photo'))
        {
            $imagename = $request->file('photo')->store('comments','public');
            $comment->photo = $imagename;
        }

        $comment->save();

        return redirect(route('index'))->with('success', 'Comentario actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy_comment(Comment $comment)
    {
        $comment->delete();

        return redirect(route('index'))->with('success', 'Comentario eliminado');
    }

        /**
     * Store a newly created resource in storage.
     */
    public function store_team_member(Request $request)
    {
        $team_member = new TeamMember;
        $team_member->name = $request->input('name');
        $team_member->lastname = $request->input('lastname');
        $team_member->position = $request->input('position');
        $team_member->description = $request->input('description');

        if($request->file('photo'))
        {
            $imagename = $request->file('photo')->store('team_members','public');
            $team_member->photo = $imagename;
        }
         if($request->hasFile('cv'))
        {
            $filename = $request->file('cv')->getClientOriginalName();  
            $request->file('cv')->move(public_path('cv'), $filename);
            $team_member->cv = $filename;
        }

        $team_member->save();

        if($request->input('number'))
        {
            $phone = new Phone;
            $phone->number = $request->input('number');
            $phone->main = $request->input('pmain');
            $phone->team_member_id = $team_member->id;
            if($request->input('pmain') == '1')
                Phone::query()->update(['main' => 0]);
            $phone->save();
        }
        if($request->input('email'))
        {
            $email = new Email;
            $email->email = $request->input('email');
            $email->main = $request->input('emain');
            $email->team_member_id = $team_member->id;
            if($request->input('emain') == '1')
                Email::query()->update(['main' => 0]);
            $email->save();
        }


        return redirect(route('index'))->with('success', 'Miembro registrado');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update_team_member(Request $request, TeamMember $team_member)
    {
        $team_member->name = $request->input('name');
        $team_member->lastname = $request->input('lastname');
        $team_member->position = $request->input('position');
        $team_member->description = $request->input('description');
        //$team_member->description = explode("\r\n", $request->input('description'));

        if($request->file('photo'))
        {
            $imagename = $request->file('photo')->store('team_members','public');
            $team_member->photo = $imagename;
        }
         if($request->hasFile('cv'))
        {
            $filename = $request->file('cv')->getClientOriginalName();  
            $request->file('cv')->move(public_path('cv'), $filename);
            $team_member->cv = $filename;
        }

        $team_member->save();

        return redirect(route('index'))->with('success', 'Miembro actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy_team_member(TeamMember $team_member)
    {
        foreach($team_member->phones as $phone)
            $phone->delete();
        foreach($team_member->emails as $email)
            $email->delete();
        $team_member->delete();

        return redirect(route('index'))->with('success', 'Miembro de equipo eliminado');
    }
}
