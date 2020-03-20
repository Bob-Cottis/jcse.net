<?php 
session_start();
include_once('jrnl_subs.php');
$logged_in=is_loggedin();
?>
<html>
<head>
<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
<title>JCSE Volume 3 Paper 24</title>
<SCRIPT src="/getcomm.php?vol=3&pap=24"></SCRIPT>
<SCRIPT src="/jsinc/jcsesubs.js.php"></SCRIPT>
<SCRIPT>
getcommentmode();</SCRIPT></HEAD><body>
<script>var lgi=<?php if ($logged_in) { echo('true');} else { echo('false');} ?>;</script>
<script src="/jsinc/writeheader.js"></script><?php ggl_ad(); ?>
  <h2>Volume 3 Paper 24</h2>
  <script>ifnotmode(3,'<p>Submitted 6th December 2002<br>');</script>
  <hr>
<h1>CO<sub>2</sub> Corrosion of Pipelines under a Disbonded
Coating in the Presence of a Precipitate</h1>

<p>F.M. Song,<sup>a,b</sup> D.W. Kirk,<sup>a</sup> J.W. Graydon,<sup>a</sup>
and D.E. Cormack<sup>a</sup></p>

<p><sup>a</sup> University of Toronto, Chemical Engineering
and Applied Chemistry, 200 College Street, Toronto, Ontario, Canada M5S 3E5</p>

<p><sup>b</sup> Present address: Metallurgical and Materials
Eng./388, University of Nevada Reno, Reno, NV 89557 email: <SCRIPT>mailto2('songfm','yahoo.com');</SCRIPT>.</p>

<SCRIPT SRC="../../jsinc/AuthNote.js"></SCRIPT>
<SCRIPT>notify();</SCRIPT><p><span style="background-color: #FFFF00">[1: There 
were very many small equations in the text - where possible these have been 
converted to normal text - please check carefully for any </span>
<span style="background-color: #FFFF00">undesirable</span><span style="background-color: #FFFF00"> 
changes that this has introduced]</span></p>

<h2>Abstract</h2>

<SCRIPT>comment()</SCRIPT><p>CO<sub>2</sub> corrosion is a significant problem of
coated pipelines for the transport of petroleum, gas and water. The corrosion
often occurs under a precipitate of either ferrous carbonate or ferrous
hydroxide or both. Although neither precipitate provides a good barrier to the
transport of oxygen, carbon dioxide and ions since they are loose and porous,
the precipitate(s) may affect corrosion by determination of pH at the steel
surface. The goal of this work is to determine the conditions for the formation
of the precipitates.</p>

<SCRIPT>comment()</SCRIPT><p>For steel corrosion under a disbonded coating, there is a
critical pressure ratio of oxygen to carbon dioxide that separates the two
precipitates. When oxygen diffusion across the disbonded coating controls the
corrosion rate, the ratio is 9/20, above which the precipitate is ferrous
hydroxide. The precipitate is ferrous carbonate otherwise. The correspondent
ratio is 14 if oxygen diffusion across the solution boundary layer under the
disbonded coating controls the corrosion rate, when the coating is so
deteriorated. </p>

<SCRIPT>comment()</SCRIPT><p>For the steel corrosion not limited by oxygen transport,
charge transfer of hydrogen ion reduction due to dissolved carbon dioxide in
solution may control the corrosion rate. Thermodynamic calculations are
permitted to determine the solution chemistry and conditions for precipitation.
It was found that regardless of initial amount of carbon dioxide in the
solution, the solution pH increases with the extent of corrosion due to the
hydrogen ion reduction. The formation of iron complexes in the system has
insignificant effect on the solution chemistry.</p>

<SCRIPT>comment()</SCRIPT><p>With zero carbon dioxide, the precipitate is ferrous
hydroxide alone and the saturated pH is about 9.05 with consideration of all
complexes. With certain initial amount of carbon dioxide, the first precipitate
is ferrous carbonate and the pH at the precipitation varies with the initial carbon
dioxide pressure. With continuation of the corrosion, ferrous hydroxide and
ferrous carbonate co-precipitate and the pH is fixed at 8.8, regardless of
further corrosion.</p>

<SCRIPT>comment()</SCRIPT><p>The thermodynamic calculations also show that the time for
a precipitate to saturate a boundary layer of 0.5 mm in thickness is short,
less than 1.5 hours for a corrosion rate of 0.01 mm/y and for a system with a
partial pressure of carbon dioxide below 0.23 atm. Hence, corrosion of coated
pipelines normally occurs under a precipitate.</p>

<SCRIPT>comment()</SCRIPT><p><b>Keywords</b>: corrosion, steel, coating, carbon
dioxide, oxygen, precipitation, ferrous carbonate.</p>

<h3><a name="_Toc480181287"></a><a
name="_Toc480181229">Introduction</a></h3>

<SCRIPT>comment()</SCRIPT><p><a name=equations></a>Carbon dioxide and oxygen are two crucial species to cause
corrosion of coated pipelines for the transport of petroleum, gas and water, by
diffusion through a disbonded coating. Two precipitates, ferrous carbonate and
ferrous hydroxide, are possible during the corrosion. The third precipitate,
ferric hydroxide, is neglected because it is often present as a suspension in
the solution and does not affect the corrosion rate significantly.<sup>[1]</sup></p>

<SCRIPT>comment()</SCRIPT><p>The precipitate(s) of either ferrous carbonate or ferrous
hydroxide or both may have significant impact on the steel corrosion rate
because it may determine the pH at the steel surface which then affects the
corrosion rate. The conditions for the formation of a precipitate have been
investigated in this work. The results from this work have been important and
provided bases for the development of a more comprehensive corrosion model
where hydrogen ion reduction and carbonic acid reduction are significant
contributors to the corrosion rate. This comprehensive model has been prepared
as papers and submitted elsewhere.<sup>[2-4]</sup></p>

<SCRIPT>comment()</SCRIPT><p>In this work, two cases are studied in the aim to
determine the type of precipitate(s) under a disbonded coating: (1) corrosion
control by oxygen diffusion, and (2) corrosion control by charge transfer of
hydrogen ion reduction. These two cases are described as below, starting with
corrosion control by oxygen diffusion.</p>

<h3>Precipitation with Corrosion
Control by Oxygen Diffusion</h3>

<SCRIPT>comment()</SCRIPT><p>The rate of pipe corrosion under a disbonded coating is
often controlled by oxygen diffusion through the disbonded coating (Figure 1).
Proportional to the corrosion rate, the flux of oxygen diffusion obeys Fick�s
first law:<sup>[5]</sup></p>

<SCRIPT>comment()</SCRIPT><p><sub>
<img
src="v3p24_files/image001.gif" width="293" height="51"></sub>���������������������������������������������������������� (1)</p>

<SCRIPT>comment()</SCRIPT><p>where J<sub>O2</sub>, p<sub>CO2</sub>, p<sub>O2</sub>, 
&#916;p<sub>O2</sub>,<sub> </sub>p<sub>O2</sub><sup>o</sup>,<sub> </sub>y�and
<font face="Times New Roman">&#948;<sub>c</sub></font>�are diffusion flux
of oxygen, permeability of the coating to oxygen, oxygen partial pressure
within the coating, oxygen pressure drop across the coating, oxygen pressure in
soil, distance from pipe surface, and thickness of the coating, respectively.</p>

<SCRIPT>comment()</SCRIPT><p>The oxygen diffusion flux can be converted to an actual
corrosion rate through a relation: r=1.173 n<sub>O2</sub> FJ<sub>O2</sub>, where 
r, n<sub>O2</sub>�and F�are
corrosion rate, number of electrons transferred for oxygen reduction, and
Faraday�s constant, respectively. 1.173 is a conversion coefficient from the
current density unit, A/m<sup>2</sup>, to the corrosion rate unit, mm/y.</p>

<SCRIPT>comment()</SCRIPT><p>When oxygen diffusion across a solution boundary layer
under the disbonded coating controls the corrosion rate (Figure 1), the
diffusion flux can be calculated from:</p>

<SCRIPT>comment()</SCRIPT><p><sub>
<img
src="v3p24_files/image012.gif" width="224" height="52"></sub>��������������������������������������������������������������������������� (2)</p>

<SCRIPT>comment()</SCRIPT><p>where &#916;p<sub>O2</sub>�is oxygen pressure drop across
the boundary layer. D<sub>O2</sub>, H<sub>O2</sub>�and
<font face="Times New Roman">&#948;<sub>s</sub></font>�are diffusion
coefficient of oxygen within the solution boundary layer, Henry�s law constant
for oxygen, and thickness of the boundary layer, respectively. </p>

<SCRIPT>comment()</SCRIPT><p>Equations (1-2) can be applied to carbon dioxide directly.
Then, the subscript �<sub>O2</sub>� for oxygen should be
substituted by �<sub>CO2</sub>�.</p>

<SCRIPT>comment()</SCRIPT><p>When diffusion of either oxygen or carbon dioxide is
across a disbonded coating and at the same time, across the solution boundary
layer under the disbonded coating, the overall diffusion flux of either gas J<sub>g</sub>�can be calculated
from: <sub><img src="v3p24_files/image019.gif" align="middle" width="140" height="49"></sub>. 
J<sub>g-HPDE</sub>&nbsp;is
the diffusion flux of either gas across the disbonded coating and J<sub>g-H2O</sub>�is the
diffusion flux across the solution boundary layer. J<sub>g-HPDE</sub>�and J<sub>g-H2O</sub>�can be
calculated respectively from Equations (1) and (2).� This overall diffusion
will not be considered in this work. J<sub>g</sub>�is dependent on
<font face="Times New Roman">&#948;<sub>c</sub>/&#948;<sub>s</sub></font>�and is
calculable from J<sub>g-HPDE</sub>�and J<sub>g-H2O</sub>.</p>

<SCRIPT>comment()</SCRIPT><p>When oxygen and carbon dioxide both diffuse across a
disbonded coating or a boundary layer, the type of precipitate on the pipe
surface can be determined from comparison of the diffusion fluxes of oxygen and
carbon dioxide through either the disbonded coating or the boundary layer. The
comparison of diffusion fluxes needs the following stoichiometry in solution:</p>

<h6><sub><img src="v3p24_files/image023.gif" width="212" height="28"></sub></span></h6>

<h6><sub><img
src="v3p24_files/image024.gif" width="233" height="25"></sub></h6>

<SCRIPT>comment()</SCRIPT><p><sub>
<img
src="v3p24_files/image025.gif" width="192" height="24"></sub>����������������������������������������������������������������������������������� (3)</p>

<SCRIPT>comment()</SCRIPT><p>Equation (3) represents the combination of the overall
processes of carbon dioxide dissolution and the two-step carbonic acid
dissociation, and the overall corrosion reactions, including oxygen reduction
and iron oxidation. Reductions of hydrogen ion and carbonic acid are neglected
due to their less significant role in corrosion than oxygen. Equation (3)
indicates that at steady-state, if oxygen diffusion controls the corrosion rate
and the diffusion rate is greater than half the carbon dioxide diffusion rate,
or J<sub>O2</sub>/J<sub>CO2</sub>&gt;0.5,
the steel surface is in direct contact with the precipitate of ferrous
hydroxide. This is because carbonate ions formed from dissolved carbon dioxide
cannot combine all ferrous ions to form ferrous carbonate and the excessive
ferrous ions are present as ferrous hydroxide on the steel surface. The steel
surface is in direct contact with ferrous carbonate if the oxygen diffusion
rate is less than half the carbon dioxide diffusion rate or J<sub>O2</sub>/J<sub>CO2</sub>&lt;0.5, where there
are excessive carbonate ions.</p>

<SCRIPT>comment()</SCRIPT><p>The diffusion rate ratio of oxygen to carbon dioxide, 
J<sub>O2</sub>/J<sub>CO2</sub>=0.5, can be
converted to a pressure drop ratio through a coating or through a solution
boundary layer.</p>

<SCRIPT>comment()</SCRIPT><p>�(1) If the diffusion of oxygen and carbon dioxide is
across a new high density polyethylene (HDPE) coating, the pressure drop ratio
of oxygen to carbon dioxide is, based on <sub>
<img
src="v3p24_files/image027.gif" align="middle" width="125" height="45"></sub>=0.5 (Equation (1)), <sub>
<img src="v3p24_files/image028.gif" align="middle" width="99" height="45"></sub>=9/20. The
parameters useful for the above calculation are given in Table 1. This pressure
drop ratio indicates that the precipitate is ferrous hydroxide if oxygen
pressure is greater than 9/20 times of carbon dioxide pressure or p<sub>O2</sub>/p<sub>CO2</sub>&gt;9/20,
where oxygen and carbon dioxide are greatly consumed under the disbonded
coating and each has a nearly zero pressure. The precipitate is ferrous
carbonate otherwise.</p>

<p align=center><a
name="_Toc482158168">TABLE 1 Transport
Parameters of O<sub>2</sub> and CO<sub>2</sub> at 25 </a>�C</p>

<div>

<div align="center">
  <center>
  <table border="0" cellpadding="8" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" id="AutoNumber1">
    <tr>
      <td style="border-top-style: solid; border-top-width: 1; border-bottom-style: solid; border-bottom-width: 1">&nbsp;</td>
      <td style="border-top-style: solid; border-top-width: 1; border-bottom-style: solid; border-bottom-width: 1">&nbsp; <sub>
      <img src="v3p24_files/image030.gif" align="middle" width="47" height="25"></sub>�</span><font face="Times New Roman">�</font>10<sup>11</sup> (in HDPE)</td>
      <td style="border-top-style: solid; border-top-width: 1; border-bottom-style: solid; border-bottom-width: 1">
      H�(in H<sub>2</sub>O) </td>
      <td style="border-top-style: solid; border-top-width: 1; border-bottom-style: solid; border-bottom-width: 1">
<sub><img src="v3p24_files/image032.gif" align="middle" width="32" height="25"></sub></span><font face="Times New Roman">�</font>10<sup>9</sup> (in H<sub>2</sub>O)</td>
    </tr>
    <tr>
      <td style="border-top-style: solid; border-top-width: 1">O<sub>2</sub>
      </td>
      <td style="border-top-style: solid; border-top-width: 1">&nbsp;&nbsp;&nbsp; 
      1.36 </td>
      <td style="border-top-style: solid; border-top-width: 1">&nbsp;&nbsp;&nbsp;&nbsp; 
      0.8074 </td>
      <td style="border-top-style: solid; border-top-width: 1">&nbsp;&nbsp;&nbsp; 
      1.96</td>
    </tr>
    <tr>
      <td>reference </td>
      <td>&nbsp;&nbsp;&nbsp; 5</td>
      <td>&nbsp;&nbsp;&nbsp; 6</td>
      <td>&nbsp;&nbsp;&nbsp; 7</td>
    </tr>
    <tr>
      <td>CO<sub>2</sub></td>
      <td>&nbsp;&nbsp;&nbsp; 1.22 </td>
      <td>&nbsp;&nbsp;&nbsp;&nbsp; 0.02952 </td>
      <td>&nbsp;&nbsp;&nbsp; 1.96</td>
    </tr>
    <tr>
      <td style="border-bottom-style: solid; border-bottom-width: 1">reference:
      </td>
      <td style="border-bottom-style: solid; border-bottom-width: 1">&nbsp;&nbsp;&nbsp; 
      5&nbsp; </td>
      <td style="border-bottom-style: solid; border-bottom-width: 1">&nbsp;&nbsp;&nbsp; 
      6</td>
      <td style="border-bottom-style: solid; border-bottom-width: 1">&nbsp;&nbsp;&nbsp; 
      7</td>
    </tr>
  </table>
  </center>
</div>

</div>

<SCRIPT>comment()</SCRIPT><p>The unit of p<sub>O2Ref</sub> : mol/m�s�atm, E<sub>c</sub>: kJ/mol, 
H<sub>O2</sub>: atm�m<sup>3</sup>/mol and D<sub>O2</sub>: m<sup>2</sup>/s.
<span style="background-color: #FFFF00">[2: 
As </span><span style="background-color: #FFFF00">the</span><span style="background-color: #FFFF00"> 
data refer to both O</span><sub><span style="background-color: #FFFF00">2</span></sub><span style="background-color: #FFFF00"> 
and CO</span><sub><span style="background-color: #FFFF00">2</span></sub><span style="background-color: #FFFF00"> 
should it just be P, H and D?]</span></p>

<SCRIPT>comment()</SCRIPT><p>Since oxygen pressure in soil is up to 0.21 atm, the
precipitate must be ferrous carbonate if carbon dioxide pressure is higher than
0.467 atm. The correspondent pressures of oxygen and carbon dioxide are given
in Table 2, together with the corresponding oxygen pressure, 0.45 atm, for a
carbon dioxide pressure of 1 atm.</p>

<p align=center><a
name="_Toc482158169">TABLE 2 </a>Correspondent O<sub>2</sub> and CO<sub>2</sub>
Pressures at Transition between Precipitates</p>

<div>

<div align="center">
  <center>
  <table border="0" cellpadding="8" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" id="AutoNumber2">
    <tr>
      <td style="border-top-style: solid; border-top-width: 1; border-bottom-style: solid; border-bottom-width: 1">&nbsp;</td>
      <td style="border-top-style: solid; border-top-width: 1; border-bottom-style: solid; border-bottom-width: 1">
      Across HDPE Coating</td>
      <td style="border-top-style: solid; border-top-width: 1; border-bottom-style: solid; border-bottom-width: 1">
      Across HDPE Coating</td>
      <td style="border-top-style: solid; border-top-width: 1; border-bottom-style: solid; border-bottom-width: 1">
      Across H2O Layer</td>
    </tr>
    <tr>
      <td style="border-top-style: solid; border-top-width: 1">O2 (atm)</td>
      <td style="border-top-style: solid; border-top-width: 1">0.21</td>
      <td style="border-top-style: solid; border-top-width: 1">0.45 </td>
      <td style="border-top-style: solid; border-top-width: 1">0.21</td>
    </tr>
    <tr>
      <td style="border-bottom-style: solid; border-bottom-width: 1">CO2 (atm)</td>
      <td style="border-bottom-style: solid; border-bottom-width: 1">0.467 </td>
      <td style="border-bottom-style: solid; border-bottom-width: 1">1</td>
      <td style="border-bottom-style: solid; border-bottom-width: 1">0.015</td>
    </tr>
  </table>
  </center>
</div>

</div>

<SCRIPT>comment()</SCRIPT><p>�(2) If the diffusion is across a solution boundary layer,
based on <sub><img src="v3p24_files/image035.gif" align="middle" width="192" height="45"></sub>=0.5
(Equation (2)), the pressure drop ratio of oxygen to carbon dioxide becomes <sub>
<img src="v3p24_files/image036.gif" align="middle" width="131" height="45"></sub>=14, where D<sub>CO2</sub>�and 
H<sub>CO2</sub>�are carbon
dioxide diffusion coefficient and Henry�s law constant in the solution (Table
1). The pressure drop ratio indicates that at steady-state, if oxygen pressure
is greater than 14 times of carbon dioxide pressure, the precipitate is ferrous
hydroxide. The precipitate is ferrous carbonate otherwise.</p>

<SCRIPT>comment()</SCRIPT><p>If oxygen pressure is 0.21 atm, the carbon dioxide
pressure is, based on p<sub>O2</sub>/p<sub>CO2</sub>=14, 0.015 atm (Table 2). Since
this carbon dioxide pressure is smaller than its partial pressure in the
atmosphere (0.03 atm), the precipitate for steel corrosion in the atmosphere
should be ferrous carbonate if ferrous ion oxidation did not occur. The product
is in fact ferric hydroxide or ferric carbonate because ferrous ion oxidation
does occur.<sup>[1]</sup></p>

<SCRIPT>comment()</SCRIPT><p>(3) The above results indicate that the pressure drop
ratio of oxygen to carbon dioxide across a boundary layer is much greater than
that across an HDPE coating. The reason is that carbon dioxide has an equivalent
diffusion coefficient but a much greater solubility in solution than oxygen,
while the permeabilities of both species in the HDPE coating are equivalent.
These substantially different ratios of pressure drop indicate that a much
smaller carbon dioxide pressure than oxygen in a solution boundary layer could
lead to precipitation of ferrous carbonate. However, this rule can be
inaccurate considering carbon dioxide hydration is a slow step in CO<sub>2</sub>
corrosion. In any event, this rule may become a useful guide when only
transport parameters are available. The combination of diffusion of oxygen and
carbon dioxide together with carbon dioxide hydration and corrosion was modeled
and submitted elsewhere.<sup>[3]</sup></p>

<h3>Precipitation with Corrosion
Control by Hydrogen Ion Reduction</h3>

<SCRIPT>comment()</SCRIPT><p>When charge transfer of hydrogen ion reduction controls
the corrosion rate, the transport of each species in the solution boundary
layer under a disbonded coating is fast and each concentration is uniform.
Then, thermodynamic calculations are permitted for investigation of steel
corrosion in the solution layer.</p>

<SCRIPT>comment()</SCRIPT><p>Thermodynamic calculations have been extensively used to
describe the equilibrium conditions for metal corrosion,<sup>[10]</sup> where
the relative abundance of the species is normally described for a single
reaction. Recently, numerical methods have greatly expanded the use of
thermodynamics since they make it possible to minimize the total free energy of
all species in a system. The �VCS� software (version 2.0),<sup>[11]</sup> an
algorithm developed using the free-energy minimization method, has been used in
this work to calculate the thermodynamic chemistry in an iron-corroding
solution with dissolved carbon dioxide. The effect of iron complex ions on the
solution chemistry has also been investigated.</p>

<SCRIPT>comment()</SCRIPT><p>The calculation for iron corrosion is performed for a
total pressure of 1 atm and a temperature of 25�C
and for the two cases: (1) corrosion in deionized water and (2) corrosion in a
solution with dissolved carbon dioxide.</p>

<h4>(1) Steel Corrosion in Deionized
Water</h4>

<SCRIPT>comment()</SCRIPT><p>For steel corrosion in deionized water, it starts as a
fresh specimen is exposed to deionized water. The corrosion process is shown in
Figure 2. The variation of concentrations with the extent of corrosion or pH is
shown in Figures 3-4, starting from left to right. The initial solution pH is
7. As iron corrodes, the corrosion products, ferrous ions, dissolve into
solution and at the same time, hydrogen ion at the steel surface is reduced to
hydrogen gas. The concentrations of ferrous ion and pH increase with the extent
of corrosion. The solution finally becomes saturated at a pH of 9.05 and a
total ferrous ion concentration of 7.66 <font face="Times New Roman">�</font>
10<sup>-6</sup> mol/l. The solution pH and the concentration of each species
then remain fixed even when the corrosion continues. The reason that pH and
solution composition are fixed is that in the thermodynamic system, the degree
of freedom is zero according to the phase rule of Gibbs, f=c-p+n. f, c, p and n are
the degree of freedom, number of independent species, number of phases and
number of environmental factors (temperature and pressure) respectively. In
this binary system (H<sub>2</sub>O and iron) or c=2, two phases (liquid phase
and solid-Fe(OH)<sub>2</sub>) exist or p=2 when ferrous hydroxide precipitates.
The degree of freedom is zero because n=0 at a given temperature and pressure.
Figures 3-4 also show that in this corrosion process, the concentration of each
iron complex is much smaller than that of free ferrous ion.</p>

<SCRIPT>comment()</SCRIPT><p>The time required for ferrous hydroxide (corrosion
product) to saturate a 0.5 mm thick water layer was calculated, which provides
information on whether iron corrosion normally occurs under a precipitate. To
saturate the boundary layer with ferrous hydroxide, it requires the dissolution
of 2.751<font face="Times New Roman">�</font>10<sup>-8</sup> mm thickness
of iron. This takes 1.4 minutes at a corrosion rate of 0.01 mm/y.<sup>[12]</sup>
This result suggests that corrosion of steel should normally occur under a
precipitate because the water layer should be quickly saturated after an iron
surface is exposed to the solution layer.</p>

<h4>(2) Steel Corrosion in a Solution
with Dissolved Carbon Dioxide</h4>

<SCRIPT>comment()</SCRIPT><p>For steel corrosion under a solution boundary layer
containing dissolved carbon dioxide (Figure 5), the variation of the
concentration of each species with pH is calculated and shown in Figure 6. The
solution is initially saturated with carbon dioxide of 0.23 atm and the
solution pH is 4.22. With increasing extent of corrosion or as the abscissa
shifts from left to right, the ferrous ion concentration and pH increase.
Ferrous ion concentration increases because ferrous ion is soluble; pH
increases because hydrogen ion is reduced to hydrogen gas. At a certain
corrosion extent, the ferrous ion concentration reaches a maximum of 6.8<font face="Times New Roman"> 
�</font>10<sup>-4</sup> mol/l and the pH then is
5.8. At the maximum concentration of ferrous ion, ferrous carbonate begins to
precipitate. As corrosion continues, ferrous ion concentration decreases while pH
continue to increase. This increase of pH results from continuous hydrogen ion
reduction. Ferrous ion concentration decreases because of the following
reasons. Ferrous ion forms from iron oxidation, and by charge, the formation of
one ferrous ion requires reduction of two hydrogen ions. Since the hydrogen
ions are formed from dissociation of both carbonic acid and bicarbonate ion,
the reduction of two hydrogen ions results in formation of more than one
carbonate ion. Therefore, there is a deficit for ferrous ions as they combine
with carbonate ions to form ferrous carbonate to precipitate. To compensate,
ferrous ions in the solution must be partially consumed and the concentration
of ferrous ion must decrease. When the corrosion further continues, ferrous
carbonate and ferrous hydroxide begin to co-precipitate and the pH is fixed at
8.8 and ferrous ion concentration at 2.04<font face="Times New Roman"> �</font>10<sup>-4</sup>
mol/l. Regardless of continuation of the corrosion, the concentration of each
species is fixed in the system. The reason can also be explained from the phase
rule of Gibbs, f=c-p+n. In this system, there are
three independent components (iron, carbon dioxide and water) or c=3, and three
phases (liquid phase and two solid phases, ferrous carbonate and ferrous
hydroxide) or p=3. The degree of freedom of the system is zero or f=0 because
n=0 at a given temperature and pressure.</p>

<SCRIPT>comment()</SCRIPT><p>In the corrosion process, iron complexes are insignificant
because each of their concentrations is much smaller than that of free ferrous
ion (Figure 7). Compared to corrosion in de-ionized water, the free ferrous ion
concentration is greater in the presence of dissolved carbon dioxide and the
principal anion is bicarbonate ion. </p>

<SCRIPT>comment()</SCRIPT><p>The time required for ferrous carbonate to saturate a 0.5
mm thick solution layer is about 88.8 minutes at a corrosion rate of 0.01 mm/y.<sup>[12]</sup>
This limited time indicates that pipe corrosion should usually occur under a
ferrous carbonate precipitate or under the co-precipitate of ferrous carbonate
and ferrous hydroxide.</p>

<SCRIPT>comment()</SCRIPT><p>The calculated results from the VCS software have shown
that the free ferrous ion concentration in the ferrous carbonate-saturated
solution is much greater than that of an iron complex ion. Hence, in the
calculation of equilibrium concentrations, the VCS software can be simplified
by neglecting the complex ions. A simplified model has been developed and used
to evaluate the solution composition.<sup>[2]</sup></p>

<h3>Conclusions</h3>

<SCRIPT>comment()</SCRIPT><p>For pipeline corrosion, with its rate controlled by oxygen
diffusion across a disbonded HDPE coating, the precipitate is ferrous hydroxide
if oxygen pressure is greater than 9/20 times of carbon dioxide. The
precipitate is ferrous hydroxide otherwise. If the corrosion rate is controlled
by oxygen diffusion across the solution layer under the disbonded coating, the
precipitate is ferrous hydroxide if oxygen pressure is greater than 14 times of
carbon dioxide. The precipitate is ferrous carbonate otherwise. This estimation
for the type of precipitate may not be accurate with consideration of carbon
dioxide hydration (slow) but would be useful if there were no information
available on carbon dioxide hydration.</p>

<SCRIPT>comment()</SCRIPT><p>The solution pH increases with increasing extent of
corrosion. During corrosion, the concentration of each iron complex is
significantly smaller than free ferrous ion. The role of complex species in
iron corrosion is insignificant and can be neglected.</p>

<SCRIPT>comment()</SCRIPT><p>The time is short, less than two hours, for a 0.5 mm thick
water layer on the iron surface to be saturated with a precipitate, ferrous
hydroxide or ferrous carbonate. Hence, pipe corrosion often occurs under a
precipitate.</p>

<h4>References</h4>

<p>1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; F.M. Song, D.W. Kirk, J.W. Graydon,
D.E. Cormack, Corrosion 58 (2) (2002) 145-155.</p>

<p>2.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
F.M. Song, D.W. Kirk, J.W. Graydon,
D.E. Cormack, �CO<sub>2</sub> Corrosion of Bare Steel under an Aqueous Boundary
Layer�, Corrosion, submitted.</p>

<p>3.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
F.M. Song, D.W. Kirk, J.W. Graydon,
D.E. Cormack, Journal of the Electrochemical Society, 149(11) (2002) B479-B486.</p>

<p>4.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
F.M. Song, D.W. Kirk, J.W. Graydon,
D.E. Cormack, �CO<sub>2</sub> Corrosion of Bare Steel under an Aqueous Boundary
Layer with Oxygen and Cathodic Protection�, Corrosion, submitted.</p>

<p>5.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
J. Brandrup, E.H. Immergut,
Polymer Handbook, 3<sup>rd</sup> (ed) (John Wiley &amp; Sons, Inc, 1989)
VI/435-444.</p>

<p>6.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
M.D. Koretsky, F. Abooameri, J.C. Westall,
Corrosion 55(1) (1999): 52-64.</p>

<p>7.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
P. Lorbeer, W.J. Lorenz, Electrochimica
Acta 25 (1980): 375-381.</p>

<p>8.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
R. Parsons, Handbook of
Electrochemical Constants (London: Butterworths Scientific Publications, 1959):
47, 66-67.</p>

<p>9.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
S. Nesic, J. Postlethwaite, S.
Olsen, Corrosion 52 (4) (1996): 280-294.</p>

<p>10.&nbsp;
G.M. Murray, G.K. Schweitzer, F.K.
Heacker, Corrosion 46 (2) (1990) 95-99.</p>

<p>11.&nbsp;
J. Smith, T. Riley, VCS Software
(1991), Department of Chemical Engineering, University of Toronto, Toronto,
Ontario, Canada.</p>

<p>12.&nbsp;
D. Behrens, DECHEMA Corrosion
Handbook: Corrosive Agents and Their Interaction with Materials, vol. 2 (Weinheim,
Federal Republic of Germany: Frankfurt am Main: DECHEMA, 1988) 269.</p>

<h3>Figures</h3>

<p align=center><img src="v3p24_files/image040.gif" width="457" height="204"></p>

<p>&nbsp;</p>

<p>Figure 1: Oxygen and carbon dioxide diffusion through a
disbonded coating and a solution layer underneath to cause corrosion of pipe
steel and to form a ferrous carbonate or ferrous hydroxide precipitate (oxygen
diffusion controls the corrosion rate). <span style="background-color: #FFFF00">
[2: A judicious use of colour would make these figures clearer]</span></p>

<p align=center><img src="v3p24_files/image041.gif" width="416" height="165"></p>

<p>Figure 2: Corrosion and precipitation of a pipe steel in
deionized water under a disbonded coating.</p>

<p align=center><img src="v3p24_files/image042.gif" width="468" height="365"></p>

<p>Figure 3: Variation of concentrations of iron species with
pH as the pipe steel corrosion continues in deionized water.</p>

<p align=center><img src="v3p24_files/image043.gif" width="469" height="366"></p>

<p>Figure 4: Variation of concentrations of iron species in
logarithm with pH as the pipe steel corrosion continues in deionized water.</p>

<p align=center><img src="v3p24_files/image044.gif" width="416" height="164"></p>

<p>Figure 5: Corrosion and precipitation(s) of a pipe steel
in a solution with an initial carbon dioxide pressure under a disbonded coating.</p>

<p align=center><img src="v3p24_files/image045.gif" width="471" height="362"></p>

<p>Figure 6: Variation of concentrations of iron species with
pH as the pipe steel corrosion continues in a solution with dissolved carbon
dioxide. Initial carbon dioxide pressure is 0.23 atm.</p>

<p align=center><img src="v3p24_files/image046.gif" width="472" height="363"></p>

<p>Figure 7: Variation of concentrations of iron species in
logarithm with pH as the pipe steel corrosion continues in a solution with
dissolved carbon dioxide. Initial carbon dioxide pressure is 0.23 atm.</p>

<SCRIPT>footer()</SCRIPT></body>

</html>