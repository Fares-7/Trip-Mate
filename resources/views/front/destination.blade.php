@extends('front.master')
@section('title', 'destination')
@section('destination-active', 'active')
@include('front.partials.hero', ['title' => 'Destination'])
@section('content')


    <!--  Work gallery section -->
    <section class="grids-1 py-5">
        <div class="grids py-lg-5 py-md-4">
            <div class="container">
                <h3 class="hny-title mb-5">Destinations</h3>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-6">
                        @if (isset($alldestinations) && count($alldestinations) > 0)
                            @foreach ($alldestinations as $destination)
                                <div class="column">
                                    <a href="blog-single.html"><img src="khck"
                                            alt="aaa" class="img-fluid"></a>
                                    <div class="info">
                                        <h4><a href="{{ route('front.single.destination') }}">{{ $destination->name }}</a></h4>
                                        <p>{{ $destination->date }}</p>
                                        <div class="dst-btm">
                                            <h6 class="">Start From </h6>
                                            <span>{{ $destination->price }}$</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  //Work gallery section -->

@endsection
