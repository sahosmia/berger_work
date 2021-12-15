

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
                                <li><a class="@yield('home')" href="#">Home</a></li>
                                <li><a href="#">Service</a>
                                    <ul class="drop_down">
                                        @foreach ($diarie as $item)
                                        <li><a href="#">{{ $item->title }}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li><a class="@yield('portfolio')" href="">portfolio</a></li>
                                <li><a class="@yield('corporate_speech')" href="#">cororate speech</a>
                                    <ul class="drop_down">
                                        <li><a href="{{ route('md_speech') }}">Md Speech</a></li>
                                        <li><a href="{{ route('chairman_speech') }}">Chairmain Speech</a></li>
                                    </ul>
                                </li>
                                <li><a class="@yield('gallery')" href="{{ route('gallery') }}">Gallery</a></li>
                                <li><a class="@yield('about')" href="{{ route('about') }}">about</a></li>
                                <li><a class="@yield('contact_us')" href="{{ route('contact_us') }}">contact us</a></li>
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


    @yield('content')
    <!-- footer start  -->
    <footer class="footer">

        <div class="container">
            <div class="row footer_content">
                <div class="col-lg-3 col-sm-6 col-xm-12">
                    <img src="{{ asset('uploads/logo') }}/{{ $logo->logo }}" alt="header_logo">
                    <h4 class="footer_title">Stay connected with us</h4>
                    <p>Subscribe to stay updated</p>
                    <input class="input" type="text" placeholder="Enter Your Email Address">
                </div>
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
            </div>
            <div class="row footer_copy">
                <div class="col-lg-6">
                    <ul class="social">
                        @foreach ($social as $item)
                        <li><a href="{{ $item->social_value }}"><i class="{{ $item->social_icon }}"></i></a></li>
                        @endforeach

                    </ul>
                </div>

                <div class="col-lg-6  text-end">
                    <p class=" d-inline">© 2018 Shoma. All Rights Reserved</p>
                    <p class=" d-inline">Developed By <a href="#">KAZ Software</a></p>
                </div>
            </div>
        </div>


</footer>

<!-- Messenger Chat Plugin Code -->
<div id="fb-root"></div>

<!-- Your Chat Plugin code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>

<script>
  var chatbox = document.getElementById('fb-customer-chat');
  chatbox.setAttribute("page_id", "112902083776297");
  chatbox.setAttribute("attribution", "biz_inbox");
</script>

<!-- Your SDK code -->
<script>
  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v12.0'
    });
  };

  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>


<!--latest jquery-->
<script src="{{ asset('frontend/js/jquery-3.2.1.min.js') }}"></script>

<!--Bootstrap js-->
<script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>

<!--Main js-->
<script src="{{ asset('frontend/js/main.js') }}"></script>
</body>
</html>
