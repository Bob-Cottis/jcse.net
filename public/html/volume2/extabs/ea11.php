<?php
session_start();
include_once('jrnl_subs.php');
$logged_in=is_loggedin();
?>
<html><head>
<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1252">
<meta NAME="Generator" CONTENT="Microsoft FrontPage 5.0">
<title>JCSE, Volume 2, Extended Abstract 11</title>

</head>
<body stylesrc="../../default.htm">

<img border="0" src="../../images/jrnl_logo.gif" width="1200" height="84">
 (at http://www.jcse.org/)<dir>

<h2>Volume 2 Extended Abstract 11</h2>
</dir>


  Submitted 26<sup>th</sup> August 1999<hr ALIGN="RIGHT">

<dir>

<h2>Statistical analysis of salt spray and EIS testing data concerning organic coated metals </h2>
</dir>

  F. Deflorian*, S. Rossi*, L. Fedrizzi�, P.L. Bonora*
<i>
<p>*Dipartimento di Ingegneria dei Materiali, Universit� di Trento, Via Mesiano 77, 38050 Trento (Italy)
<p>�ICMMPM, Universit� di Roma la Sapienza, Via Eudossiana, Roma (Italy)<br>
E-Mail: <SCRIPT>mailto2('Flavio.Deflorian','ing.unitn.it');</SCRIPT>
</i><b>
  <p>Keywords: Electrochemical Impedance Spectroscopy, salt spray test, statistics, blistering.

</b><dir>

<h4>Introduction</h4>
</dir>

  In many practical cases two, very different, testing methods are used for characterising organic coated metals: electrochemical measurements, mainly electrochemical impedance spectroscopy (EIS) and salt spray chamber test. Between these two testing methods there are many other approaches as natural exposure, cyclic weathering, other electrochemical methods like cathodic delamination, noise, etc [1,2].
  <p>In the literature it is very frequent to find strong criticisms about the use of salt spray for testing organic coatings because this test does not simulate actual application conditions and the results are not completely independent from the operator [3]. However electrochemical testing methods, as electrochemical impedance spectroscopy are very popular in research laboratories, but they are not very diffused in the industry, also because sometimes it is not easy to interpret correctly the EIS results and it is possible to find a high dispersion of data on identical samples [4].
  <p>This work is part of a larger research project and it is devoted to the study of the difference in the statistic properties of the results obtained by EIS measurements and salt spray tests on organic coated galvanised steel, in order to better understand the degradation mechanism and better choose the testing methods and the experimental set-up.

<dir>

<h4>Materials and Experimental</h4>
</dir>

  Commercial protective coatings on phosphatised zinc electroplated steel, based on epoxy resin (total thickness 30 �m) were formed by coil coating process. A set of 72 square identical samples (7x7 cm<sup>2</sup>) were cut from the same coil sheet and they were observed by a stereo-microscope in order to see if some macro-defects (scratch, pin holes, etc.) were present in the coating. A first set of 36 samples was used for the electrochemical characterisation and 36 were exposed in the salt spray chamber following the ASTM D714 standard.
  <p>The samples characterised with electrochemical impedance spectroscopy were immersed in 3.5% NaCl in aerated water. The three electrode electrochemical cell was obtained by sticking a plastic cylinder on the sample sheet and filling it with the test solution. The exposed surface area was about 30 cm<sup>2</sup>. A platinum counter electrode and a saturated calomel electrode (SCE) as reference were used.
  <p>Impedance data were obtained on coated samples at the open circuit potential using a PAR 283 potentiostat and a Solartron 1255 Frequency Response Analyser. The impedance measurements were carried out over a frequency range of 100 kHz to 1 mHz (5 frequencies per decade) using a 10 mV amplitude of sinusoidal voltage, in a Faraday cage in order to minimise external interference on the system. The impedance measurements were made for all the samples after 1 hour, 7, 21, 35 57 and 100 days of immersion, with particular attention to measure the impedance of all the samples exactly after the same time and in the same experimental conditions. The impedance spectra were analysed using the fitting software Equivcrt [5] elaborated by Boukamp.

<dir>

<h4>Results</h4>
<i></dir>

  Salt spray data.
</i>
<p>The samples after salt spray exposure were observed following the standard (ASTM D714) recording at different time for every sample, the dimensions and numbers of blisters. Actually the standard requires only the dimension and the frequency of the blisters and not the exact number. The presence of blisters is the only visible degradation of the coating (no presence of zinc or iron rusts, cracks, etc.).
<p>The blister dimension is defined as a number starting from 8 (small blisters) reaching 1 (biggest ones). In order to have a quantitative definition of the blisters amount, we proposed a blister index (BI) which is defined as a number which is the result of the sum of the number of blister with a specific dimension multiplied by a coefficient of dimension.
<p>BI = <img SRC="../extabs/image128.gif" WIDTH="49" HEIGHT="45"> (1)
<p>In equation 1 i is the blister dimension (from 8 to 1), n is the number of blisters and a the coefficient of the blister of dimension i. The definition of the coefficient of blister can be done in different ways. In table 1 are reported two different scale of coefficients. The first one is linear, it means that the coefficient grows linearly with the blister dimension, the second one is quadratic, it grows with the square of the blister dimension. Passing from a blister of dimension n to a blister bigger with dimension n-2 (from example from 8 to 6) the radius becomes about double, it means that the area of blister is 4 times higher. For this reason we choose the quadratic scale, because in this case the coefficient of blister is proportional of the area of blister. The total Blister Index (BI) is therefore in direct proportion with the blister area.
<p><img SRC="../extabs/image129.gif" WIDTH="529" HEIGHT="296">
<p><b>Figure 1: Blister index (BI)</b></p>
<p><img SRC="../extabs/image130.gif" WIDTH="523" HEIGHT="296"></p>
<p><b>Figure 2: Coefficient of variation of the blister index.</b></p>
<p><img SRC="../extabs/image131.gif" WIDTH="639" HEIGHT="222"></p>
In figure 1 is reported the trend with the immersion time of the average of the blister index (BI) of the 36 samples; before 21 days no blisters are visible and after 57 days the degradation was so large to suggest to stop the testing. The trend is almost linear using the quadratic coefficients. Interesting is also the trend of the coefficient of variation as a function of the time of testing (the coefficient of variation is the standard deviation divided by the mean value). The trend is in figure 2 and it is possible to note that the value is quite high (in the order of 100%), but more or less constant, in fact it is impossible to note a clear trend increasing the testing time.

<dir>

<h4>EIS data.</h4>
</dir>

  The experimental results obtained by EIS have been analysed using the equivalent electrical circuit shown in figure 3 in order to obtain information concerning the barrier properties of the coating.
  <p>The elements composing the circuit are the coating capacitance Qc (expressed by a constant phase element CPE), the coating resistance Rp and Zf that is a generic element modelling the corrosion reaction.
  <p><img SRC="../extabs/image132.gif" WIDTH="642" HEIGHT="279">
  <p><b>Figure 3: Equivalent electrical circuit.</b></p>
  By analysing the EIS results in the high frequency range (between 10000 and 10 Hz) it is possible to neglect the contribution of Zf. All the parameters have been obtained from fitting results with a relative deviation (<font FACE="Symbol">c</font>
<sup>2</sup>) between the EIS measurements and the fitting that is in general lower than 10<sup>-4 </sup>.
  <p>The mean values of each considered parameter are shown in figure 4 a and b. Despite the few number of points in the plots it is possible to note a trend with the time of immersion for all the parameters. The Qc values increase during the initial period of immersion because of the water uptake, after they remain almost constant (saturation) and after 20 days they start to increase further. The continuous decrease of Rp is indicative of the reduction of the barrier properties of the coating due to the ions penetration. As far as the data dispersion is concerned we have calculated also in this case the coefficient of variation.
  <p>The results are shown in figure 5a and b. The coating capacitance shows lower values of the coefficient of variation , which means lower data dispersion, than the pore resistance. It is clear however that the coefficients of variation, on the contrary of the case of salt
  spray results, increase with the time of testing, at least after the first month for both the parameters.
  <p><img SRC="../extabs/image133.gif" WIDTH="490" HEIGHT="306"></p>
  <p><b>Figure 4a: Coating capacitance</b></p>
  <img SRC="../extabs/image134.gif" WIDTH="475" HEIGHT="259">
  <p><b>Figure 4b: Pore resistance.</b>
  <h4>Discussion</h4>
  A first very clear difference, comparing the testing results obtained by EIS and salt spray is that in the case of testing in immersion the samples are apparently almost intact after more than 3 months of immersion by visual observations. In the case of salt spray exposure, on the contrary, after only few weeks many blister are visible on the coating surface. This is the result of different testing conditions, involving for example different temperatures, oxygen concentration on the coating surface, etc.
  <p>A second very important aspect is the different trend of the coefficient of variation in the two testing methods. Increasing the time of exposure in the salt spray chamber the data dispersion is almost constant. The dispersion is quite high (the standard deviation of the blister index is in the order of the mean value) but it does not change. On the contrary, in the case of the EIS parameters (Rp and Qc describing the barrier properties) the coefficient of variation increase with the testing time. It means that the samples become more and more different from each other increasing the testing time. This result is not due to problem in the testing procedure because, reducing the total impedance with the testing time, the reliability and the accuracy of the EIS data increase.
  <p>In general, when a system of data, obtained theoretically in identical way, shows a statistical variation which increases with time, this system is influenced by conditions which are not controlled, for example initial conditions. In this case it is very difficult to predict the final behaviour of the single sample.
  <p>On the contrary if the data dispersion is independent of time it is always possible that the initial condition influence the behaviour (there is a data dispersion) but these conditions are not critical for the evolution of the system.
  <p><img SRC="../extabs/image135.gif" WIDTH="446" HEIGHT="267"></p>
  <p><b>Figure 5a: Coefficient of variation of the coating capacitance</b></p>
  <img SRC="../extabs/image136.gif" WIDTH="436" HEIGHT="271">
  <p><b>Figure 5b: Coefficient of variation of Rp</b>
  <p>In other words the first system is dominated by defects which determine the total behaviour, the second system can be influenced by defects only during nucleation of the phenomenon (in our case the coating degradation), but not for the further growth.
  <p>In the case of salt spray testing the main degradation morphology, and the only one visible, is blisters formation. It is therefore possible to explain the behaviour of the coefficient of variation of the blister index: the number of blisters is influenced by the presence of defects at the beginning, but the growth of blisters is dominated by the properties of the metal-polymer interface, which means adhesion. Completely different is the behaviour in the case of EIS characterisation obtained in immersion. The data dispersion increase, despite the fact that blisters are not present. The degradation of the coating, the reduction of the barrier properties, is mainly due to the development of new pores and defects through the coating. This process is completely dominated by defects which are randomly present on the samples, and not by the interface properties which have deterministic nature.
  <p>In the case of EIS measurements it is also important to remember that with the measurement of Rp and Qc it is possible to monitor different phenomena. For example considering Qc, in the initial stage the growth of Qc is due to homogeneous water uptake in the coating, while the further uptake, after plateaux is due to water accumulation in specific sites in the coating (metal-polymer or pigment-polymer interfaces) [6]. The overlapping of different mechanisms could influence the data dispersion. Also in the case of Rp it is possible that different mechanism influence the evolutions of the values. For example the increase of the D areas in the coating, in comparison with I areas, following the classical theory proposed by Mayne [7].
  <p>By testing organic coatings with salt spray exposure and EIS measurements it is possible to obtain in general different results. This well known results is evident not only by looking the different degradation appearance of the coatings, but also analysing statistically the experimental data. The degradation phenomena which it is possible to observe are different and therefore not comparable. In order to better understand the degradation mechanisms and the limits of EIS and salt spray testing more investigations are necessary.

<dir>

<h4>References</h4>
</dir>

  <ol>
    <li>B.R. Appelman, Journal of Coating Technology, 62, (1990), 57;</li>
    <li>F.D Timmins, Jocca, 62 (1979) 131;</li>
    <li>B.S. Skerry, C.H. Simpson, Corrosion, 49, (1993), 663;</li>
    <li>F. Deflorian, L. Fedrizzi, S. Rossi, P.L. Bonora, Materials Science Forum, 289-292, (1998), 337;</li>
    <li>B. Boukamp, Solid State Ionics, 20, (1986), 31.</li>
    <li>F. Deflorian, L. Fdrizzi, S. Rossi, P.L. Bonora, Electrochimica Acta, 44 (1999) 4243;</li>
    <li>C.C Maitland, J.E.O. Mayne, Official Dig., 34 (1962) 972;</li>
  </ol>
  <hr>
  <p>Send Mail to the <script>mailtoeditor()</script></p>
  <p><a href="../../default.php">Journal of Corrosion Science &amp; Engineering
  Home Page</a><br>
  <a href="http://corrosiontest.its.manchester.ac.uk/default.htm">Corrosion Information Server</a><br>
  <a href="http://minerva.acc.virginia.edu/~cese">Centre for Electrochemical
  Science and Engineering, University of Virginia (JCSE Mirror Site)</a></p>
  <p>&nbsp;</p>

</body>
</html>
