<?php 
session_start();
include_once('/home/jcsete5/public_html/jcse.org/jcse/php_inc/jrnl_subs.php');
$logged_in=is_loggedin();
?>
<html>
<head>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
<title>JCSE Volume 1, Paper 3</title>
<link rel="schema.DC" href="http://purl.org/dc"> 
<link rel="schema.Corrosion" href="http://www.umist.ac.uk/corrosion/ocean/OSIS_1.0_doc" title="OCEAN Service Information Sheet">
<meta name="DC.Title" content="JCSE Volume 1, Paper 3, Superposition of diffusion and chemical reaction controlled limiting currents - Application to Corrosion">
<meta name="DC.Publisher" content="UMIST">
<meta name="DC.Date" content="1995-11-09">
<meta name="DC.Type" content="Text">
<meta name="DC.Format" content="text/html">
<meta name="DC.Creator" 
      scheme="OCEANName" 
      content="personName=Srdjan Nesic; 
               organizationName=Institute for Energy Technology (IFE); 
               address=P.O.Box 40, N-2007 Kjeller, Norway;
               email=srdjan@ife.no" >
<meta name="DC.Contributor" 
      scheme="OCEANName" 
      content="personName=B.F.M. Pots; 
               organizationName=Koninklijke/Shell-Laboratorium, Amsterdam (Shell Research B.V.); 
               address=P.O.Box 38000, 1030 BN Amsterdam, The Netherlands;
               email=pots1@ksla.nl" >
<meta name="DC.Contributor" 
      scheme="OCEANName" 
      content="personName=John Postlethwaite; 
               organizationName=University of Saskatchewan; 
               address=Saskatoon,Canada;
               email=John_Postlethwaite@engr.USask.Ca" >
<meta name="DC.Rights" scheme="OCEANRights" content="access=free; address=www.jcse.org/details.php" >
<meta name="DC.Identifier" content="http://www.jcse.org/vol1/paper1/v1p1.php">
<meta name="DC.Subject" scheme="OCEANDictionary-V00001" content="CO2 corrosion; diffusion; chemical reaction" >

<SCRIPT src="/getcomm.php?vol=1&pap=3"></SCRIPT>
<SCRIPT src="/jsinc/jcsesubs.js.php"></SCRIPT>
<SCRIPT>
getcommentmode();</SCRIPT></HEAD><body>
<script src="/jsinc/writeheader.js"></script>

  <h2>Volume 1 Paper 3</h2>
  <script>ifnotmode(3,'<p>Submitted 22 June 1995, revised version submitted 9 November 1995<br>');</script>
<h2>Superposition of diffusion and chemical reaction controlled limiting currents - Application
to Corrosion</h2>

<p>Srdjan Nesic<a href="#_ftn1" name="_ftnref1" title=""><sup>¤</sup></a>, B.F.M. Pots<a href="#_ftn2" name="_ftnref2" title=""><sup>#</sup></a>, John Postlethwaite<a href="#_ftn3" name="_ftnref3" title=""><sup>*</sup></a> and Nicolas Thevenot<a
href="#_ftn4" name="_ftnref4" title=""><sup>¤</sup></a></p>

<a href="#_ftnref1"
name="_ftn1" title=""><sup>¤</sup></a>
Institute for Energy Technology (IFE), P.O.Box 40, N-2007 Kjeller, Norway,
e-mail: <script>mailto2('srdjan','ife.no')</script><br>
<a href="#_ftnref2"
name="_ftn2" title=""><sup>#</sup></a>
 Koninklijke/Shell-Laboratorium, Amsterdam (Shell Research B.V.), P.O.Box 38000,
1030 BN Amsterdam, The Netherlands, e-mail: <script>mailto2('pots1','ksla.nl')</script><br>
<a href="#_ftnref3"
name="_ftn3" title=""><sup>*</sup></a>
 IFE, on sabbatical leave from the University of Saskatchewan, Saskatoon,
Canada, e-mail: <script>mailto2('John_Postlethwaite','engr.USask.Ca')</script><br>
<a href="#_ftnref4"
name="_ftn4" title=""><sup>¤</sup></a>
Institute for Energy Technology (IFE), P.O.Box 40, N-2007 Kjeller, Norway
<p>Owing to the large number of mathematical equations in this paper, which are
rendered as GIF images, it may take rather a long time to finish loading, and it
will not produce a very good quality printed image. Consequently, <a href="v1p3.ps">Postscript</a>
and <a href="v1p3.pdf">PDF</a> versions are available for printing.<br>
<br>

<SCRIPT>notify();</SCRIPT><SCRIPT>comment(1)</SCRIPT></p>
<h3>Abstract</h3>
<p>It was observed
experimentally that a chemical reaction limiting current can be affected by flow.  In the present study a new more general expression
than the one found in literature was derived for the superposition of the
diffusion and chemical reaction controlled limiting currents.  It was found that their interaction in the
case of CO<sub>2</sub> corrosion is
significant at temperatures lower than 40°C and velocities  higher than 1 <i>m/s</i>  when the mass transfer layer is of the
similar thickness as the reaction layer.</p>

<SCRIPT>comment(2)</SCRIPT><h3>Introduction</h3>
<p>The corrosion of steel in water
containing dissolved CO<sub>2</sub> gas is a topic of considerable interest with practical
applications and substantial economic impact in the oil and gas production and
transportation industry.<sup>1</sup> 
When dissolved in water, the CO<sub>2</sub> is hydrated to give carbonic acid:</p>

<p align=right><b><sub><img
src="v1p3_files/image002.gif" width="149" height="23"></span></sub></b>                                                 (1<a
name=hydrat></a>) </p>
<SCRIPT>comment(3)</SCRIPT><p>This weak, partly dissociated
acid is responsible for high corrosion rates of steel in water CO<sub>2</sub>
solutions.  The electrochemistry of CO<sub>2</sub> corrosion is
still not certain although a number of good studies exist in this field.<sup>2</sup><sup>-</sup><sup>8</sup> One of the simplest assumptions is that the
dominant cathodic reaction is the reduction of hydrogen ions, where the
hydrogen ions are supplied by dissociation of carbonic acid:</p>
<p align=right><b><sub><img
src="v1p3_files/image004.gif" width="148" height="23"></sub></b>                                                 (2<a
name=h2co3dis></a>)</p>
<p align=right><b><sub><img
src="v1p3_files/image006.gif" width="133" height="23"></span></sub></b>                                                     (3<a
name=hco3dis></a>) </p>
<p align=right><b><sub><img
src="v1p3_files/image008.gif" width="112" height="24"></span></sub></b>                                                          (4<a
name=hred></a>)</p>
<SCRIPT>comment(4)</SCRIPT><p>The other possibility is the
direct reduction of carbonic acid:<sup>2</sup></p>

<p align=right><b><sub><img
src="v1p3_files/image010.gif" width="195" height="25"></span></sub></b>                                     (5<a
name=h2co3red></a>)</p>

<SCRIPT>comment(5)</SCRIPT><p>When conducting potentiodynamic
sweeps on steel in CO<sub>2</sub>
solutions, it is difficult to identify a pure Tafel region for the cathodic
reaction as a limiting current is reached for relatively small
overpotentials.  The origin of this
limiting current has been investigated <sup>3</sup><sup>,</sup><sup>4</sup> previously and is the topic of the
present study. </p>

<SCRIPT>comment(6)</SCRIPT><h3>Experimental</h3>

<h4>Equipment</h4>

<p>Experiments were conducted at atmospheric pressure in a glass cell. Gas (CO<sub>2</sub> or N<sub>2</sub>) was
continuously bubbled through the cell. A three electrode set-up (Figure 1) was used in all
electrochemical experiments.  A rotating
cylinder electrode with a speed control unit (0-5000 <i>rpm - </i>
5000 <i>rpm</i> for our cylinder  corresponds to a peripheral velocity of 2.61
<i>m/s</i>, a shear stress of 25 <i>Pa</i>., and a Reynolds number of 26175) was used as
the working electrode. A concentric platinum ring was used as a counter
electrode.  A saturated Ag/AgCl
reference electrode was used externally connected to the cell via a Luggin
capillary and a porous wooden plug.  The
speed of rotation of the working electrode was controlled with the aid of a
stroboscope. The pH was followed with an electrode directly immersed into the
electrolyte. The temperature was followed with a Pt-100 probe which also served
as an input for the temperature regulating system - a  hot plate combined with a magnetic stirrer.  Oxygen concentration was monitored with an
Orbisphere oxygen meter.  The
concentration of Fe<sup>++</sup> was measured
occasionally using a photospectrometric method.  The concentration of CO<sub>2</sub> in the water
was also measured in selected experiments. Electrochemical measurements were
made with a Gamry Instruments Inc. potentiostat connected with a PC 486/25
computer.  </p>

<SCRIPT>comment(7)</SCRIPT><h3>Material</h3>

<p>A typical
construction carbon steel St52 was tested (corresponding to ASTM A537 Grade
1).  Chemical composition of the steel
is given in Table 1.  The working electrode was machined from the parent material into
a cylinder 10 mm in diameter and 10 mm long. 
The exposed area of the specimen was 3.14 cm<sup>2</sup>. </p>

<SCRIPT>comment(8)</SCRIPT><p align=center><b>Table 1. <a name=steelcomp></a>Chemical composition of the St52
steel used for the working electrode (mass%)</b></p>

<table border=0 cellspacing=0 cellpadding=0>
 <tr>
  <td width=56 valign=top>
  <p align=center> C</p>
  </td>
  <td width=56 valign=top>
  <p align=center>Mn</p>
  </td>
  <td width=56 valign=top>
  <p align=center>Si</p>
  </td>
  <td width=56 valign=top>
  <p align=center>P</p>
  </td>
  <td width=56 valign=top>
  <p align=center>S</p>
  </td>
  <td width=56 valign=top>
  <p align=center>Cr</p>
  </td>
  <td width=56 valign=top>
  <p align=center>Cu</p>
  </td>
  <td width=56 valign=top>
  <p align=center>Ni</p>
  </td>
  <td width=56 valign=top>
  <p align=center>Mo</p>
  </td>
  <td width=56 valign=top>
  <p align=center>Al</p>
  </td>
 </tr>
 <tr>
  <td width=56 valign=top>
  <p align=center>0.130</p>
  </td>
  <td width=56 valign=top>
  <p align=center>1.25</p>
  </td>
  <td width=56 valign=top>
  <p align=center>0.35</p>
  </td>
  <td width=56 valign=top>
  <p align=center>0.022</p>
  </td>
  <td width=56 valign=top>
  <p align=center>0.004</p>
  </td>
  <td width=56 valign=top>
  <p align=center>0.12</p>
  </td>
  <td width=56 valign=top>
  <p align=center>0.31</p>
  </td>
  <td width=56 valign=top>
  <p align=center>0.08</p>
  </td>
  <td width=56 valign=top>
  <p align=center>0.02</p>
  </td>
  <td width=56 valign=top>
  <p align=center>0.035</p>
  </td>
 </tr>
</table>

<p align=center><img
src="v1p3_files/image012.jpg" width="397" height="513"></span></p>

<SCRIPT>comment(9)</SCRIPT><p><b><a name="_Ref326137986">Figure </a>1. 
Schematic of the experimental test cell: 1-reference electrode, 2-gas
in, 3-gas out, 4-Luggin capillary, 5-platinum counter electrode, 6-rotating
cylinder, 7-temperature probe, 8-pH electrode, 9-working electrode.</b></p>

<SCRIPT>comment(10)</SCRIPT><h3>Procedure</h3>

<p>The glass cell
was filled with 3 litres of electrolyte: distilled water + 1 mass% NaCl. In
different experiments CO<sub>2</sub> or N<sub>2</sub> gas were bubbled through the electrolyte (min. 60 min.) in
order to saturate or deaerate the solution. 
Monitoring of pH and O<sub>2</sub> concentration
was used to judge when the solution was in equilibrium.  When needed, HCl or NaHCO<sub>3</sub> were added to adjust the pH. The temperature was set and
maintained with an accuracy of 1<sup>o</sup>C in all experiments.</p>

<SCRIPT>comment(11)</SCRIPT><p>Before each
polarisation experiment, the steel working electrode surface was polished with
500 and 1000 grit silicon carbide paper, washed with alcohol, mounted on the
specimen holders and immersed into the electrolyte.  The free corrosion potential was followed immediately after
immersion.  Depending on the conditions,
the potential stabilised within ±1 mV in 1 to 10 min.  </p>

<SCRIPT>comment(12)</SCRIPT><p>The cathodic
and anodic sweeps were conducted separately starting from the free corrosion
potential. Typical scanning rate used was 0.1-0.2 mV/s.  The cathodic sweeps were sometimes repeated
by sweeping in the opposite direction, without significant difference in the
result.  In each experiment the anodic
sweeps were conducted only once for a single working electrode specimen and a
given electrolyte (starting from the free corrosion potential) since they
altered the specimen surface and contaminated the electrolyte with significant
amounts of dissolved iron (Fe<sup>++</sup>&gt;3
ppm).  Typically the Fe<sup>++</sup> concentration was kept below 1 ppm.  </p>

<SCRIPT>comment(13)</SCRIPT><p align=center><b>Table 2<a
name=expcond></a>. Experimental conditions</b></p>

<table border=0 cellspacing=0 cellpadding=0>
 <tr>
  <td width=213 valign=top>
  <p>Test
  solution</p>
  </td>
  <td width=325 valign=top>
  <p>water + 1
  mass% NaCl</p>
  </td>
 </tr>
 <tr>
  <td width=213 valign=top>
  <p>Test
  material</p>
  </td>
  <td width=325 valign=top>
  <p>low carbon
  steel: St52 </p>
  </td>
 </tr>
 <tr>
  <td width=213 valign=top>
  <p>Temperature</p>
  </td>
  <td width=325 valign=top>
  <p>22<sup>o</sup>C </p>
  </td>
 </tr>
 <tr>
  <td width=213 valign=top>
  <p>Pressure</p>
  </td>
  <td width=325 valign=top>
  <p>1 <i>bar</i> N<sub>2</sub> or CO<sub>2</sub></p>
  </td>
 </tr>
 <tr>
  <td width=213 valign=top>
  <p>pH</p>
  </td>
  <td width=325 valign=top>
  <p>4</p>
  </td>
 </tr>
 <tr>
  <td width=213 valign=top>
  <p>Fe<sup>++</sup></p>
  </td>
  <td width=325 valign=top>
  <p>&lt;1 ppm</p>
  </td>
 </tr>
 <tr>
  <td width=213 valign=top>
  <p>Dissolved
  oxygen</p>
  </td>
  <td width=325 valign=top>
  <p>&lt;20 ppb</p>
  </td>
 </tr>
 <tr>
  <td width=213 valign=top>
  <p>Velocity</p>
  </td>
  <td width=325 valign=top>
  <p>static -
  10000 <i>rpm</i></p>
  </td>
 </tr>
 <tr>
  <td width=213 valign=top>
  <p>Test
  duration</p>
  </td>
  <td width=325 valign=top>
  <p>0.5 hours</p>
  </td>
 </tr>
 <tr>
  <td width=213 valign=top>
  <p>Sweep rate</p>
  </td>
  <td width=325 valign=top>
  <p>0.1 - 0.2
  mV/s</p>
  </td>
 </tr>
 <tr>
  <td width=213 valign=top>
  <p>Potentiodynamic
  sweep</p>
  </td>
  <td width=325 valign=top>
  <p>from -600 to
  +200 mV vs. E<sub>oc</sub></p>
  </td>
 </tr>
 <tr>
  <td width=213 valign=top>
  <p>IR
  compensation</p>
  </td>
  <td width=325 valign=top>
  <p>manual</p>
  </td>
 </tr>
</table>

<SCRIPT>comment(14)</SCRIPT><h3>Results</h3>

<p>When conducting cathodic
potentiodynamic sweeps in strong acids, limiting currents found are clearly
flow dependent (Figure
2).  It was shown previously<sup>9</sup>
that the rate of the hydrogen evolution reaction in the limiting current region
proceeds only as fast as the hydrogen ions can diffuse from the bulk to the
surface.</p>

<p align=center><img
src="v1p3_files/image014.gif" width="506" height="334"></p>

<SCRIPT>comment(15)</SCRIPT><p><b><a name="_Ref326138138">Figure </a>2. 
Potentiodynamic sweep conducted in HCl solution at pH 4 purged with N<sub>2</sub> , t=22 °C, 3%
NaCl, using a rotating cylinder electrode d=1 cm.</b></p>

<p align=center><img
src="v1p3_files/image016.gif" width="512" height="335"></p>

<SCRIPT>comment(16)</SCRIPT><p><b><a name="_Ref326138219">Figure </a>3. Potentiodynamic sweep conducted in
a CO<sub>2</sub>
solution at pH 4, t=22 °C, 3% NaCl, using a rotating cylinder electrode d=1 cm.</b></p>

<SCRIPT>comment(17)</SCRIPT><p>In CO<sub>2</sub> solutions it was found<sup>3</sup>
that the current limitation partly comes from a slow chemical step preceding
the charge transfer step (see also Figure
3).  It was assumed that the slow
CO<sub>2</sub>
hydration step (1) preceding the direct
reduction of carbonic acid (5) is the cause for the
observed limiting currents.  </p>

<SCRIPT>comment(18)</SCRIPT><p>In the present study limiting
currents were measured over the range of 500 - 10000 <i>rpm</i>
in both HCl and CO<sub>2</sub>
solutions using potentiodynamic sweeps. 
The correction was made for the contribution of the direct water
reduction and the resulting limiting currents as a function of rotation speed
are shown in  Figure 4.  The gap between the two curves which exists
over the whole velocity range confirms the assumption of Schmitt and Rothman<sup>3</sup><sup>  </sup>and Eriksrud
and Søntvedt<sup>4</sup> that there is
a flow independent component of the limiting current in CO<sub>2</sub>  solutions which is
probably controlled by a chemical step: the hydration of CO<sub>2</sub> into H<sub>2</sub>CO<sub>3</sub>.</p>

<SCRIPT>comment(19)</SCRIPT><p>If we assume that in CO<sub>2</sub> solution at pH 4, both the H<sup>+</sup> ions and H<sub>2</sub>CO<sub>3</sub> are reduced at the surface, then at a
given flow rate the limiting current for a CO<sub>2</sub> solution can be separated into two components.  The first component is related to the
diffusion of H<sup>+</sup> ions from the
bulk (the same as in HCl solutions). 
The other flow independent (chemical reaction controlled) component
which comes from H<sub>2</sub>CO<sub>3</sub>
is actually the gap between the two curves. 
Since the gap increases with rotation speed, it is hypothesised that the
chemical reaction limiting current is also affected by the flow.  This assumption will be analysed below.</p>

<p align=center><img
src="v1p3_files/image018.gif" width="503" height="396"></span></p>

<SCRIPT>comment(20)</SCRIPT><p><b><a name="_Ref325951260">Figure </a>4. Limiting currents for a CO<sub>2</sub> and a HCl
solution at pH4, t=22°C measured potentiostatically using a rotating cylinder
electrode d=1 cm.  </b> </p>

<SCRIPT>comment(21)</SCRIPT><h3>Discussion</h3>

<p>Means for calculating the magnitude of
a pure chemical reaction limiting current were first proposed by Vetter:<sup>10</sup></p>

<p align=right><b><sub><img
src="v1p3_files/image020.gif" width="191" height="28"></span></sub></b>                                               (6<a
name=hydlimcd></a>)</p>

<p>This equation
was later successfully used to explain observed limiting currents in CO<sub>2</sub> solutions (glass-cell experiments).<sup>5</sup><sup>, </sup><sup>11</sup>  However, it was
recently reported<sup>12</sup> that by using
(6), limiting currents measured
in loop experiments were underpredicted especially at higher velocities (&gt;1<i>m/s</i>). 
Inspection of Vetter’s<sup>10</sup>
derivation showed that (6) is strictly valid only for
stagnant solutions when the thickness of the so-called “reaction layer” is much
smaller than the thickness of the “diffusion layer”.  In that case the reported discrepancy<sup>12</sup> can be
explained by assuming that at higher velocities the thickness of diffusion
layer was reduced and at some point became comparable to the thickness of the
reaction layer.  This concept is
illustrated on Figure 5 where the
calculated thickness of the two boundary layers are compared.</p>

<p align=center><img
src="v1p3_files/image022.gif" width="512" height="352"></p>

<SCRIPT>comment(22)</SCRIPT><p align=left><b><a name="_Ref326129846">Figure </a>5. Thickness of the boundary layers
for pipe flow, t=20°C, pCO<sub>2</sub>=1 <i>bar</i>, d<sub>p</sub>=0.1m.</b>
</p>

<p align="center"><img
src="v1p3_files/image024.gif" width="512" height="353"></p>

<SCRIPT>comment(23)</SCRIPT><p align=left><b><a name="_Ref326131584">Figure </a>6. Boundary layer thickness ratio as a
function of velocity and temperature for pipe flow, pCO<sub>2</sub>=1 <i>bar</i>, d<sub>p</sub>=0.1m.</b></p>

<SCRIPT>comment(24)</SCRIPT><p>The thickness
of the mass transfer (diffusion) layer<sub><img
src="v1p3_files/image026.gif" width="21" height="23"></sub> shown in Figure 5 is estimated by
using the relation:</p>

<p align=right><sub><img
src="v1p3_files/image028.gif" width="60" height="44"></sub>                                                             (7<a name="delta_m"></a>)  </p>

<p align=left>Here,
D is the diffusion coefficient for carbonic acid and <i>k<sub>m</sub></i> is the mass transfer coefficient for straight pipe
flow calculated using the correlation ofBerger and Hau<sup>13</sup>  The thickness of the chemical reaction layer
<sub><img
src="v1p3_files/image030.gif" width="19" height="21"></sub> is calculated using
the relation derived by Vetter</span><sup>10</sup> for a first
order chemical reaction: </p>

<p align=right><b><sub><img
src="v1p3_files/image032.gif" width="72" height="49"></span></sub></b>                                                          (8<a name="delta_r"></a>) </p>

<p align=left>where
<b><sub><img
src="v1p3_files/image034.gif" width="23" height="21"></span></sub></b>is the rate of carbonic acid dehydration (described in more
detail below in the text).  From Figure 5 it can be seen
that under given conditions at 4 <i>m/s</i>
the two boundary layers are of the same thickness.  The ratio <sub>
<img
src="v1p3_files/image036.gif" width="73" height="24"></sub> is a strong function
of temperature as shown in Figure 6.  It is clear that for lower temperatures <sub>
<img
src="v1p3_files/image038.gif" width="55" height="23"></sub> already for
velocities larger than 1 <i>m/s</i>. Thus a
more general expression than (</span>6) is needed for the
reaction-controlled limiting current which accounts for any <sub>
<img
src="v1p3_files/image040.gif" width="47" height="23"></sub> ratio and covers a
wider range of applications.   </span></p>

<SCRIPT>comment(25)</SCRIPT><p>In order to
derive such an expression, we will assume here the following sequence of
reactions in the limiting current region:</p>

<p align=right><b><sub><img
src="v1p3_files/image042.gif" width="168" height="25"></span></sub></b>               slow
chemical reaction              (9<a
name=hydratslow></a>) </p>

<p align=right><b><sub><img
src="v1p3_files/image044.gif" width="195" height="25"></span></sub></b>         partial
electrode reaction(10<a
name=h2co3reda></a>)</p>

<SCRIPT>comment(26)</SCRIPT><p>If we further
assume that reaction (9) is a first order chemical reaction,
the rate of change of H<sub>2</sub>CO<sub>3</sub>
concentration is:</p>

<p align=right><sub><img
src="v1p3_files/image046.gif" width="137" height="41"></sub>                                                             (11<a name=rate1></a>) </p>

<SCRIPT>comment(27)</SCRIPT><p>We can assume
that the concentration of dissolved CO<sub>2</sub> is constant
for all practical purposes and denote the rate of hydration with <i>v<sub>o</sub></i> =const..  For the sake of simplicity we can drop the
subscript<sub><img
src="v1p3_files/image048.gif" width="32" height="24"></sub> so (</span>11)  becomes:</p>

<p align=right><sub><img
src="v1p3_files/image050.gif" width="84" height="23"></sub>                                                                 (12<a name="rate_eq1"></a>) </p>

<SCRIPT>comment(28)</SCRIPT><p>At equilibrium
<i>v</i>=0 , hence:</p>

<p align=right><sub><img
src="v1p3_files/image052.gif" width="63" height="23"></sub>                                                                      (13<a name="rate_eq2"></a>) </p>

<p>where <sub><img
src="v1p3_files/image054.gif" width="13" height="17"></sub> is the equilibrium
concentration of H</span><sub>2</sub>CO<sub>3</sub>. Substitution of (13) into (12) gives:</p>

<p align=right><sub><img
src="v1p3_files/image056.gif" width="163" height="43"></sub>                                             (14<a name=rate2></a>) </p>

<p>Here <i>u</i> is the nondimensional concentration of
H<sub>2</sub>CO<sub>3</sub> .  It is the gradient of <i>u</i> (concentration) at the metal surface that will give us the
desired chemical reaction limiting current.</p>

<SCRIPT>comment(29)</SCRIPT><p>To obtain the
concentration profile the steady state mass balance (Fick’s second law) for the
case of an accompanying homogeneous chemical reaction has to be solved: </p>

<p align=right><sub><img
src="v1p3_files/image058.gif" width="149" height="48"></sub>                                                (15<a name=fick1></a>) </p>

<p>For a steady
state case <sub><img
src="v1p3_files/image060.gif" width="75" height="21"></sub>.  We can further
assume that the diffusion coefficient is independent of concentration:<sub><img
src="v1p3_files/image062.gif" width="61" height="23"></sub>and that there are no temperature gradients so <sub>
<img
src="v1p3_files/image064.gif" width="63" height="23"></sub>.  Finally, by
substituting <i>v</i> from (</span>14)  into (15), the nondimensional steady
state mass balance is obtained:</p>

<p align=right> <sub><img
src="v1p3_files/image066.gif" width="128" height="47"></sub>                                                     (16<a name=fick2></a>)  </p>

<SCRIPT>comment(30)</SCRIPT><p>The boundary
conditions are:</p>

<p>at the metal surface, in the limiting current case, the
concentration of H<sub>2</sub>CO<sub>3</sub>
is approaching zero, so for</p>

<p align=right><sub><img
src="v1p3_files/image068.gif" width="37" height="19"></sub>                            
Þ      <sub><img
src="v1p3_files/image070.gif" width="67" height="40"></sub>                                                  (17<a name=bc1></a>) </p>

<p>for the bulk of the fluid due to turbulence the fluid is
well mixed so there are no concentration gradients and we can assume that all
reactions are in equilibrium, so for:</p>

<p align=right><sub><img
src="v1p3_files/image072.gif" width="47" height="23"></sub>                
Þ      <sub><img
src="v1p3_files/image074.gif" width="64" height="40"></sub>                                                   (18<a name=bc2></a>) </p>

<SCRIPT>comment(31)</SCRIPT><p>Here we have
assumed that the edge of the mass transfer boundary layer at <sub>
<img
src="v1p3_files/image075.gif" width="47" height="23"></sub> is the point where
everything is well mixed and all reactions are in equilibrium.  At this stage the present derivation departs
from the one in Vetter’s<sup>10</sup> book.  Vetter <sup>10</sup> assumes that
the fluid is well mixed and in equilibrium only for <sub>
<img
src="v1p3_files/image077.gif" width="48" height="16"></sub> that is “very far”
from the metal surface.  This is a good
assumption for stagnant solutions or laminar flow, however one can imagine that
for a high enough velocity and turbulent flow the thickness of mass transfer
layer <sub><img
src="v1p3_files/image079.gif" width="23" height="23"></sub> is of the same order
of magnitude as the reaction layer which we are calculating.  Of course by setting <sub>
<img
src="v1p3_files/image081.gif" width="59" height="23"></sub> the present
derivation follows the one in Vetter’s<sup>10</sup>  book.</p>

<SCRIPT>comment(32)</SCRIPT><p>Integration of
(16) with the boundary conditions (17) and (18) yields the nondimensional
concentration profile:</p>

<p align=right><sub><img
src="v1p3_files/image083.gif" width="201" height="44"></sub>                                             (19<a name=concprof></a>) </p>

<p>We are
interested in the limiting current which is:</p>

<p align=right><b><sub><img
src="v1p3_files/image085.gif" width="364" height="49"></span></sub></b>              (20<a name=crlc1></a>) </p>

<p>When  <b><sub><img
src="v1p3_files/image087.gif" width="87" height="25"></span></sub></b> is returned to (20) we obtain:</p>

<p align=right><b><sub><img
src="v1p3_files/image089.gif" width="155" height="27"></span></sub></b>                                                        (21<a name=crlc2></a>) </p>

<p>The original
Vetter’s<sup>10</sup> expression (6) is now recovered, however corrected
with the multiplier here called “flow factor”:</p>

<p align=right><b><sub><img
src="v1p3_files/image091.gif" width="139" height="44"></span></sub></b>                                                   (22<a name=ff2></a>) </p>

<p>which takes
into account the effect of flow on the chemical reaction limiting current.  </p>

<p align=center><img
src="v1p3_files/image093.gif" width="514" height="370"></span></p>

<p><b><a name="_Ref326132487">Figure </a>7. Flow factor as a function of
velocity and temperature for pipe flow, d<sub>p</sub>=0.1 <i>m</i>, pCO<sub>2</sub>=1
<i>bar</i>.</b></p>

<SCRIPT>comment(33)</SCRIPT><p>Assuming a
stagnant solution, <sub><img
src="v1p3_files/image095.gif" width="49" height="23"></sub>so the flow factor <i>f</i>=1
and the solution reduces to the one derived by Vetter.</span><sup>10</sup>  The sensitivity of the flow factor to
velocity and temperature is illustrated in Figure 7. </p>

<SCRIPT>comment(34)</SCRIPT><p>As a rule of
thumb in CO<sub>2</sub> applications
one can say that this correction is important for  temperatures lower than 40°C and
velocities  higher than 1 <i>m/s</i>  when
the mass transfer layer is of the similar thickness as the reaction layer.</p>

<SCRIPT>comment(35)</SCRIPT><p>Another way of
looking at the superposition of the diffusion and reaction limiting currents is
to express it in terms of a pure diffusion limiting current corrected for the
presence of a rate limiting chemical reaction <sup>14</sup> . 
By using (7) and (8) together with (21) it is obtained:</p>

<p align=right><b><sub><img
src="v1p3_files/image097.gif" width="135" height="25"></span></sub></b>                                                    (23<a name=crlc3></a>)</p>

<p align=left>Finally, the derived equations can be compared with the
measured limiting currents shown in Figure
4.  The result with and without
the derived correction is shown in Figure
8.  Although in the measured
velocity range the effect is not large it is clear that the flow factor
improves the agreement of the measurements and the theory.  </p>

<p align=center><img
src="v1p3_files/image099.gif" width="503" height="396"></p>

<p align=left><b>Figure 8. Comparison of the model prediction
and experimental results.  Conditions
the same as in Figure
4.  The points represent
measurements, the lines are the model:<br>&nbsp; red solid line - mass transfer limiting current
(Eisenberg et al.<sup>15</sup>),<br>&nbsp; black dotted line - mass transfer + chemical
reaction limiting current (equation 6),<br>&nbsp; black solid line - mass transfer + corrected
chemical reaction limiting current (equation 21).</b></p>

<SCRIPT>comment(36)</SCRIPT><h3>Conclusions</h3>

<p>It was observed
experimentally that a chemical reaction limiting current can be affected by flow.  A new more general expression was
derived for the superposition of the diffusion and chemical reaction controlled
limiting currents.  It was found that the their interaction in
the case of CO<sub>2</sub> corrosion is
significant at temperatures lower than 40°C and velocities  higher than 1 <i>m/s</i>  when the mass transfer layer is of the
similar thickness as the reaction layer.</p>

<SCRIPT>comment(37)</SCRIPT><h3>Nomenclature</h3>

<div align="center">
  <center>

<table border="0" cellpadding="2" cellspacing="1">
  <tr>
    <td width="18%"><i>c</i></td>
    <td width="82%"> concentration,<i> mol/m<sup>3</sup></i>;</td>
  </tr>
  <tr>
    <td width="18%">&nbsp;<sub><img
src="v1p3_files/image103.gif" width="13" height="17"></sub></td>
    <td width="82%"> equilibrium
concentration,<i> mol/m<sup>3</sup></i>;</td>
  </tr>
  <tr>
    <td width="18%"><i>D               &nbsp;</i></td>
    <td width="82%">&nbsp;diffusion
coefficient, <i>m<sup>2</sup>/s </i>;</td>
  </tr>
  <tr>
    <td width="18%"><i>f</i>&nbsp;</td>
    <td width="82%"> flow factor;</td>
  </tr>
  <tr>
    <td width="18%"><sub><b><img
src="v1p3_files/image105.gif" width="13" height="13"></b></sub></td>
    <td width="82%"> Faraday constant (96490 <i>C/equiv.</i>);</td>
  </tr>
  <tr>
    <td width="18%"><sub><img
src="v1p3_files/image107.gif" width="21" height="24"></sub></td>
    <td width="82%"> chemical reaction
limiting current density, <i>A/m<sup>2
</sup></i>;</td>
  </tr>
  <tr>
    <td width="18%"><sub><img
src="v1p3_files/image109.gif" width="16" height="21"></sub></td>
    <td width="82%"> forward
reaction rate (CO<sub>2</sub>hydration reaction), <i>1/s
</i>;</td>
  </tr>
  <tr>
    <td width="18%"><sub><img
src="v1p3_files/image110.gif" width="23" height="21"></sub></td>
    <td width="82%"> backward
reaction rate (H<sub>2</sub>CO<sub>3</sub>  dehydration reaction), <i>1/s </i>;</td>
  </tr>
  <tr>
    <td width="18%"><i>k<sub>m</sub></i></td>
    <td width="82%"> mass
transfer coefficient, <i>m/s </i>;</td>
  </tr>
  <tr>
    <td width="18%"><i>u</i></td>
    <td width="82%"> nondimensional concentration;</td>
  </tr>
  <tr>
    <td width="18%"><i>v</i></td>
    <td width="82%"> chemical reaction rate, <i>mol/(s m<sup>3</sup>)</i>;</td>
  </tr>
  <tr>
    <td width="18%"><i>x</i></td>
    <td width="82%"> distance from the metal
surface, <i>m</i> ;</td>
  </tr>
  <tr>
    <td width="18%"><sub><img
src="v1p3_files/image111.gif" width="21" height="23"></sub></td>
    <td width="82%"> thickness
of the mass transfer (diffusion) layer, <i>m</i>;</td>
  </tr>
  <tr>
    <td width="18%"><sub><img
src="v1p3_files/image112.gif" width="19" height="21"></sub></td>
    <td width="82%"> thickness
of the chemical reaction layer, <i>m</i>;</td>
  </tr>
  <tr>
    <td width="18%"><sub><img
src="v1p3_files/image113.gif" width="73" height="24"></sub></td>
    <td width="82%">ratio of the diffusion and reaction layers;</td>
  </tr>
</table>

  </center>
</div>

<SCRIPT>comment(38)</SCRIPT><h3>References</h3>

<p>1<a name=lunde></a>. A. Dugstad, L. Lunde and S.
Nesic, “Control of Internal Corrosion in Multi-Phase Oil and Gas Pipelines”,
Proceedings of the conference Prevention of Pipeline Corrosion, Gulf Publishing
Co., 1994.</p>

<p>2<a
name=dewa1></a>. C. deWaard and D. E.
Milliams, Corrosion, 31 (1975): p.131.</p>

<p>3<a
name=schm></a>. G. Schmitt and B.
Rothman, Werkstoffe und Korrosion, 28 (1977): p.816.</p>

<p>4<a
name=eriksrud></a>. E. Eriksrud and T.
Søntvedt, &quot;Effect of Flow on CO<sub>2</sub> Corrosion Rates in Real and Synthetic
Formation Waters&quot;, Advances in CO<sub>2</sub> Corrosion, Vol. 1. Proceedings of the
Corrosion /83 Symposium on CO<sub>2</sub> Corrosion in the Oil and Gas Industry, Editors: R. H.
Hausler, H. P. Goddard , p.20, (Houston, TX: NACE, 1984).</p>

<p>5<a
name=hurlen></a>. T. Hurlen, S. Gunvaldsen, R.
Tunold, F. Blaker and P. G. Lunde, J. Electroanal. Chem., 180 (1984): p. 511.</p>

<p>6<a
name=gray2></a>. L. G. S. Gray, B. G.
Anderson, M. J. Danysh, P. G. Tremaine, “Mechanism of Carbon Steel Corrosion in
Brines Containing Dissolved Carbon Dioxide at pH 4”, Corrosion/89, paper no.
464, (Houston, TX: NACE International, 1989).</p>

<p>7<a
name=gray1></a>.  L. G. S. Gray, B. G. Anderson, 
M. J. Danysh and P. R. Tremaine, &quot;Effect of pH and Temperature on
the Mechanism of Carbon Steel Corrosion by Aqueous Carbon Dioxide&quot;, Corrosion/90,
paper no. 40, (Houston, TX: NACE International, 1990).</p>

<p>8<a
name=bonis></a>. M. R. Bonis and J. L. Crolet,
“Basics of the Prediction of the Risks of CO<sub>2</sub> Corrosion in
Oil and Gas Wells”, Corrosion/89, paper no. 466, (Houston, TX: NACE
International, 1989).</p>

<p>9<a
name=stern></a>. M. Stern,  J.Electrochem. Soc., 102 (1955): p.609.</p>

<p>10<a
name=vetter></a>. K. J. Vetter,
Electrochemical Kinetics, Theoretical Aspects, Sections 1, 2, and 3 of
Electrochemical Kinetics: Theoretical and Experimental Aspects, translation
from German, (New York: Academic Press, 1967): pp.235-250.</p>

<p>11<a name=snemodel></a>. S. Nesic, J. Postlethwaite and S.
Olsen,<b> “</b>An Electrochemical Model for
Prediction of CO<sub>2</sub> Corrosion”, Corrosion/95,
paper no. 131, (Houston, TX: NACE International, 1995).</p>

<p>12<a
name=snegtsje></a>. S. Nesic, G. Th. Solvi, and J.
Enerhaug,<b> “</b>Comparison of the
Rotating Cylinder and Pipe Flow Tests for Flow Sensitive CO<sub>2</sub> Corrosion”, Corrosion/95, paper no. 130, (Houston,
TX: NACE International, 1995).</p>

<p>13<a
name=berger></a>. F. P. Berger and K.-F.
F.-L Hau, Int. J. Heat Mass Transfer, 20 (1977): p.1185.</p>

<p>14<a name=pots></a>. B. F. M. Pots,<b> “</b>Mechanistic Models for the Prediction
of CO<sub>2</sub> Corrosion
Rates under Multi-Phase Flow Conditions”, Corrosion/95, paper no. 137,
(Houston, TX: NACE International, 1995).</p>

<p>15<a
name=eisen></a>. M. Eisenberg, C. W.
Tobias and C. R. Wilke, J. Electrochem. Soc., 101 (1954): p. 306.</p>

  <SCRIPT>footer()</SCRIPT></html>