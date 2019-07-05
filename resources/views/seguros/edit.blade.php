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
            <label class="col-sm-2 col-form-label">Patente</label>
            <div class="col-sm-4">
                <input type="text" readonly class="form-control-plaintext" value="{{ $seguro->patente }}" name="patente">
            </div>
            <label class="col-sm-2 col-form-label">Poliza</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" value="{{ $seguro->poliza }}" name="poliza">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Vencimiento Seguro</label>
            <div class="col-sm-4">
                <input type="date" class="form-control-plaintext" value="{{ $seguro->venc_seg }}" name="venc_seg">
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

