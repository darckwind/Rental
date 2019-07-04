@extends('moto.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Agregar nuevo arriendo</h2>
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
<div class="container">
	<form action="{{ route('rent.store') }}" method="POST">
    		@csrf
     		<div class="row">
			<div class="col-sm-12">
        			<div class="  col-md-6">
            				<div class="form-group">
						<strong>patente:</strong>
						<select name="patente" class="form-control" style="height: 32px;">
                					@foreach ($rent as $rents)
                    						<option >{{$rents->patente}}</option>
                					@endforeach
                				</select>
            				</div>
        			</div>
				<div class="col-md-6">
					<div class="form-group">
						<strong>tipo de ocupacion</strong>
						<select class="form-control" style="height: 32px;" name="arriendo">
							<option>arriendo</option>
							<option>mantencion</option>
						</select>
					</div>
				</div>
			</div>
			<div class="col-sm-12 row">
        			<div class=" col-md-3">
            				<div class="form-group">
                				<strong>Pick Up:</strong>
                				<input type="date" name="rent_in" class="form-control">
            				</div>
       				</div>
				<div class=" col-md-3">
                                        <div class="form-group">
                                                <strong>Pick Up Location:</strong>
                                                <input type="text" name="location" class="form-control">
                                        </div>
                                </div>
				<div class=" col-md-3">
                                        <div class="form-group">
                                                <strong>Rent to:</strong>
                                                <input type="text" name="rent_to" class="form-control">
                                        </div>
                                </div>
        			<div class="col-md-3">
            				<div class="form-group">
                				<strong>Drop Off:</strong>
                				<input type="date" name="rent_out" class="form-control">
            				</div>
        			</div>
			</div>
			<div class="col-md-12">
				<div class=" col-md-3">
                                        <div class="form-group">
                                                <input type="checkbox" name="hotel" class="custom-control-input" id="defaultUnchecked">
    						<label class="custom-control-label" for="defaultUnchecked">Has Hotel</label>
                                        </div>
                                </div>
			</div>
        		<div class="col-md-12 text-center">
                		<button type="submit" class="btn btn-primary">Submit</button>
        		</div>
    		</div>
	</form>
</div>
@endsection
