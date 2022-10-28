@extends('frontend.layouts.master')
@section('content')

    
   <!-- slider Area Start-->
   <div class="slider-area ">
    <!-- Mobile Menu -->
    {{-- <div class="single-slider slider-height2 d-flex align-items-center" data-background="{{asset('images/thumbnail/'.$service->banner_image)}}">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center">
                        <h2>{{ $service->title }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </div> --}}
 <!-- slider Area End-->

  <!--================Blog Area =================-->
  <section class="blog_area single-post-area section-padding">
    <div class="container">
       <div class="row">
          <div class="col-lg-8 posts-list">
             <div class="single-post">
                <div class="feature-img">
                   <img class="img-fluid" src="{{asset('images/thumbnail/'.$service->image)}}" alt="">
                </div>
                <div class="blog_details">
                   <h2>{{ $service->title }}</h2>
                   
                   {!! $service->description !!}

                </div>
             </div>
             
             
             
             
          </div>
          <div class="col-lg-4">
             <div class="blog_right_sidebar">
                <aside class="single_sidebar_widget popular_post_widget">
                   {{-- <h3 class="widget_title">Recent Post</h3>

                   <div class="media post_item">
                      <img src="assets/img/post/post_1.png" alt="post">
                      <div class="media-body">
                         <a href="single-blog.html">
                            <h3>From life was you fish...</h3>
                         </a>
                         <p>January 12, 2019</p>
                      </div>
                   </div> --}}

                </aside>
                
             </div>
          </div>
       </div>
    </div>
 </section>
 <!--================ Blog Area end =================-->

@endsection