@extends('admin.index')

@section('title', 'Positions')
@section('content')
    <div class="card card-primary">
        <div class="card-header">
                <h3 class="card-title">Add Position</h3>
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
        <form method="POST" action="{{ route('positions.store') }}">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputName1">Name</label>
                    <input type="text" class="form-control" id="exampleInputName1" name="name" value="{{old('name')}}" placeholder="Enter name">
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
@endsection
