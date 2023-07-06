@extends('layouts.admin')
@section('page_setting')
active
@endsection

@section('page_setting_show')
show-sub
@endsection

@section('contact_page')
active
@endsection

@section('content')
<div class="col-lg-6 m-auto">
    @include("layouts.status")
    <div class="card">
        <div class="card-header text-center bg-teal text-light">
            <h4>Contact Page Item</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.contact_page_update') }}" method="post" enctype="multipart/form-data">
                @csrf

                <label>Contact Details</label>
                <textarea  class="form-control summernote"  type="text" name="contact_details">{{ $page->contact_details }}</textarea>

                <label class="mt-4">Contact Map</label>
                <textarea class="form-control" rows="5" type="text" name="contact_map">{{ $page->contact_map }}</textarea>


                <label  class="mt-4">Contact Logo</label>
                <img class="w-50 d-block" src="{{ asset('uploads/logo') }}/{{ $page->contact_logo }}" alt="{{ $page->contact_logo }}">

                <label class="custom-file mt-4 d-block">
                    <input type="file" id="file" name="contact_logo" class="custom-file-input">
                    <span class="custom-file-control"></span>
                </label>

                <label  class="mt-4">Contact Logo</label>
                <img class="w-50 d-block" src="{{ asset('uploads') }}/{{ $page->contact_banner }}" alt="{{ $page->contact_banner }}">

                <label class="custom-file mt-4 d-block">
                    <input type="file" id="file" name="contact_banner" class="custom-file-input">
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
