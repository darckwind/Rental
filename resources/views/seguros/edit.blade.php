@extends('/layout.app')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Moto</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('moto.index') }}"> Back</a>
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
  
    <form action="{{ route('moto.update',$moto->patente) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Patente:</strong>
                    <input type="text" name="patente" value="{{ $moto->patente }}" class="form-control" placeholder="patente" readonly>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Marca:</strong>
                    <input type="text" name="marca" value="{{ $moto->marca }}" class="form-control" placeholder="marca" >
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Modelo:</strong>
                    <input type="text" name="modelo" value="{{ $moto->modelo }}" class="form-control" placeholder="modelo">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Color:</strong>
                    <input type="text" name="color" value="{{ $moto->color }}" class="form-control" placeholder="color">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>nro_motor:</strong>
                    <input type="text" name="nro_motor" value="{{ $moto->nro_motor }}" class="form-control" placeholder="nro_motor" readonly>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>nro_chasis:</strong>
                    <input type="text" name="nro_chasis" value="{{ $moto->nro_chasis }}" class="form-control" placeholder="nro_chasis" readonly>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
@endsection

