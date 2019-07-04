
@extends('moto.layout')

@section('content')

<div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        RVM Info
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-9">
                               	<strong>Patente:</strong>
		                {{ $moto->patente }}
               			 </br>
               			<strong>Marca:</strong>
                		{{ $moto->marca }}
                		</br>
                		<strong>Modelo:</strong>
                		{{ $moto->modelo }}
                		</br>
                		<strong>Color:</strong>
                		{{ $moto->color }}
                		</br>
                		<strong>Nro Motor:</strong>
                		{{ $moto->nro_motor }}
               			</br>
                		<strong>Nro Chasis:</strong>
                		{{ $moto->nro_chasis }}
                            </div>
                            <div class="col-md-3 row">
				<img src="/RVM/{{ $moto->RVM }}" alt="" class="col-md-6 img-thumbnail">
                		<img src="/per_circulacion/{{ $moto->RVM }}" alt="" class="col-md-6 img-thumbnail">
                            </div>
                        </div>
                    </div>
                </div>
                </br>
                <div class="card">
                    <div class="card-header">
                        Seguro
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-9">
                                <p>patente</p>
                                <p></p>
                                <p></p>
                            </div>
                            <div class="col-md-3">

                            </div>
                        </div>
                    </div>
                </div>
                </br>
                <div class="card">
                <div class="card-header">
                    Revicion Tecnica
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-9">
                            <p>patente</p>
                            <p></p>
                            <p></p>
                        </div>
                        <div class="col-md-3">

                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-md-3">
                <img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=https://devriko.com" class="img-thumbnail">
            </div>
        </div>
    </div>










<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> datos vehiculo</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('moto.index') }}"> Back</a>
            </div>
        </div>
    </div>
    <div class="row d-flex justify-content-center">
        <div class="col-md-12">
	    <h3>Datos RVM </h3>
            <div class="form-group col-md-6">
                <strong>Patente:</strong>
                {{ $moto->patente }}
		</br>
                <strong>Marca:</strong>
                {{ $moto->marca }}
		</br>
		<strong>Modelo:</strong>
                {{ $moto->modelo }}
		</br>
		<strong>Color:</strong>
                {{ $moto->color }}
		</br>
		<strong>Nro Motor:</strong>
                {{ $moto->nro_motor }}
		</br>
                <strong>Nro Chasis:</strong>
                {{ $moto->nro_chasis }}
						
            </div>
		<img src="/RVM/{{ $moto->RVM }}" alt="" class="col-md-3 img-thumbnail">
		<img src="/per_circulacion/{{ $moto->RVM }}" alt="" class="col-md-3 img-thumbnail">
        </div>
	<div class="col-md-12">
            <h3>Datos Seguro </h3>
            <div class="form-group col-md-6">
                <strong>Poliza:</strong>
                {{ $seguro->poliza }}
                </br>
                <strong>caducidad:</strong>
                {{ $seguro->venc_seg }}
                                                
            </div>
                <img src="/seguro/{{ $moto->RVM }}" alt="" class="col-md-3 img-thumbnail">
        </div>
	<div class="col-md-12">
            <h3>Datos Revicion tectnica </h3>
            <div class="form-group col-md-6">
                <strong>Venc. Revicion:</strong>
                {{ $rev->venc_rev }}
            </div>
                <img src="/rev-tec/{{ $moto->RVM }}" alt="" class="col-md-3 img-thumbnail">
        </div>


    </div>
</div>
@endsection
