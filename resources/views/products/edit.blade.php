<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <!-- To show Message -->
            @if (session('status'))
            <h6 class="alert alert-success">{{session('status')}}</h6>
            @endif
            <div class="card">
                <div class="card-header">
                    <h4>Edit Product</h4>
                    <a href="{{url('products')}}" class="btn btn-primary btn-sm float-end">Back</a>
</h4>
</div>
<div class="card-body">
    <form action="{{url('updateProduct/'.$data->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-3">
            <label for="">Product Name</label>
            <input type="text" name="name" value="{{$data['name']}}" class="form-control">
</div>

<div class="form-group mb-3">
            <label for="">Description</label>
            <textarea name="description" class="form-control">"{{$data['description']}}"</textarea>
</div>

<div class="form-group mb-3">
            <label for="">Price</label>
            <input type="text" name="price" value="{{$data['price']}}" class="form-control">
</div>

<div class="form-group mb-3">
            <label for="">Upload Image</label>
            <input type="file" name="image" class="form-control">
            <img src="{{asset('uploads/product/'.$data['image'])}}" width="70px" height="70px" alt="Image">
</div>

<div class="form-group mb-3">
    <button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>
</div>
</div>
</div>
</div>
</div>