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
                    <h5 class="font-size-h1 font-w300 text-white mb-10">{{$program->price}}$</h5>
                    <span type="button" class="badge badge-light  text-uppercase font-w700 py-20 px-15">buy</span>

                </div>
            </div>
            <div class="block-content bg-body-light">
                <div class="row py-10">
                    <div class="col-6 col-md-4">
                        <p>
                            <i class="fa fa-fw fa-calendar text-muted mr-5"></i>
                            <strong>{{$program->period}}</strong> Period
                        </p>
                    </div>
                    <div class="col-6 col-md-4">
                        <p>
                            <i class="fa fa-fw fa-calendar-check-o text-muted mr-5"></i>
                            <strong>{{$program->count_day_in_week}}</strong> Count in week
                        </p>
                    </div>

                </div>
            </div>
            <div class="block-content block-content-full">
                <div class="row">
                    <div class="col-md-6 order-md-2 py-20">
                        <div class="row gutters-tiny js-gallery img-fluid-100">
                            <div class="col-6">
                                <a class="img-link img-link-simple img-thumb img-lightbox"
                                   href="assets/media/photos/photo35@2x.jpg">
                                    <img class="img-fluid" src="assets/media/photos/photo35.jpg" alt="">
                                </a>
                            </div>
                            <div class="col-6">
                                <a class="img-link img-link-simple img-thumb img-lightbox"
                                   href="assets/media/photos/photo41@2x.jpg">
                                    <img class="img-fluid" src="assets/media/photos/photo41.jpg" alt="">
                                </a>
                            </div>
                            <div class="col-6">
                                <a class="img-link img-link-simple img-thumb img-lightbox"
                                   href="assets/media/photos/photo42@2x.jpg">
                                    <img class="img-fluid" src="assets/media/photos/photo42.jpg" alt="">
                                </a>
                            </div>
                            <div class="col-6">
                                <a class="img-link img-link-simple img-thumb img-lightbox"
                                   href="assets/media/photos/photo43@2x.jpg">
                                    <img class="img-fluid" src="assets/media/photos/photo43.jpg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 order-md-1 py-20">
                        <p>{{$program->description}}</p>
                    </div>
                </div>
            </div>
            @if($program->price == '0')
                <div class="block-content block-content-full border-top clearfix">
                    {{--                <a class="btn btn-hero btn-alt-danger float-right" href="javascript:void(0)">--}}
                    {{--                    <i class="fa fa-heart"></i>--}}
                    {{--                </a>--}}
                    <a class="btn btn-hero btn-alt-primary float-right" href="javascript:void(0)">
                        <i class="si si-control-play"></i> Start program
                    </a>
                </div>
            @endif
        </div>
    </div>
@endsection
