@extends('pages.layouts')
@section('content')
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
                                        <strong>{{$p->count_day_in_week}}</strong> в неделю
                                    </p>
                                </div>
                            </div>
                        </div>

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
                    <!-- END Property -->
                </div>

            @endforeach
        </div>
    </div>
@endsection
