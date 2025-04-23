@extends('layouts.app')

@section('title', 'Profil Mahasiswa')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Student Profile</h3>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <div class="mb-3">
                <!-- ==================4================== -->
                <!-- Add the picture to public/images, then fill the path -->
                <img src="{{asset($student['picture'])}}" alt="Profile Picture" class="img-thumbnail rounded-circle" width="200">
            </div>
            <!-- ==================5================== -->
            <!-- Create a view file that will display student data in a table format. -->
            <!-- Use <tr>, <th>, and <td> tags for rows and columns. -->
            <tr>
                <th>Name</th>
                <td>{{$student['name']}}</td>
            </tr>
            <tr>
                <th>Student Id</th>
                <td>{{$student['studentid']}}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{$student['email']}}</td>
            </tr>
            <tr>
                <th>Major</th>
                <td>{{$student['major']}}</td>
            </tr>
            <tr>
                <th>Faculty</th>
                <td>{{$student['faculty']}}</td>
            </tr>


        </table>
    </div>
</div>
@endsection
