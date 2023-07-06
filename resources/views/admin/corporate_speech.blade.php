@extends('layouts.admin')
@section('page_setting')
active
@endsection

@section('page_setting_show')
show-sub
@endsection

@section('corporate_speech_page')
active
@endsection

@section('content')
<div class="col-lg-6 m-auto">
     @include("layouts.status")
    <div class="card">
        <div class="card-header text-center bg-teal text-light">
            <h4>Md Speech Item</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.md_speech_update') }}" method="post" enctype="multipart/form-data">
                @csrf

                <label>MD Speech</label>
                <textarea  class="form-control summernote"  type="text" name="md_speech">{{ $page->md_speech }}</textarea>

                <label>Existing Photo</label>
                <img class="w-50 d-block" src="{{ asset('uploads') }}/{{ $page->md_speech_img }}" alt="{{ $page->md_speech_img }}">

                <label class="custom-file mt-4">
                    <input type="file" id="file" name="md_speech_img" class="custom-file-input">
                    <span class="custom-file-control"></span>
                </label>

                <button type="submit" class="btn btn-teal d-block mt-4">Submit</button>
            </form>
        </div>
    </div>


    @php
        $all_fild = ['chairman_speech', 'chairman_speech_img',];
    @endphp

    @foreach ($all_fild as $item)
        @error($item)
            <div class="alert alert-danger">
                <p>{{ $message }}</p>
            </div>
        @enderror
    @endforeach
    <div class="card mt-3">
        <div class="card-header text-center bg-teal text-light">
            <h4>Chairman Speech Item</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.chairman_speech_update') }}" method="post" enctype="multipart/form-data">
                @csrf

                <label>MD Speech</label>
                <textarea  class="form-control summernote"  type="text" name="chairman_speech">{{ $page->chairman_speech }}</textarea>

                <label>Existing Photo</label>
                <img class="w-50 d-block" src="{{ asset('uploads') }}/{{ $page->chairman_speech_img }}" alt="{{ $page->chairman_speech_img }}">

                <label class="custom-file mt-4">
                    <input type="file" id="file" name="chairman_speech_img" class="custom-file-input">
                    <span class="custom-file-control"></span>
                </label>

                <button type="submit" class="btn btn-teal d-block mt-4">Submit</button>
            </form>
        </div>
    </div>
</div>


@endsection

@section('exta_js')

<script>
    $('.summernote').summernote({
    height: 250
  })
</script>

@endsection
