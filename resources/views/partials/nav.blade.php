<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm ">

  <a class="navbar-brand" href="{{ route('home') }}">{{config('app.name')}}</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item    ">
        <a class="nav-link {{setActive('home')}}" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link {{setActive('about')}}" href="{{route('about')}}">About</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link {{setActive('projects.*') }}" href="{{route('projects.index')}}">Projects</a>
      </li>
      <li class="nav-item">
        <a class="nav-link  {{setActive('contact') }}" href="{{route('contact')}}">Contact</a>
      </li>
      @guest
      <li class="nav-item  ml-auto">
        <a class="nav-link {{setActive('login') }}" href="{{route('login')}}">Login</a>
      </li>
      @else
      <li  class="nav-item ml-auto">
        <a href="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
      </li>
      @endguest

    </ul>
  </div>
</nav>
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>
