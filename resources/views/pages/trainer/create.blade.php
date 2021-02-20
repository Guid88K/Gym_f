@extends('pages.layouts')
@section('content')
    <div class="content">
        <div class="my-50 text-center">
            <h2 class="font-w700 text-black mb-10">
                <i class="fa fa-plus text-muted mr-5"></i> Добавить новую программу
            </h2>
            <h3 class="h5 text-muted mb-0">
{{--                This is the 7th property you are adding to your portfolio.--}}
            </h3>
        </div>
        <div class="block block-rounded block-fx-shadow">
            <div class="block-content">
                <form action="{{route('programs.store')}}" method="POST" enctype="multipart/form-data">
                    <!-- Photos -->
                    <h2 class="content-heading text-black">Изображение</h2>
                    <div class="row items-push">
                        <div class="col-lg-3">
                            <p class="text-muted">
{{--                                Add nice and clean photos to better showcase your property--}}
                            </p>
                        </div>
                        <div class="col-lg-7 offset-lg-1">
                            <div class="form-group">
                                <div class="custom-file form">
                                    @csrf
                                    <input type="file" class="custom-file-input" id="re-listing-photos" name="image"
                                           data-toggle="custom-file-input" multiple>
                                    <label class="custom-file-label" for="re-listing-photos">Выберите файлы</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h2 class="content-heading text-black">Жизненно важная информация</h2>
                    <div class="row items-push">
                        <div class="col-lg-3">
                            <p class="text-muted">
{{--                                Pay extra attention since this is the data which customers will see first.--}}
                            </p>
                        </div>
                        <div class="col-lg-7 offset-lg-1">
                            <div class="form-group">

                                <label for="re-listing-name">Название</label>
                                <input type="text" class="form-control form-control-lg" id="re-listing-name" name="name"
                                       placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="re-listing-address">Количество дней в неделю</label>
                                <input type="text" class="form-control form-control-lg" id="re-listing-address"
                                       name="cout_week" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="re-listing-address">Период</label>
                                <input type="text" class="form-control form-control-lg" id="re-listing-address"
                                       name="period" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="re-listing-description">Описание</label>
                                <textarea class="form-control form-control-lg" id="re-listing-description" name="desc"
                                          rows="8" placeholder=""></textarea>
                            </div>
                            <div class="form-group">
                                <label for="re-listing-description">Тип</label>
                                <select class="form-control" name="kind">
                                    @foreach($kind as $i)
                                        <option value="{{$i->name}}">{{$i->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group ">
                                <label for="re-listing-price">Цена</label>
                                <input type="text" class="form-control form-control-lg" id="re-listing-price"
                                       name="price" placeholder="">

                            </div>
                            <div class="form-group ">

                                <label for="re-listing-price">Ссылки для оплаты</label>
                                <input type="text" class="form-control form-control-lg" id="re-listing-price"
                                       name="url_for_pay" placeholder="">

                            </div>
                        </div>
                    </div>

                    <div class="row items-push">
                        <div class="col-lg-7 offset-lg-4 text-center">
                            <div class="form-group">
                                <button type="submit" class="btn btn-alt-success">
                                    <i class="fa fa-plus mr-5"></i>
                                    Создать
                                </button>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
