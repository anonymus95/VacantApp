@extends('layouts.app')

@section('content')
    <div class="container">
        <form method="post" action="/aspirants/create" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Nombre (s)</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="name" id="name" placeholder="Nombre">
                </div>
            </div>
            <div class="form-group row">
                <label for="last_name" class="col-sm-2 col-form-label">Apellidos</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Apellidos">
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Correo electronico</label>
                <div class="col-sm-10">
                <input type="email" class="form-control" id="email" name="email" placeholder="Ingrese correo electronico">
                </div>
            </div>
            <div class="form-group row">
                <label for="hv" class="col-sm-2 col-form-label">Hoja de vida</label>
                <div class="col-sm-10">
                <input type="file"  id="hv" name="hv">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Postularme a la vacante</button>
                </div>
            </div>
        </form>
    </div>
@endsection