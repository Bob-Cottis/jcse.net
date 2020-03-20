<html>

<head>

    <title>JCSE Email</title>

</head>

<body>
{!! __('review.contactAuthorBody',$msgData) !!}
<a type="button" href="{{ $msgData['contactLink'] }}">{{ __('admin.contactAuthor') }}</a>

</body>
</html>
