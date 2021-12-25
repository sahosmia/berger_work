@extends('layouts.frontend')
@section('corporate_speech')
active
@endsection

@section('content')
<main class="full_width">
    <div class="container">
        <div class="row">
            <div class="card_header">
                <h1>{{ CHAIRMAN_SPEECH }}</h1>
            </div>
            <div class="card_body">
                <div class="row">
                    <div class="col-md-12 ">
                        <img style="margin-bottom:1rem;" class="w-100 " src="{{ asset('uploads') }}/{{ $page->chairman_speech_img }}" alt="">
                        <p>{!! $page->chairman_speech !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
