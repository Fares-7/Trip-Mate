@extends('admindashboard.master')
@section('content')
    <div class="card mb-4">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">Guides</h5>

        </div>
        @if (session('add-guide'))
            <div class="alert alert-success">
                {{ session('add-guide') }}
            </div>
        @endif
        <div class="card-body">
            <form action="{{ route('admin.guide.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Image</label>
                    <div class="col-sm-10">
                        <input type="file" name="image" class="form-control" id="basic-default-name"
                            placeholder="Image">
                    </div>
                </div>
                <x-validation-error name="image"></x-validation-error>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-company">Name</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" placeholder="Enter Your Name">
                    </div>
                </div>
                <x-validation-error name="name"></x-validation-error>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-company">Description</label>
                    <div class="col-sm-10">
                        <input type="text" name="description" placeholder="Enter Your Job Title">
                    </div>
                </div>
                <x-validation-error name="description"></x-validation-error>


                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-company">Email</label>
                    <div class="col-sm-10">
                        <input type="text" name="email" placeholder="Enter Your Email">
                    </div>
                </div>
                <x-validation-error name="email"></x-validation-error>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-company">LinkedIn</label>
                    <div class="col-sm-10">
                        <input type="url" name="linkedin" placeholder="Enter Your LinkedIn Url">
                    </div>
                </div>
                <x-validation-error name="linkedin"></x-validation-error>

                <div class="row justify-content-end">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </div>
            </form>
        @endsection
