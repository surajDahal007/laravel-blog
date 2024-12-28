<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>BlogSite</title>
</head>
<body>
    @include('components.navbar')
    <br>
        
    <div class="container">
      <div class="row mb-2">
        @foreach ($blogs as $blog)
        
        <div class="col-md-6">
          <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
              <h3 class="mb-0">{{$blog->title}}</h3>
              <div class="mb-1 text-body-secondary">{{$blog->created_at}}</div>
              <a href="/read-blog/{{$blog->id}}" class="icon-link gap-1 icon-link-hover stretched-link">
                Continue reading
                <svg class="bi"><use xlink:href="#chevron-right"></use></svg>
              </a>
            </div>
            <div class="col-auto d-none d-lg-block">
              <img src="/thumbnail.jpg" class="bd-placeholder-img" width="300" height="250">
            </div>
          </div>
        </div>

      @endforeach
      </div>
    </div>
    
    @include('components.footer')
</body>
</html>