<h1>Edit Category</h1>

<form action="/categories/{{$category->id}}" method="POST">
  @csrf
  <input type="text" name="category_name" autocomplete="off" placeholder="$category name" value="{{$category->category_name}}"><br>
  <input type="submit" value="save">
</form>