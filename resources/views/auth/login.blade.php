<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Passion+One:400,700,900" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/styles.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="js/main.js"></script>
    <title>After question</title>
</head>
<body>
<div class="container">

<header class="header">
<div class="header_wrapper">
<div class="header_logo" >
<a href="index.php"> <img src="images/logo.png"> </a>
</div><!-- cierra header_logo -->
    <div class="botonera">
    <nav class="main-nav">
        <ul>
            <li><a href="index.php#que_es1">¿Qué es?</a></li>
            <li><a href="index.php#reglas1">Reglas</a></li>
            <li><a href="index.php#players">Players</a></li>
            <li><a href="faqs.php">FAQS</a></li>
            <li><a href="index.php#descargar">Descargalo</a></li>
            <li><a href="register">Registrate</a></li>
        </ul>
    </nav>
    <button class="button_login"> <a href="login">Login</a></button>
    </div><!-- cierra botonera -->
</div><!-- cierra header_wrapper -->
</header>

<main class="reg_fields">
 <form id="register" method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="button_login">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>
                    </form>
</main>

<footer>
    <div class="redes">
    <a href="#" class="fa fa-facebook"></a>
    <a href="#" class="fa fa-twitter"></a>
    <a href="#" class="fa fa-instagram"></a>
    </div>
    <nav class="footer">
        <uL>
            <li>¿Qué es?</li>
            <li>Reglas</li>
            <li>FAQS</li>
            <li>Copyright  2018. Todos los derechos reservados</li>
        </uL>
    </nav>
</footer>

</div> <!-- cierra container -->

</body>
</html>