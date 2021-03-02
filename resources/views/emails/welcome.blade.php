<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Correo de Bienvenida</title>
</head>
<body>
<style>
    @media only screen and (max-width: 600px) {
        .inner-body {
            width: 100% !important;
        }

        .footer {
            width: 100% !important;
        }
    }

    @media only screen and (max-width: 500px) {
        .button {
            width: 100% !important;
        }
    }

    body{
        background-color: #bbf1bb !important;
        text-align: center;
    }
    p{
        text-align: center !important;
        color: black;
    }
    strong{
        color: #76c84a;
    }

    .container{
        background-image: url("https://github.com/yeselyshoyos/imagenes/blob/master/fondo.png?raw=true");
    }

    .card-body{
        background-color: white !important;
        background-image: url("https://github.com/yeselyshoyos/imagenes/blob/master/fondo.png?raw=true");
    }
    .kazandre{
        color: #76c84a;
    }
    .button{
        width: 145px;
        height: 30px;
        background-color: #76c84a;
        color: white;
        font-size: 18px;
        border-radius: 20px 20px 20px 20px;
        padding-bottom: 40px !important;
    }

    .footer{
        background-image: url("https://github.com/yeselyshoyos/imagenes/blob/master/fondo.png?raw=true");
        background-color: #bbf1bb !important;
    }


</style>
<div class="container">
    <a href="{{ url('/') }}"><img src="https://github.com/yeselyshoyos/imagenes/blob/master/logooficial.png?raw=true" class="logo" alt=""></a>

    <div class="card-body text-center">
        <img src="https://github.com/yeselyshoyos/imagenes/blob/master/welcome.png?raw=true" width="auto" height="auto" alt="">
        <br>
        <p class="fs-6 fst-normal"> Un gran abrazo para darte  la bienvenida. !Ahora eres parte  de nuestra <strong class="kazandre">familia Kazandré Boutique!</strong></p>
        <br>
        <a href="{{ url('/') }}" class="button fst-normal">Ir a la tienda</a>
    </div>
</div>
<hr>
<div class="footer">
    <a href="{{ url('/') }}">@Kazandre Boutique</a>
</div><br>
</body>
</html>
