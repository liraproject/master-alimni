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
                        <div class="col-md-5 col-sm-12 mt-3 ml-3 mt-md-0 offset-1">
                            <div class="subscribe-form ">
                                    <button class="btn btn-theme w-50" type="submit" >Daftar</button>
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


    <!--footer start-->
    <footer class="footer position-relative" data-bg-img="{{ asset('assets/images/bg/01.png') }}">
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
