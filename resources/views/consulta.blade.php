@extends('layer.master')

@section('content')
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
@stop