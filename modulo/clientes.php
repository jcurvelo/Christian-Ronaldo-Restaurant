<?php include '../models.php'; ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="style.css">
    <title>Modulo de facturacion</title>
  </head>
  <body>
<!-- header -->
    <nav class="navbar navbar-dark bg-dark" >
      <div class="dropdown">
        <button class="btn btn-primary" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
          <img src="menu.png" alt="menu" height="30px">
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="index.html">Inicio</a>
          <a class="dropdown-item" href="productos.html">Productos</a>
          <a class="dropdown-item" href="clientes.html">Clientes</a>
          <a class="dropdown-item" href="inventario.html">Inventario</a>
          <a class="dropdown-item" href="ventas.html">Ventas</a>
        </div>
      </div>
      <form class="form-inline">
        <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
        <button type="button" class="btn btn-outline-light">Buscar</button>
      </form>
    </nav>
<!-- fin header-->
<!--Cuerpo -->
<div class="container">
  <div class="row">
    <div class="col mt-4 cuerpoproducto">
      <h1>Directorio de Clientes</h1>
      <a href="nuevoCliente.html" target="_blank"><span class="badge badge-success">Agregar Nuevo Cliente</span></a>
    </div>
  </div>
  <div class="row mt-5">
    <div class="col">
      <table border="1px solid black">
        <tr>
          <th class="list-group-item-dark c">ID_Cliente</th>
          <th class="list-group-item-dark c">Nombre</th>
          <th class="list-group-item-dark c">Apellido</th>
          <th class="list-group-item-dark c">Telefono</th>
          <th class="list-group-item-dark c">Acciones</th>
        </tr>
        <?php
          $verClientes = getClients();
          while($row = $verClientes->fetch_assoc()){
            echo "
              <tr class='row_cliente'>
                <td>".$row['ID_Cliente']."</td>
                <td>".$row['Nombre_C']."</td>
                <td>".$row['Apellido_C']."</td>
                <td>".$row['Telefono_C']."</td>
              <td>
            ";
          }
        ?>
      </table>
    </div>
  </div>
</div>
<!--Fin Cuerpo -->

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>