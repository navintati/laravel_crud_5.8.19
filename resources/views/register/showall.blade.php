<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php

  // echo "<pre>"; print_r($data); echo "</pre>"; die();

?>
<div class="container">
  <br />
  <h2>All Users <a href="{{ route('register.index') }}" class="btn btn-primary" style="float: right">BACK</a></h2>

  <table class="table">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Username</th>
        <th>Password</th>
        <th>Email</th>
        <th>Mobile</th>
        <th>Gender</th>
        <th>DOB</th>
      </tr>
    </thead>
    <tbody>
      @foreach($data as $val)
      <tr>
        <td>{{ $val->firstname }}</td>
        <td>{{ $val->lastname }}</td>
        <td>{{ $val->username }}</td>
        <td>{{ $val->password }}</td>
        <td>{{ $val->email }}</td>
        <td>{{ $val->mobile }}</td>
        <td>{{ $val->gender }}</td>
        <td>{{ $val->dob }}</td>
      </tr>
     @endforeach
    
    </tbody>
  </table>
</div>

</body>
</html>
