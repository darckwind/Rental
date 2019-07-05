@extends('/layouts.app')

@section('content')
    @if($manteniento[0] == null)
        <p>no se precentan mantenciones para el vehiculo</p>
    @else
        <p>{{$manteniento[0]}}</p>
    @endif
@endsection