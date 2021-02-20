@extends('pages.layouts')
@section('content')

    <div class="content">
        <!-- Default Ribbon -->
        @foreach($access_to_program as $a)
            @if($a->id === $programs->id)
                <h2 class="content-heading">Все дни</h2>

                <div class="block">
                    <div class="block-content">
                        <div class="row items-push text-center">

                            @if(Auth::user()->role =='user')
                                @foreach($exercises as $s)

                                    <div class="col-6 col-md-6 col-xl-2">
                                        <a class="item item-circle bg-default text-white-op mx-auto mb-15"

                                           data-theme="default" href="{{route('user.exercises.show',$s->id)}}">
                                            {{$s->number}}
                                        </a>
                                    </div>
                                @endforeach
                            @endif
                            @if(Auth::user()->role =='admin')
                                @foreach($exercises as $s)

                                    <div class="col-6 col-md-6 col-xl-2">
                                        <a class="item item-circle bg-default text-white-op mx-auto mb-15"

                                           data-theme="default" href="{{route('exercises.show',$s->id)}}">
                                            {{$s->number}}
                                        </a>
                                    </div>
                                @endforeach
                            @endif

                        </div>
                    </div>

                </div>
            @endif
        @endforeach
        @if(Auth::user()->role == 'admin')
            <h2 class="content-heading">Все дни</h2>

            <div class="block">
                <div class="block-content">
                    <div class="row items-push text-center">

                        @if(Auth::user()->role =='user')
                            @foreach($exercises as $s)

                                <div class="col-6 col-md-6 col-xl-2">
                                    <a class="item item-circle bg-default text-white-op mx-auto mb-15"

                                       data-theme="default" href="{{route('user.exercises.show',$s->id)}}">
                                        {{$s->number}}
                                    </a>
                                </div>
                            @endforeach
                        @endif
                        @if(Auth::user()->role =='admin')
                            @foreach($exercises as $s)

                                <div class="col-6 col-md-6 col-xl-2">
                                    <a class="item item-circle bg-default text-white-op mx-auto mb-15"

                                       data-theme="default" href="{{route('exercises.show',$s->id)}}">
                                        {{$s->number}}
                                    </a>
                                </div>
                            @endforeach
                        @endif

                    </div>
                </div>

            </div>
        @endif
    </div>

@endsection

