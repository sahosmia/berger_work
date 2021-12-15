@extends('layouts.frontend')
@section('contact_us')
active
@endsection

@section('content')

<!-- contact Requisition -->

<main class="full_width">
    <div class="contact_banner">
        <img class="w-100" src="{{ asset('uploads/banner/banner_4.jpg') }}" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="page_header">
                <h1>{{ CONTACT_US }}</h1>
            </div>
            <div class="page_contact">
                <div class="row">
                    <div class="col-md-6 contact_map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14621.340551044052!2d88.85510084999999!3d23.628166049999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fecc3f3968e5b9%3A0x660254aa914ef62b!2sChuadanga%20Sadar%20Hospital%2C%20Hospital%20Rd%2C%20Chuadanga!5e0!3m2!1sen!2sbd!4v1639567788667!5m2!1sen!2sbd" width="500" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                    <div class="col-md-6 contact_details">
                        <h6>Corporate Office:</h6>
                        <p>Berger House
                            <br>
                            House 8, Road 2, Sector 3
                            <br>
                            Uttara Model Town
                            <br>
                            Dhaka 1230</p>

                        <img class="w-50" src="{{ asset('uploads/logo/logo.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
@endsection
