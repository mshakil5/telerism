@extends('frontend.layouts.master')
@section('content')



<main>

  <!-- slider Area Start-->
  <div class="slider-area ">
      <!-- Mobile Menu -->
      <div class="single-slider slider-height2 d-flex align-items-center" data-background="assets/img/hero/about.jpg">
          <div class="container">
              <div class="row">
                  <div class="col-xl-12">
                      <div class="hero-cap text-center">
                          <h2>About Us</h2>
                      </div>
                  </div>
              </div>
          </div>
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
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Support Company End-->

</main>
  @endsection