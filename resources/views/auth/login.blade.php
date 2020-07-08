@extends('auth.layouts')

@section('content')
    <form method="POST" action="{{ route('login') }}" class="needs-validation" novalidate>
        @csrf
        <div class="form-row">
            <div class="col-md-6 col-lg-9 mx-auto mb-3 my-4 ">

                <input style="border-bottom: 3px solid #FFC107!important;" type="email"
                       class="form-control  rounded-0 bg-transparent border-0"
                       id="email" name="email" autocomplete="none" value="{{ old('email') }}"
                       placeholder="Email"
                       required>
                <div class="valid-tooltip">
                    Looks good!
                </div>
            </div>
            <div class="col-md-6 col-lg-9 mx-auto mb-3 my-4 ">

                <div class="input-group">

                    <input style="border-bottom: 3px solid #FFC107!important;" type="password"
                           class="form-control rounded-0 bg-transparent border-0"
                           id="password" name="password" autocomplete="new-password"
                           placeholder="Пароль"
                           aria-describedby="validationTooltipUsernamePrepend" required>
                    <div class="invalid-tooltip">
                        Please choose a unique and valid username.
                    </div>
                </div>
            </div>
        </div>
        <div class="form-row">
{{--            <div class="col-md-6 col-lg-9 mx-auto mb-3 my-4 ">--}}

{{--                <input style="border-bottom: 3px solid #FFC107!important;" type="password"--}}
{{--                       class="form-control rounded-0 bg-transparent border-0"--}}
{{--                       id="password_confirmation" name="password_confirmation"--}}
{{--                       placeholder="Повторити пароль" required>--}}
{{--                <div class="invalid-tooltip">--}}
{{--                    Please provide a valid city.--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md-6 col-lg-9 mx-auto mb-3 my-4 ">--}}

{{--                <input style="border-bottom: 3px solid #FFC107!important;" type="text"--}}
{{--                       class="form-control rounded-0 bg-transparent border-0"--}}
{{--                       id="validationTooltip04" placeholder="State" required>--}}
{{--                <div class="invalid-tooltip">--}}
{{--                    Please provide a valid state.--}}
{{--                </div>--}}
{{--            </div>--}}
            <div class="col-md-6 col-lg-9 mx-auto mb-33 my-4 ">

                <input style="border-bottom: 3px solid #FFC107!important; " type="text"
                       class="form-control rounded-0 bg-transparent border-0"
                       id="validationTooltip05" placeholder="Zip" required>
                <div class="invalid-tooltip">
                    Please provide a valid zip.
                </div>
            </div>
        </div>
        <button class="btn btn-warning mt-5" type="submit">Login</button>
    </form>

@endsection
