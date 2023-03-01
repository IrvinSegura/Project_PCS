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
                <h2>INFORMACION<br>DE CONTACTO</h2>
            </section>
            <section class="info_items">
                <p><span class="fa fa-envelope"></span> info.contact@gmail.com</p>
                <p><span class="fa fa-mobile"></span> +1(585) 902-8665</p>
            </section>
        </section>
        <form action="/contacto/datos" method="post" class="form_contact" >
            {{ csrf_field() }}}

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            
            <h2>Envianos un mensaje</h2>
            <div class="user_info">
                <label for="names">Nombre</label>
                <input type="text" id="nombre" name="nombre" required>
                <label for="phone">Telefono</label>
                <input type="text" id="telefono" name="telefono" required>
                <label for="email">Correo electronico *</label>
                <input type="text" id="email" name="email" required>
                <label for="mensaje">Mensaje *</label>
                <textarea id="mensaje" name="mensaje" required></textarea>
                <input type="submit" value="Enviar Mensaje">
            </div>
    </section>
    <script src="{{ asset('js/Contacto.js') }}"></script>
</body>
</html>