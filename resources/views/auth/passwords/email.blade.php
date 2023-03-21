<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable">

<head>
    <base href="/">
    <meta charset="utf-8" />
    <title>Reset Password</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="admin/assets/images/favicon.ico">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="client/assets/css/vendor/font.awesome.min.css">
    <!-- Layout config Js -->
    <script src="admin/assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="admin/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="admin/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="admin/assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="admin/assets/css/custom.min.css" rel="stylesheet" type="text/css" />

</head>

<body>

    <div class="auth-page-wrapper pt-5">
        <!-- auth page content -->
        <div class="auth-page-content">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card mt-4">
                            <div class="card-body p-4">
                                <div class="text-center mt-2">
                                    <lord-icon src="https://cdn.lordicon.com/rhvddzym.json" trigger="loop"
                                        colors="primary:#0ab39c" class="avatar-xl"></lord-icon>
                                </div>


                                <div class="text-center mt-2">
                                    <h5 class="text-primary">Reset Password</h5>
                                </div>
                                <div class="p-2">
                                    <form action="{{ route('password.email') }}" method="POST">
                                        @csrf

                                        @if (session('status'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('status') }}
                                        </div>
                                        @endif

                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input name="email" type="text" class="form-control" id="email"
                                                placeholder="Enter email" value="{{ old('email') }}" required
                                                autocomplete="email" autofocus>

                                            @error('email')
                                            <span class="text-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="mt-4">
                                            <button class="btn btn-success w-100" type="submit">Send Email</button>
                                        </div>

                                        <div class="mt-4 text-center">
                                            <div class="signin-other-title">
                                                <a href="{{ route('register') }}">
                                                    <h5 class="fs-13 mb-4 title">You don't have account</h5>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="mt-4">
                                            <a href="/"><i class="fa fa-arrow-left"></i> Turn back home</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end auth page content -->
    </div>
    <!-- end auth-page-wrapper -->

    <!-- JAVASCRIPT -->
    <script src="admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="admin/assets/libs/simplebar/simplebar.min.js"></script>
    <script src="admin/assets/libs/node-waves/waves.min.js"></script>
    <script src="admin/assets/libs/feather-icons/feather.min.js"></script>
    <script src="admin/assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="admin/assets/js/plugins.js"></script>

    <!-- particles js -->
    <script src="admin/assets/libs/particles.js/particles.js"></script>

    <!-- particles app js -->
    <script src="admin/assets/js/pages/particles.app.js"></script>
    <!-- password-addon init -->
    <script src="admin/assets/js/pages/passowrd-create.init.js"></script>
</body>

</html>