@extends('layout.master2')
@section('content')
<body class="fullscreen-centered page-register">
 
  <!--Change the background class to alter background image, options are: benches, boots, buildings, city, metro -->
  <div id="background-wrapper" class="benches" data-stellar-background-ratio="0.8">

    <!-- ======== @Region: #content ======== -->
    <div id="content">
      <div class="header center-block">
        <div class="header-inner">
          <!--navbar-branding/logo - hidden image tag & site name so things like Facebook to pick up, actual logo set via CSS for flexibility -->
          <a class="navbar-brand center-block" href="index.html" title="Home">
            <h1 class="hidden">
                <img src="img/logo.png" alt="Flexor Logo">
                Flexor
              </h1>
          </a>
        </div>
        <div class="row">
        <div class="col-md-offset-2 col-md-8 text-center">
             <h2>Start Step 1 of Your Application</h2>
             <p>Start your application with a simple information request. 
               You can apply up to one year in advance of your preferred start date. All fields are required.</p>
        </div>
      </div>
      </div>
      <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
          <div class="panel panel-default">
           
            <div class="panel-body">
              <form accept-charset="UTF-8" role="form">
                <fieldset>
                  <div class="form-group">
                    <div class="input-group input-group-lg">
                      <input type="text" class="form-control" placeholder="Username">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group input-group-lg">
                      <span class="input-group-addon"><i class="fa fa-fw fa-envelope"></i></span>
                      <input type="text" class="form-control" placeholder="Email">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group input-group-lg">
                      <span class="input-group-addon"><i class="fa fa-fw fa-lock"></i></span>
                      <input type="password" class="form-control" placeholder="Password">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="radio">
                      <label>
                          <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                          Free Account
                        </label>
                    </div>
                    <div class="radio">
                      <label>
                          <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                          Plus Account ($12/month)
                        </label>
                    </div>
                    <div class="radio">
                      <label>
                          <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
                          Corporate Account ($100month)
                        </label>
                    </div>
                  </div>
                  <div class="checkbox">
                    <label>
                        <input name="remember" type="checkbox" value="Terms">
                        I agree to the <a href="#">terms and conditions</a>.
                      </label>
                  </div>
                  <input class="btn btn-lg btn-primary btn-block" type="submit" value="Sign Me Up">
                </fieldset>
              </form>
              <p class="m-b-0 m-t">Already signed up? <a href="login.html">Login here</a>.</p>
              <div class="credits">
        
          </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /row -->
    </div>
  </div>
  

</body>
@endsection
