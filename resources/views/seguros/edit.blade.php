@extends('/layouts.app')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Seguro</h2>
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


    <form>
        <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Patente</label>
            <div class="col-sm-6">
                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{ $seguro->patente }}" name="patente">
            </div>
            <label for="staticEmail" class="col-sm-2 col-form-label">Poliza</label>
            <div class="col-sm-6">
                <input type="text" class="form-control-plaintext" id="staticEmail" value="{{ $seguro->poliza }}" name="patente">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword" placeholder="Password">
            </div>
        </div>
    </form>



    <form action="{{ route('seguro.update',$seguro->patente) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="patente" value="{{ $seguro->patente }}" class="form-control" placeholder="patente" readonly>
        <p>{{$seguro}}</p>

    </form>
@endsection

