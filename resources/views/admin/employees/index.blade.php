@extends('admin.index')
@section('title', 'Employee List')
@section('content')
    <div class="text-right"><a class="btn btn-secondary" href="{{route('employees.create')}}" role="button">Add Employee</a></div>
<table class="table">
    <thead class="thead-light">
    <tr>
        <th scope="col">Photo</th>
        <th scope="col">Name</th>
        <th scope="col">Position</th>
        <th scope="col">Date of Employment</th>
        <th scope="col">Phone Number</th>
        <th scope="col">Email</th>
        <th scope="col">Salary</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($employees as $employee)
        <tr>
            <th scope="row"><img src="/image/{{ $employee->photo }}" width="50" height="50"></th>
            <td>{{$employee->name}}</td>
            <td>{{$employee->position->name}}</td>
            <td>{{$employee->date_employment}}</td>
            <td>{{$employee->phone_number}}</td>
            <td>{{$employee->email}}</td>
            <td>${{$employee->salary}}</td>
            <td>
                <form action="{{ route('employees.destroy', $employee
->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                <a href="{{route('employees.edit',[$employee->id])}}">
                    <i class="fas fa-edit"></i>
                </a>
                    <a href="{{route('employees.destroy',[$employee->id])}}">
                        <i class="fas fa-trash-alt"></i>
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
    {{$employees->onEachSide(5)->links()}}
@endsection
