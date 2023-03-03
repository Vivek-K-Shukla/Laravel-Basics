<div class="form">
    <h1>Update MEMBER</h1>
<form action="/update" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{$data['id']}}">
    <input type="text" name="name" value="{{$data['name']}}" placeholder="Enter Your Name"><br><br>
    <input type="text" name="email" value="{{$data['email']}}"placeholder="Enter Your Email"><br><br>
    <input type="password" name="password" value="{{$data['password']}}" placeholder="Enter Your Password"><br><br>
    <input type="text" name="address" value="{{$data['address']}}" placeholder="Enter Your Address"><br><br>
    <button style="background-color:blue; color:white;" type="submit">Update Member</button>
</form>
</div>