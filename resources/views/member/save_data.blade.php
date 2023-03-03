<div class="form">
    <h1>ADD MEMBER</h1>
<form action="addmember" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Enter Your Name"><br><br>
    <input type="text" name="email" placeholder="Enter Your Email"><br><br>
    <input type="password" name="password" placeholder="Enter Your Password"><br><br>
    <input type="text" name="address" placeholder="Enter Your Address"><br><br>
    <button style="background-color:blue; color:white;" type="submit">Add Member</button>
</form>
</div>




