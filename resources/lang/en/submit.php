<?php
// strings used in submission process
return [
    'header1'=>'<h3>Paper Submission</h3><h4>Requirements</h4><p>There are a  number of requirements for a successful submission, and it will '.
        'simplify the process if you ensure that you can meet all of these before starting to complete the form:</p>'.
        '<dl><dt>Ensure that your paper meets the Journal Requirements</dt><dd>It will avoid the need for revision if '.
        'you ensure that your paper meets the requirements of the journal. These are given in detail in the <a '.
        'href=":paperTemplate">Paper Template</a>. In particular ensure that you have included an Abstract and Keywords</dd>'.
        '<dt>Obtain Copyright Clearance</dt>'.
        '<dd>Obtain copyright clearance for any figures that you wish to reproduce, and ensure that such figures are given '.
        'appropriate attribution in the text (typically this will be by including a suitable reference in the figure '.
        'caption). We welcome the inclusion of direct quotations from other work (including your own) where appropriate, '.
        'but such quotations must be clearly marked (e.g. by placing in double quotes and indenting) and referenced. '.
        '<em><strong>Any authors found guilty of significant copying without attribution (i.e. plagiarism) will be '.
        'permanently barred from publishing in the Journal.</strong></em></dd>'.
        '<dt>Register all authors</dt><dd>If possible we need to be able to contact all authors to ensure that they are '.
        'kept informed of the submission of the paper. Therefore we shall need the email address under which they are '.
        'registered. For authors who are no longer available (for example if they are deceased or you have lost touch '.
        'with them) you can set the email address to "not.known@none.com", but avoid this if possible.</dd>'.
        '<dt>Complete the first part of the Submission Form</dt><dd>Select the link below (after logging-in if necessary). '.
        'Do this before converting your paper to PDF as you will need to copy the keywords selected in the process of '.
        'completing this form into your paper (see :keywordsLink for further information). In this stage you will also '.
        'need to paste the abstract of your paper into the form</dd>'.
        '<dt>Convert the Paper to PDF/A</dt><dd>We need the paper to be submitted in the ISO standard PDF/A format, '.
        'or the equivalent version 1.4. [<a href=":PDFAdviceLink">more information</a>]</dd></dl>'.
        '<dt>Upload the paper</dt><dd>The next form will allow you to select the PDF file of the paper and upload it '.
        '(i.e. send it to the journal). You will also need to tick a check box confirming that you accept the :shortName '.
        '<a href=":termsLink">Terms and Conditions</a></dd>'.
        '<p>After each stage you will be sent an email giving further advice on the next stage. This may take some time '.
        'to arrive as the paper editor will need to do some checking. You can check on progress via the :myJrnllink '.
        'that you will find at the top right of most pages once you have logged in. If you do not receive the next email when :myJrnl '.
        'suggests that one has been sent please check your junk mail or spam folders; contact :jrnlAdmin if you have '.
        'not received the email (and it does not appear to have been sent) after 1 week or more, include the title of your '.
        'paper so that we can locate it.</p>',
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
    'paPDFConfirmed'=>'<h4>Paper Confirmed</h4><p>You have now completed the main paper submission process. Your paper '.
        'will be checked by the journal administration for acceptable formatting. You will then be sent an email asking '.
        'you to provide the appropriate topics for the paper, and giving you the opportunity to nominate one or two '.
        'reviewers. Once you have done this and the editor has confirmed the topics and reviewer selection your paper '.
        'will be published as a preprint and the review process will commence.</p>',
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
    'lineSpacing'=>'Reduce the line spacing to one to reduce the number of pages (to save printing costs for readers).',
    'Other'=>'Other (enter your message below):',
    'PaperApproved'=>'Paper Approved',
    'approvalMsg'=>'<h4>Select Topics</h4>'.
        '<p>Your paper has been approved for publication as a preprint. This is based purely on the appearance of '.
        'the converted document, and does not imply any technical assessment of the content of the paper. In order to '.
        'publish the preprint and initiate the formal review process you should now select the appropriate topics for the '.
        'paper; this will be used to gude the selection of revviewers. You may optionally propose one or two reviewers. '.
        'These should not be members of the organizations of any of the authors.</p><p><a href=":link">Select Topics</a></p>',
    'reviseHeader'=>'<h4>Paper format needs to be revised</h4>'.
        '<p>The administrator has checked the formatting of the submitted paper, and they have suggested that some '.
        'modification is needed. Please <a href=":link">submit a revised PDF file</a> after taking care of the following point(s);</p>',
    'paperNeedsRevising'=>'Your paper needs some format changes',
    'reviseEmailSent'=>'<h4>Revision Email Sent</h4><p>Thank you for your input. An email has been sent to the corresponding author advising them '.
        'that the paper needs revision.</p>',
    'Nominate Reviewers'=>'Select Topics and Nominate Reviewers for :shortName Volume :vol, Paper :pap',
    'NomRevHeader'=>'<h3 class="jrnl-text">Nominate Reviewers</h3><p>You may optionally suggest one or more reviewers for your paper. These should not be members '.
        'of the same organization as any of the authors of the paper. Enter their email address '.
        'and press the <strong>Check and Add</strong> button; if the suggested reviewer is registered for :shortName, the email address will be sufficient, '.
        'if not you will need to enter their address details (all fields must be completed). Once you have finished, press '.
        'the save button to save your selection. It will not be possible for authors to deselect reviewers once the list has '.
        'been saved.</p>',
    'nomRevOK'=>'<h4>Reviewer Nomination Completed</h4><p>Thank you for completing the reviewer nomination. Once this has been '.
        'checked by journal administration reviewers will be contacted and your paper will be published in preprint form.</p>',
    'addRev'=>'Add Reviewer',
    'checkNewrev'=>'Check and Add',
    'selectTopics'=>'<h3 class="jrnl-text">Select Topics</h3><p>Please select the topic(s) that most closely match your '.
        'paper.You must select at least one topic, but if possible please select at least one topic from each group (if '.
        'you feel that none of the topics are appropriate, select <strong>Other Topic</strong>). The topics that you '.
        'select will be used to guide the selection of the paper editor and reviewers, so it is important that you are '.
        'as accurate as possible in your selection.</p>',
    'topicsSaved'=>'<h4>Topics Saved</h4><p>The list of suggested topics has been saved. The paper editor will now '.
        'nominate additional reviewers and the review process will commence. We hope that the review process will be '.
        'completed within 30 days, but we are dependent on a quick response from the nominated reviewers. If you want '.
        'to check on the progress of the paper, please go to :myJrnl.</p>',
    "submissionProcess"=>'<h3>SubmissionProcess</h3><p>There are several stages to the submission process. While these are '.
        'similar to conventional publication, authors have a rather larger part to play in :shortName, and potential '.
        'authors are asked to take careful note of the followiing in order to avoid problems with their submission.</p>'.
        '<ol><li><p>The first step in the submission process is to complete the first part of the submission form. <strong>You '.
        'should do this before producing the PDF file of the paper as you will select the keywords as a part of this '.
        'submision, and these should be pasted into your paper</strong>.</p></li>'.
        '<li><p>Once you have added list of keywords to your paper, it should be saved as a PDF file using a suitable program. The PDF '.
        'version must be 1.4 or PDF/A (see <a href="/PDFAdvice">PDF Advice</a> for more information). If you don\'t have a suitable '.
        'program, then there are a number of free programs available. For Windows we have used CutePDF and PDFCreator, '.
        'while on Linux the standard program is Ghostscript. Open Office can also print directly to PDF files without '.
        'additional programs, as can recent versions of MS Word. If the program has selectable options for print quality, '.
        'then chose a &lsquo;high quality print&rsquo; option if possible.</p></li>'.
        '<li><p>Check on the size of the file that is produced - we currently have a size limit for file uploads of 10 '.
        'Mb, if your file is larger than this (at the time of writing no PDF files on :shortName are larger than 10 Mb), then '.
        'please contact :shortName Admin for advice. You should also contact :shortName Admin if you want to include '.
        'additional features, such as videos, program files etc with your paper.</p></li>'.
        '<li><p>Make sure that you are registered on the JCSE server. If at all possible your co-authors should also '.
        'be registered.</p></li>'.
        '<li><p>Complete the submission form - select Paper Submission from the left-hand '.
        'menu. This will lead to a page that restates a brief version of the submission instructions, then provides a '.
        'button to open the submission form (you will first need to login if you have not already done so).</p></li>'.
        '<li><p>Following the submission of the form you will be taken to a page on which you can upload the PDF copy '.
        'of your paper. You will also have to check a box confirming that you agree to the :shortName Terms and '.
        'Conditions.</p></li>'.
        '<li><p>The file will have the :shortName header and footer overlaid automatically, and a copy '.
        'will be sent to each author.</p></li>'.
        '<li><p>The corresponding author (assumed to be the person logged in when the submission form was completed) '.
        'will be able to modify the paper (by uploading a revised version) and list of authors if necessary and then '.
        'approve it for publication. Unless requested by the editor, you will not be permitted to modify the paper after you have approved it '.
        'for publication (since the referees must have a fixed document to review), so please check it carefully. Note '.
        'that, unlike most print journals, there is no proofing stage, so if the paper if approved for publication without '.
        'modification you will not have an opportunity to modify the preprint before it is published as a paper.</p></li>'.
        '<li><p>Once you have approved the paper, it will be passed to an editor for a check (this is to prevent '.
        'non-permitted material from being published and to check that the presentation quality is acceptable - it is not '.
        'a technical review), after which it will be published in the form of a preprint. At this stage readers may make '.
        'comments on the paper (and you will be able to respond); these may be taken into account by the Editor in deciding '.
        'whether or not to publish the paper.</p></li>'.
        '<li><p>A number of reviewers will be invited to review the paper - these will normally be selected from any that '.
        'you have provided in the submission process, plus a number selected by the editor.</p></li>'.
	    '<li><p>Once sufficient reviews have been received the paper will be considered for publication.</p></li>'.
        '<li><p>If approved for publication without modification, the original PDF file will have a revised overlay added '.
        'to indicate that it is fully-published, and it will be referred to as a paper rather than a preprint. Readers '.
        'will still be able to make comments on the paper - registered authors will be informed of these comments, and may '.
        'reply if they wish. For this reason it is important that all authors keep their registration information updated. '.
        'Once the paper is published authors may submit a revised version of a paper if they wish &ndash; this is treated in '.
        'essentially the same way as a new publication, except that it will substitute for the original paper, retaining the '.
        'same volume and paper number. The original version will remain available to maintain the integrity of the record. '.
        'This will be achieved by assigning revision numbers to copies of the paper.</p></li>'.
        '<li><p>If the outcome of the review is that the paper requires minor revision before publication, authors will be '.
        'invited to submit a revised paper; this will be published after checking by the editor.</p></li>'.
        '<li><p>If the outcome of the review is that the paper requires major revision before publication, authors will be '.
        'invited to submit a revised paper; this will be subject to further review, normally by the same reviewers, and '.
        'readers who made comments on the original paper will also be informed. The editor may optionally decide to remove '.
        'the preprint while waiting for the revised paper, and authors may also choose to do this.</p></li>'.
        '<li><p>If the outcome of the review is a recommendation that a paper should not be published, then the preprint '.
        'will be removed. Authors may resubmit a modified paper, but this will be treated as a completely new submission.</p></li>'.
	    '<li><p>Authors may request the removal of a paper while it is in the preprint stages, but not once it has been '.
        'fully published as a paper. However, authors are asked to avoid removing a preprint if possible as this will '.
        'potentially waste the valuable time of reviewers. Also authors should be aware that other journals may regard '.
        'the publication of a preprint (even if it has subsequently been removed) as sufficient to preclude subsequent '.
        'publication elsewhere.</p></li>',
    'keywords'=>'<h3>Keywords in :shortName</h3><p>Keywords and phrases play an major part in the journal publication process, '.
        'and it is important that authors take care in the selection of keywords. As well as the more normal use of '.
        'keywords to assist readers in selecting papers of interest to them, keywords are used to guide the selection of '.
        'editors and reviewers for papers. Authors have a free choice of keywords for their paper, but in order to provide '.
        'a consistent set of the more common keywords that can be used to help readers locate papers, and to match papers '.
        'to editors and reviewers, a sub-set of keywords are <em><strong>preferred</strong></em>, and authors should '.
        'select from these where possible.</p>'.
        '<h4>Guidelines for the selection of keywords</h4><ul>'.
        '<li>When entering keywords, once two characters have been typed a list of suggestions will be displayed; these '.
        'will include preferred keywords that will be marked with an asterisk. You can select a keyword from the list by '.
        'clicking with the mouse or by using the down-arrow key and pressing Enter. As you select keywords, these will '.
        'be added to a fragment of text that will be suitable for pasting into your paper; click the Copy Keywords '.
        'button to copy the text to the clipboard.</li>'.
        '<li>If you do not see a keyword that you wish to use you can finish typing the complete keyword or phrase and '.
        'press Enter to complete the addition of the new keyword.</li>'.
        '<li>As :shortName is specifically concerned with corrosion, \'corrosion\' is assumed as a keyword, and need '.
        'not be included, although it should included as a part of the definition of types of corrosion (e.g. use '.
        '\'pitting corrosion\' rather than just \'pitting\').</li>'.
        '<li>Since it is relatively awkward to include subscripts and superscripts, chemical '.
        'formulae are best avoided, so for example use \'nitric acid\' rather than \'HNO3\'.</li>'.
        '<li>In general use singular terms (e.g. \'acid\' rather than \'acids\') which are taken to include the plural.'.
        '</li></ul>'.
        '<h4>Formatting of keywords</h4><p>Keywords are generally stored in lower case, but abbreviations up to four '.
        'characters in length will be stored and displayed in upper case, <em>providing they are typed in '.
        'upper case when first entered</em>. :shortName Administration may modify the formatting of keywords if '.
        'necessary, but this will not change the format in copies of papers. Authors may adjust the formatting in '.
        'their paper as they see fit, but should use the same keywords as they have selected in the paper submission '.
        'process.</p>'
        ];
