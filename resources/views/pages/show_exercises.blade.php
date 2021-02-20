@extends('pages.layouts')
@section('content')
    <div class="content">
        @foreach($access_to_program as $a)
            @if($a->id === $programs->id)
                <div class="block block-rounded block-fx-shadow">
                    <div class="block-content p-0 bg-image">
                        <div
                            class="block-content block-content-full d-flex align-items-center justify-content-center bg-primary-dark">
                            {{--                    <div class="p-20">--}}
                            {{--                        <i class="fa fa-2x fa-camera-retro text-white-op"></i>--}}
                            {{--                    </div>--}}
                            <div class="ml-5">
                                <p class="font-size-h3 font-w600 text-white mb-0">
                                    {{$exercises->days_name}}

                                </p>
                                <p class="font-size-h4 text-uppercase font-w600 text-white-op mb-0">
                                    День {{$exercises->number}}
                                </p>
                            </div>
                        </div>
                        {{--                <div class="px-20 py-150 bg-black-op text-center rounded-top">--}}
                        {{--                    <h5 class="font-size-h1 font-w300 text-white mb-10">Day {{$exercises->number}}</h5>--}}
                        {{--                    <h5 class="font-size-h1 font-w300 text-white mb-10"> {{$exercises->days_name}}</h5>--}}


                        {{--                </div>--}}
                    </div>
                    {{--            <div class="block-content bg-body-light">--}}
                    {{--                <div class="row py-10">--}}
                    {{--                    <div class="col-6 col-md-4">--}}
                    {{--                        <p>--}}
                    {{--                            <i class="fa fa-fw fa-calendar text-muted mr-5"></i>--}}
                    {{--                            <strong>{{$exercises->days_name}}</strong>--}}
                    {{--                        </p>--}}
                    {{--                    </div>--}}
                    {{--                </div>--}}
                    {{--            </div>--}}
                    <div class="block-content block-content-full">
                        <div class="row">
                            <div class="col-md-6 order-md-2 py-20">
                                <div class="row gutters-tiny js-gallery img-fluid-100">
                                    <div class="col-6 mx-auto">
                                        {{--                                <a class="btn btn-hero btn-alt-danger float-right" href="{{route('exercises.create',$program->id)}}">--}}
                                        {{--                                    <i class="si si-plus"></i> Add exercises--}}
                                        {{--                                </a>--}}
                                    </div>

                                </div>
                            </div>
                            @foreach(explode('*/',$exercises->gif) as $key => $g)
                                @foreach(explode('*/',$exercises->description) as $key1 => $d)
                                    @foreach(explode('*/',$exercises->times) as $key2 => $t)
                                        @foreach(explode('*/',$exercises->name) as $key3 => $n)
                                            @if($key === $key1)
                                                @if($key2 === $key1)
                                                    @if($key2 === $key3)
                                                        <div class="col-md-6 order-md-1 py-20">
                                                            <div class="block-content p-0 overflow-hidden">
                                                                <img class="img-fluid rounded-top"
                                                                     src="{{ asset('gif/'.$g)}}"
                                                                     alt="">

                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 order-md-1 py-20">
                                                            <h4 class="font-w400 text-black mb-30">
                                                                Название: {{$n}}
                                                            </h4>
                                                            <h4 class="font-w400 text-black mb-30">
                                                                Количество: {{$t}}
                                                            </h4>

                                                            <h5 class="font-w400 text-black mb-10">
                                                                Описание: {{$d}}
                                                            </h5>
                                                        </div>
                                                    @endif
                                                @endif
                                            @endif
                                        @endforeach
                                    @endforeach
                                @endforeach
                            @endforeach
                        </div>
                    </div>
                    @if(Auth::user()->role =='admin')
                        <div class="block-content block-content-full border-top clearfix">
                            {{--                <a class="btn btn-hero btn-alt-danger float-right" href="javascript:void(0)">--}}
                            {{--    ч                <i class="fa fa-heart"></i>--}}
                            {{--                </a>--}}
                            <div class="row justify-content-between">
                                <a class="btn btn-hero btn-alt-warning "
                                   href="">
                                    <i class="si si-wrench"></i> Редактирование
                                </a>

                                <form action="{{route('exercises.destroy',$exercises->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-hero btn-alt-danger"
                                            href="">
                                        <i class="si si-close"></i> Удалить
                                    </button>
                                </form>
                            </div>

                        </div>

                    @endif
                </div>
            @endif
        @endforeach
        @if(Auth::user()->role == 'admin')
            <div class="block block-rounded block-fx-shadow">
                <div class="block-content p-0 bg-image">
                    <div
                        class="block-content block-content-full d-flex align-items-center justify-content-center bg-primary-dark">
                        {{--                    <div class="p-20">--}}
                        {{--                        <i class="fa fa-2x fa-camera-retro text-white-op"></i>--}}
                        {{--                    </div>--}}
                        <div class="ml-5">
                            <p class="font-size-h3 font-w600 text-white mb-0">
                                {{$exercises->days_name}}

                            </p>
                            <p class="font-size-h4 text-uppercase font-w600 text-white-op mb-0">
                                День {{$exercises->number}}
                            </p>
                        </div>
                    </div>
                    {{--                <div class="px-20 py-150 bg-black-op text-center rounded-top">--}}
                    {{--                    <h5 class="font-size-h1 font-w300 text-white mb-10">Day {{$exercises->number}}</h5>--}}
                    {{--                    <h5 class="font-size-h1 font-w300 text-white mb-10"> {{$exercises->days_name}}</h5>--}}


                    {{--                </div>--}}
                </div>
                {{--            <div class="block-content bg-body-light">--}}
                {{--                <div class="row py-10">--}}
                {{--                    <div class="col-6 col-md-4">--}}
                {{--                        <p>--}}
                {{--                            <i class="fa fa-fw fa-calendar text-muted mr-5"></i>--}}
                {{--                            <strong>{{$exercises->days_name}}</strong>--}}
                {{--                        </p>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--            </div>--}}
                <div class="block-content block-content-full">
                    <div class="row">
                        <div class="col-md-6 order-md-2 py-20">
                            <div class="row gutters-tiny js-gallery img-fluid-100">
                                <div class="col-6 mx-auto">
                                    {{--                                <a class="btn btn-hero btn-alt-danger float-right" href="{{route('exercises.create',$program->id)}}">--}}
                                    {{--                                    <i class="si si-plus"></i> Add exercises--}}
                                    {{--                                </a>--}}
                                </div>

                            </div>
                        </div>
                        @foreach(explode('*/',$exercises->gif) as $key => $g)
                            @foreach(explode('*/',$exercises->description) as $key1 => $d)
                                @foreach(explode('*/',$exercises->times) as $key2 => $t)
                                    @foreach(explode('*/',$exercises->name) as $key3 => $n)
                                        @if($key === $key1)
                                            @if($key2 === $key1)
                                                @if($key2 === $key3)
                                                    <div class="col-md-6 order-md-1 py-20">
                                                        <div class="block-content p-0 overflow-hidden">
                                                            <img class="img-fluid rounded-top"
                                                                 src="{{ asset('gif/'.$g)}}"
                                                                 alt="">

                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 order-md-1 py-20">
                                                        <h4 class="font-w400 text-black mb-30">
                                                            Название: {{$n}}
                                                        </h4>
                                                        <h4 class="font-w400 text-black mb-30">
                                                            Количество: {{$t}}
                                                        </h4>
                                                        @if($d !=  null)
                                                            <h5 class="font-w400 text-black mb-10">
                                                                Описание: {{$d}}
                                                            </h5>
                                                        @endif
                                                    </div>
                                                @endif
                                            @endif
                                        @endif
                                    @endforeach
                                @endforeach
                            @endforeach
                        @endforeach
                    </div>
                </div>
                @if(Auth::user()->role =='admin')
                    <div class="block-content block-content-full border-top clearfix">
                        {{--                <a class="btn btn-hero btn-alt-danger float-right" href="javascript:void(0)">--}}
                        {{--    ч                <i class="fa fa-heart"></i>--}}
                        {{--                </a>--}}
                        <div class="row justify-content-between">
                            <a class="btn btn-hero btn-alt-warning "
                               href="">
                                <i class="si si-wrench"></i> Редактирование
                            </a>

                            <form action="{{route('exercises.destroy',$exercises->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-hero btn-alt-danger"
                                        href="">
                                    <i class="si si-close"></i> Удалить
                                </button>
                            </form>
                        </div>

                    </div>

                @endif
            </div>
        @endif
    </div>
@endsection
