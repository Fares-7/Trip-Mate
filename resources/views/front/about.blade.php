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
                    @if (count($guides) > 0)
                        @foreach ($guides as $guide)
                            <div class="col-lg-3 col-6 mt-lg-5 mt-4">
                                <div class="box16">
                                    <a href="#url"><img src="{{ asset("storage/guide/$guide->image") }}" alt=""
                                            class="img-fluid" /></a>
                                    <div class="box-content">
                                        <h3 class="title"><a href="#url">{{ $guide->name }}</a></h3>
                                        <span class="post">{{ $guide->description }}</span>
                                        <ul class="social">
                                            <li>
                                                <a href="mailto:{{ $guide->email }}" class="email">
                                                    <span class="fa fa-envelope"></span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ $guide->linkedin }}" class="linkedin">
                                                    <span class="fa fa-linkedin"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </section>
    <!-- //team -->

@endsection
