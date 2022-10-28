

  <header>
    <!-- Header Start -->
   <div class="header-area">
        <div class="main-header ">
            <div class="header-top top-bg d-none d-lg-block">
               <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-8">
                        <div class="header-info-left">
                            <ul>                          
                                <li><i class="ti-email"></i>{{\App\Models\CompanyDetail::where('id','=',1)->first()->email1}}</li>
                                <li><i class="ti-tablet"></i>+{{\App\Models\CompanyDetail::where('id','=',1)->first()->phone1}}</li>
                                <li><i class="ti-home"></i>{{\App\Models\CompanyDetail::where('id','=',1)->first()->address}}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="header-info-right f-right">
                            <ul class="header-social">    
                                <li><a href="https://{{\App\Models\CompanyDetail::where('id','=',1)->first()->instagram}}" target="blank"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="https://{{\App\Models\CompanyDetail::where('id','=',1)->first()->linkedin}}" target="blank"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="https://{{\App\Models\CompanyDetail::where('id','=',1)->first()->facebook}}" target="blank"><i class="fab fa-facebook-f"></i></a></li>
                            </ul>
                        </div>
                    </div>
                   </div>
               </div>
            </div>
           <div class="header-bottom  header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2 col-md-1">
                            <div class="logo">
                              <a href="{{ route('homepage')}}"><img src="{{asset('images/company/'.\App\Models\CompanyDetail::where('id','=',1)->first()->company_logo)}}" alt="" style="height: 37px"></a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-10">
                            <!-- Main-menu -->
                            <div class="main-menu f-right d-none d-lg-block">
                                <nav>               
                                    <ul id="navigation">                                   
                                        <li><a href="{{ route('homepage')}}">Home</a>
                                            <ul class="submenu">
                                                <li><a href="{{ route('frontend.about')}}">About Us</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Service</a></li>
                                        <li><a href="{{ route('medicaltourism')}}">Medical Tourism</a></li>
                                        <li><a href="{{ route('student')}}">Student</a></li>
                                        <li><a href="{{ route('visitbd')}}">Visit Bangladesh</a></li>
                                        {{-- <li><a href="{{ route('frontend.blog')}}">Blog</a>
                                            <ul class="submenu">
                                                <li><a href="{{ route('frontend.blog')}}">Blog</a></li>
                                                <li><a href="{{ route('frontend.blog')}}">Blog Details</a></li>
                                            </ul>
                                        </li> --}}
                                        {{-- <li><a href="#">Pages</a>
                                            <ul class="submenu">
                                                <li><a href="elements.html">Element</a></li>
                                            </ul>
                                        </li> --}}
                                        <li><a href="{{ route('frontend.contact')}}">Contact Us</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
           </div>
        </div>
   </div>
    <!-- Header End -->
</header>