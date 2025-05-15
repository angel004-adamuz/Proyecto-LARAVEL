@extends('layout')

@section('content')
    <h1>Detalles del Centro Educativo</h1>

    <table class="table table-bordered">
        <tr>
            <th>Nombre</th>
            <td>{{ $centro->nombre }}</td>
        </tr>
        <tr>
            <th>Dirección</th>
            <td>{{ $centro->direccion }}</td>
        </tr>
        <tr>
            <th>Teléfono</th>
            <td>{{ $centro->telefono }}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{ $centro->email }}</td>
        </tr>
    </table>

    <a href="{{ route('centros.index') }}" class="btn btn-secondary">Volver</a>
@endsection
