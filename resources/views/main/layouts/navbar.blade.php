  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container py-3">
      <a class="navbar-brand me-5" href="#">
        <img src="/img/logo-only.png" alt="ITS Jazz Logo" width="50">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-lg fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item text-center">
            <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Home</a>
          </li>
          <li class="nav-item text-center">
            <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="/about">About</a>
          </li>
          <li class="nav-item dropdown text-center">
            <a class="nav-link {{ (Request::is('its-jazz-segment') or Request::is('jazzineer-gigs') or Request::is('konser-1-dekade')) ? 'active' : '' }} dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              Activities
            </a>
            <ul class="dropdown-menu text-center text-lg-start" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="/its-jazz-segment">ITS Jazz Segment</a></li>
              <li><a class="dropdown-item" href="/jazzineer-gigs">Jazzineer Gigs</a></li>
              <li><a class="dropdown-item" href="/konser-1-dekade">Konser 1 Dekade</a></li>
            </ul>
          </li>
          <li class="nav-item text-center">
            <a class="nav-link {{ Request::is('merchandise') ? 'active' : '' }}" href="/merchandise">Merchandise</a>
          </li>
          <li class="nav-item text-center">
            <a class="nav-link {{ Request::is('join') ? 'active' : '' }}" href="/join"><u>Join Us</u></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End of Navbar -->