<div>

    {{-- Hero --}}
    <section class="page-title overflow-hidden position-relative" data-bg-color="#fbf3ed">
        <canvas id="confetti"></canvas>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-12">
                    <h1 class="title">Program<span>Tahsin</span></h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
                <div class="col-lg-5 col-md-12 text-lg-end mt-3 mt-lg-0">
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('landing-view') }}">Program</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Program Tahsin</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="page-title-pattern">
            <img class="img-fluid" src="{{ asset('assets/images/bg/11.png') }}" alt="">
        </div>
    </section>

    {{-- Tentang Program --}}
    <section class="pt-0">
        <div class="container wow fadeInUp" data-wow-duration="3s">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 wow fadeInRightBig" data-wow-duration="3s">
                    <img class="img-fluid w-100" src="{{ asset('images/illustrations/detail-program-tahsin.svg') }}" alt="">
                </div>
                <div class="col-lg-6 col-md-12 mt-5 mt-lg-0">
                    <div class="section-title mb-3">
                        <div class="title-effect title-effect-2 me-2">
                            <div class="ellipse"></div> <i class="la la-info"></i>
                        </div>
                        <h1>Tentang Program</h1>
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

    {{-- List Mentor --}}
    <section data-bg-img="{{ asset('assets/images/bg/07.png') }}">
        <div class="container wow fadeInUp" data-wow-duration="3s" >
            <div class="row text-center" >
                <div class="col-lg-6 col-md-10 mx-auto">
                    <div class="section-title">
                        <div class="title-effect">
                            <div class="bar bar-top"></div>
                            <div class="bar bar-right"></div>
                            <div class="bar bar-bottom"></div>
                            <div class="bar bar-left"></div>
                        </div>
                        <h2 class="title">Daftar <b class="text-theme">Pengajar</b> </h2>
                    </div>
                </div>
            </div>
            <div class="row match-height">
                <div class="col-12 ">
                    <div class="owl-carousel" data-items="2" data-lg-items="2" data-md-items="2" data-sm-items="1"
                        data-autoplay="true">
                        @foreach ($mentors as $mentor )
                        <div class="item">
                            <div class="post">
                                <div class="post-desc" >
                                    <div class="post-meta d-flex align-items-center">
                                        <i class="far fa-user text-theme fs-1 me-3"></i>
                                        <div class="d-flex flex-column">
                                            <h4 class="mb-0">{{ $mentor->teacher_name }}</h4>
                                            <small class="text-muted">Fulan bin Fulan</small>
                                        </div>
                                    </div>
                                    <div class="post-title">
                                        <h5><b>Skill :</b></h5>
                                    </div>
                                    <ul class="custom-li list-unstyled list-icon-2 d-inline-block mt-2">
                                        @foreach ($mentor->teacherSkills as $skill)
                                            <li>{{ $skill->skill_name }}</li>
                                        @endforeach
                                    </ul>
                                    <div class="post-title">
                                        <h5><b>Sertifikat :</b></h5>
                                    </div>
                                    <ul class="custom-li list-unstyled list-icon-2 d-inline-block mt-2">
                                        @foreach ($mentor->teacherCertificates as $certificate)
                                            <li>{{ $certificate->certificate_name }}</li>
                                        @endforeach
                                    </ul>
                                    <a class="icon-btn mt-4" href="#"> <i class="la la-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Pricing --}}
    <section class="bg-effect-4 position-relative overflow-hidden">
        <div class="container wow fadeInUp" data-wow-duration="3s">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8 col-md-12">
                    <div class="section-title">
                        <div class="title-effect">
                            <div class="bar bar-top"></div>
                            <div class="bar bar-right"></div>
                            <div class="bar bar-bottom"></div>
                            <div class="bar bar-left"></div>
                        </div>
                        <h2><b class="text-theme">Biaya</b> Program Tahsin</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="owl-carousel no-pb" data-items="3" data-sm-items="1"
                        data-autoplay="true">
                        <div class="item">
                            <div class="price-table style-3 mx-3 my-3">
                                <div class="price-inside">Reguler</div>
                                <div class="price-header">
                                    <div class="price-value">
                                        <h2>110rb</h2>
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
                                        <li>2x pertemuan per pekan</li>
                                        <li>8x pertemuan per batch</li>
                                        <li>Pembelajaran private 1 on 1</li>
                                        <li>Sertifikat</li>
                                        <li>Materi Pdf</li>
                                        <li>Materi Video</li>
                                        <li>Grup diskusi</li>
                                        <li>Akses aplikasi mobile</li>
                                    </ul>
                                </div>
                            </div>
                            <a class="icon-btn mt-4" href="#"> <i class="la la-angle-right"></i>
                            </a>
                        </div>
                        <div class="item">
                            <div class="price-table style-3 mx-3 my-3">
                                <div class="price-inside">Intensif</div>
                                <div class="price-header">
                                    <div class="price-value">
                                        <h2>165rb</h2>
                                        <span>/ Batch</span>
                                    </div>
                                    <h3 class="price-title">Intensif</h3>
                                </div>
                                <a class="btn btn-theme btn-circle my-4" href="#" data-text="Daftar Sekarang">
                                    <span>D</span><span>a</span><span>f</span><span>t</span><span>a</span><span>r</span>
                                    <span>
                                    </span><span>S</span><span>e</span><span>k</span><span>a</span><span>r</span><span>a</span><span>n</span><span>g</span>
                                </a>
                                <div class="price-list">
                                    <ul class="list-unstyled">
                                        <li>3x pertemuan per pekan</li>
                                        <li>12x pertemuan per batch</li>
                                        <li>Pembelajaran private 1 on 1</li>
                                        <li>Sertifikat</li>
                                        <li>Materi Pdf</li>
                                        <li>Materi Video</li>
                                        <li>Grup diskusi</li>
                                        <li>Akses aplikasi mobile</li>
                                        <li>Interaksi lebih banyak</li>
                                    </ul>
                                </div>
                            </div>
                            <a class="icon-btn mt-4" href="#"> <i class="la la-angle-right"></i>
                            </a>
                        </div>
                        <div class="item">
                            <div class="price-table style-3 mx-3 my-3">
                                <div class="price-inside">Eksklusif</div>
                                <div class="price-header">
                                    <div class="price-value">
                                        <h2>275rb</h2>
                                        <span>/ Batch</span>
                                    </div>
                                    <h3 class="price-title">Eksklusif</h3>
                                </div>
                                <a class="btn btn-theme btn-circle my-4" href="#" data-text="Daftar Sekarang">
                                    <span>D</span><span>a</span><span>f</span><span>t</span><span>a</span><span>r</span>
                                    <span>
                                    </span><span>S</span><span>e</span><span>k</span><span>a</span><span>r</span><span>a</span><span>n</span><span>g</span>
                                </a>
                                <div class="price-list">
                                    <ul class="list-unstyled">
                                        <li>5x pertemuan per pekan</li>
                                        <li>20x pertemuan per batch</li>
                                        <li>Pembelajaran private 1 on 1</li>
                                        <li>Sertifikat</li>
                                        <li>Materi Pdf</li>
                                        <li>Materi Video</li>
                                        <li>Grup diskusi</li>
                                        <li>Akses aplikasi mobile</li>
                                        <li>Modul dalam bentuk cetak (buku)</li>
                                        <li>Konsultasi private</li>
                                    </ul>
                                </div>
                            </div>
                            <a class="icon-btn mt-4" href="#"> <i class="la la-angle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



</div>
