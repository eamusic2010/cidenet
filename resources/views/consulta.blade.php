<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta Empleados</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">CIDENET</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Consulta <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Registro</a>
      </li>
    </ul>
  </div>
</nav>
<div class="container">
    <div class="row">
    <table class="table table-bordered table-dark">
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">PRIMER APELLIDO</th>
        <th scope="col">SEGUNDO APELLIDO</th>
        <th scope="col">PRIMER NOMBRE</th>
        <th scope="col">SEGUNDO NOMBRE</th>
        <th scope="col">PAIS</th>
        <th scope="col">TIPO DOCUMENTO</th>
        <th scope="col">NRO DOCUMENTO</th>
        <th scope="col">EMAIL</th>
        <th scope="col">FECHA INGRESO</th>
        <th scope="col">ESTADO</th>
        <th scope="col">FECHA Registro</th>
        <th scope="col">Accion</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <th scope="row">1</th>
        <td>Apellido1</td>
        <td>Apellido2</td>
        <td>Nombre1</td>
        <td>Nombre2</td>
        <td>Pais</td>
        <td>Tipo Documento</td>
        <td>Nro Documento</td>
        <td>Email</td>
        <td>Fecha Ingreso</td>
        <td>Estado</td>
        <td>Fecha Registro</td>
        <td>Acciones</td>
        </tr>
    </tbody>
    </table>
    </div> {{-- .row --}}
</div>

<script src="{{asset('js/app.js')}}"></script>
</body>
</html>