<?php 
session_start();
require_once('/home/jcsete5/public_html/jcse.org/jcse/php_inc/jrnl_subs.php');
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

<SCRIPT>notify();</SCRIPT>

<h2>Abstract</h2>

<p><script>comment()</script>CO<sub>2</sub>
corrosion is a significant problem for coated pipelines in the transport of
petroleum, gas and water. The corrosion occurs often under a precipitate of
either ferrous carbonate (FeCO<sub>3</sub>) or ferrous hydroxide (Fe(OH)<sub>2</sub>)
or both. Although neither precipitate provides a good barrier to the transport
of oxygen (O<sub>2</sub>), carbon dioxide (CO<sub>2</sub>) and ions since they
are loose and porous, the precipitate(s) may affect corrosion by determination
of the pH at the steel surface. The goal of this work is to explore conditions
for the formation of the precipitates.</p>

<p><script>comment()</script>For
steel corrosion under a disbonded coating, there is a critical pressure ratio
of O<sub>2</sub> to CO<sub>2</sub> that separates the two precipitates. When O<sub>2</sub>
diffusion across the disbonded coating controls the corrosion rate, the ratio
is 9/20, above which the precipitate is Fe(OH)<sub>2</sub>. The precipitate is FeCO<sub>3</sub>
otherwise. The corresponding ratio is 14 if O<sub>2</sub> diffusion across the
solution boundary layer under the disbonded coating controls the corrosion
rate, when the coating may be deteriorated or itself permeable.</p>

<p><script>comment()</script>For
steel corrosion not limited by O<sub>2</sub> transport, charge transfer of
hydrogen ion (H<sup>+</sup>) reduction due to dissolved CO<sub>2</sub> in
solution may control the corrosion rate. Thermodynamic calculations are
permitted to determine the solution chemistry and conditions for precipitation.
It was found that regardless of the initial amount of CO<sub>2</sub> in the
solution, the solution pH increases with the extent of corrosion due to H<sup>+</sup>
reduction. The formation of iron complexes in the system has an insignificant
effect on the solution chemistry.</p>

<p><script>comment()</script>With
zero CO<sub>2</sub>, the precipitate is only Fe(OH)<sub>2</sub> and the
saturated pH is about 9.05 with consideration of all complexes. With certain
initial amount of CO<sub>2</sub>, the first precipitate is FeCO<sub>3</sub> and
the pH at the precipitation, which varies with the initial CO<sub>2</sub>
pressure, is 5.7 for a CO<sub>2</sub> partial pressure of 0.23 atm. With
continuation of the corrosion, FeCO<sub>3</sub> and Fe(OH)<sub>2</sub>
co-precipitate and the pH is fixed at 8.8, regardless of further corrosion.</p>

<p><script>comment()</script>The
thermodynamic calculations also show that the time for a precipitate to saturate
a boundary layer of 0.5 mm in thickness is short. For a system with a partial
pressure of CO<sub>2</sub> below 0.23 atm, this time is not greater than 1.5
hours for a corrosion rate of 0.01 mm/y. This result suggests that pipeline corrosion
under a disbonded coating indeed normally occurs under a precipitate.</p>

<p><script>comment()</script>

<b>Keywords</b>:
corrosion, steel, coating, CO<sub>2</sub>, O<sub>2</sub>, precipitation, FeCO<sub>3</sub>.</p>

<h3>Introduction</h3>

<p><script>
comment()
</script>CO<sub>2</sub>
and O<sub>2</sub> are two crucial species that cause exterior corrosion of coated
pipelines since they can diffuse through a disbonded coating. Two precipitates,
FeCO<sub>3</sub> and Fe(OH)<sub>2</sub>, are possible during the corrosion. Another
precipitate, ferric hydroxide, is insignificant to pipeline corrosion as it is
often present as a suspension in solution and does not affect the corrosion
rate considerably.<sup>[1]</sup></p>

<p><script>comment()</script>The
precipitate(s) of either FeCO<sub>3</sub> or Fe(OH)<sub>2</sub> or both may
have a significant impact on the pipe corrosion rate because it may determine
the pH at the metal steel surface. The conditions for formation of a
precipitate have been investigated in this work. The results provided useful information
for a recent comprehensive CO<sub>2</sub> corrosion model which was developed
to include transport, chemical reactions, ionic interactions, precipitation and
electrochemical reactions altogether.<sup>[2-4]</sup></p>

<p><script>comment()</script>In
this work, two cases are studied for the determination of the type of
precipitate(s) under a disbonded coating: (1) corrosion control by O<sub>2</sub>
diffusion, and (2) corrosion control by charge transfer of H<sup>+</sup>
reduction. Both cases are described as below, starting with corrosion control
by O<sub>2</sub> diffusion.</p>

<h3>Precipitation with Corrosion Control by O<sub>2</sub>
Diffusion</h3>

<p><script>comment()</script>The
rate of pipe corrosion under a disbonded coating is often controlled by O<sub>2</sub>
diffusion through the disbonded coating (Figure 1). Proportional to corrosion
rate, the flux of O<sub>2</sub> diffusion obeys Fick�s first law:<sup>[5]</sup></p>

<p><script>
comment()
</script>
<sub>
<img
src="v3p24_files/image001.gif" align="middle" width="293" height="51"></span></sub>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
(1)</p>

<p><script>
comment()
</script>
where
J<sub>O2</sub>, P<sub>cO2</sub>, p<sub>O2</sub>, &#916;p<sub>O2</sub>�and p<sub>O2</sub><sup>o</sup>�are,
respectively, diffusion flux, permeability of the coating, partial pressure
within the coating, pressure drop across the coating and partial pressure in
soil, all for O<sub>2</sub>. y and d<sub>c</sub> are respectively distance from the pipe side
of and thickness of the coating.</p>

<p><script>
comment()
</script>
The
O<sub>2</sub> diffusion flux can be converted to an actual corrosion rate
through the relation: r=1.173 n<sub>O2</sub> FJ<sub>O2</sub>, where r, n<sub>O2</sub>&nbsp;and
F&nbsp;are corrosion rate, number of electrons transferred for O<sub>2</sub>
reduction and Faraday constant, respectively. 1.173 is a conversion coefficient
for iron corrosion from current density unit, A/m<sup>2</sup>, to corrosion
rate unit, mm/y.</p>

<p><script>
comment()
</script>
When
O<sub>2</sub> diffusion across a solution boundary layer under the disbonded
coating controls the corrosion rate (Figure 1), the diffusion flux can be
calculated from:</p>

<p><script>
comment()
</script>
<sub>
<img border=0
src="v3p24_files/image012.gif" align="middle" width="224" height="52"></span></sub>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
(2)</p>

<p><script>
comment()
</script>
where
&#916;p<sub>O2</sub>, D<sub>O2</sub> and H<sub>O2</sub>&nbsp;are respectively pressure
drop across the boundary layer, diffusion coefficient within the boundary layer
and Henry�s law constant in solution, all for O<sub>2</sub>. &#948;<sub>s</sub>&nbsp;is thickness of the boundary layer. </p>

<p><script>
comment()
</script>
Equations
(1-2) can be applied to CO<sub>2</sub> directly. Then, the subscript �<sub>O2</sub>�
for O<sub>2</sub> must be replaced by �<sub>CO2</sub>�.</p>

<p><script>
comment()
</script>
When
diffusion of either O<sub>2</sub> or CO<sub>2</sub> is across a disbonded
coating and at the same time across the solution boundary layer under the coating,
the overall diffusion flux of either gas J<sub>g</sub>&nbsp;can be calculated
from: <sub>
<img
border=0 src="Song_Proofreading_files/image004.gif" align="middle" width="140" height="49"></sub></span>.
J<sub>g-coating</sub>&nbsp;is the diffusion flux of either gas across the
disbonded coating and J<sub>g-H2O</sub>&nbsp;is the diffusion flux across the
solution boundary layer. J<sub>g-coating</sub>&nbsp;and J<sub>g-H2O</sub>&nbsp;can
be calculated respectively from Equations (1) and (2).&nbsp; This overall
diffusion will not be considered in this work. </p>

<p><script>
comment()
</script>
When
O<sub>2</sub> and CO<sub>2</sub> both diffuse across a disbonded coating or a
boundary layer, the type of precipitate on the pipe surface can be determined
from comparison of the diffusion fluxes of O<sub>2</sub> and CO<sub>2</sub>
through either the disbonded coating or the boundary layer. The comparison of
diffusion fluxes uses the following stoichiometric reactions occurring in
solution:</p>

<h6><sub><img border=0 src="v3p24_files/image023.gif" width="212" height="28"></span></sub></h6>

<h6><sub><img border=0 src="v3p24_files/image024.gif" width="233" height="25"></span></sub></h6>

<p><script>
comment()
</script>
<sub><img border=0
src="v3p24_files/image025.gif" width="192" height="24"></span></sub>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
(3)</p>

<p><script>
comment()
</script>
Equation
(3) represents a combination of the overall processes of CO<sub>2</sub>
dissolution including the two-step carbonic acid dissociation and the overall
corrosion reactions including O<sub>2</sub> reduction and iron oxidation.
Reductions of H<sup>+</sup> and carbonic acid are neglected due to their less
significant role than O<sub>2</sub> in the corrosion process. Equation (3)
indicates that at steady-state, if O<sub>2</sub> diffusion controls the
corrosion rate and if the diffusion rate is greater than half the CO<sub>2</sub>
diffusion rate, or J<sub>O2</sub>/J<sub>CO2</sub>&gt;0.5, the steel surface is
in direct contact with the precipitate of Fe(OH)<sub>2</sub>. This is because
carbonate ions formed from dissolved CO<sub>2</sub> cannot combine all ferrous
ions (Fe<sup>2+</sup>) to form FeCO<sub>3</sub> and the excessive Fe<sup>2+</sup>
are present as Fe(OH)<sub>2</sub> on the steel surface. The steel surface is in
direct contact with FeCO<sub>3</sub> if the O<sub>2</sub> diffusion rate is
less than half the CO<sub>2</sub> diffusion rate or J<sub>O2</sub>/J<sub>CO2</sub>&lt;0.5,
when there are excessive carbonate ions.</p>

<p><script>
comment()
</script>
The
diffusion rate ratio of O<sub>2</sub> to CO<sub>2</sub>, J<sub>O2</sub>/J<sub>CO2</sub>=0.5,
can be converted, by use of Henry�s law, to a pressure drop ratio through a
coating or through a solution boundary layer.</p>

<p><script>
comment()
</script>
&nbsp;(1)
If the diffusion of O<sub>2</sub> and CO<sub>2</sub> is across a new high
density polyethylene (HDPE) coating, the pressure drop ratio of O<sub>2</sub>
to CO<sub>2</sub> is, based on <sub>
<img
src="v3p24_files/image027.gif" align="middle" width="125" height="45"></sub>=0.5 (Equation (1)), <sub>
<img src="v3p24_files/image028.gif" align="middle" width="99" height="45"></sub>=9/20.
The parameters useful for the above calculation are given in Table 1. This
pressure drop ratio indicates that the precipitate is Fe(OH)<sub>2</sub> if O<sub>2</sub>
pressure in soil is greater than 9/20 times of CO<sub>2</sub> pressure or p<sub>O2</sub>/p<sub>CO2</sub>&gt;9/20,
when O<sub>2</sub> and CO<sub>2</sub> are assumed greatly consumed under the
disbonded coating to have nearly a zero pressure. The precipitate is FeCO<sub>3</sub>
otherwise.</span></p>

<p align=center>TABLE 1 Transport Parameters of O<sub>2</sub>
and CO<sub>2</sub> at 25 �C<sup>[6-7]</sup></p>

<div align=center>

<table border=0 cellspacing=0 cellpadding=6 style="border-collapse: collapse" bordercolor="#111111">
 <tr>
  <td style="border-top-style: solid; border-top-width: 1; border-bottom-style: solid; border-bottom-width: 1">
  <p>&nbsp;</p>
  </td>
  <td style="border-top-style: solid; border-top-width: 1; border-bottom-style: solid; border-bottom-width: 1">
  <p>P<sub>c</sub>&nbsp;&nbsp;�10<sup>11</sup>
  (in HDPE)</p>
  </td>
  <td style="border-top-style: solid; border-top-width: 1; border-bottom-style: solid; border-bottom-width: 1">
  <p>H&nbsp;(in H<sub>2</sub>O)
  </p>
  </td>
  <td style="border-top-style: solid; border-top-width: 1; border-bottom-style: solid; border-bottom-width: 1">
  <p>D �10<sup>9</sup>
  (in H<sub>2</sub>O)</p>
  </td>
 </tr>
 <tr>
  <td style="border-top-style: solid; border-top-width: 1">
  <p>O<sub>2</sub></p>
  </td>
  <td style="border-top-style: solid; border-top-width: 1">
  <p>&nbsp;&nbsp;&nbsp;
  1.36 </p>
  </td>
  <td style="border-top-style: solid; border-top-width: 1">
  <p>&nbsp;&nbsp;&nbsp;&nbsp;
  0.8074 </p>
  </td>
  <td style="border-top-style: solid; border-top-width: 1">
  <p>&nbsp;&nbsp;&nbsp;
  1.96</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>reference </p>
  </td>
  <td>
  <p>&nbsp;&nbsp;&nbsp; 5</p>
  </td>
  <td>
  <p>&nbsp;&nbsp;&nbsp; 6</p>
  </td>
  <td>
  <p>&nbsp;&nbsp;&nbsp; 7</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>CO<sub>2</sub></p>
  </td>
  <td>
  <p>&nbsp;&nbsp;&nbsp;
  1.22 </p>
  </td>
  <td>
  <p>&nbsp;&nbsp;&nbsp;&nbsp;
  0.02952 </p>
  </td>
  <td>
  <p>&nbsp;&nbsp;&nbsp;
  1.96</p>
  </td>
 </tr>
 <tr>
  <td style="border-bottom-style: solid; border-bottom-width: 1">
  <p>reference: </p>
  </td>
  <td style="border-bottom-style: solid; border-bottom-width: 1">
  <p>&nbsp;&nbsp;&nbsp;
  5&nbsp; </p>
  </td>
  <td style="border-bottom-style: solid; border-bottom-width: 1">
  <p>&nbsp;&nbsp;&nbsp; 6</p>
  </td>
  <td style="border-bottom-style: solid; border-bottom-width: 1">
  <p>&nbsp;&nbsp;&nbsp; 7</p>
  </td>
 </tr>
</table>

</div>

<p><script>
comment()
</script>
The
unit of P<sub>c</sub>: mol/m/s/atm, H: atm�m<sup>3</sup>/mol and D: m<sup>2</sup>/s.
</p>

<p><script>
comment()
</script>
Since
O<sub>2</sub> pressure in soil is up to 0.21 atm, the precipitate must be FeCO<sub>3</sub>
if CO<sub>2</sub> pressure is higher than 0.467 atm. These corresponding pressures
of O<sub>2</sub> and CO<sub>2</sub> are given in Table 2, together with another
O<sub>2</sub> pressure of 0.45 atm and its corresponding CO<sub>2</sub>
pressure of 1 atm.</p>

<p align=center>TABLE 2 Corresponding O<sub>2</sub> and CO<sub>2</sub>
Pressures at Transition between Precipitates</p>

<div align=center>

<table border=0 cellspacing=0 cellpadding=6 style="border-collapse: collapse" bordercolor="#111111">
 <tr>
  <td style="border-top-style: solid; border-top-width: 1; border-bottom-style: solid; border-bottom-width: 1">
  <p>&nbsp;</p>
  </td>
  <td style="border-top-style: solid; border-top-width: 1; border-bottom-style: solid; border-bottom-width: 1">
  <p>Across HDPE Coating</p>
  </td>
  <td style="border-top-style: solid; border-top-width: 1; border-bottom-style: solid; border-bottom-width: 1">
  <p>Across HDPE Coating</p>
  </td>
  <td style="border-top-style: solid; border-top-width: 1; border-bottom-style: solid; border-bottom-width: 1">
  <p>Across H2O Layer</p>
  </td>
 </tr>
 <tr>
  <td style="border-top-style: solid; border-top-width: 1">
  <p>O<sub>2</sub> (atm)</p>
  </td>
  <td style="border-top-style: solid; border-top-width: 1">
  <p>0.21</p>
  </td>
  <td style="border-top-style: solid; border-top-width: 1">
  <p>0.45 </p>
  </td>
  <td style="border-top-style: solid; border-top-width: 1">
  <p>0.21</p>
  </td>
 </tr>
 <tr>
  <td style="border-bottom-style: solid; border-bottom-width: 1">
  <p>CO<sub>2</sub> (atm)</p>
  </td>
  <td style="border-bottom-style: solid; border-bottom-width: 1">
  <p>0.467 </p>
  </td>
  <td style="border-bottom-style: solid; border-bottom-width: 1">
  <p>1</p>
  </td>
  <td style="border-bottom-style: solid; border-bottom-width: 1">
  <p>0.015</p>
  </td>
 </tr>
</table>

</div>

<p><script>
comment()
</script>
&nbsp;(2)
If the diffusion is across a solution boundary layer, based on <sub>
<img src="v3p24_files/image035.gif" align="middle" width="192" height="45"></sub>=0.5
(Equation (2)), the pressure drop ratio of O<sub>2</sub> to CO<sub>2</sub>
becomes <sub>
<img src="v3p24_files/image036.gif" align="middle" width="131" height="45"></sub>=14, where D<sub>CO2</sub>&nbsp;and
H<sub>CO2</sub>&nbsp;are CO<sub>2</sub> diffusion coefficient and Henry�s law
constant in the solution (Table 1). The pressure drop ratio indicates that at
steady-state, if O<sub>2</sub> pressure in soil is greater than 14 times of CO<sub>2</sub>
pressure, the precipitate is Fe(OH)<sub>2</sub>. The precipitate is FeCO<sub>3</sub>
otherwise.</span></p>

<p><script>
comment()
</script>
If
O<sub>2</sub> pressure is 0.21 atm, the CO<sub>2</sub> pressure is 0.015 atm
(Table 2), based on p<sub>O2</sub>/p<sub>CO2</sub>=14. Since this CO<sub>2</sub>
pressure is smaller than its partial pressure in atmosphere (0.03 atm), the
precipitate for atmospheric corrosion of steel should be FeCO<sub>3</sub> if Fe<sup>2+</sup>
oxidation is not accounted for. The product is however normally ferric
hydroxide or ferric carbonate because Fe<sup>2+</sup> oxidation does occur and
the ferric precipitates have very low solubilities.<sup>[1]</sup></p>

<p><script>
comment()
</script>
(3)
The above results indicate that the pressure drop ratio of O<sub>2</sub> to CO<sub>2</sub>
across a boundary layer is much greater than that across an HDPE coating. The
reason is that CO<sub>2</sub> has an equivalent diffusion coefficient but a
much greater solubility than O<sub>2</sub> in solution, but the permeabilities
of both species in HDPE coating are equivalent. These substantially different
ratios of pressure drop indicate that a much smaller CO<sub>2</sub> pressure
than O<sub>2</sub> is sufficient for precipitation of FeCO<sub>3</sub> in a
solution layer. However, this rule can be inaccurate if considering CO<sub>2</sub>
hydration which is a slower step in CO<sub>2</sub> corrosion. In any event,
this rule may become a useful guide when only transport parameters are
available. The combination of diffusion of O<sub>2</sub> and CO<sub>2</sub>
together with CO<sub>2</sub> hydration and corrosion was modeled elsewhere.<sup>[3]</sup></p>

<h3>Precipitation with Corrosion Control by H<sup>+</sup> Reduction</h3>

<p><script>
comment()
</script>
When
charge transfer of H<sup>+</sup> reduction controls the corrosion rate, the
transport of each species in the solution boundary layer under a disbonded
coating is fast and each concentration is uniform. Then, thermodynamic
calculations are permitted for investigation of steel corrosion in the solution
layer.</p>

<p><script>
comment()
</script>
Analytical
thermodynamic calculations have been extensively used to describe the
equilibrium conditions for metal corrosion,<sup>[8]</sup> where the relative
abundance of the species is normally described for a single reaction. Numerical
methods have greatly expanded the use of thermodynamics since they make it
possible to minimize the total free energy of all species in a system, important
for determination of the equilibrium properties of a multiphase, multicomponent
system. The �VCS� software (version 2.0),<sup>[9]</sup> an algorithm developed
using the free-energy minimization method, has been used in this work to
calculate the thermodynamic chemistry in an iron-corroding solution with and
without dissolved CO<sub>2</sub>. The effects of iron complex ions on the
solution chemistry have also been investigated.</p>

<p><script>
comment()
</script>
The
calculation for iron corrosion is performed for a total pressure of 1 atm and a
temperature of 25�C and for the two cases: (1) corrosion in deionized water and
(2) corrosion in a solution with only dissolved CO<sub>2</sub>.</p>

<h4>(1) Steel Corrosion in Deionized Water</h4>

<p><script>
comment()
</script>
For
steel corrosion in deionized water, the corrosion system is schematically shown
in Figure 2. For the corrosion starting with a fresh specimen, the variation of
species concentration vs. extent of corrosion or pH is shown in Figures 3-4. Reading
from left to right, the initial solution pH is 7. As iron corrodes, the
corrosion product, Fe<sup>2+</sup>, dissolves into solution and at the same
time, H<sup>+</sup> is reduced to hydrogen at the steel surface. The
concentrations of iron ions and pH increase with the extent of corrosion. The
solution finally becomes saturated at a pH of 9.05 and a total of all iron
species concentrations is 7.66 � 10<sup>-6</sup>
mol/l. The solution pH and the concentration of each species thereafter remain
fixed even the corrosion continues. This can be explained from the phase rule
of Gibbs, f=c-p+n where f, c, p and n are respectively the system degree of
freedom, number of independent species, number of phases and number of
environmental factors (temperature and pressure). In the thermodynamic system,
the degree of freedom is zero because in this binary system (H<sub>2</sub>O and
iron) or c=2, there are two phases (liquid phase and solid-Fe(OH)<sub>2</sub>) or
p=2 as Fe(OH)<sub>2</sub> precipitates. n=0 at given system temperature and
pressure. Figures 3-4 also show that in this corrosion process, the
concentration of each iron complex is much smaller than that of the free Fe<sup>2+</sup>.</p>

<p><script>
comment()
</script>
The
time required for Fe(OH)<sub>2</sub> to saturate a 0.5 mm thick water layer was
calculated, which provides information on whether iron corrosion normally
occurs under a precipitate. To saturate the boundary layer with Fe(OH)<sub>2</sub>,
it requires the dissolution of 2.751�10<sup>-8</sup>
mm thickness of iron. This takes 1.4 minutes at a corrosion rate of 0.01 mm/y.<sup>[10]</sup>
This suggests that corrosion of steel may normally occur under Fe(OH)<sub>2</sub>
precipitate because the water layer can be quickly saturated after an iron
surface is exposed to the  layer.</p>

<h4>(2) Steel Corrosion in a Solution with Dissolved CO<sub>2</sub></h4>

<p><script>
comment()
</script>
For
steel corrosion under a solution boundary layer containing dissolved CO<sub>2</sub>
(Figure 5), the variation of the concentration of each species with pH is
calculated and shown in Figure 6. The solution is initially saturated with CO<sub>2</sub>
of 0.23 atm and the solution pH is 4.22. With increasing extent of corrosion or
as the abscissa shifts from left to right, the Fe<sup>2+</sup> concentration
and pH increase. Fe<sup>2+</sup> concentration increases because Fe<sup>2+</sup>
is soluble; pH increases because H<sup>+</sup> is reduced to hydrogen. At a
certain corrosion extent, the Fe<sup>2+</sup> concentration reaches a maximum
of 6.8
�10<sup>-4</sup> mol/l and the pH
then is 5.7. At the maximum concentration of Fe<sup>2+</sup>, FeCO<sub>3</sub>
begins to precipitate. As corrosion continues, Fe<sup>2+</sup> concentration
decreases while pH continues to increase. This increase of pH results from continuous
H<sup>+</sup> reduction. Fe<sup>2+</sup> concentration decreases for the
following reasons. Fe<sup>2+</sup> forms from iron oxidation, and by charge,
the formation of one Fe<sup>2+</sup> requires reduction of two H<sup>+</sup>.
Since H<sup>+</sup> is formed from dissociation of both carbonic acid and
bicarbonate ion, the reduction of two H<sup>+</sup> results in formation of
more than one carbonate ion. Therefore, there is a deficit for Fe<sup>2+</sup>
as they combine with carbonate ions to form FeCO<sub>3</sub> to precipitate. To
compensate, Fe<sup>2+</sup> in the solution must be partially consumed and the
concentration of Fe<sup>2+</sup> must decrease. When the corrosion further
continues, FeCO<sub>3</sub> and Fe(OH)<sub>2</sub> begin to co-precipitate and
the pH is fixed at 8.8 and Fe<sup>2+</sup> concentration at 2.04 �10<sup>-4</sup> mol/l. Regardless of
continuation of the corrosion, the concentration of each species is fixed in
the system because in the phase rule of Gibbs, f=c-p+n=0. In this system, there
are three independent components (iron, CO<sub>2</sub> and water) or c=3, three
phases (liquid phase and two solid phases, FeCO<sub>3</sub> and Fe(OH)<sub>2</sub>)
or p=3, and the system temperature and pressure are given or n=0.</p>

<p><script>
comment()
</script>
In
the corrosion process, iron complexes are insignificant because each of their
concentrations is much smaller than that of free Fe<sup>2+</sup> (Figure 7).
Compared to corrosion in de-ionized water, the free Fe<sup>2+</sup>
concentration is greater in the presence of dissolved CO<sub>2</sub> and the
principal anion is bicarbonate ion. </p>

<p><script>
comment()
</script>
The
time required for FeCO<sub>3</sub> to saturate a 0.5 mm thick solution layer is
about 88.8 minutes at a corrosion rate of 0.01 mm/y.<sup>[10]</sup> This
limited time indicates that pipe corrosion should usually occur under FeCO<sub>3</sub>
precipitate or under the co-precipitate of FeCO<sub>3</sub> and Fe(OH)<sub>2</sub>.</p>

<p><script>
comment()
</script>
The
calculated results have shown that free Fe<sup>2+</sup> concentration in the FeCO<sub>3</sub>
saturated solution is much greater than any iron complex ion. Hence, in the
calculation of equilibrium concentrations, the multiphase, multicomponent
system may be simplified by neglecting the complex ions.</p>

<h3>Conclusions</h3>

<p><script>
comment()
</script>
For
pipeline corrosion, with its rate controlled by O<sub>2</sub> diffusion across
a disbonded HDPE coating, the precipitate is Fe(OH)<sub>2</sub> if O<sub>2</sub>
pressure is greater than 9/20 times of CO<sub>2</sub>. The precipitate is FeCO<sub>3</sub>
otherwise. If the corrosion rate is controlled by O<sub>2</sub> diffusion
across a solution layer, the precipitate is Fe(OH)<sub>2</sub> if O<sub>2</sub>
pressure is greater than 14 times of CO<sub>2</sub>. The precipitate is FeCO<sub>3</sub>
otherwise. This estimation for the type of precipitate may not be accurate with
consideration of CO<sub>2</sub> hydration (slow) but would be useful when the
hydration information is not available.</p>

<p><script>
comment()
</script>The
solution pH increases with increasing extent of corrosion. During corrosion,
the concentration of each iron complex is significantly smaller than free Fe<sup>2+</sup>.
The role of complex species in iron corrosion is insignificant and may be
neglected.</p>

<p><script>
comment()
</script>The
time is short, less than 1.5 hours, for a 0.5 mm thick water layer on the iron
surface to be saturated with a precipitate, Fe(OH)<sub>2</sub> or FeCO<sub>3</sub>.
Pipeline corrosion may often occur under a precipitate.</p>

<h3>References</h3>

<p>1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
F.M. Song, D.W. Kirk, J.W. Graydon, D.E. Cormack, Corrosion 58 (2) (2002)
145-155.</p>

<p>2.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
F.M. Song, D.W. Kirk, J.W. Graydon, D.E. Cormack, �Prediction for CO<sub>2</sub>
Corrosion of Active Steel under FeCO<sub>3</sub> Precipitate�, Corrosion/04,
Paper #04382 (New Orleans, LA: NACE, 2004).</p>

<p>3.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
F.M. Song, D.W. Kirk, J.W. Graydon, D.E. Cormack, Journal of the Electrochemical
Society, 149(11) (2002) B479-B486.</p>

<p>4.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
F.M. Song, �Corrosion of Coated Pipelines with Cathodic Protection�, Ph.D.
Dissertation (2002), University of Toronto, pp. 114-129. </p>

<p>5.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
J. Brandrup, E.H. Immergut, Polymer Handbook, 3<sup>rd</sup> (ed) (John Wiley
&amp; Sons, Inc, 1989) VI/435-444.</p>

<p>6.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
M.D. Koretsky, F. Abooameri, J.C. Westall, Corrosion 55(1) (1999): 52-64.</p>

<p>7.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
P. Lorbeer, W.J. Lorenz, Electrochimica Acta 25 (1980): 375-381.</p>

<p>8.&nbsp;
G.M. Murray, G.K. Schweitzer, F.K. Heacker, Corrosion 46 (2) (1990) 95-99.</p>

<p>9.&nbsp;
J. Smith, T. Riley, VCS Software (1991), Department of Chemical Engineering,
University of Toronto, Toronto, Ontario, Canada.</p>

<p>10.&nbsp;
D. Behrens, DECHEMA Corrosion Handbook: Corrosive Agents and Their Interaction
with Materials, vol. 2 (Weinheim, Federal Republic of Germany: Frankfurt am
Main: DECHEMA, 1988) 269.</p>


<h3>Figures</h3>

<p align=center><img src="v3p24_files/image040.gif" width="457" height="204"></p>

<p>&nbsp;</p>

<p>Figure 1: Oxygen and carbon dioxide diffusion through a
disbonded coating and a solution layer underneath to cause corrosion of pipe
steel and to form a ferrous carbonate or ferrous hydroxide precipitate (oxygen
diffusion controls the corrosion rate). </p>

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

<SCRIPT>footer()</SCRIPT>

</html>