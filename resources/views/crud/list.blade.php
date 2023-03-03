<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List</title>
</head>
<body>
    <div class="container">
    <button><a href="{{url('/form')}}" class="btn btn-primary btn-sm float-end">Add Students</a></button>
    <table border="1">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Branch</th>
            <th>Year</th>
            <th>Institute</th>
            <th>Operations</th>
</tr>
@foreach($students as $student)
<tr>
            <td>{{$student->id}}</td>
            <td>{{$student->name}}</td>
            <td>{{$student->email}}</td>
            <td>{{$student->password}}</td>
            <td>{{$student->branch}}</td>
            <td>{{$student->year}}</td>
            <td>{{$student->institute}}</td>
            <td><a href="{{"delete/".$student->id}}">Delete</a>|
            <a href="{{"edit-data/".$student->id}}">Edit</a></td>
</tr>
@endforeach
</table>
</div>
</body>
</html>