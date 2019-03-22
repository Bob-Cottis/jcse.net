<?php 
session_start();
include_once('/home/jcsete5/public_html/jcse.org/jcse/php_inc/jrnl_subs.php');
$logged_in=is_loggedin();
?>
<html>
<head>
<title>JCSE, Volume 5</title>
<meta name="GENERATOR" content="Microsoft FrontPage 6.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<link rel="stylesheet" type="text/css" href="../config/jrnl_web.css">
<style>
<!--
h5
	{margin-bottom:.0001pt;
	text-align:center;
	page-break-after:avoid;
	direction:rtl;
	unicode-bidi:embed;
	font-size:12.0pt;
	font-family:"Times New Roman";
	margin-left:0cm; margin-right:0cm; margin-top:0cm}
-->
</style>
</head>

<body>
<script>var lgi=<?php if ($logged_in) { echo('true');} else { echo('false');} ?>;</script>
<SCRIPT src="/getcomm.php"></SCRIPT>
<SCRIPT src="/jsinc/jcsesubs.js.php"></SCRIPT>
<SCRIPT>
getcommentmode();</SCRIPT><script src="/jsinc/writeheader.js"></script><?php ggl_ad(); ?>

  <h2>Volume 5:</h2>

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

  <p><a href="preprints/v5preprint1.pdf">Preprint 1</a> Atmospheric Corrosion of Metals<i><br>
  Sabah A. Abdul-Wahab, Charles S. Bakheit, R.A. Siddiqui and Saleh M. Al-Alawi</i></p>
<p><a href="preprints/v5preprint2.pdf">Preprint 2</a> Effect of Benzotriazole on 
Corrosion of Stainless Steel 302 in H<sub>2</sub>SO<sub>4</sub> Solution<br>
<i>M.A. Hosseini, S. Eftekhar</i></p>


<p><a href="preprints/v5preprint3.pdf">Preprint 3</a> Effects of Benzotriazole 
on the Localized Corrosion of Copper Nickel Alloys in Sulfide Polluted Salt 
Water<br>
<span style="font-size: 11.0pt; font-family: Times New Roman; font-style: italic">
N.K.Allam, E.A.Ashour, H.S.Hegazy and B.G.Ateya (submitted 8th September 2003)</span></p>


<SCRIPT>footernc()</SCRIPT>
</body></html>