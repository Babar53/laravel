@extends('layouts.admin')

@section('content')
<html>
  <head>
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="text-center">image crud</h4>
          <a href="{{ url('add-student') }}" class="btn btn-primary float-end">Add Student</a>
        </div>
        <div class="card-body">
          <table class="table text-center">
            <thead>
              <tr>
                <th>id</th>
                <th>name</th>
                <th>email</th>
                <th>course</th>
                <th>image</th>
                <th>edit</th>
                <th>Delete</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($student as $item)
                  
             
              <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->course}}</td>
                <td>
             <img src="{{ asset('uploads/students/'.$item->profile_image)}}" width="70px" height="70px" alt="image">

                </td>
                <td><a href="{{ url('edit-student/'.$item->id) }}" class="btn btn-success">edit</a></td>
                <td><a href="{{ url('delete-student/'.$item->id) }}" class="btn btn-danger">Delete</a></td>
                
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
</html>
@endsection
