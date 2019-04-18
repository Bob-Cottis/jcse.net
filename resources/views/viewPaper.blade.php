@extends('templates.layout')
@section('content')
    <h2>Volume {{$paper['volume']}} {{ ucfirst($typ) }} {{$paper['paperNumber']}}</h2>
    <hr>
    <h2>{!! $paper['title'] !!}</h2>
    <p>{!! $paper['authors'] !!}}</p>
    <p>Keywords: {!! $paper['keywords'] !!}</p>
    <p>Abstract:<br/>
      {!! $paper['abstract'] !!}</p>

{{--
    <SCRIPT>notifyPreprint();</SCRIPT>

    <SCRIPT>comment(1)</SCRIPT>
--}}

    @auth
        @if ($htmlURL !=='')
            {!! __('vpmessages.VP_HTML_MSG') !!}
        @endif
        @if ($pdfURL !== '' || $htmlURL !=='')
            <h4>
                @if ($pdfURL !== '')
                    <a class="btn btn-primary" href="{!! $pdfURL !!}">View PDF {{ucfirst($typ)}}</a>
                    @if ($count>0 && $htmlURL !== '')
                        <a class="btn btn-primary" href="{!! route('viewComments',['pap_id'=>$paper['id']]) !!}">View [{{$count}}] comments </a>
                    @endif
                @endif
                @if ($htmlURL !== '')
                    <a class="btn btn-primary" href="{!! $htmlURL !!}">View Web {{ucfirst($typ)}}</a>
                        @if ($count>0)
                            <a class="btn btn-primary" href="{!! route('viewComments',['pap_id'=>$paper['id'], 'pageOrPara'=>1]) !!}">View [{{$count}}] comments </a>
                        @endif
                @endif
                <a class="btn btn-primary" href="{!! route('addComment',['pap_id'=>$paper['id'],'pageOrPara'=>$pageOrPara]) !!}">Add Comment</a>
            </h4>
        @endif
    @endauth
    @guest
         {!! __('vpMessages.VP_TXT_ONLY',['type'=>$typ, 'register'=>route('register'),'login'=>route('login') ])!!}
         <?php echo file_get_contents($txtname); ?>
    @endguest
@endsection