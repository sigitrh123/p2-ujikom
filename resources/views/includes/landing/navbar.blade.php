<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center" style="background-color: #fd5e4f
;">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1>
            <a class="navbar-brand fw-bold text-white" href="{{ url('/')}}">
                <img src="/assets/img/pengadu.svg" alt="Logo" class="img-fluid">
                PENGADU
            </a>
        </h1>

      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <div> <a class="border-solid" href="{{ url('login')}}">Masuk</a></div>
          <div> <a class="border-solid" href="{{ url('register')}}">Daftar</a></div>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
