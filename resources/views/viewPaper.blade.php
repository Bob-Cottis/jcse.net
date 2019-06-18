@extends('templates.layout')
@section('content')
    <h2>Volume {{$paper['volume']}} {{ ucfirst($typ) }} {{$paper['paperNumber']}}</h2>
    <hr>
    <h2>{!! $paper['title'] !!}</h2>
    <p>{!! $paper['authors'] !!}</p>
    <p>Keywords: {!! $paper['keywords'] !!}</p>
    <p>Abstract:<br/>
      {!! $paper['abstract'] !!}</p>
{{--
    <SCRIPT>notifyPreprint();</SCRIPT>

    <SCRIPT>comment(1)</SCRIPT>
--}}

    @auth
        @if ($html)
            {!! __('vpmessages.VP_HTML_MSG') !!}
            <a class="btn btn-primary" href="{!! $URL !!}">View Web {{ucfirst($typ)}}</a>
            @if ($count>0)
                <a class="btn btn-primary" href="{!! route('viewComments',['pap_id'=>$paper['id']]) !!}">View [{{$count}}] comments </a>
            @endif
        @else
            {!! __('vpMessages.VP_PDF_MSG') !!}
            <a class="btn btn-primary" href="{!! $URL !!}">View PDF {{ucfirst($typ)}}</a>
            @if ($count>0 )
                <a class="btn btn-primary" href="{!! route('viewComments',['pap_id'=>$paper['id']]) !!}">View [{{$count}}] comments </a>
            @endif
        @endif
        <a class="btn btn-primary" href="{!! route('addComment',['pap_id'=>$paper['id'], 'html'=>$html]) !!}">Add Comment</a>
    @endauth
    @guest
         {!! __('vpMessages.VP_TXT_ONLY',['type'=>$typ, 'register'=>route('register'),'login'=>route('login') ])!!}
         {{ file_get_contents($txtname) }}
    @endguest
@endsection