@extends('layouts.admin')
@section('logo')
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
            <h4>Update Item</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('logo_update') }}" method="post" enctype="multipart/form-data">
                @csrf

                <input type="hidden" name="id" value="{{ $data->id }}">


                <label>Existing Photo</label>
                <img class="w-25 d-block" src="{{ asset('uploads/logo') }}/{{ $data->logo }}" alt="{{ $data->logo }}">

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
