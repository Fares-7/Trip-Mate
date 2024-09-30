@extends('front.master')
@section('content')
    <section class="w3l-grids-6 py-5">
        <div class="grids py-lg-5 py-md-4">
            <div class="col-lg-6 subject-card mt-lg-0 mt-4">
                <div class="subject-card-header p-4">
                    <div class="card_title p-lg-4d-block">
                        <div class="row align-items-center">
                            <div class="col-sm-5 subject-img">
                                <img src="{{ asset("storage/destination/$destination->image") }}" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="col-sm-7 subject-content mt-sm-0 mt-4">
                                <h4>{{ $destination->name }}</h4>
                                <p>{{ $destination->date }}</p>
                                <div class="dst-btm">
                                    <h6 class=""> Price </h6>
                                    <span>{{ $destination->price }} $</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
