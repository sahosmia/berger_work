@extends('layouts.admin')
@section('counter')
active
@endsection

@section('content')
<div class="col-lg-12">
     @include("layouts.status")
    <div class="card">
        <div class="card-header bg-teal text-light">
            All Item
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Title</th>
                        <th>Number</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                 @forelse ($data as $key => $item)
                 <tr>
                    <th>{{ $data->firstItem()+$key }}</th>
                    <th>{{ $item->counter_title }}</th>
                    <th>{{ $item->counter_num }}</th>
                    <th><div class="btn-group" role="group" aria-label="Basic example">
                        <a href="{{ route('admin.counters.edit', [$item->id]) }}"
                                            class="btn btn-warning pd-x-25"><i class="fa fa-edit"></i></a>
                      </div>
                    </th>
                </tr>
                 @empty
                    <tr>
                        <th class="text-center text-danger" colspan="50">No Data To Show</th>
                    </tr>
                 @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection
