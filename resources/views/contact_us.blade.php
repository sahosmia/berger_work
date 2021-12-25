@extends('layouts.frontend')
@section('contact_us')
active
@endsection

@section('content')

<!-- contact Requisition -->

<main class="full_width">
    <div class="contact_banner">
        <img class="w-100" src="{{ asset('uploads') }}/{{ $page->contact_banner }}" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="card_header">
                <h1>{{ CONTACT_US }}</h1>
            </div>
            <div class="card_body">
                <div class="row">
                    <div class="col-md-6 contact_map">{!! $page->contact_map !!}</div>
                    <div class="col-md-6 contact_details">
                        <h6>{{ CORPORATE_OFFICE }}</h6>
                        <p>{!! $page->contact_details !!}</p>
                        <img class="w-50 contact_page_logo" src="{{ asset('uploads/logo') }}/{{ $page->contact_logo }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
@endsection
