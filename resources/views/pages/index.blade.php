<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
</head>

<body>
<div class="container-fluid m-0 p-0">
    <div
        style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, .75), rgba(0, 0, 0, .75)), url('img/people-2572265_1920.jpg');">


        <nav class="navbar navbar-expand-lg navbar-light bg-transparent  ">
            <a href="#" class="navbar-brend  text-warning font-weight-bold ml-5 text-uppercase">
                <img src="{{asset('img/training%20(1).svg')}}" class="mr-4" width="65" height="65"><span
                    style="font-size: 20px;">muscul</span>
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
                <div class="form-inline my-2 my-lg-0 mr-2">
                    <a href="{{route('login')}}">
                        <button class="btn btn-warning  my-2 my-sm-0 text-uppercase" type="submit">login
                        </button>
                    </a>
                </div>
                <div class="form-inline my-2 my-lg-0">
                    <a href="{{route('register')}}">
                        <button class="btn btn-warning  my-2 my-sm-0 text-uppercase" type="submit">register
                        </button>
                    </a>
                </div>
            </div>
        </nav>


        <div class="py-5 text-center text-white h-100 align-items-center d-flex"
             style="  background-position: center center, center center;  background-size: cover;  ">


            <div class="container py-5">
                <div class="row mb-5">
                    <div class="mx-auto col-lg-8 col-md-10">
                        <p class=" mb-4 text-uppercase" style="font-size: 50px;">Welcome to</p>
                        <h1 class=" mb-5 font-weight-bold text-warning" style="font-size: 50px;">A wonderful
                            serenity</h1>
                        <p class="lead mb-5">Has taken possession of my entire soul, like these sweet mornings of spring
                            which I enjoy with my whole heart. I am alone, and feel the charm of existence.</p>  <a
                            class="btn btn-lg mx-1 btn-warning" href="#">Let's Go</a>
                    </div>
                </div>
            </div>
        </div>


        <div class="row m-0  p-0 bg-warning">
            <div class="col-md-3 mx-auto  text-center">
                <h4 class="font-weight-bold my-3 text-center ">Our programs</h4>
            </div>
        </div>


        <div class="row pb-5  m-0 p-0 bg-warning">


            <div class="col-md-3 mx-auto  mb-3 "
                 style="  height: 600px;  background-image: url('img/adult-1850925_1920.jpg'); background-position: center; background-size: cover;">

                <div class="container ">
                    <div class="row"
                         style=" height:600px;/* высота блока */ display: flex; align-items: center; justify-content: center;">


                        <p class="text-uppercase font-weight-bold text-white text-center mt-5 "
                           style="font-size: 35px;">Crossfit studio</p>

                    </div>

                </div>


            </div>
            <div class="col-md-3  mx-auto  mb-3 "
                 style=" height: 600px; background-image: url('img/training-828726_1920.jpg'); background-position: left; background-size: cover;">

                <div class="container ">
                    <div class="row"
                         style=" height:600px;/* высота блока */ display: flex; align-items: center; justify-content: center;">


                        <p class="text-uppercase font-weight-bold text-white text-center mt-5 "
                           style="font-size: 35px;">Crossfit studio</p>

                    </div>

                </div>


            </div>
            <div class="col-md-3 mx-auto  mb-3 " style=" height: 600px;
                                 background-image: url('img/training-828715_1920.jpg'); background-position: left; background-size: cover">

                <div class="container ">
                    <div class="row"
                         style=" height:600px;/* высота блока */ display: flex; align-items: center; justify-content: center;">


                        <p class="text-uppercase font-weight-bold text-white text-center mt-5 "
                           style="font-size: 35px;">Crossfit studio</p>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="row m-0 p-0     ">
        <div class=" col-md-12 d-none d-md-block m-0 p-0 text-center text-white "
             style="position: relative; overflow: hidden;">
            <video autoplay="" loop="" muted="" plays-inline=""
                   style="position: absolute; right: 0; top: 0; min-width:100%; z-index: -100;">
                <source src="{{asset('img/videoplayback.mp4')}}" type="video/mp4">
            </video>
            <div class="container-fluid ">
                <div class="row    pb-5" style="height: 800px;  background: #0A0705; /* Цвет фона */

    opacity: 0.7; /* Полупрозрачный фон */
    filter: alpha(Opacity=70); /* Прозрачность в IE */
    color: #0A0705; /* Цвет текста */">
                    <p>. </p>

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
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('js/bootstrap.bundle.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>
</html>
