@extends('front.master')
@section('title', 'My Reservations')
@include('front.partials.hero', ['title' => 'My Reservations'])
@section('content')
    <table class="table">
        <caption>My Reservations</caption>
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Destination</th>
                <th scope="col">Date</th>
            </tr>
        </thead>
        <tbody>
            <th>1</th>
            <td>test</td>
            <td>test</td>
            {{-- @if (count($data) > 0)
                @foreach ($data as $key => $user)
                    <tr>
                        <th scope="row">{{ $data->firstItem() + $loop->index }}</th>
                        <td></td>
                        <td></td>
                    </tr>
                @endforeach
            @endif --}}
        </tbody>
        {{-- {{ $data->links() }} --}}
        {{-- {{ $data->render('pagination::bootstrap-5') }} --}}
    </table>
@endsection
