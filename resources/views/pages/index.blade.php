@extends('pages.index_layouts')
@section('content')
    <div class="py-5 text-center text-white h-100 align-items-center d-flex"
         style="  background-position: center center, center center;  background-size: cover;  ">
        <div class="container py-4">
            <div class="row mb-5">
                <div class="mx-auto col-lg-8 col-md-10">
                    <p class=" mb-4 text-uppercase" style="font-size: 50px;">Добро пожаловать в</p>
                    <h1 class=" mb-5 font-weight-bold text-warning" style="font-size: 50px;">SportPlan
                    </h1>
                    <p class="lead mb-5">Без дисциплины не имеет значения, насколько ты хорош. Без дисциплины ты
                        ничто.
                        Когда-нибудь ты встретишь крутого парня, который выдержит все твои лучшие удары и будет
                        продолжать наступать. Помни об этом и не теряй силу духа и мужества. Это время, когда
                        дисциплина вступает в игру.</p>
                    @if (Auth::guest())
                        <a
                            class="btn btn-lg mx-1 btn-warning" href="{{route('login')}}">Начнем</a>
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection
