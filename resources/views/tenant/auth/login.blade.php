<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Login V1</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <link rel="icon" type="image/png" href="images/icons/favicon.ico">

        <link
            rel="stylesheet"
            type="text/css"
            href="{{asset('new-auth/vendor/bootstrap/css/bootstrap.min.css')}}">

        <link
            rel="stylesheet"
            type="text/css"
            href="{{asset('new-auth/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">

        <link rel="stylesheet" type="text/css" href="{{asset('new-auth/vendor/animate/animate.css')}}">

        <link
            rel="stylesheet"
            type="text/css"
            href="{{asset('new-auth/vendor/css-hamburgers/hamburgers.min.css')}}">

        <link rel="stylesheet" type="text/css" href="{{asset('new-auth/vendor/select2/select2.min.css')}}">

        <link rel="stylesheet" type="text/css" href="{{asset('new-auth/css/util.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('new-auth/css/main.css')}}">

    </head>
    <body>
        <div class="limiter">
            <div class="container-login100">
                <div class="wrap-login100">
                    <div class="d-none d-md-block col-6 ">
                      <div class="title pb-5">
                        <h3 class="text-center">Sistema de Facturación e Inventario</h3>
                      </div>
                      <div class="login100-pic js-tilt text-center" data-tilt="">
                          <img src="{{asset('new-auth/images/img-01.png')}}" alt="IMG">
                      </div>
                      <div class="flex-c-m pt-3">
                        <a href="https://www.facebook.com/HuamachucoDigital" target="_BLANK" class="login100-social-item bg1">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a href="https://wa.me/51921579526" target="_BLANK" class="login100-social-item bg2">
                            <i class="fa fa-whatsapp"></i>
                        </a>
                      </div>
                    </div>
                    <form class="login100-form" method="POST" action="{{ route('login') }}">
                        @csrf
                        <span class="login100-form-title">
                            Inicia sesión
                        </span>
                        <div
                            class="wrap-input100 validate-input">
                            <input class="input100" type="text" name="email" placeholder="Correo electrónico" value="{{ old('email') }}">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="wrap-input100 validate-input">
                            <input class="input100" type="password" name="password" placeholder="Contraseña">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-lock" aria-hidden="true"></i>
                            </span>
                        </div>
                        @if ($errors->has('email'))
                            <label class="error">
                                <strong>{{ $errors->first('email') }}</strong>
                            </label>
                        @endif
                        @if ($errors->has('password'))
                            <label class="error">
                                <strong>{{ $errors->first('password') }}</strong>
                            </label>
                        @endif
                        <div class="container-login100-form-btn">
                            <button class="login100-form-btn">
                                Ingresa
                            </button>
                        </div>
                        <div class="text-center p-t-136">
                            <a class="txt2" href="https://wa.me/51921579526" target="_BLANK">
                                Solicita tu afiliación
                                <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <script src="{{asset('new-auth/vendor/jquery/jquery-3.2.1.min.js')}}"></script>

        <script src="{{asset('new-auth/vendor/bootstrap/js/popper.js')}}"></script>
        <script src="{{asset('new-auth/vendor/bootstrap/js/bootstrap.min.js')}}"></script>

        <script src="{{asset('new-auth/vendor/select2/select2.min.js')}}"></script>

        <script src="{{asset('new-auth/vendor/tilt/tilt.jquery.min.js')}}"></script>
        <script>
            $('.js-tilt').tilt({scale: 1.1})
        </script>

        <script src="{{asset('new-auth/js/main.js')}}"></script>
    </body>
</html>