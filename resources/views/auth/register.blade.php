<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Register</title>
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
      <div class="content-wrapper d-flex align-items-center auth register-bg-1 theme-one">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <h2 class="text-center mb-4">Register</h2>
            <div class="auto-form-wrapper">
              <form action="{{ route('register.store') }}" method="POST" autocomplete="off">
                @csrf
                <div class="form-group">
                  <div class="input-group">
                    <input type="text" class="form-control {{ $errors->has('first_name') ? ' is-invalid' : '' }}" placeholder="First Name" name="first_name">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                    {!! $errors->first('first_name','<span class="invalid-feedback">:message</span>') !!}
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <input type="text" class="form-control {{ $errors->has('last_name') ? ' is-invalid' : '' }}" placeholder="Last Name" name="last_name">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                    {!! $errors->first('last_name','<span class="invalid-feedback">:message</span>') !!}
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <input type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Email" name="email">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                    {!! $errors->first('password','<span class="invalid-feedback">:message</span>') !!}
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <input type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password" name="password">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                    {!! $errors->first('password','<span class="invalid-feedback">:message</span>') !!}
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <input type="password" class="form-control {{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" placeholder="Confirm Password" name="password_confirmation">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                    {!! $errors->first('password_confirmation','<span class="invalid-feedback">:message</span>') !!}
                  </div>
                </div>
                <div class="form-group d-flex justify-content-center">
                  <div class="form-check form-check-flat mt-0">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input" checked> I agree to the terms
                    </label>
                  </div>
                </div>
                <div class="form-group">
                  <button class="btn btn-primary submit-btn btn-block">Register</button>
                </div>
                <div class="text-block text-center my-3">
                  <span class="text-small font-weight-semibold">Already have and account ?</span>
                  <a href="{{ route('login') }}" class="text-black text-small">Login</a>
                  <br><span class="text-small font-weight-semibold"><a href="{{ url('/') }}"> Kembali</a></span>
                </div>
              </form>
            </div>
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
  <script src="{{ asset('sweetalert.min.js') }}"></script>
  @include('sweet::alert')
  <!-- endinject -->
</body>

</html>