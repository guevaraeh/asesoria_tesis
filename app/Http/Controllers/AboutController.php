<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

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

        $team_member->save();

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

        if($request->file('photo'))
        {
            $imagename = $request->file('photo')->store('team_members','public');
            $team_member->photo = $imagename;
        }

        $team_member->save();

        return redirect(route('index'))->with('success', 'Miembro actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy_team_member(TeamMember $team_member)
    {
        $team_member->delete();

        return redirect(route('index'))->with('success', 'Miembro eliminado');
    }
}
