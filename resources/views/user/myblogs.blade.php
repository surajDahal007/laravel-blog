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
    <title>Dashboard - My Blogs | User</title>
</head>
<body>
    @include('components.navbar')
    <br>
    <h2 class="container">User Dashboard</h2>
    <br>
    <div class="container">
        <h3 class="fst-italic">My Blog Post</h3>
    
        <br>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Published</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>

              @foreach ($data as $data)
                <tr>
                  <th scope="row">{{++$count}}</th>
                  <td>
                    <a href="/view-userBlog/{{$data->id}}">{{$data->title}}</a>
                    
                  </td>
                  <td>{{$data->created_at}}</td>
                  <td>
                    <a href="/edit-blog/{{$data->id}}">Edit</a> | 
                    <a href="/delete-userblog/{{$data->id}}">Delete</a>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
    </div>
</body>
</html>