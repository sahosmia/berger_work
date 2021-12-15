@extends('layouts.frontend')
@section('home')
active
@endsection
@section('content')
 <!-- banner pert start  -->
 <div class="banner">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            @php
                $i=0;
            @endphp
            @foreach ($sliders as $item)
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $i }}" class="{{ $loop->first ? 'active' : '' }}" aria-current="true" aria-label="Slide {{ $i+1 }}"></button>
                @php
                    $i++
                @endphp
            @endforeach
        </div>
        <div class="carousel-inner">
            @foreach ($sliders as $item)

          <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
            <img src="{{ asset('uploads/slider') }}/{{ $item->img }}" class="d-block w-100" alt="{{ $item->img }}">
            <div class="carousel-caption">
                <p class="animated fadeInRight">{{ $item->title }}</p>
                <h1 class="animated fadeInLeft">{{ $item->heading }}</h1>
                <a class="btn animated fadeInUp" href="{{ $item->btn_url }}">{{ $item->btn_text }}</a>
            </div>
          </div>
          @endforeach

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
</div>



<!-- portfolio start  -->
<section class="portfolio">
   <div class="heading_content">
    <div class="container-fluid">
        <div class="row">
           <div class="col-lg-10 m-auto">
            <h1 class="heading">Paint your imagination</h1>
            <p>Choose from a wide variety of products made to fit all your needs</p>
           </div>
        </div>
    </div>
   </div>
   <div class="portfolio_item">
    <div class="container_fluid">
        <div class="row">
          <div class="col-lg-6 portfolio_single">
              <img class="w-100 img-fluid portfolio_img" src="{{ asset('uploads/portfolio') }}/{{ $portfolio->find(1)->img }}" alt="portfolio_1">
              <a href="#" class="portfolio_caption">{{ $portfolio->find(1)->title }}</a>
          </div>
          <div class="col-lg-3 portfolio_single">
              <img class="w-100 img-fluid portfolio_img" src="{{ asset('uploads/portfolio') }}/{{ $portfolio->find(2)->img }}" alt="portfolio_1">
              <a href="#" class="portfolio_caption">{{ $portfolio->find(2)->title }}</a>
          </div>
          <div class="col-lg-3 portfolio_single">
              <img class="w-100 img-fluid portfolio_img" src="{{ asset('uploads/portfolio') }}/{{ $portfolio->find(3)->img }}" alt="portfolio_1">
              <a href="#" class="portfolio_caption">{{ $portfolio->find(3)->title }}</a>
          </div>
          <div class="col-lg-5 portfolio_single">
              <img class="w-100 img-fluid portfolio_img" src="{{ asset('uploads/portfolio') }}/{{ $portfolio->find(4)->img }}" alt="portfolio_1">
              <a href="#" class="portfolio_caption">{{ $portfolio->find(4)->title }}</a>
          </div>
          <div class="col-lg-7 portfolio_single">
              <img class="w-100 img-fluid portfolio_img" src="{{ asset('uploads/portfolio') }}/{{ $portfolio->find(5)->img }}" alt="portfolio_1">
              <a href="#" class="portfolio_caption">{{ $portfolio->find(5)->title }}</a>
          </div>


        </div>
     </div>
   </div>

</section>
<!-- portfolio end  -->
 <!-- Fact Start -->
 <div class="fact">
    <div class="container-fluid">
        <div class="row counters">
            <div class="col-md-6 fact-left wow slideInLeft">
                <div class="row">
                    <div class="col-6">
                        <div class="fact-icon">
                            <i class="flaticon-worker"></i>
                        </div>
                        <div class="fact-text">
                            <h2 data-toggle="counter-up">{{ $counter->find(1)->counter_num }}</h2>
                            <p>{{ $counter->find(1)->counter_title }}</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="fact-icon">
                            <i class="flaticon-building"></i>
                        </div>
                        <div class="fact-text">
                            <h2 data-toggle="counter-up">{{ $counter->find(2)->counter_num }}</h2>
                            <p>{{ $counter->find(2)->counter_title }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 fact-right wow slideInRight" style="background-color: #A00000">
                <div class="row">
                    <div class="col-6">
                        <div class="fact-icon">
                            <i class="flaticon-address"></i>
                        </div>
                        <div class="fact-text">
                            <h2 data-toggle="counter-up">{{ $counter->find(3)->counter_num }}</h2>
                            <p>{{ $counter->find(3)->counter_title }}</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="fact-icon">
                            <i class="flaticon-crane"></i>
                        </div>
                        <div class="fact-text">
                            <h2 data-toggle="counter-up">{{ $counter->find(4)->counter_num }}</h2>
                            <p>{{ $counter->find(4)->counter_title }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Fact End -->



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
                    <label class="form-label">{{ NAME }}</label>
                    <input type="text" class="form-control" name="name" placeholder="{{ YOUR_NAME }}">
                </div>
                <div class="col-md-6">
                    <label class="form-label">{{ PHONE }}</label>
                    <input type="text" class="form-control" name="phone" placeholder="{{ YOUR_PHONE }}">
                </div>
                <div class="col-md-6">
                    <label class="form-label">{{ EMAIL_ADDRESS }}</label>
                    <input type="text" class="form-control" name="email" placeholder="{{ YOUR_EMAIL_ADDRESS }}">
                </div>
                <div class="col-md-6">
                    <label class="form-label">{{ ADDRESS }}</label>
                    <input type="text" class="form-control" name="address" placeholder="{{ ADDRESS }}">
                </div>

                <div class="col-12">
                    <label class="form-label">{{ MESSAGE }}</label>
                    <textarea cols="5" rows="5" class="form-control" name="message" placeholder="{{ YOUR_MESSAGE }}"></textarea>
                </div>

                <div class="col-12 text-center">
                    <button type="submit" class="submit_btn">{{ SUBMIT_YOUR_REQUEST }}</button>
                </div>
          </form>

        </div>
    </div>

</div>

</section>

<!-- diari start  -->
<section class="diari">
   <div class="heading_content">
    <div class="container-fluid">
        <div class="row">
           <div class="col-lg-10 m-auto">
            <h1 class="heading">Berger Home Diaries</h1>
            <p>We believe that homes are a reflection of the people who live inside, where everything looks and works the way you want it to. That’s why we’ve gathered tons of different home ideas, from home decoration ideas to organizing tips, to help you build your ideal home.</p>
           </div>
        </div>
    </div>
   </div>
   <div class="diari_item">
       <div class="container">
           <div class="row">
           @foreach ($diarie as $item)
           <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="post">
                    <div class="post_image">
                        <img class="img-fluid" src="{{ asset('uploads/diarie') }}/{{ $item->img }}" alt="">
                    </div>
                    <div class="post_content">
                        <a href="#"><h5>{{ $item->title }}</h5></a>
                        <p>{{ $item->content }}</p>
                    </div>
                </div>
            </div>
           @endforeach
           </div>
       </div>
   </div>
   <div class="row">
    <div class="col-12 text-center">
        <a class="more" href="#">{{ MORE_INSPRATIONS }}</a>
    </div>
</div>
</section>
<!-- diari end  -->
@endsection
