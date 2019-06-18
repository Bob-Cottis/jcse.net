<!DOCTYPE html>

<html>

<head>

    <title>JCSE Email</title>

</head>

<body>
<p>Dear {{ __('comments.Colleague') }}</p>
{!! __('comments.COMMENT_PUBLISHED_EMAIL_BODY',$data) !!}

{!! __('jrnl.ADMIN_SIG') !!}
</body>
</html>

