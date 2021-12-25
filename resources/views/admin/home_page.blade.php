@extends('layouts.admin')
@section('page_setting')
active
@endsection

@section('page_setting_show')
show-sub
@endsection

@section('home_page')
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
        $all_fild = ['portfolio_title', 'portfolio_content', 'diarie_title', 'diarie_content', 'copywrite', 'logo', 'contact_head_logo', 'contact_bg'];
    @endphp

    @foreach ($all_fild as $item)
        @error($item)
            <div class="alert alert-danger">
                <p>{{ $message }}</p>
            </div>
        @enderror
    @endforeach
    <div class="card">
        <div class="card-header text-center bg-teal text-light">
            <h4>Home Page Item</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.home_page_update') }}" method="post" enctype="multipart/form-data">
                @csrf

                <label>Existing Photo</label>
                <img class="w-50 d-block" src="{{ asset('uploads/logo') }}/{{ $page->logo }}" alt="{{ $page->logo }}">

                <label class="custom-file mt-4 d-block">
                    <input type="file" id="file" name="logo" class="custom-file-input">
                    <span class="custom-file-control"></span>
                </label>

                <label class="mt-4">Portfolio Title</label>
                <input class="form-control"  type="text" name="portfolio_title" value="{{ $page->portfolio_title }}">

                <label class="mt-4">Portfolio Content</label>
                <textarea class="form-control" rows="5" type="text" name="portfolio_content">{{ $page->portfolio_content }}</textarea>

                <label class="mt-4">Diarie Title</label>
                <input class="form-control"  type="text" name="diarie_title" value="{{ $page->diarie_title }}">

                <label class="mt-4">Diarie Content</label>
                <textarea class="form-control" rows="5" type="text" name="diarie_content">{{ $page->diarie_content }}</textarea>

                <label class="mt-4">Copy Write</label>
                <textarea class="form-control"  type="text" name="copywrite">{{ $page->copywrite }}</textarea>

                <label>Contact Head Logo</label>
                <img class="w-50 d-block" src="{{ asset('uploads') }}/{{ $page->contact_head_logo }}" alt="{{ $page->contact_head_logo }}">
                <label class="custom-file mt-4 d-block">
                    <input type="file" id="file" name="contact_head_logo" class="custom-file-input">
                    <span class="custom-file-control"></span>
                </label>

                <label>Contact Background</label>
                <img class="w-50 d-block" src="{{ asset('uploads') }}/{{ $page->contact_bg }}" alt="{{ $page->contact_bg }}">
                <label class="custom-file mt-4 d-block">
                    <input type="file" id="file" name="contact_bg" class="custom-file-input">
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
