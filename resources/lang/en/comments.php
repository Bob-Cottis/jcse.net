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
    'CA_CONFIRM_EMAIL_BODY'=>'<p>The comment given below has been recorded in your name about Paper :pap in Volume :vol of :jrnlShortName. '.
        'Please go to <a href=":link">:link</a> within 5 days to confirm the submission. If you '.
        'did not make this comment or do not wish to proceed with its publication, you may ignore this message.</p>'.'
        :commentListing',
    'CA_REMIND_EMAIL_SUBJ'=>':jrnlShortName Confirmation Reminder, Comment on Volume :vol, Paper :pap',
    'CA_REMIND_EMAIL_BODY'=>'<p>This is a reminder that your comment on Paper :pap, Volume :vol of :jrnlShortName has been prepared. '.
        'We have not yet received your confirmation that you submitted this comment and are happy with it. please go to '.
        '<a href=":link">:link</a> to confirm your comment. If we do not get this confirmation in the next 5 days, your comment '.
        'will be deleted.</p>',
    'CA_DELETE_EMAIL_SUBJ'=>':jrnlShortName Deletion of Comment on Volume :vol, Paper :pap',
    'CA_DELETE_EMAIL_BODY'=>'<p>As we have not received your confirmation that you wish to proceed with the comment to Paper '.
        ':pap in Volume :vol of :jrnlShortName, this comment has been deleted. You may resubmit the comment if you wish; '.
        'to do so go to <a href=":link">:link</a>. To assist you, the text is reproduced below.</p>',
    'ED_NOTIFY_EMAIL_SUBJ'=>':jrnlShortName New Comment Submitted on Volume :vol, Paper :pap',
    'ED_NOTIFY_EMAIL_BODY'=>'<p>:authorName has submitted a comment to :jrnlShortName. The text of the comment is '.
        'reproduced below. Please check this for suitability. If you find anything that you feel should not be published, '.
        'please <a href=":rejectLink">'.
        'Reject</a> the comment and explain your reason to the commentor. '.
        'If you are happy with the comment then please <a href=":acceptLink">Accept</a> the comment, '.
        'and allow it to be published.</p>'.
        '<p>You may also '.
        '<a href=":contactAuthorLink" >Contact the Author</a> of the comment or of the '.
        'paper if there is anything you wish to discuss with them.</p>:commentListing',
    'PA_NOTIFY_EMAIL_SUBJ'=>':jrnlShortName Comment on your paper (Volume :vol, Paper :pap)',
    'PA_NOTIFY_EMAIL_BODY'=>'<p>:authorName has made a comment on your paper number :pap in :jrnlShortName volume :vol. '.
        'The text of the comment is given below. This comment will be checked by the editor of the paper to ensure that it not offensive '.
        '(but not for any technical matters). You may contact the <a href=":commentEdEmailLink">paper editor</a>, but they will not wait '.
        'for your response before approving the comment. You will receive another email when the comment is made public. '.
        'Once the comment is published you may respond the comment by making another comment. Comments will normally be published within 1 week of '.
        'first submission, unless the Editor requires changes to be made.</p>:commentListing',
    'ED_REMIND_EMAIL_SUBJ'=>':jrnlShortName Confirmation Reminder, Comment on Volume :vol, Paper :pap',
    'ED_REMIND_EMAIL_BODY'=>'<p>This is a reminder that a comment on Paper :pap, Volume :vol of :jrnlShortName has been '.
        'and is waiting for you to confirm that it is acceptable. Please go to <a href=":rejectLink">:rejectLinik</a> to '.
        'reject the comment and explain your reason to the commentor or to <a href=":acceptLink">:acceptLink</a> to approve it.</p>',
    'AD_NOTIFY_EMAIL_SUBJ'=>':jrnlShortName New Comment Submitted',
    'AD_NOTIFY_EMAIL_BODY'=>'<p>:authorName has submitted a comment to :jrnlShortName. The text of the comment is '.
        'reproduced below. The editor responsible for this paper has not yet confirmed its acceptance or otherwise. '.
        'Please check the comment for suitability. If you find anything that you feel should not be published, '.
        'please go to <a href=":rejectLink">:rejectLink</a> to reject the comment and explain your reason to the commentor. '.
        'If you are happy with the comment then please go to <a href=":acceptLink">:acceptLink</a> to approve the comment, '.
        'and allow it to be published.</p>',
    'PUBLISHED_EMAIL_SUBJ'=>':jrnlShortName New Comment on Volume :vol, Paper :pap',
    'COMMENT_PUBLISHED_EMAIL_BODY'=>'<p>A new comment has been published on Paper :pap in Volume :vol of :jrnlShortName. '.
        'Go to <a href=":link">:link</a> to view it.',
    'CA_ACK'=>'<h3>Your Comment on Volume :vol, Paper :pap has been recorded</h3> <p>You will now be sent an '.
        'email for you to confirm that you wish to make this comment. It will then be moderated by the '.
        'editor of the paper. Note that the moderation is only to check that the comment is not illegal or offensive, '.
        'it is not a technical review, and the content of the comment is entirely your responsibility.</p>'.
        '<p>You will be informed when the Moderation is completed, at which time the comment will be fully published. This '.
        'should normally happen within a few days.</p>',
    'CA_CONFIRM'=>'<h3>Comment Confirmed</h3>'.
        '<p>Your comment is now confirmed, and, subject to moderation by the editor of the paper, will be published. This should happen within a few days.</p>',
    'ED_CONFIRM'=>'<H3>Comment Confirmed</H3><p>The comment has now been confirmed and will be published.</p>',
    'Subject'=>'Subject',
    'ED_REJECT_HEADER'=>'<p>You have indicated that you wish to reject the comment listed below. '.
        'In order to do this you must explain to the author of the comment what your reason is. If the reason is adequately '.
        'covered by one of the explanation listed you can check the relevant box - this may have the advantage of '.
        'being translated into the recipient\'s preferred language. If none of the messages are suitable, or to explain your reason, please complete '.
        'the Reason section.</p>',
    'Reject Comment'=>'Reject Comment',
    'REJECTED_EMAIL_SUBJ'=>'Comment Rejected by :src',
    'REJECT_MSG_IRRELEVANT'=>'Your comment has been rejected by the :src as being neither relevant to the paper being commented on, '.
        'nor to the general subject of corrosion.',
    'REJECT_IRRELEVANT_EXPLANATION'=>'You are not required to provide an explanation for this decision.',
    'REJECT_MSG_ILLEGAL1'=>'The :src has rejected your comment on the grounds that it contains statements or language that '.
        'may contravene the law or general decency. Possible reasons include slander, defamation, racism, obscenity or blasphemy. ',
    'REJECT_MSG_ILLEGAL2'=>'The specific reason given by the :src was <strong>":reason"</strong>.<br />',
    'REJECT_MSG_ILLEGAL3'=>'If you still wish to make the comment please resubmit it after revision in the light of the :src\'s comments.',
    'REJECT_ILLEGAL_EXPLANATION'=>'Please consider explaining your reason, but it is not required.',
    'REJECT_MSG_INCORRECT'=>'The :src has rejected your comment on the grounds that it is seriously factually incorrect to the extent '.
        'it is liable to mislead readers. The specific reason given by the :src was <strong>":reason"</strong>. <br />If you '.
        'still wish to make the comment please resubmit it after revision in the light of the :src\'s comments.',
    'REJECT_INCORRECT_EXPLANATION'=>'If you choose this message you must provide an explanation in the Reason box.',
    'REJECT_MSG_OTHER'=>'The :src has rejected your comment on the following grounds: <strong>":reason"</strong>. <br />If you '.
        'still wish to make the comment please resubmit it after revision in the light of the :src\'s comments.',
    'REJECT_OTHER_EXPLANATION'=>'If you choose this message you must provide an explanation in the Reason box.',
    'COMMENT_DELETED'=>'Comment :comm_id has been rejected and the author informed of the reason for the rejection. '.
        'The comment has been marked as rejected and will be deleted in about 1 month (to give time for further discussion if required).',
    'MESSAGE_TEXT'=>'Message Text',
    'MESSAGE_EXPLANATION'=>'Commentary',
    'COMMENT_NO_LONGER_EXISTS'=>'This comment no longer exists. To check for comments on a particular paper, please view the paper '.
        'and select the View Comments button (this will only be displayed if there are comments to the paper.',
    'page'=>'page',
    'paragraph'=>'paragraph',
    'Colleague'=>'Colleague',
    'REMINDER'=>'REMINDER',
    'Editor'=>'Editor',
    'Administrator'=>'Administrator',
    'Reason'=>'Reason',
    'Confirm_Rejection'=>'Confirm Rejection'
];
