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
            <h2 class="text-center mb-4">Lupa Password</h2>
            <div class="auto-form-wrapper">
                <h2>Assalamualaikum</h2>
                <div class="panel panel-info">
                    <div class="panel-heading">Kamu pengen ganti password ya?</div>
                    <br>
                    <div class="panel-body">
                        <form action="{{ route('reminders.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="email" class="form-control" placeholder="Input emailnya disini" name="email">
                                    <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="mdi mdi-check-circle-outline"></i>
                                    </span>
                                    </div>
                                </div>
                            </div>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <button type="submit" class="btn btn-outline-dark">Submit</button>
                                </li>
                                <li style="margin-left:120px" class="list-inline-item">
                                    <a href="{{ url('/') }}" class="btn btn-outline-primary">Kembali</a>
                                </li>
                            </ul>
                        </form>
                    </div>
                </div>
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