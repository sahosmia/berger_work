@extends('layouts.admin')
@section('diarie')
active
@endsection

@section('content')
<div class="col-lg-6 m-auto">
                                    @include("layouts.status")

    <div class="card ">
        <div class="card-header text-center bg-teal text-light">
            <h4>Add Item</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.diaries.store') }}" method="post" enctype="multipart/form-data">
                @csrf

                <label>Title</label>
                <input class="form-control"  type="text" name="title" value="{{ old('title') }}">

                <label>Content</label>
                <textarea class="form-control" rows="5" type="text" name="content">{{ old('content') }}</textarea>

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
