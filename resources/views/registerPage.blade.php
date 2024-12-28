<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Register - Blogsite</title>
</head>
<body>
    @include('components.navbar')
    <br>
    <div class="container">
        <h2 class="mb-3">Register here <i>!</i></h2>

        <form action="/registerUser" method="post">
            @csrf
            <input type="text" name="name" placeholder="username">
            <br>
            <br>
            <input type="email" name="email" placeholder="E-mail">
            <br>
            <br>
            <input type="password" name="password" placeholder="password">
            <br>
            <br>
            <input type="password" name="password2" placeholder="Confirm Password">
            <br>
            <br>
            <button class="btn btn-success">Register</button>
        </form>
    </div>
</body>
</html>