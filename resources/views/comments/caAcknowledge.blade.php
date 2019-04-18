@extends('templates.layout')
@section('title')
    Comment Confirmed
    @endsection
@section('content')
    {!! __('comments.CA_ACK',$data); !!}
    {!! __('jrnl.ADMIN_SIG'); !!}
    {!! __('jrnl.NO_REPLY') !!}
    @endsection