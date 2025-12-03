<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <div class="container mt-4">
        <h2>Lista de Usuarios</h2>

        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Primer Apellido</th>
                    <th>Segundo Apellido</th>
                    <th>Correo</th>
                    <th>Tipo</th>
                    <th>Password</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($usuarios as $datos)
                <tr>
                    <td>{{ $datos->id }}</td>
                    <td>{{ $datos->nombre }}</td>
                    <td>{{ $datos->Primer_Apellido }}</td>
                    <td>{{ $datos->Segundo_Apellido }}</td>
                    <td>{{ $datos->correo }}</td>
                    <td>{{ $datos->tipo }}</td>
                    <td>{{ $datos->password }}</td>
                    <td>
                        <a href="{{ url('/Admin/'.$datos->id.'/edit') }}" class="btn btn-warning btn-sm">Editar</a>

                        <form action="{{ url('/Admin/'.$datos->id) }}" method="post" class="d-inline-block">
                            @csrf
                            {{ method_field('DELETE') }}
                            <input type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Quieres borrar?')" value="Borrar">
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <a href="{{ url('/Admin/create') }}" class="btn btn-success">Crear Nuevo Usuario</a>
    </div>
</body>
</html>
