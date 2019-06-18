<!DOCTYPE html>

<html>

<head>

    <title>JCSE Email</title>

</head>

<body>
<p>Dear {{ $data['salutation'] }}</p>
{!! __('comments.PA_NOTIFY_EMAIL_BODY',$data) !!}
{!! __('jrnl.ADMIN_SIG') !!}
</body>
</html>

