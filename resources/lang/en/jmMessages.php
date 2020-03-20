<?php
/**
 * Created by PhpStorm.
 * User: mjpssrc
 * Date: 17/03/2019
 * Time: 09:46
 */
return [
    'newVersion'=>'<h2>New Version of JCSE</h2>'.
        '<p>This is a beta test version of the JCSE web site that is being developed to improve the journal management '.
        'facilities and bring the journal into line with current web standards, particularly with respect to display on '.
        'mobile devices. This site (at www.jcse.net) is under active development, and should only be used to review what will become available. '.
        'In particular the Journal Management facilities will not operate on the current version of the Journal. New papers '.
        'can be added when the relevant parts of the web site have been completed, but this is only to allow interested '.
        'readers to trial the new system, and added papers will <em>not</em> be incorporated into the Journal - use the '.
        '\'production\' version of the site at www.jcse.org for this. Similarly the various management facilities will only '.
        'operate in a testing mode</p>'.
        '<p>We welcome comments on the new version of the site to <a href="mailto://development@jcse.org">JCSE Development</a>. '.
        'We are also keen to welcome anyone who is able to participate in the development as we need to enlarge the group '.
        'to ensure continuation of the <a href=":mission">JCSE Mission</a>. Areas of particular interest include:'.
        '<dl><dt>Programming</dt><dd>The journal management system is being developed '.
        'in PHP using the Laravel framework. PHP is similar to most other modern programming languages, and can be learned '.
        'reasonably quickly by anyone with programming experience. The Laravel framework helps to ensure a well-structured '.
        'approach to development, as well as simplifying the work that is needed.</dd>'.
        '<dt>Translation</dt><dd>One objective in the development of the new version is to provide support for languages '.
        'in addition to English. In part this can be provided automatically using the Google system (though this would '.
        'incur a small cost), but checking and refinement of translations will be desirable. Currently we plan to provide '.
        'translation only for journal messages and abstracts of papers.</dd></dl></p>',
    'mission'=>'<h2>The JCSE Mission</h2>'.
        '<p>JCSE was established in about 1995 in response to dissatisfaction with the high cost of the conventional publication '.
        'process to the scientific community, whether in the form of charges to buy or read '.
        'journals or page charges to authors, coupled with the possibilities for cost reduction offered by electronic '.
        'publication over the Internet.</p>'.
        '<p>Thus the mission of JCSE is to provide an electronic-only journal that is free of charge for both authors and '.
        'readers. This depends on a number of conditions:'.
        '<ul><li>Papers supplied by readers in a form suitable for publication without further processing.</li>'.
        '<li>Review by peers free of charge (this is in any case how most existing publishers operate).</li>'.
        '<li>Management at no charge; with the previous version of the management software this has proved difficult, and '.
        'it has meant that aspects of the operation, notable the review process, have not been optimal. The new '.
        'version will provide more robust software for editors, such that many editors can be active, reducind the burden on '.
        'individuals.</li>'.
        '<li>Open-source software development and use. An objective of the new development is to facilitate the use of '.
        'the software for other journal titles.</li>'.
        '<li>Costs covered by advertising. There are some unavoidable costs of the order of a few hundred pounds per year in running the '.
        'journal, notably charges for the file server and maintenance of the domain name. It is hoped that these can '.
        'be covered by the income from advertising, although sponsorship would also be welcome.</li>'.
        '</ul> </p>',
    'indexing'=>'<h2>Indexing Services that include JCSE</h2>'.
        '<p>JCSE is currently included in the Elsevier Bibliographic Databases (see <a href="http://www.elsevier.com">www.elsevier.com</a>). '.
        'It is also indexed by all major web search engines, including <a href="http://scholar.google.com">Google Scholar</a>.</p>'.
        '<p>We currently offer an index of papers in JCSE by way of a link to Google (see above). Alternatively you can '.
        'use your own favourite web search engine to search for &quot;jcse&quot; + your search terms.</p>'.
        '<h3>Adding JCSE to an Index</h3>'.
        '<p>Permission is automatically granted to include JCSE in bibliographic databases, but we would appreciate being '.
        'informed (by means of an email to the Editor) when this is done, so that we can keep this page up to date.</p>',
    'submission'=>'<h2>Submission requirements</h2>'.
        '<p><strong>Authors should now upload their papers directly using the <a href="/subForm1">submission form</a> '.
        '(but after having read the instructions that follow), and they will appear in JCSE as a preprint as soon as they have been '.
        'checked by the editor to ensure that they do not contain unacceptable material. If you are in the process of '.
        'preparing a paper, then you should download and read the new <a href="jcsepapertemplatev2.doc">JCSE Template '.
        'for MS Word</a>. Note that JCSE is an &quot;electronic only&quot; Journal, and it is of no use to us to '.
        'submit printed copies of papers.</strong> </p>'.
        '<p><strong>We do not have the resources to handle submission by any other means than the online submission process, '.
        'so please do not send papers as email attachments unless we have specifically asked you to do this</strong>. </p>'.
        '<h3><strong>The  Paper Submission Process </strong></h3>'.
        '<p>The following instructions apply to the current version of JCSE:</p>'.
        '<ol><li>Your paper should be prepared as an A4 document according to the format described in the Template (if you '.
        'don\'t use MS Word, you should normally be able to import the Template into your favourite word processor, '.
        'otherwise attempt to emulate the layout in the template). The template is itself a valid JCSE document, and '.
        'describes the important features of the document formatting. The document should then be saved as a PDF file '.
        'using a suitable program. If you don\'t have a suitable program to produce a PDF file, then there are a number '.
        'of free programs available. For older versions of Windows we have used <a href="http://www.cutepdf.com/">CutePDF</a> and '.
        '<a href="http://www.pdfforge.org/products/pdfcreator">PDFCreator</a>, while on Linux the standard program is '.
        '<a href="http://www.ghostscript.com">Ghostscript</a>. <a href="http://www.openoffice.org/">Open Office</a> '.
        'and <a href="http://www.libreoffice.org">LibreOffice</a> (the last two both available free of charge for Linux, Windows '.
        'and Mac OS X) can also print directly to PDF files without additional '.
        'programs, as can MS Word 2007 or above (a free \'add-on\' may need to be downloaded from Microsoft). '.
        'For technical reasons the PDF version must be 1.4 or lower (PDF/A, which is covered by an ISO standard is '.
        'also suitable). You will normally be able to select this as part of the print or save process used '.
        'to create the PDF file. MS Word 2007 appears to save PDF files as V1.5 by default, and you need to select the PDF/A '.
        'option (Save As, .pdf, press the Options button). We do not have access to later versions of Word, but you will '.
        'probably also need to select the PDF/A option. You should be able to determine the PDF version by looking '.
        'at the Document Properties in your PDF reader program. If you have problems, please contact '.
        '<script>mailtoadmin();</script> for advice.</li>'.
        '<li>Check on the size of the file that is produced - we have a size limit for file uploads of 10 Mb, if your file '.
        'is larger than this (at the time of writing no PDF files on JCSE are  larger than 10 Mb), then please contact '.
        'JCSE Admin for advice. You should also contact JCSE Admin if you want to include additional features, such as '.
        'videos, program files etc in your paper. </li>'.
        '<li> Make sure that you are registered on the JCSE server '.
        '(go to the <a href=":url:register">Registration</a> '.
        'page if you are not yet registered). If possible your co-authors should also be registered, as this will allow '.
        'us to notify them when the paper is ready and when comments are made on the paper. </li>'.
        '<li> Complete the <a href=":url:submissionform" target="_blank">submission form</a> - this will open in a new '.
        'window so that you can refer back to this page to check the instructions. Make sure that you specify the '.
        'file to be uploaded (the one you produced in step 1) before you press the submit button (we\'ll check that '.
        'you have entered the required information before the form is submitted, but we can\'t tell until you have '.
        'submitted the form whether or not the file is attached). </li>'.
        '<li>The file will have the JCSE header and footer overlaid automatically, and when this has been completed you '.
        '(and your co-authors if they are registered) '.
        'will be given the opportunity to check the result (and resubmit the PDF file if necessary) and approve it '.
        'for publication. The conversion process is relatively rapid, but please be patient and wait for the confirmation '.
        'page to load. You will not be permitted to modify the paper after you have approved it for publication (since '.
        'the referees must have a fixed document to review), so please check it carefully. Note that, unlike many print '.
        'journals, you will not normally be permitted to modify the preprint before it is published as a paper (except '.
        'as required by reviewers). This is done to ensure that the published paper is exactly that which has been '.
        'reviewed. </li>'.
        '<li>Once you have approved the paper, it will be passed to an editor for a check (this is to prevent non-permitted '.
        'material from being published - it is not a technical review), after which it will be published  in the form '.
        'of a preprint.</li>'.
        '<li>A number of reviewers will be invited to review the paper - these will normally be selected from the list that '.
        'you have provided in the submission form, but the Editor may select alternatives if it is felt that the '.
        'reviewers are too close to the authors of the paper. In addition anyone reading the preprint will be asked (but '.
        'not required) to comment on the paper, including rating its suitability for publication.</li> '.
        '<li>Once sufficient responses have been received from the invited and public  reviewers, the paper will be considered '.
        'for publication.</li> '.
        '<li>If selected for publication, the paper will  be modified to indicate that it is fully-published and substituted '.
        'for the preprint. Readers will still be able to make comments on the paper - registered authors will be informed '.
        'of these comments, and may reply if they wish. For this reason it is important that you keep your registration '.
        'information updated. </li> '.
        '<li>If the outcome of the review is that the paper requires modification before publication, authors will be invited '.
        'to submit a revised paper - this will follow essentially the same process as above, and the paper will be subject '.
        'to further review. The Editor may optionally decide to remove the preprint while waiting for the revised paper, '.
        'and authors may also choose to do this.</li> '.
        '<li>If the outcome of the review is a recommendation that a paper should not be published, then the preprint will be '.
        'removed. </li> '.
        '</ol> '.
        '<h3>Publication policy</h3> '.
        '<p>Papers for publication in the journal must meet normal standards for a '.
        'refereed scientific publication; this is ensured by the '.
        '<a href=":url:review"> '.
        'review procedure</a>. There is no upper or lower limit on the '.
        'number of papers published over a particular period.</p> '.
        '<h3>Language<a name="language"></a></h3> '.
        '<p>It is generally expected that papers  submitted to JCSE are written in English, but this is not a requirement. Papers '.
        'written in languages other than English must have copies of the abstract and figure captions in English (as well as '.
        'the language of the paper). It is  strongly recommended, but not required, that an English translation of all of  the '.
        'text is also provided - in this case the original language version of the paper is the version that has been reviewed, '.
        'and this is taken to be the reference version. The accuracy of the translation is not checked. In the latter case the '.
        'following warning (taking French as an example) will be presented to readers </p> '.
        '<blockquote> '.
        '<p>&quot;The original language of this paper is French and the French version is available here. For the convenience of '.
        'readers an English translation has been provided by the authors, but readers should be aware that the French language '.
        'version is the official reference version of the paper, and readers should not rely on the accuracy of the English '.
        'translation.&quot; </p> '.
        '</blockquote> '.
        '<p>Papers written in uncommon languages are likely to  have much longer times for review and lower readership. For papers '.
        'that are not  written in English it is essential that authors provide names and email  addresses of reviewers who are '.
        'competent to review papers in the relevant language.</p> '.
        '<p>Papers submitted to JCSE are not edited to  improve the language and reviewers are specifically told that it is '.
        'not their  responsibility to correct the language (although they should indicate text that  is unclear) &ndash; '.
        'this is partly to save editorial costs, and partly because we do  not believe that an editor can increase the '.
        'information content of the text (if  the text is difficult to understand the editor is just as likely to '.
        'misunderstand it as anyone else). It is therefore very important for authors to  produce the most accurate text '.
        'that they can.</p> '.
        '<h3>Revision of Papers</h3> '.
        '<p>JCSE is a Journal of Record, and papers may not be removed or altered '.
        '(except for any editorial changes in format that are needed to accommodate new '.
        'technologies) once publication has occurred. Minor corrections to papers '.
        'should be made through the commentary process. However, when more significant '.
        'changes are involved revised papers may be '.
        'submitted, in which case the earlier paper and attached comments will be archived. '.
        'Revised papers will be subject to the normal preprint and review cycle, and '.
        'the revised paper will only replace the previous version when the review '.
        'process has been completed and a final version of the paper is published. The '.
        'latest version of a paper will carry the original URL, while earlier revisions '.
        'will have &quot;r1&quot; etc. added to the end of the file name. Thus references to a '.
        'paper will always find the latest revision. </p> '.
        '<h3><a name="Preprints">Preprints</a></h3> '.
        '<p>From Volume 4 onwards, preprints (papers submitted, but as yet unrefereed) '.
        'have been published in PDF format without any Editorial modification (although '.
        'the Editor reserves the right to reject papers). Once the refereeing process '.
        'is completed, the papers will be fully published.</p> '.
        '<p>Authors intending to publish papers in other journals may take advantage of '.
        'Preprint publication in JCSE. In this case the paper can be published as a '.
        'preprint  in JCSE on the understanding that it will be removed when the '.
        'full publication occurs (if required by the Journal to which it is submitted). '.
        'Authors are responsible for notifying JCSE when full '.
        'publication occurs, and for ensuring that preprint publication is permitted by '.
        'the Journal to which they are submitting the paper. If permitted by the other '.
        'Journal, preprints may be left in place indefinitely. For the assistance of '.
        'potential authors, we have collected information on the preprint policies of '.
        'some <a href=":url:preprint_policies">other publishers</a>.</p> '.
        '<p>As they are subject to removal and/or change, preprints (whether due for '.
        'final publication in JCSE or another Journal) should not normally '.
        'be referenced in other works.</p> '.
        '<h3>Comments to Papers</h3> '.
        '<p>Comments may be attached to published '.
        'papers and to preprints by anyone by using the automated comment submission mechanism. Comments are submitted to '.
        'the authors of the paper for '.
        '(non-binding) approval, and they are then approved by the editor of the paper. As with the original paper, comments '.
        'may not normally be '.
        'removed once published. The Editor reserves the right to reject or remove '.
        'comments for any reason; this right will normally only be applied if comments '.
        'are considered to breach normal legal and ethical standards.</p> '.
        '<h3>Trade Names</h3> '.
        '<p>Trade names may be used once only in the main body of the text, usually in '.
        'parentheses to qualify a generic name, as in &quot;The paint used was based '.
        'on an acrylic resin (SuperAcryl 123 - trade name of the Super Resin '.
        'Corporation) ...&quot;. The generic name must be used thereafter. Trade names '.
        'may not be used in tables, figures or other illustrations.</p> '.
        '<p>The same rules apply to comments attached to papers, with all comments by a '.
        'single individual or group of individuals from the same organization being '.
        'treated as a single document.</p> '.
        '<h3><a name="Copyright">Legislation and Copyright</a></h3> '.
        '<p>By submitting a paper, authors give their implicit permission, under the UK '.
        'Data Protection Act, for their names to be made available in electronic form. '.
        'Currently, the copyright of all submitted papers is retained by the authors, '.
        'who, by submission of the paper, grant the Journal an exclusive, permanent, '.
        'irrevocable licence to publish the information in electronic form. Authors may '.
        'self-archive their papers on a Web server under their control, but it is '.
        'preferred for them to point to the JCSE copy, since this allows readers access '.
        'to the comment process. </p> '.
        '<p>Papers may <strong>not</strong> be submitted to JCSE if they have already '.
        'been published  elsewhere in a primarily online electronic form (by this we '.
        'imply that papers published in print, but that offer electronic access are not '.
        'regarded as primarily electronic, and nor are conference proceedings that are '.
        'published as limited circulation CD-ROMs), and, by submitting a paper, authors '.
        'give their implicit confirmation that this '.
        'requirement is met. Otherwise it is permitted to publish papers that have been '.
        'published elsewhere, providing this is permitted by the earlier publisher '.
        '(evidence of this must be provided) and '.
        'that the prior publication is notified to the Editor and stated in the '.
        'paper. </p> '.
        '<p>Papers may be submitted to printed journals after they have been published '.
        'in JCSE (either in preprint or final form), providing the following conditions '.
        'are met:</p> '.
        '<ul> '.
        '<li>the publishers of the other journal are aware and accept that it has '.
        'been published in JCSE,&nbsp;</li> '.
        '<li>the other journal is primarily available in printed rather than electronic form,&nbsp;</li> '.
        '<li>the publishers of the other journal undertake to insert the following '.
        'statement at the beginning of the paper:&nbsp;</li> '.
        '</ul> '.
        '<blockquote> '.
        '<p>&quot;This paper has previously been published in the Journal of '.
        'Corrosion Science and Engineering, an entirely electronic journal published '.
        'by the Corrosion and Protection Centre, University of Manchester, in collaboration with the International '.
        'Corrosion Council. The journal can be accessed at http://www.jcse.org. '.
        'Readers are requested to make any comments on this paper to JCSE through '.
        'their online comment mechanism.&quot;</p> '.
        '</blockquote> '.
        '<ul> '.
        '<li>if the paper is modified significantly (i.e. anything more than a few minor corrections or reformatting of '.
        'the reference list to meet the guidance for another publication) then the following acknowledgement is '.
        'preferred:</li> '.
        '</ul> '.
        '<blockquote> '.
        '<p>&quot;This is a revised version of a paper that has previously been published in the Journal of '.
        'Corrosion Science and Engineering, an entirely electronic journal published '.
        'by the Corrosion and Protection Centre, University of Manchester, in collaboration with the International '.
        'Corrosion Council. The journal can be accessed at http://www.jcse.org. '.
        'Readers are requested to make any comments on this paper to JCSE through '.
        'their online comment mechanism.&quot;</p> '.
        '</blockquote> '.
        '<h3>Availability</h3> '.
        '<p>Papers are published in an area on this World-Wide-Web server at no cost to '.
        'view. Hardcopy and disk versions of papers may be made available for a  fee (printed copies will obviously not '.
        'include video '.
        'sequences or sound clips), and DVD or CD-ROM copies of the entire Journal may also be '.
        'available - please contact the Editor if you have a need for these.</p> '.
        '<p>The Corrosion and Protection Centre are committed to make all '.
        'papers available indefinitely. In due course it is expected that archival copies of the '.
        'Journal will be distributed to relevant archives and libraries.</p> '.
        '<h3>Management</h3> '.
        '<p>The journal is published by members of the '.
        'Corrosion and Protection Centre in collaboration with the International Corrosion '.
        'Council (ICC). A Management Board provides overall control of the journal, '.
        'while the technical management of the Journal is undertaken by an '.
        '<a href=":url:ed_board">Editorial '.
        'Board</a> nominated by the Management Board.</p>'
];
