@extends('layouts.master', ['title', 'Prueba regiones'])
@section('main')
    <h1>This is a body</h1>
    <hr>
    <hr>
    <div class="container-fluid">
        <table class="table table-hover table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>id</th>
                    <th>nombre reg</th>
                    <th>abrv</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($regiones as $region)
                        <tr>
                            <td>{{$region->idregion}}</td>
                            <td>{{$region->nombre}}</td>
                            <td>{{$region->abrv}}</td>
                        </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
