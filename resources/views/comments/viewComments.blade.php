@extends('templates.layout')
@section('title')
    Comments for Volume {{ $comments[0]->vol }} Paper {{ $comments[0]->pap }}
@endsection
@section('content')
    <h3 class="jrnl-text">Comments for Volume {{ $comments[0]->vol }} Paper {{ $comments[0]->pap }}</h3>
    <hr />
@foreach ($comments as $comm)
    <h4 class="jrnl-text">{!! $comm->sbj !!}</h4>
    {!! $comm->ttl.' '.$comm->gnm.' '.$comm->fnm !!}
    Created {!! $comm->crd !!}, Last updated {!! $comm->upd !!}
    <p>{!! $comm->txt !!}</p>
    <hr />
    @endforeach
@endsection