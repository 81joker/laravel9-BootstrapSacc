  <!-- Header -->
  <header>
      <!-- Start the navbar Section -->
      <nav class="navbar navbar-expand-lg navbar-dark menu shadow fixed-top">
          <div class="container">
              <a class="navbar-brand" href="#">
                  <img src="{{ asset('images/logo.png') }}" alt="" />
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                  aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                  <div class="navbar-nav">
                      <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
                      <a class="nav-link" href="#services">Services</a>
                      <a class="nav-link" href="#testimonials">Testmonials</a>
                      <a class="nav-link" href="#">Feq</a>
                      <a class="nav-link" href="#">Portopolio</a>
                      <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
                  </div>
                  <button type="button" class="rounded-pill btn-rounded">
                      +43 06606180228
                      <span> <i class="fas fa-phone-alt"></i> </span>
                  </button>
              </div>
          </div>
      </nav>
      <!-- End the navbar Section -->
  </header>
