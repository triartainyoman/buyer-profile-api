<h1>Create User</h1>

<form action="/users/{{$id}}/interests/create" method="POST">
  @csrf
  <input type="hidden" name="user_id" value="{{$id}}">
  <select name="category_id" id="">
    @foreach($categories as $category)
    <option value="{{$category->id}}">{{$category->category_name}}</option>
    @endforeach
  </select>
  <input type="submit" value="save">
</form>