<!DOCTYPE html>

<html>

<head>

    <title>JCSE Email</title>

</head>

<body>
<p>Dear {{ $data['salutation'] }}</p>
<strong>Paper Submission to {{ __('jrnl.shortName') }}.</strong>
<p>{{ $data['leadAuthorName'] }} has submitted the paper {{ $data['title'] }} to {{ __('jrnl.shortName') }}. We
enclose a copy of the draft paper. Please check the paper and confirm that you are happy with it by clicking the button
below. If you want any changes made, please contact {{ $data['leadAuthorName'] }}, as only they can modify the submission.</p>
<p>Once all authors have confirmed the submission, or after 2 weeks, when any author that we have not heard from will be
    assumed to agree to the publication, the paper will be published as a preprint and reviewers will be contacted</p>

</body>
</html>