@extends('pages.layouts')
@section('content')
    <div class="content">
        <div class="my-50 text-center">
            <h2 class="font-w700 text-black mb-10">
                <i class="fa fa-plus text-muted mr-5"></i> Добавить упражнения
            </h2>
            <h3 class="h5 text-muted mb-0">
{{--                This is the 7th property you are adding to your portfolio.--}}
            </h3>
        </div>
        <div class="block block-rounded block-fx-shadow">
            <div class="block-content">
                <form action="{{route('exercises.store',$programs->id)}}" method="POST" enctype="multipart/form-data">
                    <!-- Photos -->
                    @csrf
                    <h2 class="content-heading text-black">Жизненно важная информация</h2>

                    <div class="row items-push">
                        <div class="col-lg-3">
                            <p class="text-muted">
{{--                                Pay extra attention since this is the data which customers will see first.--}}
                            </p>
                        </div>
                        <div class="col-lg-7 offset-lg-1">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-6">
                                        {{--                                        <label for="re-listing-name">Number</label>--}}
                                        {{--                                        <input type="text" class="form-control form-control-lg" id="re-listing-name"--}}
                                        {{--                                               name="number" placeholder="">--}}

                                        <label for="re-listing-status">Число</label>
                                        <select class="form-control form-control-lg" id="re-listing-status"
                                                name="number">
                                            @for($i = 1;$i <=$programs->period;$i++)
                                                <option value="{{$i}}">{{$i}}</option>
                                            @endfor
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label for="re-listing-address">Название дня</label>
                                        <input type="text" class="form-control form-control-lg" id="re-listing-address"
                                               name="days_name" placeholder="">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <h2 class="content-heading text-black">Изображение</h2>
                    <div class="row items-push">
                        <div class="col-lg-3">
                            <p class="text-muted">
{{--                                Add nice and clean photos to better showcase your property--}}
                            </p>
                        </div>
                        <div class="col-lg-7 offset-lg-1 container">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-6 ">
                                        <label for="re-listing-address1">Анимация</label>
                                        <div class="custom-file form">
                                            <!-- Populating custom file input label with the selected filename (data-toggle="custom-file-input" is initialized in Helpers.coreBootstrapCustomFileInput()) -->
                                            <!-- When multiple files are selected, we use the word 'Files'. You can easily change it to your own language by adding the following to the input, eg for DE: data-lang-files="Dateien" -->

                                            <input type="file" class="custom-file-input" id="re-listing-photos"
                                                   name="gif[]"
                                                   data-toggle="custom-file-input" multiple>
                                            <label class="custom-file-label" for="re-listing-photos">выберите
                                                файлы</label>

                                        </div>
                                        <div class="form-group">
                                            <label for="re-listing-address">Количество</label>
                                            <input type="text" class="form-control form-control-lg"
                                                   id="re-listing-address"
                                                   name="times[]" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <label for="re-listing-address">Название</label>
                                        <div class="input-group">

                                            <input type="text" class="form-control form-control-lg"
                                                   id="re-listing-address"
                                                   name="name[]" placeholder="">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text  add_form_field_copy ">
                                                    <i class="fa fa-plus text-dark" id="plus"></i>
                                                </div>
                                            </div>
                                        </div>


                                        <label for="re-listing-description">Описание</label>
                                        <textarea class="form-control form-control-lg" id="re-listing-description"
                                                  name="desc[]"
                                                  rows="8" placeholder=""></textarea>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Photos -->

                    <!-- Vital Info -->

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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            var max_fields = 40;
            var wrapper = $(".container");
            var add_button = $(".add_form_field_copy");
            var x = 1;
            $(add_button).click(function (e) {
                e.preventDefault();
                if (x < max_fields) {
                    x++;
                    $(wrapper).append(
                        '                            <div class="form-group">\n' +
                        '                                <div class="row">\n' +
                        '                                    <div class="col-6 ">\n' +
                        '                                        <label for="re-listing-address1">Анимация</label>\n' +
                        '                                        <div class="custom-file form">\n' +
                        '                                            <!-- Populating custom file input label with the selected filename (data-toggle="custom-file-input" is initialized in Helpers.coreBootstrapCustomFileInput()) -->\n' +
                        '                                            <!-- When multiple files are selected, we use the word \'Files\'. You can easily change it to your own language by adding the following to the input, eg for DE: data-lang-files="Dateien" -->\n' +
                        '\n' +
                        '                                            <input type="file" class="custom-file-input" id="re-listing-photos"\n' +
                        '                                                   name="gif[]"\n' +
                        '                                                   data-toggle="custom-file-input" multiple>\n' +
                        '                                            <label class="custom-file-label" for="re-listing-photos">Choose\n' +
                        '                                                files</label>\n' +
                        '                                        </div>\n' +
                        '<div class="form-group">\n' +
                        '                                            <label for="re-listing-address">Количество</label>\n' +
                        '                                            <input type="text" class="form-control form-control-lg"\n' +
                        '                                                   id="re-listing-address"\n' +
                        '                                                   name="times[]" placeholder="">\n' +
                        '                                        </div>' +
                        '                                    </div>\n' +
                        '                                    <div class="col-6">\n' +
                        '                                        <label for="re-listing-address">Название</label>\n' +
                        '                                        <div class="input-group">\n' +
                        '                                            <input type="text" class="form-control form-control-lg"\n' +
                        '                                                   id="re-listing-address"\n' +
                        '                                                   name="name[]" placeholder="">\n' +
                        '                                            <div class="input-group-prepend">\n' +
                        '                                                <div class="input-group-text">\n' +
                        '                                                    <i class="fa fa-plus text-dark" OnClick="click_plus();" ></i>\n' +
                        '                                                </div>\n' +
                        '                                            </div>\n' +
                        '                                        <div class="input-group-prepend delete">\n' +
                        '                                            <div class="input-group-text  add_form_field_copy ">\n' +
                        '                                                <i class="fa fa-minus text-dark"></i>\n' +
                        '                                            </div>\n' +
                        '                                        </div>\n' +
                        '                                        </div>\n' +
                        '                                        <label for="re-listing-description">Описание</label>\n' +
                        '                                        <textarea class="form-control form-control-lg" id="re-listing-description"\n' +
                        '                                                  name="desc[]"\n' +
                        '                                                  rows="8" placeholder=""></textarea>\n' +
                        '\n' +
                        '                                    </div>\n' +
                        '                                </div>\n' +
                        '                            </div>\n' +
                        ''
                    ); //add input box
                } else {
                    alert('You Reached the limits')
                }
            });
            $(wrapper).on("click", ".delete", function (e) {
                e.preventDefault();
                $(this).parent('div').parent('div').parent('div').parent('div').remove();
                x--;
            });
        });

        function click_plus() {
            document.getElementById('plus').click();
        }
    </script>
@endsection
`
