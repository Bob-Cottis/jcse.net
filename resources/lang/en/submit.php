<?php
// strings used in submission process
return [
    'header1'=>'<h3>Paper Submission</h3><h4>Requirements</h4><p>There are a  number of requirements for a successful submission, and it will '.
        'simplify the process if you ensure that you can meet all of these before starting to complete the form:</p>'.
        '<dl><dt>Ensure that your paper meets the Journal Requirements</dt><dd>It will avoid the need for revision if '.
        'you ensure that your paper meets the requirements of the journal. In particular ensure that you have included an '.
        'Abstract and Keywords</dd>'.
        '<dt>Register all authors</dt><dd>If possible we need to be able to contact all authors to ensure that they are '.
        'kept informed of the submission of the paper. Therefore we shall need the email address under which they are '.
        'registered. For authors who are no longer available (for example if they are deceased or you have lost touch '.
        'with them) you can set the email address to "not.known@none.com", but avoid this if possible.</dd>'.
        '<dt>Convert the Paper to PDF/A</dt><dd>We need the paper to be submitted in the ISO standard PDF/A format, '.
        'or the equivalent version 1.4. [<a href=":PDFAdviceLink">more information</a>]</dd>'.
        '<dt>Have the Abstract and Keywords available</dt><dd>We shall need a copies of the abstract and keywords - '.
        'you can do this most easily by copying and pasting them from the paper.</dd></dl>'.
        '<h4>The Submission Process</h4>'.
        '<p>The submission process takes place in three stages:</p>'.
        '<ol><li>Entry of title, abstract, keywords and authors</li>'.
        '<li>Upload of paper</li>'.
        '<li>Suggestion of reviewers - we shall ask for 4 suggested reviewers</li></ol>'.
        '<p>After each stage you will be sent an email giving further advice on the next stage. You should receive this '.
        'within a few minutes. If you do not receive it please check your junk mail or spam folders; contact :jrnlAdmin '.
        'if you have not received the email after 1 hour or more, include the title of your paper so that we can locate it.</p>',
    'mustRegister'=>'You must be registered and logged in in order to submit a paper:',
    'form_header'=>'New Paper Submission',
    'paperTitle'=>'Paper Title',
    'title'=>'Title',
    'Author'=>'Author',
    'Email'=>'Email',
    'givenName'=>'Given Name',
    'familyName'=>'Family Name',
    'organization'=>'Organization',
    'country'=>'Country',
    'Enter'=>'Enter',
    'Abstract'=>'Abstract',
    'Keywords'=>'Keywords',
    'keywordsOrPhrases'=>'key words or phrases, separated by commas',
    'Submit'=>'Submit',
    'Check'=>'Check',
    'NotReg'=>'Not Registered',
    'AuthReg'=>'Registered',
    'EnterAuthDetails'=>' Author not registered. Correct email and check again or enter author details below',
    'addAuthor'=>'Add Another Author',
    'authorHelp'=>'<p><strong>Please complete the following in the order in which authors appear in the list of authors for the paper.</strong> '.
        'Enter each author\'s email address (which should be registered in the journal if possible). When you move away '.
        'from the email entry box the address will be checked to see whether or not they are registered. '.
        'If they are not registered complete the name, organization and country details. If it is not possible to enter a valid email '.
        'address, press the No Email button, which will set the address to "not.known@none.com", then enter their name, '.
        'organization (or a suitable description such as "Retired") and country. '.
        'For data protection reasons you will not be able to see the details for authors who are already registered (otherwise it would provide '.
        'a way for hackers to \'harvest\' this information).</p>',
    'noEmail'=>'That author is not registered - please check and correct the email address, or if they are not registered please '.
        'provide their name and organization:',
    'paperCreated'=>'<h3>Paper Submission Second Stage</h3><p>You can now submit the text of your paper as a PDF file. '.
        '<strong>We remind you that the paper must be in PDF/A or version 1.4 format (if you have difficulty producing '.
        'this format, <a href="https://docupub.com/pdfconvert/">Docupub</a> offer a free online converter that seems to '.
        'be effective.</strong></p>',
    'paperModified'=>'<h3>Paper Modification</h3><p>You can now submit a modified version of your paper as a PDF file. '.
        '<strong>We remind you that the paper must be in PDF/A or version 1.4 format (if you have difficulty producing '.
        'this format, <a href="https://docupub.com/pdfconvert/">Docupub</a> offer a free online converter that seems to '.
        'be effective.</strong> As before the processed paper will be emailed to you for checking.</p>',
    'adConfirmPDFSubj'=>'New Paper Submitted to :jrnlShortName',
    'adConfirmPDFBody'=>'<p>Dear Administrator</p><strong>Paper Submitted to :jrnlShortName.</strong>'.
    '<p>:leadAuthor has submitted the paper :title to :jrnlShortName. Go to <a href=":link">Check Paper</a> to check the submission.</p>',
    'checkPaper'=>'<h4>Check the Processed Paper</h4><p>The paper has now had the :shortName information superimposed on it. '.
        'A copy of the processed paper has been sent to each author for whom an email address has been provided. As '.
        'corresponding author you should check that the paper is acceptable to all authors, and ensure that the :shortName '.
        'information has not obscured the text of the paper.</p>',
    'CheckPaperEmailSubj'=>':shortName Paper Submission',
    'CheckPaperEmailBody1'=>'<h4>Submission of :shortName Volume :vol, Paper :pap</h4><p>You are recorded as the corresponding '.
        'author of the enclosed paper that has been submitted to :shortName. Please <a href=":link">Check the Paper</a> to '.
        'confirm the acceptability of the processed paper and continue the paper submission process.</p>',
    'CheckPaperEmailBody2'=>'<h4>Submission of :shortName Volume :vol, Paper :pap</h4><p>The enclosed paper has been submitted to '.
        ':shortName by :leadAuthorName (:leadAuthorEmail), and you are recorded as a co-author. Please ensure that you are satisfied with the '.
        'paper; contact :leadAuthorSalutation if you have any concerns.</p>',
    'Nominate Reviewers'=>'Nominate Reviewers',
    'Nom_Rev_Header'=>'<h4>Nominate Reviewers</h4><p>Please suggest a minimum of 4 potential reviewers for your paper. '.
        'You may suggest anyone you wish, but you may find that other authors in :shortName will be more likely to '.
        'provide a timely review; authors will also normally be in our database, so you will only need to provide their email address.</p>'.
        '<p>Enter the email address of the suggested reviewer, then when you move away from the email box, the address will be checked against '.
        'our database. If the email is not in the database you will need to enter further details about the reviewer.</p>'.
        '<p>You do not have to complete the list of reviewers immediately, but your paper will not be published in preprint '.
        'form and the review process will not start until reviewer have been nominated.</p>',
    'CCError'=>'Confirmation Error',
    'paConfirmPDFHeader'=>'Confirm Publication',
    'paConfirmPDFBody'=>'<p>You should have received a copy of your paper that has been processed to incorporate the :shortName '.
        'information by email, but you can also download a copy <a href=":paperLink">here</a>. Please confirm that the '.
        'processed paper is acceptable to you and that the list of authors, shown below, agrees with the list in the paper '.
        '(both that all authors are included and that the order is the same as in the paper). If you need to make changes '.
        'click the appropriate button</p>'.
        '<p><strong>List of authors</strong><br />:authors',
    'paModifyPDFHeader'=>'Modify Paper',
    'paModifyPDFBody'=>'<p>Please modify your paper (you can download a copy <a href=":paperLink">here</a> to respond to '.
        'the suggestions form journal administration. Then confirm that the '.
        'processed paper is acceptable to you and that the list of authors, shown below, agrees with the list in the paper '.
        '(both that all authors are included and that the order is the same as in the paper).</p>'.
        '<p><strong>List of authors</strong><br />:authors',
    'pdfConfirmBtn'=>'Confirm Publication',
    'pdfConfirm'=>'Press this button only when you are happy with <strong>both</strong> the paper and the list of authors',
    'pdfReviseBtn'=>'Revise Paper',
    'pdfRevise'=>'Press this button to submit a revised PDF file in order to improve the appearance of the processed paper',
    'pdfModAuthBtn'=>'Modify Authors',
    'pdfModAuth'=>'Press this button to adjust the list of authors (e.g. to change the order or to add missing authors)',
    'authModHeader'=>'Modify Author List',
    'authModBody'=>'<p>Use the form below to modify the ordering of the authors or to add or remove authors. Click Save when '.
        'you have finished in order to save the list. To add an additional author enter the email address and click the +. '.
        'Leave the emaill address blank if the author does not have an email address. If the user is not in our database '.
        'you will need to complete the author\'s name and address details.</p>',
    'EmailAddress'=>'Email Address',
    'AddressHelp'=>'That email address is not in our database; please correct it, or enter the user\'s details below. Note '.
        'that for data protection reasons the author\'s name and address details will not be shown:',
    'checkNewAuthor'=>'Check email and add to list',
    'saveAndAdd'=>'Save and add to list',
    'Save'=>'Save modified list',
    'Colleague'=>'Colleague',
    'paRemindUpload_EMAIL_SUBJ'=>'Reminder - Upload PDF file for :jrnlShortName Volume :vol Paper :pap',
    'paRemindUpload_EMAIL_BODY'=>'<h4>Reminder to upload PDF file</h4><p>Thank you for your submission to :jrnlShortName.'.
        'You now need to upload the PDF file. Note that this must be in PDF V1.4 or PDF/A format (see :pdfURL for advice.'.
        '</p><p>Go to <a href=":uploadLink">Paper Upload</a> to upload the PDF file.</p>',
    'PDFAdviceTitle'=>'Creating the PDF File',
    'PDFAdvice'=>'<h4>Creating the PDF File</h4><p>The process that is used to apply the journal information to your paper '.
        'requires that the PDF file meets the PDF/A standard, or essentially equivalently version 1.4. This is because the '.
        'method used to compress the data in the file changed from version 1.5 onwards, and the open-source '.
        'program that use to modify the file is not able to process the later compression method. In addition PDF/A is '.
        'recommended for the long-term preservation of digital documents '.
        '(see https://www.loc.gov/preservation/digital/formats/fdd/fdd000318.shtml).</p>'.
        '<p>We expect that all common word processing programs will be able to produce PDF/A output, we use '.
        'MS Word 2007 for which the steps necessary are:</p><ol><li>Select \'File Save As\'</li><li>select \'.pdf\' '.
        'from the drop-down list of formats</li><li>press the Options button</li><li>and select PDF/A</li></ol></ul> '.
        '<p>For more recent versions of Word we expect that a similar option will be available.</p>'.
        '<p>We also use the Open-Source LibreOffice, in which case (for version 6.2):</p><ol><li>Select \'File Export as\' '.
        'PDF</li><li>Under PDF Options General select Archive PDF/A-1b (ISO 19005-1)</li><li>Then export the file</li></ol>',
    'alreadyConfirmed'=>'<h4>The Paper has already been approved</h4><p>The paper has already been approved, and further '.
        'processing is in progress, for this reason the paper can no longer be modified. You may be asked to revise it if '.
        'there are formatting or similar problems, and you may also have a chance to revise it after the review is completed.</p>',
    'paPDFConfirmed'=>'<h4>Paper Confirmed</h4><p>You have now completed the main paper submission process. Your paper will be checked by '.
        'the journal administration for acceptable formatting. You will then be sent an email asking you to nominate three '.
        'four reviewers. Once you have done this your paper will be published as a preprint and the review process will commence.</p>',
    'adminCheckPaperHeader'=>'<h4>Check Paper</h4>',
    'adminCheckPaperBody'=>'<p>:leadAuthor has submitted the paper :title to :jrnlShortName. Please check '.
        'the converted PDF file (a copy was enclosed in the email, or you can download a copy <a href=":link">here</a>), '.
        'CHeck the list below and check any points that need to be addresses by the author. You are reminded that this is '.
        '<strong>not</strong> a technical review, you should just check that the appearance of the converted PDF file is '.
        'acceptable.</p><p>Select the relevant checkboxes and the associated message wil be send to the author. Leave all '.
        'the checkboxes unchecked to approve the paper.</p>',
    'topMargin'=>'The top margin needs to be increased to avoid overlapping the journal footnote.',
    'bottomMargin'=>'The bottom margin needs to be increased to avoid overlapping the journal footnote.',
    'abstractNeeded'=>'An abstract is needed.',
    'keywordsNeeded'=>'Keywords are needed.',
    'lineSpacing'=>'Reduce the line spacing to reduce the length of the paper (to save printing costs for readers).',
    'Other'=>'Other (enter your message below):',
    'PaperApproved'=>'Paper Approved',
    'approvalMsg'=>'<h4>Nominate Reviewers</h4>'.
        '<p>Your paper has been approved for publication as a preprint. This is based purely on the appearance of '.
        'the converted document, and does not imply any technical assessment of the content of the paper. In order to '.
        'publish the preprint and initiate the formal review process you should now nominate four reviewers. These should not '.
        'be members of the organizations of any of the authors.</p><p><a href=":link">Nominate Reviewers</a></p>',
    'reviseHeader'=>'<h4>Paper format needs to be revised</h4>'.
        '<p>The administrator has checked the formatting of the submitted paper, and they have suggested that some '.
        'modification is needed. Please <a href=":link">submit a revised PDF file</a> after taking care of the following point(s);</p>',
    'paperNeedsRevising'=>'Your paper needs some format changes',
    'reviseEmailSent'=>'<h4>Revision Email Sent</h4><p>Thank you for your input. An email has been sent to the corresponding author advising them '.
        'that the paper needs revision.</p>',
    'Nominate Reviewers'=>'Nominate Reviewers for :shortName Volume :vol, Paper :pap',
    'NomRevHeader'=>'<p>Please suggest at least three and preferably four reviewers for your paper. These should not be memebers '.
        'the same organization as any of the authors of the paper. Enter their email address '.
        'and press the Check button; if the suggested reviewer is registered for :shortName, the email address will be sufficient, '.
        'if not you will need to enter their address details (all fields must be completed). Once you have finished, press '.
        'the save button to save your selection. It will not be possible for authors to deselecct reviewers once the list has '.
        'been saved.</p>',
    'addRev'=>'Add Reviewer',
    'submitRev'=>'Submit Reviewers',
    'checkNewrev'=>'Check'
   ];

