@extends('templates.layout')
@section('title')
    @lang('submit.ttl')
    @endsection
@section('content')
    @lang('submit.header1')
    @auth
        <a href="{!! route('subForm2') !!}" class="btn btn-info" role="button">Start Submission</a>
    @endauth
    @guest
        <p><strong>{{ __('submit.mustRegister') }}</strong></p>
        <a href="{!! route('register') !!}" class="btn btn-primary" role="button">Register</a>
        <a href="{!! route('login') !!}" class="btn btn-primary" role="button">Login</a> &nbsp;&nbsp;
    @endguest
@endsection