<h1>Categories</h1>
<a href="categories/create">Create</a>
<table border="1" cellpadding="5" cellspacing="2">
  <thead>
    <tr>
      <th>ID</th>
      <th>Category Name</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($categories as $category)
    <tr>
      <td>{{$category->id}}</td>
      <td>{{$category->category_name }}</td>
      <td>
        <a href="/categories/{{$category->id}}/edit">Edit</a>
        <form action="/categories/{{$category->id}}" method="POST">
        @method('delete')
        @csrf
          <input type="submit" value="Delete">
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>