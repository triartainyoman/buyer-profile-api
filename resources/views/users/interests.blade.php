<h1>Interests Table</h1>
<a href="/users/{{$id}}/interests/create">Create</a>
<table border="1" cellpadding="5" cellspacing="2">
  <thead>
    <tr>
      <th>User ID</th>
      <th>Name</th>
      <th>Category ID</th>
      <th>Category Name</th>
    </tr>
  </thead>
  <tbody>
    @foreach($interests as $interest)
    <tr>
      <td>{{$interest->user_id}}</td>
      <td>{{$interest->user->name}}</td>
      <td>{{$interest->category_id}}</td>
      <td>{{$interest->category->category_name }}</td>
    </tr>
    @endforeach
  </tbody>
</table>