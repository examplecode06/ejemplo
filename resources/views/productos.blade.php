<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/fonts/simple-line-icons/style.min.css">
    <link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/colors.min.css">
    <link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Tabla de Productos</title>
</head>
<body>
    <!-- Contenedor para centrar el contenido -->
    <div class="container mt-5">
        <a href="{{ route('index') }}" class="btn btn-warning mb-3">
            <i class="fas fa-arrow-left text-white"></i> Atrás
        </a>
        <!-- Centrar el h1 -->
        <h1 class="text-center mb-4">Lista de Productos</h1>
        <!-- Tabla con estilos mejorados -->
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>Nombre del Producto</th>
                    <th>Precio</th>
                </tr>
            </thead>
            <tbody>
                @foreach($productos as $producto)
                <tr>
                    <td>{{ $producto->nombre }}</td>
                    <td class="text-center">S/. {{ $producto->precio }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
