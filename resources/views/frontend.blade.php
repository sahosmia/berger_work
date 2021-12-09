<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!--Font Awesome css-->
    <link rel="stylesheet" href="{{ asset('frontend/css/all.css') }}">

    <!--Bootstrap css-->
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">

    <!-- Main Css  -->
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">

</head>
<body>
    <header class="nav_area">
      <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="navber">

                        <div class="logo">
                            <a href="#"><img src="{{ asset('uploads/logo') }}/{{ $logo->logo }}" alt="header_logo"></a>
                        </div>

                        <div class="menu">
                            <ul>
                                <li><a class="active" href="#">Home</a></li>
                                <li><a href="#">Service</a>
                                    <ul class="drop_down">
                                        <li><a href="#">X</a></li>
                                        <li><a href="#">Y</a></li>
                                        <li><a href="#">Z</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">portfolio</a></li>
                                <li><a href="#">cororate speech</a>
                                    <ul class="drop_down">
                                        <li><a href="#">Md Speech</a></li>
                                        <li><a href="#">Chairmain Speech</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">about</a></li>
                                <li><a href="#">contact us</a></li>
                            </ul>
                        </div>

						<div class="search_btn">
							<i class="fas fa-search"></i>
                            <div class="search_input">
                                <form>
                                    <input type="text" placeholder="Search...">
                                </form>
                            </div>
						</div>
                    </div>
                </div>
            </div>

      </div>


    </header>
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


<!-- diari start  -->
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
<!-- diari end  -->



<!-- Service Requisition -->

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
            <a class="more" href="#">More Insprations</a>
        </div>
    </div>
    </section>
<!-- diari end  -->


    <!-- footer start  -->
    <footer class="footer">

            <div class="container">
                <div class="row footer_content">
                    <div class="col-lg-3 col-sm-6 col-xm-12">
                        <img src="images/logo/logo.svg" alt="">
                        <h4 class="footer_title">Stay connected with us</h4>
                        <p>Subscribe to stay updated</p>
                        <input class="input" type="text" placeholder="Enter Your Email Address">
                    </div>
                    <div class="col-lg-9">
                        <div class="row">
                            <div class="col-lg-3 col-sm-6 col-xm-12">
                                <h4 class="footer_title">About Us</h4>
                                <ul class="link">
                                    <li><a href="#">Company Profile</a></li>
                                    <li><a href="#">Board of Directors</a></li>
                                    <li><a href="#">Mission and Vision</a></li>
                                    <li><a href="#">History and Milestones</a></li>
                                    <li><a href="#">Message from MD</a></li>
                                    <li><a href="#">Subsidiary Information</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-xm-12">
                                <h4 class="footer_title">Investor Relations</h4>
                                <ul class="link">
                                    <li><a href="#">Board Meetings and AGM</a></li>
                                    <li><a href="#">Corporate Governance</a></li>
                                    <li><a href="#">Reports And Statements</a></li>
                                    <li><a href="#">Contact Point of Investors</a></li>
                                    <li><a href="#">Shareholding Patterns</a></li>
                                    <li><a href="#">Policies</a></li>
                                    <li><a href="#">Unsettled/Unclaimed Dividend</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-xm-12">
                                <h4 class="footer_title">Media</h4>
                                <ul class="link">
                                    <li><a href="#">News and Events</a></li>
                                    <li><a href="#">Berger Home Diaries</a></li>
                                    <li><a href="#">Corporate Social Responsibility</a></li>
                                    <li><a href="#">Advertisements</a></li>
                                    <li><a href="#">Apps for Stakeholders</a></li>
                                    <li><a href="#">Sitemap</a></li>
                                    <li><a href="#">XML Sitemap</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-xm-12">
                                <h4 class="footer_title">Career</h4>
                                <ul class="link">
                                    <li><a href="#">Join the Team</a></li>
                                    <li><a href="#">Webmail</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row footer_copy">
                    <div class="col-lg-6">
                        <ul class="social">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                        </ul>
                    </div>

                    <div class="col-lg-6  text-end">
                        <p class=" d-inline">© 2018 Shoma. All Rights Reserved</p>
                        <p class=" d-inline">Developed By <a href="#">KAZ Software</a></p>
                    </div>
                </div>
            </div>


    </footer>


    <!--latest jquery-->
    <script src="{{ asset('frontend/js/jquery-3.2.1.min.js') }}"></script>

    <!--Bootstrap js-->
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>

    <!--Main js-->
    <script src="{{ asset('frontend/js/main.js') }}"></script>
</body>
</html>
