<h1>Create Category</h1>

<form action="/categories" method="POST">
  @csrf
  <input type="text" name="category_name" autocomplete="off" placeholder="category name"><br>
  <input type="submit" value="save">
</form>