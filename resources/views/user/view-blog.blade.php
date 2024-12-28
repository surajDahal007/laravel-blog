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

    <div class="container py-2">
            <h3>View Posted Blog</h3>
            <br>
        <form>
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Title</label>
                <input type="text" name="title" value="{{$data->title}}" disabled class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <br>

            <div class="form-floating">
                <textarea class="form-control" style="height: 300px" name="body" placeholder="Leave a comment here" id="floatingTextarea" disabled>
                    {{$data->body}}
                </textarea>
                <label for="floatingTextarea">Body</label>
            </div>
            
            <br>
            {{-- <button>Post</button> --}}
            <br>
            <br>
        </form>
    </div>
</body>
</html>