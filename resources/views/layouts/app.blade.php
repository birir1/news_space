<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- Dynamic Title -->
    <title>@yield('title', 'News Space')</title> <!-- Default title is 'News Space' -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-pzjw8f+ua7Kw1TIq0v8FqA8S3pR66VuTOv6/JRvE7g5v2E5A2Vw8mxxkzPZZn3+p" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" integrity="sha384-wK5XKRG9T2sS29h+0f3chTtNVpBB+KvDP20wv5WAyl2qFbdROJlFxX3XoRP27dRl" crossorigin="anonymous">

    <!-- Google Fonts: Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <!-- Additional CSS Styles -->
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>

    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body>

    <!-- Main Content Section -->
    <div class="container mt-5">
        @yield('content')
    </div>

    <!-- Footer Section -->
    <footer class="bg-light py-4 mt-5 container">
        <div class="container text-center">
            <p>&copy; 2024 News Space. All Rights Reserved.</p>
        </div>
    </footer>

    <!-- jQuery, Bootstrap JS, Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zyxJ6QZs9fXvOXt7F63U5PCTjG2oLw9p2V3r1U9v" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-n2RJSzTmNO7fKn1ZG35qk1lK8G6Az3VUtpc7qSktHbqf7hU6mGg8mTJlFCjTkHES" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq0v8FqA8S3pR66VuTOv6/JRvE7g5v2E5A2Vw8mxxkzPZZn3+p" crossorigin="anonymous"></script>

</body>

</html>
