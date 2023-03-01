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
        <form action="/login/datos" method="post" class="form_contact" >
            {{ csrf_field() }}

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            
            <h2>Ingresa tu informacion:</h2>
            <div class="user_info">
                <label for="names">Nombre:</label>
                <input type="text" id="nombre" name="nombre" >
                <label for="phone">Usuario:</label>
                <input type="text" id="usuario" name="usuario" >
                <label for="email">Correo electronico:</label>
                <input type="text" id="email" name="correo" >
                <label for="mensaje">Contraseña:</label>
                <textarea id="password" name="password" ></textarea>
                <input type="submit" value="Registrarse">
            </div>
    </section>
    <script src="{{ asset('js/Contacto.js') }}"></script>
</body>
</html>