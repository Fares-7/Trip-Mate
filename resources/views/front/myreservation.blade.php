@extends('front.master')
@section('title', 'My Reservations')
@include('front.partials.hero', ['title' => 'My Reservations'])
@section('content')

    @if (session('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}
        </div>
    @endif
    <table class="table table-striped table-hover table-bordered mt-4">

        <thead class="thead-dark">
            <tr>
                <th scope="col" class="text-center">#</th>
                <th scope="col" class="text-center">Destination</th>
                <th scope="col" class="text-center">Date</th>
                <th scope="col" class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @if (count($destinations) > 0)
                @foreach ($destinations as $destination)
                    <tr>
                        <th scope="row" class="text-center">{{ $loop->iteration }}</th>
                        <td class="text-center">{{ $destination->name }}</td>
                        <td class="text-center">{{ $destination->date }}</td>
                        <td class="text-center">
                            <form action="{{ route('front.reservation.destroy', $destination) }}" method="POST"
                                id="delete_form">
                                @method('DELETE')
                                @csrf
                                <a onclick="return confirm('Are you sure you want to delete this record?')"
                                    class="btn btn-danger btn-sm" href="javascript:$('form#delete_form').submit();">
                                    <i class="bx bx-trash me-1"></i> Delete
                                </a>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="4" class="text-center">No reservations found</td>
                </tr>
            @endif
        </tbody>
    </table>

@endsection
