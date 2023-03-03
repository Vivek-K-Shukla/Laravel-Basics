<h1>Upload Image</h1>
<form action="uploadfile" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="doc"><br><br>
    <button type="submit">Upload</button>
</form>