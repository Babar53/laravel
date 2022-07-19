<html>
  <head>
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      @if (session('status'))
      <h6 class="alert alert-success text-center">{{session('status')}}</h6>
      @endif
      <div class="card">
        <div class="card-header">
          <h4 class="alert alert-dark text-center text-danger">Add Student</h4>
          <a href="{{ url('students') }}" class="btn btn-primary float-end">Back</a>
        </div>
        <div class="card-body">
          <form action="{{ ('add-student') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-3">
              <label for="">Name</label>
              <input type="text" class="form-control" name="name">
            </div>
            <div class="form-group mb-3">
              <label for="">Email</label>
              <input type="text" class="form-control" name="email">
            </div>
            <div class="form-group mb-3">
              <label for="">Course</label>
              <input type="text" class="form-control" name="course">
            </div>
            <div class="form-group mb-3">
              <label for="">Image</label>
              <input type="file" class="form-control" name="profile_image">
            </div>
            <div class="form-group mb-3">
              <button type="submit" class="btn btn-success">Save</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</html>

