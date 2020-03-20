<!DOCTYPE html>

<html>

<head>

    <title>JCSE Email</title>

</head>

<body>
<p>Dear Admin</p>
<strong>Paper Submitted to {{ __('jrnl.shortName') }}.</strong>
<p>{{ $data['leadAuthorName'] }} has submitted the paper {{ $data['title'] }} to {{ __('jrnl.shortName') }}. Go to
:link to check the submission.</p>

</body>
</html>