<?php 
session_start();
require_once('/home/jcsete5/public_html/jcse.org/jcse/php_inc/jrnl_subs.php');
$logged_in=is_loggedin();
?>
<html>
<head>
<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
<style>
<!--
 
-->
</style>
<title>JCSE Volume 6 Paper 52</title> 
<SCRIPT src="/getcomm.php?vol=6&pap=52"></SCRIPT>
<SCRIPT src="/jsinc/jcsesubs.js.php"></SCRIPT>
<SCRIPT>getcommentmode();</SCRIPT></head>

<body>
<script>var lgi=<?php if ($logged_in) { echo('true');} else { echo('false');} ?>;</script>
<script src="/jsinc/writeheader.js"></script><?php ggl_ad(); ?>
<div>

<h2><b>Volume 6 Paper 52</b></h2><script>ifnotmode(3,'<p>Submitted 6th July 2003, fully published 26th July 2004<br>');</script>

<h2><b>Surface Modification With Compositionally Modulated Multilayer Coatings</b></h2>

<p>G.D.Wilcox<st1:place><st1:PlaceType><i><br>
Institute</i></st1:PlaceType><i> of </i>
<st1:PlaceName><i>Polymer</i></st1:PlaceName></st1:place><i> Technology and Materials Engineering, </i><st1:place>
<st1:PlaceName><i>Loughborough</i></st1:PlaceName><st1:PlaceType><i>University</i></st1:PlaceType></st1:place><i>, Loughborough, Leicestershire. LE11 3TU. </i><st1:country-region><st1:place><i>UK</i></st1:place></st1:country-region><i>, <script>mailto2('G.D.Wilcox','lboro.ac.uk')</script></i></p>

<SCRIPT>notify();</SCRIPT><h3>Abstract</h3>

<script>comment();</script><p>The
concept of compositionally modulated multilayer coatings (CMMCs) is one that is
gaining considerable interest in surface engineering, whether the end use is
for wear resistance or protection against corrosive environments.� Multilayer finishes are by no means a new
coating format since layered coatings have traditionally been used in surface
engineering e.g. decorative chromium and traditional paint finishes.� Where the more recent CMMC concept differs is
usually in the number of individual layers and hence their relatively small
thicknesses.</p>

<script>comment();</script><p>The
CMMC concept� can be produced quite
readily by electrodeposition, either with a dual bath or single bath
approach.� The dual bath approach is
physically more complex with the substrate moving between two electrolytes,
with appropriate rinsing in between.� The
single bath concept is more complex in terms of solution chemistry and control
of electrodeposition process parameters to produce the layered deposit required.</p>

<script>comment();</script><p>This
paper will examine the concept of the production of CMMCs, concentrating on
their application as protective coatings for metal surfaces.� The application of zinc and zinc alloy based
systems will be investigated as this is one particular area of interest for
this type of coating system.� Of the zinc
alloys that can be electrodeposited, at present, Zn-Ni, Zn-Fe, Zn-Co and Zn-Mn
have been produced in multilayer format.�
The results from these investigations will be reviewed.� Electrodeposition methods, bath chemistries
and coating morphologies and performances in appropriate corrosion tests will
also be reviewed.</p>

<p><b>Keywords: </b>Compositionally
modulated coatings, layered coatings, zinc alloys</p>

<h3>Introduction</h3>

<script>comment();</script><p>The
concept of compositionally modulated multilayer coatings (CMMCs) is one that is
producing a high level of interest in surface engineering.� The subject area is one that abounds with
terminology, with the coating systems produced often being described as
compositionally modulated alloy (CMA) coatings, multilayer coatings or just
layered coatings.� Whatever the
terminology used to describe them, the overall structure can be regarded as a
coating system with individual layers (usually two compositions repeated)
making up the overall structure.� Figure
1 illustrates a typical CMMC system.</p>

<script>comment();</script><p align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img border="0" src="v6p52_files/v6p1261.gif" width="433" height="138"> </p>

<script>comment();</script><p align="center">Figure 1 ���Idealised schematic of a compositionally
modulated multilayer coating </p>

<script>comment();</script><p>Metal
A and metal B in figure 1 are different in composition.� They can be individual �pure� metals or two
different compositions of the same alloy.�
The CMMC therefore has a periodicity associated with its coating
structure, the periodic distance being the thickness of the two coating formats
(i.e. one metal A layer + one metal B layer in figure 1).� Individual layer thicknesses for CMMC systems
range from a few nanometres to tens of microns, these values being dependent on
the coating system type and its end use.</p>

<script>comment();</script><p>The
concept of multilayer coatings is not new, if one examines the historical use
of surface treatments it becomes apparent that sometimes by design and sometimes
by accident, many familiar coating systems are multilayer in their format.� Some of the earliest examples can be seen in
the use of �underlayers� or �undercoats�.�
Copper has been used historically under nickel layers primarily for
adhesion purposes.� In a similar manner
nickel itself has been used with silver and gold layers.� Electrodeposited decorative chromium is
another example of a multilayer system with an initial �flash� layer of copper,
duplex nickel layers for corrosion resistance and an upper thin layer of
chromium for decorative purposes.�
Similar situations can be seen with organic finishes such as paints and
lacquers (figure 2).� Most of these
utilise a conversion coating pre-treatment before being applied to a metallic
substrate.� The organic systems
themselves are then usually multilayered with a primer layer, undercoat and top
coat.�� Another example of a multilayered
format in surface treatments occurs indirectly but can be utilised to good effect,
this is the occurrence of different compositioned alloy layers occurring at the
coating-substrate interface in hot dipped or heat-treated metallic
coatings.� These occur as a result of the
enhanced temperature levels present during the formation of the coating and
often lead to enhanced corrosion resistance (e.g. in flow-melted tinplate used
in the food packaging industry [1]).</p>

<script>comment();</script><p align="center">
<img border="0" src="v6p52_files/v6p1262.gif" width="534" height="124"></p>

<script>comment();</script><p align="center">Figure 2����
Multilayer concept in organic paint coatings</p>

<script>comment();</script><p>The
modern versions of CMMCs tend to have a greater number of individual layers,
consequently of smaller individual layer thicknesses.� The more recent interest in CMMCs is often
attributed to Koehler, a theoretical physicist interested in dislocation
theory, who showed, in principle, that an array of thin films could produce
enhanced mechanical properties such as tensile strength, Young�s Modulus and
hardness [2].� He predicted that for this
situation to occur, the following criteria must be met for the two individual
metals making up the layered structure:</p>

<ul>
  <li>Similar
lattice parameters </li>
  <li>Similar thermal expansions
  &nbsp;</li>
  <li>Very dissimilar elastic constants </li>
  <li>The bonding
between dissimilar metal atoms should be large and the same order as that
between&nbsp;themselves </li>
  <li>The
thicknesses of the layers should be small, typically less than 100 atoms thick.

  </li>
</ul>

<script>comment();</script><p>Koehler also suggested some
near �ideal� metal pairings: Ni-Cu, Rh-Pd, Pt-Ir and W-Ta.� The individual layer thicknesses are often on
the nanometre scale, this therefore limits the deposition technologies for this
type of coating.� In reality there are
probably only three main methods which have been utilised namely, chemical and
physical vapour deposition and electrodeposition.� Clearly each of the three processes has its
own advantages and disadvantages but most researchers tend to regard
electrodeposition as the most simple and flexible of the three.� It is therefore this technique which will be
reviewed in this investigation.</p>

<h3>CMMC Electrodeposition Techniques</h3>

<script>comment();</script><p>Electrodeposition can be
utilised in broadly two ways to produce CMMCs:</p>

<ul>
  <li>The dual bath technique (DBT)

  </li>
  <li>The single bath technique (SBT)

  </li>
</ul>

<script>comment();</script><p>In the first technique the
substrate is repeatedly transferred between two electrolytes, each depositing a
particular single metal or alloy.� The
DBT also requires careful rinsing techniques before each deposition step.� This usually involves normal rinsing in water
following deposition and then in the following electrolyte before the
deposition stage for the next layer.�
This elaborate format is required to try and limit cross electrolyte
contamination and passivation of the freshly electrodeposited metal
surface.� Clearly there are drawbacks
with the DBT, however, it is relatively simple and does allow the deposition of
alternate layers of pure metals, a situation which is difficult to achieve with
the SBT.� The SBT technique, by definition,
is less cumbersome to operate but has a far more complex electrolyte
chemistry.� The single electrolyte
contains both metallic species to be deposited, the conditions for successful
deposition have been summarised by Despic and Jovic [3]:</p>

<script>comment();</script><p>�&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
The two metals to be electrodeposited must have
different standard and electrodeposition potentials.� This is so that the more noble of the two
metals can be deposited for the desired period of time (thickness) without
deposition of the more base metal.</p>

<script>comment();</script><p>�&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
The concentration of the more noble metal must be
at a sufficiently low level to enable the more base metal to be
electrodeposited at a high cathodic potential.</p>

<script>comment();</script><p>�&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
The re-dissolution of the more base metal by
anodic processes, when the potential is returned to the value to deposit the
more noble metal, must be sufficiently slow.�
This must occur to let the base metal remain intact until it is covered
by a layer of the more noble metal.</p>

<script>comment();</script><p>The nature of the SBT means
that the substrate remains in the electrolyte continually with potential or
current be used to bring about the formation of the different layers.� There is therefore no chance of passivation
causing problems.� The main drawbacks
with this technique are the difficulties associated with producing pure metal
layers and the consequential need for fine current (or potential) control,
often achieved via a potentiostat/galvanostat or by controlled pulse
electrodeposition.</p>

<h3>Historical Development Of CMMCS</h3>

<script>comment();</script><p>One of the earliest references
to multilayer coatings was made by Brenner and Pommer [4] who produced a
multilayer Cu-Bi alloy from a single electrolyte.� The layered structure was utilised as a
diffraction grating after suitable etching.�
Cohen et al [5] reported the production of Ag-Pd structures from a
concentrated chloride bath, individual layer thicknesses were produced to
values below 50 nm and the coating properties were seen to include reduced
electrical resistivity and increased tarnish resistance.� A large number of investigators have examined
the Cu-Ni multilayer system.� This metal
pairing was one of Koehler�s favoured systems and lends itself to relatively
easy electrodeposition both in the DBT and SBT formats.� Investigators therefore found that this
system was useful in examining the potential attributes of CMMCs, particularly
electrodeposition methods and the ability to reduce individual layer
thicknesses to less than 5 nm [6-8].�
More recent investigations have examined the use of the Cu-Ni system for
giant magnetoresistance.</p>

<h3>Corrosion Protection By Zinc-Based CMMCS</h3>

<script>comment();</script><p>In reality the research into
CMMCs can be divided into levels, basically dependent on the final application
of the coating system.� Many electrical
and electronic uses require very small individual layer thicknesses, often as
low as a few nanometres, whereas
corrosion resistance and wear minimisation require larger overall coating
thicknesses and hence individual layers of the order of microns.</p>

<script>comment();</script><p>Many of the CMMCs investigated
for corrosion protection have been based upon electrodeposited zinc alloys,
with the sacrificial protection of ferrous substrates as the end goal.� Investigators at <st1:place>
<st1:PlaceName>Loughborough</st1:PlaceName>
 <st1:PlaceType>University</st1:PlaceType></st1:place> have been particularly
interested in this class of multilayer coating.</p>

<h4><b><i>Zinc-nickel based CMMCs</i></b></h4>

<script>comment();</script><p>Baral and Maxmovitch [9] were
one of the first investigators to examine this particular system.� They operated a dual bath configuration
depositing successive layers of zinc and nickel with individual layer
thicknesses of 20-500 nm using a rotating disc electrode.� </p>

<script>comment();</script><p>Kalantary et al [10] carried
out a feasibility study into the electrodeposition of CMMC of zinc-nickel
alloys onto mild steel rotating cylinder electrodes (RCEs).� The RCE format allows a controlled turbulent
agitation regime to be utilised for the formation of coatings.� A single bath sulphate-based electrolyte was
used to produce the coatings, with electrode rotation speed and current density
being utilised to form different coating structures and compositions.� A wide range of electrodeposition conditions
brought about a variety of coating formats.�
This data was then utilised to produce the first simple multilayered
structures.� Three individual coating
layers were deposited at current densities of 1, 10 and 100 A/dm<sup>2</sup>.� Metallographic cross-sections produced the
evidence for the three individual layers and subsequent neutral salt spray
corrosion tests suggested good corrosion performance.� Further work by the same authors [11]
concentrated on examining the morphology of the Zn-Ni CMMCs and importantly,
their corrosion resistance.� A range of
CMMCs (all nominally 8mm
overall coating thickness) were corrosion tested in sodium chloride solution
and salt fog along side zinc and zinc-nickel alloy monolithic coatings of a
similar thickness.� In essence, the
layered structures were shown to have the superior corrosion resistance.� For duplex zinc-nickel alloy coatings it was
found that the more noble layer (higher nickel content) should be adjacent to
the surface.� Kalantary et al [12] also
attempted to obtain corrosion data using a polarisation technique.� Eight and sixteen layer coatings nominally of
8mm
total coating thickness were examined by cathodic and anodic polarisation in
3.5% NaCl solution.� Overall curve shapes
were similar although measurement of corrosion currents suggested that the
corrosion rates for the eight layer structures were higher.</p>

<script>comment();</script><p>Chawa et al also [13] used
individual zinc and nickel baths to electrodeposit CMMCs on mild steel
substrates, photograph 1 illustrates a simple four layer structure
electrodeposited on to mild steel. </p>

<script>comment();</script><p align="center">&nbsp;<img border="0" src="v6p52_files/v6p1263.gif" width="287" height="177"></p>
<script>comment();</script><p align="center">Photograph 1� Four layer nickel-zinc structure
electrodeposited onto a mild steel substrate from a dual bath
configuration������</p>

<script>comment();</script><p>�A further advance with this system was to
utilise a zinc-nickel alloy electroplating bath so that layered structures of
Zn-Ni/Zn and Zn-Ni/Ni could be deposited [13].�
A sulphate-based bath was used to electrodeposit the zinc, a sulphamate
formulation for the nickel and a proprietary bath for the zinc-nickel alloy
which gave a nickel content of approximately 12%.� To obtain successful CMMC deposition for zinc
and nickel layers the authors suggested that:</p>

<script>comment();</script>
<ul>
  <li><p>When electrodepositing nickel onto zinc the
current should be raised slowly to the desired level </p>

  </li>
</ul>

<script>comment();</script>
<ul>
  <li><p>Agitation had to be concentrated below the
cathode.</p>

  </li>
</ul>

<script>comment();</script><p>Corrosion protection
capabilities were also assessed using both neutral salt fog tests and
electrochemical trials using the anodic Tafel extrapolation method.� Important findings can be summarised as
follows:</p>

<script>comment();</script>
<ul>
  <li><p>The upper nickel layers on zinc were relatively
porous</p>

  </li>
</ul>

<script>comment();</script>
<ul>
  <li><p>The upper zinc layers on nickel were relatively
pore-free</p>

  </li>
</ul>

<script>comment();</script>
<ul>
  <li><p>Corrosion currents suggested, in general, that
layered structures reduced coating activity</p>

  </li>
</ul>

<script>comment();</script>
<ul>
  <li>Four and eight layer Zn-Ni/Zn (zinc being the
uppermost layer) had times to red rust in the salt spray trials that exceeded
monolithic Zn-Ni coatings by approximately 200 hrs.</li>
</ul>

<script>comment();</script><p>Table 1 illustrates corrosion
resisting trends of layered and monolithic coatings.</p>

<script>comment();</script><p>Kalantary et al [14] also
examined a dual bath zinc/nickel system based on sulphate electrolytes.� Using similar experimental techniques to
Chawa they again showed the advantages of the CMMC
structures, although in contrast to Chawa�s work they found thinner individual
layers promoted better corrosion resistance properties.</p>

<div align="center">
  <center>

<table border=1 cellspacing=0 cellpadding=0 style="border-collapse: collapse" bordercolor="#111111">
 <tr>
  <td width=132 valign=top>
  <p align="center">&nbsp;</p>
  <p align="center">Coating type*</p>
  </td>
  <td width=113 valign=top>
  <p align="center">Number of
  individual layers</p>
  </td>
  <td width=132 valign=top>
  <p align="center">E<sub>corr</sub></p>
  <p align="center">�mV vs SCE</p>
  </td>
  <td width=151 valign=top>
  <p align="center">Hours to 5% red
  rust in NSS</p>
  </td>
 </tr>
 <tr>
  <td width=132 valign=top>
  <p align="center">Zn</p>
  </td>
  <td width=113 valign=top>
  <p align="center">1</p>
  </td>
  <td width=132 valign=top>
  <p align="center">-1060</p>
  </td>
  <td width=151 valign=top>
  <p align="center">197</p>
  </td>
 </tr>
 <tr>
  <td width=132 valign=top>
  <p align="center">Ni</p>
  </td>
  <td width=113 valign=top>
  <p align="center">1</p>
  </td>
  <td width=132 valign=top>
  <p align="center">-450</p>
  </td>
  <td width=151 valign=top>
  <p align="center">71</p>
  </td>
 </tr>
 <tr>
  <td width=132 valign=top>
  <p align="center">Fe</p>
  </td>
  <td width=113 valign=top>
  <p align="center">-</p>
  </td>
  <td width=132 valign=top>
  <p align="center">-610</p>
  </td>
  <td width=151 valign=top>
  <p align="center">-</p>
  </td>
 </tr>
 <tr>
  <td width=132 valign=top>
  <p align="center">Zn/Ni</p>
  </td>
  <td width=113 valign=top>
  <p align="center">4</p>
  </td>
  <td width=132 valign=top>
  <p align="center">-735</p>
  </td>
  <td width=151 valign=top>
  <p align="center">223</p>
  </td>
 </tr>
 <tr>
  <td width=132 valign=top>
  <p align="center">Zn/Ni</p>
  </td>
  <td width=113 valign=top>
  <p align="center">8</p>
  </td>
  <td width=132 valign=top>
  <p align="center">-1005</p>
  </td>
  <td width=151 valign=top>
  <p align="center">179</p>
  </td>
 </tr>
 <tr>
  <td width=132 valign=top>
  <p align="center">Ni/Zn</p>
  </td>
  <td width=113 valign=top>
  <p align="center">4</p>
  </td>
  <td width=132 valign=top>
  <p align="center">-1050</p>
  </td>
  <td width=151 valign=top>
  <p align="center">336</p>
  </td>
 </tr>
 <tr>
  <td width=132 valign=top>
  <p align="center">Ni/Zn</p>
  </td>
  <td width=113 valign=top>
  <p align="center">8</p>
  </td>
  <td width=132 valign=top>
  <p align="center">-1035</p>
  </td>
  <td width=151 valign=top>
  <p align="center">324</p>
  </td>
 </tr>
 <tr>
  <td width=132 valign=top>
  <p align="center">Zn-12% Ni</p>
  </td>
  <td width=113 valign=top>
  <p align="center">1</p>
  </td>
  <td width=132 valign=top>
  <p align="center">-996</p>
  </td>
  <td width=151 valign=top>
  <p align="center">313</p>
  </td>
 </tr>
 <tr>
  <td width=132 valign=top>
  <p align="center">Zn/Zn-Ni</p>
  </td>
  <td width=113 valign=top>
  <p align="center">4</p>
  </td>
  <td width=132 valign=top>
  <p align="center">-1030</p>
  </td>
  <td width=151 valign=top>
  <p align="center">329</p>
  </td>
 </tr>
 <tr>
  <td width=132 valign=top>
  <p align="center">Zn/Zn-Ni</p>
  </td>
  <td width=113 valign=top>
  <p align="center">8</p>
  </td>
  <td width=132 valign=top>
  <p align="center">-1040</p>
  </td>
  <td width=151 valign=top>
  <p align="center">287</p>
  </td>
 </tr>
 <tr>
  <td width=132 valign=top>
  <p align="center">Zn-Ni/Zn</p>
  </td>
  <td width=113 valign=top>
  <p align="center">4</p>
  </td>
  <td width=132 valign=top>
  <p align="center">-1020</p>
  </td>
  <td width=151 valign=top>
  <p align="center">552</p>
  </td>
 </tr>
 <tr>
  <td width=132 valign=top>
  <p align="center">Zn-Ni/Zn</p>
  </td>
  <td width=113 valign=top>
  <p align="center">8</p>
  </td>
  <td width=132 valign=top>
  <p align="center">-1080</p>
  </td>
  <td width=151 valign=top>
  <p align="center">519</p>
  </td>
 </tr>
 <tr>
  <td width=132 valign=top>
  <p align="center">Zn-Ni/Ni</p>
  </td>
  <td width=113 valign=top>
  <p align="center">4</p>
  </td>
  <td width=132 valign=top>
  <p align="center">-660</p>
  </td>
  <td width=151 valign=top>
  <p align="center">208</p>
  </td>
 </tr>
 <tr>
  <td width=132 valign=top>
  <p align="center">Zn-Ni/Ni</p>
  </td>
  <td width=113 valign=top>
  <p align="center">8</p>
  </td>
  <td width=132 valign=top>
  <p align="center">-670</p>
  </td>
  <td width=151 valign=top>
  <p align="center">181</p>
  </td>
 </tr>
 <tr>
  <td width=132 valign=top>
  <p align="center">Ni/Zn-Ni</p>
  </td>
  <td width=113 valign=top>
  <p align="center">4</p>
  </td>
  <td width=132 valign=top>
  <p align="center">-980</p>
  </td>
  <td width=151 valign=top>
  <p align="center">328</p>
  </td>
 </tr>
 <tr>
  <td width=132 valign=top>
  <p align="center">Ni/Zn-Ni</p>
  </td>
  <td width=113 valign=top>
  <p align="center">8</p>
  </td>
  <td width=132 valign=top>
  <p align="center">-900</p>
  </td>
  <td width=151 valign=top>
  <p align="center">276</p>
  </td>
 </tr>
</table>

  </center>
</div>

<script>comment();</script><p align="center"><i>����������� * For multilayer coatings of
repeating X/Y, Y represents the top layer</i></p>

<script>comment();</script><p align="center">�&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Table 1��
Corrosion resistance results for substrate, single and multilayer
coatings</p>

<h4><b><i>Zinc-Iron Based CMMCs</i></b></h4>

<script>comment();</script><p>Electrodeposited zinc-iron
alloys have found considerable use as sacrificial coatings for ferrous metal
surfaces.� It is therefore only proper
that they be examined for their ability to form multilayer coatings on the same
type of substrate.� To this end Liao et
al [15-17] have examined both single and dual bath zinc/zinc-iron and zinc-iron
only systems.� Photographs 2 and 3
illustrate 9 and 32 layer Zn/Zn-Fe structures electrodeposited onto a mild
steel substrate by a dual bath technique. Experimentation was sequential in
nature with initial studies examining the effect of electrodeposition current
density and solution hydrodynamics using a rotating hull cell designed by
Madore and Landolt [18].� Using a
combination of various rotation speeds and current densities this particular
Zn-Fe system was found to be eminently suitable for CMMC production.� Also examined was the addition of ammonium
chloride as a conductivity salt which improved the quality of the
electrodeposits produced.� In a second
series of investigations, Liao et al examined the morphological-controlling
aspects of the current density and agitation level [16].� Again a rotating 
<st1:City><st1:place>Hull</st1:place></st1:City>
cell was utilised.� Current density was
found to have the greatest effect on electrodeposit morphology and compositions
of less than 1 wt% and 15-75 wt% produced a fine crystal structure.� Once the electrodeposition parameters were
fully assessed CMMC structures were produced from the single electrolyte
[17].� Additives such as citric acid,
thiourea, polyglycol and sodium acetatewere utilised to ensure level
individual layers.�</p>

<script>comment();</script><p align="center">&nbsp;<img border="0" src="v6p52_files/v6p1264.gif" align="center" width="285" height="183">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </p>

<script>comment();</script><p align="center">Photograph 2� Nine layer Zn/Zn-Fe CMMC electrodeposited
onto a mild steel substrate from a dual bath&nbsp;configuration</p>

<script>comment();</script><p align="center">&nbsp;<img border="0" src="v6p52_files/v6p1265.gif" align="center" width="286" height="185"></p>

<script>comment();</script><p align="center">Photograph 3� Thirty two layer Zn/Zn-Fe CMMC
electrodeposited onto a mild steel substrate from a dual bath configuration</p>

<script>comment();</script><p>Jensen et al improved the zinc
�iron CMMC system proposed and first utilised by Liao et al [19,20].� The main improvements were the addition of
ascorbic acid as a reducing agent and the use of mild steel as an anode
material.� Further additives were used to
ensure level, coherent individual layers.�
The improved zinc-iron formulation was ideal for CMMC production because
of the two plateaux on the composition-current density plot.� Thus a single bath system could alternate
between the two current density levels to produce the required CMMC
structure.� A second single bath Zn-Fe
system was employed to produce CMMC structures under high speed electrodeposition
conditions.</p>

<h4><b><i>Zinc-Cobalt Based CMMCs</i></b></h4>

<script>comment();</script><p>Until recently the zinc-cobalt
alloy system was probably one of the least investigated zinc alloy systems for
the production of CMMCs.� Probably some
of the most noteworthy investigations have been carried out by Kirilova et al
[21-23].� Initial investigations were
carried out to produce one and two-layer structures from both dual and single
baths [21].� Greater numbers of layers
were also electrodeposited using dual and single baths [22].� Anodic stripping voltammetry was utilised as
the technique with which to examine these structures.� For both dual and single bath structures, the
dissolution of the coatings occurred at more positive potentials than for zinc
but more negative than cobalt.� For both
dual and single bath systems, the greater the number of overall layers the more
positive the dissolution potential.� A
third series of investigations by Kirilova et al [23] examined the corrosion
resistance of Zn-Co alloy CMMC structures.�
Corrosion potential measurements and conventional neutral salt spray
corrosion tests were carried out.� The
corrosion potentials of single bath structures were found to have a more
positive potential than their dual bath counterparts.� Neutral salt spray tests suggested the best
resistance to white corrosion product was exhibited by a four layer single bath
specimen of 12 mm
overall coating thickness and in a chromated condition.� In general layered structures with� a top layer of Zn, Co or Zn-Co1% showed no
red rust even after 1584 hours of testing.�
Similarly it was found that for the same overall coating thickness a
small number of layers (in this case 4 against 40) produces the best corrosion
resistance.</p>

<script>comment();</script><p>More recently Bahorololoom et
al have examined Zn-Co CMMC structures, but with much higher cobalt contents
[24].� They found that electrolyte
solution reactions had a big effect on cobalt content.� More specifically the production of Co<sup>3+</sup>
ions by anodic oxidation had a deleterious effect on obtaining high cobalt
contents in the electrodeposits.� It was
found that a divided cell was required to allow cobalt to remain in the
divalent oxidation state at the cathode surface.� It was also found that the divided cell
allowed the electrodeposition process to operate as an equilibrium mechanism as
opposed to an anomalous one which was found for the single compartment
cell.� Zn-Co deposits, obtained from the
two-compartment cell, were found to regularly contain cobalt at levels over 70%
at appropriate current densities.</p>

<h4><b><i>Zinc-Manganese Based Multilayers</i></b></h4>

<script>comment();</script><p>Of the main zinc alloys
successfully electrodeposited, zinc-manganese, is the one which has yet to make
its mark commercially [25].� It has been
suggested that it could well be an effective sacrificial coating on steel for a
number of applications such as steel strip [26] and wire [27] although it is
unlikely to have gained any significant industrial status due to its inherent
difficulties in electrodeposition.� The
main electrolyte utilised by investigators has been the sulphate-citrate
formulation.� This zinc-manganese
electrodeposition suffers from two main drawbacks:</p>

<script>comment();</script>
<ul>
  <li><p>Poor cathode current efficiency, often as low as
30%.</p>

  </li>
</ul>

<script>comment();</script>
<ul>
  <li><p>Poor electrolyte stability resulting in the
precipitation of manganese (III) citrate.</p>

  </li>
</ul>

<script>comment();</script><p>With these inherent difficulties
with the main zinc-manganese electrolyte (sulphate-citrate) it is not
surprising to find that very little effort has been made to electrodeposit
Zn-Mn CMMCs on ferrous substrates.�
Nitipanyawong et al have attempted to produce Zn-Mn layered coatings
from a single sulphate-citrate bath [28].�
Structures containing 4-50 individual layers have been successfully
produced using current density as the composition control.� </p>

<h3><b>Conclusions</b></h3>

<script>comment();</script><p>This short review has
highlighted the status of layered or CMMCs.�
It is clear that there are several end-uses for such structures.� One of these is for the barrier and
sacrificial protection of ferrous surfaces.�
This as been achieved through the deposition of zinc alloy CMMCs.� A series of zinc alloys have been utilised in
this way and a number of the systems are showing promise.</p>

<script>comment();</script><p>The future, therefore, looks
very good for this type of coating, not only in its zinc-based sacrificial
role, but also many of its others.� Many
electrodeposited alloy systems have yet to be examined and utilised in the CMMC
format, this will, in all probability, occur in many cases over the next few
years.� Other CMMC themes are also areas
where interesting advances can be made.�
One of these is with graded coatings. The possibilities of producing a
coating with each component of an electrodeposited alloy varying through the
coating has very interesting possibilities.�
Another area of note for the future is layered composite coatings. There
is some recent work reported on this [29], but as with graded coatings, its
potential has not been fully investigated.</p>

<h3><b>References</b></h3>

<p>1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Gabe D R. Principles of Metal Surface Treatment
and Protection, 2<sup>nd</sup> Edition, Pergamon Press, <st1:City><st1:place>Oxford</st1:place></st1:City>,
p86 (1978).</p>

<p>2.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Koehler J S. Phys. Rev. B, Vol 2, P547 (1970).</p>

<p>3.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Despic A R and Jovic V D. J. Electrochem. Soc.,
Vol 134, P3004 (1987).</p>

<p>4.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Brenner A. Electrodeposition of Alloys.� Principles and Practice Vol II, Academic
Press, <st1:State><st1:place>New York</st1:place></st1:State>, P589 (1963).</p>

<p>5.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Cohen U, Koch FB, Sard R. Electrochemical
Society Meeting, <st1:place><st1:City>Orlando</st1:City>, <st1:country-region>USA</st1:country-region></st1:place>
(1981).</p>

<p>6.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Benette L H, Swatzendruber L J, Lashmore D S,
Oberle R, Atzmony U, Dariel M P, Watson R E. Phys. Rev. B., Vol 40, P4633
(1989).</p>

<p>7.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Roos C A, Goldman L M, Spaepen F. J.
Electrochem. Soc. Vol 140, P9 (1993).</p>

<p>8.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Haseeb A, Celis J P, Roos J R. J. Electrochem.
Soc. Vol 141, P230 (1994).</p>

<p>9.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Barral G, Maximovitch S. Colloque de Physique,
Vol 51, No 14, PC4-291 (1990).</p>

<p>10.&nbsp;&nbsp;&nbsp; Kalantary,
M R, Wilcox G D, Gabe D R. Electrochimica Acta, Vol 40, P1609 (1995).</p>

<p>11.&nbsp;&nbsp;&nbsp; Kalantary M R, Wilcox G D, Gabe D R . Proceedings of <st1:country-region><st1:place>UK</st1:place></st1:country-region>
Corrosion 95, 21-23<sup>rd</sup> November, 1995, <st1:place><st1:City>Harrogate</st1:City>,
 <st1:country-region>UK</st1:country-region></st1:place>.</p>

<p>12.&nbsp;&nbsp;&nbsp; Kalantary, M R, Wilcox G D, Gabe D R in Advances in Surface Engineering. Volume II: Process Technology, Edts� Datta P K, Burnell-Gray J S, Royal Society of Chemistry, P265 (1997).</p>

<p>13.&nbsp;&nbsp;&nbsp; Chawa G, Wilcox G D, Gabe D
R. Trans. Inst. Met. Fin. Vol 76, P117 (1998).</p>

<p>14.&nbsp;&nbsp;&nbsp;&nbsp; Kalantary M R, Wilcox G D,
Gabe D R. Br. Corros. J. Vol 33, P197 (1998).</p>

<p>15.&nbsp;&nbsp;&nbsp;&nbsp; Liao Y, Gabe D R and Wilcox
G D. Plat. &amp; Surf. Fin. Vol 85, No 3, P60 (1998).</p>

<p>16.&nbsp;&nbsp;&nbsp;&nbsp; Liao Y, Gabe D R and Wilcox
G D. Plat. &amp; Surf. Fin. Vol 85, No 8, P62 (1998).</p>

<p>17.&nbsp;&nbsp;&nbsp;&nbsp; Liao Y, Gabe D R and Wilcox
G D. Plat. &amp; Surf. Fin. Vol 85, No 9, P88 (1998).</p>

<p>18.&nbsp;&nbsp;&nbsp;&nbsp; Madore C, Landolt D. Plat.
&amp; Surf. Fin. Vol 80, No 11, P73 (1993).</p>

<p>19.&nbsp;&nbsp;&nbsp;&nbsp; Jensen J D, Critchlow G W,
Gabe D R. Trans. Inst. Met. Fin. Vol 76, P187 (1998).</p>

<p>20.&nbsp;&nbsp;&nbsp;&nbsp; Jensen J D, Gabe D R,
Wilcox G D. Surf. &amp; Coat. Technol. Vol 105, P240 (1998).</p>

<p>21.&nbsp;&nbsp;&nbsp;&nbsp; Kirilova I, Ivanov I,
Rashkov St. J. Appl. Electrochem. Vol 28, P637 (1998).</p>

<p>22.&nbsp;&nbsp;&nbsp;&nbsp; Kirilova I, Ivanov I,
Rashkov St. J. Appl. Electrochem. Vol 28, P1359 (1998).</p>

<p>23.&nbsp;&nbsp;&nbsp;&nbsp; Kirilova I, J. Appl.
Electrochem. Vol 29, P1133 (1999).</p>

<p>24.&nbsp;&nbsp;&nbsp;&nbsp; Bahoroloom E, Gabe D R,
Wilcox G D. Submitted to J. Electrochem. Soc (2002).</p>

<p>25.&nbsp;&nbsp;&nbsp;&nbsp; Wilcox G D, Petersen B.
Trans. Inst. Met. Fin. Vol 74, P115 (1996).</p>

<p>26.&nbsp;&nbsp;&nbsp;&nbsp; Sagiyama M, Urakawa T,
Adaniya T, Hara T, Fukuda Y. Plat. &amp; Surf. Fin. Vol 74, No 11, P77 (1987).</p>

<p>27.&nbsp;&nbsp;&nbsp;&nbsp; Bozzini B, Pavan F, Bollini
G, Cavallotti P L.� Trans. Inst. Met.
Fin. Vol 75, P175 (1997).</p>

<p>28.&nbsp;&nbsp;&nbsp;&nbsp; Nitipanyawong C, Wilcox G
D, Gabe D R. Proceedings of SURFIN 2000, <st1:place><st1:City>Chicago</st1:City>, <st1:country-region>USA</st1:country-region></st1:place>.</p>

<p>29.&nbsp;&nbsp;&nbsp;&nbsp; Kerr C, Barker D, Walsh F,
Archer J.� Trans. Inst. Met. Fin. Vol 78,
P171 (2000).</p>

<p>&nbsp;</p>

</div>

<SCRIPT>footer()</SCRIPT></body>

</html>