<?php 
session_start();
include_once('/home/jcsete5/public_html/jcse.org/jcse/php_inc/jrnl_subs.php');
$logged_in=is_loggedin();
?>
<!DOCTYPE HTML PUBLIC "-//W3O/DTD HTML//EN">
<html>

<head>
<title>JCSE Volume 1, Paper 4, Figure 2a</title>
<meta name="GENERATOR" content="Microsoft FrontPage 6.0">
<SCRIPT src="/getcomm.php?vol=1&pap=4"></SCRIPT>
<SCRIPT src="/jsinc/jcsesubs.js.php"></SCRIPT>
<SCRIPT>
getcommentmode();</SCRIPT></HEAD><body>
<script src="/jsinc/writeheader.js"></script>
  <h2>Volume 1 Paper 4</h2>
  <pre>       StatMost for Windows        Tuesday, October 24, 1995     1:48:03 PM

 ----------------------------------------------------------------------------------


                           Factorial Analysis of Variance
        ====================================================================

   Number of Factors = 3,  Number of Replicates = 2

      Factor        Levels
         1            2
         2            2
         3            2

                               ANOVA Table
   =======================================================================
        Source      SS         DF        MS            F             P
        ABC        85.5625      1       85.5625        0.0305        0.8658
        AB       1660.5625      1     1660.5625        0.5911        0.4641
        A C     55578.0625      1    55578.0625       19.7844        0.0021
        A        5439.0625      1     5439.0625        1.9362        0.2016
         BC     47197.5625      1    47197.5625       16.8011        0.0034
         B      15813.0625      1    15813.0625        5.6291        0.0451
          C      2280.0625      1     2280.0625        0.8116        0.3939
        Error   22473.5000      8     2809.1875
   -----------------------------------------------------------------------
        Total  150527.4375     15  


************************************* The End ************************************

</pre>
  <p><br>
  <b>Figure 2a:</b> A sample ANOVA table for a three-factor analysis. The ANOVA table gives
  the sums of the squares, the degrees of freedom, the mean squares, the F ratio, and the
  probability values for each effect as well as the error for the entire set of data (based
  on two complete runs of the matrix). The effects with extremely low probability values are
  the relevant effects (these effects lie outside of the experimental error). </p>
<script>footer();</script>