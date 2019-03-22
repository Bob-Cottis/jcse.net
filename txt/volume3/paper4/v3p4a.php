<?php 
session_start();
include_once('/home/jcsete5/public_html/jcse.org/jcse/php_inc/jrnl_subs.php');
$logged_in=is_loggedin();
?>
<html>
<head>
<meta name="GENERATOR" content="Microsoft FrontPage 5.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<title>JCSE Volume 3, Paper 4 - Program Details</title>
<link rel="stylesheet" type="text/css" href="../../config/jrnl_web.css">
</head>

<body>
<script>var lgi=<?php if ($logged_in) { echo('true');} else { echo('false');} ?>;</script>


<!--webbot bot="Include" u-include="../../Header.htm" tag="BODY" startspan -->

<p><img border="0" src="/images/jrnl_logo.gif" width="1200" height="84"></p>
<blockquote>
  <p><small><b>(at http://www.jcse.org/, ISSN 1466-8858)</b></small></p>
</blockquote>

<!--webbot bot="Include" endspan i-checksum="15810" -->


  <h2>Volume 3 Paper 4</h2>
  <hr>
  <h2>Simulation of Electrochemical Noise Due to Metastable Pitting</h2>
  <h3><a name="Source"></a>Source Code</h3>
  <p>The source code is provided in a self-extracting file. In order to load
  this on your computer:</p>
  <ol>
    <li>Download the <a href="../paper4/NoiseSimSource.exe">self-extracting program file</a>
      to a suitable directory on your computer (you can allow it to run directly
      if your browser permits it, but you would probably be wise to download it
      first so that it can be checked for viruses).</li>
    <li>Run the program - this will extract the source code to a specified
      directory. By default the extraction directory is set to the Windows
      temporary directory, and you will probably want to change this to
      something more suitable.</li>
    <li>The contents of the various files are explained in the ReadMe.txt file.</li>
  </ol>
  <h3><a name="Program"></a>Program</h3>
  <p>The program is provided in a self-extracting file. To install the program:</p>
  <ol>
    <li>Download the <a href="../paper4/noisesim.exe">self-extracting program file</a> to
      your computer and run it to extract the files (you can allow it to run
      directly if your browser permits it, but you would probably be wise to
      download it first so that it can be checked for viruses).</li>
    <li>Note the directory that the files are extracted to (by default this is
      set to the Windows temporary directory, but you are advised to change it
      to a new directory so that you can delete all of the installation files
      easily when you have finished the installation).</li>
    <li>When the files have been extracted, run the program Setup.exe that has
      been extracted, and this will install the program on your computer.</li>
    <li>To uninstall the program use the Windows Add/Remove Programs command in
      the Control Panel.</li>
  </ol>
  <h3>Copyright</h3>
  <p>Note that the program and the source code remain the copyright of <script>mailto('bob.cottis','manchester.ac.uk','the
  author')</script>, and he should be contacted for formal approval if it is wished to
  use them for commercial activities.</p>
  <!--webbot bot="Include" u-include="../../footer.html" tag="BODY" startspan -->

<hr>

<p>Send Mail to the <script>mailtoeditor()</script></p>
<p><a href="../../../../default.htm">Journal of Corrosion Science &amp; Engineering
Home Page<br>
</a><a href="http://corrosiontest.its.manchester.ac.uk/default.htm">Corrosion Information Server</a><br>
Center for Electrochemical Science and Engineering, University of Virginia (JCSE
Mirror Site - currently being redeveloped)</p>
<!--webbot bot="Include" endspan i-checksum="48897" -->

  <p>&nbsp;</p>

</body>

</html>