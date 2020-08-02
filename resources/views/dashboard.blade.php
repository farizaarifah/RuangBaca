@extends('layouts.template')
@section('content')
        <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image--><img class="masthead-avatar mb-5" src="{{asset('assets/img/bukutanpabg.png')}}" alt="">
                <!-- Masthead Heading-->
                <h1 class="masthead-heading mb-0">RUANG BACA</h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Masthead Subheading-->
                <p class="pre-wrap masthead-subheading font-weight-light mb-0">Pendataan Buku</p>
            </div>
        </header>
        <section class="page-section portfolio" id="portfolio">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <div class="text-center">
                    <h2 class="page-section-heading text-secondary mb-0 d-inline-block">KOLEKSI BUKU KAMI</h2>
                </div>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Grid Items-->
                <div class="row justify-content-center">
                    <!-- Portfolio Items-->
                    @foreach ($buku_list as $buku)
                    <div class="col-md-6 col-lg-4 mb-5">
                        
                        <div class="portfolio-item mx-auto" data-toggle="modal">   
                                <a href='/buku/{{ $buku->id }}'>
                                <img class="img-fluid" src="{{asset('fotoupload/' . $buku->foto) }}">
                                <!-- <a href='/buku/{{ $buku->id }}'></a> -->
                                </img></a>            
                        </div>
                        
                    </div>
                    @endforeach

                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal3">
                            </div><a href="/buku/read"><img class="img-fluid" src="{{asset('assets/img/portfolio/more.png') }}" alt="Locked Safe">
                                
                            </img></a>
                            
                        </div>
                    </div>  

                </div>
            </div>
        </section>

        <section class="page-section bg-primary text-white mb-0" id="about">
            <div class="container">
                <!-- About Section Heading-->
                <div class="text-center">
                    <h2 class="page-section-heading d-inline-block text-white">ABOUT</h2>
                </div>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- About Section Content-->
                <div class="row">
                    <div class="col-lg-2">
                    </div>
                    <div class="col-lg-8">
                        <p class="pre-wrap lead">Ruang Baca merupakan situs untuk melihat koleksi-koleksi buku yang dimiliki Ruang Baca, di situs ini, pengunjung juga bisa melihat data buku dengan lengkap dan juga membaca sinopsis buku.</p>
                    </div>
                    <div class="col-lg-2"></div>
                </div>
            </div>
        </section>
        <section class="page-section" id="contact">
            <div class="container">
                <!-- Contact Section Heading-->
                <div class="text-center">
                    <h2 class="page-section-heading text-secondary d-inline-block mb-0">CONTACT</h2>
                </div>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Contact Section Content-->
                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <div class="d-flex flex-column align-items-center">
                            <div class="icon-contact mb-3"><i class="fas fa-mobile-alt"></i></div>
                            <div class="text-muted">Phone</div>
                            <div class="lead font-weight-bold">0858-4302-0340</div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="d-flex flex-column align-items-center">
                            <div class="icon-contact mb-3"><i class="far fa-envelope"></i></div>
                            <div class="text-muted">Email</div><a class="lead font-weight-bold" href="mailto:farizaarifah@gmail.com">farizaarifah@gmail.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection