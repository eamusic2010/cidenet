@extends('layer.master')

@section('content')
<div class="container">
    <div class="row">
        <form>
            <fieldset><h2>Registro de Empleados</h2></fieldset>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="primApel">Primer Apellido</label>
                    <input type="text" class="form-control" id="primApel">
                </div>
                <div class="form-group col-md-6">
                    <label for="secApel">Segundo Apellido</label>
                    <input type="text" class="form-control" id="secApel">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="priNombre">Primer Nombre</label>
                    <input type="text" class="form-control" id="priNombre">
                </div>
                <div class="form-group col-md-6">
                    <label for="secNombre">Segundo Nombre</label>
                    <input type="text" class="form-control" id="secNombre">
                </div>
            </div>
            <div class="form-group">
                <label for="pais">Pais del Empleo</label>
                    <select id="pais" class="form-control">
                        <option selected>Seleccione...</option>
                        <option>Colombia</option>
                        <option>Estados Unidos</option>
                    </select>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="tipoId">Tipo de Identificación</label>
                    <select id="tipoId" class="form-control">
                        <option selected>Seleccione...</option>
                        <option>Cédula Ciudadanía</option>
                        <option>Cédula Extranjería</option>
                        <option>Pasaporte</option>
                        <option>Permiso Especial</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="nroId">Número Documento</label>
                    <input type="number" class="form-control" id="nroId" name="nroId" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" />
                </div>
            </div>
            <div class="form-group">
                <label for="inputAddress2">Address 2</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCity">City</label>
                    <input type="text" class="form-control" id="inputCity">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">State</label>
                    <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="inputZip">Zip</label>
                    <input type="text" class="form-control" id="inputZip">
                </div>
            </div>
            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        Check me out
                    </label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Sign in</button>
        </form>
    </div>
</div>
@stop
