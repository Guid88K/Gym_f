@extends('pages.layouts')
@section('content')
    <div class="content">
        <div class="my-50 text-center">
            <h2 class="font-w700 text-black mb-10">
                {{$program->name}}
            </h2>
            <h3 class="h5 text-muted mb-0">
                <i class="fa fa-map-pin mr-5"></i> {{$program->kind_of_programs}}
            </h3>
        </div>
        <div class="block block-rounded block-fx-shadow">
            <div class="block-content p-0 bg-image"
                 style="background-image: url('{{asset('images/'.$program->image)}}');">
                <div class="px-20 py-150 bg-black-op text-center rounded-top">
                    @if($program->price != '0')
                        <h5 class="font-size-h1 font-w300 text-white mb-10">${{$program->price}}</h5>

                        <a href="{{$program->url_for_pay}}">
                            <button type="button" class=" btn btn-alt-secondary font-w700 py-20 px-15" data-toggle="popover"
                                    title="Обратите внимание" data-placement="bottom"
                                    data-content="доступ к программе откроется после проверки оплаты, просим прощения за неудобства">
                                Купить
                            </button>
                        </a>
                    @else
                        <a href="{{$program->url_for_pay}}">
                            <button type="button" class=" btn btn-alt-secondary font-w700 py-20 px-15"
                                    data-toggle="popover"
                                    title="Спасибо" data-placement="bottom"
                                    data-content="это нужно для поддержки проекта">
                                Пожертвовать
                            </button>
                        </a>
                    @endif
                </div>
            </div>
            <div class="block-content bg-body-light">
                <div class="row py-10">
                    <div class="col-6 col-md-4">
                        <p>
                            <i class="fa fa-fw fa-calendar text-muted mr-5"></i>
                            <strong>{{$program->period}}</strong> дн.
                        </p>
                    </div>
                    <div class="col-6 col-md-4">
                        <p>
                            <i class="fa fa-fw fa-calendar-check-o text-muted mr-5"></i>
                            <strong>{{$program->count_day_in_week}}</strong> в неделю
                        </p>
                    </div>

                </div>
            </div>
            <div class="block-content block-content-full">
                <div class="row">
                    <div class="col-md-6 order-md-2 py-20">
                        <div class="row gutters-tiny js-gallery img-fluid-100">
                            <div class="col-6 mx-auto">
                                @if(Auth::user()->role =='admin')
                                    <a class="btn btn-hero btn-alt-danger float-right"
                                       href="{{route('exercises.create',$program->id)}}">
                                        <i class="si si-plus"></i> Добавить упражнения

                                    </a>
                                @endif
                                <h4 class="font-w400 text-black mb-10">
                                    @isset($gif_programs)
                                        @foreach(explode('*/',$gif_programs->number) as $g)
                                            Пример дня {{$g}}:
                                        @endforeach
                                    @endisset
                                </h4>
                                @isset($gif_programs)
                                    @foreach(explode('*/',$gif_programs->gif) as $g)
                                        @if($loop->count < 5)
                                        <div class="block-content p-1 overflow-hidden ">
                                            <img class="img-fluid rounded-top" src="{{ asset('gif/'.$g)}}"
                                                 alt="">

                                        </div>
                                        @endif
                                    @endforeach
                                @endisset
                            </div>

                        </div>
                    </div>

                    <div class="col-md-6 order-md-1 py-20">
                        <h4 class="font-w400 text-black mb-10">
                            Описание:
                        </h4>
                        <p>{{$program->description}}</p>
                    </div>

                    {{--                    <div class="col-md-6 order-md-1 py-20">--}}
                    {{--                        --}}
                    {{--                    </div>--}}
                </div>
            </div>
            @if(Auth::user()->role =='admin')
                <div class="block-content block-content-full border-top clearfix">
                    {{--                <a class="btn btn-hero btn-alt-danger float-right" href="javascript:void(0)">--}}
                    {{--    ч                <i class="fa fa-heart"></i>--}}
                    {{--                </a>--}}
                    <a class="btn btn-hero btn-alt-primary float-right"
                       href="{{route('exercises.all_ex',$program->id)}}">
                        <i class="si si-control-play"></i> Начать программу
                    </a>
                </div>

            @endif
            @if(Auth::user()->role =='user')
                @if($program->price == '0')
                    <div class="block-content block-content-full border-top clearfix">
                        {{--                <a class="btn btn-hero btn-alt-danger float-right" href="javascript:void(0)">--}}
                        {{--    ч                <i class="fa fa-heart"></i>--}}
                        {{--                </a>--}}
                        <a class="btn btn-hero btn-alt-primary float-right"
                           href="{{route('user.exercises.all_ex',$program->id)}}">
                            <i class="si si-control-play"></i> Начать программу
                        </a>
                    </div>
                @endif

                @foreach($access_to_program as $a)
                    @if($a->id === $program->id)
                        <div class="block-content block-content-full border-top clearfix">
                            {{--                <a class="btn btn-hero btn-alt-danger float-right" href="javascript:void(0)">--}}
                            {{--    ч                <i class="fa fa-heart"></i>--}}
                            {{--                </a>--}}
                            <a class="btn btn-hero btn-alt-primary float-right"
                               href="{{route('user.exercises.all_ex',$program->id)}}">
                                <i class="si si-control-play"></i> Начать программу
                            </a>
                        </div>
                    @endif
                @endforeach
            @endif
        </div>
    </div>
@endsection
