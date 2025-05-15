@extends('layout')

@section('titulo', 'Lista de Centros')

@section('contenido')
    <a href="{{ route('centros.create') }}" class="btn btn-success mb-3">Crear Centro</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Dirección</th>
                <th>Teléfono</th>
                <th>Email</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($centros as $centro)
                <tr>
                    <td>{{ $centro->nombre }}</td>
                    <td>{{ $centro->direccion }}</td>
                    <td>{{ $centro->telefono }}</td>
                    <td>{{ $centro->email }}</td>
                    <td>
                        <a href="{{ route('centros.edit', $centro) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('centros.destroy', $centro) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('¿Eliminar centro?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
