<!DOCTYPE html>

<html>

<head>

    <title>JCSE Email</title>

</head>

<body>
<p>Dear {{ $data['salutation'] }}</p>
{!! __('comments.CA_CONFIRM_EMAIL_BODY',$data) !!}
<hr />
<p>{{ $data['comment'] }}</p>
<hr />
{!! __('jrnl.ADMIN_SIG') !!}
</body>
</html>



