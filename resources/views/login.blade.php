<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fusula ERP Giriş</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('front/style.css') }}">
</head>
<style>
    body {
        background-image: url("{{ asset('upload/arkafoto2.png') }}");
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>

<body>
    <div class="container">
        @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
        @endif
        
        <form action="{{ route('login') }}" method="POST" class="form-signin">
            @csrf
            <div class="form-group">
                <label for="username">Kullanıcı Adı</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Kullanıcı Adı" required>
            </div>
            <div class="form-group">
                <label for="password">Şifre</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Şifre" required>
            </div>
            <div class="form-group" style="display:none" id="emailGroup">
                <label for="email">E-posta</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="E-posta">
            </div>

            <p class="text-center">
                <a href="#" id="forgotPasswordLink">Şifremi Unuttum?</a>
            </p>
            <button type="submit" class="btn btn-primary btn-block">Giriş Yap</button>
        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="{{ asset('front/script.js') }}"></script>
</body>

</html>