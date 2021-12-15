@extends('layouts.admin')
@section('slider')
active
@endsection

@section('content')
<div class="col-lg-6 m-auto">
    @if (session()->has('success'))
    <div class="alert alert-success">
        <p>{{ session()->get('success') }}</p>
    </div>
    @endif

    @php
        $all_fild = ['img',];
    @endphp

    @foreach ($all_fild as $item)
        @error($item)
            <div class="alert alert-danger">
                <p>{{ $message }}</p>
            </div>
        @enderror
    @endforeach
    <div class="card ">
        <div class="card-header text-center bg-teal text-light">
            <h4>Add Item</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.slider_store') }}" method="post" enctype="multipart/form-data">
                @csrf

                <label class="pt-3">Title</label>
                <input class="form-control"  type="text" name="title" value="{{ old('title') }}">

                <label class="pt-3">Heading</label>
                <input class="form-control"  type="text" name="heading" value="{{ old('heading') }}">

                <label class="pt-3">Button Text</label>
                <input class="form-control"  type="text" name="btn_text" value="{{ old('btn_text') }}">

                <label class="pt-3">Button URL</label>
                <input class="form-control"  type="text" name="btn_url" value="{{ old('btn_url') }}">

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
