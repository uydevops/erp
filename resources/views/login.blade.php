<!DOCTYPE html>

<html lang="tr">

<head>
    <meta charset="utf-8">
    <title>
        Giriş - FUSULA Ön Muhasebe
    </title>
    <meta name="description" content="FUSULA Ön Muhasebe Giriş">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
    <!-- Call App Mode on ios devices -->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <!-- Remove Tap Highlight on Windows Phone IE -->
    <meta name="msapplication-tap-highlight" content="no">
    <!-- base css -->
    <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="css/vendors.bundle.css">
    <link id="appbundle" rel="stylesheet" media="screen, print" href="css/app.bundle.css">
    <link id="mytheme" rel="stylesheet" media="screen, print" href="#">
    <link id="myskin" rel="stylesheet" media="screen, print" href="css/skins/skin-master.css">
    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="mask-icon" href="img/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="stylesheet" media="screen, print" href="css/fa-brands.css">
</head>

<body>
    <div class="page-wrapper auth">
        <div class="page-inner bg-brand-gradient">
            <div class="page-content-wrapper bg-transparent m-0">
                <div class="height-10 w-100 shadow-lg px-4 bg-brand-gradient">
                    <div class="d-flex align-items-center container p-0">
                        <div class="page-logo width-mobile-auto m-0 align-items-center justify-content-center p-0 bg-transparent bg-img-none shadow-0 height-9 border-0">
                            <a href="javascript:void(0)" class="page-logo-link press-scale-down d-flex align-items-center">
                                <img src="img/logo.png" alt="FUSULA Ön Muhasebe" aria-roledescription="logo">
                                <span class="page-logo-text mr-1">FUSULA Ön Muhasebe</span>
                            </a>
                        </div>
                        <a href="page_register.html" class="btn-link text-white ml-auto">
                            Hesap Oluştur
                        </a>
                    </div>
                </div>
                <div class="flex-1" style="background: url(img/svg/pattern-1.svg) no-repeat center bottom fixed; background-size: cover;">
                    <div class="container py-4 py-lg-5 my-lg-5 px-4 px-sm-0">
                        <div class="row">
                            <div class="col col-md-6 col-lg-7 hidden-sm-down">
                                <h2 class="fs-xxl fw-500 mt-4 text-white">
                                    Geliştiriciler ve Programcılar için En Basit UI Araç Seti
                                    <small class="h3 fw-300 mt-3 mb-5 text-white opacity-60">
                                        Size en son yenilikçi UX tasarımı ve mühendislik seviyesini sunuyoruz. 600'den fazla düzen kombinasyonuna sahip en modüler araç seti. SmartAdmin'un basitliğini her zaman ve her yerde deneyimleyin!
                                    </small>
                                </h2>
                                <a href="#" class="fs-lg fw-500 text-white opacity-70">Daha Fazla Bilgi &gt;&gt;</a>
                                <div class="d-sm-flex flex-column align-items-center justify-content-center d-md-block">
                                    <div class="px-0 py-1 mt-5 text-white fs-nano opacity-50">
                                        Bizi sosyal medyada bulun
                                    </div>
                                    <div class="d-flex flex-row opacity-70">
                                        <a href="#" class="mr-2 fs-xxl text-white">
                                            <i class="fab fa-facebook-square"></i>
                                        </a>
                                        <a href="#" class="mr-2 fs-xxl text-white">
                                            <i class="fab fa-twitter-square"></i>
                                        </a>
                                        <a href="#" class="mr-2 fs-xxl text-white">
                                            <i class="fab fa-google-plus-square"></i>
                                        </a>
                                        <a href="#" class="mr-2 fs-xxl text-white">
                                            <i class="fab fa-linkedin"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-5 col-xl-4 ml-auto">
                                <h1 class="text-white fw-300 mb-3 d-sm-block d-md-none">
                                    Güvenli Giriş
                                </h1>
                                <div class="card p-4 rounded-plus bg-faded">
                                    <form id="js-login"  action="{{route('loginPage')}}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label class="form-label" for="email">Email</label>
                                            <input type="email" id="email" name="email" class="form-control form-control-lg"  required>
                                            <div class="invalid-feedback">Hayır, bunu kaçırdınız.</div>
                                            <div class="help-block">Uygulamanıza özgü e-posta adresi veya ID'nizi girin.</div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="password">Şifre</label>
                                            <input type="password" id="password"  name="password" class="form-control form-control-lg"  required>
                                            <div class="invalid-feedback">Üzgünüz, bunu kaçırdınız.</div>
                                            <div class="help-block">Şifreniz</div>
                                        </div>
                                        <div class="row no-gutters">
                                            @if(session()->has('error'))
                                                <p class="alert alert-danger">
                                                    {{session('error')}}
                                                </p>
                                            @endif
                                            <div class="col-lg-6 pl-lg-1 my-2">
                                                <button id="js-login-btn" type="submit" class="btn btn-danger btn-block btn-lg">Güvenli Giriş</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="position-absolute pos-bottom pos-left pos-right p-3 text-center text-white">
                            2023 © FUSULA Ön Muhasebe by&nbsp;<a href='https://www.fusula.com' class='text-white opacity-40 fw-500' title='fusula.com' target='_blank'>fusula.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="js/vendors.bundle.js"></script>
    <script src="js/app.bundle.js"></script>
    <script>
        $("#js-login-btn").click(function(event) {

            // Fetch form to apply custom Bootstrap validation
            var form = $("#js-login")

            if (form[0].checkValidity() === false) {
                event.preventDefault()
                event.stopPropagation()
            }

            form.addClass('was-validated');
            // Perform ajax submit here...
        });
    </script>
</body>

</html>
