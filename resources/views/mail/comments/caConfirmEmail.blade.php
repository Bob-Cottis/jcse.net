<!DOCTYPE html>

<html>

<head>

    <title>JCSE Email</title>

</head>

<body>

@if ($data['reminder'])
<h3>{{ __('comments.REMINDER') }}</h3>
@endif
<p>Dear {{ $data['salutation'] }}</p>
{!! __('comments.CA_CONFIRM_EMAIL_BODY',$data) !!}

{!! __('jrnl.ADMIN_SIG') !!}
</body>
</html>



