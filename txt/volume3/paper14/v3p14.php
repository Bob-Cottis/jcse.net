<?php 
session_start();
include_once('/home/jcsete5/public_html/jcse.org/jcse/php_inc/jrnl_subs.php');
$logged_in=is_loggedin();
?>
<html>
<head>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
<title>JCSE Volume 3, paper 14</title>
<SCRIPT src="/getcomm.php?vol=3&pap=14"></SCRIPT>
<SCRIPT src="/jsinc/jcsesubs.js.php"></SCRIPT>
<SCRIPT>getcommentmode();</SCRIPT>
</HEAD>
<body>
<script>var lgi=<?php if ($logged_in) { echo('true');} else { echo('false');} ?>;</script>
<script src="/jsinc/writeheader.js"></script><?php ggl_ad(); ?>
  <h2>Volume 3 Paper 14</h2>
  <script>ifnotmode(3,'<p>Submitted 9th July 2001<br>');</script>
  <hr>

<h2>The new principles of the building of
equivalent circuits for the modeling of metal-film-corrosive environment
systems. </h2>

<p>Shagaev A. A., <br>
<em> Independent researcher, </em><i>house 17-a
Apartment number 6, 660037 Kolomenskaya Str., Krasnoyarsk, Russia, </i><em>E-Mail Address: <script>mailto2('shagaev','krasu.ru')</script> or <script>mailto2('freud','pine.krs.ru')</script></em></p>

<p>Abolin O. E.,<br>
<em>Central laboratory, "Chemical-metallurgical plant" Ltd, 30 Matrosova str.,
Krasnoyarsk, 660079, Russia.</em> </p>

<p>Danilov V. G.,<br>
<i>Laboratory of Catalytic Chemistry of The Coal and Biomass, Institute of
Chemistry and Chemical Technology SD RAS, 16 Akademgorodok str., Krasnoyarsk,
660036, Russia.</i> </p>

<SCRIPT>notify();</SCRIPT><SCRIPT>comment(1)</SCRIPT><h3>Abstract</h3>

<p>In the paper we propose the main principles of the building
of equivalent electric circuits for the modeling of metal-film-corrosive
environment systems. At the same time, the authors of this paper took into
account the possibility of both electrochemical and ionic chemical processes in
such Redox systems. We proceeded from the necessity to take into account all
processes in a RedOx (and ionic) system in detail as much as possible. As a
result, any chosen element of such equivalent circuit corresponds to its stage
of a corresponding RedOx (ionic) process. The requirements for the relative
position of all circuit elements were formulated. The proposed principles were
applied to the modeling of the behavior of a corroding metal in an arbitrary
corrosive environment. The obtained simplest circuit allows to estimate
quantitatively the influence of the remainder of the mass of a metal (oxidant
and solvent, the electroconductive properties of an electrolyte, the nature of
a solvent (and forming products of corrosion), the rate of the physical
dissolving of a film) on the total current of corrosion. It was demonstrated that the nature of a corrosion process is
determined by the resistances of the transferring of forming corrosion products
(ions) in phases contacting with a metal. The corrosion process spreads,
mostly, into the phase (contacting with a metal), the electric resistance (of
the transferring of forming corrosion products) of which is lesser. The order
of the calculation of the resistances of the circuit was proposed. The
requirements (for the correct carrying out of a corrosion study) were
established. The principles, we propose in this paper can be apply to any RedOx
(ionic) systems used in all fields of chemistry (electrochemistry, catalysis, photochemistry etc.). </p>

<p><b>Keywords</b>: equivalent circuits, corrosion, modeling. </p>

<h3>Introduction</h3>

<SCRIPT>comment(2)</SCRIPT><p>Electrode potential is one of the fundamental notions of
electrochemistry. It is the key concept when describing the processes of metal
corrosion, the functioning of batteries and a number of catalytic processes in
chemistry and chemistry interdisciplinary sciences. Number of researchers
worked on the problem of the description of electrode potential by means of
electric equivalent circuits. It so happened that different researchers used 2
different models to solve this problem:</p>

<ol>
  <SCRIPT>comment(3)</SCRIPT><li>
a corroding metal-oxidant system was considered as a
microgalvanic battery, where anodic and cathode areas are located on the
heterogeneous surface of a metal in contact with environment. The corrosion of
a metal is the result of microgalvanic battery processes. Electrons flow
through the metal and ions flow through the electrolyte. This model (let us
call it "a heterogeneous surface metal
corrosion" or HtSMC) is applied when describing the corrosion of metal and
alloys with a heterogeneous composition.</li>
  <SCRIPT>comment(4)</SCRIPT><li>
The processes of forming the cations (of the metal) and anions
(from the molecules or ions of an oxidant) take place, correspondingly, on the
interface of a metal/film and a film/solution in a metal/film/solution system.
Electrons flow through the metal and the electronic resistance of the film;
cations flow through the cationic resistance of the film. This model (let us
call it "a homogeneous surface metal
corrosion" or HmSMC) is applied when describing the corrosion of metal and
alloys with a homogeneous composition.</li>
</ol>

<SCRIPT>comment(5)</SCRIPT><p>Muller [<script>crossref(1)</script>,<script>crossref(2)</script>] was the first who came up with an idea
that the electrode potential of the corroding metal (with the a heterogeneous
surface) is an intermediate between the potentials of anodic and cathodic
electrode areas on its surface. Chupr [<script>crossref(3)</script>] was the first to use equivalent
electric circuits for the description of a corroding metal with the help of the
Muller theory. In Russia, Akimov and
Tomashov [<script>crossref(4)</script>] were the first to study the electrode potentials of a multi
phases electrochemical systems. They used HtSMC model. They got the following
equation for the metal potential being measured:</p>

<SCRIPT>comment(6)</SCRIPT><p align=center>
<img border=0
src="v3p14_files/image002.gif" width="179" height="32"> (1)</p>

<p>where E<sub>a</sub> and E<sub>k</sub> are the potentials
of the anodic and cathodic areas of the surface of an electrode </p>

<p>r<sub>a</sub>
and r<sub>k</sub> are the resistances of the anodic and cathodic areas of the
whole circuit. </p>

<SCRIPT>comment(7)</SCRIPT><p>Absolutely the same equation was advanced by Muller for a
special case of a passivating metal [<script>crossref(1)</script>, <script>crossref(2)</script>]. Muller considered the
meaning of the values of the equation from the point of view of his passivation
theory. Later, Daniel-Bek [<script>crossref(5)</script>]
advanced a number of equivalent circuits describing of a above-mentioned
equation as well as the functioning of a corroding metal under an external
polarization (to explain a negative difference effect). It was following
circuits:</p>

<p><img border=0
src="../../volume3/paper14/v3p14f1.gif" width="785" height="287"></p>

<p><b>Figure. 1. Microelement equivalent
circuits put forward by Daniel-Bek. (1) corrosive microelement without an
external polarization; (2) corrosive microelement with an anodic external
polarization; (3) corrosive microelement with a cathodic external
polarization</b></p>

<p>where a  - the arbitrary point of an
electric contact with a metal</p>

<p>b - the reference electrode location in the solution</p>

<p>r - the electrolyte resistance between the
location of the reference electrode and the corroding metal
surface. </p>

<p> r<sub>a</sub>
and r<sub>k</sub>  the anodic and cathodic resistances of the microelement
circuit</p>

<p> J 
external current</p>

<p> R  the
resistance of the cathodic (anodic) circuit of a connected external cathode
(anode).</p>

<p>Fig. 1 (2), to take
into account an external polarization some of circuit elements are marked with
the sign of &quot; ' &quot;. </p>

<p>Note that the direction of ik in Fig.1.(3)
is opposite to the ik direction in Fig.1.(2).

<SCRIPT>comment(9)</SCRIPT><p>Fig. 1 was considered by Daniel-Bek as applied to a
microgalvanic element functioning on the surface of an electrode. So, Daniel-Bek came to the conclusion that the
corresponding anodic and cathodic areas of the microgalvanic element circuit
were located at the thinnest boundary layer of an electrolyte. Hence, Daniel-Bek
drew the conclusion, that the reference electrode was not located in the way of
the current, flowing in the electrolytic circuit of the microgalvanic element,
which determines the location of the element "r" in the circuit. Fig.1 (2)
serves to explain the negative difference effect (the decreasing of the current
of metal corrosion due to the anodic polarization of an electrode). Based on
the principles of linear dependence of the anodic (&#1045;<sub>a</sub>)
and cathodic (&#1045;<sub>k</sub>) potentials on the densities of the
corresponding currents (i<sub>a</sub> and i<sub>k</sub>):</p>

<SCRIPT>comment(10)</SCRIPT><p align=center>
<img border=0
src="v3p14_files/image006.gif" width="95" height="25"> (2)</p>

<SCRIPT>comment(11)</SCRIPT><p align=center><sub>
<img border=0
src="v3p14_files/image008.gif" width="95" height="25"></sub>  (3)</p>

<SCRIPT>comment(12)</SCRIPT><p align="left">where E<sub>a</sub>, b<sub>a</sub> &#1080; E<sub>k</sub>, b<sub>k</sub>
 the corresponding coefficients of the linear dependences. As a result,
Daniel-Bek got the following equation for the potential of a corroding metal
(anodic polarization):</p>

<SCRIPT>comment(13)</SCRIPT><p align="center">&nbsp; <sub>
<img border=0
src="v3p14_files/image010.gif" width="151" height="29"></sub>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
(4)</p>

<SCRIPT>comment(14)</SCRIPT><p>The equivalent electric circuit (Fig. 1(3)) was proposed by
Daniel-Bek to explain the cathodic protection effect (the decreasing of a metal
corrosion rate under cathodic polarization).</p>

<SCRIPT>comment(15)</SCRIPT><p>In the 1990-s Gerasimova [<script>crossref(6)</script>]
proposed an equivalent circuit
which, at the first approximation, described this electrochemical system quite
well quantitatively. The equivalent circuit was based on the HmSMC model.</p>

<SCRIPT>comment(16)</SCRIPT><p>It was the following scheme: </p>

<p align=center><img border=0
src="v3p14_files/image011.gif" width="179" height="104"></p>

<SCRIPT>comment(17)</SCRIPT><p>Figure 2. The Gerasimova equivalent circuit</p>

<p>where R<sub>i</sub>
and R<sub>e</sub>  the cationic (ions Me+) and electronic resistances of the
film of corrosion products on the main electrode. Each of these values (R<sub>i</sub>
and R<sub>e</sub>) include phases boundaries resistances. </p>

<p> R<sub>V.</sub>
- the resistance of the voltmeter</p>

<p> &phi;<sub>Me/Me(+)</sub>, &phi;<sub>Ox/Red</sub>, &phi;<sub>ref.el.</sub>
 the equilibrium electrode potentials of a metal Me<sub>1</sub>, a
reductive-oxidative Red/Ox electrode and a reference electrode, respectively.</p>

<SCRIPT>comment(18)</SCRIPT><p>The author got the following expression for the potential of
an electrode covered with a corrosion product film. This potential was measured
with a voltmeter: </p>

<p align=center><sub><img border=0
src="v3p14_files/image013.gif" width="120" height="55"></sub> (5)</p>

<p>where U<sub>V.</sub>- voltmeter reading</p>

<p align=center><sub><img border=0
src="v3p14_files/image015.gif" width="159" height="25"></sub>  
(6)</p>

<p align=center><sub><img border=0
src="v3p14_files/image017.gif" width="152" height="25"></sub>  
(7)</p>

<SCRIPT>comment(19)</SCRIPT><p>The obtained result shows that, if R<sub>i</sub>=0 then U<sub>V.</sub>=&#1045;1.
So, the electrode potential is determined by the Me/Me<sup>+</sup> equilibrium,
in the case. As R<sub>i</sub> increases (or R<sub>e</sub> 
 decreases) U<sub>V.</sub>
approaches to &#1045;2. Thus, the
electrode potential, more and more, is determined by the Red/Ox equilibrium, in
the case. This way, the influence of the ratio (R<sub>i</sub>/R<sub>e</sub>) on
the measured potential value becomes clear. </p>

<SCRIPT>comment(20)</SCRIPT><p>The comparison of the approaches of Akimov, Tomashev,
Daniel-Bek and Gerasimova, regardless the difference between the corrosion
models they use, reveals some similarity when building a metal corrosion
circuit:</p>

<ol>
  <SCRIPT>comment(21)</SCRIPT><li>
they used electrode potentials in these circuits</li>
  <SCRIPT>comment(22)</SCRIPT><li>
anodic and cathodic electrode potentials were connected
back-to-back. In this case, according to the Daniel-Bek and Gerasimova circuits
either the cathodic or anodic processes can not supply corresponding ions to
the environment. This deprives these circuits of the physical meaning. It brings us to an idea that the potentials
must be series-connected and they must be the potentials of processes, not the
electrode potentials.</li>
</ol>

<SCRIPT>comment(23)</SCRIPT><p>The difference consists in the fact that Gerasimova unlike Daniel-Bek:</p>

<ol>
  <SCRIPT>comment(24)</SCRIPT><li> didnt
take into account the linear dependence of metal (&phi;<sub>Me/Me(+</sub>) and
oxidant (&phi;<sub>Ox/Red</sub>)
potentials on the value of the current passing through them (no-current
measuring).</li>
  <SCRIPT>comment(25)</SCRIPT><li> used
a circuit similar to that of Daniel-Bek (for the polarization).</li>
</ol>

<SCRIPT>comment(26)</SCRIPT><p>The Daniel-Bek and Gerasimova equivalent circuits have some
disadvantages, such as:</p>

<ol>
  <SCRIPT>comment(27)</SCRIPT><li> these
circuits dont take into account what happens to cations and anions, forming in
the course of process of metal corrosion (and in the course of measuring a
potential), later on, (their possible interaction in a solution resulting in
the formation of ionic compounds (e.g. ion pairs). The energy of the processes must be part of the emf of the total
corrosion process and of the electrode potential.</li>
  <SCRIPT>comment(28)</SCRIPT><li> these
circuits dont takes into account 3 variants of corrosion process:<br>
    a)&nbsp;the formation of a corrosion products film on the surface of
the main electrode only<br>
    b) the dissolving of corrosion products in the solution only<br>
    c) a possibility of a partial dissolving of corrosion products in
the solution
  </li>

<SCRIPT>comment(29)</SCRIPT><li>these
circuits dont takes into account that the corrosion process take place on the
reference electrode, as well as, the presence of electroconductive films and
other formations with a finite (ionic and electronic) resistance on the surface
of the reference electrode.</li>

<SCRIPT>comment(30)</SCRIPT><li>the
Daniel-Bek equivalent circuit takes into account the conductivity of a
solution. Neither, Daniel-Beks nor Gerasimovas equivalent circuits take into
account the influence of the nature of a solution on U<sub>v</sub>
and the values of corrosion currents.

<SCRIPT>comment(31)</SCRIPT><li>Gerasimova
didnt take into account the fact, that the processes similar to those
taking place on the main electrode can, also, take place at the metal/film and
film/solution phase boundaries of the reference electrode. Any oxidation
reaction on the reference electrode must correspond to a reduction reaction on
the main electrode and vice versa. <u>At the same time, every molecular
chemical reaction (or a set of reactions) must be described by a corresponding
circuit</u>.</li>

<SCRIPT>comment(32)</SCRIPT><li>none
of this circuits take into account the mass of a metal, oxidant and solvent. It
makes this circuits divorced from real life practice.</li>

<SCRIPT>comment(33)</SCRIPT><li>the
reference electrode (Daniel-Bek writes about in his paper) is absent (in form
of his potential or the emf) in his circuit. The Daniel-Bek assumption, that
the reference electrode is not located in the way of the current flowing in the
electrolytic circuit of a microgalvanic element is true only in part. Both the
cathodic and anodic areas of a microgalvanic element simply have to form their
own electric circuits, respectively, with anodic and cathodic areas on the
reference electrode. Thus, the Daniel-Bek equivalent circuit loses its real
physical meaning. </li>

<SCRIPT>comment(34)</SCRIPT><li>The
way the anodic and cathodic electrode potentials are connected is such that
their emf vectors are in opposite directions. This doesnt allow the cathodic
or anodic process to supply the environment with corresponding ions. This
deprives these circuits of their physical meaning. </li>
</ol>
<SCRIPT>comment(35)</SCRIPT><p>We can neglect the points (2a,
b, c) and (4), but the others are very important and cannot be neglected. </p>

<SCRIPT>comment(36)</SCRIPT><h4 align="left">Principles of Construction of
Equivalent Electric Circuits, Modeling Ionic Chemical Processes&nbsp; </h4>

<p>When building this circuit the authors of this paper took
into account the possibility of both electrochemical and chemical corrosion of
a metal. We proceeded from the necessity of studying all processes in the
metal/environment system in detail as much as possible. At the same time:</p>

<SCRIPT>comment(38)</SCRIPT><p>1)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
any chosen element of an equivalent circuit corresponds to its
stage of the process. For example, electrical resistance (ionic, electronic or
molecular transfer resistance) corresponds to the process of ions (electrons,
molecules) transfer; the emf corresponds to the process of the interaction of
particles (molecules, ions and electrons). We can calculate E value using the
equation:</p>

<p align="center"> <sub><img border=0
src="v3p14_files/image019.gif" width="84" height="37"></sub> 
(8)</p>

<p>where <i> dG</i>  the Gibbs free energy
change of the interaction process</p>

<p><i>n</i>  the number of electrons
transported in the course of the interaction process (for the solvation process
n is equal to the charge of ions)</p>

<p><i>F</i>  the Faraday constant (equal
to 96500 C/gram-equivalent) </p>

<SCRIPT>comment(39)</SCRIPT><p>2)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
any chosen phase of the system corresponds to its electric
circuit or circuit branch. </p>

<SCRIPT>comment(40)</SCRIPT><p>3)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
every circuit must describe a complete molecular chemical
reaction (or a set of complete reactions).</p>

<SCRIPT>comment(41)</SCRIPT><p>4)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
every emf vector of any circuit must describe its separate
stage of a molecular reaction of the circuit. The emf vectors direction of the
circuit must reflect, correctly, the process, corresponding to the circuit. For
example:</p>

<p align=center><img border=0
src="v3p14_files/image020.gif" width="127" height="77"></p>

<p> if the emf (3) of the circuit (1) describes the solvation
process and the emf3 direction coincides&nbsp;with the accepted direction of the path- tracing (for example
clockwise) of the whole circuit, then the emf3 direction circuit (2) is opposite to the direction
of the path- tracing and, thus, reflects the inverse process(desolvation),
and the emf sums of both circuits in the direction of the
their path-tracing describe the processes in these circuits correctly.
</p>

<SCRIPT>comment(42)</SCRIPT><p>5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
The initial relative position of all circuit elements must
correspond exactly to their actual position in the system we model. However,
subsequently, the circuit elements can change their position in according to
the electrical laws. </p>

<SCRIPT>comment(43)</SCRIPT><p>6)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
We should avoid using, repeatedly the same elements (identical
resistances and emfs) in different parts of the circuit. If you fail to do it,
it is necessary to check if the sums of the emfs and resistances of all
circuits correspond to the reactions in these circuits. </p>

<SCRIPT>comment(44)</SCRIPT><h4>The application of the proposed method to the
modeling of the corroding behavior of a metal in arbitrary corrosive
environment.</h4>

<SCRIPT>comment(45)</SCRIPT><p>Guided by these principles, the authors of this paper
propose
an equivalent electric circuit describing a process of metal corrosion. The circuit allows to estimate
quantitatively the influence of the remainder of the mass of a metal, oxidant
and solvent, the electroconductive properties of an electrolyte, the nature of
a solvent and forming products of corrosion on the total current of corrosion
(which is equal to the sum of the current of the forming of soluble products of
corrosion + the current of the forming of insoluble products of corrosion). </p>

<SCRIPT>comment(46)</SCRIPT><p>The most simple equivalent electric circuit we propose is
the following:</p>

<p align=center><img border="0" src="../../volume3/paper14/v3p14f3.gif" width="441" height="227"></p>

<p align="center"><b>Figure 3. The equivalent
circuit proposed in this work.</b></p>

<SCRIPT>comment(47)</SCRIPT><p>After simplifying the circuit it is as shown in Fig.
4</p>

<p align=center><b><img border=0
src="v3p14_files/image022.gif" width="350" height="202"></b></p>

<SCRIPT>comment(48)</SCRIPT><p align="center"><b>Figure 4. The paper authors equivalent circuit after some
simplifications.</b></p>

<p>where R<sub>i</sub> and R<sub>e</sub> - respectively, the sums of the cationic and
electronic resistances of metal/film (R<sub>iMe/film</sub>, R<sub>eMe/film</sub>) phase boundaries, film
(R<sub>ifilm</sub>, R<sub>efilm</sub>) and film/solution phase boundaries (R<sub>ifilm/s</sub>, R<sub>efilm/s</sub>).</p>
<SCRIPT>comment(49)</SCRIPT><p>However,
unlike the previous authors, the Re value includes the ohmic resistance of a
metal (R<sub>Me</sub>) and, so called, the resistance of transferring the
molecules (ions) of an oxidant to the
film surface (Rox). Thus, the authors of this paper take into account the mass
of a metal and oxidant, as well as, the fact that it is possible to model such
processes, the fact, which either wasnt taken into account at all by a number
of previous researchers or, for others, was the reason to refuse to consider
such processes as electrochemical processes (referring to the diffusive nature
of the process of the transferring of an oxidant to a metal) and, consequently,
to give up attempting to model such processes by means of electric equivalent
circuits.&nbsp; It should be taken into
account that the corresponding values of resistances are functions of time,
currents flowing through them (including the current of the physical dissolving
of a film), the mass of a metal (and an oxidant), the initial characteristics
of a film and the whole set of external and internal conditions (temperature,
illumination, dynamic recrystallization processes and so on). For more detailed
information about the R<sub>i</sub> and R<sub>e </sub>values see Appendix 2. </p>

<SCRIPT>comment(50)</SCRIPT><p>R<sup>S</sup><sub>c1</sub> and R<sup>S</sup><sub>a1</sub> 
respectively, the cationic (for main electrode cations) and anionic (for anions
forming) resistances of the layers of an electrolyte (the layers, taking part
in a corrosion products dissolving process).
This values depends from time, currents, initial and current electrolyte
parameters, external and internal condition influencing by them. For more
information about the R<sup>S</sup><sub>c1</sub> and R<sup>S</sup><sub>a1</sub>
values see Appendix 2.</p>

<SCRIPT>comment(51)</SCRIPT><p>R<sup>a</sup><sub>S</sub> and R<sup>k</sup><sub>S</sub> 
the resistance of the transferring of the molecules of a solvent to the anodic
and cathodic areas of a corrosive element on the surface of the film/solution
phase boundary for solvation of forming ions. For details see Appendix 2.</p>

<p align=center><sub><img border=0
src="v3p14_files/image024.gif" width="108" height="26"></sub><sub><img border=0
src="v3p14_files/image026.gif" width="93" height="25"></sub></p>

<SCRIPT>comment(52)</SCRIPT><p>R<sup>M</sup><sub>c</sub>
and R<sup>M</sup><sub>&#1072;</sub> the cationic and anionic resistance of
cation and anion migration on the surface of a film on the electrode from the
areas, where they form (anions) or the areas of their way out (cations) on the
surface of the film/solution phase boundary to the areas, where they interact,
which results in the forming of a crystal lattice. For more information about
this values see Appendix 2.</p>

<SCRIPT>comment(53)</SCRIPT><p> E<sub>Me</sub><sub>/Me(+)</sub>
and E<sub>Red/Ox</sub>  emf
(potentials) values, corresponding to the following processes: </p>

<p align="center"><sub><img border=0
src="v3p14_files/image028.gif" width="133" height="27"></sub>  
(9)</p>

<p align="center"><sub><img border=0
src="v3p14_files/image030.gif" width="188" height="27"></sub>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
(10)</p>

<SCRIPT>comment(54)</SCRIPT><p>these values are calculated by means of the Gibbs equation
for change of energies of the corresponding processes. </p>

<SCRIPT>comment(55)</SCRIPT><p>E<sub>sc</sub> and E<sub>sa</sub> - the values of the emfs of solvation processes (cation and
anion). These values are calculated by means of the Gibbs equation for change
of energies of the corresponding processes. For more information about this
values see Appendix 1.</p>

<SCRIPT>comment(56)</SCRIPT><p>E<sup>S</sup><sub>inter.</sub>  the emf of the process
of the interaction of solvated cations and anions in a solution. For more
information about this value see Appendix 1.</p>

<SCRIPT>comment(57)</SCRIPT><p>E<sub>cr.</sub>
 the emf of the process of the
crystallization of a corrosion product. For more information about this value
see Appendix 1</p>

<SCRIPT>comment(58)</SCRIPT><p>The circuit (which includes the area from the metal to the
film/solution phase boundary) describes the process of the forming of a film on
the metal. The circuit (which includes the area from the metal to the solution)
describes the process of the forming of soluble corrosion products. The circuit
(which includes the area from the film/solution phase boundary to the solution)
describes the process of the physical dissolving of a film in the
solution. When there is no film on the
metal, the branch of the circuit with &#1045;<sub>cr. </sub>is excluded from the circuit and instead of
the R<sub>i&#1084;&#1077;/film</sub>, R<sub>e&#1084;&#1077;/film</sub>, R<sub>ifilm</sub>,
R<sub>efilm</sub>, R<sub>ifilm/s</sub>, R<sub>efilm/s</sub> values we put the
cationic and electronic resistances of the metal/film phase boundary (R<sub>i&#1084;&#1077;/s</sub>
and R<sub>e&#1084;&#1077;/s</sub>). Thus, we have a simple chemical corrosion
case. The circuit we got in this case
is the simplest and is not considered in this paper because of the simplicity
of the calculation of its current. </p>

<SCRIPT>comment(59)</SCRIPT><p>If you cant understand the nature of the R<sup>S</sup><sub>c</sub>,
R<sup>S</sup><sub>a</sub>, R<sup>M</sup><sub>c</sub> &#1080; R<sup>M</sup><sub>a</sub>
values see Appendix 2.</p>

<SCRIPT>comment(60)</SCRIPT><p>The calculation based on the second Kirchhoff's law for our
equivalent circuit, results in the following expressions:</p>

<SCRIPT>comment(61)</SCRIPT><p> The
corrosion current (I<sub>f.i.s.</sub>), when only a surface film forms:</p>

<p align="center"><sub><img border=0
src="v3p14_files/image032.gif" width="515" height="53"></sub>  (11)</p>

<SCRIPT>comment(62)</SCRIPT><p> The
corrosion current (I<sub>f.s.s.</sub>), when only soluble corrosion products
form:</p>

<p align="center"><sub><img border=0
src="v3p14_files/image034.gif" width="539" height="50"></sub> (12)</p>

<SCRIPT>comment(63)</SCRIPT><p>The total corrosion current (I<sub>cor</sub>) equal to the
sum of the I<sub>f.i.s.</sub> and I<sub>f.s.s.</sub>currents:</p>

<p align="center"><sub><img border=0
src="v3p14_files/image036.gif" width="564" height="50"></sub>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; (13)</p>

<SCRIPT>comment(64)</SCRIPT><p>The expressions (11)-(13) we got have a clear thermodynamic meaning. </p>

<SCRIPT>comment(65)</SCRIPT><p>The (E<sub>cr.</sub>+E<sub>Red/Ox</sub>+
E<sub>Me/Me(+</sub>) value, included in the I<sub>f.i.s.</sub> corresponds to
the Gibbs energy change of the forming of insoluble corrosion products. The (E<sub>sc</sub>+E<sub>sa</sub>+E<sup>S</sup><sub>inter.</sub>-
E<sub>cr.</sub>) value corresponds to the dissolving of corrosion
products. Thus, a metal corrosion
current (when an insoluble film forms on the surface of an electrode) is
proportionate to the difference of the Gibbs energy changes of the reactions of
the forming and dissolving of a film. </p>

<SCRIPT>comment(66)</SCRIPT><p>(E<sub>sc</sub>+E<sub>sa</sub>+E<sup>S</sup><sub>inter.</sub>+E<sub>Red/Ox</sub>+
E<sub>Me/Me(+)</sub>) value, included in the I<sub>f.s.s.</sub> is
proportionate to the Gibbs energy changes of the reaction of the forming of
soluble corrosion products. The (E<sub>sc</sub>+E<sub>sa</sub>+E<sup>S</sup><sub>inter.</sub>-
E<sub>cr.</sub>) value is already known to us. Thus, the metal corrosion current,
when soluble corrosion products form, is proportionate to the sum of the Gibbs
energy changes of the reactions of the dissolving of a metal and film. </p>

<SCRIPT>comment(67)</SCRIPT><p>It is obvious that both expressions (11) and (12) include
the same term, but with different signs:</p>

<p align="center"><sub><img border=0
src="v3p14_files/image038.gif" width="335" height="47"></sub> 
(14)</p>

<SCRIPT>comment(68)</SCRIPT><p>This term is the electrical current analogue of the rate of
the physical dissolving of a film. </p>

<SCRIPT>comment(69)</SCRIPT><p>The I<sub>&#1082;</sub> value of the total metal corrosion
current is proportionate to the difference of the Gibbs energy changes of the
reactions of the forming of corrosion products film and soluble corrosion
products. </p>

<SCRIPT>comment(70)</SCRIPT><p>The extreme cases of the functioning of the equivalent circuit
are the following:</p>

<SCRIPT>comment(71)</SCRIPT>

<h4>I - The Sum of the Resistances of the Migration of Ions on the Surface of a
Film is Much&nbsp; Larger than the Sum of the Ionic Resistances of the Solution.</h4>

<p align="center">&nbsp; <sub><img border=0
src="v3p14_files/image040.gif" width="168" height="25"></sub></p>

<SCRIPT>comment(72)</SCRIPT><p>In the case, total corrosion current is equal to:</p>

<p align=center><sub><img border=0
src="v3p14_files/image042.gif" width="347" height="61"></sub> (15)</p>

<SCRIPT>comment(73)</SCRIPT><p>So, when the sum of the resistances of the migration of ions
(formed as a result of a corrosion process) on the surface of a film is much
larger than the sum of the resistances of ions in a solution the process of the
dissolving of corrosion products starts and the film stops to grow. Only the process of the dissolving of a
metal in a solution runs. </p>

<SCRIPT>comment(74)</SCRIPT><h4>II - The Sum of the Ionic Resistances of the
Solution is Much&nbsp; Greater than the Sum of the Resistances of the Migration
of Ions on the Surface of a Film.</h4>

<p align="center"><sub><img border=0
src="v3p14_files/image044.gif" width="167" height="25"></sub></p>

<SCRIPT>comment(75)</SCRIPT><p>In this case the current, is given by:</p>

<p align=center><sub><img border=0
src="v3p14_files/image046.gif" width="240" height="50"></sub>  (16)</p>

<p>i.e., when the sum of the resistances of ions in a solution
is much larger than the sum the of the resistances of the migration of ions (formed
as a result of a corrosion process) on the
surface, a corrosion process (when insoluble corrosion products form on
the surface of a metal) starts. </p>

<SCRIPT>comment(76)</SCRIPT><p>An example of this kind of corrosion is metal corrosion in
gases or nonconductive environments where a conductor between a metal and
oxidant is the film itself. The sum of the resistances of the migration of ions
on the surface of a film is less than the sum of the ion resistances of
gasiform or other corrosive nonconductive environments. </p>

<SCRIPT>comment(77)</SCRIPT><p>These two extreme cases show that
an electrochemical system: metal - conductive (or nonconductive film)  oxidant
is a self-switching circuit (SSC). Its behavior is determined entirely by the
resistances of the phases (or more exactly currents, flowing through these
phases) to which the products of metal corrosion can be transferred. Corrosion
products (ions) are transferred, mostly, to the phases having the least
electrical resistances to this transferring (or when the currents, flowing
through these phases are maximum). The circuit, proposed by the authors, is the
simplest and serves to illustrate an approach to the modeling of redox
processes by means of equivalent electric circuit. To model more complex redox
systems, more complex equivalent circuits
(taking into account all possible processes in the system) will be
needed. However, the principles of circuit construction remain the same, as
stated above. </p>

<SCRIPT>comment(78)</SCRIPT><p>The following consequences,
important for corrosion study, ensue from the results obtained:</p>

<SCRIPT>comment(79)</SCRIPT><p>1)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; To
obtain really comparable experimental results, experiments with the corrosion
resistance of test piece should be carried out:</p>

<p>a)&nbsp;&nbsp;&nbsp;&nbsp; with
test pieces of the same size and prehistory (the same composition of their
surface film)</p>

<p>b)&nbsp;&nbsp;&nbsp;&nbsp; using
an electrolyte of the same composition and contained in ampoules of the same
volume and shape, to observe the current concentrations equality of cations and
anions in solutions at any instant of time and in any place</p>

<p>c)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; using
the same number of test pieces of a metal and with the same relative positions
in every capsule, containing an oxidant medium. This condition is, also,
necessary to observe the current concentrations equality of cations and anions
in solutions at any instant of time and in any place</p>

<p>d)&nbsp;&nbsp;&nbsp;&nbsp; under the same conditions (temperature, light
and so on), which can influence the values of the resistances and solubility of
corrosion products </p>

<p>e)&nbsp;&nbsp;&nbsp;&nbsp; points (b) and (c) may be ignored if the
calculation of a <u>specific</u> corrosion rate is made (specific rate =
corrosion rate/(the volume of an electrolyte * the sum of the surfaces of test
pieces)).</p>

<p>f)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; When
making calculations it is necessary to take into account the change of the mass
of test pieces (a pure metal and pure film mass), as well as, the change of the
concentrations of cations and anions forming in a solution. </p>

<SCRIPT>comment(80)</SCRIPT><p>The authors of this paper believe that this method of modeling can easily be applied to interpreting
impedance measurements in electrochemistry.</p>

<h3>Conclusions</h3>

<ul type=disc>
 <li>It
     was demonstrated, that multi-stage ionic processes, including diffusion
     stages, can be regarded as electrochemical processes, if we take into
     account their kinetic control by means of dynamic electric resistance.</li>
 <li>basic
     principles of the construction of equivalent electric circuits for the
     modeling of any redox (ionic) processes were proposed.</li>
 <li>the
     proposed equivalent electric circuit allowed to describe, quantitatively,
     the dependence of a metal corrosion current on the values of the physical
     properties of mediums contacting with a metal or forming on a metal. The
     circuit allows to take into account the influence of the physical
     dissolving (in a liquid medium) of
     corrosion products film (or any other substance contacting with the
     metal) on the rate of corrosion.</li>
 <li>It was demonstrated, that it is
  necessary to take into account the presence of 2 different corrosion currents
  in the system metal/film/corrosive environment. One of them (If.i.s.) is the
  current of the formation of an insoluble corrosion film, flowing on the
  surface of the film. The current flows through the metal and film and on the
  surface of the film. The other current (If.s.s.) is the current of the
  formation of soluble corrosion products in the solution. The current flows
  through the metal, film and electrolyte. The fact that we take into
  consideration the existence of these 2 currents allows us to take into account
  the processes of the physical dilution of a film and the crystallization of
  soluble corrosion products on the film surface. Electrochemists haven't
  thought at all in this direction before, considering only one total corrosion
  current without dividing it in 2 these currents. This way we take into account
  the nature of the film and solution more completely. Making this circuit more
  complex allowed us to know more about the mechanism of the processes taking
  place in the system. All that you see now is very small part of the capability
  of this approach.</li>
 <li>This
     method allows to describe any ionic chemical processes (including dissolving
     of ionic substances).</li>
</ul>

<p>Based on the results obtained, the
following conclusions were drawn:</p>

<p>1)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; it
was demonstrated that the nature of a corrosion process (running on the surface
of a metal in any oxidizing medium) is determined by the resistances of the
transferring of forming corrosion products in phases (already existing or
forming in the course of corrosion) contacting with a metal (taking into
account the contribution of the resistances of the transferring of an oxidant,
solvent, ohmic resistance of a metal and the resistances of phase boundaries).
The corrosion process spreads, mostly, into the phase (contacting with a
metal), the electric resistance (of the transferring of forming corrosion
products) of which is lesser. </p>

<p>2)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Requirements
(for the correct carrying out of a corrosion study) were established. </p>

<h3>Appendix 1.</h3>

<p>The physical
meaning of the &#1045;<sub>sc</sub>, &#1045;<sub>sa</sub> and &#1045;<sup>S</sup><sub>inter.</sub>
values and the order of their calculation.</p>

<p>The physical meaning of these values is obvious. These
values mean the potentials of the corresponding processes, calculated on the
basis of Gibbs equation. The "n" value (for solvation processes) is the valency
of an ion, and the product of the valencies of ions (for interaction
processes). The authors realize that, in fact, several different solvation and
ions interaction processes can run in a solution. To simplify the description we take into consideration only some
of them.</p>

<h3>Appendix 2.&nbsp;</h3>

<h4> The physical meaning of the R<sup>S</sup><sub>c</sub>,
R<sup>S</sup><sub>a</sub>, R<sup>M</sup><sub>c</sub>, R<sup>M</sup><sub>a,</sub>
R<sub>i</sub>, R<sub>e</sub> values and the order of their calculation.</h4>

<p>The physical
meaning of the R<sub>i</sub> and R<sub>e </sub>values is obvious. They are the
electronic and cationic resistances of a corrosion products film (on a metal) and
phase boundaries (metal/film and film/electrolyte). </p>

<p>Based on the
Ohm and electrolysis laws the authors got the following expression for the R<sub>i</sub>
=R<sub>ifilm</sub>(t) value:</p>

<p align="center"><sub><img border=0
src="v3p14_files/image048.gif" width="467" height="51"></sub>   (17)</p>

<p>where S  film
surface area </p>

<p> P<sub>ifilm</sub>  the specific
cationic resistance of a film </p>

<p> R<sub>ifilm</sub>(t), R<sub>ifilm</sub>(0)
 the ionic resistances of a film for instants of time t and t=0.</p>

<p> d<sub>film</sub>  film density </p>

<p> Eq<sub>Men+</sub>, Eq<sub>An-</sub>
- the masses of 1 gram-equivalent of a metal ion and an anion.</p>

<p> t  time</p>

<p>We can get the similar equation
for the R<sub>e</sub> =Re(t) value:</p>

<p align="center"><sub><img border=0
src="v3p14_files/image050.gif" width="431" height="46"></sub>   (18)</p>

<p>where R<sub>efilm</sub> 
electronic specific resistance of a film</p>

<p> R<sub>efilm</sub>(0) = R<sub>efilm</sub>(t) for an
instant of time t=0</p>

<p>However, as noted above, the paper
authors regard the R<sub>e</sub>(t) value as the electronic resistance of a
film (R<sub>e</sub>(t)), the ohmic resistance of a metal (R<sub>Me</sub>(t)) in
a corrosive microelement and the resistance of the transferring of the ions
(molecules) of an oxidant to the surface of a film (Rox(t)), i.e. R<sub>e</sub>(t)
=R<sub>e</sub>(t) + R<sub>Me</sub>(t) + Rox(t).</p>

<p>Based on the Ohm and electrolysis
laws and if the metal test piece we use is rectangular and if the thickness of
this metal test piece decreases, at the same time, its length and the width are
constant in the course of corrosion process, we can get the following
expression for the R<sub>Me</sub>(t) value:</p>

<p align=center><sub><img border=0
src="v3p14_files/image052.gif" width="336" height="51"></sub>
(19)</p>

<p>where P<sub>Me</sub>  the
specific resistance of a metal </p>

<p align=center><sub><img border=0
src="v3p14_files/image054.gif" width="131" height="43"></sub> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
(20)</p>

<p> l<sub>ab</sub>  the effective distance between the
anodic and cathodic areas of a corrosive microelement on the metal/film phase boundary (the metal side) </p>

<p> S<sub>ab</sub>(t) the cross-section area through which
the corrosion current flows in the given microelement.</p>

<p> M<sub>Me</sub>(t), M<sub>Me</sub>(0)  the
mass of a metal at the instances of time t and 0</p>

<p>This equation shows that at the
instance of time when the metal has been consumed completely (M<sub>Me</sub>(t)=0),
the ohmic metal resistance of the microelement will be equal to infinity, and
as R<sub>Me</sub>(t) and Re(t) are series-connected, the circuit will open, the
corrosion process will stop running. </p>

<p>Similarly (for the resistance of
the transferring of an oxidant to the surface of a film on a metal (Pox(t))) if
the specific resistance of the transferring of the ions (molecules) of an
oxidant to the surface of a film on a metal (Pox(t)) is (at the first
approximation) in inverse proportion to the molar concentration of an oxidant
in a solution:</p>

<p align="center"> <sub><img border=0
src="v3p14_files/image056.gif" width="145" height="41"></sub>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
(21)</p>

<p> where <i> K2 </i>
 proportionality coefficient </p>

<p> <i>V<sub>S</sub>
</i>
 the volume of a solution </p>

<p> <i>&mu;ox</i>
 the gram-molecular weight of an oxidant&nbsp; </p>

<p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i>&nbsp;M<sub>Ox</sub>(t)</i>  current mass of
an oxidant </p>

<p>if we apply the electrolysis low to the calculation of the
current mass of a metal, we get the following equation for the resistance of
the transferring of an oxidant to the surface of a film:</p>

<p align="center"><sub><img border=0
src="v3p14_files/image058.gif" width="359" height="55"></sub>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
(22)</p>

<p>where </p>

<p> <sub><img border=0
src="v3p14_files/image060.gif" width="120" height="47"></sub>
(23)</p>

<p> <i>M<sub>Ox</sub>(0)</i>, <i> M<sub>Ox</sub>(t)</i>-
the initial and current mass of an oxidant </p>

<p>This equation shows that at the
instance of time when M<sub>ox</sub>(t)=0 the resistance (of the transferring
of the ions (molecules) of an oxidant to the surface of a film on the metal of
a microelement) will be equal to infinity. So, at this instance of time, the
circuit will open, because R<sub>ox</sub>(t) is series-connected with Re(t).
The corrosion process will stop. </p>

<p>We got a similar equation for the resistance
of the transferring of the molecules of a solvent to the anodic (cathodic)
areas on the surface of the film/solution phase boundary Rs(t):</p>

<p align="center"><sub><img border=0
src="v3p14_files/image062.gif" width="255" height="54"></sub> (24)</p>

<p>where <i> M<sub>s</sub>(0)</i> 
solvent mass at instant of time t=0</p>

<p> Eq<sup>S</sup><sub>k</sub>, Eq<sup>S</sup><sub>k</sub>
- the masses of the 1 gram-equivalent of the forming ion of a metal and an
anion in the course of solvation reactions.</p>

<p> <i>&mu;s</i>  the gram-molecular
weight of a solvent </p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i>K<sub>s</sub> 
</i>  the
coefficient of proportionality similar to that in the case of an oxidant.</p>

<p>This equation
shows that at the instance of time when the mass of a solvent =0, the
resistance (of the transferring of the molecules of a solvent to the surface of
a film on the metal of a microelement) will be equal to infinity. So, at this
instance of time, the solvation process (of the corrosion products) will stop
completely, because R<sub>s</sub>(t) is in the circuit of dissolving. </p>

<p>Thus, we get
the following equation for the R<sub>film </sub>value we use for the further
calculations (see this Appendix below):</p>

<p align="center"><sub><img border=0
src="v3p14_files/image064.gif" width="662" height="43"></sub></p>

<p align="center"><sub><img border=0
src="v3p14_files/image066.gif" width="623" height="62"></sub> (25)</p>

<p>One can suppose, that at the start
time of the corrosion experiment we can neglect the R<sub>Me</sub>(t) value,
because it is insignificant (small). A similar assumption, as we believe, can
be made for the Rox(t) value under the same conditions. This simplification
permits us to can get a simpler equation for the sum (25): </p>

<p align="center"><sub><img border=0
src="v3p14_files/image068.gif" width="603" height="40"></sub>(26)</p>

<p>On the basis of the initial data
of the corrosion experiment and the equation (26) we can calculate the (R<sub>ifilm</sub>(0)+R<sub>efilm</sub>(0))
and (P<sub>ifilm</sub>(0) + P<sub>efilm</sub>(0)) values, that we will need
later on. Having at our disposal (R<sub>ifilm</sub>(0)+R<sub>efilm</sub>(0))
and (P<sub>ifilm</sub>(0) + P<sub>efilm</sub>(0)) values and using a more exact
equation for the sum (25), we can calculate the &#1050;&#1086;&#1093; and
&#1050;&#1084;&#1077; values.</p>

<p>The physical meaning of the R<sup>S</sup><sub>c</sub>,
R<sup>S</sup><sub>&#1072;</sub>, values is clear enough when we see Fig. 3 and
Fig. 4. These are the following sums: R<sup>S</sup><sub>c</sub> = R<sup>S</sup><sub>c1
</sub>+ R<sup>a</sup><sub>s</sub>; R<sup>S</sup><sub>&#1072;
</sub>=R<sup>S</sup><sub>&#1072;1 </sub>+ R<sup>c</sup><sub>s</sub>. Where R<sup>S</sup><sub>c1
</sub>and R<sup>S</sup><sub>&#1072;1 </sub>are effective electric (ionic)
resistance of the electrolyte (or any other medium), contacting with the film
covering the metal. </p>

<p>It is clear, that the trajectories
of the transferring of the forming ions (in the solution), to the areas where
the ionic products form, can be different (even for the same ions). However, we believe that there are some
averaged trajectories of the cations and anions under standard experiment
conditions. So, there are some averaged effective ionic resistances of a
solution (or another medium). </p>

<p>The same reasoning is for the
migration of forming ions on the surface of a film to the areas where the ions
are built to the lattice. </p>

<p>We think that we can illustrate
the similar figure and reasoning case. </p>

<p>R<sup>a</sup><sub>s </sub>and R<sup>c</sup><sub>s
</sub>- the resistances of the
transferring of the molecules of a solvent to the areas of the exit (and the forming) of cations (and anion),
for their (ions) solvation. </p>

<p>It is clear, that we can not
measure the R<sup>S</sup><sub>c</sub> and R<sup>S</sup><sub>&#1072;</sub>
values directly, but we can calculate these values. The calculation should be
made on the basis of the method we proposed in this paper, the processing of
the data of the corrosion experiment and using the equations we deduce in the
paper. It is clear, that values of the given resistances arent constant (even
for the same experiment). As the
process of the dissolving of corrosion products (or a simple physical film
dissolving) is observed (in the system), the values of these resistances are
functions of time, the concentration of cations and anions in a solution,
masses of a metal, oxidant and solvent, the currents flowing through them as
well as a number of internal and external conditions influencing the processes
of the dissolving of a film and the transferring of charges in it. The authors
of the paper propose the following method of the calculation of the R<sub>i</sub>,
R<sub>e</sub> ,R<sup>S</sup><sub>c</sub>, R<sup>S</sup><sub>a</sub>, R<sup>M</sup><sub>c</sub>
&#1080; R<sup>M</sup><sub>a </sub>values:</p>

<p>On the basis of the following
corrosion experimental data:</p>

<ol start=1 type=1>
 <li>the
     increase (or decrease) in weight of a metal test piece (with a film)
     within the current 1 sec - (dM<sub>t.spec.</sub>)</li>
</ol>

<p align="center"><sub><img border=0
src="v3p14_files/image070.gif" width="592" height="47"></sub> &nbsp;&nbsp;(27)</p>

<ol start=2 type=1>
 <li>the
     increase (or decrease) in weight
     of the corrosion products in the solution, conditioned by a pure physical
     dissolving of a film, only, (i.e. without taking into account the mass of
     the corrosion products transferred by the current of the forming of
     soluble products) within the current 1 sec - (dM<sub>f.s.</sub>);</li>
</ol>

<p align="center"> <sub><img border=0
src="v3p14_files/image072.gif" width="286" height="55"></sub>&nbsp;&nbsp;(28)</p>

<ol start=3 type=1>
 <li>the
     increase in weight of the soluble products in the solution within 1 sec -
     (dM<sub>s.sub.</sub>), conditioned by the process of metal corrosion only.</li>
</ol>

<p align="center"> <sub><img border=0
src="v3p14_files/image074.gif" width="289" height="55"></sub>&nbsp;&nbsp;(29)</p>

<ol start=4 type=1>
 <li>the
     increase (or decrease) in weight
     of the insoluble products formed in the course of the interaction,
     covering the metal surface in form of a film within the current 1 sec
     (dMi.sub.) and conditioned by the process of metal corrosion only</li>
</ol>

<p align="center"> <sub><img border=0
src="v3p14_files/image076.gif" width="406" height="58"></sub>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(30)</p>

<p>where:</p>

<p align="center"><sub><img border=0
src="v3p14_files/image078.gif" width="156" height="23"></sub>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(31)</p>

<p align="center"><sub><img border=0
src="v3p14_files/image080.gif" width="84" height="22"></sub>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(32)</p>

<p align="center"><sub><img border=0
src="v3p14_files/image082.gif" width="84" height="20"></sub>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
(33)</p>

<p align="center"><sub><img border=0
src="v3p14_files/image084.gif" width="216" height="25"></sub>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
(34)</p>

<p align="center"><sub><img border=0
src="v3p14_files/image086.gif" width="192" height="25"></sub>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
(35)</p>

<p align="center"><sub><img border=0
src="v3p14_files/image088.gif" width="288" height="27"></sub>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
(36)</p>

<p>the authors got the following
expressions for two types of corrosion processes (corrosion in liquid mediums
with the formation of soluble and insoluble products) for the R<sub>film</sub>,
R<sup>S</sup>, R<sup>M</sup> values:</p>

<p><b>Table 1. The
equations for determining the parameters of corrosion processes (standard
experiment conditions).</b></p>

<table border=1 cellspacing=0 cellpadding=0>
 <tr>
  <td width=666 valign=top>
  <p> The formation of soluble corrosion
  products </p>
  </td>
 </tr>
 <tr>
  <td width=666 valign=top>
  <p> R<sub>film</sub></p>
  </td>
 </tr>
 <tr>
  <td width=666 valign=top>
  <p><sub><img border=0
  src="v3p14_files/image090.gif" width="566" height="47"></sub></p>
  </td>
 </tr>
 <tr>
  <td width=666 valign=top>
  <p> R<sup>M</sup></p>
  </td>
 </tr>
 <tr>
  <td width=666 valign=top>
  <p><sub><img border=0
  src="v3p14_files/image092.gif" width="540" height="47"></sub></p>
  </td>
 </tr>
 <tr>
  <td width=666 valign=top>
  <p> R<sup>S</sup></p>
  </td>
 </tr>
 <tr>
  <td width=666 valign=top>
  <p><sub><img border=0
  src="v3p14_files/image094.gif" width="540" height="48"></sub></p>
  </td>
 </tr>
 <tr>
  <td width=666 valign=top>
  <p> The formation of insoluble corrosion
  products </p>
  </td>
 </tr>
 <tr>
  <td width=666 valign=top>
  <p> R<sub>film</sub></p>
  </td>
 </tr>
 <tr>
  <td width=666 valign=top>
  <p><sub><img border=0
  src="v3p14_files/image096.gif" width="578" height="47"></sub></p>
  </td>
 </tr>
 <tr>
  <td width=666 valign=top>
  <p> R<sup>&#1084;</sup></p>
  </td>
 </tr>
 <tr>
  <td width=666 valign=top>
  <p><sub><img border=0
  src="v3p14_files/image098.gif" width="581" height="48"></sub></p>
  </td>
 </tr>
 <tr>
  <td width=666 valign=top>
  <p> R<sup>S</sup></p>
  </td>
 </tr>
 <tr>
  <td width=666 valign=top>
  <p><sub><img border=0
  src="v3p14_files/image100.gif" width="555" height="47"></sub></p>
  </td>
 </tr>
</table>

<p>where Eq&#1084;&#1077;, Eqan and
Eqfilm  weight of the 1 gram-equivalent of a metal, anion and film.</p>

<p>The R<sub>film</sub>, R<sup>M</sup> and R<sup>S</sup> values are
obtained under the same experimental conditions (test pieces of the same size,
the same number of test pieces in every ampoule with the same volume of the
solution, the same temperature, light etc.). If the conditions of the
experiments are different, then, instead of the <span lang="EN-US" style="font-size:10.0pt;mso-bidi-font-size:
12.0pt;font-family:'Times New Roman';mso-fareast-font-family:'Times New Roman';
mso-ansi-language:EN-US;mso-fareast-language:RU;mso-bidi-language:AR-SA">dMt.spec,
dMf.s., d&#1052;s.sub. values</span>, we
must use their specific values (dM<sub>t.spec.</sub>/(S*V), dM<sub>f.s.</sub>/(S*V),
d&#1052;<sub>s.sub.</sub>/(S*V)) (where S  the total area of the surface of
the test pieces of a metal in one ampoule with a solution of some volume =V)
[7]. We can use these specific values (dM<sub>t.spec.</sub>/(S*V), dM<sub>f.s.</sub>/(S*V),
d&#1052;<sub>s.sub.</sub>/(S*V)) to compare the corrosive activities (with
respect to the metal) of different mediums. </p>

<p><b>Table 2. The equations for determining the parameters of
corrosion (non-standard experiment conditions).</b></p>

<table border=1 cellspacing=0 cellpadding=0>
 <tr>
  <td width=666 valign=top>
  <p> The formation of soluble corrosion
  products </p>
  </td>
 </tr>
 <tr>
  <td width=666 valign=top>
  <p> R<sub>film</sub></p>
  </td>
 </tr>
 <tr>
  <td width=666 valign=top>
  <p><sub><img border=0
  src="v3p14_files/image102.gif" width="579" height="49"></sub></p>
  </td>
 </tr>
 <tr>
  <td width=666 valign=top>
  <p> R<sup>M</sup></p>
  </td>
 </tr>
 <tr>
  <td width=666 valign=top>
  <p><sub><img border=0
  src="v3p14_files/image104.gif" width="573" height="50"></sub></p>
  </td>
 </tr>
 <tr>
  <td width=666 valign=top>
  <p> R<sup>S</sup></p>
  </td>
 </tr>
 <tr>
  <td width=666 valign=top>
  <p><sub><img border=0
  src="v3p14_files/image106.gif" width="573" height="52"></sub></p>
  </td>
 </tr>
 <tr>
  <td width=666 valign=top>
  <p> The formation of
  insoluble corrosion products </p>
  </td>
 </tr>
 <tr>
  <td width=666 valign=top>
  <p> R<sub>film</sub></p>
  </td>
 </tr>
 <tr>
  <td width=666 valign=top>
  <p><sub><img border=0
  src="v3p14_files/image108.gif" width="577" height="47"></sub></p>
  </td>
 </tr>
 <tr>
  <td width=666 valign=top>
  <p> R<sup>M</sup></p>
  </td>
 </tr>
 <tr>
  <td width=666 valign=top>
  <p><sub><img border=0
  src="v3p14_files/image110.gif" width="581" height="48"></sub></p>
  </td>
 </tr>
 <tr>
  <td width=666 valign=top>
  <p> R<sup>S</sup></p>
  </td>
 </tr>
 <tr>
  <td width=666 valign=top>
  <p><sub><img border=0
  src="v3p14_files/image112.gif" width="553" height="45"></sub></p>
  </td>
 </tr>
</table>

<p>We have not yet managed to
determining the R<sub>i</sub>, R<sub>e</sub>, R<sup>S</sup><sub>c</sub>, R<sup>S</sup><sub>a</sub>,
R<sup>M</sup><sub>c</sub> and R<sup>M</sup><sub>a </sub>values, but we
demonstrated the possibility of determining the R<sub>film</sub><sub>.</sub>, R<sup>M</sup>
and R<sup>S</sup> values. </p>

<p>We also believe that this circuit can
be used for gas corrosion (when only one product (a film) forms), but in the
case the physical meaning of the E<sub>sc</sub> , E<sub>sa</sub>, R<sup>S</sup><sub>c</sub>,
R<sup>S</sup><sub>a</sub> and &#1045;<sup>S</sup><sub>.inter. </sub>values is
different. The meaning is:</p>

<p>E<sub>sc</sub> &#1080; E<sub>sa</sub>
 the emf processes of cations (anions) - gas molecules interaction. In theory,
the products of cations (anions) - gas molecules interaction can form.</p>

<p>R<sup>S</sup><sub>c </sub>&#1080;
R<sup>S</sup><sub>a</sub>  the electric resistances of the transferring of the
products of ions (cations or anions) -gas molecules interaction from the
surface of a metal to the area where they interact (forming an uncharged
product, as a result). These values are large and can reduce the current in the
corresponding branches to 0 (which is observed in fact).</p>

<p>E<sup>S</sup><sub>inter.</sub>-
the emf of the process of the interaction of the products of ions (cations or
anions) -gas molecules interaction (forming an uncharged product, as a result).</p>

<p>The method of the calculation of
the R<sub>film</sub>, R<sup>M</sup> &#1080; R<sup>S</sup> values is the same as
aforesaid. </p>

<h3>Acknowledgments</h3>

<p>Special thanks to Prof
Finkelshtein A.V. the Siberian Techonological
university, Krasnoyrsk, (for his
advices and significant remarks concerning the material of this paper) and to
Panov E. E. (for the important assistance in the translation of this paper).</p>

<h3>References</h3>

<p><script>defref(1)</script>. Muller W.J., Monatsch.
Chem., <b>52</b>, 53, 1929.</p>

<p><script>defref(2)</script>. Muller W.J., Korrosion u.
Metal., <b>14</b>, 63, 1938.</p>

<p><script>defref(3)</script>. Chupr V., Z. Elektrochem.,
<b>45</b>, 297, 1939.</p>

<p><script>defref(4)</script>. Akimov G.V., Tomashov
N.D., Physical chemistry journal, <b>8</b>, 623, 1936. </p>

<p><script>defref(5)</script>. Daniel-Bek V.S. &quot;To
the metals corrosion theory &quot;, Physical chemistry journal 15,
number 3, 383-400, 1941.</p>

<p><script>defref(6)</script>. Gerasimova L.K.,
Kedrinskiy I..A., Oleynikov S.L. &quot;The potential of a lithium electrode in
aprotic dipolar solvents &quot; - the
report at the anniversary regional conference conference 17-21 April 1989 Krasnoyarsk.-
p. 6.</p>

<p><script>defref(7)</script>. Shagaev A.A. &quot; About
the correctness of corrosion research &quot; poster report at the 11th
All-Union lithium power sources conference, Saratov (in Russian; available from the author). </p>

<SCRIPT>footer()</SCRIPT>
</body>

</html>