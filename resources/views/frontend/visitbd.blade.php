@extends('frontend.layouts.master')
@section('content')

    
  <!-- slider Area Start-->
  <div class="slider-area ">
    <!-- Mobile Menu -->
    <div class="single-slider slider-height2 d-flex align-items-center" data-background="assets/img/hero/about.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center">
                        <h2>Visit Bangladesh</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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
            <div class="col-xl-4 col-lg-4 col-md-6">
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


@endsection