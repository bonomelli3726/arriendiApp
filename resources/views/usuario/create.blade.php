@extends('layouts.master', ['title','XXD'])

@section('main')

<div class="row">
    <div class="mx-auto">
        <h1>Registrate como un nuevo usuario</h1>
    </div>
</div>

<div class="row mt-1">
    <div class="col-lg-4"></div>
    <div class="col-lg-4">
        <form action="">
            <label for="nombre"> Nombres </label>
            <input type="text" class="form-control">

            <label for="apellidop"> Apellido Paterno </label>
            <input type="text" class="form-control" name="apellidop">

            <label for="apellidom"> Apellido Materno </label>
            <input type="text" class="form-control">

            <label for="direccion"> Dirección </label>
            <input type="text" class="form-control">

            <label for="fnac"> Fecha de nacimiento </label>
            <input type="date" class="form-control">

            <label for="telefono"> Telefono </label>
            <input type="text" class="form-control">

            <label for="email"> correo electrónico </label>
            <input type="email" class="form-control">

            <label for="r-email"> Repita correo electrónico </label>
            <input type="email" class="form-control">

            <label for="password"> Password </label>
            <input type="password" class="form-control">
        </form>
    </div>
</div>

<!-- Considerar tener los siguientes puntos 
1- Repetición de correo electrónico para hacer validaciones
2- Strip de teléfono para sacar el +
3- Controlador de contraseña (password power simulator)


-->

@endsection