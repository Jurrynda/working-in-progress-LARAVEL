{{-- <nav>
    @guest

        
    <ul>
        <li>
            <a href=" {{ route('home') }}">home</a>
            <a href="{{ route('login') }}">login</a>
            <a href="{{ route('register') }}">register</a>
        </li>
    </ul>

    @endguest

    @auth
        
    <ul>
        <li>
            <a href=" {{ route('home') }}">home</a>
            <a href="/users/{{ auth()->user()->id }}">{{ auth()->user()->name }}</a>
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                logout
            </a>
              
            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
            </form>
        </li>
    </ul>

    @endauth
</nav> --}}

<nav class="navbar navbar-expand-lg bg-light mb-3 container">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Wedos app</a>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
          </li>

          @guest
              
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">Register</a>
            </li>
          
          @endguest

          @auth
              
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="/" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{ auth()->user()->name }}
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Profile</a></li>
              <li><a class="dropdown-item" href="/posts/create">Add post</a></li>
              @if ( auth()->user()->is_admin === 1 )
                <li><a class="dropdown-item" href="/users">Users</a></li>
              @endif
              
              <li><hr class="dropdown-divider"></li>
              <li>
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Logout
                </a>
                  
                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf
                </form>
              </li>
            </ul>
          </li>

          @endauth
          
        </ul>
      </div>
    </div>
  </nav>