@extends('moto.app')
 
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
	
    <table class="table table-responsive">
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
                    <a class="btn btn-primary" href="{{ route('moto.edit',$motos->patente) }}">Edit</a>
		    <a class="btn btn-info" href="{{ route('moto.show',$motos->patente) }}">Mantencion</a>
		    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
	    <td class="row">
                <a class="btn btn-info" style="margin-left:1px;" href="{{ route('moto.rvm',$motos->patente) }}">RVM</a>
                <a class="btn btn-info" style="margin-left:1px;" href="{{ route('moto.seguro',$motos->patente) }}">Seguro</a>
                <a class="btn btn-info" style="margin-left:1px;" href="{{ route('moto.rev',$motos->patente) }}">Rev. Tec.</a>
                <a class="btn btn-info" style="margin-left:1px;" href="{{ route('moto.per',$motos->patente) }}">Per. Circ.</a>
            </td>
        </tr>
        @endforeach
    </table>
@endsection

