@extends('/layouts.app')
 
@section('content')
    <h2>General View</h2>
    </br>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
	    <button type="button" class="close" data-dismiss="alert">&times;</button>
            <p>{{ $message }}</p>
        </div>
	</br>
   @endif
	
    <table class="table table-responsive-sm">
        <tr>
            <th>Patente</th>
            <th>Marca</th>
            <th>Modelo</th>
			<th>Venc. Seguro</th>
			<th>Venc. Rev. Tec.</th>
            <th>Accion</th>
			<th>Descargas</th>
        </tr>
        @foreach ($moto as $motos)
        <tr>
            <td>{{ $motos->patente }}</td>
            <td>{{ $motos->marca }}</td>
            <td>{{ $motos->modelo}}</td>
	    @if($motos->venc_seg<$currentdate)
	     <td style="border: 2px solid red;">{{ $motos->venc_seg}}</td>
	    @else
	    <td>{{ $motos->venc_seg}}</td>
	    @endif
	    @if($motos->venc_rev<$currentdate)
             <td style="border: 2px solid red;">{{ $motos->venc_rev}}</td>
            @else
            <td>{{ $motos->venc_rev}}</td>
            @endif
	    <td>
                <form action="{{ route('moto.destroy',$motos->patente) }}" method="POST">
			<a class="btn btn-info" href="{{ route('moto.show',$motos->patente) }}">Show</a>
			<!--selector multiples edicion de datos-->
			<div class="btn-group">
  				<button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    					Edit
  				</button>
  				<div class="dropdown-menu">
					<a class="dropdown-item" href="{{ route('moto.edit',$motos->patente) }}">Moto info</a>
					<a class="dropdown-item" href="{{ route('seguro.edit',$motos->patente) }}">Seguro info</a>
  				</div>
			</div><!--
		    <a class="btn btn-info" href="{{ route('mantenimiento.show',$motos->patente) }}">Mantencion</a>-->
		    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
	   <!--seccion de descarga de los archivos-->
	    <td>
		<!-- Example single danger button -->
		<div class="btn-group">
  			<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    				Records
  			</button>
  			<div class="dropdown-menu">
    				<a class="dropdown-item" href="{{ route('moto.rvm',$motos->patente) }}">RVM</a>
    				<a class="dropdown-item" href="{{ route('moto.seguro',$motos->patente) }}">Seguro</a>
    				<a class="dropdown-item" href="{{ route('moto.rev',$motos->patente) }}">Revicion Tecnica</a>
   				<a class="dropdown-item" href="{{ route('moto.per',$motos->patente) }}">Permiso Circulacion</a>
  			</div>
		</div>
            </td>
        </tr>
        @endforeach
    </table>
@endsection

