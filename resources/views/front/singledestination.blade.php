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
                                <!-- Label and Name -->
                                <label for="destination-name" class="form-label">Name</label>
                                <h4 id="destination-name">{{ $destination->name }}</h4>
                            
                                <!-- Label and Date -->
                                <label for="destination-date" class="form-label">Date</label>
                                <h4 id="destination-date">{{ $destination->date }}</h4>

                                <label for="destination-price" class="form-label">Price</label>
                                <h4 id="destination-price">{{ $destination->price }} $</h4>
                               
                                  @if (Auth::check())
                                  <a onclick="return confirm('Are you want to book this trip ?')" href="{{route('front.reservation.store' , ['id' => $destination->id ])}}" class="btn btn-danger btn-lg mt-3" type="submit">
                                    Book Trip
                                </a>
                                  @endif

                                  @if (!Auth::check())
                                      <div class="alert alert-warning   mt-2">
                                        You must be logged in to book your trip
                                      </div>
                                  @endif
                                    

                                    @if (session('success'))
                                    <div class="alert alert-success mt-2">
                                        {{ session('success') }}
                                    </div>
                                @endif

                                @if (session('status'))
                                <div class="alert alert-success mt-2">
                                    {{ session('status') }}
                                </div>
                            @endif
                                
                            </div>
                            
                            
                        </div>

                        
                    </div>
                </div>

                
            </div>

            
        </div>
    </section>
@endsection
