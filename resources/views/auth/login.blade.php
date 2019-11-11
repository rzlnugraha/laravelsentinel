<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('assets') }}/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="{{ asset('assets') }}/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="{{ asset('assets') }}/vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('assets') }}/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('assets') }}/images/favicon.png" />
  <link rel="stylesheet" type="text/css" href="{{ asset('sweetalert.css') }}">
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper auth-page">
      <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <div class="auto-form-wrapper">
              <form action="{{ route('login.store') }}" method="POST" autocomplete="on">
                @csrf
                <div class="form-group">
                  <label class="label">Email</label>
                  <div class="input-group">
                    <input type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Email" name="email">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                    {!! $errors->first('email','<span class="invalid-feedback">:message</span>') !!}
                  </div>
                </div>
                <div class="form-group">
                  <label class="label">Password</label>
                  <div class="input-group">
                    <input type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="*********" name="password">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                    {!! $errors->first('password','<span class="invalid-feedback">:message</span>') !!}
                  </div>
                </div>
                <div class="form-group">
                  <button class="btn btn-primary submit-btn btn-block">Login</button>
                </div>
                <div class="form-group d-flex justify-content-between">
                  <div class="form-check form-check-flat mt-0">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input" checked> Keep me signed in
                    </label>
                  </div>
                  <a href="{{ route('reminders.create') }}" class="text-small forgot-password text-black">Forgot Password</a>
                </div>
                <div class="form-group">
                  <button class="btn btn-block g-login">
                    <img class="mr-3" src="{{ asset('assets') }}/images/file-icons/icon-google.svg" alt="">Log in with Google</button>
                </div>
                <div class="text-block text-center my-3">
                  <span class="text-small font-weight-semibold">Not a member ?</span>
                  <a href="{{ route('register') }}" class="text-black text-small">Create new account</a>
                  <br><a href="{{ url('/') }}" class="text-black text-small">Kembali</a>
                </div>
              </form>
            </div>
            <ul class="auth-footer">
              <li>
                <a href="#">Conditions</a>
              </li>
              <li>
                <a href="#">Help</a>
              </li>
              <li>
                <a href="#">Terms</a>
              </li>
            </ul>
            <p class="footer-text text-center">copyright © 2018 Bootstrapdash. All rights reserved.</p>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{ asset('assets') }}/vendors/js/vendor.bundle.base.js"></script>
  <script src="{{ asset('assets') }}/vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="{{ asset('assets') }}/js/off-canvas.js"></script>
  <script src="{{ asset('assets') }}/js/misc.js"></script>
  <!-- endinject -->
  <script src="{{ asset('sweetalert.min.js') }}"></script>
  @include('sweet::alert')
</body>

</html>