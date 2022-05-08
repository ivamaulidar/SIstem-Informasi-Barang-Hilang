
    
</body>
</html>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Registrasi</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/registrasi.css">
        <link rel="shortcut icon" href="img/logo.svg">
    </head>
    <body>
        <div class="container">
            <div class="forms">
                <div class="login">
                    <img class="logo" src="img/logo.svg">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="input-field">
                            <input type="text" name="name" placeholder="Masukan Nama" required autocomplete="name" >
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="input-field">
                            <input type="text" name="email" placeholder="Masukan Email" required autocomplete="email">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="input-field">
                            <input type="password" name="password" placeholder="Masukan Password" required autocomplete="new-password">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="input-field">
                            <input type="password" name="password_confirmation" placeholder="Masukan Ulang Password" required autocomplete="new-password">
                        </div>
                        <div class="input-field button">
                            <input type="submit" value="Daftar" {{ __('Register') }}>
                        </div>
                    </form>
                   </div>
                </div>
            </div>
        </div>
    </body>
</html>