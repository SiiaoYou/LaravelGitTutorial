<!DOCTYPE html>
<html lang="en">
<head>
  <title>View Student Records</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <style>
body{
  background-color:#fcf6cf;
}
table{
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  text-align: center;
  margin-left: auto;
  margin-right: auto;
  margin-top: 20px;
}

 td, th {
  border: 1px solid #ddd;
  padding: 8px;
}

thead{
    background-color: rgba(255, 255, 255, 0.8);
}

 tbody{
  padding-top: 12px;
  padding-bottom: 1px;
  text-align: center;
  background-color: #90ee90;
  color: #000000;
}
    </style>
</head>
<body>
<div class="container">
  <h2 class="text-center">View Event Record</h2>
           
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>EVENT ID</th>
        <th>EVENT NAME</th>
        <th>DESCRIPTION</th>
        <th>EVENT PRICE</th>
        
      </tr>
    </thead>
    <tbody>
      @foreach($viewdata as $key => $data)
    <tr>    
      <th>{{$data->id}}</th>
      <th>{{$data->name}}</th>
      <th>{{$data->description}}</th>
      <th>{{$data->price}}</th>
                      
    </tr>
@endforeach
    </tbody>
  </table>
</div>
</body>
</html>