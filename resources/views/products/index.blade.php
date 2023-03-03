<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Laravel 9 Image Upload</h4>
                    <a href="{{url('add-product')}}" class="btn btn-primary btn-sm float-end">Add Products</a>
</h4>
</div>
<div class="card-body">
    <table class="table table-borderd table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Image</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>
            <thbody>
                @foreach($products as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->description}}</td>
                    <td>{{$item->price}}</td>
                    <!-- <td>{{$item->image}}</td> -->
                    <td><img src="{{asset('uploads/product/'.$item->image)}}" width="100px" alt="Image"></td>
                    <td><a href="{{"editProduct/".$item->id}}" class="btn btn-success btn-sm">Edit</a></td>
                    <td><a href="{{"deleteProduct/".$item->id}}" class="btn btn-danger btn-sm">Delete</a></td>
                </tr>
                @endforeach
            </thbody>
            </table>
</div>
</div>
</div>
</div>
</div>