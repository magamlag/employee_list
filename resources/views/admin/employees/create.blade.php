@extends('admin.index')

@section('title', 'Employees')
@section('content')
    <div class="card card-primary">
        <div class="card-header">
                <h3 class="card-title">Add Employee</h3>
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
        <form method="POST" action="{{ route('employees.store') }}" enctype="multipart/form-data">
            {{csrf_field()}}
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
                    <input type="text" class="form-control" id="exampleInputName1" name="name" value="" placeholder="Enter name">
                </div>
                <div class="form-group">
                    <label for="exampleInputPhone1">Phone</label>
                    <input type="text" class="form-control" id="exampleInputPhone1" name="phone_number" value="" placeholder="Enter phone">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" name="email" value="" placeholder="Enter email">
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
                    <input type="text" class="form-control" id="exampleInputSalary1" name="salary" value="" placeholder="Enter salary">
                </div>
                <div class="form-group">
                    <label for="exampleInputHead1">Head</label>
                    <input type="text" class="form-control" id="exampleInputHead1"  placeholder="Enter head">
                </div>
                <div class="form-group">
                    <label for="exampleInputDateEmployment1">Date of employment</label>
                    <div class='input-group date' id='datetimepicker'>
                        <input type='text' class="form-control" name="date_employment"/>
                        <span class="input-group-addon">
              <span class="glyphicon glyphicon-calendar"></span>
            </span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
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
