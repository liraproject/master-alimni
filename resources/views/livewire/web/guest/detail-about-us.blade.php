<div>
    {{-- Hero --}}
    <section class="page-title overflow-hidden position-relative" data-bg-color="#fbf3ed">
        <canvas id="confetti"></canvas>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-12">
                    <h1 class="title">Ali<span>mni</span></h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
                <div class="col-lg-5 col-md-12 text-lg-end mt-3 mt-lg-0">
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('landingView') }}">Profil</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Tentang Kami</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="page-title-pattern">
            <img class="img-fluid" src="{{ asset('assets/images/bg/11.png') }}" alt="">
        </div>
    </section>

    {{-- Tentang Kami --}}
    <section class="pt-0">
        <div class="container wow fadeInUp" data-wow-duration="3s">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 wow fadeInRightBig" data-wow-duration="3s">
                    <img class="img-fluid w-100" src="{{ asset('images/illustrations/landing-about-us.svg') }}"
                        alt="">
                </div>
                <div class="col-lg-6 col-md-12 mt-5 mt-lg-0">
                    <div class="section-title mb-3 d-flex">
                        <div class="title-effect title-effect-2 me-2">
                            <div class="ellipse"></div> <i class="la la-info"></i>
                        </div>
                        <h1>Tentang Kami</h1>
                    </div>
                    <p class="lead">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veritatis eaque, tempora
                        quisquam corporis quis maxime voluptatum voluptas sapiente deserunt! Numquam dolores delectus
                        blanditiis earum est quidem nobis perspiciatis nisi vitae totam tenetur unde harum eum quod
                        expedita nulla asperiores illo, voluptatibus dolorum reprehenderit aliquid? Saepe laborum
                        similique tenetur fuga consequatur blanditiis quos at, molestiae accusamus cupiditate ratione
                        vel modi unde nulla beatae recusandae numquam quibusdam quae totam maxime? Maxime tempora
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Visi & Misi --}}
    <section class="position-relative overflow-hidden">
        <canvas id="canvas"></canvas>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="timeline-wrap wow fadeInUp" data-wow-duration="3s">
                        <ul class="timeline timeline--first list-unstyled">
                            <li class="timeline-title">
                                <h2># VISI</h2>
                            </li>
                            <li class="timeline-inner timeline-left">
                                <div class="timeline-content">
                                    <h3>Easy to use</h3>
                                    <p>Softino Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                                        ut aliquip ex ea commodo consequat Duis aute irure dolor in reprehenderi.</p>
                                </div>
                            </li>
                            <li class="timeline-inner timeline-right">
                                <div class="timeline-content">
                                    <h3>Unique Features</h3>
                                    <p>Softino Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                                        ut aliquip ex ea commodo consequat Duis aute irure dolor in reprehenderi.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="timeline-wrap wow fadeInUp" data-wow-duration="3s">
                        <ul class="timeline list-unstyled">
                            <li class="timeline-title">
                                <h2># MISI</h2>
                            </li>
                            <li class="timeline-inner timeline-left">
                                <div class="timeline-content">
                                    <h3>Layout Option</h3>
                                    <p>Softino Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                                        ut aliquip ex ea commodo consequat Duis aute irure dolor in reprehenderi.</p>
                                </div>
                            </li>
                            <li class="timeline-inner timeline-right">
                                <div class="timeline-content">
                                    <h3>Sass Version</h3>
                                    <p>Softino Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                                        ut aliquip ex ea commodo consequat Duis aute irure dolor in reprehenderi.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--team start-->

    <section class="position-relative overflow-hidden theme-bg grediant-overlay" data-bg-img="images/bg/09.jpg"
        data-overlay="9">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="section-title">
                        <div class="title-effect title-effect-2">
                            <div class="ellipse"></div> <i class="la la-info"></i>
                        </div>
                        <h2 class="title text-white">Struktur Team</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-0 custom-mt-10 overflow-hidden">
        <div class="container-fluid p-0">
            <div class="row wow fadeInRight" data-wow-duration="3s">
                <div class="col-xl-10 col-lg-11 ms-auto">
                    <div class="owl-carousel" data-items="3" data-md-items="2" data-sm-items="1" data-autoplay="true">
                        <div class="item">
                            <div class="team-member style-3">
                                <div class="team-images">
                                    <img class="img-fluid rounded box-shadow" src="{{ asset('assets/images/team/Profile-lead.png') }}" alt="">
                                    {{-- <a class="team-link" href="team-single.html"><i class="la la-external-link"></i></a> --}}
                                </div>
                                <div class="team-description"> <span>Founder</span>
                                    <h5>Alendia Desta Setiawan</h5>
                                    <div class="social-icons social-colored circle team-social-icon">
                                        <ul>
                                            <li class="social-facebook"><a href="#"><i
                                                        class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li class="social-twitter"><a href="#"><i
                                                        class="fab fa-twitter"></i></a>
                                            </li>
                                            <li class="social-gplus"><a href="#"><i
                                                        class="fab fa-google-plus-g"></i></a>
                                            </li>
                                            <li class="social-linkedin"><a href="#"><i
                                                        class="fab fa-linkedin-in"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="team-member style-3">
                                <div class="team-images">
                                    <img class="img-fluid rounded box-shadow" src="{{ asset('assets/images/team/profile.png') }}" alt="">
                                    {{-- <a class="team-link" href="team-single.html"><i
                                            class="la la-external-link"></i></a> --}}
                                </div>
                                <div class="team-description"> <span>CEO</span>
                                    <h5>Al Hikam Sabillurrosidin</h5>
                                    <div class="social-icons social-colored circle team-social-icon">
                                        <ul>
                                            <li class="social-facebook"><a href="#"><i
                                                        class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li class="social-twitter"><a href="#"><i
                                                        class="fab fa-twitter"></i></a>
                                            </li>
                                            <li class="social-gplus"><a href="#"><i
                                                        class="fab fa-google-plus-g"></i></a>
                                            </li>
                                            <li class="social-linkedin"><a href="#"><i
                                                        class="fab fa-linkedin-in"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="team-member style-3">
                                <div class="team-images">
                                    <img class="img-fluid rounded box-shadow" src="{{ asset('assets/images/team/profile.png') }}" alt="">
                                        {{-- <a class="team-link" href="team-single.html"><i class="la la-external-link"></i></a> --}}
                                </div>
                                <div class="team-description"> <span>CTO</span>
                                    <h5>Miftahul Khoir</h5>
                                    <div class="social-icons social-colored circle team-social-icon">
                                        <ul>
                                            <li class="social-facebook"><a href="#"><i
                                                        class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li class="social-twitter"><a href="#"><i
                                                        class="fab fa-twitter"></i></a>
                                            </li>
                                            <li class="social-gplus"><a href="#"><i
                                                        class="fab fa-google-plus-g"></i></a>
                                            </li>
                                            <li class="social-linkedin"><a href="#"><i
                                                        class="fab fa-linkedin-in"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="team-member style-3">
                                <div class="team-images">
                                    <img class="img-fluid rounded box-shadow" src="{{ asset('assets/images/team/profile.png') }}" alt="">
                                        {{-- <a class="team-link" href="team-single.html"><i class="la la-external-link"></i></a> --}}
                                </div>
                                <div class="team-description"> <span>CMO</span>
                                    <h5>Masyaa'il Khilmi</h5>
                                    <div class="social-icons social-colored circle team-social-icon">
                                        <ul>
                                            <li class="social-facebook"><a href="#"><i
                                                        class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li class="social-twitter"><a href="#"><i
                                                        class="fab fa-twitter"></i></a>
                                            </li>
                                            <li class="social-gplus"><a href="#"><i
                                                        class="fab fa-google-plus-g"></i></a>
                                            </li>
                                            <li class="social-linkedin"><a href="#"><i
                                                        class="fab fa-linkedin-in"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--team end-->
</div>
