<?php 
session_start();
include_once('/home/jcsete5/public_html/jcse.org/jcse/php_inc/jrnl_subs.php');
$logged_in=is_loggedin();
?>
<!DOCTYPE HTML PUBLIC "-//W3O/DTD HTML//EN">
<html>

<head>
<title>JCSE Volume 1, Paper 4, Factorial Design and Analysis</title>
<meta name="GENERATOR" content="Microsoft FrontPage 6.0">
<SCRIPT src="/getcomm.php?vol=1&pap=4"></SCRIPT>
<SCRIPT src="/jsinc/jcsesubs.js.php"></SCRIPT>
<SCRIPT>
getcommentmode();</SCRIPT></HEAD><body>
<script src="/jsinc/writeheader.js"></script>
<h2>Volume 1 Paper 4</h2>
<h4>Full Factorial Experimental Design and Analysis</h4>
  <p>A two-level, full factorial design was implemented in these experiments to compare the
  effects of four different species on the corrosion parameters. A two-level, full factorial
  design consists of 2k experiments where k is the number of factors each with a high and
  low value. In this context a factor is an experimental variable, and a result is the
  quantitative measure of the parameter of interest. For example, in the study of corrosion
  , a factor may be the acid concentration in the solution, and a result would be the
  corrosion potential. The relevant statistical effects of each factor are found by
  comparing the results from all of the experiments with the high value of a factor to the
  results of all of the experiments with the low values. For example, for a four-factor
  analysis, the eight experiments with a high value of one factor are compared to the eight
  experiments with the low value. In this manner, it is also possible to quantify higher
  order (or combined) effects.</p>
  <p>Table 1 shows a sample two-level three factor design. (Note: The design matrix and the
  given results are not all of the actual data collected in this experiment. The values have
  been simplified for the purpose of this example.)</p>
  <p><b>Table 1</b></p>
  <pre>Experiment   Factors                  	    Results
               
                A         B         C   		Rep 1        Rep 2
             (Water     (Acid   (Chloride  	      (Corrosion  (Corrosion
             Content)    conc.)  conc.)     	       Potential)  Potential)
          			                                       			       
    1   	0         0    	    0     	 (1)   	 -426  	      -314
    2       	1    	  0    	    0      	 a    	 -226         -236
    3    	0      	  1         0     	 b    	 -349         -514
    4   	1      	  1         0    	 ab    	 -235         -287
    5    	0      	  0         1     	 c    	 -388  	      -372
    6       	1      	  0    	    1    	 ac    	 -469         -503
    7      	0      	  1         1    	 bc    	 -218         -249
    8       	1      	  1    	    1    	 abc   	 -289  	      -290</pre>
  <p align="left">The mean effect of factor A alone for this three factor analysis can be
  found by</p>
  <p align="center">First order effect (A) = avg(a+)- avg(a-)</p>
  <p align="left">This main effect is the mean of all of the results where A was a factor
  minus the average of all of the results where A was not a factor. The second and third
  order effects can be found by the equation</p>
  <p align="center">Second order effect (AB)= [Mean effect of a(b+)- Mean effect of a(b-)]/2<br>
  = [Mean effect of b(a+)- Mean effect of b(a-)]/2</p>
  <p align="left">In the terms of our example , a second order effect would be the average
  water content effect with acid minus the average water content effect without acid divided
  by two. The other second and third order interactions are found in a similar manner.
  Figures 1a and 1b are the cube plots for this example. <a href="figure1a.php">Figure 1a</a>
  shows the factorial design, and <a href="figure1b.php">Figure 1b</a> shows the first,
  second and third order interactions. Table 2 gives the calculated effects.</p>
  <p><br>
  <b>Table 2</b><br>
  </p>
  <pre>		
Experiment          Mean Effect          Error
(Grand Mean) 	   (-335.3)              13.3
a         	      37	         26.5
b	              63                 26.5
ab         	      20.5               26.5
c                    -23.8               26.5
ac                   -117.8              26.5
bc                    108.8              26.5
abc                   4.8                26.5</pre>
  <p><br>
  </p>
  <p>When duplicate experiments are run, the variance can be determined for the entire set
  of data and the standard error may be found. <a href="figure2a.php">Figure 2a</a> shows a
  sample printout of the sum of the squares, the mean squares, the F ratios and the
  probabilities for this factorial analysis. From these values, the true effects can be
  separated from the effects which are within the experimental error. For this set of data,
  the acid content is a true effect. The second order acid effects are also strong effects.
  Furthermore, the same method employed to find the relevant effects in this three-factor
  analysis can be expanded and applied to a four-factor analysis.</p>
  <h4>References</h4>
  <p>Box, Hunter, and Hunter, Statistics for Experimenters. John Wiley &amp; Sons, New York:
  1978.</p>
  <p>Hintze, Jerry L. Number Cruncher Statistical Software, Experimental Design, Version
  5.4. Kaysville, Utah: 1989.</p>
  <p>Statmost Statistical Analysis and Graphics, User's Handbook. DataMost Corporation, Salt
  Lake City, Utah: 1994.</p>
<SCRIPT>footer()</SCRIPT></html>