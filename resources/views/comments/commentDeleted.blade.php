@extends('templates.layout')
@section('title')
    Comment Deleted
@endsection
@section('content')
    {!! __('comments.COMMENT_DELETED',['comm_id'=>$comm_id]) !!}
@endsection