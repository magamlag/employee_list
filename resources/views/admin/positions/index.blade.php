@extends('admin.index')
@section('title', 'Position list')
@section('content')
    <div class="text-right"><a class="btn btn-secondary" href="{{route('positions.create')}}" role="button">Add Position</a></div>
<table class="table">
    <thead class="thead-light">
    <tr>
        <th scope="col">Name</th>
        <th scope="col">Last Update</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($positions as $position)
        <tr>
            <td>{{$position->name}}</td>
            <td>{{$position->updated_at}}</td>
            <td>
                <form action="{{ route('positions.destroy', $position
->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                <a href="{{route('positions.edit',[$position->id])}}">
                    <i class="fas fa-edit"></i>
                </a>
                <button type="submit" title="delete" style="border: none; background-color:transparent;">
                    <i class="fas fa-trash fa-lg text-danger"></i>
                </button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
    {{$positions->onEachSide(5)->links()}}
@endsection
