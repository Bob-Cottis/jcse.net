@extends('templates.layout')
@section('content')
    @if (isset($fname))
            @includeif($fname)
    @endif
@endsection



