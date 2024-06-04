@extends('adminlte::page')

@section('title', 'Editar')

@section('content')
<div class="container p-5">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">

                @if (session("status"))
                <div class="alert alert-success">{{ session("status") }}</div>
                @endif

                <div class="card">
                    <div class="card-header">
                        <h4 class="d-flex justify-content-between">Turnos</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route("admin.shift.update", $shifts->id) }}" method="post">
                            @method('PUT')
                            @csrf

                            <div class="form-group">
                                <label for="name">Nombre del turno</label>
                                <input type="text" name="name" class="form-control" value="{{ $shifts->name }}" required>
                                @error("name") <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="form-group">
                                <label for="start_time">Hora de Inicio</label>
                                <input type="time" class="form-control" name="start_time" value="{{ $shifts->start_time }}" required>
                                @error("start_time") <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="form-group">
                                <label for="end_time">Hora de Fin</label>
                                <input type="time" class="form-control" name="end_time" value="{{ $shifts->end_time }}" required>
                                @error("end_time") <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="d-flex justify-content-between mt-4">
                                <button type="submit" class="btn btn-primary">Aceptar</button>
                                <a class="btn btn-danger" href="{{ route("admin.shift.index")}}">Cancelar</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>

</div>
@stop

@section('css')
{{-- Add here extra stylesheets --}}
{{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop
