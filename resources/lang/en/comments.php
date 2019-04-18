<?php
/**
 * Created by PhpStorm.
 * User: mjpssrc
 * Date: 24/03/2019
 * Time: 06:38
 */
return [
    'NO_COMMENT'=>'<h2>No Comments to this paper</h2>'.
        'There are no comments to this paper',
    'CA_CONFIRM_EMAIL_SUBJ'=>':jrnlShortName Comment on Volume :vol, Paper :pap',
    'CA_CONFIRM_EMAIL_BODY'=>'<p>A comment has been recorded in your name about Paper :pap in Volume :vol of :jrnlShortName. '.
        'Please go to <a href=":link">:link</a> within 5 days to confirm the submission. If you '.
        'did not make this comment or do not wish to proceed with its publication, you may ignore this message.</p>',
    'CA_REMIND_EMAIL_SUBJ'=>':jrnlShortName Confirmation Reminder, Comment on Volume :vol, Paper :pap',
    'CA_REMIND_EMAIL_BODY'=>'<p>This is a reminder that your comment on Paper :pap, Volume :vol of :jrnlShortName has been prepared. '.
        'We have not yet received your confirmation that you submitted this comment and are happy with it. please go to '.
        '<a href=":link">:link</a> to confirm your comment. If we do not get this confirmation in the next 5 days, your comment '.
        'will be deleted.</p>',
    'CA_DELETE_EMAIL_SUBJ'=>':jrnlShortName Deletion of Comment on Volume :vol, Paper :pap',
    'CA_DELETE_EMAIL_BODY'=>'<p>As we have not received your confirmation that you wish to proceed with the comment to Paper '.
        ':pap in Volume :vol of :jrnlShortName, this comment has been deleted. You may resubmit the comment if you wish; '.
        'to do so go to <a href=":link">:link</a>. To assist you, the text is reproduced below.</p>',
    'ED_NOTIFY_EMAIL_SUBJ'=>':jrnlShortName New Comment Submitted',
    'ED_NOTIFY_EMAIL_BODY'=>'<p>:authorName has submitted a comment to :jrnlShortName. The text of the comment is '.
        'reproduced below. PLease check this for suitability. If you find anything that you feel should not be published, '.
        'please go to <a href=":rejectLink">:rejectLink</a> to reject the comment and explain your reason to the commentor. '.
        'If you are happy with the comment then please go to <a href=":acceptLink">:acceptLink</a> to approve the comment, '.
        'and allow it to be published.</p>'.
        '<p>You may also contact the author of the comment or of the paper if there is anything you wish to discuss with them,'.
        'using the buttons below</p>',
    'PA_NOTIFY_EMAIL_SUBJ'=>':jrnlShortName Comment on your paper (Volume :vol, Paper :pap)',
    'PA_NOTIFY_EMAIL_BODY'=>'<p>:authorName has made a comment on your paper number :pap in :jrnlShortName volume :vol. '.
        'The text of the comment is given below. This comment will be cchecked by an Editor to ensure that it not offensive '.
        '(but not for any technical matters). You may contact the <a href="mailto::edEmail">Editor</a>, but they not wait '.
        'for your response before approving the comment. You will receive another email when the comment is made public. '.
        'Once the comment is published you may respond the comment by making another comment. Comments will normally be published within 1 week of '.
        'first submission, unless the Editor requires changes to be made.</p>',
    'ED_REMIND_EMAIL_SUBJ'=>':jrnlShortName Confirmation Reminder, Comment on Volume :vol, Paper :pap',
    'ED_REMIND_EMAIL_BODY'=>'<p>This is a reminder that a comment on Paper :pap, Volume :vol of :jrnlShortName has been '.
        'and is waiting for you to confirm that it is acceptable. Please go to <a href=":rejectLink">:rejectLinik</a> to '.
        'reject the comment and explain your reason to the commentor or to <a href=":acceptLink">:acceptLink</a> to approve it.</p>',
    'AD_NOTIFY_EMAIL_SUBJ'=>':jrnlShortName New Comment Submitted',
    'AD_NOTIFY_EMAIL_BODY'=>'<p>:authorName has submitted a comment to :jrnlShortName. The text of the comment is '.
        'reproduced below. The Editor responsible for this paper has not yet confirmed its accepteance or otherwise. '.
        'Please check thcomment for suitability. If you find anything that you feel should not be published, '.
        'please go to <a href=":rejectLink">:rejectLink</a> to reject the comment and explain your reason to the commentor. '.
        'If you are happy with the comment then please go to <a href=":acceptLink">:acceptLink</a> to approve the comment, '.
        'and allow it to be published.</p>',
    'PUBLISHED_EMAIL_SUBJ'=>':jrnlShortName New Comment on Volume :vol, Paper :pap',
    'PUBLISHED_EMAIL_Body'=>'<p>A new comment has been published on Paper :pap in Volume :vol of :jrnlShortName. '.
        'Go to <a href=":link">:link</a> to view it.',
    'CA_ACK'=>'<h3>Your Comment on Volume :vol, Paper :pap has been recorded</h3> <p>You will now be sent an '.
        'email for you to confirm that you wish to make this comment. It will then be moderated by the '.
        'editor and then made public. Note that the moderation is only to check that the comment is not illegal or offensive, '.
        'it is not a technical review, and the content of the comment is entirely your responsibility.</p>'.
        '<p>You will be informed when the Moderation is completed, at which time the comment will be fully published. This '.
        'should normally happen within 2 weeks.</p>',
    'CA_CONFIRM'=>'<h3>Comment Confirmed</h3>'.
        '<p>Your comment is now confirmed, and, subject to moderation by the Editor, will be published. This should happen within a few days.</p>'
];