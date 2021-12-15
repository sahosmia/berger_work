@extends('layouts.admin')
@section('social')
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
        $all_fild = ['Facebbok','Instragram', 'Youtube', 'Twitter', 'Linkedin'];
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
            <form action="{{ route('admin.social_update') }}" method="post">
                @csrf

                @foreach ($socials as $item)
                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">{{ $item->social_name }}</label>
                    <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="social[{{ $item->social_name }}]" value="{{ $item->social_value }}">
                    </div>
                </div>

                @endforeach


                <button type="submit" class="btn btn-teal d-block mt-4">Submit</button>
            </form>
        </div>
    </div>
</div>


@endsection
