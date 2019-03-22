<?php
/**
 * Created by PhpStorm.
 * User: mjpssrc
 * Date: 18/01/2019
 * Time: 16:52
 */

$mailAdmin = '<a href="mailto:admin@jcse.org">JCSE Admin</a>';

return [
    'VP_NO_ID'=>'<H2>Program Error - :Type Not in Database</H2>'.
		'<p>The requested :type is not in our database. This should not happen. '.
		'If you got here from a link on another page on JCSE, then there has been a program error - if the fault is '.
		'reproducible, then please contact '.$mailAdmin.' with as much information as possible about '.
		'to the sequence of events that got you here. If you got here from a page on another site, then please contact '.
		'the Administrator of that site - we would prefer it if they link to the index page, rather than linking '.
		'directly to the :type, as the latter may change. '.
        'If you typed the address directly, then please check the address; if it still '.
		'doesn\'t work, then go to the journal Home page and find your way to the relevant index page.</p>',
    'VP_NO_PAPER'=>'<H2>Program Error - No :Type Specified (Volume=:vol, :Type=:pap)</H2>'.
		'<p>This page has been opened without the volume and/or :type number being specified. This should not happen. '.
		'If you got here from a link on another page on the journal, then there has been a '.
		'program error - if the fault is '.
		'reproducible, then please contact '.$mailAdmin.' with as much information as possible about '.
		'to the sequence of events that got you here. If you got here from a page on another site, then please contact '.
		'the Administrator of that site - we would prefer it if they link to the index page, rather than linking '.
		'directly to the :type, as the latter may change. If you typed the '.
		'address directly, then please check the address; if it still '.
		'doesn\'t work, then go to the journal Home page and find your way to the relevant index page.</p>',
    'VP_PAPER_MISSING'=>'<H2>Program Error - :Type Does Not Exist</H2>'.
		'<p>The requested :type does not exist. This should not happen. '.
		'If you got here from a link on another page on the journal, '.
		'then there has been a program error - if the fault is '.
		'reproducible, then please contact '.$mailAdmin.' with as much information as possible about '.
		'the sequence of events that got you here. If you got here from a page on another site, then please contact '.
		'the Administrator of that site - we would prefer it if they link to the index page, rather than linking '.
		'directly to the :type, as the address of the latter may change. If you typed the '.
		'address directly, then please check the address; if it still '.
		'doesn\'t work, then go to the journal Home page and find your way to the relevant index page.</p>',
	'VP_TXT_MISSING'=>'<H2>Program Error - Text Version of the :Type Does Not Exist</H2>'.
        '<p>Because you are not logged-in to the journal, it is now our policy to display '.
        'a \'text-only\' version of the :type. Unfortunately this version is not currently available for this :type. '.
        'A probable reason for this is that the :type is no longer available, but it may also be a result of '.
        'failure to extract the text from the PDF file provided by the author, or a system fault.</p>'.
        '<p>The display of a text-only version is intended primarily to act as a reference for search engines '.
        'when they index the site. If you wish to view the PDF version of the :type, then please  '.
        '<a href=":register">Register</a> (if you have not already done so) and '.
        '<a href=":login">Login</a>.</p>',
    'VP_TXT_ONLY'=>'<strong><p>Because you are not logged-in to the journal, it is now our policy to display '.
	    'a \'text-only\' version of the :type. This version is obtained by extracting the text from the PDF or HTML file, '.
        'and it is not guaranteed that the text will be a true image of the text of the paper. The text-only '.
        'version is intended to act as a reference for search engines when they index the site, and it is not '.
        'designed to be read by humans!</p>'.
        '<p>If you wish to view the human-readable version of the :type, then please <a href=":register">Register</a> '.
        '(if you have not already done so) and <a href=":login">Login</a>. Registration is completely free.</p></strong>',
    'VP_HTML_MSG'=>'<p>Early papers in JCSE were published as web pages, and comments in these paper reference the paragraph numbers. '.
        'For this reason paragraph numbers have been embedded in the web page in the form &sect;1, with any comments listed following the paper.</p>'];
