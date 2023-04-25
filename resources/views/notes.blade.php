<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>Notes</title>
    <link rel="stylesheet" href="{{ asset('css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/templatemo-space-dynamic.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animated.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.css') }}">
    <!-- Scripts -->

    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/owl-carousel.js') }}"></script>
    <script src="{{ asset('js/animation.js') }}"></script>
    <script src="{{ asset( 'js/imagesloaded.js') }}"></script>
    <script src="{{ asset( 'js/templatemo-custom.js') }}"></script>
    
    <style>
     a{
        color: black;
        text-decoration: none;
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
                <h2>Welcome <span>{{ session()->get("username") }}</span> !</h2>
                <h6>Here is List All Your Notes, Hope You Have a Nice Day.</h6>
                <table>
                    @foreach ($notes as $note)
                        <tr>
                            <td>{{ $note->id }}</td>
                            <td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                            <td>{{ $note->date }}</td>
                            <td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                            <td>{{ $note->title }}</td>
                            <div class="ll"> @if (session()->has("username"))
                                <td><a href="{{ url('/notes/detail/'.$note->id) }}"> Detail </a></td>
                                <td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                                <td><a href="{{ url('/notes/edit/'.$note->id) }}"> Edit </a></td>
                                <td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                                <td><a href="{{ url('/notes/delete/'.$note->id) }}" onclick="return confirm('Are you sure you want to delete this note?')"> Delete </a></td>
                                <td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                                
                            @endif</div>
                        </tr>
                        <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
                @endforeach
                </table>
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