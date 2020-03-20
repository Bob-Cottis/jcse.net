@extends('templates.layout')
@section('content')
    <div class="card">
        <div class="card-header">{!!  __('myjrnl.authViewPreprintTtl',['shortName'=>$shortName,'vol'=>$paper->volume,'pap'=>$paper->paperNumber]) !!}</div>
        <div class="card-body">{!! __('myjrnl.authViewPreprintHdr') !!}</div>
        <div class="card-header"><h5>{{ __('myjrnl.PaperDetails') }}</h5></div>
        <div class="card-body">Title: {{ $paper->title }}</div>
        <div class="card-body">Author List: {{ $paper->authors }}</div>
        <div class="card-body">
        @foreach($authorDetails as $adkey=>$adval)
            Registered Author {{ $adkey }}: {{$adval['name'].' ('.$adval['email'].')'}}<br>
        @endforeach
        </div>
        <div class="card-body">Abstract: {{ $paper->abstract }}</div>
        <div class="card-header"><h5>{{ __('myjrnl.reviewStatus') }}</h5></div>
        <div class="card-body">{!! __('myjrnl.reviewStatusText') !!}</div>
        <div class="card-body">
        @foreach($reviews as $rev)
            @if(! is_null($rev['dateSent']))
                Review #{{ $rev['id'] }} Reviewer contacted on {{ date('Y-m-d', strtotime($rev['dateSent'])) }}
                @if($rev['completed'])
                    completed on {{ date('Y-m-d', strtotime($rev['dateCompleted'])) }}
                @else
                    @if($rev['agreed'])
                        agreed on {{ $rev['dateResponded'] }}
                    @else
                        not responded to request to review
                    @endif
                    @if($rev['reminderCount']>0)
                    {{ $rev['reminderCount'] }} reminders sent
                        @if(! is_null($rev['dateDropped']))
                        dropped {{$rev['dateDropped']}}
                        @endif
                    @endif
                @endif
                <br>
            @endif
        @endforeach
        </div>
        <div class="card-footer"><a href="{!! $contactEditorLink !!}">{{ __('myjrnl.authContactEditor') }}</a></div>
    </div>

    @endsection
