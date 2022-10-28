@extends('frontend.layouts.master')

@section('css')
@endsection

@section('content')

<main>

  <!-- slider Area Start-->
  <div class="slider-area ">

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            @foreach (\App\Models\Slider::orderby('id','DESC')->where('status','=', 1)->get() as $key => $item)
          <li data-target="#carouselExampleIndicators" data-slide-to="{{$key}}" class="{{ $key==0 ? 'active' : '' }}"></li>
          @endforeach
        </ol>
        <div class="carousel-inner">
           @foreach (\App\Models\Slider::orderby('id','DESC')->where('status','=', 1)->get() as $key => $item)
          <div class="carousel-item {{ $key==0 ? 'active' : '' }}">
            <img class="d-block w-100" src="{{asset('frontend/slider/'.$item->photo)}}" alt="First slide">
          </div>
          @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <!-- slider Area End-->

      <!-- Support Company Start-->
  <div class="support-company-area support-padding fix">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6">
                <div class="support-location-img mb-50">
                    <img src="{{asset('images/thumbnail/'.\App\Models\About::where('id','=',1)->first()->image)}}" alt="">
                    {{-- <div class="support-img-cap">
                        <span>Since 1992</span>
                    </div> --}}
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="right-caption">
                    <!-- Section Tittle -->
                    <div class="section-tittle section-tittle2">
                        <span>About Our Company</span>
                        <h2>{{\App\Models\About::where('id','=',1)->first()->title}}</h2>
                    </div>
                    <div class="support-caption">
                        <p>{!!\App\Models\About::where('id','=',1)->first()->description !!}</p>
                        
                        <a href="{{ route('frontend.about')}}" class="btn border-btn">About us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Support Company End-->

  <!-- Favourite Places Start -->
  <div class="favourite-place">
      <div class="container">
          <!-- Section Tittle -->
          <div class="row">
              <div class="col-lg-12">
                  <div class="section-tittle text-center">
                      <span></span>
                      <h2>Medical Tourism</h2>
                  </div>
              </div>
          </div>

          <div class="row">
            @foreach (\App\Models\Service::where('category_id','=', 17)->orderby('id','DESC')->get() as $medical)
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="single-place mb-30">
                        <div class="place-img">
                            <img src="{{asset('images/thumbnail/'.$medical->image)}}" alt="">
                        </div>
                        <div class="place-cap">
                            <div class="place-cap-top">
                                <h3><a href="{{ route('serviceDetails',$medical->id)}}">{{$medical->title}}</a></h3>
                                <p class="dolor">${{$medical->amount}} <span>/ Per Person</span></p>
                            </div>
                            <div class="place-cap-bottom">
                                <ul>
                                    <li><i class="fas fa-map-marker-alt"></i>{{$medical->place}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
          </div>
      </div>
  </div>
  <!-- Favourite Places End -->

    <!-- Favourite Places Start -->
    <div class="favourite-place">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle text-center">
                        <span></span>
                        <h2>Student Visa</h2>
                    </div>
                </div>
            </div>
  
            <div class="row">
              @foreach (\App\Models\Service::where('category_id','=', 18)->orderby('id','DESC')->get() as $student)
                  <div class="col-xl-3 col-lg-4 col-md-6">
                      <div class="single-place mb-30">
                          <div class="place-img">
                              <img src="{{asset('images/thumbnail/'.$student->image)}}" alt="">
                          </div>
                          <div class="place-cap">
                              <div class="place-cap-top">
                                  <h3><a href="{{ route('serviceDetails',$student->id)}}">{{$student->title}}</a></h3>
                                  <p class="dolor">${{$student->amount}} <span>/ Per Person</span></p>
                              </div>
                              <div class="place-cap-bottom">
                                  <ul>
                                      <li><i class="fas fa-map-marker-alt"></i>{{$student->place}}</li>
                                  </ul>
                              </div>
                          </div>
                      </div>
                  </div>
              @endforeach
            </div>
        </div>
    </div>
    <!-- Favourite Places End -->

    <!-- Favourite Places Start -->
    <div class="favourite-place">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle text-center">
                        <span></span>
                        <h2>Visit Bangladesh</h2>
                    </div>
                </div>
            </div>
  
            <div class="row">
              @foreach (\App\Models\Service::where('category_id','=', 19)->orderby('id','DESC')->get() as $vbd)
                  <div class="col-xl-3 col-lg-4 col-md-6">
                      <div class="single-place mb-30">
                          <div class="place-img">
                              <img src="{{asset('images/thumbnail/'.$vbd->image)}}" alt="">
                          </div>
                          <div class="place-cap">
                              <div class="place-cap-top">
                                  <h3><a href="{{ route('serviceDetails',$vbd->id)}}">{{$vbd->title}}</a></h3>
                                  <p class="dolor">${{$vbd->amount}} <span>/ Per Person</span></p>
                              </div>
                              <div class="place-cap-bottom">
                                  <ul>
                                      <li><i class="fas fa-map-marker-alt"></i>{{$vbd->place}}</li>
                                  </ul>
                              </div>
                          </div>
                      </div>
                  </div>
              @endforeach
            </div>
        </div>
    </div>
    <!-- Favourite Places End -->


 
  <!-- Blog Area Start -->
  <div class="home-blog-area section-padding">
      <div class="container">
          <!-- Section Tittle -->
          <div class="row">
              <div class="col-lg-12">
                  <div class="section-tittle text-center">
                      <span>Our Recent news</span>
                      <h2>Tourist Blog</h2>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-xl-4 col-lg-4 col-md-4">
                  <div class="home-blog-single mb-30">
                      <div class="blog-img-cap">
                          <div class="blog-img">
                              <img src="assets/img/blog/home-blog1.jpg" alt="">
                          </div>
                          <div class="blog-cap">
                              <p> |   Traveling</p>
                              <h3><a href="single-blog.html">Tips For Taking A Long-Term Trip With Kids.</a></h3>
                              <a href="#" class="more-btn">Read more »</a>
                          </div>
                      </div>
                      
                  </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-4">
                  <div class="home-blog-single mb-30">
                      <div class="blog-img-cap">
                          <div class="blog-img">
                              <img src="assets/img/blog/home-blog2.jpg" alt="">
                          </div>
                          <div class="blog-cap">
                              <p> |   Traveling</p>
                              <h3><a href="single-blog.html">Tips For Taking A Long-Term Trip With Kids.</a></h3>
                              <a href="#" class="more-btn">Read more »</a>
                          </div>
                      </div>
                      
                  </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-4">
                <div class="home-blog-single mb-30">
                    <div class="blog-img-cap">
                        <div class="blog-img">
                            <img src="assets/img/blog/home-blog2.jpg" alt="">
                        </div>
                        <div class="blog-cap">
                            <p> |   Traveling</p>
                            <h3><a href="single-blog.html">Tips For Taking A Long-Term Trip With Kids.</a></h3>
                            <a href="#" class="more-btn">Read more »</a>
                        </div>
                    </div>
                    
                </div>
            </div>
          </div>
      </div>
  </div>
  <!-- Blog Area End -->

</main>



@endsection

@section('scripts')
@endsection