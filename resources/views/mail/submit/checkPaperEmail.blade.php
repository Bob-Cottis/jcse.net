<!DOCTYPE html>

<html>

<head>

    <title>JCSE Email</title>

</head>

<body>
@if ($data['remind'])
    <h4>REMINDER</h4>
@endif
@if ($data['lead'])
    <p>Dear {{ $data['leadAuthorSalutation']}}</p>
    {!! __('submit.CheckPaperEmailBody1',$data) !!}
@else
    <p>Dear {{ __('submit.Colleague') }}</p>
    {!! __('submit.CheckPaperEmailBody2',$data) !!}
@endif
{!! __('jrnl.ADMIN_SIG') !!}
</body>
</html>

