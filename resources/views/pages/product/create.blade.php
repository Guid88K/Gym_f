@extends('pages.layouts')
@section('content')

    <div class="content">
        <div class="my-50 text-center">
            <h2 class="font-w700 text-black mb-10">
                <i class="fa fa-plus text-muted mr-5"></i> Добавить новый продукт
            </h2>
            <h3 class="h5 text-muted mb-0">
{{--                This is the 7th property you are adding to your portfolio.--}}
            </h3>
        </div>
        <div class="block block-rounded block-fx-shadow">
            <div class="block-content">
                <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data" >
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
                                    <!-- Populating custom file input label with the selected filename (data-toggle="custom-file-input" is initialized in Helpers.coreBootstrapCustomFileInput()) -->
                                    <!-- When multiple files are selected, we use the word 'Files'. You can easily change it to your own language by adding the following to the input, eg for DE: data-lang-files="Dateien" -->
                                    @csrf
                                    <input type="file" class="custom-file-input" id="re-listing-photos" name="image" data-toggle="custom-file-input" multiple>
                                    <label class="custom-file-label" for="re-listing-photos">Выберите файлы</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Photos -->

                    <!-- Vital Info -->
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
                                <input type="text" class="form-control form-control-lg" id="re-listing-name" name="name" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="re-listing-deliver">Доставка</label>
                                <select class="form-control form-control-lg" id="re-listing-deliver"
                                        name="delivery">
                                        <option value="Платная доставка">Платная доставка</option>
                                        <option value="Бесплатная доставка">Бесплатная доставка</option>
                                </select>
{{--                                <input type="text" class="form-control form-control-lg" id="re-listing-address" name="delivery" placeholder="">--}}
                            </div>
                            <div class="form-group">
                                <label for="re-listing-address">Ссылка</label>
                                <input type="text" class="form-control form-control-lg" id="re-listing-address" name="url" placeholder="">
                            </div>

                            <div class="form-group row">
                                <div class="col-md-8">
                                    <label for="re-listing-price">Цена</label>
                                    <input type="text" class="form-control form-control-lg" id="re-listing-price" name="price" placeholder="">
                                </div>
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
                    <!-- END Form Submission -->
                </form>
            </div>
        </div>
    </div>


@endsection
