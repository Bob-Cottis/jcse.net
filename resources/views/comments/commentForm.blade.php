@extends('templates.layout')
@section('title')
    {{ config('jrnl.shortName') }} Comment on Volume {{ $vol }}, Paper {{ $pap }}
    @endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ config('jrnl.shortName') }} Comment on Volume {{ $vol }}, Paper {{ $pap }}</div>
                    <div class="card-body">
                        <form method="POST" action="{!! route('createComment') !!}">
                            @csrf

                            <div class="form-group row">
                                <label for="subject" class="col-md-3 col-form-label text-md-right">{{ __('Subject') }}</label>

                                <div class="col-md-9">

                                    <input id="subject" type="text" class="form-control{{ $errors->has('subject') ? ' is-invalid' : '' }}" name="subject" value="{{ old('subject') }}" required autofocus>
                                    @if ($errors->has('subject'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('subject') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="para" class="col-md-3 col-form-label text-md-right">{{ $html?'Paragraph':'Page' }}</label>

                                <div class="col-md-2">
                                    <input id="para" type="number" class="form-control{{ $errors->has('para') ? ' is-invalid' : '' }}" name="para" value="{{ old('para') }}" required autofocus>
                                    @if ($errors->has('para'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('para') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="commentText" class="col-md-3 col-form-label text-md-right">{{ __('Comment') }}</label>

                                <div class="col-md-9">
                                    <textarea rows="12" id="commentText" type="text" class="form-control{{ $errors->has('commentText') ? ' is-invalid' : '' }}" name="commentText" value="{{ old('commentText') }}" placeholder="Enter Comment Here" required autofocus></textarea>

                                    @if ($errors->has('commentText'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('commentText') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <input type="hidden" id="user_id" name="user_id" value="{{ Auth::id() }}">
                            <input type="hidden" id="pap_id" name="pap_id" value="{{ $pap_id }}">
                            <input type="hidden" id="comm_id" name="comm_id" value="{{ $comm_id }}">
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-3">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('submit.Submit') }}
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

