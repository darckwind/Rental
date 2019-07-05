@extends('/layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit arriendo vehiculo</h2>
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
        <form action="{{ route('rent.update', $rent->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Patente</label>
                <div class="col-sm-3">
                    <input type="text" name="patente" class="form-control" value="{{$rent->patente}}" readonly>
                </div>
                <label class="col-sm-2 col-form-label">Tipo de uso</label>
                <div class="col-sm-3">
                    <select class="form-control" style="height: 32px;" name="arriendo">
                        <option>arriendo</option>
                        <option>mantencion</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Pick Up:</label>
                <div class="col-sm-3">
                    <input type="date" name="rent_in" class="form-control">
                </div>
                <label class="col-sm-2 col-form-label">Pick Up Location:</label>
                <div class="col-sm-3">
                    <input type="text" name="location" class="form-control">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Drop Off:</label>
                <div class="col-sm-3">
                    <input type="date" name="rent_out" class="form-control">
                </div>
                <label class="col-sm-2 col-form-label">Arrendado a:</label>
                <div class="col-sm-3">
                    <input type="text" name="rent_to" class="form-control">
                </div>
                <div class="col-sm-2">
                    <input type="checkbox" name="hotel" class="custom-control-input" id="defaultUnchecked">
                    <label class="custom-control-label" for="defaultUnchecked">Has Hotel</label>
                </div>
            </div>
            <button type="submit" class="btn btn-block btn-primary">Submit</button>
        </form>
    </div>
@endsection
