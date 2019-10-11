@extends('templates.layout')
@section('content')
    {!!  __('submit.keywords',['shortName'=>config('jrnl.shortName')]) !!}
    @endsection
