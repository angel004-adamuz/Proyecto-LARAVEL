@extends('layout')

@section('titulo', 'Crear Centro Educativo')

@section('contenido')
    <form method="POST" action="{{ route('centros.store') }}">
        @csrf

        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" name="nombre" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="localidad" class="form-label">Localidad</label>
            <input type="text" name="localidad" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="direccion" class="form-label">Dirección</label>
            <input type="text" name="direccion" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="telefono" class="form-label">Teléfono</label>
            <input type="text" name="telefono" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="{{ route('centros.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection