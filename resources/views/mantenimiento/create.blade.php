@extends('/layouts.app')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Agregar nueva moto</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('home') }}"> Back</a>
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
   
<form action="{{ route('mantencion.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
     <div class="row">
        <div class="  col-md-6">
            <div class="form-group">
                <strong>patente:</strong>
                <input type="text" name="patente" class="form-control" placeholder="patente">
            </div>
        </div>
        <div class="  col-md-6">
            <div class="form-group">
                <strong>kilometraje:</strong>
                <input type="number" name="marca" class="form-control" placeholder="km">
            </div>
        </div>
        <div class="  col-md-6">
            <div class="form-group">
                <strong>modelo:</strong>
                <input type="text" name="modelo" class="form-control" placeholder="modelo">
            </div>
        </div>
        <div class="  col-md-6">
            <div class="form-group">
                <strong>color:</strong>
                <input type="text" name="color" class="form-control" placeholder="color">
            </div>
        </div>
        <div class="  col-md-6">
            <div class="form-group">
                <strong>nro_motor:</strong>
                <input type="text" name="nro_motor" class="form-control" placeholder="nro_motor">
            </div>
        </div>
        <div class="  col-md-6">
            <div class="form-group">
                <strong>nro_chasis:</strong>
                <input type="text" name="nro_chasis" class="form-control" placeholder="nro_motor">
            </div>
        </div>
        <div class="col-md-10">
            <div class="form-group">
                <strong>RVM:</strong>
                <input type="file" id="path-rvm" name="RVM">
            </div>
            <img class="col-md-2" src="" id="rvm" alt="">
        </div>
        <div class="  col-md-6">
            <div class="form-group">
                <strong>Vencimiento Permiso circulacion:</strong>
                <input type="date" name="venc_per" class="form-control" placeholder="">
            </div>
        </div>
        <div class="col-md-10">
            <div class="form-group">
                <strong>permiso circulacion:</strong>
                <input type="file" id="path-per" name="img_per">
            </div>
            <img class="col-md-2" src="" id="per" alt="">
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <strong>Poliza:</strong>
                <input type="text" name="poliza" class="form-control" placeholder="poliza">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <strong>Vencimiento:</strong>
                <input type="date" name="venc_seg" class="form-control" placeholder="">
            </div>
        </div>
        <div class="  col-md-12">
            <div class="form-group">
                <strong>Seguro:</strong>
                <input type="file" id="path-seg"name="img_seg">
            </div>
            <img class="col-md-2" src="" id="seg" alt="">
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <strong>Fecha Vencimiento:</strong>
                <input type="date" name="venc_rev" class="form-control" placeholder="">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <strong>Revicion:</strong>
                <input type="file" id="path-rev"name="img_rev">
            </div>
            <img class="col-md-2" src="" id="rev" alt="">
        </div>
        <div class="col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
<script>
document.getElementById("path-rvm").onchange = function () {
    var reader = new FileReader();

    reader.onload = function (e) {
        // get loaded data and render thumbnail.
        document.getElementById("rvm").src = e.target.result;
    };

    // read the image file as a data URL.
    reader.readAsDataURL(this.files[0]);
};
document.getElementById("path-seg").onchange = function () {
    var reader = new FileReader();

    reader.onload = function (e) {
        // get loaded data and render thumbnail.
        document.getElementById("seg").src = e.target.result;
    };

    // read the image file as a data URL.
    reader.readAsDataURL(this.files[0]);
};
document.getElementById("path-rev").onchange = function () {
    var reader = new FileReader();

    reader.onload = function (e) {
        // get loaded data and render thumbnail.
        document.getElementById("rev").src = e.target.result;
    };

    // read the image file as a data URL.
    reader.readAsDataURL(this.files[0]);
};
document.getElementById("path-per").onchange = function () {
    var reader = new FileReader();

    reader.onload = function (e) {
        // get loaded data and render thumbnail.
        document.getElementById("per").src = e.target.result;
    };

    // read the image file as a data URL.
    reader.readAsDataURL(this.files[0]);
};
</script>
@endsection
