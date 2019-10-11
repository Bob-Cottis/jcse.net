@extends('templates.layout')
@section('content')
    {!! __('review.acceptReview',['shortName'=>$shortName,'vol'=>$vol,'pap'=>$pap]) !!}
@endsection
