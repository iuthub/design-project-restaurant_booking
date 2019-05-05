  <nav class="navbar navbar-expand-lg navbar-trans" id="r1">
    <div class="container">
        <div class="row nvr">
            <div class="col-xl-5 col-md-6 col-sm-6">
                <div class="row">
                    <div class="col-xl-12 col-md-8 col-sm-8 col-6">
                        <a class="navbar-brand float-left" href="/"><img src="images/logo.png" alt="..."></a>
                    </div>
                    <div class="col-xl-6 col-md-4 col-sm-4 col-6">
                        <button class="navbar-toggler float-right" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon">
                      <i class="fa fa-bars" aria-hidden="true"></i>
                  </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-xl-7 col-md-6 col-sm-6">
                <div class="collapse navbar-collapse float-left" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item red-item ">
                            <a class="nav-link redtxt" href="#services">Services</a>
                        </li>
                        <li class="nav-item red-item">
                            <a class="nav-link  redtxt" href="#menu">Menu</a>
                        </li>
                        <li class="nav-item red-item">
                            <a class="nav-link  redtxt" href="#contact">Contact Us</a>
                        </li>
                        <li class="nav-item red-item">
                            <a class="nav-link  redtxt" href="tel:97 777 77 77">
                                <i class="fa fa-phone"></i></a>
                        </li>

                    </ul>
                    @if(!Auth::check())
                        <a href ="{{ url('/login') }}" class="btn btn-danger mr-3" data-toggle="modal" data-target="#myModal">
                            Login
                        </a>
                        <a href ="{{ url('/register') }}" class="btn btn-danger">
                            Register
                        </a>

                    @else
                  <a href="{{ url ('/logout') }}" class="btn btn-danger"
                               onclick="event.preventDefault();
                                document.getElementById('logout-form').submit ();" >
                                Logout
                            </a>
                            <form id ="logout-form" action ="{{ url ('/logout') }}" method ="POST" style ="display:none;">
                                {{ csrf_field() }}
                            </form>
                    @endif

                </div>
            </div>
        </div>
    </div>
</nav>

<!-- 
    New Navbar should be implemented
 -->
{{-- <div class="nav">--}}
{{--  <input type="checkbox" id="nav-check">--}}
{{--  <div class="nav-header">--}}
{{--    <div class="nav-title">--}}
{{--    <a class="navbar-brand " href="/"><img src="images/logo3.png" class="img-fluid" alt="..."></a>--}}
{{--    </div>--}}
{{--  </div>--}}
{{--  <div class="nav-btn">--}}
{{--    <label for="nav-check">--}}
{{--      <span></span>--}}
{{--      <span></span>--}}
{{--      <span></span>--}}
{{--    </label>--}}
{{--  </div>--}}
{{--  --}}
{{--  <div class="nav-links">--}}
{{--    <ul class="navbar-nav ml-auto">--}}
{{--         <li class="nav-item red-item ">--}}
{{--            <a class="nav-link redtxt" href="#services">Services</a>--}}
{{--        </li>--}}
{{--        <li class="nav-item red-item">--}}
{{--           <a class="nav-link  redtxt" href="#menu">Menu</a>--}}
{{--        </li>--}}
{{--        <li class="nav-item red-item">--}}
{{--            <a class="nav-link  redtxt" href="#contact">Contact Us</a>--}}
{{--        </li>--}}
{{--        <li class="nav-item red-item">--}}
{{--            <a class="nav-link  redtxt" href="tel:97 777 77 77">--}}
{{--            <i class="fa fa-phone"></i></a>--}}
{{--         </li>--}}
{{--    </ul>--}}
{{--  </div>--}}
{{--</div>--}}
<!-- Modal HTML -->
<div id="myModal" class="modal fade">
    <div class="modal-dialog modal-login">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Sign In</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('login') }}">
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            {{csrf_field()}}
{{--                            <input type="text" class="form-control" name="email" placeholder="Username" required="required">--}}
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
{{--                            <input type="text" class="form-control" name="password" placeholder="Password" required="required">--}}
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required autocomplete="current-password">

                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block btn-lg">Sign In</button>
                    </div>
                    @if (Route::has('password.request'))
                        <a class="hint-text" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif

                </form>
            </div>
            <div class="modal-footer">Don't have an account? <a href="{{ route('register') }}"> Register</a></div>
        </div>
    </div>
</div>
<!-- Modal HTML -->

