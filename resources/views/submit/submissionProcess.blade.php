@extends('templates.layout')
@section('content')
    {!! __('submit.submissionProcess',['shortName'=>config('jrnl.shortName'),'jrnlLink'=>config('jrnl.url')]) !!}
    @endsection
