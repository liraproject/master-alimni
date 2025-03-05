<header id="site-header" class="header header-1">
    <div class="container-fluid">
        <div id="header-wrap" class="box-shadow">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Navbar -->
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand logo" href="/#hero">
                            <img id="logo-img" class="img-fluid"
                                src="{{ asset('assets/images/logo-customizer/logo-alimni-1.png') }}" alt="">
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                            aria-label="Toggle navigation"> <span></span>
                            <span></span>
                            <span></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <!-- Left nav -->
                            <ul class="nav navbar-nav mx-auto">
                                <!-- Home -->
                                <li class="nav-item">
                                    <a class="nav-link" href="{{request()->routeIs('landing-view') ? '#hero' : '/#hero' }}" >Home</a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link " href="{{request()->routeIs('landing-view') ? '#about' : '/#about' }}">Profil</a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link " href="{{request()->routeIs('landing-view') ? '#fitur' : '/#fitur' }}">Keunggulan</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle"  data-bs-toggle="dropdown" href="#list-program">Program</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ route('program-tahsin') }}">Tahsin</a>
                                        </li>
                                        <li><a href="#">Tahfidz</a>
                                        </li>
                                        <li><a href="#">Tilawah</a>
                                        </li>
                                        <li><a href="#">Bahasa Arab</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link " href="{{request()->routeIs('landing-view') ? '#price-list' : '/#price-list' }}">Biaya</a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link " href="{{request()->routeIs('landing-view') ? '#contact' : '/#contact' }}">Kontak</a>
                                </li>
                            </ul>
                        </div>
                        <a class="btn btn-theme btn-sm" href="{{ route('loginView') }}" data-text="Login">
                            <span>L</span><span>o</span><span>g</span><span>i</span><span>n</span>
                        </a>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
