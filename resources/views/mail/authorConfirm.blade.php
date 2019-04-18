@extends('template.layout')
@section('content')
{!! __('comments.AUTHOR_CONFIRM',['vol'=>$vol,'pap'=>$pap,'link'=>route(xxxx)]) !!}

<p>{!! config('jrnl.adminEmail') !!}</p>
@endsection
