<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Job Portal - find your passion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
        <div class="container">
          <a class="navbar-brand" href="/">Job Portal</a>
     
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
              @if (Auth::check()) 
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">Account</a>

                    <div class="dropdown-menu">
                        <a href="{{route('company.profile')}}" class="dropdown-item">Profile</a>
                        <a href="" class="dropdown-item">Setting</a>
                        <a href="{{route('company.jobs')}}" class="dropdown-item">Job Post</a>
                        <a href="" class="dropdown-item bg-danger text-white">Logout</a>
                    </div>
                </li>
              @else 
                <li class="nav-item">
                    <a class="nav-link" href="{{route('login')}}">Login</a>
               </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('register')}}">Sign up</a>
                </li>
              @endif
            </ul>
        </div>
      </nav>

      {{-- {{route('search')}} --}}
      @section('content')
            <div class="bg-light container-fluid py-5">
                <div class="container py-5">
                    <h1 class="display-4">Find your Job</h1>
                   <div class="row">
                       <div class="col-lg-6">
                       <form action="" class="d-flex">
                            <input type="search" name="search" placeholder="E.g Php developer, Python, Java, HR etc" class="form-control">
                            <input type="submit" class="btn btn-primary bg-gradient">
                        </form>
                       </div>
                   </div>
                </div>
            </div>
      @show
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>
