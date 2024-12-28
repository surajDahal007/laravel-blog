<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>{{$article[0][0]->title}} | BlogSite</title>
</head>
<body>
    {{-- {{dd($article)}} --}}

    @include('components.navbar')
    <br><br>
    <div class="container">
        <div class="p-5 bg-body-tertiary border">
            <div class="container-fluid">
                <h3 class="text-center py-4">{{$article[0][0]->title}}</h3>

                <textarea cols="130" rows="15" disabled>{{$article[0][0]->body}}</textarea>
                
            </div>
            <div class="fw-normal fst-italic py-4">
                Author - {{$article[1][0]->name}}
                <br>
                Date - {{$article[0][0]->created_at}}
            </div>
        </div>
    </div>
    <br>
    @include('components.footer')
</body>
</html>