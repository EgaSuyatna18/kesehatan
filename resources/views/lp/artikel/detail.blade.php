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
               <h1 data-animation="fadeInUp" data-delay=".3s">Baca Artikel</h1>
               <p data-animation="fadeInUp" data-delay=".6s">{{ $artikel->judul }}</p>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>    
 </div>
</div>
<!-- Slider Area End -->
<!--? Blog Area Start -->
<section class="blog_area single-post-area section-padding">
 <div class="container">
  <div class="row">
   <div class="col-lg-8 posts-list">
    <div class="single-post">
     <div class="feature-img">
      <img class="img-fluid" src="{{ asset('storage/' . $artikel->foto) }}" alt="">
    </div>
    <div class="blog_details">
      <h2 style="color: #2d2d2d;">{{ $artikel->judul }}</h2>
     <ul class="blog-info-link mt-3 mb-4">
       <li><a href="#"><i class="fa fa-user"></i> {{ $artikel->user->name }}</a></li>
       <li><a href="#"><i class="fa fa-calendar"></i> {{ $artikel->created_at }}</a></li>
     </ul>
     <p class="excert">
       {!! $artikel->body !!}
     </p>
 </div>
</div>
<div class="navigation-top">
 
</div>
</div>
<div class="col-lg-4">
  <div class="blog_right_sidebar">
<aside class="single_sidebar_widget popular_post_widget">
  <h3 class="widget_title" style="color: #2d2d2d;">Recent Post</h3>
  @foreach ($recents as $recent)
                            
    <div class="media post_item">
        <img src="{{ asset('storage/' . $recent->foto) }}" class="w-25" alt="post">
        <div class="media-body">
            <a href="/home/artikel/{{ $recent->slug }}">
                <h3 style="color: #2d2d2d;">{{ substr($recent->judul, 0, 22) }}...</h3>
            </a>
            <p>{{ $recent->created_at }}</p>
        </div>
    </div>

    @endforeach

</aside>
</div>
</div>
</div>
</div>
</section>
<!-- Blog Area End -->
<!--? About Law Start-->
<section class="about-low-area mt-60">
 <div class="container">
   <div class="about-cap-wrapper">
     <div class="row">
       <div class="col-xl-5  col-lg-6 col-md-10 offset-xl-1">
         <div class="about-caption mb-50">
           <!-- Section Tittle -->
           <div class="section-tittle mb-35">
             <h2>Cek Resiko Penyakit Jantung.</h2>
           </div>
           <p>Sesaat setelah terjadi, penyesalan baru datang.</p>
           <a href="/jantung" class="border-btn">Cek Resiko Penyakit Jantung</a>
         </div>
       </div>
       <div class="col-lg-6 col-md-12">
         <!-- about-img -->
         <div class="about-img">
           <div class="about-font-img">
             <img src="assets/img/gallery/about2.png" alt="">
           </div>
         </div>
       </div>
     </div>
   </div>
 </div>
</section>
<!-- About Law End-->
</main>
@endsection