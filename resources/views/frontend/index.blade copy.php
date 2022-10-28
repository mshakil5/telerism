@extends('frontend.layouts.master')
@section('content')


<main>

  <!-- slider Area Start-->
  <div class="slider-area ">
      <!-- Mobile Menu -->
      <div class="slider-active">
          <div class="single-slider hero-overly  slider-height d-flex align-items-center" data-background="assets/img/hero/h1_hero.jpg">
              <div class="container">
                  <div class="row">
                      <div class="col-xl-9 col-lg-9 col-md-9">
                          <div class="hero__caption">
                              <h1>Find your <span>Next tour!</span> </h1>
                              <p>Where would you like to go?</p>
                          </div>
                      </div>
                  </div>
                  <!-- Search Box -->
                  {{-- <div class="row">
                      <div class="col-xl-12">
                          <!-- form -->
                          <form action="#" class="search-box">
                              <div class="input-form mb-30">
                                  <input type="text" placeholder="When Would you like to go ?">
                              </div>
                              <div class="select-form mb-30">
                                  <div class="select-itms">
                                      <select name="select" id="select1">
                                          <option value="">When</option>
                                          <option value="">Services-1</option>
                                          <option value="">Services-2</option>
                                          <option value="">Services-3</option>
                                      </select>
                                  </div>
                              </div>
                              <div class="search-form mb-30">
                                  <a href="#">Search</a>
                              </div>	
                          </form>	
                      </div>
                  </div> --}}
              </div>
          </div>
      </div>
  </div>
  <!-- slider Area End-->
  
  <!-- Favourite Places Start -->
  <div class="favourite-place">
      <div class="container">
          <!-- Section Tittle -->
          <div class="row">
              <div class="col-lg-12">
                  <div class="section-tittle text-center">
                      <span></span>
                      <h2>Favourite Places</h2>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-xl-4 col-lg-4 col-md-6">
                  <div class="single-place mb-30">
                      <div class="place-img">
                          <img src="assets/img/service/services1.jpg" alt="">
                      </div>
                      <div class="place-cap">
                          <div class="place-cap-top">
                              <h3><a href="#">The Dark Forest Adventure</a></h3>
                              <p class="dolor">$1870 <span>/ Per Person</span></p>
                          </div>
                          <div class="place-cap-bottom">
                              <ul>
                                  <li><i class="fas fa-map-marker-alt"></i>Los Angeles</li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-6">
                  <div class="single-place mb-30">
                      <div class="place-img">
                          <img src="assets/img/service/services2.jpg" alt="">
                      </div>
                      <div class="place-cap">
                          <div class="place-cap-top">
                              <h3><a href="#">The Dark Forest Adventure</a></h3>
                              <p class="dolor">$1870 <span>/ Per Person</span></p>
                          </div>
                          <div class="place-cap-bottom">
                              <ul>
                                  <li><i class="fas fa-map-marker-alt"></i>Los Angeles</li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-6">
                  <div class="single-place mb-30">
                      <div class="place-img">
                          <img src="assets/img/service/services3.jpg" alt="">
                      </div>
                      <div class="place-cap">
                          <div class="place-cap-top">
                              <h3><a href="#">The Dark Forest Adventure</a></h3>
                              <p class="dolor">$1870 <span>/ Per Person</span></p>
                          </div>
                          <div class="place-cap-bottom">
                              <ul>
                                  <li><i class="fas fa-map-marker-alt"></i>Los Angeles</li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-6">
                  <div class="single-place mb-30">
                      <div class="place-img">
                          <img src="assets/img/service/services4.jpg" alt="">
                      </div>
                      <div class="place-cap">
                          <div class="place-cap-top">
                              <h3><a href="#">The Dark Forest Adventure</a></h3>
                              <p class="dolor">$1870 <span>/ Per Person</span></p>
                          </div>
                          <div class="place-cap-bottom">
                              <ul>
                                  <li><i class="fas fa-map-marker-alt"></i>Los Angeles</li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-6">
                  <div class="single-place mb-30">
                      <div class="place-img">
                          <img src="assets/img/service/services5.jpg" alt="">
                      </div>
                      <div class="place-cap">
                          <div class="place-cap-top">
                              <h3><a href="#">The Dark Forest Adventure</a></h3>
                              <p class="dolor">$1870 <span>/ Per Person</span></p>
                          </div>
                          <div class="place-cap-bottom">
                              <ul>
                                  <li><i class="fas fa-map-marker-alt"></i>Los Angeles</li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-6">
                  <div class="single-place mb-30">
                      <div class="place-img">
                          <img src="assets/img/service/services6.jpg" alt="">
                      </div>
                      <div class="place-cap">
                          <div class="place-cap-top">
                              <h3><a href="#">The Dark Forest Adventure</a></h3>
                              <p class="dolor">$1870 <span>/ Per Person</span></p>
                          </div>
                          <div class="place-cap-bottom">
                              <ul>
                                  <li><i class="fas fa-map-marker-alt"></i>Los Angeles</li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Favourite Places End -->

  <!-- Support Company Start-->
  <div class="support-company-area support-padding fix">
      <div class="container">
          <div class="row align-items-center">
              <div class="col-xl-6 col-lg-6">
                  <div class="support-location-img mb-50">
                      <img src="assets/img/service/support-img.jpg" alt="">
                      <div class="support-img-cap">
                          <span>Since 1992</span>
                      </div>
                  </div>
              </div>
              <div class="col-xl-6 col-lg-6">
                  <div class="right-caption">
                      <!-- Section Tittle -->
                      <div class="section-tittle section-tittle2">
                          <span>About Our Company</span>
                          <h2>We are Go Trip <br>Ravels Support Company</h2>
                      </div>
                      <div class="support-caption">
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
                          <div class="select-suport-items">
                              <label class="single-items">Lorem ipsum dolor sit amet
                                  <input type="checkbox" checked="checked active">
                                  <span class="checkmark"></span>
                              </label>
                              <label class="single-items">Consectetur adipisicing sed do
                                  <input type="checkbox" checked="checked active">
                                  <span class="checkmark"></span>
                              </label>
                              <label class="single-items">Eiusmod tempor incididunt
                                  <input type="checkbox" checked="checked active">
                                  <span class="checkmark"></span>
                              </label>
                              <label class="single-items">Ad minim veniam, quis nostrud.
                                  <input type="checkbox" checked="checked active">
                                  <span class="checkmark"></span>
                              </label>
                          </div>
                          <a href="#" class="btn border-btn">About us</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Support Company End-->
 
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