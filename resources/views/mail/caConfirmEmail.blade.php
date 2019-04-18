<!DOCTYPE html>

<html>

<head>

    <title>JCSE Email</title>

</head>

<body>
<p>Dear {{ $data['salutation'] }}</p>
{!! __('comments.CA_CONFIRM_EMAIL_BODY',$data) !!}
{!! __('jrnl.ADMIN_SIG') !!}
{!! __('jrnl.DO_NOT_REPLY') !!}
</body>
</html>



