@extends('admindashboard.master')
@section('content')
    <table class="table">
        <caption>List of users</caption>
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">date</th>
                <th scope="col">price</th>
                <th scope="col">action</th>
            </tr>
        </thead>
        <tbody>

            @if (count($destinations) > 0)
                @foreach ($destinations as  $destination)
                    <tr>
                        {{-- <th scope="row">{{ ++$key }}</th> --}}
                        <th scope="row">{{ $destinations->firstItem() + $loop->index }}</th>
                 
                        <td>{{ $destination->name }}</td>
                        <td>{{ $destination->date }}</td>
                        <td>{{ $destination->price }}</td>
                        <td>
                            <div class="dropdown">
                              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                              </button>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="javascript:void(0);"
                                  ><i class="bx bx-edit-alt me-1"></i> Edit</a
                                >
                                <a class="dropdown-item" href="javascript:void(0);"
                                  ><i class="bx bx-trash me-1"></i> Delete</a
                                >
                              </div>
                            </div>
                          </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
        {{-- {{ $data->links() }} --}}
        {{ $destinations->render('pagination::bootstrap-5') }}
    </table>
@endsection
