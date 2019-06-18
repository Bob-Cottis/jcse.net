@extends('templates.layout')
@section('content')
    <H3>JCSE Paper Number {{ $pap }} in Volume {{ $vol }} has been processed</H3>
    <p>It will now be checked by the journal administration, then you will be sent a copy of the processed preprint.
    A copy will also be sent to your co-authors (if any). All authors will need to confirm that they agree to the
    submission of the paper</p>
@endsection