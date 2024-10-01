@extends('front.master')
@section('title', 'about')
@section('about-active', 'active')
@include('front.partials.hero', ['title' => 'About'])

@section('content')


    <!-- /about-6-->
    <section class="w3l-cta4 py-5">
        <div class="container py-lg-5">
            <div class="ab-section text-center">
                <h6 class="sub-title">About Us</h6>
                <h3 class="hny-title">Travel to make memories all around the world.</h3>
                <p class="py-3 mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Harum labore sed, veniam nisi
                    sunt laboriosam ducimus, odio
                    aspernatur fugiat minima blanditiis dignissimos.</p>
            </div>
            <div class="row mt-5">
                <div class="col-md-9 mx-auto">
                    <img src="{{ asset('front-assets') }}/images/banner3.jpg" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- //about-6-->
    <!-- /content-6-->

    <!-- //content-6-->


    <!-- team -->
    <section class="w3l-team" id="team">
        <div class="team-block py-5">
            <div class="container py-lg-5">
                <div class="title-content text-center mb-lg-3 mb-4">
                    <h6 class="sub-title">Our team</h6>
                    <h3 class="hny-title">Meet our Guides</h3>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-6 mt-lg-5 mt-4">
                        <div class="box16">
                            <a href="#url"><img src="{{ asset('front-assets') }}/images/team1.jpg" alt=""
                                    class="img-fluid" /></a>
                            <div class="box-content">
                                <h3 class="title"><a href="#url">Alexander</a></h3>
                                <span class="post">Description</span>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6 mt-lg-5 mt-4">
                        <div class="box16">
                            <a href="#url"><img src="{{ asset('front-assets') }}/images/team2.jpg" alt=""
                                    class="img-fluid" /></a>
                            <div class="box-content">
                                <h3 class="title"><a href="#url">Victoria</a></h3>
                                <span class="post">Description</span>
                                <ul class="social">
                                    <li>
                                        <a href="#" class="facebook">
                                            <span class="fa fa-facebook-f"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="twitter">
                                            <span class="fa fa-twitter"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-6 mt-lg-5 mt-4">
                        <div class="box16">
                            <a href="#url"><img src="{{ asset('front-assets') }}/images/team3.jpg" alt=""
                                    class="img-fluid" /></a>
                            <div class="box-content">
                                <h3 class="title"><a href="#url">Smith roy</a></h3>
                                <span class="post">Description</a></span>
                                <ul class="social">
                                    <li>
                                        <a href="#" class="facebook">
                                            <span class="fa fa-facebook-f"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="twitter">
                                            <span class="fa fa-twitter"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6 mt-lg-5 mt-4">
                        <div class="box16">
                            <a href="#url"><img src="{{ asset('front-assets') }}/images/team3.jpg" alt=""
                                    class="img-fluid" /></a>
                            <div class="box-content">
                                <h3 class="title"><a href="#url">Smith roy</a></h3>
                                <span class="post">Description</a></span>
                                <ul class="social">
                                    <li>
                                        <a href="#" class="facebook">
                                            <span class="fa fa-facebook-f"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="twitter">
                                            <span class="fa fa-twitter"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6 mt-lg-5 mt-4">
                        <div class="box16">
                            <a href="#url"><img src="{{ asset('front-assets') }}/images/team4.jpg" alt=""
                                    class="img-fluid" /></a>
                            <div class="box-content">
                                <h3 class="title"><a href="#url">Johnson</a></h3>
                                <span class="post">Description</a></span>
                                <ul class="social">
                                    <li>
                                        <a href="#" class="facebook">
                                            <span class="fa fa-facebook-f"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="twitter">
                                            <span class="fa fa-twitter"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //team -->

@endsection
