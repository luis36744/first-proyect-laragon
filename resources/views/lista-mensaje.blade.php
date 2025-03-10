<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla</title>
</head>
<body>
    <h1>Mensajes recibidos</h1>

    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Fecha</th>
        </tr>

        @foreach ($mensajes as $mensaje)
        <tr>
            <td>{{ $mensaje->nombre }}</td>
            <td>{{ $mensaje->correo }}</td>
            <td>{{ $mensaje->created_at }}</td>
        </tr>
        @endforeach

    </table>
</body>
</html>