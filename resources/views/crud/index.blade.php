<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Page</title>
</head>
<body>
 <div class="container" style="margin-left:500px;">
    <h1>STUDENTS LIST</h1>
    <a href="{{url('show-data')}}" class="btn btn-primary btn-sm float-end">Add Students</a>
    <form action="add" method="POST">
        @csrf
        <label for="name">Name:</label><br>
        <input type="text" name="name" id="name" placeholder="Enter Name:"><br><br>
        <label for="email">Email:</label><br>
        <input type="text" name="email" id="email" placeholder="Enter Email:"><br><br>
        <label for="password">Password:</label><br>
        <input type="password" name="password" id="password" placeholder="Enter Password:"><br><br>
        <label for="branch">Branch:</label><br>
        <input type="text" name="branch" id="branch" placeholder="Enter Branch:"><br><br>
        <label for="year">Year:</label><br>
        <input type="text" name="year" id="year" placeholder="Enter Year:"><br><br>
        <label for="institute">Institute:</label><br>
        <input type="text" name="institute" id="institute" placeholder="Enter Institute:"><br><br>
        <button type="submit" style="background-color:blue;">ADD</button>
</form>
</div>
</body>
</html>