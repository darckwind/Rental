@extends('moto.app')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>lista de arriendos</h2>
            </div>
        </div>
    </div>
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
            <th>Venc. Permiso</th>
	    <th>Venc. Seguro</th>
	    <th>Venc. Rev. Tec.</th>
            <th>accion</th>
        </tr>
        @foreach ($moto as $motos)
        <tr>
            <td>{{ $motos->patente }}</td>
            <td>{{ $motos->marca }}</td>
            <td>{{ $motos->modelo}}</td>
            <td>{{ $motos->venc_per}}</td>
            <td>{{ $motos->venc_seg}}</td>
            <td>{{ $motos->venc_rev}}</td>
            <td>
                <form action="{{ route('moto.destroy',$motos->patente) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('moto.show',$motos->patente) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('moto.edit',$motos->patente) }}">Edit</a>
                    <a class="btn btn-success" href="{{ route('moto.edit',$motos->patente) }}">Rent</a>
		    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection

