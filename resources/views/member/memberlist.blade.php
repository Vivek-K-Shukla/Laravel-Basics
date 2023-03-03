<div class="list">
<h1>Member List</h1>
<button type="submit"><a href="{{URL::to('/list')}}">Add New Member</a></button><br><br>
<table border="1">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Address</th>
            <th>Operations</th>
        </tr>

        @foreach($members as $member)
        <tr>
        <td>{{$member['id']}}</td>
        <td>{{$member['name']}}</td>
        <td>{{$member['email']}}</td>
        <td>{{$member['password']}}</td>
        <td>{{$member['address']}}</td>
        <td><a href={{"delete/".$member['id']}}>Delete</a>
        <a href={{"edit/".$member['id']}}>Edit</a></td>
        </tr>
        @endforeach
</table>
<!-- Pagination -->
<div class="row">{{$members->links()}}</div>
        <style>w.5 {display:none;}</style>
</div>