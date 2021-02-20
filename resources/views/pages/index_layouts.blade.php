<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SportPlan</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
</head>

<body>
<div class="container-fluid m-0 p-0">
    <div
        style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, .75), rgba(0, 0, 0, .75)), url('img/people-2572265_1920.jpg');">

        <nav class="navbar navbar-dark navbar-expand-lg navbar-light bg-transparent  ">
            <a href="{{url('/')}}" class="navbar-brend  text-warning font-weight-bold ml-5 text-uppercase">
                <img src="{{asset('img/training%20(1).svg')}}" class="mr-4" width="50" height="67"><span
                    style="font-size: 20px;">SportPlan</span>
            </a>
            <button class="navbar-toggler "  type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
                    aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon " ></span>
            </button>

            <div class="collapse navbar-collapse " id="navbarTogglerDemo02">
                <ul class="navbar-nav mx-auto ">
                    <li class="nav-item mx-2">
                        <a class="nav-link text-light" href="{{url('/')}}">Главная</a>
                    </li>
                    <li class="nav-item mx-2 ">
                        <a class="nav-link text-light" href="{{url('/about')}}">О нас</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link text-light" href="{{url('/contact')}}">Контакты</a>
                    </li>

                    @if (!Auth::guest())
                        <li class="nav-item mx-2">
                            <a class="nav-link text-light" href="{{url('/'.Auth::user()->role.'/programs')}}">Личный
                                кабинет</a>
                        </li>
                    @endif


                </ul>
                @guest
                    <div class="form-inline my-2 my-lg-0 mr-2">
                        <a href="{{route('login')}}">
                            <button class="btn btn-warning  my-2 my-sm-0 text-uppercase" type="submit">Вход
                            </button>
                        </a>
                    </div>
                    @if (Route::has('register'))
                        <div class="form-inline my-2 my-lg-0">
                            <a href="{{route('register')}}">
                                <button class="btn btn-warning  my-2  my-sm-0 text-uppercase" type="submit">Регистрация
                                </button>
                            </a>
                        </div>
                    @endif
                @else
                    <div class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link text-warning text-capitalize pl-md-2 dropdown-toggle"
                           href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </div>
                @endguest


            </div>
        </nav>

        <main id="main-container">
            @yield('content')
        </main>
    </div>
</div>


<script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous">

</script>
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('js/bootstrap.bundle.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>
</html>
