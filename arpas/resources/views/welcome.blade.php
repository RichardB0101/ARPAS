<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">


</head>

<body>
<header class="bg-primary text-center text-lg-start">
    <!-- Image -->
    <nav class="text-center p-4 text-white" style="background-color: bg-dark">
        <a class="navbar-brand" href="#">
        </a>
    </nav>
</header>

<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                @endif
            @endauth
        </div>
    @endif
</div>



<div class="container-fluid vh-100 " style="margin-top:150px">
    <div class="" style="margin-top:50px ">
        <div class="rounded d-flex justify-content-center">
            <div class="col-md-4 col-sm-12 shadow-lg p-3 bg-light">
                <form action="">
                    <div class="p-4">
                        <div class="input-group mb-3">
                                    <span class="input-group-text bg-primary"><i
                                            class="bi bi-person-plus-fill text-white"></i></span>
                            <input type="text" class="form-control" placeholder="Nazwa użytkownika/PESEL">
                        </div>
                        <div class="input-group mb-3">
                                    <span class="input-group-text bg-primary"><i
                                            class="bi bi-key-fill text-white"></i></span>
                            <input type="password" class="form-control" placeholder="Hasło">
                        </div>
                        <div class="container bg-light">
                            <div class="col-md-12 text-center">

                                <button class="btn btn-align btn-primary mt-1 " type="submit">
                                    Zaloguj się
                                </button>
                            </div>
                        </div>
                        </br>

                        <p class="text-center text-primary">Nie pamiętasz hasła?</p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<footer class="bg-primary text-center text-lg-start">
    <!-- Copyright -->
    <div class="text-center p-4 text-white" style="background-color: bg-white">
        <!-- Copyright date will automatically update and sync with current year -->
        © <?php echo date("Y"); ?> Copyright all rights reserved
    </div>
    <!-- Copyright -->
</footer>
</body>
