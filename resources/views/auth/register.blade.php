@extends('auth.layouts')

@section('content')

    <form method="POST" action="{{ route('register') }}" class="needs-validation" novalidate>
        @csrf
        <div class="form-row">
            <div class="col-md-6 col-lg-9 mx-auto mb-3 my-4 ">

                <input style="border-bottom: 3px solid #FFC107!important;" type="text"
                       class="form-control rounded-0 bg-transparent border-0 @error('name') is-invalid @enderror"
                       id="name" placeholder="Логин" autocomplete="none" name="name"
                       value="{{ old('name') }}" required>
                @error('name')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
                <div class="valid-tooltip">
                    Looks good!
                </div>
            </div>
            <div class="col-md-6 col-lg-9 mx-auto mb-3 my-4 ">

                <input style="border-bottom: 3px solid #FFC107!important;" type="email"
                       class="form-control  rounded-0 bg-transparent border-0"
                       id="email" name="email" autocomplete="none" value="{{ old('email') }}"
                       placeholder="Электронная почта"
                       required>
                <div class="valid-tooltip">
                    Looks good!
                </div>
            </div>
            <div class="col-md-6 col-lg-9 mx-auto mb-3 my-4 ">

                <div class="input-group">

                    <input style="border-bottom: 3px solid #FFC107!important;" type="password"
                           class="form-control rounded-0  bg-transparent border-0"
                           id="password" name="password" autocomplete="new-password"
                           placeholder="Пароль"
                           aria-describedby="validationTooltipUsernamePrepend" required>
                    <div class="invalid-tooltip">
                        Please choose a unique and valid username.
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-9  mx-auto mb-3 my-4 ">

                <input style="border-bottom: 3px solid #FFC107!important;" type="password"
                       class="form-control rounded-0 bg-transparent border-0"
                       id="password_confirmation" name="password_confirmation"
                       placeholder="Повторить пароль" required>
                <div class="invalid-tooltip">
                    Please provide a valid city.
                </div>
            </div>
{{--            <div class="col-md-6 col-lg-9  mx-auto mb-3 my-4 ">--}}

{{--                <input style="border-bottom: 3px solid #FFC107!important;" type="text"--}}
{{--                       class="form-control rounded-0 bg-transparent border-0"--}}
{{--                       id="validationTooltip04" placeholder="State" required>--}}
{{--                <div class="invalid-tooltip">--}}
{{--                    Please provide a valid state.--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md-6  col-lg-9 mx-auto mb-33 my-4 ">--}}

{{--                <input style="border-bottom: 3px solid #FFC107!important; " type="text"--}}
{{--                       class="form-control rounded-0 bg-transparent border-0"--}}
{{--                       id="validationTooltip05" placeholder="Zip" required>--}}
{{--                <div class="invalid-tooltip">--}}
{{--                    Please provide a valid zip.--}}
{{--                </div>--}}
{{--            </div>--}}


{{--            <div class="col-md-6 col-lg-9 bg-transparent  mx-auto mb-3 my-4 btn-group ">--}}
{{--                <div class="form-group">--}}
{{--                    <div class="form-material">--}}
{{--                        <select class="form-control" id="val-skill2" name="val-skill2">--}}
{{--                            <option value="">Please select</option>--}}
{{--                            <option value="html">HTML</option>--}}
{{--                            <option value="css">CSS</option>--}}
{{--                            <option value="javascript">JavaScript</option>--}}
{{--                            <option value="angular">Angular</option>--}}
{{--                            <option value="react">React</option>--}}
{{--                            <option value="vuejs">Vue.js</option>--}}
{{--                            <option value="ruby">Ruby</option>--}}
{{--                            <option value="php">PHP</option>--}}
{{--                            <option value="asp">ASP.NET</option>--}}
{{--                            <option value="python">Python</option>--}}
{{--                            <option value="mysql">MySQL</option>--}}
{{--                        </select>--}}
{{--                        <label for="val-skill2">Best Skill</label>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md-6 col-lg-9 bg-transparent  mx-auto mb-3 my-4 btn-group ">--}}

{{--                <div class="form-group">--}}
{{--                    <div class="form-material">--}}
{{--                        <select class="js-select2 form-control" id="val-select22" name="val-select22"--}}
{{--                                style="width: 100%;" data-placeholder="Choose one..">--}}
{{--                            <option></option>--}}
{{--                            <!-- Required for data-placeholder attribute to work with Select2 plugin -->--}}
{{--                            <option value="html">HTML</option>--}}
{{--                            <option value="css">CSS</option>--}}
{{--                            <option value="javascript">JavaScript</option>--}}
{{--                            <option value="angular">Angular</option>--}}
{{--                            <option value="react">React</option>--}}
{{--                            <option value="vuejs">Vue.js</option>--}}
{{--                            <option value="ruby">Ruby</option>--}}
{{--                            <option value="php">PHP</option>--}}
{{--                            <option value="asp">ASP.NET</option>--}}
{{--                            <option value="python">Python</option>--}}
{{--                            <option value="mysql">MySQL</option>--}}
{{--                        </select>--}}
{{--                        <label for="val-select2">Select2</label>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--            <div class="col-md-6 col-lg-9 bg-transparent  mx-auto mb-3 my-4 btn-group ">--}}

{{--                <button type="button" class="btn bg-transparent  min-width-100 text-left  dropdown-toggle"--}}
{{--                        style="border-bottom: 3px solid #FFC107!important; color: #6C757D; " data-toggle="dropdown"--}}
{{--                        data-display="static" aria-haspopup="true" aria-expanded="false">--}}
{{--                    Left-aligned but right aligned when large screen--}}
{{--                </button>--}}
{{--                <div class="dropdown-menu dropdown-menu-lg-right bg-warning">--}}
{{--                    <button class="dropdown-item" type="button">Action</button>--}}
{{--                    <button class="dropdown-item" type="button">Another action</button>--}}
{{--                    <button class="dropdown-item" type="button">Something else here</button>--}}
{{--                </div>--}}

{{--            </div>--}}
        </div>
        <button class="btn btn-warning mt-5" type="submit">Зарегистрироваться</button>
    </form>



@endsection
