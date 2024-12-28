<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>View Blog | User - BlogSite</title>
</head>
<body>
    @include('components.navbar')
    <br>
    <div class="container">

        @if (session()->has('message'))
        
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Success !</strong>             
                {{session()->get('message')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endsession

        <h1>Edit Posted Blog</h1>
        <br>
        <form action="/update_blog_data/{{$data->id}}" method="post">
            @csrf
            <input type="text" name="title" value="{{$data->title}}">
            <br><br>

            <textarea name="body" cols="80" rows="15" placeholder="Blog Content here...">
                {{$data->body}}
            </textarea>
            <br>
            <br>
            <button class="btn btn-success">Edit Post</button>
            <br>
            <br>
        </form>
    </div>
</body>
</html>