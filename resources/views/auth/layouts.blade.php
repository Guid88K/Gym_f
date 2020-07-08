<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/font-awesome.min.css">
</head>

<body>
<div class="container-fluid m-0 p-0">
    <div
        style="  background-position: center center, center center;  background-size: cover;  background-image: linear-gradient(to bottom, rgba(0, 0, 0, .75), rgba(0, 0, 0, .75)), url('img/circles_pattern_black_white.png');">


        <nav class="navbar navbar-expand-lg navbar-light bg-transparent  ">
            <a href="#" class="navbar-brend  text-warning font-weight-bold ml-5 text-uppercase">
                <img src="img/training%20(1).svg" class="mr-4" width="65" height="65"><span style="font-size: 20px;">muscul</span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
                    aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse " id="navbarTogglerDemo02">
                <ul class="navbar-nav mx-auto ">
                    <li class="nav-item mx-2">
                        <a class="nav-link text-light" href="#">Home</a>
                    </li>
                    <li class="nav-item mx-2 ">
                        <a class="nav-link text-light" href="#">About</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link text-light" href="#">Apartment</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link text-light" href="#">Services</a>

                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link text-light" href="#">Links</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link text-light" href="#">Contacts</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">

                    <button class="btn btn-warning  my-2 my-sm-0 text-uppercase" type="submit">register
                    </button>
                </form>
            </div>
        </nav>


        <div class="py-5 text-center text-white h-100 align-items-center d-flex"
             style="  background-position: center center, center center;  background-size: cover;  ">


            <div class="container py-5">
                <div class="row mb-5">
                    <div class="mx-auto col-lg-8 col-md-10">
                        <img src="img/trademark.svg" class="img-fluid mb-3" style="height: 150px;">

                        {{--                        <form method="POST" action="{{ route('register') }}">--}}
                        {{--                            @csrf--}}

                        {{--                            <div class="form-group row">--}}
                        {{--                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>--}}

                        {{--                                <div class="col-md-6">--}}
                        {{--                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>--}}

                        {{--                                    @error('name')--}}
                        {{--                                    <span class="invalid-feedback" role="alert">--}}
                        {{--                                        <strong>{{ $message }}</strong>--}}
                        {{--                                    </span>--}}
                        {{--                                    @enderror--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}

                        {{--                            <div class="form-group row">--}}
                        {{--                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

                        {{--                                <div class="col-md-6">--}}
                        {{--                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">--}}

                        {{--                                    @error('email')--}}
                        {{--                                    <span class="invalid-feedback" role="alert">--}}
                        {{--                                        <strong>{{ $message }}</strong>--}}
                        {{--                                    </span>--}}
                        {{--                                    @enderror--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}

                        {{--                            <div class="form-group row">--}}
                        {{--                                <label for="password"--}}
                        {{--                                       class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

                        {{--                                <div class="col-md-6">--}}
                        {{--                                    <input id="password" type="password"--}}
                        {{--                                           class="form-control @error('password') is-invalid @enderror" name="password"--}}
                        {{--                                           required autocomplete="new-password">--}}

                        {{--                                    @error('password')--}}
                        {{--                                    <span class="invalid-feedback" role="alert">--}}
                        {{--                                        <strong>{{ $message }}</strong>--}}
                        {{--                                    </span>--}}
                        {{--                                    @enderror--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}

                        {{--                            <div class="form-group row">--}}
                        {{--                                <label for="password-confirm"--}}
                        {{--                                       class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>--}}

                        {{--                                <div class="col-md-6">--}}
                        {{--                                    <input id="password-confirm" type="password" class="form-control"--}}
                        {{--                                           name="password_confirmation" required autocomplete="new-password">--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}

                        {{--                            <div class="form-group row mb-0">--}}
                        {{--                                <div class="col-md-6 offset-md-4">--}}
                        {{--                                    <button type="submit" class="btn btn-primary">--}}
                        {{--                                        {{ __('Register') }}--}}
                        {{--                                    </button>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        {{--                        </form>--}}
                        <main class="py-4">
                            @yield('content')
                        </main>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>

<script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous">

</script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/bootstrap.bundle.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
