       @extends('layouts.app')

       @section('content')
       <!-- ABOUT US -->
       <section class="site-section about-us-section" id="about-us-section">
           <div class="container">

               <div class="row mb-5 pt-0 site-section">
                   <div class="col-md-6 align-self-center">
                       <h3 class="section-title-sub text-primary">About Us</h3>
                       <h2 class="section-title mb-4">Who We Are </h2>

                       <p>We are students in ITI ALexandria branch </p>
                       <p>we loved to help people to know all possible information about the career they chose ,
                         so we developed this web app and We hope our users will be happy with our site app </p>
                   </div>
                   <div class="col-md-5 ml-auto img-overlap">
                       <div class="img-1"><img src="images/logo.png" alt="Image" class="img-fluid img-shadow"></div>
                   </div>
               </div>

               <div class="row pb-0 border-top pt-5 block__19738 section-counter">

                   <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
                       <div class="d-flex align-items-center justify-content-center mb-2">
                           <span class="icon-line-mobile mr-3"></span>
                           <strong class="number" data-number="{{App\Career::count()}}">0</strong>
                       </div>
                       <span class="caption">Careers provided </span>
                   </div>

                   <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
                       <div class="d-flex align-items-center justify-content-center mb-2">
                           <span class="icon-line-mobile mr-3"></span>
                           <strong class="number" data-number="{{App\Category::count()}}">0</strong>
                       </div>
                       <span class="caption">Categories provided </span>
                   </div>

                   <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
                       <div class="d-flex align-items-center justify-content-center mb-2">
                           <span class="icon-line-puzzle mr-3"></span>
                           <strong class="number" data-number="{{App\Content::count()}}">0</strong>
                       </div>
                       <span class="caption">Contents provided </span>
                   </div>

                   

                   <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
                       <div class="d-flex align-items-center justify-content-center mb-2">
                           <span class="icon-line-trophy mr-3"></span>
                           <strong class="number" data-number="{{App\User::count()}}">0</strong>
                       </div>
                       <span class="caption">Number of Users</span>
                   </div>
               </div>

           </div>
       </section>

       <!-- SERVICES -->
       <section class="site-section services-section bg-light block__62849" id="services-section">
           <div class="container">
               <div class="row mb-5">
                   <div class="col-12 text-center" data-aos="fade">
                       <h3 class="section-title-sub text-primary">Our Services</h3>
                       <h2 class="section-title mb-3">Services</h2>
                   </div>
               </div>
               <div class="row">
                   <div class="col-6 col-md-6 col-lg-4 mb-4 mb-lg-5">

                       <a href="/home" class="block__16443 text-center d-block">
                           <span class="custom-icon mx-auto"><span class="icon-line-laptop d-block"></span></span>
                           <h3>Know the career</h3>
                           <p>know more about the chosen caree in simple navigation and brief  in our app</p>
                       </a>

                   </div>
                   <div class="col-6 col-md-6 col-lg-4 mb-4 mb-lg-5">

                       <a href="/mindmaps" class="block__16443 text-center d-block">
                           <span class="custom-icon mx-auto"><span class="icon-line-laptop d-block"></span></span>
                           <h3>Career Mindmap </h3>
                           <p>Our mindmaps make it easy to know what the career fields and technologies used in</p>
                       </a>

                   </div>
                   <div class="col-6 col-md-6 col-lg-4 mb-4 mb-lg-5">

                       <a href="/home" class="block__16443 text-center d-block">
                           <span class="custom-icon mx-auto"><span class="icon-line-laptop d-block"></span></span>
                           <h3>Important links to learn</h3>
                           <p>Inside each content we put the most important links to learn the technology you want</p>
                       </a>

                   </div>   
               </div>
           </div>
       </section>

       <section class="site-section" id="next-section">
           <div class="container">
               <div class="row align-items-center">
                   <div class="col-lg-6 mb-5 mb-lg-0">
                       <a data-fancybox data-ratio="2" href="https://vimeo.com/317571768" class="block__96788">
                           <span class="play-icon"><span class="icon-play"></span></span>
                           <img src="images/sq_img_6.jpg" alt="Image" class="img-fluid img-shadow">
                       </a>
                   </div>
                   <div class="col-lg-5 ml-auto">
                       <h3 class="section-title-sub text-primary">Watch the video</h3>
                       <h2 class="section-title mb-3">We Are Careery</h2>
                       <p class="lead">In this video our web app life cycle & main functions</p>
                   </div>
               </div>
           </div>
       </section>

       @endsection