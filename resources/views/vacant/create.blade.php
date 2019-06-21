@extends('layouts.app')

@section('content')
    <div class="container">
        <form method="post" action="/vacants/create">
            {{ csrf_field() }}
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Nombre</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="name" id="name" placeholder="Nombre">
                </div>
            </div>
            <div class="form-group row">
                <label for="description" class="col-sm-2 col-form-label">Descripción</label>
                <div class="col-sm-10">
                <textarea class="form-control" id="description" name="description" placeholder="Apellidos"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="started_at" class="col-sm-2 col-form-label">Fecha de inicio</label>
                <div class="col-sm-10">
                <input type="date" class="form-control" id="started_at" name="started_at">
                </div>
            </div>

            <div class="form-group row">
                <label for="finished_at" class="col-sm-2 col-form-label">Fecha de cierre</label>
                <div class="col-sm-10">
                <input type="date" class="form-control" id="finished_at" name="finished_at">
                </div>
            </div>

            <div class="form-group row">
                <label for="state" class="col-sm-2 col-form-label">Correo electronico</label>
                <div class="col-sm-10">
                <select class="form-control" name="estate">
                    <option selected>Seleccione una opción</option> 
                    <option value="Inactiva">Inactiva</option> 
                    <option value="Disponible">Disponible</option>
                    
                </select>
                </div>
            </div>
            
            <div class="form-group row">
                <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Crear vacante</button>
                </div>
            </div>
        </form>
    </div>
@endsection