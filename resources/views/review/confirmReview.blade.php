@extends('templates.layout')
@section('content')
    <div class="card-body">
        <h3 class="card-title">{!! __('reviewForm.confirmReviewTitle',['shortName'=>config('jrnl.shortName'),'vol'=>$paper->volume,'pap'=>$paper->paperNumber]) !!}</h3>
        <p class="card-text">{!! __('reviewForm.confirmReviewHdr',['shortName'=>config('jrnl.shortName'),'vol'=>$paper->volume,'pap'=>$paper->paperNumber]) !!}</p>
        @php $qarray = config('jrnl.reviewQuestions') @endphp
        @foreach($qarray as $key=>$value)
            <div class="card-body">
                <h5 class="card-title">{{ ucfirst($key) }} Rating {{ $review[$key.'Rating'] }} </h5>
            @if($review[$key.'Comment']<>'')
                <p class="card-text">{{ $review[$key.'Comment'] }}</p>
            @endif
            </div>
        @endforeach
        <div class="card-body">
            <h5 class="card-title">Comment for Author</h5>
            @if(isset($review['authorComments']))
                <p class="card-text">{{ $review['authorComments'] }}</p>
            @endif
        </div>
        <div class="card-body">
            <h5 class="card-title">Comment for Editor</h5>
            @if(isset($review['editorComments']))
                <p class="card-text">{{ $review['editorComments'] }}</p>
            @endif
        </div>
        <a href="{{ route('confirmReviewSubmission',['review_id'=>$review['id'],'confirmCode'=>$paper->confirmCode]) }}" class="btn btn-primary">{{ __('reviewForm.confirmSubmission') }}</a> '.
        '&nbsp; &nbsp; <a href="{{ route('reviewPaper',['id'=>$paper->id,'confirmCode'=>$paper->confirmCode,
        'review_id'=>$review['id']]) }}" class="btn btn-primary">{{ __('reviewForm.edit') }}</a>
    </div>


    @endsection
