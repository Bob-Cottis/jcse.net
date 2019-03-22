<?php
session_start();
include_once('/home/jcsete5/public_html/jcse.org/jcse/php_inc/jrnl_subs.php');
include('get_listing.inc.php');
$st=get_listing(8);
?>
<html>

<head>
<title>JCSE, Volume 8</title>
<meta name="GENERATOR" content="Microsoft FrontPage 6.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<link rel="stylesheet" type="text/css" href="/config/jrnl_web.css">
</head>

<body>
<SCRIPT src="/getcomm.php"></SCRIPT>
<SCRIPT src="/jsinc/jcsesubs.js.php"></SCRIPT>
<SCRIPT>
getcommentmode();</SCRIPT>
<script src="/jsinc/writeheader.js"></script><?php ggl_ad(); ?>

  <h2>Volume 8</h2>
  <SCRIPT>linkVol(8);</SCRIPT>
  <p>Please note that papers are now being published in preprint form as PDF 
  files while they are being refereed. Papers may also be published in preprint 
  form when they have been submitted to other Journals. In either case readers 
  should appreciate that a preprint is <i>not</i> a formal publication, and it 
  should not normally be referenced until the final paper has been published.&nbsp; </p>

  <p>In order to read the preprints you will need to 
  have the Adobe Acrobat reader installed on your system; you can obtain this 
  from the <a href="http://www.adobe.com/">Adobe Web site</a>. </p>

  <p>Full papers with comment facilities will 
  be published following refereeing.</p>

<?php 
if($st=="") {
	?>
	<p>This volume will contain papers that were presented at the conference "Advances in Corrosion Protection by Organic Coatings", held in Cambridge, September 2004. Unfortunately there have been delays in preparing these for publication, but we hope to have them available shortly.</p>
	<?php
	} else { echo $st; } ?>
	
<SCRIPT>footernc()</SCRIPT>

</body></html>