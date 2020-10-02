@extends('students.layout')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="text-left">
            <br><br>
            <h2>Show Student Details</h2>
        </div>
    </div>
</div>

<br><br>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Course Name:</strong>
            {{ $student->course_name }}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Teacher Name:</strong>
            {{ $student->teacher_name }}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Total No. of Hours:</strong>
            {{ $student->no_of_hours }}
        </div>
    </div>
</div>

<div class="text-left">
            
    <br>

    <a href="{{ route('students.index') }}" class="btn btn-primary">Back</a>
    
</div>

@endsection('content')
