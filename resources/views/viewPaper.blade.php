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
            <h2>
                @if ($pdfURL !== '')
                    <a href="{!! $pdfURL !!}">View PDF {{ucfirst($typ)}}</a>
                @endif
                @if ($htmlURL !== '')
                    <a href="{!! $htmlURL !!}">View Web {{ucfirst($typ)}}</a>
                @endif
            </h2>
        @endif
    @endauth
    @guest
         {!! __('vpMessages.VP_TXT_ONLY',['type'=>$typ, 'register'=>route('register'),'login'=>route('login') ])!!}
         <?php echo file_get_contents($txtname); ?>
    @endguest
@endsection