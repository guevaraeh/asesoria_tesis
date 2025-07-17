<nav class="navbar navbar-expand-lg mb-4 topbar bg-dark" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="{{ asset('icon.jpg') }}" height="20px" />Administrador</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            
        <ul class="navbar-nav">
            <li class="nav-item">
          <a class="nav-link" href="{{ route('home') }}" target="_blank">
            Inicio
          </a>
        </li>
        </ul>

        <ul class="navbar-nav ms-auto navbar-right">
        <form id="nav-logout" action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="nav-link"><i class="bi-box-arrow-left"></i> Cerrar Sesión</button>
        </form>        
        </ul>

        </div>
    </div>
</nav>