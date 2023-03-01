<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/Contacto.css') }}" />
</head>
<body>
    <section class="form_wrap">
        <section class="cantact_info">
            <section class="info_title">
                <span class="fa fa-user-circle"></span>
                <h2>Registro<br>de Usuario</h2>
            </section>
            <section class="info_items">
            </section>
        </section>
        <form action="/login/verificar" method="post" class="form_contact" >
            {{ csrf_field() }}
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <h2>Login:</h2>
            <div class="user_info">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" required>
                <label for="password">Contraseña:</label>
                <input type="password" name="password" id="password" required>
                <input type="submit" value="Enviar">   
            </div>
        </form>
    </section>
</body>
</html>