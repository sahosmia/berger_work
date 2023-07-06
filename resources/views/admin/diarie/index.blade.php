@extends('layouts.admin')
@section('diarie')
    active
@endsection

@section('content')
    <div class="col-lg-12">
         @include("layouts.status")
        <div class="card">
            <div class="card-header bg-teal text-light">
                <a href="{{ route('admin.diaries.create') }}" class="btn btn-primary" data-toggle="tooltip" data-placement="top"
                    title="Tooltip on top">Add New</a>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Content</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @forelse ($data as $key => $item)
                            <tr>
                                <th>{{ $data->firstItem() + $key }}</th>
                                <th><img class="w-25" src="{{ asset('uploads/diarie') }}/{{ $item->img }}"
                                        alt="{{ $item->img }}"></th>
                                <th>{{ $item->title }}</th>
                                <th>{{ $item->content }}</th>
                                <th>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <form action="{{ route('admin.diaries.destroy', $item->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger pd-x-25"><i
                                                    class="fa fa-trash"></i></button>
                                        </form>
                                        <a href="{{ route('admin.diaries.edit', [$item->id]) }}"
                                            class="btn btn-warning pd-x-25"><i class="fa fa-edit"></i></a>
                                    </div>
                                </th>
                            </tr>
                        @empty
                            <tr>
                                <th colspan="50">No Data To Show</th>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
