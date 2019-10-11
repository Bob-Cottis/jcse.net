@extends('templates.layout')
@section('header')
    <meta name="csrf-token" id="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('title')
    config('jrnl.shortName') {{ __('review.paConfirmRevNom_subj') }}
@endsection
@section('content')
    {!! __('review.paConfirmRevNom_body') !!}
@endsection
