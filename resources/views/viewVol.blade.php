@extends('templates.layout')
@section('content')
        <h2>Volume {{ $vol }}:</h2>
{{ $vol_desc }}
<p>Please note that papers are published in preprint form as PDF
    files while they are being refereed. Papers may also be published in preprint
    form when they have been submitted to other Journals. In either case readers
    should appreciate that a preprint is <i>not</i> a formal publication, and it
    should not normally be referenced until the final paper has been published.
    In order to read the preprints and papers you will need to
    have the Adobe Acrobat reader (or an equivalent program) installed on your system; you can obtain this
    from the <a href="http://www.adobe.com/">Adobe Web site</a>. </p>
@foreach($paps as $pap)
@if ($pap->paperPublished==1)
    {{--paper is published--}}
    <p><a href="/viewPaper/{{$vol}}/{{$pap->paperNumber}}">Paper {{ $pap->paperNumber }}</a>
@else
    {{--preprint must be published--}}
    <p><a href="/viewPaper/{{ $vol }}/{{$pap->paperNumber}}">Preprint {{$pap->paperNumber}}</a>
@endif
"{{$pap->title}}"<br /><i>{{$pap->authors}}</i></p>
@endforeach
@endsection
