<!DOCTYPE html>
<html lang="en">
<head>
  <title>View Student Records</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <h2 class="text-center">View Student Records</h2>
           
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>FULL NAME</th>
        <th>EMAIL</th>
        <th>PHONE NUNMBER</th>
        <th>PASSWORD</th>
        <th>COURSE TYPE</th>
      </tr>
    </thead>
    <tbody>
      @foreach($viewdata as $key => $data)
    <tr>    
      <th>{{$data->full_name}}</th>
      <th>{{$data->email}}</th>
      <th>{{$data->phone_number}}</th>
      <th>{{$data->password}}</th>
      <th>{{$data->course_type}}</th>                 
    </tr>
@endforeach
    </tbody>
  </table>
</div>
</body>
</html>