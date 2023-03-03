<table border="1">
    @foreach($data as $item)
    <tr>
    <td>{{$item->id}}</td>
    <td>{{$item->name}}</td>
    <td>{{$item->email}}</td>
    <td>{{$item->address}}</td>
    <td>{{$item->post}}</td>
    <td>{{$item->company}}</td>
    </tr>
    @endforeach
</table>