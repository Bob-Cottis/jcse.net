<?php

return [
    'edConfirmRevsSubj'=>'[:shortName]Confirm Reviewers',
    'adNomEditorSubj'=>'[:shortName] Nominate Editor',
    'adNomEditorBody'=>'<h3>Nominate Editor</h3><p>Please go to <a href=":link">:link</a> to select a suitable editor.</p>'.
        '<p>Thank you :shortName-bot.</p>',
    'inviteEditorSubj'=>'[:shortName]Invitation to Edit Paper',
    'inviteEditorBody'=>'<p>Dear :edSalutation,</p>'.
        '<p>You have been proposed as Editor for :shortName, Volume :vol, Paper :pap. A copy of the paper in the form '.
        'of a preprint is attached. When you have made your decision, please select one of the following options:</p>'.
        '<ol><li><a href=":acceptLink">Accept nomination and select paper reviewers</a></li>'.
        '<li><a href=":rejectLink">Not available to edit this paper</a></li></ol><p>Thank you, :shortName-bot</p>',
    'edApprovedRevsSubj'=>'[:shortName]Reviewers for Volume :vol, Paper :pap Approved',
    'edApprovedRevsBody'=>'<h4>List of Reviewers Approved</h4><p>Your list of suggested reviewers has been approved, and the '.
        'paper has been published in the form of a preprint. You may receive further requests if one or more of the proposed '.
        'reviewers rejects the request or fails to respond after several reminders, but otherwise you will be contacted to '.
        'confirm the decision of the review process when sufficient reviews have been received. You can check on the progress '.
        'of the review by going to <a href=":myJrnlLink">My:shortName</a>, but it is not necessary for you to send reminders '.
        'as this will be handled automatically',
    'Modify Reviewers'=>'Modify Reviewers',
    'Confirm Reviewers'=>':shortName - Confirm Reviewers',
    'edConfRevHeader0'=>'<p>Thank you for agreeing to edit this paper. We now need you to select suitable reviewers from '.
        'the list suggested by the author, together with a selection of :shortName nominated reviewers.</p>',
    'Paper Details'=>'Paper Details',
    'Link to download paper'=>'Link to download paper',
    'edConfRevHeader1'=>'<br /><h4>Reviewers Suggested by Author</h4><p>The corresponding author has suggested the following '.
        'reviewer(s) for :shortName Volume :vol Paper :pap. These should not be members of the same organization as any '.
        'of the authors of the paper. Please check that these suggestions meet this requirement. If you are unhappy with '.
        'any of the suggestions, please deselect the associated checkbox.</p>',
    'edConfRevHeader2'=>'<h4>Reviewers Selected by :shortName-bot</h4><p>The following reviewers have been selected at '.
        'random from prior authors of :shortName, but prioritised according to the match between the keywords for the paper '.
        'and the prospective reviewer (based on papers they have authored or keywords that have explicitly added). Please '.
        'select sufficient of these to give a total of 3 Reviewers with those nominated by the author.</p>',
    'edConfRevHeader3'=>'<h4>Reviewers Selected by :shortName-bot</h4><p>The author has not suggested any reviewers, '.
         'so please select 3 reviewers from the following list.</p>',
    'submitRev'=>'Contact Reviewers and Publish Preprint',
    'Authors'=>'Author(s)',
    'paConfirmRevNom_subj'=>'Reviewer Nomination Complete',
    'paConfirmRevNom_body'=>'<h3>Reviewer Nomination Completed</h3><p>The paper submission process has now been '.
        'completed and the paper is available to readers in pre-print form (go to :viewPreprintLink to view the preprint). As the '.
        'reviewers must have a fixed document to review, it is now not possible for you to modify the paper; when we have '.
        'sufficient reviews you will be notified of the editor\'s decision. If you wish to check on the progress of the '.
        'review process go to :myJrnlLink</p><p>Thank you, :shortName-bot</p>',
    'inviteReviewerEmailTitle'=>'[:shortName] Reviewer Invitation',
    'inviteReviewerEmailSubj'=>'[:shortName] Invitation to Review a Paper',
    'inviteReviewerEmailBody'=>'<h3>Invitation to Review :shortName Volume :vol, Paper :pap</h3><p>The above paper has '.
        'been submitted to <a href=":jrnlURL">:longName</a>, and the abstract is given at the end of this message. As a part of our '.
        '<a href=":missionLink">mission</a> to provide publication at no cost to authors or readers, with only limited '.
        'funding being provided by advertising on some pages, we depend on the support of reviewers. For this reason '.
        'we expect authors of papers to contribute to the review process; prospective authors who have repeatedly '.
        'rejected or failed to respond to invitations to review may experience delayed or refused publication. Thus we hope you '.
        'will be able to review this paper on our behalf. In order to provide timely publication, we ask that reviews '.
        'are completed within 30 days.</p><p>Please select one of the following to respond to this request:<ul>'.
        '<li><a href=":linkAgree">Agree to Review<a></a></li>'.
        '<li><a href=":linkReject">Unable to Review at this time</a></li>'.
        '</ul> In either case you will be able to indicate your preferences in respect of undertaking '.
        'reviews in the future.</p><p>Thank you for considering this request</p><p>:shortName-bot</p><hr />'.
        '<h3>Paper details</h3><dl><dt><strong>Paper Title</strong></dt><dd>:paperTitle</dd>'.
        '<dt><strong>Abstract</strong></dt><dd>:abstract</dd>'.
        '<dt><strong>Download Preprint</strong></dt><dd><a href=":download">:download</a></dd></dl>',
    'inviteRevOK'=>'<h4>Reviewer Invitations Sent and Preprint Published</h4><p>The reviewers that you nominated have '.
        'been contacted and the paper has been published in preprint form. You will be contacted again when all three '.
        'reviews have been completed, or two reviews after 40 days; when a suggested reviewer declines to provide a '.
        'review, or fails to respond to the review request in a reasonable period.</p>',
    'acceptReview'=>'<h3>Review :shortName Volume :vol Paper :pap</h3><p>Thank you for agreeing to review this paper. '.
        'Please select one of the following options:</p><dl><dt><a href=":reviewAdvice">'.
        'Review Advice</a></dt></a><dd>Please read this carefully if you have not reviewed papers for :shortName before, as '.
        'the review process is a little different from conventional Journals.</dd>'.
        '<dt><a href=":viewPaperLink" target="_blank">View Paper</a></dt><dd>This will download a PDF file of the preprint '.
        '(this will open in a new browser tab or window).</dd>'.
        '<dt><a href=":reviewLink">Review Paper</a></dt><dd>Open the page on which you can submit your review.</dd>'.
        '<dt><a href=":myJrnlLink">My :shortName preferences</a></dt><dd>Open the My:shortName page; select \'preferences\' '.
        'to modify the list of keywords indicating your expertise, or to indicate whether or not you wish to be considered as '.
        'a reviewer in future.</dd>'.
        '<p>Thank you for your support, :shortName-bot.</p>',
    'adNominateEditorHeader'=>'<h3>Nominate Editor</h3><p>Thank you confirming the display quality of the paper indicated '.
        'below; now please select an editor from the list below:</p>'.
        '<h4>Paper details</h4>'.
        '<dl><dt>Title</dt><dd>:paperTitle</dd><dt>Author(s)</dt><dd>:authors</dd></dt><dt>Keywords</dt><dd>:keywords</dd></dl>'.
        '<h4>Suggested Editors</h4>',
    'adNomEditor'=>'Thank you, the suggested editor has been contacted.',
    'ackRevReject'=>'<h4>Reviewer Invitation</h4><p>Thank you for considering this request; your response has been '.
        'recorded.</p><p>We hope you be be able to consider future requests, but if you are not able to do so, you can '.
        'modify your preferences <a href=":prefsLink"><strong>here</strong></a>. Please note however, that we depend on '.
        'authors and readers to support the review process, and in future we shall expect prospective authors to have '.
        'contributed to the journal by engaging in the review process. Publication of papers may be delayed or refused '.
        'if authors have disabled review invitations or refused too many invitations.</p>',
    'edRevRejectedSubj'=>'[:shortName] Reviewer Rejected Invitation',
    'edRevRejectedBody1'=>'<h4>Reviewer Rejected Invitation to Review :shortName Volume :vol, Paper :pap</h4>'.
        '<p>:revName rejected the request to review this paper - please select a replacement:</p>'.
        '<p><a href=":link">Nominate Replacement Reviewer</a></p>',
    'edRevRejectedBody2'=>'Alternative reviewer suggested by ',
    'edRevRejectedBody3'=>'Suggested reviewers',
    'authToEditorBody'=>'<h4>Message from author about :shortName, Volume :vol Paper :pap</h4>'.
        '<p>The author has sent you the following message about their paper:</p>'.
        '<p><b>":message"<b></b></p><p>Use the options below to respond to the message and to take any action that is required.</p>'.
        '<a type="button" href=":contactAuthorLink/:msgID">Reply to Author</a> &nbsp;'.
        '<a type="button" href=":editPaperLink">Edit Paper</a>'
];


