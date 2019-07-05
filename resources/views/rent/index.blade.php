@extends('/layouts.app')
 
@section('content')

  @foreach ($moto as $motos)
      <p>{{$rent->patente}}</p>
  @endforeach
@endsection

