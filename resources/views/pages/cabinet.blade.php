@extends('pages.layouts')
@section('content')
    <!-- Hero -->
    <!-- jQuery Vide for video backgrounds, for more examples you can check out https://github.com/VodkaBears/Vide -->
    <div class="bg-video " data-vide-bg="{{asset('assets/media/videos/gym1.mp4')}}"
         data-vide-options="posterType: mp4">
        <div class="bg-primary-dark-op">
            <div class="content text-center">
                <div class="pt-50 pb-50">
                    <h1 class="font-w700 text-white mb-50">Помни:</h1>
                    <h2 class="h4 font-w400 text-white-op mt-50">Ты можешь сказать, что у тебя плохая генетика,
                        плохой обмен веществ,
                        а можешь просто поднять свою задницу с дивана и начать работать над собой, задаться целью
                        и верить в себя. В этом случае ты обязательно добьёшься успеха.</h2>
                    <h2 class=" content text-right h4 font-w400 text-white-op ">Арнольд Шварценеггер</h2>

                </div>
            </div>
        </div>
    </div>

    <!-- END Hero -->
    <div class="content content-full">
        <!-- Dummy content -->
        <div class="row row-deck items-push">
            @foreach($programs as $p)
                <div class="col-md-6 col-xl-4 invisible" data-toggle="appear">
                    <!-- Property -->
                    <div class="block block-rounded">
                        <div class="block-content p-0 overflow-hidden">
                            <a class="img-link" href="{{route(Auth::user()->role.'.details',$p->id)}}">
                                <img class="img-fluid rounded-top" src="{{ asset('images/'.$p->image)}}"
                                     alt="">
                            </a>
                        </div>
                        <div class="block-content border-bottom">
                            <h4 class="font-size-h4 mb-10">{{$p->name}}</h4>
                                <h4 class="font-size-h6 mb-10 float-right">{{$p->created_at}}</h4>
                            <h5 class="font-size-h1 font-w300 mb-5">${{$p->price}}</h5>
                            <p class="text-muted">
                                <i class="fa fa-map-pin mr-5"></i> {{$p->kind_of_programs}}
                            </p>
                        </div>
                        <div class="block-content border-bottom">
                            <div class="row">
                                <div class="col-6">
                                    <p>
                                        <i class="fa fa-fw fa-calendar text-muted mr-5"></i>
                                        <strong>{{$p->period}}</strong> дн.
                                    </p>
                                </div>
                                <div class="col-6">
                                    <p>
                                        <i class="fa fa-fw fa-calendar-check-o text-muted mr-5"></i>
                                        <strong>{{$p->count_day_in_week}}</strong>  в неделю
                                    </p>
                                </div>
                            </div>
                        </div>
                        @if(Auth::user()->role =='admin')
                            <div class="block-content block-content-full">
                                <div class="row">
                                    <div class="col-6 ">
                                        <a class="btn d-flex justify-content-center btn-sm btn-hero btn-noborder btn-dark btn-block"
                                           href="{{route('programs.edit',$p->id)}}">
                                            Редактирование
                                        </a>
                                    </div>
                                    <div class="col-6">

                                        <form action="{{route('programs.destroy',$p->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-hero btn-noborder btn-secondary btn-block"
                                                    type="submit">
                                                Удалить
                                            </button>
                                        </form>

                                    </div>

                                </div>
                            </div>
                        @endif
                        {{--                    <div class="block-content block-content-full">--}}
                        {{--                        <div class="row">--}}
                        {{--                            <div class="col-12">--}}
                        {{--                                <a class="btn btn-sm btn-hero btn-noborder btn-dark btn-block"--}}
                        {{--                                   href="be_pages_real_estate_listing.html">--}}
                        {{--                                    Buy--}}
                        {{--                                </a>--}}
                        {{--                            </div>--}}

                        {{--                        </div>--}}
                        {{--                    </div>--}}

                    </div>

                </div>

            @endforeach
        </div>
        <div class="row  justify-content-center">
            <div class="col-2">
                {{$programs->links() }}
            </div>
        </div>

    </div>
    <!-- END Dummy content -->

@endsection
