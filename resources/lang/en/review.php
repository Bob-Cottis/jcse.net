<?php

return [
    'edConfirmRevsSubj'=>'[:shortName]Confirm Reviewers',
    'edConfirmRevsBody'=>'<p>Dear :edSalutation,</p>'.
        '<p>You have been proposed as Editor for :shortName, Volume :vol, Paper :pap. Please select one of the following options:</p>'.
        '<ol><li><a href=":acceptLink">Accept nomination and select paper reviewers</a></li>'.
        '<li><a href=":rejectLink">Not available to edit this paper</a></li></ol><p>Thank you, :shortName-bot</p>',
    'edApprovedRevsSubj'=>'[:shortName]Reviewers for Volume :vol, Paper :pap Approved',
    'edApprovedRevsBody'=>'<h4>List of Reviewers Approved</h4><p>Your list of suggested reviewers has been approved, and the '.
        'paper has been published in the form of a preprint.',
    'edNotApprovedRevsSubj'=>'[:shortName]Reviewers for Volume :vol, Paper :pap Modification Requested',
    'edNotApprovedRevsBody'=>'<h4>Modification to List of Reviewers Requested</h4><p>The journal administrator has made the '.
        'following comment on your suggested list of reviewers; please respond to these suggestions so that we can proceed '.
        'with the publication of your paper:</p>',
    'Modify Reviewers'=>'Modify Reviewers',
    'Confirm Reviewers'=>':shortName - Confirm Reviewers',
    'edConfRevHeader0'=>'<p>Thank you for agreeing to edit this paper. We now need you to select suitable reviewers from '.
            'the list suggested by the author, together with a selection of :shortName authors.</p>',
    'edConfRevHeader1'=>'<br /><h4>Reviewers Suggested by Author</h4><p>The corresponding author has suggested the following '.
        'reviewer(s) for :shortName Volume :vol Paper :pap. These should not be members of the same organization as any '.
        'of the authors of the paper. Please check that these suggestions meet this requirement. If you are unhappy with '.
        'any of the suggestions, please delect the associated box.</p>',
    'edConfRevHeader2'=>'<br /><h4>Reviewers Selected by :shortName-bot</h4><p>The following reviewers have been selected at '.
        'random from prior authors of :shortName. Please select sufficient of these to give a total of 3 Reviewers with the '.
        'list nominated by the author.</p>',
    'edConfRevHeader3'=>'<br /><h4>Reviewers Selected by :shortName-bot</h4><p>The author has not suggested any reviewers, '.
            'so please select 3 reviewers from the follwoing list.</p>',
    'edConfRevHeader4'=>'<br /><h4>Check Topics</h4><p>The author has selected the topics listed below as being appropriate '.
        'for this paper. Please check the list; you can modify it if you feel that it is necessary.</p>',
    'submitRev'=>'Confirm Topics and Reviewers',
    'Authors'=>'Author(s)',
    'paConfirmRevNom_subj'=>'Reviewer Nomination Complete',
    'paConfirmRevNom_body'=>'<h3>Reviewer Nomination Completed</h3><p>The paper submission process has now been '.
        'completed and the paper is available to readers in pre-print form (go to :viewPreprintLink to view the preprint). As the '.
        'reviewers must have a fixed document to review, it is now not possible for you to modify the paper; when we have '.
        'sufficient reviews you will be notified of the editor\'s decision. If you wish to check on the progress of the '.
        'review process go to :myJrnlLink</p><p>Thank you, :shortName-bot</p>',
    'inviteReviewerEmailTitle'=>':shortName Reviewer Invitation',
    'inviteReviewerEmailSubj'=>'[:shortName]Invitation to Review a Paper',
    'inviteReviewerEmailBody'=>'<h3>Invitation to Review :shortName Volume :vol, Paper :pap</h3><p>The above paper has '.
        'been submitted to <a href=":jrnlURL">:longName</a>, and the abstract is given at the end of this message. As a part of our '.
        '<a href=":missionLink">mission</a> to provide publication at no cost to authors or readers, with only limited '.
        'funding being provided by advertising on some pages, we depend on the support of reviewers. Thus we hope you '.
        'will be able to review this paper on our behalf. In order to provide timely publication, we ask that reviews '.
        'are completed within 30 days.</p><p>Please select one of the following to respond to this request:<ul>'.
        '<li><a href=":linkAgree">Agree to Review<a></a></li>'.
        '<li><a href=":linkReject">Unable to Review at this time</a></li>'.
        '</ul> In either case you will be able to indicate your preferences in respect of undertaking '.
        'reviews in the future.</p><p>Thank you for considering this request</p><p>:shortName-bot</p><hr />'.
        '<h3>Paper details</h3><dl><dt><strong>Paper Title</strong></dt><dd>:paperTitle</dd>'.
        '<dt><strong>Abstract</strong></dt><dd>:abstract</dd>'.
        '<dt><strong>Download Preprint</strong></dt><dd><a href=":download">:download</a></dd></dl>',
    'acceptReview'=>'<h3>Review :shortName Volume :vol Paper :pap</h3><p>Thank you for agreeing to review this paper. '.
        'Please select one of the following options:</p><dl><dt><a href=":reviewAdvice">'.
        'Review Advice</a></dt></a><dd>Please read this carefully if you have not reviewed papers for :shortName before, as '.
        'the review process is a little different from conventional Journals.</dd><dt><a href=":viewPaperLink">View '.
        'Paper</a></dt><dd></dd><a href=":reviewLink">Review '.
        'Paper</a></dt><dd></dd><dt><a href=":myJrnlLink">My :shortName</a></dt><dd></dd></dt>'.
        '<p>:shortName-bot.</p>',
    'reviewAdvice'=>'<h3>Review Instructions and Advice</h3>'.
        '<h4>The Review Process</h4>'.
        '<p>The review process is similar to that used by other journals, but the open nature of the journal, which '.
        'precludes the availability of any permanent staff, means that it is more important for reviewers to follow '.
        'the standardised approach. Following the completion of <a href="paperSubmissionProcess">paper submission</a>, '.
        'three or four reviewers will be nominated. One or two of these may be nominated by the authors of the paper, '.
        'while the remainder will be selected by the editor of the paper from a short-list drawn from prior authors '.
        'and individuals who have offered to review papers. Currently the latter are selected at random from all '.
        'potential candidates, but it is intended that the selection proccess will be refined in the future to provide '.
        'a better match to the expertise of reviewers. The current process does mean that reviewers may be asked to '.
        'review papers that are well outside their area of expertise. Reviewers in this position may choose to '.
        'treat this as an opportunity to broaden their knowledge, but if you are in this position and feel unable '.
        'to review a paper you can choose not to do so. However, we do need to know your decision as soon '.
        'as possible so that we can find alternatives. It will be particularly helpful to us if you are able to '.
        'propose an alternative reviewer with experience in the subject of the paper.</p>'.
        '<h4>Responsibilities of Reviewers</h4>'.
        '<p>Reviewers are expected to check a number of aspects of the paper:</p>'.
        '<dl><dt><strong>Referencing</strong></dt><dd>The paper should make adequate reference to prior work. We do not enforce a '.
        'particular referencing style, but references should provide sufficient information for readers to locate the '.
        'reference. References to information on the Internet should specify the full address (URL), together with '.
        'the date on which the information was accessed. </dd>'.
        '<dt><strong>Method</strong></dt><dd>For any paper with an experimental component it is important that the experimental '.
        'and analytical methods are described in sufficient detail for anyone with a reasonable knowledge of the subject '.
        'to reproduced them. Authors may use references to other papers to cover this requirement, but it should not be '.
        'necessary for readers to refer to other papers to obtain a general understanding of what was done.</dd>'.
        '<dt><strong>Reproducibility and Errors</strong></dt><dd>Where a paper is reporting quantitative measurements, reasonable '.
        'attention should be given to checks on reproducibility (e.g. repeat experiments) and the quantification of '.
        'errors. Check that correct terminology is used for errors (e.g. using standard error or standard deviation, rather '.
        'than unqualified &#177; ). When comparing properties, such as corrosion rates of two alloys, an indication '.
        'of the statistical significance of any differences found should be given.</dd>'.
        '<dt><strong>Correctness</strong></dt><dd>Are the arguments presented in the discussion of the results reasonable? You may have '.
        'other views, but are the arguments consistent with the evidence presented, and is appropriate evidence provided where '.
        'necessary to support an argument? Where mathematical analyses are presented is the mathematics correct and is '.
        'it described in sufficient detail to enable readers to follow the argument? All units should be expressed in SI, '.
        'although authors should give actual units of measurement in addition when these were not SI. Please check for '.
        'common errors in SI units, such as thh use of K in place of k (e.g. in kg) and confusing M and m. We tolerate '.
        'the use of u in place of &mu;, although the latter is obviously preferred, but look out for the inadvertent '.
        'converion of &mu; to m (this occurs because &mu; is the Greek equivalent of m).</dd>'.
        '<dt><strong>Clarity and Language</strong></dt><dd>We do not edit papers for typographic errors or grammatical correctness, '.
        'and we do not expect reviewers to indicate all such arrors. This is partly because we have no staff to '.
        'undertake such work, but also we do not consider that an editor (who is necessarily unfamiliar with the '.
        'work) can add to the accuracy with which the text represents what the author wants to say. However, it is '.
        'important for reviewers to indicate any parts of the text that are unclear. Reviewers should also indicate '.
        'sections of text where it is unclear whether the text relates to the current work or to prior work (whether '.
        'by the authors or by others). Abbreviations and acronyms should be defined when first used; we prefer that '.
        'only common abbreviations and acrnyms are used, as it is hard for readers to remember unusual terms.</dd>'.
        '<dt><strong>Plagiarism and Copyright</strong></dt><dd>We require authors to confirm that they have not copied '.
        'prior work without permission and that they have provided appropriate attribution for any such copied '.
        'material. Please identify any aspects where you think copying has occurred without such attribution.</dd></dl>'
];

