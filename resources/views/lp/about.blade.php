@extends('lp.layout.master')
@section('content')
<main>
        <!--? Slider Area Start-->
        <div class="slider-area slider-area2">
            <div class="slider-active dot-style">
                <!-- Slider Single -->
                <div class="single-slider  d-flex align-items-center slider-height2">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-7 col-lg-8 col-md-10 ">
                             <div class="hero-wrapper">
                                <div class="hero__caption">
                                    <h1 data-animation="fadeInUp" data-delay=".3s">About</h1>
                                    <p data-animation="fadeInUp" data-delay=".6s">Siapa Kami? Website Apa Ini? <br> Halaman Ini Akan Menjelaskanya.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
        </div>
    </div>
    <!-- Slider Area End -->
    <!--? Team Area Start-->
    <section class="team-area pb-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="single-cat text-center mb-30">
                        <div class="cat-icon">
                            <img src="assets/img/laravel.png" class="w-100" style="max-width: 300px; max-height: 250px;" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="#">Laravel 10</a></h5>
                            <p>Laravel merupakan framework PHP yang open-source dan berisi banyak modul dasar untuk mengoptimalkan kinerja PHP dalam pengembangan aplikasi web.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="single-cat text-center mb-30">
                        <div class="cat-icon">
                            <img src="assets/img/bootstrap.jpeg" class="w-100" style="max-width: 300px; max-height: 250px;" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="#">Bootstrap 5</a></h5>
                            <p>Bootstrap adalah framework front-end gratis dan open-source yang dikembangkan oleh Mark Otto dan Jacob Thornton yang keduanya merupakan tim developer dari Twitter pada 2011.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="single-cat text-center mb-30">
                        <div class="cat-icon">
                            <img src="assets/img/mysql.png" class="w-100" style="max-width: 300px; max-height: 250px;" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="#">MySQL</a></h5>
                            <p>MySQL adalah open-source relational database management system (RDBMS) yang digunakan untuk mengelola database suatu website, oleh Michael "Monty" Widenius.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--? Team End-->
    <!-- Services End-->
    <!--? About-2 Area Start -->
    <div class="about-area2 section-padding40">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-12">
                    <!-- about-img -->
                    <div class="about-img ">
                        <img src="/assets/hc/assets/img/logo/loder.png" class="w-50" alt="">
                    </div>
                </div>
                <div class="col-lg-5 col-md-12">
                    <div class="about-caption mb-50">
                        <!-- Section Tittle -->
                        <div class="section-tittle mb-35">
                            <h2>Apa Itu Prediksi Penyakit Jantung?</h2>
                        </div>
                        <p class="pera-top mb-40">Sebuah metode perhitungan melalui skor.</p>
                        <p class="pera-bottom mb-30">Skor dihitung melalui berberapa variable yang
                            akan ditanyakan kepada user.
                        </p>
                 </div>
             </div>
             <div class="row align-items-center">
                <div class="col-lg-5 col-md-12">
                    <div class="about-caption mb-50">
                        <!-- Section Tittle -->
                        <div class="section-tittle mb-35">
                            <h2>Bagaimana Aplikasi Ini Bekerja?</h2>
                        </div>
                        <p class="pera-top mb-40">Dengan memasukan data yang ada pada form.</p>
                        <p class="pera-bottom mb-30">User akan diminta untuk memasukan berberapa
                            data yang di sediakan form, setelah data lengkap aplikasi akan memberikan
                            skor kemungkinan resiko penyakit jantung.</p>
                    </div>
                </div>

                 <div class="col-lg-7 col-md-12">
                    <!-- about-img -->
                    <div class="about-img ">
                        <img src="/assets/img/jantung1.jpg" class="w-50 d-block ml-auto" alt="">
                    </div>
                </div>
         <div class="row align-items-center">
                <div class="col-lg-7 col-md-12">
                    <!-- about-img -->
                    <div class="about-img ">
                        <img src="/assets/img/jantung2.jpeg" class="w-50" alt="">
                    </div>
                </div>
                <div class="col-lg-5 col-md-12">
                    <div class="about-caption mb-50">
                        <!-- Section Tittle -->
                        <div class="section-tittle mb-35">
                            <h2>Apakah Aplikasi Ini Akurat?</h2>
                        </div>
                        <p class="pera-top mb-40">Perhitungan didapatkan dari para ahli</p>
                        <p class="pera-bottom mb-30">Skor dihitung melalui berberapa variable yang
                            akan ditanyakan kepada user.
                        </p>
                 </div>
             </div>
         <div class="row align-items-center">
                <div class="col-lg-5 col-md-12">
                    <div class="about-caption mb-50">
                        <!-- Section Tittle -->
                        <div class="section-tittle mb-35">
                            <h2>Apakah Aplikasi Pengguna Aman?</h2>
                        </div>
                        <p class="pera-top mb-40">Data user hanya digunakan pada website ini</p>
                        <p class="pera-bottom mb-30">Data yang dimasukan user pada website ini
                            hanya akan digunakan pada website ini dan tidak akan diperjual belikan.</p>
                    </div>
                </div>

                 <div class="col-lg-7 col-md-12">
                    <!-- about-img -->
                    <div class="about-img ">
                        <img src="/assets/img/jantung3.jpg" class="w-50 d-block ml-auto" alt="">
                    </div>
                </div>
     </div>
 </div>
 <!--? Testimonial Area Start -->
 <section class="testimonial-area testimonial-padding fix">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class=" col-lg-9">
                <div class="about-caption">
                    <!-- Testimonial Start -->
                    <div class="h1-testimonial-active dot-style">
                        <!-- Single Testimonial -->
                        <div class="single-testimonial position-relative">
                            <div class="testimonial-caption">
                                <img src="/assets/hc/assets/img/icon/quotes-sign.png" alt="" class="quotes-sign">
                                <p>""Jantung adalah pemompa kehidupan, mengalirkan cinta dan kekuatan ke seluruh tubuh kita."</p>
                            </div>
                        </div>
                        <!-- Single Testimonial -->
                        <div class="single-testimonial position-relative">
                            <div class="testimonial-caption">
                                <img src="/assets/hc/assets/img/icon/quotes-sign.png" alt="" class="quotes-sign">
                                <p>"Dalam detak jantung, kita merasakan irama kehidupan yang terus berlanjut, mengingatkan kita akan berharganya setiap detik yang kita miliki."</p>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial End -->
                </div>
            </div>
        </div>
    </div>
</section>
<!--? Testimonial Area End -->
</main>
@endsection