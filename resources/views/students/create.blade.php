@extends('students.layout')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="text-center mt-5">
                <h2>Register Course</h2>
            </div>
        </div>
    </div>

    <br><br><br>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Sorry! There was a problem with your input!</strong>
            
            <br><br>

            <ul>
                @foreach($errors->all() as $error)

                    <li>{{ $error }}</li>
                @endforeach
            </ul>

        </div>
    
    @endif

    <form action="{{ route('students.store')}}" method="POST" class="w-75">

        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Course Name</strong>
                    <br><br>
                    <input type="text" name="course_name" class="form-control" 
                    placeholder="Enter course name...">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 mt-5">
            
                <div class="form-group">

                    <strong class="mb-5">Teacher Name</strong>

                    <br><br>

                    <input type="text" name="teacher_name" class="form-control" 
                    placeholder="Enter teacher name...">

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 mt-5">

                <div class="form-group">

                    <strong class="mb-5">Total No. of Hours</strong>
                    
                    <br><br>

                    <input type="number" name="no_of_hours" class="form-control" 
                    placeholder="Enter total hours...">

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                <div class="text-left">
                    <br>

                    <a href="{{ route('students.index') }}" class="btn btn-primary">Back</a>

                    <button type="submit" class="btn btn-primary ml-4">Submit</button>

                </div>

                <br><br><br>

            </div>
        </div>


    </form>

@endsection('content')