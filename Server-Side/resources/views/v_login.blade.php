<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Login</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-widht, initial-scale=1">
        <link rel="stylesheet" href="css/login.css">
        <link rel="shortcut icon" href="img/logo.svg">
    </head>
    <body>
        <div class="container">
            <div class="forms">
                <div class="login">
                    <img class="logo" src="img/logo.svg">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="input-field">
                            <input type="text" name="email" placeholder="Masukan Email" required>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="input-field">
                            <input type="password" name="password" placeholder="Masukan Password" required>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="input-field button">
                            <input type="submit" value="Masuk" {{ __('Login') }}>
                        </div>
                    </form>
                    
                    <div class="login-singup">
                        <span class="text">Tidak Punya Akun?
                            <a href="{{ route('register') }}" class="text signup-text">Signup Sekarang</a>
                        </span>
                   </div>
                </div>
            </div>
        </div>
    </body>
</html>