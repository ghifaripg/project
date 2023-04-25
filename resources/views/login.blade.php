<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>Login</title>
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

  <style>
    
.banner{
    position: absolute;
    top: 30%;
    left: 40%;
    color: #fff;
}
.login-form {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.form-group {
    margin-bottom: 20px;
}

label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
}

.form-control {
    display: block;
    width: 30%;
    padding: 10px;
    font-size: 16px;
    border-radius: 5px;
    border: 1px solid #ccc;
}

.btn {
    display: inline-block;
    padding: 10px 20px;
    font-size: 16px;
    border-radius: 5px;
    border: none;
    background-color: rgb(200, 198, 198);
    color: rgb(52, 48, 48);
    cursor: pointer;
}

.btn:hover {
    background-color: rgb(230, 218, 218);
}
.banner h1{
    color: black
}
.banner{
    width: 80%;
    height: 100%;
    position: absolute;
    top: 35%;
    left: 180px;
    color: #fff;
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

  <div class="banner">
    <form method="POST" action="/login">
        @csrf
        <h1>Login</h1>
        <br>
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" class="form-control" placeholder="Enter your username">
        </div>
    
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password">
        </div>
    
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Log In</button>
        </div>
    
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </form>
</div>  
        
    </div>  
</body>
</html>