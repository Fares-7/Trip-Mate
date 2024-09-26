@extends('front.master')
@section('title','destination')
@section('destination-active','active')
@include('front.partials.hero' , ['title' => 'Destination'])
@section('content')


 <!--  Work gallery section -->
 <section class="grids-1 py-5">
  <div class="grids py-lg-5 py-md-4">
      <div class="container">
          <h3 class="hny-title mb-5">Destinations</h3>
          <div class="row">
              <div class="col-lg-4 col-md-4 col-6">
                  <div class="column">
                      <a href="blog-single.html"><img src="{{asset('front-assets')}}/images/g1.jpg" alt="" class="img-fluid"></a>
                      <div class="info">
                          <h4><a href="blog-single.html">Paris</a></h4>
                          <p>3Days, 4 Nights </p>
                          <div class="dst-btm">
                            <h6 class="">Start From </h6>
                            <span>$1750</span>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-md-4 col-6 mt-md-0">
                  <div class="column">
                      <a href="blog-single.html"><img src="{{asset('front-assets')}}/images/g2.jpg" alt="" class="img-fluid"></a>
                      <div class="info">
                          <h4><a href="blog-single.html">Bankok</a></h4>
                          <p>3Days, 4 Nights </p>
                          <div class="dst-btm">
                            <h6 class="">Start From </h6>
                            <span>$1690</span>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-md-4 col-6 mt-md-0 mt-4">
                  <div class="column">
                      <a href="blog-single.html"><img src="{{asset('front-assets')}}/images/g3.jpg" alt="" class="img-fluid"></a>
                      <div class="info">
                          <h4><a href="blog-single.html">Maldives</a></h4>
                          <p>3Days, 4 Nights </p>
                          <div class="dst-btm">
                            <h6 class="">Start From </h6>
                            <span>$1650</span>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-md-4 col-6 mt-lg-5 mt-4">
                  <div class="column">
                      <a href="blog-single.html"><img src="{{asset('front-assets')}}/images/g4.jpg" alt="" class="img-fluid"></a>
                      <div class="info">
                          <h4><a href="blog-single.html">Greece</a></h4>
                          <p>3Days, 4 Nights</p>
                          <div class="dst-btm">
                            <h6 class=""> Start From </h6>
                            <span>$1950</span>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-md-4 col-6 mt-lg-5 mt-4">
                  <div class="column">
                      <a href="blog-single.html"><img src="{{asset('front-assets')}}/images/g5.jpg" alt="" class="img-fluid"></a>
                      <div class="info">
                          <h4><a href="blog-single.html">London</a></h4>
                          <p>3Days, 4 Nights</p>
                          <div class="dst-btm">
                            <h6 class=""> Start From </h6>
                            <span>$1850</span>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-md-4 col-6 mt-lg-5 mt-4">
                  <div class="column">
                      <a href="blog-single.html"><img src="{{asset('front-assets')}}/images/g6.jpg" alt="" class="img-fluid"></a>
                      <div class="info">
                          <h4><a href="blog-single.html">Julian Alps</a></h4>
                          <p>3Days, 4 Nights</p>
                          <div class="dst-btm">
                          <h6 class=""> Start From </h6>
                          <span>$1750</span>
                        </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-md-4 col-6 mt-lg-5 mt-4">
                <div class="column">
                    <a href="blog-single.html"><img src="{{asset('front-assets')}}/images/g7.jpg" alt="" class="img-fluid"></a>
                    <div class="info">
                        <h4><a href="blog-single.html">Thailand</a></h4>
                        <p>3Days, 4 Nights</p>
                        <div class="dst-btm">
                          <h6 class=""> Start From </h6>
                          <span>$1650</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-6 mt-lg-5 mt-4">
                <div class="column">
                    <a href="blog-single.html"><img src="{{asset('front-assets')}}/images/g8.jpg" alt="" class="img-fluid"></a>
                    <div class="info">
                        <h4><a href="blog-single.html">Singapore</a></h4>
                        <p>3Days, 4 Nights</p>
                        <div class="dst-btm">
                          <h6 class=""> Start From </h6>
                          <span>$1950</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-6 mt-lg-5 mt-4">
                <div class="column">
                    <a href="blog-single.html"><img src="{{asset('front-assets')}}/images/g9.jpg" alt="" class="img-fluid"></a>
                    <div class="info">
                        <h4><a href="blog-single.html">Egypt</a></h4>
                        <p>3Days, 4 Nights</p>
                        <div class="dst-btm">
                        <h6 class=""> Start From </h6>
                        <span>$1450</span>
                      </div>
                    </div>
                </div>
            </div>
          </div>
      </div>
</div></section>
<!--  //Work gallery section -->
    
@endsection