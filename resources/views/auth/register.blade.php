@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="title_id" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>

                            <div class="col-md-6">

                                <select id="title_id" type="text" class="form-control{{ $errors->has('title_id') ? ' is-invalid' : '' }}" name="title_id" value="{{ old('title_id') }}" required autofocus>
                                    @include('titleSelect')
                                </select>

                                @if ($errors->has('title_id'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('title_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="givenName" class="col-md-4 col-form-label text-md-right">{{ __('Given Name') }}</label>

                            <div class="col-md-6">
                                <input id="givenName" type="text" class="form-control{{ $errors->has('givenName') ? ' is-invalid' : '' }}" name="givenName" value="{{ old('givenName') }}" required autofocus>

                                @if ($errors->has('givenName'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('givenName') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="familyName" class="col-md-4 col-form-label text-md-right">{{ __('Family Name') }}</label>

                            <div class="col-md-6">
                                <input id="familyName" type="text" class="form-control{{ $errors->has('familyName') ? ' is-invalid' : '' }}" name="familyName" value="{{ old('familyName') }}" required autofocus>

                                @if ($errors->has('familyName'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('familyName') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="organisation" class="col-md-4 col-form-label text-md-right">{{ __('Organisation') }}</label>

                            <div class="col-md-6">
                                <input id="organisation" type="text" class="form-control{{ $errors->has('organisation') ? ' is-invalid' : '' }}" name="organisation" value="{{ old('organisation') }}" required autofocus>

                                @if ($errors->has('organisation'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('organisation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="country_id" class="col-md-4 col-form-label text-md-right">{{ __('Country') }}</label>

                            <div class="col-md-6">
                                <select id="country_id" type="text" class="form-control{{ $errors->has('country_id') ? ' is-invalid' : '' }}" name="country_id" value="{{ old('country_id') }}" required autofocus>
                                @include('countrySelect')
                                </select>

                                @if ($errors->has('country_id'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('country_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
