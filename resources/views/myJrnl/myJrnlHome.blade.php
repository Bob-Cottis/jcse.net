@extends('templates.layout')
@section('content')
    {{--@php dump($revWaitingForReview) @endphp--}}
    {!! __('myJrnl.homeHdr') !!}
    @if($papersPublished->isNotEmpty())
    <h4>{!! __('myJrnl.Papers published') !!}<button class="btn" type="button" data-toggle="collapse" data-target="#paperPublished" aria-expanded="false" aria-controls="paperPublished">
            <i class="fa fa-chevron-down hidetoggle" aria-hidden="true"></i>
        </button></h4>
    <div name="paperPublished">
    @foreach($papersPublished as $paper)
        <p>{{ __('myJrnl.Title')}}: "{{ $paper->title }}"<br>
        @if($paper->version<3)
            {{__('myJrnl.AuthorList')}}: {{ $paper->authors }}<br>
        @endif
        @php $authors = $paper->authorCollection(); dd($authors); @endphp

        @if(is_null($authors))
            {{__('myjrnl.noRegAuthors')}}
        @else
            {{__('myJrnl.RegAuthors')}}:
            {{ implode(', ',$paper->regAuthors) }}
        @endif
        <br><a class="btn btn-primary" href="{{ route('myJrnlEditPaper',['vol'=>$paper->volume,'pap'=>$paper->paperNumber]) }}">Edit</a>
        </p>
    @endforeach
    </div>
    @endif
    @if($preprintsPublished->isNotEmpty())
    <h4>Preprints published<button class="btn" type="button" data-toggle="collapse" data-target="#preprintPublished" aria-expanded="false" aria-controls="preprintPublished">
            <i class="fa fa-chevron-down hidetoggle" aria-hidden="true"></i>
        </button></h4>
    <div class="collapse" id="preprintPublished">
    @foreach($preprintsPublished as $paper)
        {{--@php dd($paper) @endphp--}}
        <p>{{ __('myJrnl.Title')}}: "{{ $paper->title }}"<br>
            @if($paper['version']<3)
                {{__('myJrnl.AuthorList')}}: {{ $paper->authors }}<br>
            @endif
            @php $regAuthors = $paper->regAuthorList(); @endphp
            @if($regAuthors=="")
                {{__('myjrnl.noRegAuthors')}}
            @else
                {{__('myJrnl.RegAuthors')}}:
                {{ $regAuthors }}
            @endif
            <br><a class="btn btn-primary" href="{{ route('myJrnlEditPaper',['vol'=>$paper->volume,'pap'=>$paper->paperNumber]) }}">{{ __('myjrnl.View') }}</a>
        </p>
    @endforeach
    </div>
    @endif
    @if($papersIncomplete->isNotEmpty())
    <h4>Papers being processed<button class="btn" type="button" data-toggle="collapse" data-target="#paperBeingProcessed" aria-expanded="false" aria-controls="paperBeingProcessed">
            <i class="fa fa-chevron-down hidetoggle" aria-hidden="true"></i>
        </button></h4>
    <div class="collapse" id="paperBeingProcessed">
        @foreach($papersIncomplete as $paper)
            <p>{{ __('myJrnl.Title')}}: "{{ $paper->title }}"<br>
                @if($paper->version<3)
                    {{__('myJrnl.AuthorList')}}: {{ $paper->authors }}<br>
                @endif
                {{__('myJrnl.RegAuthors')}}:
            @if(is_null($paper->regAuthors))
                {{ implode(', ',$paper->regAuthors) }}
            @endif
                <br><a class="btn btn-primary" href="{{ route('myJrnlEditPaper',['vol'=>$paper->volume,'pap'=>$paper->paperNumber]) }}">{{ __('myjrnl.View') }}</a>
            </p>
        @endforeach
    </div>
    @endif
    {{--@if($messages->isNotEmpty())
    <h4>Messages<button class="btn" type="button" data-toggle="collapse" data-target="#messages" aria-expanded="false" aria-controls="messages">
            <i class="fa fa-chevron-down hidetoggle" aria-hidden="true"></i>
        </button></h4>
    <div class="collapse" id="messages">

        @foreach($messages as $msg)
            <div class="form-group row">
                <div class="col-md-2">
                    {{ $msg['created_at'] }}
                </div>
                <div class="col-md-10">
                    {{ $msg['subject'] }}<br>
                    {!! __(json_decode($msg['params'])->message) !!}
                </div>
                <hr>
            </div>
        @endforeach
    </div>
    @endif--}}
    @if($revWaitingForReview->isNotEmpty())
    <h4>Reviews Awaiting Completion<button class="btn" type="button" data-toggle="collapse" data-target="#reviews" aria-expanded="false" aria-controls="reviews">
            <i class="fa fa-chevron-down hidetoggle" aria-hidden="true"></i>
        </button></h4>
    <div class="collapse" id="reviews">
        @foreach($revWaitingForReview as $rev)
            {{--@php dump($rev) @endphp--}}
            <div class="form-group row">
                <div class="col-md-2">
                    Paper Title
                </div>
                <div class="col-md-10">
                    {{ $rev->paper->title }}
                </div>
                <div class="col-md-2">
                    Date requested
                </div>
                <div class="col-md-10">
                    {{ $rev->dateSent }}
                </div>
                <div class="col-md-2">
                    Date Agreed
                </div>
                <div class="col-md-10">
                    {{ $rev->dateResponded }}
                </div>
                <div class="col-md-2">
                    <a class="btn btn-primary" href="{{ route('viewPaper',['vol'=>$rev->paper->volume,'pap'=>$rev->paper->paperNumber]) }}" target="_blank">View Preprint</a>
                </div>
                <div class="col-md-2">
                    <a class="btn btn-primary" href="{{ route('reviewPaper',['id'=>$rev->paper->id,'confirmCode'=>$rev->paper->confirmCode,'review_id'=>$rev->id]) }}" target="_blank">Review Preprint</a>
                </div>
                <hr>
            </div>
        @endforeach
    </div>
    @endif


@endsection
