@extends('layouts.frontend')

@section('content')

<!-- contact Requisition -->

<section class="contact" style="background-image: url('{{ asset('frontend/images/background-sparkle.jpg') }}');">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <img src="{{ asset('frontend/images/contact_head.png') }}" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form class="row g-3" action="{{ route('contact') }}" method="POST">
                    @csrf
                    <div class="col-md-6">
                        <label class="form-label">Full Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Your Full Name">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Phone Number</label>
                        <input type="text" class="form-control" name="phone" placeholder="0123">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Email Address</label>
                        <input type="text" class="form-control" name="email" placeholder="Your Email Address">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Address</label>
                        <input type="text" class="form-control" name="address" placeholder="Your Address">
                    </div>

                    <div class="col-12">
                        <label class="form-label">Your Message</label>
                        <textarea cols="5" rows="5" class="form-control" name="message" placeholder="Your Message"></textarea>
                    </div>


                    <div class="col-12 text-center">
                        <button type="submit" class="submit_btn">Submit Your Request</button>
                    </div>
              </form>

            </div>
        </div>

    </div>

    </section>
@endsection
