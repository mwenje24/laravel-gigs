
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laragigs</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light static-top">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand fs-2 fw-bolder" href="/"><span class="text-secondary">L</span>G</a>
            <div class="">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4 justify-content-end text-dark">
                    <li class="nav-item"><a class="nav-link" aria-current="page" href="#!">Register</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- VIEW OUTPUT --}}
    @yield('content')

    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container"><p class="m-0 text-center text-white">Copyright &copy; mwenj24 2023</p></div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="#"></script>
    <!-- Core theme JS-->
    {{-- <script src="{{ asset('js/scripts.js') }}"></script> --}}
</body>
</html>