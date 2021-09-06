@extends('admin.index')

@section('title', 'Positions')
@section('content')
<div class="card card-primary">
    <div class="card-header">
            <h3 class="card-title">Edit Position</h3>
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
    <form method="POST" action="{{ route('positions.update', $position) }}">
        {{csrf_field()}}
        @method('put')
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputName1">Name</label>
                <input type="text" class="form-control" id="exampleInputName1" name="name" value="{{old('name',$position->name)}}" placeholder="Enter name">
            </div>
            <div class="row">
                <div class="col">
                    <label for="exampleInputName1">Created At: {{$position->created_at}}</label><br>
                    <label for="exampleInputName1">Updated At: {{$position->updated_at}}</label>
                </div>
                <div class="col">
                    <label for="exampleInputName1">Admin created ID: 1</label><br>
                    <label for="exampleInputName1">Admin updated ID: 1</label>
                </div>
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <div class="text-right">
                <a class="btn btn-light btn-close" href="{{ route('positions.index') }}">Cancel</a>
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
