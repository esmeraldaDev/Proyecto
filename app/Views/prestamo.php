<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Document Title</title>
</head>
<body>
<style>
    body {
        background-color: #fff;
        font-family: Arial, sans-serif;
    }

    .navbar {
        background-color: #042243;
    }

    .navbar-brand {
        color: #fff;
        font-size: 20px;
        font-weight: bold;
        font-style: italic;
    }

    .navbar-brand:hover {
        color: #fff;
    }

    .container-fluid {
        padding: 0;
    }

    .w3-container {
        padding: 20px;
        background-color: #f9f9f9;
        border-radius: 8px;
        margin-top: 50px;
    }

    h2 {
        font-size: 28px;
        font-weight: bold;
        color: #042243;
        font-style: italic;
        margin-bottom: 20px;
    }

    h4 {
        font-size: 20px;
        font-weight: bold;
        color: #042243;
        font-style: italic;
        margin-top: 20px;
        margin-bottom: 10px;
    }

    a {
        color: #042243;
        text-decoration: none;
    }

    table {
        width: 100%;
        margin-top: 20px;
    }

    th, td {
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #042243;
        color: #fff;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }
</style>
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #042243;">
  <a class="navbar-brand" href="principal">Inicio</a>
</nav>
<div class="w3-container">
    <h2>Prestamos</h2><br>
    <a href="<?= base_url('alta_prestamo'); ?>"> Crea un prestamo</a><br>
    <h4>Lista de prestamos</h4>
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <tr>
                <th>ID</th>
                <th>Fecha del prestamo</th>
                <th>Hora de inicio</th>
                <th>Hora de fin</th>
                <th>Observaciones</th>
                <th>Usuario</th>
                <th>Laboratorio</th>
                <th>ID Equipo</th>
                <th>Estado</th>
                <th>Eliminar</th>
                <th>Modificar</th>
            </tr>
            <?php foreach ($datitos as $dato): ?>
            <tr>
                <td><?= $dato['idprestamo']; ?></td>
                <td><?= $dato['fecha_prestamo']; ?></td>
                <td><?= $dato['hora_in']; ?></td>
                <td><?= $dato['hora_fin']; ?></td>
                <td><?= $dato['observaciones']; ?></td>
                <td><?= $dato['usuario1']; ?></td>
                <td><?= $dato['idlaboratorio2']; ?></td>
                <td><?= $dato['idequipo2']; ?></td>
                <td><?= $dato['estado']; ?></td>
                <td><a href="<?= base_url('borrar_prestamo/'.$dato['idprestamo']); ?>"><i class="fa fa-trash"></i></a></td>
                <td><a href="<?= base_url('editar_prestamo/'.$dato['idprestamo']); ?>"><i class="fa fa-pencil"></i></a></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>

