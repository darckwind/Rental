@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
			<p>motos en sistema</p>
			<img src="https://img.icons8.com/ios/50/000000/dirt-bike.png">
			{{$bikecount}}
                </div>
            </div>
        </div>
	<div class="col-md-6">
            <div class="card">
                <div class="card-body">
			<p>motos arrendadas del mes</p>
                        <img src="https://img.icons8.com/ios/50/000000/dirt-bike.png">
                        {{$rent->count()}}
                </div>
            </div>
        </div>
    </div>
</br>

	<nav class="navbar navbar-dark bg-dark justify-content-between">
  		<a class="navbar-brand" style="color:white;">Buscador</a>
  		<form class="form-inline">
			<div class="input-group">
				<div class="input-group-prepend">
                                        <label class="input-group-text" for="inputGroupSelect01" >Model</label>
                        	</div>
				<select class="custom-select mr-sm-2" id="inputGroupSelect01">
    					<option selected>Modelo</option>
    					<option value="1">One</option>
    					<option value="2">Two</option>
    					<option value="3">Three</option>
  				</select>
			</div>
			
			<div class="input-group">
				<div class="input-group-prepend">
    					<label class="input-group-text" >Pick Up</label>
  				</div>
    				<input class="form-control mr-sm-2" type="date" id="pick_up"placeholder="Pick up">
			</div>
			<div class="input-group">
				<div class="input-group-prepend">
                                	<label class="input-group-text" for="drop_off">Drop Off</label>
                        	</div>
				<input class="form-control mr-sm-2" type="date" id="drop_off"placeholder="Pick up">
    			</div>
			<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  		</form>
	</nav>

</br>
	{!! $calendar->calendar() !!}

        {!! $calendar->script() !!}
</div>

@endsection
