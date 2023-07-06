@extends('layouts.admin')
@section('slider')
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
                <form action="{{ route('admin.sliders.update', [$data->id]) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')


                    <label class="pt-3">Title</label>
                    <input class="form-control" type="text" name="title" value="{{ $data->title }}">

                    <label class="pt-3">Heading</label>
                    <input class="form-control" type="text" name="heading" value="{{ $data->heading }}">

                    <label class="pt-3">Button Text</label>
                    <input class="form-control" type="text" name="btn_text" value="{{ $data->btn_text }}">

                    <label class="pt-3">Button URL</label>
                    <input class="form-control" type="text" name="btn_url" value="{{ $data->btn_url }}">

                    <label class="pt-3">Existing Photo</label>
                    <img class="w-25 d-block" src="{{ asset('uploads/slider') }}/{{ $data->img }}"
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
