<!DOCTYPE html>

<html>

<head>

    <title>JCSE Email</title>

</head>

<body>
<p>Dear {{ $data['salutation'] }}</p>
{!! __('submit.paRemindUpload_EMAIL_BODY',$data) !!}
{!! __('jrnl.ADMIN_SIG') !!}
</body>
</html>