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
            <th scope="row">Photo</th>
            <td>{{$employee->name}}</td>
            <td>position</td>
            <td>{{$employee->date_employment}}</td>
            <td>{{$employee->phone_number}}</td>
            <td>{{$employee->email}}</td>
            <td>{{$employee->salary}}</td>
            <td>Action</td>
        </tr>
    @endforeach
    </tbody>
</table>
