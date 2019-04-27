<nav class="navbar navbar-expand-lg navbar-trans" id="r1">
    <div class="container">
        <div class="row nvr">
            <div class="col-xl-6">
                <a class="navbar-brand float-left" href="#"><img src="images/logo3.png" alt="..."></a>
                <button class="navbar-toggler float-right" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon">
                      <i class="fa fa-bars" aria-hidden="true"></i>
                  </span>
                </button>
            </div>
            <div class="col-xl-6">
                <div class="collapse navbar-collapse float-left" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active red-item">
                            <a class="nav-link redtxt" href="/">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item red-item ">
                            <a class="nav-link redtxt" href="{{ route('services.services') }}">Services</a>
                        </li>
                        <li class="nav-item red-item">
                            <a class="nav-link  redtxt" href="#company-section">Menu</a>
                        </li>
                        <li class="nav-item red-item">
                            <a class="nav-link  redtxt" href="#company-section">Contact Us</a>
                        </li>
                        <li class="nav-item red-item">
                            <a class="nav-link  redtxt" href="#company-section">
                                <i class="fa fa-phone"></i></a>
                        </li>
                        <li class="nav-item red-item">
                            <a class="nav-link  redtxt" href="#company-section">

                            </a>
                        </li>
                    </ul>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">
                        Login
                    </button>
                </div>
            </div>
        </div>
    </div>
</nav>
<!-- Modal HTML -->
<div id="myModal" class="modal fade">
    <div class="modal-dialog modal-login">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Sign In</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <form action="/examples/actions/confirmation.php" method="post">
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input type="text" class="form-control" name="username" placeholder="Username" required="required">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                            <input type="text" class="form-control" name="phone" placeholder="Phone number" required="required">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                            <input type="text" class="form-control" name="password" placeholder="Password" required="required">
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block btn-lg">Sign In</button>
                    </div>
                    <p class="hint-text"><a href="#">Forgot Password?</a></p>
                </form>
            </div>
            <div class="modal-footer">Don't have an account? <a href="#">Create one</a></div>
        </div>
    </div>
</div>
<!-- Modal HTML -->

