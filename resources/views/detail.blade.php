<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>Detail</title>
    <link rel="stylesheet" href="{{ asset('css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/templatemo-space-dynamic.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animated.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.css') }}">
    <!-- Scripts -->

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="{{ asset('js/owl-carousel.js') }}"></script>
  <script src="{{ asset('js/animation.js') }}"></script>
  <script src="{{ asset( 'js/imagesloaded.js') }}"></script>
  <script src="{{ asset( 'js/templatemo-custom.js') }}"></script>

    <style>.banner{
        width: 100%;
        height: 100%;
        position: absolute;
        top: 35%;
        left: 300px;
        color: rgb(11, 11, 11);
    }
    .app-text{
        width: 50%;
        float: left;
        padding-left: 50px;
    }
    .app-text p{
        font-size: 19px;
        margin: 30px 30px 30px 0;
        letter-spacing: 1px;
        color: rgb(0, 0, 0);
        padding-right: 100px;
    }
    </style>
  </head>

<body>
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="/" class="logo">
              <h4>Not<span>es</span></h4>
            </a>
            <ul class="nav">
                <li class="scroll-to-section"><a href="/">Home</a></li>
                <li class="scroll-to-section"><a href="/notes">Notes</a></li>
                @if(session('username'))
                  <li class="scroll-to-section"><a href="/create">Create a Note</a></li>
                @endif
                <li class="scroll-to-section">
                  <div class="main-red-button">
                    @if(session('username'))
                      <a href="/logout">Logout</a>
                    @else
                      <a href="/login">Login</a>
                    @endif
                  </div>
                </li>
              </ul>
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
          </nav>
        </div>
      </div>
    </div>
  </header>
  <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                @isset ($detail)
                <h3>{{ $detail->date }}</h3>
                <h3>{{ $detail->title }}</h3>
                <p>{{ $detail->note }}</p>
                @endisset
              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="{{ asset('photo.png') }}">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>
</html>