<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Page</title>
</head>
<body>
    <h1>STUDENTS LIST</h1><br><br>
    <form action="{{url('update-data/'.$data->id)}}" method="POST">
        @csrf
        <input type="text" name="name" value="{{$data['name']}}" placeholder="Enter Name:"><br><br>
        <input type="text" name="email" value="{{$data['email']}}" placeholder="Enter Email:"><br><br>
        <input type="password" name="password" value="{{$data['password']}}" placeholder="Enter Password:"><br><br>
        <input type="text" name="branch" value="{{$data['branch']}}" placeholder="Enter Branch:"><br><br>
        <input type="text" name="year" value="{{$data['year']}}" placeholder="Enter Year:"><br><br>
        <input type="text" name="institute" value="{{$data['institute']}}" placeholder="Enter Institute:"><br><br>
        <button type="submit" style="background-color:blue;">UPDATE</button>
</form>
</body>
</html>