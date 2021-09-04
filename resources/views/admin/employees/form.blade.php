@extends('admin.index')

@section('title', 'Employees')
@section('content')
<div class="card card-primary">
    <div class="card-header">
        @if($user)
            <h3 class="card-title">Edit Employee</h3>
        @else
            <h3 class="card-title">Add Employee</h3>
        @endif
    </div>
    <!-- /.card-header -->
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
    <!-- form start -->
    <form method="POST" action="{{ route('employees.update', $user) }}" enctype="multipart/form-data">
        {{csrf_field()}}
        @method('put')
        <div class="card-body">
            <div class="form-group">
                <img id="preview-image-before-upload" src="https://www.riobeauty.co.uk/images/product_image_not_found.gif"
                     alt="preview image" style="max-height: 250px;">
            </div>
            <div class="form-group">
                <label for="exampleInputFile">Photo</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" name="photo" class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                        </div>
                    </div>
            </div>
            <div class="form-group">
                <label for="exampleInputName1">Name</label>
                <input type="text" class="form-control" id="exampleInputName1" name="name" value="{{$user->name}}" placeholder="Enter name">
            </div>
            <div class="form-group">
                <label for="exampleInputPhone1">Phone</label>
                <input type="text" class="form-control" id="exampleInputPhone1" name="phone_number" value="{{$user->phone_number}}" placeholder="Enter phone">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="email" value="{{$user->email}}" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="exampleInputPosition1">Position</label>
                <input type="text" class="form-control" id="exampleInputPosition1" name="position" value="{{$user->position->name}}" placeholder="Enter position">
            </div>
            <div class="form-group">
                <label for="sel1">Positions</label>
                <select class="form-control" name="position_id" id="exampleInputPosition1">
                    @foreach($positions as $position)
                        <option value="{{$position->id}}">{{$position->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputSalary1">Salary, $</label>
                <input type="text" class="form-control" id="exampleInputSalary1" name="salary" value="{{$user->salary}}" placeholder="Enter salary">
            </div>
            <div class="form-group">
                <label for="exampleInputHead1">Head</label>
                <input type="text" class="form-control" id="exampleInputHead1"  placeholder="Enter head">
            </div>
            <div class="form-group">
                <label for="exampleInputDateEmployment1">Date of employment</label>
                <input type="text" class="form-control" id="exampleInputDateEmployment1" name="date_employment" value="{{$user->date_employment}}" placeholder="Enter date of employment">
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
            <div class="text-right">
                <a class="btn btn-light btn-close" href="{{ route('employees.index') }}">Cancel</a>
            <button type="submit" class="btn btn-secondary">Save</button>
            </div>
        </div>
    </form>
</div>
<script type="text/javascript">

    $(document).ready(function (e) {


        $('#exampleInputFile').change(function(){

            let reader = new FileReader();

            reader.onload = (e) => {

                $('#preview-image-before-upload').attr('src', e.target.result);
            }

            reader.readAsDataURL(this.files[0]);

        });

    });

</script>
@endsection
