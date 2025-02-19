<x-web.layouts.landing-layout>

    <!--header start-->
    <x-landing-page.navbar-section />
    <!--header end-->

    <!--hero section start-->
    <x-landing-page.hero-section />
    <!--hero section end-->


    <!--body content start-->
    <div class="page-content">

        <!--Fitur Yang Di Dapat start-->
        <section class="text-center position-relative">
            <div class="container ">
                <div class="row">
                    <div class="col-lg-6 col-md-10 mx-auto">
                        <div class="section-title">
                            <div class="title-effect">
                                <div class="bar bar-top"></div>
                                <div class="bar bar-right"></div>
                                <div class="bar bar-bottom"></div>
                                <div class="bar bar-left"></div>
                            </div>
                            <h6>What You Get</h6>
                            <h2 class="title">Apa Yang Kamu <b class="text-theme">Dapatkan</b> </h2>
                        </div>
                    </div>
                </div>
                <div class="row wow fadeInLeftBig" data-wow-duration="2s">
                    <div id="svg-container">
                        <svg id="svgC" width="100%" height="100%" viewBox="0 0 620 120"
                            preserveAspectRatio="xMidYMid meet"></svg>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="work-process">
                            <div class="box-loader"> <span></span>
                                <span></span>
                                <span></span>
                            </div>
                            <div class="step-num-box">
                                <div class="step-icon"><span><i class="la la-lightbulb-o"></i></span>
                                </div>
                                <div class="step-num">01</div>
                            </div>
                            <div class="step-desc">
                                <h4>Materi Terstruktur</h4>
                                <p class="mb-0">Nostrud exercitat ullamco lorem ipsum dolor sit amet, consece
                                    adipising elit, sed doeo eiusmod</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 mt-5 mt-lg-0">
                        <div class="work-process">
                            <div class="box-loader"> <span></span>
                                <span></span>
                                <span></span>
                            </div>
                            <div class="step-num-box">
                                <div class="step-icon"><span><i class="la la-rocket"></i></span>
                                </div>
                                <div class="step-num">02</div>
                            </div>
                            <div class="step-desc">
                                <h4>Mentor Berpengalaman</h4>
                                <p class="mb-0">Nostrud exercitat ullamco lorem ipsum dolor sit amet, consece
                                    adipising elit, sed doeo eiusmod</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 mt-5 mt-lg-0">
                        <div class="work-process">
                            <div class="step-num-box">
                                <div class="step-icon"><span><i class="la la-check-square"></i></span>
                                </div>
                                <div class="step-num">03</div>
                            </div>
                            <div class="step-desc">
                                <h4>Konsultasi</h4>
                                <p class="mb-0">Nostrud exercitat ullamco lorem ipsum dolor sit amet, consece
                                    adipising elit, sed doeo eiusmod</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Fitur Yang Di Dapat end-->


        <!--List Program start-->
        <section class="service position-relative bg-effect overflow-hidden">
            <div class="container text-center">
                <div class="row">
                    <div class="col-lg-6 col-md-10 mx-auto">
                        <div class="section-title">
                            <div class="title-effect">
                                <div class="bar bar-top"></div>
                                <div class="bar bar-right"></div>
                                <div class="bar bar-bottom"></div>
                                <div class="bar bar-left"></div>
                            </div>
                            <h2>Program <b class="text-theme">Tersedia</b></h2>
                            {{-- <h2 class="title">Apa Yang Akan Kamu Dapatkan</h2> --}}
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-12 order-lg-12 image-column right">
                        <div class="blink-img">
                            <img class="img-fluid blinkblink" src="{{ asset('assets/images/pattern/04.png') }}"
                                alt="">
                        </div>
                        {{-- <img class="img-fluid z-index-1 w-100" src="{{ asset('assets/images/svg/01.svg') }}" alt=""> --}}
                    </div>
                    <div class="col-lg-6 col-md-12 mt-5 mt-lg-0 order-lg-1">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="featured-item style-3">
                                    <div class="featured-icon">
                                        <i class="la la-diamond"></i>
                                    </div>
                                    <div class="featured-title">
                                        <h5>Tahsin</h5>
                                    </div>
                                    <div class="featured-desc">
                                        <p>Top quality Software services, labore et dolore magna ali qua Lorem ipsum
                                            dolor sit amet.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 mt-4">
                                <div class="featured-item style-3">
                                    <div class="featured-icon">
                                        <i class="la la-credit-card"></i>
                                    </div>
                                    <div class="featured-title">
                                        <h5>Tahfidz</h5>
                                    </div>
                                    <div class="featured-desc">
                                        <p>Top quality Software services, labore et dolore magna ali qua Lorem ipsum
                                            dolor sit amet.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 mt-3 mt-md-0">
                                <div class="featured-item style-3">
                                    <div class="featured-icon">
                                        <i class="la la-desktop"></i>
                                    </div>
                                    <div class="featured-title">
                                        <h5>Tilawah</h5>
                                    </div>
                                    <div class="featured-desc">
                                        <p>Top quality Software services, labore et dolore magna ali qua Lorem ipsum
                                            dolor sit amet.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 mt-4">
                                <div class="featured-item style-3">
                                    <div class="featured-icon">
                                        <i class="la la-headphones"></i>
                                    </div>
                                    <div class="featured-title">
                                        <h5>Bahasa Arab</h5>
                                    </div>
                                    <div class="featured-desc">
                                        <p>Coming Soon</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--List Program end-->


        <!--Price List start-->
        <section class="position-relative">
            <canvas id="canvas"></canvas>
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-8 col-md-12">
                        <div class="section-title">
                            <div class="title-effect">
                                <div class="bar bar-top"></div>
                                <div class="bar bar-right"></div>
                                <div class="bar bar-bottom"></div>
                                <div class="bar bar-left"></div>
                            </div>
                            <h2><b class="text-theme">Price</b> List</h2>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    {{-- Reguler --}}
                    <div class="col-lg-4 col-md-12 wow slideInLeft" data-wow-duration="2s">
                        <div class="price-table">
                            <div class="price-inside">Reguler</div>
                            <div class="price-header">
                                <div class="price-value">
                                    <h2>110K</h2>
                                    <span>/ Batch</span>
                                </div>
                                <h3 class="price-title">Reguler</h3>
                            </div>
                            <a class="btn btn-theme btn-circle my-4" href="#" data-text="Daftar Sekarang">
                                <span>D</span><span>a</span><span>f</span><span>t</span><span>a</span><span>r</span>
                                <span>
                                </span><span>S</span><span>e</span><span>k</span><span>a</span><span>r</span><span>a</span><span>n</span><span>g</span>
                            </a>
                            <div class="price-list">
                                <ul class="list-unstyled">
                                    <li><b>2 kali</b> pertemuan per pekan</li>
                                    <li>4 Pekan Pembelajaran</li>
                                    <li>Cocok Untuk Pemula</li>
                                    <li>Konsistensi Terjaga</li>
                                    <li>Materi Pdf</li>
                                    <li>Materi Video</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    {{-- Premium --}}
                    <div class="col-lg-4 col-md-12 mt-5 mt-lg-0 wow slideInDown" data-wow-duration="2s">
                        <div class="price-table">
                            <div class="price-inside">Premium</div>
                            <div class="price-header">
                                <div class="price-value">
                                    <h2>140K</h2>
                                    <span>/ Batch</span>
                                </div>
                                <h3 class="price-title">Premium</h3>
                            </div>
                            <a class="btn btn-theme btn-circle my-4" href="#" data-text="Daftar Sekarang">
                                <span>D</span><span>a</span><span>f</span><span>t</span><span>a</span><span>r</span>
                                <span>
                                </span><span>S</span><span>e</span><span>k</span><span>a</span><span>r</span><span>a</span><span>n</span><span>g</span>
                            </a>
                            <div class="price-list">
                                <ul class="list-unstyled">
                                    <li><b>3 kali</b> pertemuan per pekan</li>
                                    <li>4 Pekan Pembelajaran</li>
                                    <li>Belajar dengan Intensif </li>
                                    <li>Materi Pdf</li>
                                    <li>Materi Video</li>
                                    <li>Interaksi Lebih Banyak</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    {{-- Expert --}}
                    <div class="col-lg-4 col-md-12 mt-5 mt-lg-0 wow slideInRight" data-wow-duration="2s">
                        <div class="price-table active">
                            <div class="price-inside">Expert</div>
                            <div class="price-header">
                                <div class="price-value">
                                    <h2>190K</h2>
                                    <span>/ Batch</span>
                                </div>
                                <h3 class="price-title">Expert</h3>
                            </div>
                            <a class="btn btn-theme btn-circle my-4" href="#" data-text="Daftar Sekarang">
                                <span>D</span><span>a</span><span>f</span><span>t</span><span>a</span><span>r</span>
                                <span>
                                </span><span>S</span><span>e</span><span>k</span><span>a</span><span>r</span><span>a</span><span>n</span><span>g</span>
                            </a>
                            <div class="price-list">
                                <ul class="list-unstyled">
                                    <li><b>4 kali</b> pertemuan per pekan</li>
                                    <li>4 Pekan Pembelajaran</li>
                                    <li>Belajar dengan Intensif </li>
                                    <li>Fokus Makharjul Huruf & Tajwid</li>
                                    <li>Materi Pdf</li>
                                    <li>Materi Video</li>
                                    <li>Interaksi Lebih Banyak</li>
                                    <li>Pendampingan Langsung</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Price List end-->


        <!--Contact start-->
        <section class="contact-info p-0 z-index-1 ">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-12">
                        <div class="contact-media"> <i class="flaticon-paper-plane"></i><span>Address:</span>
                            <p>423B, Road Wordwide Country, USA</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-5 mt-lg-0">
                        <div class="contact-media"> <i class="flaticon-email"></i><span>Email Address</span><a
                                href="mailto:themeht23@gmail.com"> themeht23@gmail.com</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-5 mt-lg-0">
                        <div class="contact-media"> <i class="flaticon-social-media"></i><span>Phone Number</span><a
                                href="tel:+912345678900">+91-234-567-8900</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Contact end-->

    </div>

    <!--body content end-->


    <!--footer start-->

    <footer class="footer footer-1 position-relative" data-bg-img="images/bg/05.png">
        <div class="subscribe-box">
            <div class="container">
                <div class="row subscribe-inner align-items-center">
                    <div class="col-md-6 col-sm-12">
                        <h2>Daftar Sekarang !</h2>
                        <p class="lead mb-0">Tunggu apalagi, gabung bersama kami sekarang juga</p>
                    </div>
                    <div class="col-md-5 col-sm-12 mt-3 ml-3 mt-md-0 offset-1">
                        <div class="subscribe-form ">
                                <button class="btn btn-theme w-50" type="submit" >Daftar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="secondary-footer">
            <div class="container">
                <div class="copyright">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-12"> <span> @Copyright 2025 - <b class="text-theme">Alimni</b>  | All Rights Reserved</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!--footer end-->


    </div>

    <!-- page wrapper end -->
</x-web.layouts.landing-layout>
