@extends('front.master')
@section('title','home')
@section('home-active','active')
@section('content')
    <!-- main-slider -->
  <section class="w3l-main-slider" id="home">
    <div class="banner-content">
      <div id="demo-1"
        data-zs-src='["{{asset('front-assets')}}/images/banner1.jpg", "{{asset('front-assets')}}/images/banner2.jpg","{{asset('front-assets')}}/images/banner3.jpg", "{{asset('front-assets')}}/images/banner4.jpg"]'
        data-zs-overlay="dots">
        <div class="demo-inner-content">
          <div class="container">
            <div class="banner-infhny">
              <h3>You don't need to go far to find what matters.</h3>
              <h6 class="mb-3">Discover your next adventure</h6>
              <div class="flex-wrap search-wthree-field mt-md-5 mt-4">
                <form action="#" method="post" class="booking-form">
                  <div class="row book-form">
                    <div class="form-input col-md-4 mt-md-0 mt-3">

                      <select name="selectpicker" class="selectpicker">
                        <option value="">Destinaion</option>
                        <option value="africa">Africa</option>
                        <option value="america">America</option>
                        <option value="asia">Asia</option>
                        <option value="eastern-europe">Eastern Europe</option>
                        <option value="europe">Europe</option>
                        <option value="south-america">South America</option>
                      </select>

                    </div>
                    <div class="form-input col-md-4 mt-md-0 mt-3">

                      <input type="date" name="" placeholder="Date" required="">
                    </div>
                    <div class="bottom-btn col-md-4 mt-md-0 mt-3">
                      <button class="btn btn-style btn-secondary"><span class="fa fa-search mr-3"
                          aria-hidden="true"></span> Search</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /main-slider -->
  <!-- //banner-slider-->

  <!--/grids-->
  <section class="w3l-grids-3 py-5">
    <div class="container py-md-5">
      <div class="title-content text-left mb-lg-5 mb-4">
        <h6 class="sub-title">Visit</h6>
        <h3 class="hny-title">Popular Destinations</h3>
      </div>
      <div class="row bottom-ab-grids">
  <!--/row-grids-->
        <div class="col-lg-6 subject-card mt-lg-0 mt-4">
          <div class="subject-card-header p-4">
            <a href="#" class="card_title p-lg-4d-block">
              <div class="row align-items-center">
                <div class="col-sm-5 subject-img">
                  <img src="{{asset('front-assets')}}/images/g1.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-sm-7 subject-content mt-sm-0 mt-4">
                  <h4>Paris</h4>
                  <p>3Days, 4 Nights</p>
                  <div class="dst-btm">
                    <h6 class=""> Start From </h6>
                    <span>$1650</span>
                  </div>
                  <p class="sub-para">Per person on twin sharing</p>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-lg-6 subject-card mt-lg-0 mt-4">
          <div class="subject-card-header p-4">
            <a href="#" class="card_title p-lg-4d-block">
              <div class="row align-items-center">
                <div class="col-sm-5 subject-img">
                  <img src="{{asset('front-assets')}}/images/g2.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-sm-7 subject-content mt-sm-0 mt-4">
                  <h4>Bankok</h4>
                  <p>3Days, 4 Nights</p>
                  <div class="dst-btm">
                    <h6 class=""> Start From </h6>
                    <span>$1850</span>
                  </div>
                  <p class="sub-para">Per person on twin sharing</p>
                </div>
              </div>
            </a>
          </div>
        </div>
          <!--//row-grids-->
            <!--/row-grids-->
        <div class="col-lg-6 subject-card mt-4">
          <div class="subject-card-header p-4">
            <a href="#" class="card_title p-lg-4d-block">
              <div class="row align-items-center">
                <div class="col-sm-5 subject-img">
                  <img src="{{asset('front-assets')}}/images/g3.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-sm-7 subject-content mt-sm-0 mt-4">
                  <h4>Maldives</h4>
                  <p>3Days, 4 Nights</p>
                  <div class="dst-btm">
                    <h6 class=""> Start From </h6>
                    <span>$1350</span>
                  </div>
                  <p class="sub-para">Per person on twin sharing</p>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-lg-6 subject-card mt-4">
          <div class="subject-card-header p-4">
            <a href="#" class="card_title p-lg-4d-block">
              <div class="row align-items-center">
                <div class="col-sm-5 subject-img">
                  <img src="{{asset('front-assets')}}/images/g4.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-sm-7 subject-content mt-sm-0 mt-4">
                  <h4>Greece</h4>
                  <p>3Days, 4 Nights</p>
                  <div class="dst-btm">
                    <h6 class=""> Start From </h6>
                    <span>$1650</span>
                  </div>
                  <p class="sub-para">Per person on twin sharing</p>
                </div>
              </div>
            </a>
          </div>
        </div>
          <!--//row-grids-->
            <!--/row-grids-->
        <div class="col-lg-6 subject-card mt-4">
          <div class="subject-card-header p-4">
            <a href="#" class="card_title p-lg-4d-block">
              <div class="row align-items-center">
                <div class="col-sm-5 subject-img">
                  <img src="{{asset('front-assets')}}/images/g5.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-sm-7 subject-content mt-sm-0 mt-4">
                  <h4>London</h4>
                  <p>3Days, 4 Nights</p>
                  <div class="dst-btm">
                    <h6 class=""> Start From </h6>
                    <span>$1750</span>
                  </div>
                  <p class="sub-para">Per person on twin sharing</p>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-lg-6 subject-card mt-4">
          <div class="subject-card-header p-4">
            <a href="#" class="card_title p-lg-4d-block">
              <div class="row align-items-center">
                <div class="col-sm-5 subject-img">
                  <img src="{{asset('front-assets')}}/images/g6.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-sm-7 subject-content mt-sm-0 mt-4">
                  <h4>Julian Alps</h4>
                  <p>3Days, 4 Nights</p>
                  <div class="dst-btm">
                    <h6 class=""> Start From </h6>
                    <span>$1950</span>
                  </div>
                  <p class="sub-para">Per person on twin sharing</p>
                </div>
              </div>
            </a>
          </div>
        </div>
          <!--//row-grids-->
                  <!--/row-grids-->
        <div class="col-lg-6 subject-card mt-4">
          <div class="subject-card-header p-4">
            <a href="#" class="card_title p-lg-4d-block">
              <div class="row align-items-center">
                <div class="col-sm-5 subject-img">
                  <img src="{{asset('front-assets')}}/images/g7.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-sm-7 subject-content mt-sm-0 mt-4">
                  <h4>Thailand</h4>
                  <p>3Days, 4 Nights</p>
                  <div class="dst-btm">
                    <h6 class=""> Start From </h6>
                    <span>$1750</span>
                  </div>
                  <p class="sub-para">Per person on twin sharing</p>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-lg-6 subject-card mt-4">
          <div class="subject-card-header p-4">
            <a href="#" class="card_title p-lg-4d-block">
              <div class="row align-items-center">
                <div class="col-sm-5 subject-img">
                  <img src="{{asset('front-assets')}}/images/g8.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-sm-7 subject-content mt-sm-0 mt-4">
                  <h4>Singapore</h4>
                  <p>3Days, 4 Nights</p>
                  <div class="dst-btm">
                    <h6 class=""> Start From </h6>
                    <span>$1950</span>
                  </div>
                  <p class="sub-para">Per person on twin sharing</p>
                </div>
              </div>
            </a>
          </div>
        </div>
          <!--//row-grids-->
      </div>
    </div>
  </section>
  <!--//grids-->


  <!--/w3l-bottom-->
  <section class="w3l-bottom py-5">
    <div class="container py-md-4 py-3 text-center">
      <div class="row my-lg-4 mt-4">
        <div class="col-lg-9 col-md-10 ml-auto">
          <div class="bottom-info ml-auto">
            <div class="header-section text-left">
              <h3 class="hny-title two">Traveling makes a man wiser, but less happy.</h3>
              <p class="mt-3 pr-lg-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit beatae laudantium
                voluptate rem ullam dolore nisi voluptatibus esse quasi. Integer sit amet .Lorem ipsum dolor sit
                amet adipisicing elit.</p>
              <a href="about.html" class="btn btn-style btn-secondary mt-5">Read More</a>
            </div>
           

          </div>
        </div>
      </div>
    </div>
  </section>
  <!--//w3l-bottom-->
@endsection