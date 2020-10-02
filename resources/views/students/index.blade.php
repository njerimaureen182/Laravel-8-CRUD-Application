@extends('students.layout')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="text-center mt-5">
                <h2>Welcome to the Web Development College</h2>
            </div>

            <div class=" mr-5 mt-5 text-left">
                <a href="{{ route('students.create') }}" class="btn btn-success">Register Course</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))

        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>

    @endif

    <br><br>
    <table class="table table-bordered table-one">
        <tr>
            <th>Unique Code</th>
            <th>Course Name</th>
            <th>Teacher Name</th>
            <th>Total No. of Hours</th>
            <th>Action</th>
        </tr>

        @foreach ($students as $student)

        <tr>
            <td>{{ ++$i }}</td>
            <!-- <td></td> -->
            <td>{{ $student->course_name }}</td>
            <td>{{ $student->teacher_name }}</td>
            <td>{{ $student->no_of_hours }}</td>

            <td>
                <form action="{{ route ('students.destroy', $student->id)}}" method="POST">
                    <a href="{{ route ('students.show', $student->id)}}" class="btn btn-info">View
                        <i class="fas fa-eye"></i>
                    </a>
                    <a href="{{ route ('students.edit', $student->id)}}" class="btn btn-primary ml-3">Edit
                        <i class="fas fa-edit"></i>
                    </a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger ml-3">Delete
                        <i class="fas fa-trash"></i>
                    </button>
                
                </form>
            </td>
        </tr>

        @endforeach   
    </table>

    <div class=" mr-5 mt-5 text-left">
        <a href="{{ route('logout') }}" class="btn btn-primary">Log Out</a>
    </div>


    {!! $students->links() !!}

@endsection

