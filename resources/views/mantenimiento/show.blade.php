@extends('/layouts.app')

@section('content')
    @if($manteniento == null)
        <p>no se precentan mantenciones para el vehiculo</p>
    @else
        <p>{{$manteniento}}</p>
    @endif
@endsection