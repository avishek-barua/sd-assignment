<div class="container">
    <a class="navbar-brand" href="#">Start Bootstrap</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{URL::to('/')}}">Home
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{URL::to('about-us')}}">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{URL::to('services')}}">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{URL::to('contact-us')}}">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{URL::to('login')}}">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{URL::to('register')}}">Register</a>
        </li>
      </ul>
    </div>
  </div>