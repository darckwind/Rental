@extends('/layouts.app')
 
@section('content')

    <table class="table table-responsive-sm">
        <tr>
            <th>Id</th>
            <th>Patente</th>
            <th>Drop off</th>
            <th>Pick up</th>
            <th>rent to</th>
            <th>location</th>
            <th>status</th>
            <th>hotel</th>
        </tr>
        @foreach ($rent as $rents)
        <tr>
            <td>{{ $rents->id }}</td>
            <td>{{ $rents->patente }}</td>
            <td>{{ $rents->rent_in}}</td>
            <td>{{ $rents->rent_out }}</td>
            <td>{{ $rents->rent_to }}</td>
            <td>{{ $rents->location}}</td>
            <td>{{ $rents->status }}</td>
            <td>{{ $rents->hotel }}</td>
            <td>
                <form action="{{ route('rent.destroy',$rents->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('rent.show',$rents->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection

