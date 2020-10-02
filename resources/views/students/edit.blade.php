@extends('students.layout')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="text-left">
                <br><br>
                <h2>Edit Student Details</h2>
            </div>

            <br>

        </div>
    </div>

    <br>

    @if ($errors->any())

        <div class="alert alert-danger">
            <strong>There was a problem with your input.</strong>
            <ul>
                @foreach ($errors->all() as $error)

                    <li>{{ $error }}</li>
                
                @endforeach
            </ul>
        </div>

    @endif

    <form action="{{ route('students.update', $student->id)}}" method="POST">
        @csrf

        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Course Name:</strong>
                    <br><br>
                    <input type="text" name="course_name" class="form-control" placeholder="Enter name" 
                    value={{$student->course_name}}" />
                </div>
            </div>


            <div class="col-xs-12 col-sm-12 col-md-12">
                <br><br>

                <div class="form-group">
                    <strong>Teacher Name:</strong>
                    <br><br>
                    <input name="teacher_name" type= "text" class="form-control" placeholder="Enter teacher name" value={{$student->teacher_name }}" />
                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <br><br>

                <div class="form-group">
                    <strong>Total No. of Hours:</strong>
                    <br><br>
                    <input name="no_of_hours" type= "number" class="form-control" placeholder="Enter total hours" value={{$student->no_of_hours }}" />
                   
                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <br>
                
                <a href="{{ route('students.index') }}" class="btn btn-primary">Back</a>
               
                <button type="submit" class="btn btn-primary ml-5">Submit</button>

                <br<br>
                
            </div>
            
        </div>

    </form>

@endsection('content')
