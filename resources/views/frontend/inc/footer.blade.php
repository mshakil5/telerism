<footer>
  <!-- Footer Start-->
  <div class="footer-area footer-padding footer-bg">
      <div class="container">
          <div class="row d-flex justify-content-between">
              <div class="col-xl-3 col-lg-3 col-md-5 col-sm-6">
                 <div class="single-footer-caption mb-50">
                   <div class="single-footer-caption mb-30">
                        <!-- logo -->
                       <div class="footer-logo">
                           <a href="{{ route('homepage')}}"><img src="{{asset('images/company/'.\App\Models\CompanyDetail::where('id','=',1)->first()->company_logo)}}" alt="" height="45px"></a>
                       </div>
                       <div class="footer-tittle">
                           <div class="footer-pera">
                               <p>{{\App\Models\CompanyDetail::where('id','=',1)->first()->footer_content}}</p>
                          </div>
                       </div>
                   </div>
                 </div>
              </div>
              <div class="col-xl-2 col-lg-3 col-md-3 col-sm-5">
                  <div class="single-footer-caption mb-50">
                      <div class="footer-tittle">
                          <h4>Menu</h4>
                          <ul>
                            <li><a href="#">Service</a></li>
                            <li><a href="#">Medical Tourism</a></li>
                            <li><a href="#">Student</a></li>
                            <li><a href="#">Visit Bangladesh</a></li>
                          </ul>
                      </div>
                  </div>
              </div>
              <div class="col-xl-3 col-lg-3 col-md-4 col-sm-7">
                  <div class="single-footer-caption mb-50">
                      <div class="footer-tittle">
                          <h4>New Products</h4>
                          <ul>
                              <li><a href="#">Woman Cloth</a></li>
                              <li><a href="#">Fashion Accessories</a></li>
                              <li><a href="#"> Man Accessories</a></li>
                              <li><a href="#"> Rubber made Toys</a></li>
                          </ul>
                      </div>
                  </div>
              </div>
              <div class="col-xl-3 col-lg-3 col-md-5 col-sm-7">
                  <div class="single-footer-caption mb-50">
                      <div class="footer-tittle">
                          <h4>Support</h4>
                          <ul>
                           <li><a href="#">Frequently Asked Questions</a></li>
                           <li><a href="#">Terms & Conditions</a></li>
                           <li><a href="#">Privacy Policy</a></li>
                           
                       </ul>
                      </div>
                  </div>
              </div>
          </div>
          <!-- Footer bottom -->
          <div class="row pt-padding">
           <div class="col-xl-7 col-lg-7 col-md-7">
              <div class="footer-copy-right">
                   <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved 
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
              </div>
           </div>
            <div class="col-xl-5 col-lg-5 col-md-5">
                  <!-- social -->
                  <div class="footer-social f-right">
                      <a href="#"><i class="fab fa-twitter"></i></a>
                      <a href="#"><i class="fab fa-facebook-f"></i></a>
                      <a href="#"><i class="fab fa-behance"></i></a>
                      <a href="#"><i class="fas fa-globe"></i></a>
                  </div>
           </div>
       </div>
      </div>
  </div>
  <!-- Footer End-->
</footer>