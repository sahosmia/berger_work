@extends('layouts.admin')
@section('counter')
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
        $all_fild = ['counter_num', 'counter_title',];
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
            <form action="{{ route('admin.counter_update') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $data->id }}">

                <label class="pt-3">Title</label>
                <input class="form-control"  type="text" name="counter_title" value="{{ $data->counter_title }}">

                <label class="pt-3">Number</label>
                <input class="form-control"  type="number" name="counter_num" value="{{ $data->counter_num }}">

                <button type="submit" class="btn btn-teal d-block mt-4">Submit</button>
            </form>
        </div>
    </div>
</div>


@endsection
