<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>User Dashboard - BlogSite</title>
</head>
<body>
    @include('components.navbar')
    <h2 class="container py-2">User Dashboard</h2>

   <div class="container">
        <div class="d-flex">
            <div class="p-2 w-100">        
                <h3 class="fst-italic">Create Post</h3>
            </div>
            <div class="p-2 flex-shrink-0">
                <a href="/user/myblogs" class="btn btn-dark">My Blogs</a>
            </div>
        </div>
        
            <form action="/create-post" method="post">
                @csrf
                <input type="text" name="title" placeholder="Title">
                <br>
                <br>
                <textarea name="body" placeholder="Body here..." cols="50" rows="10"></textarea>
                <br><br>

                <button type="submit" class="btn btn-success">POST</button>
            </form>
   </div>

    <br>
    <br>
</body>
</html>