@extends('layouts.admin')
@section('portfolio')
    active
@endsection

@section('content')
    <div class="col-lg-6 m-auto">
         @include("layouts.status")
        <div class="card ">
            <div class="card-header text-center bg-teal text-light">
                <h4>Edit Item</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.portfolios.update', [$data->id]) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <label>Title</label>
                    <input class="form-control" type="text" name="title" value="{{ $data->title }}">

                    <label>Existing Photo</label>
                    <img class="w-25 d-block" src="{{ asset('uploads/portfolio') }}/{{ $data->img }}"
                        alt="{{ $data->img }}">

                    <label class="custom-file mt-4">
                        <input type="file" id="file" name="img" class="custom-file-input">
                        <span class="custom-file-control"></span>
                    </label>

                    <button type="submit" class="btn btn-teal d-block mt-4">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
