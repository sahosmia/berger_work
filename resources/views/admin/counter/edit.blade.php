@extends('layouts.admin')
@section('counter')
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
                <form action="{{ route('admin.counters.update', [$data->id]) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')

                    <label class="pt-3">Title</label>
                    <input class="form-control" type="text" name="counter_title" value="{{ $data->counter_title }}">

                    <label class="pt-3">Number</label>
                    <input class="form-control" type="number" name="counter_num" value="{{ $data->counter_num }}">

                    <button type="submit" class="btn btn-teal d-block mt-4">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
