<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <title>Document Title</title>
    <style>
        .navbar-custom {
            background-color: #042243;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
        }

        h2 {
            margin-top: 20px;
            margin-bottom: 20px;
        }

        a.create-user-link {
            margin-bottom: 10px;
            display: inline-block;
            color: #333;
            text-decoration: none;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        td:last-child {
            white-space: nowrap;
        }

        td a {
            color: #333;
            text-decoration: none;
            margin-right: 5px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-custom navbar-dark">
        <!-- Logo -->
        <a class="navbar-brand" href="#"><img src="https://autoserviciobuap.mx/wp-content/uploads/LOGO-BUAP.jpg"
                width="130" height="60" alt="Logo BUAP"></a>
        <!-- Botón de hamburguesa para dispositivos móviles -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Enlaces de navegación -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="principal">Inicio</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <h2 class="text-center mb-5">Formulario de registro de equipos</h2>
        <form action="<?=base_url('guardar_equipos')?>" method="post">
        <div class="form-group">
                <label for="idequipo" class="form-label">Id:</label>
                <input type="text" class="form-control" id="idequipo" placeholder="Id" name="ideq" required>
            </div>
                <div class="form-group">
                <label for="nombre_equipo" class="form-label">Nombre del equipo:</label>
                <input type="text" class="form-control" id="nombre_equipo" placeholder="Nombre del equipo" name="nomeq" required>
            </div>
            <div class="form-group">
                <label for="marca" class="form-label">Marca:</label>
                <input type="text" class="form-control" id="marca" placeholder="Marca" name="mar" required>
            </div>
            <div class="form-group">
                <label for="modelo" class="form-label">Modelo:</label>
                <input type="text" class="form-control" id="modelo" placeholder="Modelo" name="model" required>
            </div>
            <div class="form-group">
                <label for="descripcion" class="form-label">Descripcion:</label>
                <input type="text" class="form-control" id="descripcion" placeholder="Descripcion" name="descri" required>
            </div>
            <div class="form-group">
                <label for="idlaboratorio" class="form-label">Id del laboratorio:</label>
                <input type="numero" class="form-control" id="idlaboratorio" placeholder="Id" name="idlab" required>
            </div>
            <div class="form-group">
                <label>Estado</label>
                <select name="est" class="form-control">
                    <option value="1">Activo</option>
                    <option value="0">Inactivo</option>
                </select>
            </div>
<button type="submit" class="btn btn-primary">Guardar</button>
</form>

</body>
</html> 