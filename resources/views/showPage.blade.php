@extends('templates.layout')
@section('content')
    @if (isset($params))
        {!! __($msg,$params); !!}
    @else
        {!! __($msg) !!}
    @endif
@endsection

