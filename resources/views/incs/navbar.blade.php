<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('home')}}">
        <i class="fa-solid fa-house"></i>
        Accueil
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('articles')}}">Articles</a>
          </li> 
        </ul>
        <ul class="navbar-nav mr-auto">
          @if (Auth::user())
            <li class="nav-item">
                <form method="POST" action="{{route('logout')}}">
                  @csrf
                    <button type="submit" class="btn">Déconnection</button>
                </form>
            </li> 
              
          @else
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{route('login')}}">Me connecter</a>
          </li> 
          @endif
        </ul>
      </div>
    </div>
  </nav>