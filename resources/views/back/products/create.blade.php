<!DOCTYPE html>
<html>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=number], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

textarea {
  width: 100%;
  height: 150px;
  padding: 12px 20px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  background-color: #f8f8f8;
  font-size: 16px;
  resize: none;
}
</style>
<body>

@if ($errors->any())
    
    <div style="color:red">
        <strong>Whoops !</strong> There is an errors in some fields !
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif

<h3>Create a Product</h3>

<div>
  <form action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    
    <label for="name">Name</label>
    <input type="text" id="name" name="name" placeholder="Product name..">

    <label for="name">Description</label>
    <textarea name="details" id="#" cols="30" rows="10"></textarea>

    <label for="price"> Price</label>
    <input type="number" id="price" name="price" placeholder="Product price..">

    <label for="status">Status</label>
    <select id="status" name="status">
        <option selected disabled>select status</option>
        <option value="0">active</option>
        <option value="1">disactive</option>
    </select>
    
    <br>
    <label for="image">Image</label>
    <input type="file" name="image" id="">

    <input type="submit" value="Submit">
</form>
</div>

</body>
</html>
