<?php 
  $count = 0;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Admin - BlogSite</title>
</head>
<body>
    @include('admin.navbar')

    <div class="container">
      <h4>ALL BLOGS</h4>
      <br>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Created at</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($blogs as $blog)
          <tr>
              <td>{{++$count}}</td>
              <td>
                <a href="/view-blog/{{$blog->id}}">
                  {{$blog['title']}}
                </a>
              </td>
              <td>{{$blog['created_at']}}</td>
              <td>
                <form action="/delete-blog/{{$blog->id}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-secondary">Delete</button>
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
</body>
</html>