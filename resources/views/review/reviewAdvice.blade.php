@extends('templates.layout')
@section('content')
    {!! __('reviewForm.reviewAdvice') !!}
    <dl>
        @php $sections = ['referencing','method','errors','correctness','clarity','plagiarism','legal','comment_for_author','comment_for_editor'];
        @endphp
        @foreach ($sections as $s)
<dt>{{ __('reviewForm.'.$s.'Hdr') }}</dt>
<dd>{!! __('reviewForm.'.$s) !!} </dd>
@endforeach
</dl>
@endsection
