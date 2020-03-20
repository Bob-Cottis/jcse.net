@extends('templates.layout')
@section('content')
                <p>ISSN 1466-8858 &nbsp;&nbsp;Editor: <i>{!! config('jrnl.mailToEditor') !!}</i></p>
                <p>This is the new version of the JCSE system, now available on www.jcse.net. One major change that has
                    been made is to require all readers to <a href="{!! route('register') !!}">register</a> and
                    <a href="{!! route('login') !!}">log-in</a> in order to access the Journal. This has been done so
                    that we have a record of who has accessed each paper, and we shall use this to ask readers to give a brief review of papers that they have accessed. Registration is completely free. </p>
                <p>Please notify any  problems in accessing the new version by email to
                    {!! config('jrnl.mailToAdmin') !!}
{{--        </div>--}}
    <ul>
        @foreach ($vols as $vol)
            <li><a href="/viewVol/{{ $vol->volume }}">Volume {{ $vol->volume }}</a>
                {{$vol->description }}        </li>
        @endforeach
    </ul>
    @endsection
