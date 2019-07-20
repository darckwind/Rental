@extends('/layouts.app')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Mantencion</h2>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="container">
    <div id="accordion">
        <div class="card">
            <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                            aria-expanded="true" aria-controls="collapseOne">
                        Mantencion anterior
                    </button>
                </h5>
            </div>
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                    <table class="table">
                        <tbody>
                        <tr>
                            <td>Kilometraje: </td>
                            <td>Nivel de Aceite: </td>
                            <td>Estado de cadena: </td>
                            <td>Nivel de refrigerante: </td>
                        </tr>
                        <tr>
                            <td>Nivel liq. frenos:</td>
                            <td>Freno Delantero:</td>
                            <td>Freno Tracero:</td>
                            <td>Bateria:</td>
                        </tr>
                        <tr>
                            <td>Salida 12V:</td>
                            <td>Puños calefactables:</td>
                            <td>Nivel combustible:</td>
                            <td>Luces:</td>
                        </tr>
                        <tr>
                            <td>Notas adicionales:</td>
                        </tr>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
        <br>
        <div class="card">
            <div class="card-header" id="headingTwo">
                <h5 class="mb-0">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                            aria-expanded="false" aria-controls="collapseTwo">
                        Nueva Mantencion
                    </button>
                </h5>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="card-body">
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="inputEmail4">Kilomentraje</label>
                                <input type="number" class="form-control" id="inputEmail4" placeholder="99999">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputPassword4">Nivel de Aceite</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option>Mantiene anterior</option>
                                    <option>Repostado</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputPassword4">Estado de cadena</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option>Mantiene anterior</option>
                                    <option>Remplazada</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputPassword4">Nivel de refrigerante</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option>Mantiene anterior</option>
                                    <option>Repostado</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputPassword4">Nivel liq. frenos</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option>Mantiene anterior</option>
                                    <option>Repostado</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputPassword4">Freno Delantero</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option>Mantiene anterior</option>
                                    <option>Remplazado</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputPassword4">Freno Tracero</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option>Mantiene anterior</option>
                                    <option>Remplazado</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputPassword4">Bateria</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option>Mantiene anterior</option>
                                    <option>Remplazada</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputPassword4">Salida 12 V</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option>Mantiene anterior</option>
                                    <option>Remplazada</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputPassword4">Puños calefactables</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option>Mantiene anterior</option>
                                    <option>Remplazado</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputPassword4">Nivel Combustible</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option>Mantiene anterior</option>
                                    <option>Repostado</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputPassword4">Luces</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option>Mantiene anterior</option>
                                    <option>Remplazada</option>
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="inputPassword4">notas adicionales</label>
                                <textarea class="form-control" placeholder="datos adicionales"></textarea>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-block btn-primary">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
