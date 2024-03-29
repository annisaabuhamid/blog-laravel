<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Blog With Laravel</title>
</head>
<body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-md-auto">
                    <li class="nav-item active">
                    <a class="nav-link" href="{{ route('blogs_path')}}">Home <span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item">
                    <a href="{{ route('create_blog_path')}}" class="nav-link">Create Blog Post</a>

                    </li>
                    <li class="nav-item">
                            <a href="{{ route('form_path')}}" class="nav-link">Sign Up Form </a>
                    </li>

                </div>
              </nav>
              <div class="container">
                    @yield('content')
              </div>
</body>
</html>
