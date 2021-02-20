@extends('pages.index_layouts')
@section('content')
    <div class="py-5 text-center text-white h-100 align-items-center d-flex"
         style="  background-position: center center, center center;  background-size: cover;  ">
        <div class="container py-4">
            <div class="row mb-5">
                <div class="mx-auto col-lg-8 col-md-10">
                    <p class=" mb-4 text-uppercase" style="font-size: 50px;">Контакти</p>
                    {{--                    <h1 class=" mb-5 font-weight-bold text-warning" style="font-size: 50px;">SportPlan--}}
                    {{--                    </h1>--}}
                    <p class="lead mt-5">Сет не занимается коучингом, инвестициями или консалтингом, но он читает свою
                        почту.
                    </p>
                    <p class="lead mt-3"> Вы можете связаться с ним по адресу: in.tortuga.it@gmail.com</p>

                    <p class="lead mb-5">  *Увы, из-за такого количества электронных писем он не обещает, что даст ответ.</p>
                    {{--                    <a class="btn btn-lg mx-1 btn-warning" href="{{route('login')}}">Начнем</a>--}}
                </div>
            </div>
        </div>
    </div>
@endsection
