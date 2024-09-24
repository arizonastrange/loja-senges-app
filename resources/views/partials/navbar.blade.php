<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a href="/" class="navbar-brand">Lojas Sengés</a> 
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        @auth
        <ul class="navbar-nav ms-auto">
            <li class="nav-item"> 
                <a href="/" class="nav-link dropdown-toggle"
                    id='userDropdawn'
                    role='button'
                    data-bs-toggle='dropdown'
                    aria-expanded='fase'>
                    {{ auth()->user()->name}}>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li> 
                        <a href="#" class="dropdow-item">Perfil</a>
                    </li>
                    <li> 
                        <a href="#" class="dropdow-item">Sair</a>
                    </li>
                </ul>
                @else
                <ul class="navbar-nav ms-auto">
                    <li class="navbar-item">
                        <a href="/" class="nav-link"> Login</a>
                    </li>
                </ul>
                @endauth
            </li>
        </ul>
    
        </li>
    </div>    
</nav>