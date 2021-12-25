
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Bracket">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/bracket/img/bracket-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/bracket">
    <meta property="og:title" content="Bracket">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/bracket/img/bracket-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/bracket/img/bracket-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>Bracket Responsive Bootstrap 4 Admin Template</title>

    <!-- vendor css -->
    <link href="{{ asset('admin/lib/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/lib/Ionicons/css/ionicons.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/lib/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/lib/jquery-switchbutton/jquery.switchButton.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('admin/lib/summernote/summernote.css') }}">
    <!-- Bracket CSS -->
    <link rel="stylesheet" href="{{ asset('admin/css/bracket.css') }}">
  </head>

  <body>

    <!-- ########## START: LEFT PANEL ########## -->
    <div class="br-logo"><a href=""><span>[</span>bracket<span>]</span></a></div>
    <div class="br-sideleft overflow-y-auto">
      <label class="sidebar-label pd-x-15 mg-t-20">Navigation</label>
      <div class="br-sideleft-menu">
        <a href="{{ route('home') }}" class="br-menu-link @yield('dashboard')">
          <div class="br-menu-item">
            <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
            <span class="menu-item-label">Dashboard</span>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        
        <a href="#" class="br-menu-link @yield('page_setting') @yield('page_setting_show')">
            <div class="br-menu-item">
              <i class="menu-item-icon icon ion-ios-filing-outline tx-24"></i>
              <span class="menu-item-label">Page Setting</span>
              <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub nav flex-column">
            <li class="nav-item"><a href="{{ route('admin.home_page') }}" class="nav-link @yield('home_page')">Home Page</a></li>
            <li class="nav-item"><a href="{{ route('admin.contact_page') }}" class="nav-link @yield('contact_page')">Contact Page</a></li>
            <li class="nav-item"><a href="{{ route('admin.corporate_speech') }}" class="nav-link @yield('corporate_speech_page')">Corporate Speech Page</a></li>
          </ul>


        <a href="{{ route('admin.slider') }}" class="br-menu-link @yield('slider')">
          <div class="br-menu-item">
            <i class="menu-item-icon icon ion-easel tx-24"></i>
            <span class="menu-item-label">Slider</span>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->


        <a href="{{ route('admin.portfolio') }}" class="br-menu-link @yield('portfolio')">
          <div class="br-menu-item">
            <i class="menu-item-icon icon ion-image tx-24"></i>
            <span class="menu-item-label">Portfolio</span>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->

        <a href="{{ route('admin.diarie') }}" class="br-menu-link @yield('diarie')">
          <div class="br-menu-item">
            <i class="menu-item-icon icon ion-ios-medkit-outline tx-24"></i>
            <span class="menu-item-label">Service</span>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->

        <a href="{{ route('admin.social') }}" class="br-menu-link @yield('social')">
          <div class="br-menu-item">
            <i class="menu-item-icon icon ion-link tx-24"></i>
            <span class="menu-item-label">Social</span>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->

        <a href="{{ route('admin.counter') }}" class="br-menu-link @yield('counter')">
          <div class="br-menu-item">
            <i class="menu-item-icon icon ion-ios-clock-outline tx-24"></i>
            <span class="menu-item-label">Counter</span>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <a href="{{ route('admin.language') }}" class="br-menu-link @yield('language')">
          <div class="br-menu-item">
            <i class="menu-item-icon icon ion-document-text tx-24"></i>
            <span class="menu-item-label">Language</span>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->

        <a href="{{ route('admin.edit_profile') }}" class="br-menu-link @yield('edit_profile')">
          <div class="br-menu-item">
            <i class="menu-item-icon icon ion-ios-compose-outline tx-24"></i>
            <span class="menu-item-label">Profile Edit</span>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->


      </div><!-- br-sideleft-menu -->


    </div><!-- br-sideleft -->
    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
    <div class="br-header">
      <div class="br-header-left">
        <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
        <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
      </div><!-- br-header-left -->
      <div class="br-header-right">
        <nav class="nav">


          <div class="dropdown">
            <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
              <span class="logged-name hidden-md-down">{{ Auth::user()->name }}</span>
              <img src="http://via.placeholder.com/64x64" class="wd-32 rounded-circle" alt="">
              <span class="square-10 bg-success"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-header wd-200">
              <ul class="list-unstyled user-profile-nav">
                <li><a href="{{ route('admin.edit_profile') }}"><i class="icon ion-ios-person"></i> Edit Profile</a></li>
                <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"><i class="icon ion-power"></i> Sign Out</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                     </form>
                </li>

      </ul>
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
        </nav>
      </div><!-- br-header-right -->
    </div><!-- br-header -->
    <!-- ########## END: HEAD PANEL ########## -->


    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">


      <div class="br-pagebody pd-y-15 pd-l-20 pd-x-20 pd-sm-x-30 pd-b-20">
        <div class="row">
          @yield('content')
        </div><!-- row -->
      </div><!-- br-pagebody -->

    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

    <script src="{{ asset('admin/lib/jquery/jquery.js') }}"></script>
    <script src="{{ asset('admin/lib/popper.js/popper.js') }}"></script>
    <script src="{{ asset('admin/lib/bootstrap/bootstrap.js') }}"></script>
    <script src="{{ asset('admin/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js') }}"></script>
    <script src="{{ asset('admin/lib/moment/moment.js') }}"></script>
    <script src="{{ asset('admin/lib/jquery-ui/jquery-ui.js') }}"></script>
    <script src="{{ asset('admin/lib/jquery-switchbutton/jquery.switchButton.js') }}"></script>
    <script src="{{ asset('admin/lib/peity/jquery.peity.js') }}"></script>
    <script src="{{ asset('admin/lib/summernote/summernote.min.js') }}"></script>
@yield('exta_js')
    <script src="{{ asset('admin/js/bracket.js') }}"></script>
  </body>
</html>
