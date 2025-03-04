<x-web.layouts.landing-layout>

    <!--hero section start-->
    <x-landing-page.hero-section />
    <!--hero section end-->

    <!--about start-->
    <section id="about">
        <div class="container wow fadeInUp" data-wow-duration="3s">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 order-lg-1 wow fadeInLeftBig" data-wow-duration="3s">
                    <img class="img-fluid w-100" src="{{ asset('images/illustrations/landing-about-us.svg') }}" alt="">
                </div>
                <div class="col-lg-6 col-md-12 mt-5 mt-lg-0">
                    <div class="section-title mb-3 d-flex wow fadeInUp" data-wow-duration="3s">
                        <div class="title-effect title-effect-2 me-2">
                            <div class="ellipse"></div> <i class="la la-info"></i>
                        </div>
                        <h1>Tentang Kami</h1>
                    </div>
                    <p class="lead">Kami hadir sebagai <b class="text-theme">teman anda</b> untuk <b
                            class="text-theme">belajar Al Qur’an</b> tanpa batas ruang dan waktu, dengan <b
                            class="text-theme">materi terstruktur</b> dan <b class="text-theme">metode terpadu</b> yang
                        akan membuat anda semakin nyaman <b class="text-theme">bersahabat dengan Al-Qur’an.</b>
                        Jadikanlah <b class="text-theme">Al Qur’an</b> sebagai <b class="text-theme">penyejuk hatimu, cahaya di dadamu, penghilang kesedihanmu </b> dan
                        <b class="text-theme">pelipur bagi kesusahanmu</b></p>
                    <a class="btn btn-theme btn-circle" href="{{ route('aboutUs') }}" data-text="Selengkapnya">
                        <span>P</span><span>r</span><span>o</span><span>f</span><span>i</span><span>l</span>
                        <span> </span><span>A</span><span>l</span><span>i</span><span>m</span><span>n</span><span>i</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--about end-->

    <!--body content start-->
    <div class="page-content">

        <!--Fitur Yang Di Dapat start-->
        <x-landing-page.fitur-section />
        <!--Fitur Yang Di Dapat end-->


        <!--List Program start-->
        <x-landing-page.list-program-section />
        <!--List Program end-->


        <!--Price List start-->
        <x-landing-page.price-list-section />
        <!--Price List end-->

        <!--New Member start-->
        <section id="new-member" class="" data-bg-img="{{ asset('assets/images/pattern/03.png') }}">
            <div class="row justify-content-center text-center">
                {{-- <div class="col-lg-8 col-md-12">
                    <div class="section-title">
                        <div class="title-effect">
                            <div class="bar bar-top"></div>
                            <div class="bar bar-right"></div>
                            <div class="bar bar-bottom"></div>
                            <div class="bar bar-left"></div>
                        </div>
                        <h2>New<b class="text-theme">Member</b></h2>
                    </div>
                </div>
            </div> --}}
                <div class="subscribe-box mt-3">
                    <div class="container wow fadeInUp" data-wow-duration="3s">
                        <div class="row subscribe-inner align-items-center">
                            <div class="col-md-6 col-sm-12">
                                <h2>Daftar Sekarang !</h2>
                                <p class="lead mb-0">Tunggu apalagi, gabung bersama kami sekarang juga</p>
                            </div>
                            <div class="col-md-5 col-sm-12 mt-3 ml-lg-3 ml-0 mt-md-0 offset-md-1">
                                <div class="subscribe-form ">
                                    <button class="btn btn-theme w-50" type="submit">Daftar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <!--New Member end-->

        <!--Contact start-->
        <x-landing-page.contact-section />
        <!--Contact end-->

    </div>

    <!--body content end-->




    </div>

    <!-- page wrapper end -->
</x-web.layouts.landing-layout>
