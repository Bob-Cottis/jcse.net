<?php 
session_start();
include_once('/home/jcsete5/public_html/jcse.org/jcse/php_inc/jrnl_subs.php');
$logged_in=is_loggedin();
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="Generator" content="Microsoft FrontPage 6.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<title>JCSE Volume 2 Paper 11</title>
<SCRIPT src="/getcomm.php?vol=2&pap=11"></SCRIPT>
<SCRIPT src="/jsinc/jcsesubs.js.php"></SCRIPT>
<SCRIPT>
getcommentmode();</SCRIPT></HEAD><body>
<script>var lgi=<?php if ($logged_in) { echo('true');} else { echo('false');} ?>;</script>
<script src="/jsinc/writeheader.js"></script><?php ggl_ad(); ?>

<h2>Volume 2 Paper 11</h2>
<script>ifnotmode(3,'<p><b><i>Submitted 13<sup>th</sup> September 1999, published for public review 9th November 1999</i></b></p>')</script>
<hr>
<h2>Statistical analysis of salt spray and EIS testing data concerning organic
coated metals</h2>
<p>F. Deflorian*, S. Rossi*, L. Fedrizzi°, P.L. Bonora*</p>                   
<i>   
<p>*Dip. di Ingegneria dei Materiali, Università di Trento, Via Mesiano 77,                   
Trento (Italy)<br>                   
°Dip. ICMMPM, Università di Roma la Sapienza, Via Eudossiana 18, Roma (Italy)<br>                   
E-Mail:<SCRIPT>mailto2(' Flavio.Deflorian','ing.unitn.it');</SCRIPT></p>                   
</i>   
<SCRIPT>notify();</SCRIPT><SCRIPT>comment(1)</SCRIPT><h3>Abstract</h3>   
<p>Electrochemical Impedance Spectroscopy (EIS) and salt spray chamber are very   
popular techniques for testing the protective properties of organic coatings. It   
is a common experience however that the results obtained by the two methods   
often show big difference and it is difficult to compare the performance.</p>   
<SCRIPT>comment(2)</SCRIPT><p>In this paper are discussed some experimental results obtained on polyester   
coated galvanised steel, analysing the data dispersion of 36 identical samples   
tested both with EIS and salt spray. The morphology of degradation is very   
different because some blisters are developed in salt spray chamber, but not in   
immersion. In order to quantify the degradation in salt spray test we proposed a   
blister index (BI); and the data dispersion of BI and the data dispersion of the   
parameters obtained by EIS are compared and discussed. A mechanism is proposed   
explaining the reason because only the double layer capacitance can be compared   
with the development of blisters in salt spray chamber while the barrier   
properties of the coating measured by EIS follow a completely different   
behaviour.</p>   
<SCRIPT>comment(3)</SCRIPT><p><b>Keywords: </b>Electrochemical Impedance Spectroscopy, salt spray test,   
statistics, blistering.</p>   
<h3>Introduction</h3>   
<SCRIPT>comment(4)</SCRIPT><p>In many practical cases two, very different, testing methods are used for   
characterising organic coated metals: electrochemical measurements, mainly   
electrochemical impedance spectroscopy (EIS) and salt spray chamber test.   
Between these two testing methods there are many other approaches as natural   
exposure, cyclic weathering, other electrochemical methods like cathodic   
delamination, noise, etc [1,2].</p>   
<SCRIPT>comment(5)</SCRIPT><p>In the literature it is very frequent to find strong criticisms about the use   
of salt spray for testing organic coatings because this test does not simulate   
actual application conditions and the results are not completely independent   
from the operator [3]. However electrochemical testing methods, as   
electrochemical impedance spectroscopy are very popular in research   
laboratories, but they are not very diffused in the industry, also because   
sometimes it is not easy to interpret correctly the EIS results and it is   
possible to find a high dispersion of data on identical samples [4].</p>   
<SCRIPT>comment(6)</SCRIPT><p>This work is part of a larger project and it is devoted to the study of the   
difference in the statistic properties of the results obtained by EIS   
measurements and salt spray tests on organic coated galvanised steel, in order   
to better understand the degradation mechanism and better choose the testing   
methods and the experimental set-up.</p>   
<h3>Materials and Experimental</h3>   
<SCRIPT>comment(7)</SCRIPT><p>Commercial protective coatings on phosphatised zinc electroplated steel,    
based on epoxy resin (thickness 30 µm) were formed by coil coating process. A    
set of 72 square identical samples (7x7 cm<sup>2</sup>) were cut from the same    
coil sheet and they were observed by a stereo-microscope in order to see if some    
macro-defects (scratch, pin holes, etc.) were present in the coating. A first    
set of 36 samples was used for the EIS characterisation and 36 were exposed in    
the salt spray chamber following the ASTM B117 standard.</p>    
<SCRIPT>comment(8)</SCRIPT><p>The samples characterised with electrochemical impedance spectroscopy were   
immersed in 3.5% NaCl in aerated water. The three electrode electrochemical cell   
was obtained by sticking a plastic cylinder on the sample sheet and filling it   
with the test solution. The exposed surface area was about 10 cm<sup>2</sup>. A   
platinum counter electrode and a saturated calomel electrode (SCE +242 mV SHE)   
as reference were used.</p>   
<SCRIPT>comment(9)</SCRIPT><p>Impedance data were obtained on coated samples at the open circuit potential   
using a PAR 283 potentiostat and a Solartron 1255 Frequency Response Analyser.   
The impedance measurements were carried out over a frequency range of 100 kHz to   
1 mHz (5 frequencies per decade) using a 10 mV amplitude of sinusoidal voltage,   
in a Faraday cage in order to minimise external interference on the system. The   
impedance measurements were made for all the samples after 1 hour, 7, 21, 35 57   
and 100 days of immersion, with particular attention to measure the impedance of   
all the samples exactly after the same time and in the same experimental   
conditions. The impedance spectra were analysed using the fitting software   
Equivcrt [5] elaborated by Boukamp.</p>   
<h3>Results</h3>   
<h4>Salt spray data.</h4>   
<SCRIPT>comment(10)</SCRIPT><p>The samples after salt spray exposure were observed following the standard   
procedure (ASTM D714) recording at different times for every sample, the   
dimensions and numbers of blisters. Actually the standard requires only the   
dimension and the frequency of the blisters and not the exact number. The   
presence of blisters is the only visible degradation of the coating (no presence   
of zinc or iron rusts, cracks, etc.).</p>   
<SCRIPT>comment(11)</SCRIPT><p>The blister dimension is defined as a number starting from 8 (small blisters)   
reaching 1 (biggest ones). In order to have a quantitative definition of the   
blisters amount, we proposed a blister index (BI) which is defined as a number   
which is the result of the sum of the number of blister with a specific   
dimension multiplied by a coefficient of dimension.</p>   
<center>   
<div align="center">   
  <center>   
  <table cellspacing="0" border="0" cellpadding="7" width="398">   
    <tr>   
      <td width="4" valign="TOP" align="center">&nbsp;</td>   
      <td width="315" valign="TOP" align="center">   
        <p>BI = <img src="../paper11/image128.gif" alt="Sigma i=1 to 8 ni ai" align="middle" WIDTH="49" HEIGHT="45"></p>    
      </td>   
    </center>   
    <td width="31" valign="TOP" align="center">   
      <p align="right">(1)</p>   
    </td>   
  </tr>   
  </table>   
</center>   
</div>   
<SCRIPT>comment(12)</SCRIPT><p>In equation 1 i is the blister dimension (from 8 to 1), n is the number of   
blisters and a the coefficient of the blister of dimension i. The definition of   
the coefficient of blister can be done in different ways. In table 1 are   
reported two different scale of coefficients. The first one is linear, it means   
that the coefficient grows linearly with the blister dimension, the second one   
is quadratic, it grows with the square of the blister dimension. Passing from a   
blister of dimension n to a blister bigger with dimension n-2 (from example from   
8 to 6) the radius becomes about double, it means that the area of blister is 4   
times higher. For this reason we choose the quadratic scale, because in this   
case the coefficient of blister is proportional to the area of blister. The   
total blister index (BI) is therefore in direct proportion with the blister   
area.</p>   
<table border="1" width="100%">   
  <tr>   
    <td width="33%" align="center"><span lang="IT"><b>Blister dimension (ASTM)</b></span></td>   
    <td width="33%" align="center"><span lang="IT"><b>Linear coefficient</b></span></td>   
    <td width="34%" align="center"><span lang="IT"><b>Quadratic coefficient</b></span></td>   
  </tr>   
  <tr>   
    <td width="33%" align="center">8</td>   
    <td width="33%" align="center">1</td>   
    <td width="34%" align="center">1</td>   
  </tr>   
  <tr>   
    <td width="33%" align="center">7</td>   
    <td width="33%" align="center">2</td>   
    <td width="34%" align="center">2</td>   
  </tr>   
  <tr>   
    <td width="33%" align="center">6</td>   
    <td width="33%" align="center">3</td>   
    <td width="34%" align="center">4</td>   
  </tr>   
  <tr>   
    <td width="33%" align="center">5</td>   
    <td width="33%" align="center">4</td>   
    <td width="34%" align="center">8</td>   
  </tr>   
  <tr>   
    <td width="33%" align="center">4</td>   
    <td width="33%" align="center">5</td>   
    <td width="34%" align="center">16</td>   
  </tr>   
  <tr>   
    <td width="33%" align="center">3</td>   
    <td width="33%" align="center">6</td>   
    <td width="34%" align="center">32</td>   
  </tr>   
  <tr>   
    <td width="33%" align="center">2</td>   
    <td width="33%" align="center">7</td>   
    <td width="34%" align="center">64</td>   
  </tr>   
  <tr>   
    <td width="33%" align="center">1</td>   
    <td width="33%" align="center">8</td>   
    <td width="34%" align="center">128</td>   
  </tr>   
</table>   
<SCRIPT>comment(13)</SCRIPT><p><b>Table 1: Blister coefficients</b></p>   
<p><a href="../paper11/image211.gif"><img src="../paper11/image211_small.gif" border="2" WIDTH="400" HEIGHT="241"></a></p>   
<SCRIPT>comment(14)</SCRIPT><p><b>Figure 1: Blister index (BI)<script>ifscreen(' (click for a larger image)')</script>.</b></p>   
<p><a href="../paper11/image212.gif"><img src="../paper11/image212_small.gif" border="2" WIDTH="400" HEIGHT="272"></a></p>   
<SCRIPT>comment(15)</SCRIPT><p><b>Figure 2: Coefficient of variation of the blister index<script>ifscreen(' (click for a larger image)')</script>.</b></p>   
<SCRIPT>comment(16)</SCRIPT><p>In figure 1 is shown the trend with the immersion time of the average of the   
blister index (BI) of the 36 samples; before 21 days no blisters are visible and   
after 57 days the degradation was so large to suggest to stop the testing. The   
trend is almost linear using the quadratic coefficients. Interesting is also the   
trend of the coefficient of variation as a function of the time of testing (the   
coefficient of variation is the standard deviation divided by the mean value).   
The trend is in figure 2 and it is possible to note that the value is quite high   
(in the order of 100%), but more or less constant, in fact it is impossible to   
note a clear trend increasing the testing time.</p>   
<h4>EIS data.</h4>   
<SCRIPT>comment(17)</SCRIPT><p>The experimental results obtained by EIS have been analysed using the   
equivalent electrical circuit shown in figure 3 in order to obtain information   
concerning the barrier and adhesion properties of the coating and corrosion   
reaction of substrate.</p>   
<SCRIPT>comment(18)</SCRIPT><p>The elements composing the circuit are the coating capacitance Qc (expressed   
by a constant phase element CPE), the coating resistance Rp, the charge transfer   
resistance Rct, the double layer capacitance Qdl and Zdiff that is a generic   
element modelling the diffusion contribution to impedance.</p>   
<p><img src="../paper11/image213.gif" WIDTH="527" HEIGHT="314"></p>   
<SCRIPT>comment(19)</SCRIPT><p><b>Figure 3: Equivalent electrical circuit.</b></p>   
<SCRIPT>comment(20)</SCRIPT><p>All the parameters have been obtained from fitting results with a relative   
deviation (&chi;<sup>2</sup>) between the EIS   
measurements and the fitting that is in general lower than 10<sup>-4 </sup>.</p>   
<SCRIPT>comment(21)</SCRIPT><p>The mean values of each considered parameter are shown in figure 4 a,b,c and   
d. Despite the few number of points in the plots, in particular in the case of   
Qdl and Rct, which it is possible to measure regularly only after 35 days of   
immersion, it is possible to note a trend with the time of immersion for all the   
parameters.</p>   
<SCRIPT>comment(22)</SCRIPT><p>The Qc values increase during the initial period of immersion because of the   
water uptake, after they remain almost constant (saturation) and after 20 days   
they start to increase further. The decrease of Rp is indicative of the   
reduction of the barrier properties of the coating due to the ions penetration.   
The values of Qdl which is related to the area of the substrate in contact with   
the electrolyte because of loss of adhesion, increase with the immersion time,   
while the Rct values, related in the inverse proportion with the corrosion rate,   
decrease. It is interesting to note that the Qdl variation is larger than the   
Rct one in the same time; Qdl increase of about 30 times, while Rct decreases by   
only a factor 6.</p>   
<p><a href="../paper11/image214.gif"><img src="../paper11/image214_small.gif" border="2" WIDTH="400" HEIGHT="263"></a></p>   
<SCRIPT>comment(23)</SCRIPT><p><b>Figure 4a: Coating capacitance Qc<script>ifscreen(' (click for a larger image)')</script>.</b></p>   
<p><a href="../paper11/image215.gif"><img src="../paper11/image215_small.gif" border="2" WIDTH="400" HEIGHT="257"></a></p>   
<SCRIPT>comment(24)</SCRIPT><p><b>Figure 4b: Pore resistance Rp<script>ifscreen(' (click for a larger image)')</script></b>.</p>   
<p><a href="../paper11/image216.gif"><img src="../paper11/image216_small.gif" border="2" WIDTH="400" HEIGHT="245"></a></p>   
<SCRIPT>comment(25)</SCRIPT><p><b>Figure 4c: Double layer capacitance Qdl<script>ifscreen(' (click for a larger image)')</script>.</b></p>   
<p><a href="../paper11/image217.gif"><img src="../paper11/image217_small.gif" border="2" WIDTH="400" HEIGHT="241"></a></p>   
<SCRIPT>comment(26)</SCRIPT><p><b>Figure 4d: Charge transfer resistance Rct<script>ifscreen(' (click for a larger image)')</script>.</b></p>   
<SCRIPT>comment(27)</SCRIPT><p>As far as the data dispersion is concerned, we have calculated also in this   
case the coefficient of variation. The results are shown in figure 5a, b and c.</p>   
<p><a href="../paper11/image218.gif"><img src="../paper11/image218_small.gif" border="2" WIDTH="400" HEIGHT="259"></a></p>   
<SCRIPT>comment(28)</SCRIPT><p><b>Figure 5a: Coefficient of variation of the coating capacitance Qc<script>ifscreen(' (click for a larger image)')</script>.</b></p>   
<p><a href="../paper11/image219.gif"><img src="../paper11/image219_small.gif" border="2" WIDTH="400" HEIGHT="256"></a></p>   
<SCRIPT>comment(29)</SCRIPT><p><b>Figure 5b: Coefficient of variation of the pore resistance Rp<script>ifscreen(' (click for a larger image)')</script>.</b></p>   
<p><a href="../paper11/image220.gif"><img src="../paper11/image220_small.gif" border="2" WIDTH="400" HEIGHT="254"></a></p>   
<SCRIPT>comment(30)</SCRIPT><p><b>Figure 5c: Coefficients of variation of Rct and Qdl<script>ifscreen(' (click for a larger image)')</script>.</b></p>   
<SCRIPT>comment(31)</SCRIPT><p>All the parameters, except the double layer capacitance, show a clear   
increase of the coefficient of variation, which means that the data dispersion   
increases with the time of testing. The parameters describing the barrier   
properties: the coating capacitance Qc and the pore resistance Rp show lower   
values of the coefficient of variation, which means lower data dispersion, than   
the parameters related to the metal coating interface: the charge transfer   
resistance Rct and the double layer capacitance Qdl. It is clear however that   
the only coefficient of variation which is stable, in similar way of blister   
index in the case of salt spray results, is the double layer capacitance.</p>   
<h3>Discussion</h3>   
<SCRIPT>comment(32)</SCRIPT><p>A first very clear difference, comparing the testing results obtained by EIS   
and salt spray is that in the case of testing in immersion the samples are   
apparently almost intact after more than 3 months of immersion by visual   
observations. In the case of salt spray exposure, on the contrary, after only   
few weeks many blister are visible on the coating surface. This is the result of   
different testing conditions, involving for example different temperatures,   
oxygen concentration on the coating surface, etc.</p>   
<SCRIPT>comment(33)</SCRIPT><p>A second very important aspect is the different trend of the coefficient of   
variation in the two testing methods. Increasing the time of exposure in the   
salt spray chamber the data dispersion is almost constant. The dispersion is   
quite high (the standard deviation of the blister index is in the order of the   
mean value) but it does not change. On the contrary, in the case of the EIS   
parameters (Rp and Qc describing the barrier properties and Rct related to the   
corrosion reaction) the coefficient of variation increase with the testing time.   
It means that the samples become more and more different from each other   
increasing the testing time. This result is not due to problem in the testing   
procedure because, reducing the total impedance with the testing time, the   
reliability and the accuracy of the EIS data increases. There is only one   
exception which is the double layer capacitance Qdl which shows a coefficient of   
variation which is constant and in the order of the mean value, exactly as the   
blister index.</p>   
<SCRIPT>comment(34)</SCRIPT><p>In general, when a system of data, obtained theoretically in identical way,   
shows a statistical variation which increases with time, this system is   
influenced by conditions which are not controlled, for example initial   
conditions. In this case it is very difficult to predict the final behaviour of   
the single sample.</p>   
<SCRIPT>comment(35)</SCRIPT><p>On the contrary if the data dispersion is independent of time it is always   
possible that the initial condition influence the behaviour (there is a data   
dispersion) but these conditions are not critical for the evolution of the   
system.</p>   
<SCRIPT>comment(36)</SCRIPT><p>In other words the first system is dominated by defects which determine the   
total behaviour, the second system can be influenced by defects only during   
nucleation of the phenomenon (in our case the coating degradation), but not for   
the further growth.</p>   
<SCRIPT>comment(37)</SCRIPT><p>In the case of salt spray test the main degradation morphology, and the only   
one visible, is blisters formation. It is therefore possible to explain the   
behaviour of the coefficient of variation of the blister index: the number of   
blisters is influenced by the presence of defects at the beginning, but the   
growth of blisters is dominated by the properties of the metal-polymer   
interface, which means adhesion. During exposure also new defects through the   
coatings are developed, reducing the barrier properties, but this phenomenon is   
not visible by simple sample observation.</p>   
<SCRIPT>comment(38)</SCRIPT><p>Completely different is the behaviour in the case of EIS characterisation   
obtained in immersion. The data dispersion of the barrier properties increase,   
despite the fact that blisters are not present. The degradation of the coating,   
the reduction of the barrier properties, is mainly due to the development of new   
pores and defects through the coating. This process is completely dominated by   
defects which are randomly present on the samples, and not by the interface   
properties which have deterministic nature.</p>   
<SCRIPT>comment(39)</SCRIPT><p>The different behaviour of the coefficient of variation of double layer   
capacitance Qdl is consistent with this data interpretation. The Qdl values   
increase because of loss of adhesion at the coating interface due to electrolyte   
penetration. The process is controlled by the stability of the metal-coating   
interface, like in the case of blistering, and not by the presence of defect.   
Also in this case, therefore, the data dispersion does no increase with the time   
of testing but it remains constant.</p>   
<SCRIPT>comment(40)</SCRIPT><p>The only one element of the equivalent electrical circuit which can be   
related to the blister index is therefor the double layer capacitance Qdl, not   
only because is the parameter related to loss of adhesion process like the   
blister growth, but also because the data dispersion is similar.</p>   
<SCRIPT>comment(41)</SCRIPT><p>In the case of EIS measurements moreover it is also important to remember   
that with the measurement of Rp and Qc it is possible to monitor different   
phenomena. For example considering Qc, in the initial stage the growth of Qc is   
due to homogeneous water uptake in the coating, while the further uptake, after   
plateaux is due to water accumulation in specific sites in the coating   
(metal-polymer or pigment-polymer interfaces) [6]. The overlapping of different   
mechanisms could influence the data dispersion. Also in the case of Rp it is   
possible that different mechanism influence the evolutions of the values. For   
example the increase of the D areas in the coating, in comparison with I areas,   
following the classical theory proposed by Mayne [7].</p>   
<SCRIPT>comment(42)</SCRIPT><p>Also the corrosion reaction (and therefore the specific charge transfer   
resistance Rct) can change during testing, for example because of the presence   
of corrosion products, affecting the data dispersion. The only parameters which   
seems more directly correlates to a single physical phenomenon is the double   
layer capacitance Qdl which is a measure of the loss of contact between coating   
and metal surface because of an aqueous interlayer.</p>   
<h3>Conclusions</h3>   
<SCRIPT>comment(43)</SCRIPT><p>By testing organic coatings with salt spray exposure and EIS measurements it   
is possible to obtain in general different results. This well known conclusion   
is evident not only by looking the different degradation appearance of the   
coatings (presence of blisters), but also analysing statistically the   
experimental data using the coefficient of variation which in the case of EIS   
become larger increasing the time of testing proving an increase of data   
dispersion, but the data dispersion remains constant in the case of blisters in   
salt spray chamber.</p>   
<SCRIPT>comment(44)</SCRIPT><p>The degradation phenomena which it is possible to observe with EIS are   
different: barrier coating degradation (coating capacitance Qc and pore   
resistance Rp) and metal-coating interface degradation (double layer capacitance   
Qdl and charge transfer resistance Rct). The only parameter which can be   
correlated with the blistering is the double layer capacitance Qdl.</p>   
<h3>References</h3>   
<SCRIPT>comment(45)</SCRIPT><ol>   
  <li>B.R. Appelman, Journal of Coating Technology, 62, (1990), 57;</li>   
  <li>F.D Timmins, JOCCA, 62 (1979) 131;</li>   
  <li>B.S. Skerry, C.H. Simpson, Corrosion, 49, (1993), 663;</li>   
  <li>F. Deflorian, L. Fedrizzi, S. Rossi, P.L. Bonora, Materials Science Forum,   
    289-292, (1998), 337;</li>   
  <li>B. Boukamp, Solid State Ionics, 20, (1986), 31;</li>   
  <li>F. Deflorian, L. Fedrizzi, S. Rossi, P.L. Bonora, Electrochimica Acta, 44   
    (1999) 4243;</li>   
  <li>C.C Maitland, J.E.O. Mayne, Official Dig., 34 (1962) 972.</li>   
</ol>   
<SCRIPT>footer()</SCRIPT></html>