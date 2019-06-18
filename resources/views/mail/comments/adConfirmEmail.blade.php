<!DOCTYPE html>

<html>

<head>

    <title>JCSE Email</title>

</head>

<body>

@if ($data['reminder'])
    <h3>{{ __('comments.REMINDER') }}</h3>
@endif
<p>Dear {{ __('comments.Administrator') }}</p>
{!! __('comments.AD_NOTIFY_EMAIL_BODY',$data) !!}

{!! __('jrnl.ADMIN_SIG') !!}
</body>
</html>
