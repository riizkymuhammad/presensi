
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sistem Presensi Pegawai UMRAH</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="admin/css/bootstrap.css">
    <link rel="stylesheet" href="admin/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="admin/css/app.css">
    <link rel="stylesheet" href="admin/css/pages/auth.css">
</head>

<body>
    <div id="auth">

        <div class="row h-100">
            <div class="col-lg-5 col-12">
                <div id="auth-left">
                    <div class="auth-logo">
                        <a href="index.html">
                            <img src="logoumrah.png" style="min-height: 100px;"  alt="Logo"><h3>Universitas Maritim Raja Ali Haji </h3></a>
                    </div>
                    <div class="form-group position-relative has-icon-left mb-4">
                    @if(count($errors) > 0)
                                <div class="alert alert-danger alert-dismissible show fade">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                    @endif
                        </div>
                        <h2 class="auth-title">Masuk.</h2>
                    <p class="auth-subtitle mb-5">Sistem Informasi Presensi UMRAH</p>

                    <form method="POST" action="{{ route('login') }}">
            @csrf
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" class="form-control form-control" placeholder="Email" name="email">
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" class="form-control form-control" placeholder="Password" name="password">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>
                        <input class="btn btn-primary btn-block  shadow-lg mt-4" type="submit" value="Masuk">
                    </form>
                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right" style="background-image: url('background-head.png')">

                </div>
            </div>
        </div>

    </div>
</body>

</html>

<script src="{{ asset('/admin/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('/admin/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('/admin/js/main.js') }}"></script>
