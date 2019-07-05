@extends('/layouts.app')
 
@section('content')

  @foreach ($rent as $rents)
      <p>{{$rents->patente}}</p>
  @endforeach
@endsection

