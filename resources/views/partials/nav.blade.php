<nav class="navbar navbar-expand-lg navbar-light bg-light">

  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item {{setActive('home')}}   ">
        <a class="nav-link" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item {{setActive('about')}}">
        <a class="nav-link" href="{{route('about')}}">About</a>
      </li>
      <li class="nav-item {{setActive('projects.*') }}">
        <a class="nav-link" href="{{route('projects.index')}}">Projects</a>
      </li>
      <li class="nav-item {{setActive('contact') }}">
        <a class="nav-link" href="{{route('contact')}}">Contact</a>
      </li>

    </ul>
  </div>
</nav>
