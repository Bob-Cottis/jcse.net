<html>

<head>

    <title>JCSE Email</title>

</head>

<body>
@if($msgData['copySelf'])
    {!! __('review.authToEditorCopySelfBody',$msgData) !!}
@else
    {!! __('review.authToEditorBody',$msgData) !!}
    <a type="button" href="{{ $msgData['contactAuthorLink'] }}">{{ __('review.replyToAuthor') }}</a>
    <a type="button" href="{{ $msgData['editPaperLink'] }}">{{ __('review.editPaper') }}</a>
@endif
</body>
</html>
