<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>Edit</title>
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
  <div id="viewform" class="viewform-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.25s">
          <div class="section-heading">
            <h2>Edit Your Notes !</h2>
            <p>Make Sure You Don't Leave Ur Notes Blank</p>
          </div>
        </div>
        <div class="col-lg-6 wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.25s">
            <form id="viewform"method="POST" action="{{ url('/notes/update/'.$note->id) }}">
            <div class="row">
              <div class="col-lg-6">
                <fieldset>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                    <input type="number" name="id" value="{{ $note->id }}" placeholder="Number"/>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                    <input type="date" name="date" value="{{ $note->date }}" placeholder="Date"/>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                    <input type="text" name="title" value="{{ $note->title }}" placeholder="Title"/><br/>  
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                    <textarea name="note" placeholder="Notes">{{ $note->note }}</textarea><br/>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <button type="submit" id="form-submit" class="main-button ">Update</button>
                </fieldset>
              </div>
            </div>
            
          </form>
        </div>
      </div>
    </div>
  </div>
</div>  
        
    </div>  
</body>
</html>