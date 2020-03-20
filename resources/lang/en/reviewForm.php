<?php
return [
    'reviewAdvice'=>'<h3>Review Instructions and Advice</h3>'.
        '<h4>The Review Process</h4>'.
        '<p>The review process is similar to that used by other journals, but the fully open nature of the journal, which '.
        'precludes the availability of any permanent staff, means that it is more important for reviewers to follow '.
        'the standardised approach. Following the completion of <a href="paperSubmissionProcess">paper submission</a>, '.
        'three or four reviewers will be nominated. One or two of these may be nominated by the authors of the paper, '.
        'while the remainder will be selected by the editor of the paper from a short-list drawn from prior authors '.
        'and individuals who have offered to review papers. The latter are selected at random from all potential '.
        'candidates, but priority is given to authors with matching keywords. The keywords for an individual include those used with '.
        'papers published as an author, but these can be added in the :MyJrnlLink settings. The process may result in '.
        'reviewers being asked to review papers that are somewhat outside their area of expertise. Reviewers in this '.
        'position may choose to treat this as an opportunity to broaden their knowledge, but if you are in this position '.
        'and feel unable to review a paper you can choose not to do so. However, we do need to know your decision as '.
        'soon as possible so that we can find alternatives. It will be particularly helpful to us if you are able to '.
        'propose an alternative reviewer with experience in the subject of the paper.</p>'.
        '<h4>Responsibilities of Reviewers</h4>'.
        '<p>Reviewers are expected to check a number of aspects of the paper as listed below. You will be asked to assign '.
        'a 1-5 rating for each category, with 5 being the best. You can also give ratings of 6 or 7, with 6 implying that '.
        'you do not feel qualified to judge, and 7 that the category is not relevant. Try to avoid the latter two ratings '.
        'if possible. In addition there is space to comment on each '.
        'category; a comment must be provided to explain any ratings less than 5. The comments should be sufficient for authors '.
        'to understand what would be needed to improve the paper. The numerical ratings will be used to provide a '.
        'suggested recommendation to the editor of the paper. The significance of the ratings will be shown in the review '.
        'form. A recommendation based on all scores will be shown on the review form as it '.
        'is completed. As a reviewer you will only be able to modify the overall recommendation by varying the '.
        'numerical scores for the individual categories.</p>',
    'referencingHdr'=>'Referencing',
    'referencing'=>'The paper should make adequate reference to prior work. We do not enforce a '.
        'particular referencing style, but references should provide sufficient information for readers to locate the '.
        'reference. References to information on the Internet should specify the full address (URL), together with '.
        'the date on which the information was accessed. ',
    'methodHdr'=>'Method',
    'method'=>'For any paper with an experimental component it is important that the experimental '.
        'and analytical methods are described in sufficient detail for anyone with a reasonable knowledge of the subject '.
        'to reproduce them. Authors may use references to other papers to cover this requirement, but it should not be '.
        'necessary for readers to refer to other papers to obtain a general understanding of what was done. ',
    'errorHdr'=>'Reproducibility and Errors',
    'error'=>'Where a paper is reporting quantitative measurements, reasonable attention should be given to checks on '.
        'reproducibility (e.g. repeat experiments) and the quantification of errors. Check that correct terminology is '.
        'used for errors (e.g. using standard error or standard deviation, rather than an unqualified <strong>&#177;</strong>). '.
        'When comparing properties, such as corrosion rates of two alloys, an indication of the statistical significance '.
        'of any differences found should be given.',
    'correctnessHdr'=>'Correctness',
    'correctness'=>'Are the arguments presented in the discussion of the results reasonable? You may have '.
        'other views, but are the arguments consistent with the evidence presented, and is appropriate evidence provided where '.
        'necessary to support an argument; in particular are conclusions stated as facts when they are not clearly proven '.
        'by evidence (e.g. saying "this is" when it should really say "this is suggested to be")? Where mathematical analyses '.
        'are presented is the mathematics correct and is it described in sufficient detail to enable readers with a reasonable '.
        'mathematical background to follow the argument? All units should be expressed in SI, '.
        'although authors should give original units of measurement in addition when these were not SI. Please check for '.
        'common errors in SI units, such as the use of K in place of k (meaning kilo, for example in kg) and confusing '.
        'M and m (Mega and milli). We tolerate the use of u in place of &mu;, although the latter is obviously preferred, '.
        'but look out for the inadvertent conversion of &mu; to m (this can occur because &mu; is the Greek equivalent of m). ',
    'clarityHdr'=>'Clarity and Language',
    'clarity'=>'Papers may be written in any language, but the abstract and figure captions must be given in English as '.
        'well as the main language of the paper. As far as possible editors and reviewers will be chosen who are fluent in '.
        'the main language of the paper, we appreciate the willingness of reviewers to handle such papers. We do not edit '.
        'papers for typographic errors or grammatical correctness, '.
        'and we do not expect reviewers to indicate all such errors. This is partly because we have no staff to '.
        'undertake such work, but also we do not consider that a copy-editor (who is necessarily unfamiliar with the '.
        'work) can add to the accuracy with which the text represents what the author wants to say. However, it is '.
        'important for reviewers to indicate any parts of the text that are unclear. Reviewers should also indicate '.
        'sections of text where it is unclear whether the text relates to the current work or to prior work (whether '.
        'by the authors or by others). This is generally best managed using a separate \'prior work\' section and always '.
        'making the first reference to a paper in this section. Abbreviations and acronyms should be defined when first '.
        'used; we prefer that only common abbreviations and acronyms are used, as it is hard for readers to remember '.
        'unusual terms.',
    'plagiarismHdr'=>'Plagiarism and Attribution of Prior Work',
    'plagiarism'=>'We require authors to confirm that they have not copied prior work without permission and that they '.
        'have provided appropriate attribution and copyright clearance for any such copied material. Please identify any '.
        'aspects where you think copying has occurred without appropriate attribution.',
    'legalHdr'=>'Legal Issues',
    'legal'=>'It is particularly important that we avoid any material that may '.
        'lead to legal action against the journal, since we have no assets and everyone involved with the journal is '.
        'an unpaid volunteer. Please give a rating of less than 5, with an explanation, if there is anything that you '.
        'suspect may result in such action, including possible slander, libel, copyright infringement and the promotion of '.
        'crime or terrorism.',
    'rec_suspend'=>'Suspend and refer to Editor in Chief',
    'rec_reject'=>'Reject',
    'rec_major_revision'=>'Major revision',
    'rec_minor_revision'=>'Minor revision',
    'rec_not able to judge'=>'Not able to judge',
    'rec_not relevant'=>'Not relevant',
    'rec_accept'=>'Accept',
    'formErrorsHdr'=>'Please correct the problems indicated below and resubmit the form',
    'formHeader'=>'Review Form for :shortName Volume :vol, Paper :pap',
    'formHeaderText'=>'<p>Please complete this form when you have reviewed the above paper. If you need a copy of the paper, you can '.
        'download it from <a href=":viewPaperLink">HERE</a>.</p><p>If you have not reviewed papers for :shortName '.
        'before we recommend reading the <a href=":reviewAdviceLink">Review Advice</a>, but you will also '.
        'be able to see the sections of the advice relevant to each question by clicking the &#8964; next to the question '.
        'heading.</p><p>Ratings should normally be between 1 and 5, please try to avoid using 6 or 7 if possible. As well as '.
        'the numerical values the selection box shows the implications for the overall review; the overall recommendation '.
        'will be based on the minimum recommendation for all of the categories.</p>'.
        '<p>You can save your review at any time by clicking the Save button. Click Submit Review to submit '.
        'the review - this will take you to a confirmatory page to check and confirm your review.</p>',
    'rating'=>'Rating',
    'comment'=>'Comment',
    'CommentforAuthorHdr'=>'Comment for Author',
    'CommentforAuthor'=>'<p>This section should be used for detailed comments on specific points in the test. It '.
        'does not have a rating associated with it, and the significance of the comments in this section should be covered '.
        'under the relevant categgories.</p>',
    'CommentforEditorHdr'=>'Comment for Editor',
    'CommentforEditor'=>'<p>This section should be used for messages intended just for the Editors (both the Editor '.
        'assigned to the paper and the Editor in Chief of the Journal). Comments in this section will not be seen by the '.
        'authors or by other reviewers.</p>',
    'confirmReviewTitle'=>'Check Review of :shortName Volume :vol, Paper :pap',
    'confirmReviewHdr'=>'<p>You have submitted the following review for the above paper - please check your review, and '.
        'then press Confirm to finalise the submission or Edit to go back and continue editing it.</p><p>We greatly '.
        'appreciate your contribution to :shortName; the journal would not be possible without the support of reviewers.</p>',
    'confirmSubmission'=>'Confirm Submission',
    'edit'=>'Edit',
    'ackReviewSubmission'=>'<h4>Thank for for submitting your review</h4><p>We acknowledge your submission of a review of '.
        ':shortName Volume :vol, Paper :pap.</p><p>The support of reviewers is essential for the continuing ability of '.
        ':shortName to achieve it\'s <a href=":missionLink">mission</a>; '.
        'we greatly appreciate your efforts for this review and we hope that we may call on your help again in the future. '.
        'If you want to sign out of reviewing, or if you wish to change any of the settings that affect your likelihood of '.
        'being asked to review papers, please go to <a href=":myJrnlLink">My :shortName.</a></p>'.
        '<P>Thank you<br>Bob Cottis<br>Editor-in-Chief, :shortName.</P>',
    'reviewCompleted'=>'The review has been submitted and cannot be changed. Please contact the editor < of this paper if '.
        'this presenta any problems'
    ];
