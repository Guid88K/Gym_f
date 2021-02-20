@extends('pages.layouts')
@section('content')
    <div class="row">
        @foreach($product as $p)
            <div class="col-md-6 col-xl-4 pt-3 ">
                <a class="block block-transparent border-left border-5x border-primary bg-image"
                   style="background-image: url({{ asset('images/'.$p->image)}});" href="{{$p->url}}">
                    <div class="block-content block-content-full bg-black-op">
                        <div class="pt-100">
                            <h3 class="h4 text-white font-w700 mb-10">{{$p->name}}</h3>
                            <h4 class="text-white-op font-size-default mb-0">
                                            <span class="mr-10">
                                                <i class="fa fa-dollar"></i> {{$p->price}}
                                            </span>
                                <span>
                                                <i class="fa fa-car"></i> {{$p->delivery}}
                                            </span>
                            </h4>
                        </div>
                    </div>
                </a>
                @if(Auth::user()->role =='admin')
                    <div class="block-content block-content-full">
                        <div class="row">
                            <div class="col-6">
                                <a class="btn btn-sm btn-hero d-flex justify-content-center btn-noborder btn-dark btn-block"
                                   href="{{route('product.edit',$p->id)}}">
                                    Редактирование
                                </a>
                            </div>
                            <div class="col-6">

                                <form action="{{route('product.delete',$p->id)}}" method="post">
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
            </div>
        @endforeach

    </div>
    <div class="row  justify-content-center">
        <div class="col-2">
            {{$product->links() }}
        </div>
    </div>
@endsection
