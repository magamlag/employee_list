@extends('admin.index')
@section('title', 'Employee List')
@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Add Employee</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form>
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputFile">Photo</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                    <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputName1">Name</label>
                <input type="text" class="form-control" id="exampleInputName1" placeholder="Enter name">
            </div>
            <div class="form-group">
                <label for="exampleInputPhone1">Phone</label>
                <input type="text" class="form-control" id="exampleInputPhone1" placeholder="Enter phone">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="exampleInputPosition1">Position</label>
                <input type="text" class="form-control" id="exampleInputPosition1" placeholder="Enter position">
            </div>
            <div class="form-group">
                <label for="exampleInputSalary1">Salary, $</label>
                <input type="text" class="form-control" id="exampleInputSalary1" placeholder="Enter salary">
            </div>
            <div class="form-group">
                <label for="exampleInputHead1">Head</label>
                <input type="text" class="form-control" id="exampleInputHead1" placeholder="Enter head">
            </div>
            <div class="form-group">
                <label for="exampleInputDateEmployment1">Date of employment</label>
                <input type="text" class="form-control" id="exampleInputDateEmployment1" placeholder="Enter date of employment">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection
