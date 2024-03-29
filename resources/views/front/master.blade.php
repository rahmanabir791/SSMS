<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('/') }}admin/assets/css/bootstrap.min.css">
</head>
<body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
            <a href="" class="navbar-brand">Logo</a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="{{ route('/') }}" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">Courses</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">About Us</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    @yield('body')

    <section class="py-5 bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="text-white">
                        <h2 class="font-weight-bolder text-white">Logo</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda delectus facere illo in itaque, laudantium, maxime minima nostrum officiis optio placeat possimus quae reprehenderit! Aliquid cum delectus temporibus tenetur. Corporis.
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <ul class="nav">
                        <li><a href="" class="nav-link text-white">Home</a></li>
                        <li><a href="" class="nav-link text-white">Courses</a></li>
                        <li><a href="" class="nav-link text-white">About Us</a></li>
                        <li><a href="" class="nav-link text-white">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

<script src="{{asset('/')}}admin/assets/libs/jquery/jquery.min.js"></script>
<script src="{{asset('/')}}admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
