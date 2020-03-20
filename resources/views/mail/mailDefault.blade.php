<!DOCTYPE html>
<html>

<head>

    <title>JCSE Email</title>

</head>

<body>
<p>Dear {{ $salutation }}</p>
{!! $msg !!}
{!! __('mail.noReply') !!}
</body>
</html>
