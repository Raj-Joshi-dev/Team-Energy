<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
  <div class="container">
      <a class="navbar-brand" href="{{ url('/') }}">
        <img src="{{URL::asset('/images/Compass_Trainer_Network_LOGO.jpg')}}" height="30" class="d-inline-block align-top"
      alt="Team Energy">Team-Energy
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
          <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Left Side Of Navbar -->
          <ul class="navbar-nav mr-auto">
              <li class="nav-item">
            <!--      <a class="nav-link active" href="{{ route('index') }}">Home</a>
            </li> -->
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('information') }}">Information</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('about') }}">Über uns</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('contact') }}">Kontaktiere uns</a>
                </li>
          </ul>
      </div>
  </div>
</nav>
