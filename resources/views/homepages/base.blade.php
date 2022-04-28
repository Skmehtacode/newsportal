<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Purnianews7</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <div class="container">
            <a href="" class="navbar-brand">News-Portal</a>
            
            <ul class="navbar-nav">
                <li class="nav-item"><a href="{{route("home")}}" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="{{route("store")}}" class="btn btn-warning">Insert</a></li>
            </ul>
        </div>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
       <div class="container">
            <ul class="navbar-nav">
                @foreach ($categories as $item)
                
                <li class="nav-item"><a href="" class="nav-link text-light fw-bold">{{$item->category_title}}</a></li>
                @endforeach
                {{-- <li class="nav-item"><a href="" class="nav-link text-light fw-bold">SOCIAL MEDIA</a></li>
                <li class="nav-item"><a href="" class="nav-link text-light fw-bold">BIHAR</a></li>
                <li class="nav-item"><a href="" class="nav-link text-light fw-bold">CRIME</a></li>
                <li class="nav-item"><a href="" class="nav-link text-light fw-bold">SPORTS</a></li> --}}
            </ul>
       </div>
    </nav>
     @section('content')
        @show
</body>
</html>