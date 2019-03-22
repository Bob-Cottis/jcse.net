<?php 
session_start();
require_once('/home/jcsete5/public_html/jcse.org/jcse/php_inc/jrnl_subs.php');
$logged_in=is_loggedin();
?>
<html>
<head>
<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
<title>JCSE Volume 3, Paper 17</title>
<SCRIPT src="/getcomm.php?vol=3&pap=17"></SCRIPT>
<SCRIPT src="/jsinc/jcsesubs.js.php"></SCRIPT>
<SCRIPT>
getcommentmode();</SCRIPT>
</HEAD>
<body>
<script>var lgi=<?php if ($logged_in) { echo('true');} else { echo('false');} ?>;</script>
<script src="/jsinc/writeheader.js"></script><?php ggl_ad(); ?>
<h2>Volume 3, Paper 17 </h2>

<script>ifnotmode(3,'<p>Submitted 4th September 2001<br>');</script>
<hr>

<div>

<h2><b>Criteria
for Cathodic Protection</b></h2>

<p>Grant T Gibson<sup>a</sup>
and David Scantlebury<sup>b</sup></p>

<p><sup>a</sup>GATE, LLC, PO Box 9805, New Iberia, La. 70562 USA&nbsp;<br>
email: <script>mailto2('gtgibson','gatellc.com')</script><br>
<sup>&nbsp;b</sup>Corrosion and
Protection Centre, UMIST, United Kingdom, M60 1QD<br>
email: <script>mailto2('scantlebury','manchester.ac.uk')</script></p>
<SCRIPT src="/jsinc/AuthNote.js"></SCRIPT>

<SCRIPT>notify();</SCRIPT><SCRIPT>comment(1)</SCRIPT><h3><b>Abstract</b></h3>

<p>This paper review<span style="background-color: #00FF00">s</span> the various criteria for cathodic protection and
considers them in their historical context. It is concluded that the
&quot;break criterion&quot; is not a valid method, the 100mV shift can only be
used for uncomplicated impressed systems, the 300mV shift is not universally
applicable and that is commonest criterion, -850 mV CSE is the easiest <span style="background-color: #00FF00">and</span>
most
acceptable<span style="background-color: #00FF00">,</span> and applicable to most situations in the absence of sulphate
reducing bacteria.</p>

<p><b>Keywords</b>: cathodic protection, protection criteria,
current density, calcareous films, marine environments, soil environments,
potential shifts,</p>

<h3>Introduction</h3>

<SCRIPT>comment(2)</SCRIPT><p>The application of cathodic protection to underground
structures had its start in the late nineteenth century in response to stray <span style="background-color: #00FF00">dc</span> current effects of traction systems
<a
href="#_edn1" name="_ednref1" title="">[1]</a>.� In 1933, <span style="background-color: #00FF00"> Thayer</span><a name="_Ref438201448"></a>
<a href="#_edn2" name="_ednref2" title="">[2]</a> and
<span style="background-color: #00FF00"> Kuhn</span><a name="_Ref438201461"></a>
<a href="#_edn3" name="_ednref3" title="">[3]</a> reported the development and
application of CP to underground pipelines.�
Because of the safety risk and expensive economic repercussions of
leaks, engineers needed a method of determining if protection of the pipelines
was achieved.� Unlike ships, visual
inspection would have been expensive and time consuming on underground
pipelines.� What was required was a
method in which the efficacy of a CP system could be checked quickly,
inexpensively, and without highly skilled labour.</p>

<SCRIPT>comment(3)</SCRIPT><p>Methods for determination if the protection current is
adequate and sufficiently distributed are called �Criteria for
Protection�.� Many of the criteria were
developed out of early laboratory work and theoretical definitions.� Subsequently, practitioners tried to apply
them in the field.� Some of the
recommended criteria for cathodic protection are given below:</p>

<ol>
  <SCRIPT>comment(4)</SCRIPT><li><i>Bring the entire surface into a �negative� state (Davy<a
name="_Ref524212425"></a> <a href="#_edn4"
name="_ednref4" title="">[4]</a>).</i></li>
    <SCRIPT>comment(5)</SCRIPT><li><i>The current required is equal to the corrosion current calculated
from weight loss experiments (Harker and McNamara<a name="_Ref437266169"></a> <a href="#_edn5" name="_ednref5" title="">[5]</a> and Clement and Walker<a
name="_Ref437266185"></a> <a href="#_edn6"
name="_ednref6" title="">[6]</a>).</i></li>
      <SCRIPT>comment(6)</SCRIPT><li><i>Protection is achieved when local cathodes attain the same potential
as the open circuit potential of the local anodes (Mears and Brown <a href="#_edn7" name="_ednref7" title="">[7]</a>,
    <a href="#_edn8" name="_ednref8" title="">[8]</a>
and Hoar <a href="#_edn9" name="_ednref9" title="">[9]</a>).</i></li>
      <SCRIPT>comment(7)</SCRIPT><li><i>Change in the Potential-Current curve from vertical to horizontal
    <span style="background-color: #FFFF00">[1] this is meaningless without
    definition of the axes </span>indicates the minimum protective current density (Evans, Bannister, and Britton<a
name="_Ref437764536"></a><a href="#_edn10"
name="_ednref10" title="">[10]</a>).</i></li>
      </ol>

<SCRIPT>comment(8)</SCRIPT><p>Today, the National Association of Corrosion Engineers (NACE<a
name="_Ref437325398"></a> <a href="#_edn11"
name="_ednref11" title="">[11]</a>) and Det Norske Veritas (DNV<a
name="_Ref524212122"></a> <a href="#_edn12"
name="_ednref12" title="">[12]</a>) issue recommended practices on cathodic
protection.� The recommended criteria
for protection are listed below:</p>

<ol>
  <SCRIPT>comment(9)</SCRIPT><li>�850mV with respect to saturated
copper/copper sulphate reference electrode: determination made with protective
current applied.</li>
  <SCRIPT>comment(10)</SCRIPT><li>Minimum negative potential shift of
300mV produced by the application of protective current to structure not in
contact with dissimilar metals, (i.e. potential shift from the corrosion <span style="background-color: #00FF00">potential</span>).</li>
  <SCRIPT>comment(11)</SCRIPT><li>Minimum polarisation decay of 100mV
when CP system switched off.� The
polarisation decay is to be measured from the point of the instantaneous shift
(instant off measurement).</li>
  <SCRIPT>comment(12)</SCRIPT><li>A cathodic potential shift at least
equivalent to the start of the Tafel segment of the E-log I curve.</li>
</ol>

<SCRIPT>comment(13)</SCRIPT><p>The DNV only refer to the �850mV criteria, whilst NACE recommends
all four.� Methods for selecting a
criterion to be used in the field are not given.� There is some disagreement in the literature over the
applicability of the different criteria on account of <span style="background-color: #00FF00">the
fact that </span>each refers to a
different potential required for protection and a different current density to
effect this potential<span style="background-color: #FFFF00"> [2] the current
density and potential are presumably correlated, so these are not really
different?</span>.&nbsp; Nevertheless,
each of the criteria will be discussed, along with the current density required
for protection.</p>

<h3>Current Density</h3>

<SCRIPT>comment(14)</SCRIPT><p>Using suspended samples of iron
and storage batteries Harker and McNamara<a name="_Ref537266169"></a> <a href="#_edn5" name="_ednref5" title="">[5]</a> were the first to measure the current density
required to protect iron in seawater.�
Clement and Walker<a> </a><a href="#_edn6" name="_ednref6" title="">[6]</a> expanded on their work to produce Harker�s
Principle:</p>

<SCRIPT>comment(15)</SCRIPT><p align=left><i>The
current required to prevent corrosion can be obtained by calculation from the
rate of corrosion <span style="background-color: #00FF00">of</span> the steel under the given conditions.</i></p>

<SCRIPT>comment(16)</SCRIPT><p>&nbsp;<span style="background-color: #00FF00">In 1957
</span>Schaschl
and Marsh<a name="_Ref437940478"></a> <a
href="#_edn13" name="_ednref13" title="">[13]</a> proposed using the corrosion current
density as a criterion for protection by use of a corrosion probe.</p>

<SCRIPT>comment(17)</SCRIPT><p>The corrosion current density is a
very good approximation for the current density required for protection, <i>i<sub>cp</sub></i>, for systems under
concentration polarisation, where the corrosion current density is mainly a
function of oxygen concentration and velocity of the electrolyte.� Variation in <i>i<sub>cp</sub></i> is reflected in literature surveys by Peterson<a
name="_Ref438277305"></a> <a href="#_edn14"
name="_ednref14" title="">[14]</a> and Wanklyn<a name="_Ref438277315"></a> <a href="#_edn15" name="_ednref15" title="">[15]</a>.�
Both listed current densities ranging from 10 � 50mA/m<sup>2</sup> to
over 2000mA/m<sup>2</sup>.� It follows
that if the structure to be protected spans multiple environments, <i>i<sub>cp</sub></i> would vary along the
structure.� This would make
determination of protection in the various environments very difficult,
expensive, and time consuming.</p>

<SCRIPT>comment(18)</SCRIPT><p>Dependence on current density as a
criterion for protection could lead to situations where the structure is
unprotected.� This may be illustrated in
Figure 1 for an increase in the limiting diffusion current from <i>i<sub>lim,1</sub></i> to <i>i<sub>lim,2</sub></i> which raises the
potential from <span style="background-color: #00FF00"><i> E</i></span><sub><span style="background-color: #00FF00"><i>prot,1</i></span> </sub>to
<i><span style="background-color: #00FF00"> E<sub>prot,2</sub></span></i>.� The main concern is the increase of <i>i<sub>corr,1</sub></i>to <i>i<sub>corr,2</sub></i>.� If it is considered that <i>i<sub>corr,1</sub></i>is
negligible, but <i>i<sub>corr,2</sub></i>would be much greater.� For
example, if <i>i<sub>corr,1</sub></i> is
0.1mA/m<sup>2</sup> and <i>i<sub>lim,1</sub></i>
is 100 mA/m<sup>2</sup>, then <i>i<sub>cp</sub></i>
would be ~100mA/m<sup>2</sup>.� Keeping <i>i<sub>cp</sub></i> constant, an increase of <i>i<sub>lim,1</sub></i> from 100 mA/m<sup>2</sup>
to <i>i<sub>lim,2</sub></i> of 150 mA/m<sup>2</sup>
would increase <i>i<sub>corr,1</sub></i>
from� 0.1mA/m<sup>2</sup> to <i>i<sub>corr,2</sub></i> which would now be 50
mA/m<sup>2</sup>.� Hence, the criterion
for protection is fulfilled, but major corrosion may be occurring.<span style="background-color: #FFFF00">[3]
This seems a very complicated discussion of a rather obvious problem!</span></p>

<p align="center">
<img src="v3p17f1.gif" v:shapes="_x0000_i1025" width="434" height="277"></p>

<SCRIPT>comment(19)</SCRIPT><p align="center"><b>Figure
1. E-log i <span style="background-color: #FFFF00">[4]
Presumably i (rather than I as in the text) is correct? </span> diagram showing changes in protection current density&nbsp;whilst holding CP current density constant.
<span style="background-color: #FFFF00">[5]The figure could be
better - see the instructions to authors.&nbsp;</span></b></p>

<SCRIPT>comment(20)</SCRIPT><p>In addition to the above problems,
the use of coatings and determination of its <span style="background-color: #FFFF00">[6]
what does this refer to? </span>breakdown factor <span style="background-color: #FFFF00">[7]
define this term </span>over time adds
further uncertainty.� The DNV <a href="#_edn12" name="_ednref12" title="">[12]</a> give sets of guidelines for calculating the
breakdown factor for four paint coating categories.� DNV <span style="background-color: #FFFF00">[8]
should it be &quot;DNV&quot; or &quot;The DNV&quot;? </span>admit that the breakdown factors are estimated on a
conservative basis and they do not take into account damaged coatings due to
fabrication or installation.� Overly
conservative breakdown factors would make it very difficult to predict the
current density for protection with time and could ultimately lead to
overprotection.</p>

<SCRIPT>comment(21)</SCRIPT><p>Although the current density is
not suitable as a criterion, it is a very essential component of the overall
cathodic protection design.� The first
step in the design process is the calculation of the total current required for
protection.� Water depth, oxygen
concentration, turbulence, temperature, resistivity, tidal effects, and
suspended solids are some of factors that must be considered in selecting a
current density for design purposes<a name="_Ref437318674"></a> <a href="#_edn16" name="_ednref16" title="">[16]</a>.�
The DNV <a href="#_edn12" name="_ednref12" title="">[12]</a> and NACE <a href="#_edn11" name="_ednref11" title="">[11]</a> give estimated values for different
geographical locations.� These current
densities are based on extensive in-service experience and laboratory
trials.� Table 1 lists the most commonly
used current densities for the design of offshore structures <a href="#_edn16" name="_ednref16" title="">[16]</a>.</p>

<SCRIPT>comment(22)</SCRIPT><p align="center"><b>Table 1</b>.� Guidance on Minimum design
current densities for cathodic protection of bare steel.</p>

<div align="center">
  <center>

<table border=1 cellspacing=0 cellpadding=0>
 <tr>
  <td width=543 colspan=4 valign=top>
  <p>AREA�������������������������������������� ���������������������������������Current Density (mA/m<sup>2</sup>)</p>
  </td>
 </tr>
 <tr>
  <td width=301 valign=top>
  <p>&nbsp;</p>
  </td>
  <td width=84 valign=top>
  <p align=center>Initial</p>
  </td>
  <td width=84 valign=top>
  <p align=center>Mean</p>
  </td>
  <td width=74 valign=top>
  <p align=center>Final</p>
  </td>
 </tr>
 <tr>
  <td width=301 valign=top>
  <p>North Sea (northern sector, 57 to 52 N)</p>
  </td>
  <td width=84 valign=top>
  <p align=center>180</p>
  </td>
  <td width=84 valign=top>
  <p align=center>90</p>
  </td>
  <td width=74 valign=top>
  <p align=center>120</p>
  </td>
 </tr>
 <tr>
  <td width=301 valign=top>
  <p>North Sea (southern sector, up to 57 N)</p>
  </td>
  <td width=84 valign=top>
  <p align=center>150</p>
  </td>
  <td width=84 valign=top>
  <p align=center>90</p>
  </td>
  <td width=74 valign=top>
  <p align=center>100</p>
  </td>
 </tr>
 <tr>
  <td width=301 valign=top>
  <p>Arabian Gulf</p>
  </td>
  <td width=84 valign=top>
  <p align=center>130</p>
  </td>
  <td width=84 valign=top>
  <p align=center>70</p>
  </td>
  <td width=74 valign=top>
  <p align=center>90</p>
  </td>
 </tr>
 <tr>
  <td width=301 valign=top>
  <p>India</p>
  </td>
  <td width=84 valign=top>
  <p align=center>130</p>
  </td>
  <td width=84 valign=top>
  <p align=center>70</p>
  </td>
  <td width=74 valign=top>
  <p align=center>90</p>
  </td>
 </tr>
 <tr>
  <td width=301 valign=top>
  <p>Australia</p>
  </td>
  <td width=84 valign=top>
  <p align=center>130</p>
  </td>
  <td width=84 valign=top>
  <p align=center>70</p>
  </td>
  <td width=74 valign=top>
  <p align=center>90</p>
  </td>
 </tr>
 <tr>
  <td width=301 valign=top>
  <p>Brazil</p>
  </td>
  <td width=84 valign=top>
  <p align=center>130</p>
  </td>
  <td width=84 valign=top>
  <p align=center>70</p>
  </td>
  <td width=74 valign=top>
  <p align=center>90</p>
  </td>
 </tr>
 <tr>
  <td width=301 valign=top>
  <p>West Africa</p>
  </td>
  <td width=84 valign=top>
  <p align=center>130</p>
  </td>
  <td width=84 valign=top>
  <p align=center>70</p>
  </td>
  <td width=74 valign=top>
  <p align=center>90</p>
  </td>
 </tr>
 <tr>
  <td width=301 valign=top>
  <p>Gulf of Mexico</p>
  </td>
  <td width=84 valign=top>
  <p align=center>110</p>
  </td>
  <td width=84 valign=top>
  <p align=center>60</p>
  </td>
  <td width=74 valign=top>
  <p align=center>80</p>
  </td>
 </tr>
 <tr>
  <td width=301 valign=top>
  <p>Indonesia</p>
  </td>
  <td width=84 valign=top>
  <p align=center>110</p>
  </td>
  <td width=84 valign=top>
  <p align=center>60</p>
  </td>
  <td width=74 valign=top>
  <p align=center>80</p>
  </td>
 </tr>
 <tr>
  <td width=301 valign=top>
  <p>Pipelines (burial specified)</p>
  </td>
  <td width=84 valign=top>
  <p align=center>50</p>
  </td>
  <td width=84 valign=top>
  <p align=center>40</p>
  </td>
  <td width=74 valign=top>
  <p align=center>40</p>
  </td>
 </tr>
 <tr>
  <td width=301 valign=top>
  <p>Saline mud (ambient temperature)</p>
  </td>
  <td width=84 valign=top>
  <p align=center>25</p>
  </td>
  <td width=84 valign=top>
  <p align=center>20</p>
  </td>
  <td width=74 valign=top>
  <p align=center>15</p>
  </td>
 </tr>
</table>

  </center>
</div>

<SCRIPT>comment(23)</SCRIPT><p>The initial current density is the <i>i<sub>cp</sub></i> required to obtain polarisation of an initially
exposed bare metal surface, typically with some atmospheric rusting and mill
scale, and to ensure a well-formed calcareous film.� Once the CP system has attained its steady state protection
potential, the mean current density is required to maintain the calcareous film.� Final current density is the <i>i<sub>cp</sub></i> required for marine
structures with established marine growth and calcareous layers.� The final is larger than the mean to ensure
the structure is re-polarised after periods of heavy weather or turbulence.</p>

<SCRIPT>comment(24)</SCRIPT><p>From the foregoing discussion, the applied current density would not
be a very reliable method of determining if CP has been attained.� Nevertheless, the current density plays a
pivotal role in CP design.� It is used
to calculate the total current for protection, from which the total amount of
anode material may be calculated.� It is
also chosen judiciously in order to ensure rapid polarisation and effective
deposition of calcareous films.</p>

<h3>Calcareous Films</h3>

<SCRIPT>comment(25)</SCRIPT><p>It is worth mentioning calcareous layers formed on cathodically
protected structures.�<span style="background-color: #FFFF00">[9] not very
grammatical, delete?</span> Davy <a href="#_edn4" name="_ednref4" title="">[4]</a> first mentioned calcareous films in his
experiments on cathodic protection of copper sheet by iron and zinc.� After four months of protection at an area
ratio between 1/35� to 1/80 in seawater
Davy noted that the copper sheets:</p>

<SCRIPT>comment(26)</SCRIPT><p>�have become coated with a white
matter, which on analysis, has proved to be principally carbonated lime, and
carbonate and hydrate of magnesia.�</p>

<SCRIPT>comment(27)</SCRIPT><p>The interfacial pH of the steel surface may reach values
between 10 to 11.5 due to oxygen reduction.�
The degree of alkalinity depends on the velocity and the current density
of the seawater.�<span style="background-color: #FFFF00">[10] seawater doesn't
have a current density!</span> As the interface
becomes more alkaline the solubility products of CaCO<sub>3</sub> and Mg(OH)<sub>2</sub>
are exceeded and precipitation of the films takes place according to the
following reactions:</p>

<p align=center>Ca<sup>2+</sup> + HCO<sub>3</sub><sup>-</sup>
+ OH<sup>-</sup> &rarr; CaCO<sub>3</sub> +H<sub>2</sub>O</p>

<p align=center>Mg<sup>2+</sup> +2OH<sup>-</sup> &rarr; Mg(OH)<sub>2</sub></p>

<SCRIPT>comment(28)</SCRIPT><p>The minimum pH for calcium carbonate is 8.7 and <span style="background-color: #00FF00">for
</span>magnesium hydroxide <span style="background-color: #00FF00">it is </span>9.7<a name="_Ref437594139"></a>
<a href="#_edn17"
name="_ednref17" title="">[17]</a>. From work by Humble <a href="#_edn18" name="_ednref18" title="">[18]</a>,
CaCO<sub>3</sub> is precipitated first and mainly at low current
densities and Mg(OH)<sub>2 </sub>is favoured at high current densities.� Figure 2 shows the effect of increasing the
initial current density on the mean current density <a href="#_edn19" name="_ednref19" title="">[19]</a>.� A larger initial current density results in
a decrease in mean current density.�
According to several authors <a href="#_edn17" name="_ednref17" title="">[17]</a>,
<a href="#_edn20" name="_ednref20"
title="">[20]</a>, <a href="#_edn21" name="_ednref21" title="">[21]</a>, the ideal current density for deposition of films is approximately
1500mA/m<sup>2</sup>.� This current
density is greater than the initial current densities given in Table 1.� Although optimum film formation is not
achieved in practice, potentials and current densities on structures operating
in the North Sea indicate that protection is adequate <a href="#_edn16" name="_ednref16" title="">[16]</a>.</p>

<p align="center"><img src="v3p17f2.gif" v:shapes="_x0000_i1025" width="576" height="378"></p>
<p align="center"><b>Figure 2&nbsp;&nbsp; Effect of initial current density on the
mean current density</b> <span style="background-color: #FFFF00">[11]Please edit picture
to remove caption and white space around image and convert to 2-colour (black and
white) GIF as a separate file - see instructions to authors.</span></p>

<SCRIPT>comment(29)</SCRIPT><p>In addition to reducing the overall current demand on
the CP system, calcareous films are also beneficial in distributing CP to areas
progressively further from the source of protection current, and provide a
measure of protection to the structure against corrosion if the CP system is
interrupted.� Reviews by Morse et al. <a href="#_edn22" name="_ednref22" title="">[22]</a>,
Hartt et al.<a href="#_edn23" name="_ednref23"
title="">[23]</a>, <span style="background-color: #00FF00">
Evans</span> <a href="#_edn24" name="_ednref24" title="">[24]</a>,
and Pathmanaban and Phull <a href="#_edn17" name="_ednref17" title="">[17]</a>
discuss the theoretical aspects of calcareous film deposition and its relation
to practical experience.</p>

<h3>Tafel
�Break� </h3>

<SCRIPT>comment(30)</SCRIPT><p><span style="background-color: #FFFF00">[12] this
is a very confusing description, partly because it seems to use the word 'break'
rather inconsistently, and partly because it is often unclear about whether the current is
increasing or decreasing and what the relevant axes are (i.e. is current on the
x or y axis?). A <u>clear</u> figure would help. </span>The Tafel �break� criterion was
the result of laboratory work by Evans, Bannister, and Britton <a href="#_edn10" name="_ednref10" title="">[10]</a> in 1931.�
Their work was purely for scientific purposes and was not intended to
develop a criterion for protection <a href="#_edn25"
name="_ednref25" title="">[25]</a>.� They polarised a steel sample with a large
current density and progressively reduced the value and observed:</p>

<SCRIPT>comment(31)</SCRIPT><p><i>�During the first
part of each experiment no corrosion occurred; but below a certain value of the
current density (the �protective� value), corrosion was seen to start on the
specimen, and the curve </i>(E-I)<i> became horizontal.�</i></p>

<SCRIPT>comment(32)</SCRIPT><p>The �break� is the change in the curve to
the horizontal direction.� Their
publication is routinely referred to in papers in the mid-twentieth century on
investigations into requirements for cathodic protection.</p>

<SCRIPT>comment(33)</SCRIPT><p>In practice, the �break� criterion
consists of applying a set of increasing values of current, and measuring the
pipe-to-soil potential at each value<a name="_Ref437776601"></a> <a href="#_edn26" name="_ednref26" title="">[26]</a>.�
When the current density exceeds a certain value and the potential begins
to decrease or �break� in proportion to the logarithm of the current density,
it is believed that the current density at the �break� is the current density
required for protection.</p>

<SCRIPT>comment(34)</SCRIPT><p>In view of the theoretical work by
Stern and Geary<a name="_Ref437961951"></a> <a
href="#_edn27" name="_ednref27" title="">[27]</a> on the shape of polarisation curves,
the �break� does not represent the current density nor the potential needed for
protection.� In seawater, the corrosion
rate is limited by the diffusion of oxygen.�
Polarisation from the corrosion potential as a function of current
density for diffusion limited systems is given by</p>

<p align=center><i>h<sub>L</sub> = 2.3RT/nF </i><i>� Log[ 1 � i<sub>O2</sub>/i<sub>L</sub> ]</i>� ,���������������������� Equation
1&nbsp;<span style="background-color: #FFFF00">[13]What is <i>h<sub>L</sub>? </i>Do
you intend <i> &eta;</i><sub><i>L</i></sub>?</span></p>

<p>where <i>i<sub>L</sub></i> is the limiting diffusion
current density and <i>i<sub>O2</sub></i> is
the applied current density.� When <i>i<sub>O2</sub></i> becomes 0.1<i>i<sub>L</sub></i>, <i>h<sub>L</sub></i> becomes significant.� As <i>h<sub>L</sub></i> becomes significant the potential begins to �break� to more active
values, but does not obey a Tafel relationship.� Data presented by Logan<a name="_Ref437961703"></a>
<a href="#_edn28" name="_ednref28" title="">[28]</a> and Sudrabin and Ringer <a href="#_edn29" name="_ednref29" title="">[29]</a>
show that there is no definite existence of a �break� and in some cases they
reported more than one �break.�� The
vagueness of a �break� is further complicated by the existence of resistance
polarisation.� The sum of the
polarisations would make it difficult to assert a Tafel region and would
require, according to Stern and Geary, �a great deal of imagination� <a href="#_edn27" name="_ednref27" title="">[27]</a> in order to establish the �break.�</p>

<SCRIPT>comment(35)</SCRIPT><p>Furthermore, if the �break� begins
at only 0.1<i>i<sub>L</sub></i>, then the
current density required for protection has not been reached.� Then it would be expected that corrosion
would still occur and a larger current density would have to be applied in
order to completely stop corrosion.�
Schaschl and Marsh <a href="#_edn13" name="_ednref13" title="">[13]</a> showed that a larger current density is needed
than the current density at the �break� and Barlo and Berry<a
name="_Ref437940804"></a> <a href="#_edn30"
name="_ednref30" title="">[30]</a> reported that a potential near 100mV
more negative than the potential at the break was needed to reduce corrosion to
a negligible level.� Hence, the current
density at the �break� does not entirely reduce corrosion and would constitute
a poor criterion of protection.</p>

<SCRIPT>comment(36)</SCRIPT><p>In addition, no guidelines are
given on the length of time between increasing current density and the
magnitude of increase in the current density.�
Comeaux <a href="#_edn31" name="_ednref31"
title="">[31]</a> has shown
that over 100 minutes is needed for potential stabilization.� Pearson <a
href="#_edn32" name="_ednref32" title="">[32]</a>
suggests that each increment should be from 25 to 50% greater than the
preceding one, while Schwerdtfeger et al<a name="_Ref437781142"></a> <a href="#_edn33" name="_ednref33" title="">[33]</a> recommends equal increments.� Logan
<a href="#_edn28" name="_ednref28" title="">[28]</a> has remarked that if the time interval is large
enough, increasing the current increment should not change the location of the
�break.�</p>

<SCRIPT>comment(37)</SCRIPT><p>NACE <a href="#_edn11" name="_ednref11" title="">[11]</a> does not recommend the placement of the
reference electrode or correction of the IR drop.� Neglecting either one of these could lead to masking of the
�break� in <a name="_Hlt437780599">the curve</a> <a href="#_edn26" name="_ednref26" title="">[26]</a>.� To correct for the IR drop, either instant
off or a null circuit must be employed.�
Using these are cumbersome, expensive, and require highly skilled
labour.</p>

<SCRIPT>comment(38)</SCRIPT><p>Concluding, the break criterion is
not a valid method for cathodic protection.�
The current density at the break is a function of many variables.� Also, it would be difficult to recheck if
the CP system is effective at a later date due to polarisation effects <a href="#_edn33" name="_ednref33">[33],</a>
<a href="#_edn34"
name="_ednref34">[34]</a>.� Furthermore, application in the field would
require highly qualified personnel and expensive equipment.� In view of the above discussion, it is not
surprising that Ashworth <a href="#_edn35"
name="_ednref35" title="">[35]</a>
has decreed it �of dubious value or expressions of pious hope.�</p>

<h3>100mV
Potential Shift</h3>

<SCRIPT>comment(39)</SCRIPT><p>The history of the 100mV shift criterion is not well
known.� Its first mention was by Ewing<a
name="_Ref437860774"></a> <a href="#_edn36"
name="_ednref36" title="">[36]</a> in 1951.� He manually maintained steel specimens at potentials between
�700mV to �1000mV SCE in a variety of soils over 70 to 80 days.� At the end of the tests, he compared the
corrosion rate of freely corroding samples to those held at various potentials
and made the following passing remark:</p>

<SCRIPT>comment(40)</SCRIPT><p><i>�It should be noted that in
all cases protection was obtained with less than 0.1V polarisation.�</i></p>

<SCRIPT>comment(41)</SCRIPT><p>In 1965, Compton<a name="_Ref437860789"></a> <a href="#_edn37" name="_ednref37" title="">[37]</a> stated that the structure potential
should be shifted at least 100mV to ensure a reasonable degree of protection.</p>

<SCRIPT>comment(42)</SCRIPT><p>A shift of
100mV from the corrosion potential was given as a criterion for protection by
NACE in 1969.� The only evidence for its
applicability in the literature is the two remarks made by Ewing <a href="#_edn36" name="_ednref36" title="">[36]</a> and Compton
<a href="#_edn37" name="_ednref37" title="">[37]</a>.� Husock<a
name="_Ref438214364"></a>&nbsp;<a href="#_edn38"
name="_ednref38" title="">[38]</a> suggests that the 100mV shift was
based on a number of verbal <span style="background-color: #00FF00"> opinions that</span> 50mV
is adequate in most
cases, thus 100mV would be more than adequate.</p>

<SCRIPT>comment(43)</SCRIPT><p>The 100mV
shift was not subject to laboratory investigation until 1984 when Barlo and
Berry <a href="#_edn30" name="_ednref30" title="">[30]</a> tested the criterion in a variety of
soils.� A 100mV shift was adequate for
protection in all the soils of varying humidity at room temperature.� However, at 60�C, 100mV was not enough cathodic polarisation to confer protection in
some of the soil types.� In the presence
of anaerobic bacteria and/or surface mill scale, shifts of nearly 300mV were
needed in order to achieve protection.�
The results at elevated temperature were confirmed by Zdunek et al<a
name="_Ref438217568"></a> <a href="#_edn39"
name="_ednref39" title="">[39]</a> in 1992.� It is pertinent to mention that in both of the above studies,
polarisation to �850mV Cu/CuSO<sub>4</sub> was sufficient for protection at
elevated temperatures, but not so in the presence of anaerobic bacteria.</p>

<SCRIPT>comment(44)</SCRIPT><p><span style="background-color: #00FF00"> Dearing</span><a
name="_Ref514926897"></a> <a href="#_edn40"
name="_ednref40" title="">[40]</a> suggests that a 100mV shift is a
good economical solution for bare or poorly coated pipelines.� Dearing <a href="#_edn40" name="_ednref40" title="">[40]</a> described the use of the 100mV shift to
pipelines installed between 1908 and the 1940�s with full impressed cathodic
protection systems installed after World War II.� After all CP systems were turned off, corrosion potentials after
12 days were typically between �450 and �500mV Cu/CuSO<sub>4</sub>.� He argues that polarisation from the
corrosion potentials to �850mV criterion is suitable for well coated buried
pipelines, but on poorly coated or bare pipelines it can lead to severe
overprotection and waste of economic resources.� Dearing sites economic advantages, but offers no insight into the
cost saving of switching from the �850mV criterion to the 100mV shift.� The claim of severe overprotection is not
justified.� The pH at the surface of
structures under CP may rise to approximately 10.5.� At that pH, the hydrogen electrode has a potential of� �931mV Cu/CuSO<sub>4</sub>.� Hence, it would be very difficult to evolve
hydrogen on the surface, which would not constitute overprotection on a bare
pipe.� Additionally, since Dearing is
discussing bare pipes, the threat of cathodic disbonding is non-existent.</p>

<SCRIPT>comment(45)</SCRIPT><p>A negative
shift of 100mV may be enough to lower the corrosion rate to an acceptable level,
but if the structure is suffering from stray currents or is galvanically
connected to a noble metal 100mV may not be enough of a potential shift.� Husock
<a
href="#_edn41" name="_ednref41" title="">[41]</a>
presented some case studies of detecting stray current corrosion on
pipelines.� It was noted that stray
currents could anodically polarise pipe sections by several hundred
millivolts.� In this case, a 100mV shift
would still leave the pipe section unprotected.� The 100mV shift can be applied to galvanic couples of steel and
aluminium, but not steel to copper.� In
the latter case, more than 100mV shift would be required to negate the galvanic
action.</p>

<SCRIPT>comment(46)</SCRIPT><p>The main
advantage of the 100mV shift is that there is no IR drop in the
measurement.� IR drop must be
�considered� in the 300mV shift and �850mV Cu/CuSO<sub>4</sub> criterion.� There is no real guideline as to how to
consider the IR drop.� On the other
hand, because the 100mV shift requires an instant off measurement and recording
of the decay time, it is restricted to uncomplicated impressed current systems
and is impractical for sacrificial anode systems.</p>

<h3>300mV Potential
Shift</h3>

<SCRIPT>comment(47)</SCRIPT><p>The history of the 300mV shift is not
well documented.� In the original papers
by Thayer<a name="_Hlt438202531"></a> <a href="#_edn2" name="_ednref2" title="">[2]</a> and Kuhn
<a href="#_edn3" name="_ednref3" title="">[3]</a>, it was customary to present the protection
potential as the difference of the initial and final potentials.� They coined this to be the potential to
earth.� According to Kuhn <a href="#_edn3" name="_ednref3" title="">[3]</a>, the final potential most applicable was �850mV
Cu/CuSO<sub>4</sub> and the initial potential was the corrosion potential.� The average corrosion potential reported was
�600mV on a pipeline without mill scale.�
It follows that the potential of the pipeline would have to be lowered
by 250mV in order to achieve protection.�
Thayer <a href="#_edn2" name="_ednref2" title="">[2]</a> gave 300mV to earth as the protection
potential.� In the 1950�s, Howell <a href="#_edn42" name="_ednref42" title="">[42]</a>
and Logan <a href="#_edn28" name="_ednref28" title="">[28]</a>shared the view that a potential change of 300mV
was adequate but suspected it may lead to overprotection.� Similar to the 100mV shift, the 300mV shift
was empirical and has been derived totally out of field experience.</p>

<SCRIPT>comment(48)</SCRIPT><p>The 300mV criterion as stated by NACE <a href="#_edn11" name="_ednref11" title="">[11]</a> is ambiguous and subject to several
interpretations.� If the original
corrosion potential is known, then the 300mV shift can be considered as the
voltage shift immediately after the CP system is energized or it could be the
shift after some time period.� Husock <a href="#_edn38" name="_ednref38" title="">[38]</a> suggests using the potential immediately after
the CP system is energized as the base potential.� Thus, his method includes the IR drop and polarisation over time
can be accommodated.� Peabody<a
name="_Ref438216800"></a> <a href="#_edn43"
name="_ednref43" title="">[43]</a> opts for a different approach than
NACE.� He defines the 300mV shift
criterion as:</p>

<SCRIPT>comment(49)</SCRIPT><p><i>The 300mV shift
criterion f<a name="_Hlt438204723"></a>or indicating attainment of CP of steel
is based on obtaining a minimum immediate shift in the positive direction of
300mV when the CP current is momentarily switched from ON to OFF and with the
reference electrode placed to reflect conditions in the area of interest.</i></p>

<SCRIPT>comment(50)</SCRIPT><p>The definition given by Peabody does not clarify the situation
because it seems all he has defined is a method of measuring the IR drop by an
instant off method.</p>

<SCRIPT>comment(51)</SCRIPT><p>According to practitioners <a href="#_edn44" name="_ednref44" title="">[44]</a>,
<a href="#_edn38" name="_ednref38" title="">[38]</a>, <a href="#_edn43" name="_ednref43" title="">[43]</a>, the 300mV shift is usually reserved for bare
pipelines in highly aerated soils or moving oxygen saturated water.� They claim that polarising the bare pipeline
to �850mV Cu/CuSO<sub>4</sub> would be economically unfeasible and sometimes
not possible.� It is hard to believe
that bare pipelines in aerated soil would present such an economic burden when
bare structures are routinely protected in the North Sea at potentials of
�950mV Cu/CuSO<sub>4</sub> when designed for a �850mV criterion <a href="#_edn16" name="_ednref16" title="">[16]</a>.</p>

<SCRIPT>comment(52)</SCRIPT><p>As with the 100mV shift criterion, the
300mV shift is not suitable where the structure is in contact with noble metals
such as copper and where stray current effects may be present.� On the other hand, the 300mV shift is
adequate for systems at elevated temperature&nbsp;<a href="#_edn5" name="_ednref5" title="">[30]</a>,
<a href="#_edn39" name="_ednref39" title="">[39]</a>, anaerobic bacteria <a href="#_edn30" name="_ednref30" title="">[30]</a>, and the presence of mill scale
<a href="#_edn30" name="_ednref30" title="">[30]</a>.</p>

<h3>�850mV
Vs. Cu/CuSO<sub>4</sub></h3>

<SCRIPT>comment(53)</SCRIPT><p>The first mention of the �850mV criterion was by Kuhn
<a href="#_edn3" name="_ednref3" title="">[3]</a>.�
Subsequently, several laboratory studies <a href="#_edn13" name="_ednref13" title="">[13]</a>,
<a href="#_edn33" name="_ednref33" title="">[33]</a>, <a href="#_edn45"
name="_ednref45" title="">[45]</a>,
which were studying the �break� criterion, made a passing notice of potentials
equal or near �850mV Cu/CuSO<sub>4</sub> that reduced corrosion to a negligible
level.� Reviews by Peterson <a href="#_edn14" name="_ednref14" title="">[14]</a>and Wanklyn
<a href="#_edn15" name="_ednref15" title="">[15]</a> also give �850mV Cu/CuSO<sub>4</sub> as the
mostly reported potential required for protection.� Consequently, the �850mV criterion is the most popular criterion
used in the field today <a href="#_edn38" name="_ednref38" title="">[38]</a>.</p>

<SCRIPT>comment(54)</SCRIPT><p>Unlike the aforementioned criteria, the �850mV
criterion has theoretical backing and laboratory confirmation.� The analysis by Ashworth
<a href="#_edn46" name="_ednref46" title="">[46]</a>
is applicable to the work of Schwerdtfeger et al. <a href="#_edn33" name="_ednref33" title="">[33]</a>.� They
measured the corrosion potential of steel in deaerated soils of increasing pH.
At pH 9, the steel had a corrosion potential of �770mV SCE, which intersects
the standard hydrogen electrode.�
According the Holler <a href="#_edn47"
name="_ednref47" title="">[47]</a>,
at this pH, steel suffers from negligible corrosion.� The fact that deaerated soil was used can be applied to corrosion
of steel in seawater because steel under cathodic protection would be reducing
oxygen at a high rate.� This would lead
to the surface of the steel in a near deaerated state at a pH actually greater
than 9, thus placing it in the passive region of a Pourbaix diagram.</p>

<SCRIPT>comment(55)</SCRIPT><p>The main advantage of the �850mV criterion is its ease
of use.� It provides the engineer with
an easy value to work with and measure.�
There is no need to take a corrosion potential survey in order to
establish a base line potential for potential shift criterions.� Uncertainties in �breaks� are resolved
because current potential curves do not have to be measured and
interpreted.� Simply increasing the
voltage output of the rectifier can accommodate increases in the current
density when necessary.� Finally, pipelines
crossing several environments can be protected with this value and rectifier
stations can be placed appropriately in order to maintain �850mV.</p>

<SCRIPT>comment(56)</SCRIPT><p>The main difficulty with the �850mV criterion as stated
by NACE is that it includes IR drop.�
According to Husock <a href="#_edn38" name="_ednref38" title="">[38]</a>, on coated pipelines the IR drop is negligible,
but on bare pipelines the IR drop can be significant because of the high
currents required.� In these situations,
he recommends the 300mV shift as opposed to the 100mV shift because instant off
measurements would pose many technical problems.</p>

<SCRIPT>comment(57)</SCRIPT><p>Where dissimilar metals and stray current effects are
encountered, the �850mV criterion provides adequate protection. In addition,
the potential should be lowered to �950mV in situations where anaerobic
bacteria may be present.� The -850mV
criterion is acceptable in situations of heat transfer<a name="_Ref438285252"></a>
<a href="#_edn48" name="_ednref48" title="">[48]</a>, elevated temperature <a href="#_edn30" name="_ednref30" title="">[30]</a>,
<a href="#_edn39" name="_ednref39" title="">[39],</a> <a href="#_edn48" name="_ednref48" title="">[48]</a>, and/or the presence of mill scale
<a href="#_edn5" name="_ednref5" title="">[30]</a>.</p>

<SCRIPT>comment(58)</SCRIPT><p>In short, the �850mV criterion is
the easiest and most acceptable criterion used the CP field.� It is substantiated with considerable
laboratory and field experience, and sound theoretical backing.� It is applicable to many situations encountered,
including galvanic couples and stray current effects, except where anaerobic
bacteria are present.� Finally, it does
not require instant off measurements except in cases of high cathodic
protection requirements.</p>

</div>

<div>

<div id=edn1>

<h3>References</h3>

<p><a href="#_ednref1"
name="_edn1" title="">[1]</a>.� Pope, R., <i>Corrosion</i>, <b>7</b>, 212
(1951). </p>

</div>

<div id=edn2>

<p><a href="#_ednref2"
name="_edn2" title="">[2]</a>.� Thayer, S., <i>API Proc</i>., <b>14</b>, 23
(1933). </p>

</div>

<div id=edn3>

<p><a href="#_ednref3"
name="_edn3" title="">[3]</a>.� Kuhn, R.J., <i>API Proc.</i>, Sec. IV., <b>14</b>,
153 (1933). </p>

</div>

<div id=edn4>

<p><a href="#_ednref4"
name="_edn4" title="">[4]</a>.� Davy, H., <i>Phil. Trans. R. Soc. (London)</i>, <b>114</b>,
151, 242,328 (1824-1825). </p>

</div>

<div id=edn5>

<p><a href="#_ednref5"
name="_edn5" title="">[5]</a>.� Harker, G. and McNamara, J., <i>J. Soc. Chem. Ind</i>., <b>29</b>, 1286 (1910).</p>

</div>

<div id=edn6>

<p><a href="#_ednref6"
name="_edn6" title="">[6]</a>.� Clement, J.K. and Walker, L.W., <i>Trans. Electrochem. Soc.</i>, <b>22</b>, 193 (1912). </p>

</div>

<div id=edn7>

<p><a href="#_ednref7"
name="_edn7" title="">[7]</a>.� Mears, R.B. and Brown, R.H., <i>Trans, Electrochem. Soc</i>., <b>74</b>, 519 (1938).</p>

</div>

<div id=edn8>

<p><a href="#_ednref8"
name="_edn8" title="">[8]</a>.� Brown, R.H. and Mears, R.B., <i>Trans. Electrochem. Soc</i>., <b>81</b>, 455 (1942).</p>

</div>

<div id=edn9>

<p><a href="#_ednref9"
name="_edn9" title="">[9]</a>.�� Hoar, T.P., <i>J. Electrodep. Tech. Soc</i>., <b>14</b>,
33 (1938).</p>

</div>

<div id=edn10>

<p><a href="#_ednref10"
name="_edn10" title="">[10]</a>.� Evans, U.R., Bannister, L.C., and Britton,
S.C., <i>Proc. Roy. Soc</i>., <b>131</b>, 355 (1931). </p>

</div>

<div id=edn11>

<p><a href="#_ednref11"
name="_edn11" title="">[11]</a>.� NACE Standard RP0169-83, NACE, Houston,
Texas.</p>

</div>

<div id=edn12>

<p><a href="#_ednref12"
name="_edn12" title="">[12]</a>.� Recommended Practice RP B401, <i>Cathodic Protection Design</i>, Det Norske
Veritas, 1993. </p>

</div>

<div id=edn13>

<p><a href="#_ednref13"
name="_edn13" title="">[13]</a>.� Schaschl, E. and Marsh, G.A., <i>Corrosion</i>, <b>13</b>, 243t (1957). </p>

</div>

<div id=edn14>

<p><a href="#_ednref14"
name="_edn14" title="">[14]</a>.� Peterson, M.H., <i>Corrosion</i>, <b>15</b>, 483t
(1959). </p>

</div>

<div id=edn15>

<p><a href="#_ednref15"
name="_edn15" title="">[15]</a>.� Wanklyn, J.N. in: <i>Cathodic Protection Theory and Practice</i>, eds. Ashworth, V. and
Booker, C.J.L., Ellis Horwood Ltd., West Sussex, 1986. </p>

</div>

<div id=edn16>

<p><a href="#_ednref16"
name="_edn16" title="">[16]</a>.� The Marine Technology Directorate Limited, <i>Design and operational guidance on cathodic
protection of offshore structures, and subsea installations and pipelines</i>, <b>102</b>, Section 6, MTD Ltd, London, 1990. </p>

</div>

<div id=edn17>

<p><a href="#_ednref17"
name="_edn17" title="">[17]</a>.� Pathmanaban, S. And Phull, B.S., U.K.
National Corrosion Conference, 1982, p. 165. </p>

</div>

<div id=edn18>

<p><a href="#_ednref18"
name="_edn18" title="">[18]</a>.� Humble, R.A., <i>Corrosion</i>, <b>4</b>, 358 (1948).</p>

</div>

<div id=edn19>

<p><a href="#_ednref19"
name="_edn19" title="">[19]</a>.� Cochran, J., CORROSION/84, NACE, Paper 252,
New Orleans, April 1984. </p>

</div>

<div id=edn20>

<p><a href="#_ednref20"
name="_edn20" title="">[20]</a>.� Grigor�ev, V.P., <i>J. Appl. Chem. U.S.S.R.</i>, <b>34</b>,
169 (1961). </p>

</div>

<div id=edn21>

<p><a href="#_ednref21"
name="_edn21" title="">[21]</a>.� Grigor�ev, V.P. and Popov, S.Y., <i>J. Appl. Chem. U.S.S.R.</i>, <b>35</b>, 1555 (1962). </p>

</div>

<div id=edn22>

<p><a href="#_ednref22"
name="_edn22" title="">[22]</a>.� Morse, J.W., de Kanel, and Craig, H.L.,<i> Ocean Engng.</i>, <b>6</b>, 297 (1979). </p>

</div>

<div id=edn23>

<p><a href="#_ednref23"
name="_edn23" title="">[23]</a>.� Hartt, W.H., Culberson, C.H., and Smith,
S.W., <i>Corrosion</i>, <b>40</b>, 609 (1984).</p>

</div>

<div id=edn24>

<p><a href="#_ednref24"
name="_edn24" title="">[24]</a>.� Evans, T.E. in: <i>Cathodic Protection Theory and Practice</i>, Eds. Ashworth, V. and
Googan, C., Ellis Horwood, New York 1993. </p>

</div>

<div id=edn25>

<p><a href="#_ednref25"
name="_edn25" title="">[25]</a>.� Evans, U.R., <i>Corrosion</i>, <b>13</b>, 833t
(1957). </p>

</div>

<div id=edn26>

<p><a href="#_ednref26"
name="_edn26" title="">[26]</a>.� Doremus, E.P., Doremus, G.L., and Parker,
M.E., <i>Corrosion</i>, <b>5</b>, 273 (1949). </p>

</div>

<div id=edn27>

<p><a href="#_ednref27"
name="_edn27" title="">[27]</a>.� Stern, M. and Geary, A.L., <i>J. Electrochem. Soc</i>., <b>104</b>, 56 (1957). </p>

</div>

<div id=edn28>

<p><a href="#_ednref28"
name="_edn28" title="">[28]</a>.� Logan K.H., <i>Corrosion</i>, <b>10</b>, 206
(1954). </p>

</div>

<div id=edn29>

<p><a href="#_ednref29"
name="_edn29" title="">[29]</a>.� Sudrabin, L.P. and Ringer, F.W., <i>Corrosion</i>, <b>13</b>, 351t (1957). </p>

</div>

<div id=edn30>

<p><a href="#_ednref30"
name="_edn30" title="">[30]</a>.� Barlo, T.J. and Berry, W.E., <i>Materials Performance</i>, <b>23</b>, September, p. 9 (1984). </p>

</div>

<div id=edn31>

<p><a href="#_ednref31"
name="_edn31" title="">[31]</a>. �Comeaux, R.V., <i>Corrosion</i>, <b>8</b>, 305
(1952). </p>

</div>

<div id=edn32>

<p><a href="#_ednref32"
name="_edn32" title="">[32]</a>.� Pearson, J.M., <i>Corrosion</i>, <b>10</b>, 206
(1954). </p>

</div>

<div id=edn33>

<p><a href="#_ednref33"
name="_edn33" title="">[33]</a>.� Schwerdtfeger, W.J. and McDorman, O.N., <i>Corrosion</i>, <b>8</b>, 391 (1952). </p>

</div>

<div id=edn34>

<p><a href="#_ednref34"
name="_edn34" title="">[34]</a>.� Schwerdtfeger, W.J. and McDorman, O.N., <i>J. Research N.B.S.</i>, <b>47</b>, 104 (1951). </p>

</div>

<div id=edn35>

<p><a href="#_ednref35"
name="_edn35" title="">[35]</a>.� Ashworth, V. in: <i>Corrosion Vol. 2</i>, Eds. Shreir, L.L., Jarman, R.A., and Burstein,
G.T., Butterworth-Heinemann Ltd., Oxford, 1994, p. 10:14. </p>

</div>

<div id=edn36>

<p><a href="#_ednref36"
name="_edn36" title="">[36]</a>.� Ewing, S.P., <i>Corrosion</i>, <b>7</b>, 410
(1951). </p>

</div>

<div id=edn37>

<p><a href="#_ednref37"
name="_edn37" title="">[37]</a>.� Compton, K.G., <i>Materials Performance</i>, <b>4</b>,
August, p. 93 (1965). </p>

</div>

<div id=edn38>

<p><a href="#_ednref38"
name="_edn38" title="">[38]</a>.� Husock, B., Air Force Engineering and
Services Laboratory Report, ESL-TR-79-14, December 1979. </p>

</div>

<div id=edn39>

<p><a href="#_ednref39"
name="_edn39" title="">[39]</a>.� Zdunek, A.D., Barlo, T.J., and Warfield, G.,
<i>Materials Performance</i>, <b>31</b>, November, p. 22 (1992). </p>

</div>

<div id=edn40>

<p><a href="#_ednref40"
name="_edn40" title="">[40]</a>.� Dearing, B.M., <i>Materials Performance</i>, <b>33</b>,
September, p. 23 (1994). </p>

</div>

<div id=edn41>

<p><a href="#_ednref41"
name="_edn41" title="">[41]</a>.� Husock, B., <i>Corrosion</i>, <b>17</b>, 357t
(1961). </p>

</div>

<div id=edn42>

<p><a href="#_ednref42"
name="_edn42" title="">[42]</a>.� Howell, R.P., <i>Corrosion</i>, <b>8</b>, 300
(1952). </p>

</div>

<div id=edn43>

<p><a href="#_ednref43"
name="_edn43" title="">[43]</a>.� Peabody, A.W., <i>Materials Performance</i>, <b>23</b>,
June, p. 11 (1974). </p>

</div>

<div id=edn44>

<p><a href="#_ednref44"
name="_edn44" title="">[44]</a>.� Tefankjian, D.A., <i>Materials Performance</i>, <b>2</b>,
50 (1972).</p>

</div>

<div id=edn45>

<p><a href="#_ednref45"
name="_edn45" title="">[45]</a>.� Hoey, G.R. and Cohen, M., <i>Corrosion</i>, <b>14</b>, 200t (1958). </p>

</div>

<div id=edn46>

<p><a href="#_ednref46"
name="_edn46" title="">[46]</a>. Ashworth, V in
<i>Cathodic Protection, Theory and Practice</i>,
eds, Ashworth V and Googan CG, Ellis Horwood, New York, 1993</p>

</div>

<div id=edn47>

<p><a href="#_ednref47"
name="_edn47" title="">[47]</a>.� Holler, H.D., <i>J. Electrochem. Soc</i>., <b>97</b>,
277 (1950). </p>

</div>

<div id=edn48>

<p><a href="#_ednref48"
name="_edn48" title="">[48]</a>.� Rothwell, G.P., Francis, P.E., and Hall,
K.F., Summary Report (Project 340), Society for Underwater Technology, London
(1982). </p>

<p>&nbsp;</p>

</div>

</div>

<SCRIPT>footer()</SCRIPT>
</body>

</html>