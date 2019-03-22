<?php 
session_start();
include_once('/home/jcsete5/public_html/jcse.org/jcse/php_inc/jrnl_subs.php');
$logged_in=is_loggedin();
?>
<html>
<head>
<meta name="ProgId" content="FrontPage.Editor.Document">
<title>The modelling of a galvanic cell series-connected with an external pure
resistance and the source of an arbitrary external polarization</title>
<SCRIPT src="/getcomm.php?vol=3&pap=22"></SCRIPT>
<SCRIPT src="/jsinc/jcsesubs.js.php"></SCRIPT>
<SCRIPT>
getcommentmode();</SCRIPT></HEAD><body>
<script>var lgi=<?php if ($logged_in) { echo('true');} else { echo('false');} ?>;</script>
<script src="/jsinc/writeheader.js"></script><?php ggl_ad(); ?>
  <h2>Volume 3 Paper 22</h2>
  <script>ifnotmode(3,'<p>Submitted 14th August 2002, revised version submitted 28th November 2002<br>');</script>
  <hr>
<h2>The modelling of a galvanic cell series-connected with an external pure
resistance and the source of an arbitrary external polarization.</h2>

<p>A. A. Shagaev <br>
<em>Independent researcher, </em>house
17-a apartment number 6, 660037 Kolomenskaya Str., Krasnoyarsk, Russia. E-Mail Address: <SCRIPT>mailto2('shagaev','krasu.ru')</SCRIPT> or 
<SCRIPT>mailto2('shagaev','online.ru')</SCRIPT></p>

<SCRIPT>notify();</SCRIPT><script>comment(1)</script><h3>Abstract</h3>

<p>This paper is dedicated to the blessed memory of my parents,
Maria and Arkadiy.</p>

<p>Based on the previously developed approach, the model (of
the functioning of a galvanic battery under condition of the battery discharge
on the external resistance and additional external polarization) is proposed.
Design equations for discharge current, the emf of a galvanic battery (the
potentials of separate electrodes), the corrosion currents of each electrode,
the values of the emf of the external polarization of electrodes (which
eliminate the corrosion of one separate electrode as well as that of all
electrodes together) were obtained. The equations obtained allow the
determination of factors that influence on the discharge current, the emf of a
galvanic battery (the potentials of separate electrodes), the currents of
corrosion of electrodes. A number of results (the existence of conditions of galvanic
protection against corrosion) agree with the known electrochemical practice,
other results (generalized equations for discharge current, corrosion currents,
the emf of a galvanic battery (the potentials of electrodes), the emf of
external polarization, protecting the electrodes against corrosion) have never
been obtained before. The physical meaning of the measured electrode potential
was shown in detail.</p>

<SCRIPT>comment(1)</SCRIPT><p><b>Keywords</b>:
galvanic element, modelling.</p>

<h3>Introduction</h3>

<SCRIPT>comment(1)</SCRIPT><p>The detailed studies of corrosion processes, which take
place on metal (and any other) electrodes in various environments, are of great
practical importance now. It serves the purposes of: </p>

<ol start=1 type=1>
 <li>optimizing the characteristics of chemical power sources
     (CPS);</li>
 <li>finding approaches to solving the problems concerning the
     corrosion protection of chemical and any other equipment;</li>
 <li>&nbsp;developing (on the basis of the electrochemical
     theory of catalysis) new kinds of catalysts for chemical-engineering
     processes;</li>
 <li>solving the problems of the photoelectrochemical conversion
     of solar energy;</li>
 <li>making new devices etc..</li>
</ol>

<SCRIPT>comment(1)</SCRIPT><p>Obviously, it is impossible to find an approach to the
solution of the problem without developing a theory adequately describing the
behaviour&nbsp;of any
electrode under conditions of various physical-chemical experiments (and in the
course of the operating of the simplest galvanic circuit).</p>

<SCRIPT>comment(1)</SCRIPT><p>In our opinion, the well thought-out equivalent electric
circuits in line with the well known chemical practice and thermodynamics can
adequately model the behaviour of an arbitrary galvanic circuit under
conditions of various physical-chemical experiments.</p>

<SCRIPT>comment(1)</SCRIPT><p>In the previous paper [1], the principles of the building of
such circuits were set. The equivalent electric circuit, modelling corrosion
processes in a metal-film-arbitrary oxidative medium was proposed in that paper
also. This simple electric circuit obtained gives a theoretical approach to
understanding the principles of the modelling of redox and ionic processes by
means of equivalent electric circuits.</p>

<SCRIPT>comment(1)</SCRIPT><p>In this paper we tried to use the approach for the concrete
model of a galvanic system consisting of 2 arbitrary electrodes
series-connected with an external pure resistance and an external source of
polarization (cathodic or anodic). At the same time it was taken into account
that these two electrodes can corrode and be covered with an electroconductive
(by means of the ions of a metal and electrons) film. Thus, we tried to lay the
foundation of an approach to building equivalent electric circuits modelling
the behaviour of an arbitrary galvanic element working under various
conditions. The solution of the problem allows equations to be derived (for
this model of a galvanic system) for the following values:</p>

<SCRIPT>comment(1)</SCRIPT><p>1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
the emf (emfel) of the element</p>

<SCRIPT>comment(1)</SCRIPT><p>2.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
the internal resistance of the element (Rint)</p>

<SCRIPT>comment(1)</SCRIPT><p>3.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
the working current (J6) of the element (when the element is
series-connected with an external pure resistance (Rint) and an external source
of arbitrary polarization )</p>

<SCRIPT>comment(1)</SCRIPT><p>4.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
the currents (J6Ria and J6Ric) flowing between 2 similar electrodes,
which are made from the anode or cathode materials.</p>

<SCRIPT>comment(1)</SCRIPT><p>5.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
the corrosion currents of separate electrodes (the corrosion current of
the anode (Ja) and the corrosion current of the cathode (Jc)) when the element
is series-connected with an external pure resistance (Rint) and an external
source of arbitrary polarization.</p>

<SCRIPT>comment(1)</SCRIPT><p>6.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
the current of joint corrosion of the anode and cathode Jjc (see the
details below)</p>

<SCRIPT>comment(1)</SCRIPT><p>7.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
the current of total corrosion in the galvanic element Jcel</p>

<SCRIPT>comment(1)</SCRIPT><p>8.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
the external polarization when Ja is minimal</p>

<SCRIPT>comment(1)</SCRIPT><p>9.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
the external polarization when Jc is minimal</p>

<SCRIPT>comment(1)</SCRIPT><p>10.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
the external polarization when current of the joint corrosion of the
anode and cathode (Jjc) is minimal</p>

<SCRIPT>comment(1)</SCRIPT><p>11.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
the external polarization when current of total corrosion in the
galvanic element (Jcel) is minimal</p>

<SCRIPT>comment(1)</SCRIPT><p>All above-enumerated values are the functions of the
parameters of the system. Thus, the application of the mathematic methods of
the multifactor optimizing allows the determination of the following parameters
of the system:</p>

<SCRIPT>comment(1)</SCRIPT><p>1.&nbsp;&nbsp;&nbsp;&nbsp; the
optimal composition of a battery (in accordance with the required parameters of
the operation of a battery )</p>

<SCRIPT>comment(1)</SCRIPT><p>2.&nbsp;&nbsp;&nbsp;&nbsp; the
optimal conditions of the operation and storage of batteries</p>

<SCRIPT>comment(1)</SCRIPT><p>3.&nbsp;&nbsp;&nbsp;&nbsp; the
optimal conditions of the cathodic and anodic protection of metals against
corrosion.</p>

<SCRIPT>comment(1)</SCRIPT><p>The author of the paper realizes that a number of models of
functioning can be proposed even for the same galvanic system. The equivalent
electric circuit of the system will change in accordance with these models.
Consequently, the search of the optimum solution for this system will not
always produce the correct result (if at all). The result of the search is
determined by the adequacy of the model to its galvanic system. </p>

<SCRIPT>comment(1)</SCRIPT><p>The model of the functioning of a galvanic element, proposed by the
author of the paper.</p>

<SCRIPT>comment(1)</SCRIPT><p>As a sample of modelling of a galvanic element functioning,
the author of the paper proposes a model based on the following assumptions:</p>

<SCRIPT>comment(1)</SCRIPT><p>1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
the cathode (M2) (and anode (M1)) of the galvanic element can corrode in
the electrolyte environment of the element;</p>

<SCRIPT>comment(1)</SCRIPT><p>2.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
all elementary chemical (electrochemical) processes that occur in the
system, are reversible reactions; </p>

<SCRIPT>comment(1)</SCRIPT><p>3.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
there is only one oxidant (for the anode and cathode) in the system.</p>

<SCRIPT>comment(1)</SCRIPT><p>4.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
the oxidant on the cathode forms only one anion (a2) in the course of
corrosion and the operation of the galvanic element </p>

<SCRIPT>comment(1)</SCRIPT><p>5.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
the oxidant forms only one anion (a1) in the course of the corrosion of
the anode </p>

<SCRIPT>comment(1)</SCRIPT><p>6.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
only one cation (c2) forms in the course of the corrosion of the cathode
</p>

<SCRIPT>comment(1)</SCRIPT><p>7.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
only one cation (c1) forms in the course of the corrosion and the
operation of the galvanic element on the anode </p>

<SCRIPT>comment(1)</SCRIPT><p>8.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
the product of cathode corrosion (c2a2) either dissolves in the solution
or is deposited in the form of a film on the surface of the cathode</p>

<SCRIPT>comment(1)</SCRIPT><p>9.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
the product of anode corrosion (c1a1) either dissolves in the solution
or is deposited in the form of a film on the surface of the anode</p>

<SCRIPT>comment(1)</SCRIPT><p>10.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
the electroconductivity of the film (c2a2) on the cathode is conditioned
only by the transferring of cations (c2) and electrons </p>

<SCRIPT>comment(1)</SCRIPT><p>11.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
the electroconductivity of the film (c1a1) on the anode is conditioned
only by the transferring of cations (c1) and electrons </p>

<SCRIPT>comment(1)</SCRIPT><p>12.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
in the course of the transferring to the solution, the cation (c2) forms
only one product of its solvation (c2s)</p>

<SCRIPT>comment(1)</SCRIPT><p>13.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
in the course of the transferring to the solution, the cation (c1) forms
only one product of its solvation (c1s)</p>

<SCRIPT>comment(1)</SCRIPT><p>14.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
in the course of the transferring to the solution, the anion (a2) forms
only one product of its solvation (a2s)</p>

<SCRIPT>comment(1)</SCRIPT><p>15.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
in the course of the transferring to the solution, the anion (a1) forms
only one product of its solvation (a1s)</p>

<SCRIPT>comment(1)</SCRIPT><p>16.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
solvated anions (a2s) and solvated cations (c2s) interact in the
solution forming a neutral compound c2sa2s (for example an ion pair);</p>

<SCRIPT>comment(1)</SCRIPT><p>17.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
solvated anions (a2s) and solvated cations (c1s) interact in the
solution forming a neutral compound c1sa2s (for example an ion pair);</p>

<SCRIPT>comment(1)</SCRIPT><p>18.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
solvated anions (a1s) and solvated cations (c2s) interact in the
solution forming a neutral compound c2sa1s (for example an ion pair);</p>

<SCRIPT>comment(1)</SCRIPT><p>19.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
solvated anions (a1s) and solvated cations (c1s) interact in the
solution forming a neutral compound c1sa1s (for example an ion pair);</p>

<SCRIPT>comment(1)</SCRIPT><p>20.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
during the storage and in the course of the operation of the galvanic
element, anions (a2) and cations (c2) are not implanted into the film (c1a1)</p>

<SCRIPT>comment(1)</SCRIPT><p>21.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
during the storage and in the course of the operation of the galvanic
element, anions (a1) and cations (c1) are not implanted into the film (c2a2).</p>

<SCRIPT>comment(1)</SCRIPT><p>Guided by the aforesaid assumptions the author of the paper
proposes the following equivalent electric circuit to describe this model of a
galvanic element:</p>

<SCRIPT>comment(1)</SCRIPT><p align="center">
<img border=0
src="http://www.jcse.org/volume3/paper22/v3p22_files/image001.gif" width="589" height="262"></p>

<SCRIPT>comment(1)</SCRIPT><p><b>Fig. 1. the equivalent electric circuit proposed by the
author of this paper (a <a href="#Text description of Figure 1">text description</a> 
is available in the Appendix for visually impaired readers).</b></p>

<SCRIPT>comment(1)</SCRIPT><p>where:</p>

<SCRIPT>comment(1)</SCRIPT><p>RM11, RM12 - the Ohmic resistances of the metal of the anode
(M1), respectively from cathodic and anodic areas (of the corrosive
microelement on the metal/film interface) to the electric contact of the
external pure resistance, connected to the anode. (RM11 + RM12) = the Ohmic
resistance of the metal of the anode in the corrosive microelement.</p>

<SCRIPT>comment(1)</SCRIPT><p>RM21, RM22 - the values that are similar to RM11 and RM12,
but for cathode (M2)</p>

<SCRIPT>comment(1)</SCRIPT><p>Rc1, Rc2 - respectively, the sums of the cationic
resistances of metal/film (RcMe/film) phase boundaries, the film (Rcfilm) and film/solution
phase boundaries (Rcfilm/s), for the anode and cathode.</p>

<SCRIPT>comment(1)</SCRIPT><p>Re1, Re2 - respectively, the sums of the
electronic resistances of metal/film (ReMe/film) phase boundaries, the film
(Refilm) and film/solution phase boundaries (Refilm/s) for the anode and
cathode.</p>

<SCRIPT>comment(1)</SCRIPT><p>Rs1ox, Rs2ox - respectively, the resistance of
the transferring of the molecules (ions) of an oxidant to the film surface for
anode and cathode.</p>

<SCRIPT>comment(1)</SCRIPT><p>Ras2 and Ras1 - the
resistance of the transferring of the molecules of a solvent to the anodic and
cathodic areas of corrosive elements on the surface of the film/solution phase
boundary (for anode) to solvate the ions formed.</p>

<SCRIPT>comment(1)</SCRIPT><p>Rcs3 and Rcs4 - the resistance of the transferring of the
molecules of a solvent to the anodic and cathodic areas of corrosive elements
on the surface of the film/solution phase boundary (for cathode) to solvate the
ions formed.</p>

<SCRIPT>comment(1)</SCRIPT><p>Rciajaj, Rciajci - the anionic and cationic resistance of
the migration of delocalized cations (ci) and anions (aj) on the surface of a
film (ciaj) on the electrode (if i=j=1, then the electrode is an anode; if
i=j=2 then the electrode is a cathode). These are resistances from the areas
where anions are formed or the areas where cations outcrops on the surface of
the film/solution phase boundary to the areas, where they interact, which
results in the forming of a crystal lattice.</p>

<SCRIPT>comment(1)</SCRIPT><p>Rcjsaisais, Rcjsaiscjs, Rscjsais, Rsaiscjs - the anionic and
cationic resistance of the migration of solvated cations (cjs) and anions (ais)
in the solution. These are resistances from the areas where anions are formed
or the areas where cations outcrops on the surface of the film/solution phase
boundary to the areas, where they interact in the solution, which results in
the forming of a neutral substance cjsais (for example, an ion pair). </p>

<SCRIPT>comment(1)</SCRIPT><p>Rext - the external pure resistance</p>

<SCRIPT>comment(1)</SCRIPT><p>&#1045;&#1084;1, &#1045;&#1084;2 - the emf, corresponding to the direct reactions of
the processes: M1<sup>&nbsp; </sup>&rarr; c1 + e (for anode) and M2<sup>&nbsp; </sup>&rarr;c2 + e (for cathode).</p>

<SCRIPT>comment(1)</SCRIPT><p>ER1, ER2 - the emf, corresponding to the direct reactions of
the processes: Ox + &#1077; &rarr; a1 (for anode)
and Ox + &#1077; &rarr; a2 (for cathode).</p>

<SCRIPT>comment(1)</SCRIPT><p>Efcc2a2, Efac1a1- the emf, corresponding to the direct
reactions of the processes: c2 + &#1072;2 &rarr;
c2a2 (on the cathode) and c1 + &#1072;1 &rarr; c1a1
(on the anode). </p>

<SCRIPT>comment(1)</SCRIPT><p>Esci, Esai - the emf, corresponding to the direct reactions
of the processes of the solvation of cation ci and anion ai (i=1 for anode and
i=2 for cathode).</p>

<SCRIPT>comment(1)</SCRIPT><p>Escisajs - the emf, corresponding to the direct reaction of
the process of the formation of a neutral substance cisajs (in the solution)
from solvated ions cis and ajs (i=1&cedil;2;
j=1&cedil;2)</p>

<SCRIPT>comment(1)</SCRIPT><p>Ep - the emf (or voltage) of an external source of emf
(voltage).</p>

<SCRIPT>comment(1)</SCRIPT><p>Each circuit of the equivalent electric circuit describes
the definite process, taking place in the galvanic element described by this
model. The definition of this process can be easily made on the basis of an
algebraic sum of the vectors of the emf of this circuit. The detailed
definitions of the mechanisms of processes, taking place in a number of circuits
are shown in the table below and are necessary, as examples, for understanding
the functioning of the circuit. </p>

<SCRIPT>comment(1)</SCRIPT><p><b>Table 1. the list of some circuits of the total circuit
with the description of chemical processes taking place in them.</b></p>

<table border=1 cellspacing=0 cellpadding=2 style="border-collapse: collapse" bordercolor="#111111">
 <tr>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>Circuit nodes</p>
  </td>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>algebraic sum of the emf vectors of this circuit</p>
  </td>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>The description of the chemical processes taking place in
  this circuit</p>
  <SCRIPT>comment(1)</SCRIPT><p>&nbsp;</p>
  </td>
 </tr>
 <tr>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>0-1-2</p>
  </td>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>ER1 + Ef&#1072;c1&#1072;1 + &#1045;&#1052;1</p>
  </td>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>A cation (c1) and electron are generated on the metal/film
  (anode) phase boundary, as a result of a process with the emf=EM1. This
  cation c1 moves through a resistance Rc1 and goes out on the film/solution
  phase boundary. The obtained electron moves through the resistances (RM1 +
  RM11) (this sum is equal to the ohmic resistance of a metal in the corrosive
  element) and Re1 and goes out on the film/solution phase boundary, where this
  electron interacts with the molecule (ion) of an oxidant (Ox) (which is
  transferred here through the resistance Rs1ox), forming an anion a1 (the emf
  of this process is equal to ER1). </p>
  <SCRIPT>comment(1)</SCRIPT><p>The obtained delocalized cation (c1) and anion (a1)
  migrate on the surface of the film through the resistances Rc1a1c1 and
  Rc1a1a1 respectively to the place where they interact (the emf of the process
  = Efac1a1), which results in the forming of a crystal lattice of the
  corrosion product on the anode. </p>
  </td>
 </tr>
 <tr>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>
  <span style="font-size: 12.0pt; font-family: Times New Roman">0-1-3-4-2</span></p>
  </td>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT>ER1 + <span lang="RU">&#1045;</span>s<span lang="RU">&#1072;</span>1 
  + Esc1<span lang="RU">&#1072;</span>1 + <span lang="RU">&#1045;</span>sc1 +
  <span lang="RU">&#1045;&#1052;</span>1</td>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>A cation (c1) and electron are generated on the metal/film
  (anode) phase boundary, as result of a process with the emf=EM1. This cation
  c1 moves through a resistance Rc1 and goes out on the film/solution phase
  boundary. The electron moves through the resistances (RM1 + RM11) (this sum
  is equal to the ohmic resistance of a metal in the corrosive element) and Re1
  and goes out on the film/solution phase boundary where this electron
  interacts with the molecule (ion) of an oxidant (Ox)(which is transferred
  here through the resistance Rs1Ox), forming an anion a1 (the emf of this
  process is equal to ER1). These delocalized cations and anions are then
  solvated (the emfs of these processes are equal to &#1045;sc1 and &#1045;s&#1072;1,
  respectively) by solvent molecules (which are transferred here through the
  resistances Ras1and Ras2), and the resulting products are
  transported (through the resistances Rc1sa1sa1s and Rc1sa1sc1s) to the place
  (in the solution), where they interact (the emf of the process =Esc1sa1s),
  forming of a neutral ionic substance (i.e. a ionic pair). </p>
  </td>
 </tr>
 <tr>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>9-7-8</p>
  </td>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>ER2 + Efcc2&#1072;2 + &#1045;&#1052;2</p>
  </td>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>A cation (c2) and electron are generated on the metal/film
  (cathode) phase boundary, as a result of the process with emf=EM2. This
  cation c2 moves through a resistance Rc2 and goes out on the film/solution
  phase boundary. The electron moves through the resistances (RM2 + RM22) (this
  sum is equal to the ohmic resistance of a metal in the corrosive element) and
  Re2 and goes out on the film/solution phase boundary, where this electron
  interacts with the molecule (ion) of an oxidant (Ox) (transferred here through
  the resistance Rs2Ox), forming an anion a2 (the emf of this process = ER2).
  These delocalized
  cation and anion migrate on the surface of the film through the resistances
  Rc2a2c2 and Rc2a2a2 respectively to the place where they interact (the emf of
  the process = Efcc2a2), which results in the forming of the crystal lattice
  of the corrosion product on the cathode. </p>
  </td>
 </tr>
</table>

<SCRIPT>comment(1)</SCRIPT><p>The author of the paper assumes that the positive circuit
path-tracing direction (for the vectors of emfs and currents) is anticlockwise.
If the direction of the vector of the emf is similar to the circuit
path-tracing direction then this emf will be included in the expression for the
second Kirchhoff's law for this circuit with the plus sign and this emf
corresponds to the emf of the forward process. Otherwise, this emf is included
in the expression for the second Kirchhoff's law for this circuit with the sign
minus, so, the emf corresponds to the reverse process. The examples shown in
the Table 1do not describe all currents (and all circuits) of the total
circuit. Any reader of this paper, who wants to do it, can consider any other
circuit of the total circuit and understand the physical meaning of the
chemical processes taking place in this circuit. </p>

<SCRIPT>comment(1)</SCRIPT><p>The calculation of the equivalent circuit was made after
some insignificant simplification shown below:</p>

<SCRIPT>comment(1)</SCRIPT><p align="center">
<img border=0
src="http://www.jcse.org/volume3/paper22/v3p22_files/image002.gif" alt="The figure shows the equivalent circuit obtained from the initial circuit by means of some insignificant simplifications. Some of the resistances of this circuit are the sums of the initial circuit resistances that were connected in series. This equivalent circuit contains the same nodes as the initial circuit." width="413" height="216"></p>

<SCRIPT>comment(1)</SCRIPT><p><b>Fig.2. The result of the simplification of the authors initial
equivalent circuit. </b></p>

<SCRIPT>comment(1)</SCRIPT><p>where:</p>

<table border=0 cellspacing=0 cellpadding=0>
 <tr>
  <td width=288 valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>R1 = RM12 + Rc1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
  <SCRIPT>comment(1)</SCRIPT>
  <SCRIPT>comment(1)</SCRIPT><p>R3 = RM11 + Re1 + Rs1Ox&nbsp;&nbsp;&nbsp;&nbsp; </p>
  <SCRIPT>comment(1)</SCRIPT>
  <SCRIPT>comment(1)</SCRIPT><p>R5 = Rsa1sc2s + Rsc2sa1s</p>
  <p>R7 = Rs2Ox + Re2 + RM21</p>
  <p>R9 =
  Ras1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;</p>
  <SCRIPT>comment(1)</SCRIPT><p>R11 = Rcs4</p>
  <p>R13 = Rext</p>
  <SCRIPT>comment(1)</SCRIPT><p>R15=Rc2sa2sa2s + Rc2sa2sc2s</p>
  <p>E2 = Efac1a1 </p>
  <SCRIPT>comment(1)</SCRIPT><p>E4 = Esa1</p>
  <SCRIPT>comment(1)</SCRIPT><p>E6 = Esc1sa1s</p>
  <SCRIPT>comment(1)</SCRIPT><p>E8 = Efcc2a2</p>
  <SCRIPT>comment(1)</SCRIPT><p>E10 = Esa2</p>
  <SCRIPT>comment(1)</SCRIPT><p>E12 = Esc2sa2s</p>
  <SCRIPT>comment(1)</SCRIPT><p>E14 = Esc1sa2s</p>
  <SCRIPT>comment(1)</SCRIPT><p>&nbsp;</p>
  </td>
  <td width=336 valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>R2 = Rc1a1c1 + Rc1a1a1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;</p>
  <p>R4 = Rsc1sa2s + Rsa2sc1s&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </p>
  <p>R6 = Rc2a2a2 + Rc2a2c2</p>
  <SCRIPT>comment(1)</SCRIPT><p>R8 = Rc2 + RM22</p>
  <SCRIPT>comment(1)</SCRIPT><p>R10 =
  Ras2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;</p>
  <p>R12 = Rcs3</p>
  <SCRIPT>comment(1)</SCRIPT><p>R14=Rc1sa1sa1s + Rc1sa1sc1s&nbsp;&nbsp; &nbsp;</p>
  <p>E1 =
  ER1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;</p>
  <SCRIPT>comment(1)</SCRIPT><p>E3 = EM1<sub>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </sub>&nbsp;&nbsp;</p>
  <SCRIPT>comment(1)</SCRIPT><p>E5 =
  Esc1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;</p>
  <SCRIPT>comment(1)</SCRIPT><p>E7 =
  ER2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;</p>
  <SCRIPT>comment(1)</SCRIPT><p>E9 =
  EM2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </p>
  <SCRIPT>comment(1)</SCRIPT><p>E11 =
  Esc2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </p>
  <SCRIPT>comment(1)</SCRIPT><p>E13 = Esc2sa1s<sub>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;</sub></p>
  <SCRIPT>comment(1)</SCRIPT><p>E15 = Ep</p>
  </td>
 </tr>
</table>

<SCRIPT>comment(1)</SCRIPT><p><sub>&nbsp;</sub>The following currents were calculated for
this circuit:</p>

<ol start=1 type=1>
 <li>the current of corrosion of the anode, that is accompanied
     by the formation of the film on the anode - J1 (the circuit R1-R2-R3);</li>
 <li>the current of corrosion of the anode, accompanied by the
     formation of the soluble products of corrosion in the solution - J2 (the
     circuit R1-R10-R14-R9-R3);</li>
 <li>the current of corrosion of the cathode, accompanied by
     the formation of the film on the cathode - J3 (the circuit R7-R6-R8);</li>
 <li>the current of corrosion of the cathode, accompanied by
     the formation of the soluble products of corrosion in the solution - J4
     (the circuit R7-R11-R15-R12-R8);</li>
 <li>the current of the joint corrosion of the anode and
     cathode - J5, flowing in the circuit R1-R10-R4-R11-R7-R8-R12-R5-R9-R3. In
     reality it is the current of self-discharge of the element;</li>
 <li>the working current of the galvanic element - J6 (the
     circuit R1-R10-R4-R11-R7-R13);</li>
</ol>

<SCRIPT>comment(1)</SCRIPT><p>The calculation of the currents in this equivalent electric circuit
was made on the basis of the second Kirchhoff's law for these 6 aforesaid
circuits. </p>

<SCRIPT>comment(1)</SCRIPT><h4>The results of the calculation of parameters of the proposed
equivalent circuit.</h4>

<SCRIPT>comment(1)</SCRIPT><p>It was found: </p>

<blockquote>
  1. there are 47 subcircuits which exert influence upon all
      electric currents, calculated in this paper<p style="margin:0cm;margin-bottom:.0001pt">
  2. According to the principle of currents superposition, total current Ji 
  (that flows through the fixed circuit i-branch) can be described as the sum 
  &nbsp;&nbsp;&nbsp; <span style="position: relative; top: 15.0pt">
  <img src="v3p22.1.gif" v:shapes="_x0000_i1025" align="bottom" alt="J sub i is equal to the sum for j=1 to m&nbsp; of  J1j" width="77" height="48">,</span>&nbsp;where 
  m is the number of currents that flow through the circuit i-branch, J1j is the 
  j-current that flows through the circuit i-branch.&nbsp; </p>
  <p style="margin:0cm;margin-bottom:.0001pt">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
  <p style="margin:0cm;margin-bottom:.0001pt">In our case
  <span style="position: relative; top: 15.0pt">
  <img src="v3p22.2.gif" v:shapes="_x0000_i1026" align="bottom" alt="Jj is equal to K1j divided by K times the sum for f=1 to m of Ef" width="95" height="48">,  </span>where <span style="position: relative; top: 15.0pt">
  <img src="v3p22.3.gif" v:shapes="_x0000_i1027" align="bottom" width="44" height="48"></span> is the 
  algebraic sum of the emfs contained in the closed subcircuit (where J1j 
  flows). As regards the sign of Ef see the text below. </p>
  <p><span style="font-size: 12.0pt; font-family: Times New Roman">So, the total 
  current Ji (that flows through the fixed circuit i-branch) is given by:</span></p>
</blockquote>

<p align=center><sub>
<img border=0
src="http://www.jcse.org/volume3/paper22/v3p22_files/image003.gif" alt="J subscript i is equal to 1 divided by K times the sum for j=1 to n of (K1 subscript j times the sum for f=1 to m of (E subscript f)))" align="middle" width="153" height="48"></span></sub>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
(1)</p>

<SCRIPT>comment(1)</SCRIPT>
<blockquote>
  <p>where n is equal to the number of the subcircuits which
exert influence upon the electric current Ji</p>

  <p>sum(for f=1 to m of (Ef)) is
the sum of the values of the emfs (Ef), which form such closed j-subcircuit,
which has an influence upon the electric current Ji.</p>

</blockquote>

<SCRIPT>comment(1)</SCRIPT>
<blockquote>
  <p>m is the number of the emfs which
form the given closed subcircuit j. The value of the m depends on the value j,
only.</p>

</blockquote>

<SCRIPT>comment(1)</SCRIPT>
<blockquote>
  <p>K1j/K is the equivalent 
  <span style="font-size: 12.0pt; font-family: Times New Roman">conductivity
  </span>of the circuit, which is connected to the closed j-subcircuit. </p>

</blockquote>

<SCRIPT>comment(1)</SCRIPT>
<blockquote>
  <p>&nbsp;&nbsp; &nbsp;where K1j is the function of the sum
(for f=1 to m of (Ef)). The list of  values of K1j is represented in  Table 2.</p>

</blockquote>

<SCRIPT>comment(1)</SCRIPT>
<blockquote>
  <p>K is a constant value for all currents.
Its value is derived in Appendix 1</p>

</blockquote>

<SCRIPT>comment(1)</SCRIPT><p>The list of the 47 subcircuits that exert influence upon all
electric currents, calculated in this paper, is shown in Table 2.</p>

<SCRIPT>comment(1)</SCRIPT><p><b>Table 2. The list of 47 subcircuits that exert influence
upon the electric currents.</b></p>

<table border=1 cellspacing=0 cellpadding=0 bordercolor="#993333" style="border-collapse: collapse">
 <tr>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>&#8470;</p>
  </td>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>i-subcircuit</p>
  </td>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>K1i value of this subcircuit</p>
  </td>
 </tr>
 <tr>
  <td colspan=3 valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>Circuits that do not contain the source of the external
  polarization (E15)</p>
  </td>
 </tr>
 <tr>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>1</p>
  </td>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>(E1 + E2 + E3)</p>
  </td>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>R13 &times; [[(R4 &times; R10 + R4 &times; R14 + R10
  &times; R14) + (R5 &times; R9 + R5 &times; R14 + R9 &times; R14) + (R4
  &times; R9 + R5 &times; R10)] &times; [[(R6 &times; R11 + R6 &times; R7 + R7
  &times; R11) + (R6 &times; R12 + R6 &times; R8 + R8 &times; R12) + (R7
  &times; R12 + R8 &times; R11)]]] + [(R4 &times; R10 + R4 &times; R14 + R10 &times;
  R14) + (R5 &times; R9 + R5 &times; R14 + R9 &times; R14) + (R4 &times; R9 +
  R5 &times; R10)] &times; [(R6 &times; R11 + R6 &times; R7 + R7 &times; R11)
  &times; (R8 + R12) + R8 &times; R12 &times; (R7 + R11) + R15 &times; [R13
  &times; (R6 + R7 + R8) + R7 &times; R8]] + [(R6 &times; R11 + R6 &times; R7 +
  R7 &times; R11) + (R6 &times; R12 + R6 &times; R8 + R8 &times; R12) + (R7
  &times; R12 + R8 &times; R11)] &times; [(R4 &times; R10 + R4 &times; R14 +
  R10 &times; R14) &times; (R5 + R9) + R5 &times; R9 &times; (R4 + R10) + R15
  &times; [R13 &times; (R9 + R10 + R14) + R9 &times; R10]] + R15 &times; [[(R4
  &times; R10 + R4 &times; R14 + R10 &times; R14) + R4 &times; R9] &times; [(R6
  &times; R12 + R6 &times; R8 + R8 &times; R12) + R7 &times; R12] + [(R5
  &times; R9 + R5 &times; R14 + R9 &times; R14) + R5 &times; R10] &times; [(R6
  &times; R11 + R6 &times; R7 + R7 &times; R11) + R8 &times; R11] + (R9 + R10 +
  R14) &times; [(R6 &times; R11 + R6 &times; R7 + R7 &times; R11) &times; (R8 +
  R12) + R8 &times; R12 &times; (R7 + R11)] + (R6 + R7 + R8) &times; [(R4
  &times; R10 + R4 &times; R14 + R10 &times; R14) &times; (R5 + R9) + R9
  &times; R5 &times; (R4 + R10)]]&nbsp; </p>
  </td>
 </tr>
 <tr>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>2</p>
  </td>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>(E7 + E8 + E9)</p>
  </td>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>R13 &times; [[(R1 &times; R10 + R1 &times; R2 + R2 &times;
  R10) + (R2 &times; R9 + R2 &times; R3 + R3 &times; R9) + (R1 &times; R9 + R3
  &times; R10)] &times; [[(R4 &times; R11 + R4 &times; R15 + R11 &times; R15) +
  (R5 &times; R12 + R5 &times; R15 + R12 &times; R15) + (R4 &times; R12 + R5
  &times; R11)]]] + [(R1 &times; R10 + R1 &times; R2 + R2 &times; R10) + (R2
  &times; R9 + R2 &times; R3 + R3 &times; R9) + (R1 &times; R9 + R3 &times;
  R10)] &times; [(R4 &times; R11 + R4 &times; R15 + R11 &times; R15) &times;
  (R5 + R12) + R5 &times; R12 &times; (R4 + R11) + R14 &times; [R13 &times;
  (R11 + R12 + R15) + R11 &times; R12]] + [(R4 &times; R11 + R4 &times; R15 +
  R11 &times; R15) + (R5 &times; R12 + R5 &times; R15 + R12 &times; R15) + (R4 &times;
  R12 + R5 &times; R11)] &times; [(R1 &times; R10 + R1 &times; R2 + R2 &times;
  R10) &times; (R3 + R9) + R3 &times; R9 &times; (R1 + R10) + R14 &times; [R13
  &times; (R1 + R2 + R3) + R1 &times; R3]] + R14 &times; [[(R1 &times; R10 + R1
  &times; R2 + R2 &times; R10) + R3 &times; R10] &times; [(R5 &times; R12 + R5
  &times; R15 + R12 &times; R15) + R5 &times; R11] + [(R2 &times; R9 + R2 &times;
  R3 + R3 &times; R9) + R1 &times; R9] &times; [(R4 &times; R11 + R4 &times;
  R15 + R11 &times; R15) + R4 &times; R12] + (R1 + R2 + R3) &times; [(R4
  &times; R11 + R4 &times; R15 + R11 &times; R15) &times; (R5 + R12) + R5
  &times; R12 &times; (R4 + R11)] + (R11 + R12 + R15) &times; [(R1 &times; R10
  + R1 &times; R2 + R2 &times; R10) &times; (R3 + R9) + R3 &times; R9 &times;
  (R1 + R10)]]</p>
  </td>
 </tr>
 <tr>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>3</p>
  </td>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>(E2 - E4 - E5 - E6)</p>
  </td>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>(R1 + R3) &times; [[(R4 &times; R11 + R4 &times; R15 + R11
  &times; R15) + R5 &times; R11] &times; [(R6 &times; R12 + R6 &times; R8 + R8
  &times; R12) + R7 &times; R12] + R5 &times; R15 &times; [(R6 &times; R11 + R6
  &times; R7 + R7 &times; R11) + R8 &times; R11] + R6 &times; R7 &times; (R4 +
  R5 + R15) &times; (R8 + R12)] + [[(R4 &times; R11 + R4 &times; R15 + R11
  &times; R15) + (R5 &times; R12 + R5 &times; R15 + R12 &times; R15) + (R4
  &times; R12 + R5 &times; R11)]] &times; [R7 &times; R8 &times; (R1 + R3)] +
  [[(R6 &times; R11 + R6 &times; R7 + R7 &times; R11) + (R6 &times; R12 + R6
  &times; R8 + R8 &times; R12) + (R7 &times; R12 + R8 &times; R11)]] &times;
  [(R1 &times; R13 + R1 &times; R3 + R3 &times; R13) &times; (R4 + R5 + R15) +
  R4 &times; R5 &times; (R1 + R3)] + R15 &times; (R6 + R7 + R8) &times; [(R4 +
  R5) &times; (R1 &times; R13 + R1 &times; R3 + R3 &times; R13) + R4 &times; R5
  &times; (R1 + R3)]</p>
  </td>
 </tr>
 <tr>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>4</p>
  </td>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>(E8 - E10 - E11 - E12)</p>
  </td>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>(R7 + R8) &times; [[(R2 &times; R9 + R2 &times; R3 + R3
  &times; R9) + R1 &times; R9] &times; [(R4 &times; R10 + R4 &times; R14 + R10
  &times; R14) + R5 &times; R10] + R14 &times; R5 &times; [(R1 &times; R10 + R1
  &times; R2 + R2 &times; R10) + R3 &times; R10] + R1 &times; R2 &times; (R4 +
  R5 + R14) &times; (R3 + R9)] + [[(R4 &times; R10 + R4 &times; R14 + R10
  &times; R14) + (R5 &times; R9 + R5 &times; R14 + R9 &times; R14) + (R4
  &times; R9 + R5 &times; R10)]] &times; [R1 &times; R3 &times; (R7 + R8)] +
  [[(R1 &times; R10 + R1 &times; R2 + R2 &times; R10) + (R2 &times; R9 + R2
  &times; R3 + R3 &times; R9) + (R1 &times; R9 + R3 &times; R10)]] &times; [(R7
  &times; R13 + R7 &times; R8 + R8 &times; R13) &times; (R4 + R5 + R14) + R4
  &times; R5 &times; (R7 + R8)] + R14 &times; (R1 + R2 + R3) &times; [(R4 + R5)
  &times; (R7 &times; R13 + R7 &times; R8 + R8 &times; R13) + R4 &times; R5
  &times; (R7 + R8)]</p>
  </td>
 </tr>
 <tr>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>5</p>
  </td>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>(-E6 + E13 + E14 - E12)</p>
  </td>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>[(R1 &times; R10 + R1 &times; R2 + R2 &times; R10) + (R2
  &times; R9 + R2 &times; R3 + R3 &times; R9) + (R1 &times; R9 + R3 &times; R10)]
  &times;[ R13 &times; [(R6 &times; R11 + R6 &times; R7 + R7 &times; R11) + (R6
  &times; R12 + R6 &times; R8 + R8 &times; R12) + (R7 &times; R12 + R8 &times;
  R11)] + [(R1 &times; R10 + R1 &times; R2 + R2 &times; R10) + (R2 &times; R9 +
  R2 &times; R3 + R3 &times; R9) + (R1 &times; R9 + R3 &times; R10)] &times;
  [(R6 &times; R11 + R6 &times; R7 + R7 &times; R11) &times; (R8 + R12) + R8
  &times; R12 &times; (R7 + R11)] + [(R6 &times; R11 + R6 &times; R7 + R7
  &times; R11) + (R6 &times; R12 + R6 &times; R8 + R8 &times; R12) + (R7
  &times; R12 + R8 &times; R11)] &times; [(R1 &times; R10 + R1 &times; R2 + R2
  &times; R10) &times; (R3 + R9) + R3 &times; R9 &times; (R1 + R10)]]</p>
  </td>
 </tr>
 <tr>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>6</p>
  </td>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>(E1 + E3 + E4 + E5 + E6)</p>
  </td>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>R2 &times; [[(R4 &times; R11 + R4 &times; R15 + R11
  &times; R15) + (R5 &times; R12 + R5 &times; R15 + R12 &times; R15) + (R4
  &times; R12 + R5 &times; R11)] &times; [[R13 &times; (R6 + R7 + R8) + R7
  &times; R8]] + R6 &times; [(R4 + R5 + R15) &times; (R7 &times; R13 + R7
  &times; R8 + R8 &times; R13) + R7 &times; [(R5 &times; R12 + R5 &times; R15 +
  R12 &times; R15) + R4 &times; R12]] + R5 &times; [(R6 + R7 + R8) &times; [(R4
  &times; R11 + R4 &times; R15 + R11 &times; R15) + R4 &times; R12] + R4
  &times; R6 &times; (R7 + R8)] + [(R4 &times; R11 + R4 &times; R15 + R11
  &times; R15) + R5 &times; R11] &times; [(R6 &times; R12 + R6 &times; R8 + R8
  &times; R12) + R7 &times; R12]]</p>
  </td>
 </tr>
 <tr>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>7</p>
  </td>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>(E12 + E10 + E11 + E7 + E9)</p>
  </td>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>R6 &times; [[(R4 &times; R10 + R4 &times; R14 + R10
  &times; R14) + (R5 &times; R9 + R5 &times; R14 + R9 &times; R14) + (R4
  &times; R9 + R5 &times; R10)] &times; [[R13 &times; (R1 + R2 + R3) + R1
  &times; R3]] + R2 &times; [(R4 + R5 + R14) &times; (R1 &times; R13 + R1
  &times; R3 + R3 &times; R13) + R1 &times; [(R5 &times; R9 + R5 &times; R14 +
  R9 &times; R14) + R4 &times; R9]] + R5 &times; [(R1 + R2 + R3) &times; [(R4
  &times; R10 + R4 &times; R14 + R10 &times; R14) + R4 &times; R9] + R4 &times;
  R2 &times; (R1 + R3)] + [(R4 &times; R10 + R4 &times; R14 + R10 &times; R14)
  + R5 &times; R10] &times; [(R2 &times; R9 + R2 &times; R3 + R3 &times; R9) +
  R1 &times; R9]]</p>
  </td>
 </tr>
 <tr>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>8</p>
  </td>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>(-E6 + E13 + E14 + E10 + E11 - E8)</p>
  </td>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>R15 &times; [[(R1 &times; R10 + R1 &times; R2 + R2 &times;
  R10) + (R2 &times; R9 + R2 &times; R3 + R3 &times; R9)] &times; (R7 &times;
  R13 + R7 &times; R8 + R8 &times; R13) + (R1 &times; R10 + R1 &times; R2 + R2
  &times; R10) &times; (R7 + R8) &times; (R3 + R9) + (R7 &times; R13 + R7
  &times; R8 + R8 &times; R13) &times; (R1 &times; R9 + R3 &times; R10) + (R1 +
  R10) &times; R3 &times; R9 &times; (R7 + R8)]</p>
  </td>
 </tr>
 <tr>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>9</p>
  </td>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>(-E2 + E4 + E5 + E13 + E14 - E12)</p>
  </td>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>R14 &times; [[(R6 &times; R11 + R6 &times; R7 + R7 &times;
  R11) + (R6 &times; R12 + R6 &times; R8 + R8 &times; R12)] &times; (R1 &times;
  R13 + R1 &times; R3 + R3 &times; R13) + (R6 &times; R11 + R6 &times; R7 + R7
  &times; R11) &times; (R1 + R3) &times; (R8 + R12) + (R1 &times; R13 + R1
  &times; R3 + R3 &times; R13) &times; (R7 &times; R12 + R8 &times; R11) + (R7
  + R11) &times; R8 &times; R12 &times; (R1 + R3)]</p>
  </td>
 </tr>
 <tr>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>10</p>
  </td>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>(-E6 + E13 + E14 + E10 + E11 + E7 + E9)</p>
  </td>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>R15 &times; R6 &times; [R13 &times; [(R1 &times; R10 + R1
  &times; R2 + R2 &times; R10) + (R2 &times; R9 + R2 &times; R3 + R3 &times;
  R9) + (R1 &times; R9 + R3 &times; R10)] + (R1 &times; R10 + R1 &times; R2 +
  R2 &times; R10) &times; (R3 + R9) + R3 &times; R9 &times; (R1 + R10)] </p>
  </td>
 </tr>
 <tr>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>11</p>
  </td>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>(E1 + E3 + E4 + E5 + E13 + E14 - E12)</p>
  </td>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>R2 &times; R14 &times; [R13 &times; [(R6 &times; R11 + R6
  &times; R7 + R7 &times; R11) + (R6 &times; R12 + R6 &times; R8 + R8 &times;
  R12) + (R7 &times; R12 + R8 &times; R11)] + (R6 &times; R11 + R6 &times; R7 +
  R7 &times; R11) &times; (R8 + R12) + R8 &times; R12 &times; (R7 + R11)]</p>
  </td>
 </tr>
 <tr>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>12</p>
  </td>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>(E1 + E3 + E4 + E5 + E13 + E14 + E10 + E11 + E7 + E9)</p>
  </td>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>R2 &times; R14 &times; R15 &times; R6 &times; R13</p>
  </td>
 </tr>
 <tr>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>13</p>
  </td>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>(-E2 + E4 + E5 + E13 + E14 + E10 + E11 - E8)</p>
  </td>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>R14 &times; R15 &times; [(R7 &times; R13 + R7 &times; R8 +
  R8 &times; R13) &times; (R1 + R3) + R1 &times; R3 &times; (R7 + R8)]</p>
  </td>
 </tr>
 <tr>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>14</p>
  </td>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>(-E2 + E4 + E5 + E13 + E14 + E10 + E11 + E7 + E9)</p>
  </td>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>R14 &times; R15 &times; R6 &times; (R1 &times; R13 + R1
  &times; R3 + R3 &times; R13)</p>
  </td>
 </tr>
 <tr>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>15</p>
  </td>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>(E1 + E3 + E4 + E5 + E13 + E14 + E10 + E11 - E8)</p>
  </td>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>R2 &times; R14 &times; R15 &times; (R7 &times; R13 + R7
  &times; R8 + R8 &times; R13)</p>
  </td>
 </tr>
 <tr>
  <td colspan=3 valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>Circuits containing the source of the external
  polarization (E15)</p>
  </td>
 </tr>
 <tr>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>1</p>
  </td>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>(-E1 - E4 - E13 - E11 - E9 + E15)</p>
  </td>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>[(R1 &times; R10 + R1 &times; R2 + R2 &times; R10) &times;
  (R4 + R14 + R15) &times; (R6 &times; R11 + R6 &times; R7 + R7 &times; R11) +
  (R1 &times; R10 + R1 &times; R2 + R2 &times; R10) &times; (R4 + R14) &times;
  (R6 + R7) &times; R15 + (R6 &times; R11 + R6 &times; R7 + R7 &times; R11)
  &times; (R1 + R2) &times; (R4 + R15) &times; R14 + (R1 + R2) &times; R4
  &times; (R6 + R7) &times; R14 &times; R15]</p>
  </td>
 </tr>
 <tr>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>2</p>
  </td>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>(E3 + E5 + E14 + E10 + E7 + E15)</p>
  </td>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>[(R2 &times; R9 + R2 &times; R3 + R3 &times; R9) &times;
  (R5 + R14 + R15) &times; (R6 &times; R12 + R6 &times; R8 + R8 &times; R12) +
  (R2 &times; R9 + R2 &times; R3 + R3 &times; R9) &times; (R5 + R14) &times;
  (R6 + R8) &times; R15 + (R6 &times; R12 + R6 &times; R8 + R8 &times; R12)
  &times; (R2 + R3) &times; (R5 + R15) &times; R14 + (R2 + R3) &times; R5
  &times; (R6 + R8) &times; R14 &times; R15]</p>
  </td>
 </tr>
 <tr>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>3</p>
  </td>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>(-E1 - E2 + E5 + E14 + E10 + E7 + E15)</p>
  </td>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>R1 &times; [(R5 &times; R9 + R5 &times; R14 + R9 &times;
  R14) &times; (R6 &times; R12 + R6 &times; R8 + R8 &times; R12) + R15 &times;
  [(R5 &times; R9 + R5 &times; R14 + R9 &times; R14) &times; (R6 + R8) + (R6
  &times; R12 + R6 &times; R8 + R8 &times; R12) &times; (R9 + R14)]]</p>
  </td>
 </tr>
 <tr>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>4</p>
  </td>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>(E3 + E2 - E4 - E13 - E11 - E9 + E15)</p>
  </td>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>R3 &times; [(R4 &times; R10 + R4 &times; R14 + R10 &times;
  R14) &times; (R6 &times; R11 + R6 &times; R7 + R7 &times; R11) + R15 &times;
  [(R4 &times; R10 + R4 &times; R14 + R10 &times; R14) &times; (R6 + R7) + (R6
  &times; R11 + R6 &times; R7 + R7 &times; R11) &times; (R10 + R14)]]</p>
  </td>
 </tr>
 <tr>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>5</p>
  </td>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>(E3 + E5 + E14 + E10 - E8 - E9 + E15)</p>
  </td>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>R7 &times; [(R2 &times; R9 + R2 &times; R3 + R3 &times;
  R9) &times; (R5 &times; R12 + R5 &times; R15 + R12 &times; R15) + R14 &times;
  [(R2 &times; R9 + R2 &times; R3 + R3 &times; R9) &times; (R12 + R15) + (R5
  &times; R12 + R5 &times; R15 + R12 &times; R15) &times; (R2 + R3)]]</p>
  </td>
 </tr>
 <tr>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>6</p>
  </td>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>(-E1 - E4 - E13 - E11 + E8 + E7 + E15)</p>
  </td>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>R8 &times; [(R1 &times; R10 + R1 &times; R2 + R2 &times;
  R10) &times; (R4 &times; R11 + R4 &times; R15 + R11 &times; R15) + R14
  &times; [(R1 &times; R10 + R1 &times; R2 + R2 &times; R10) &times; (R11 +
  R15) + (R4 &times; R11 + R4 &times; R15 + R11 &times; R15) &times; (R1 +
  R2)]]</p>
  </td>
 </tr>
 <tr>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>7</p>
  </td>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>(-E1 - E4 - E6 + E14 + E10 + E7 + E15)</p>
  </td>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>(R1 &times; R10 + R1 &times; R2 + R2 &times; R10) &times;
  [(R6 &times; R12 + R6 &times; R8 + R8 &times; R12) &times; (R5 + R15) + R5
  &times; (R6 + R8) &times; R15]</p>
  </td>
 </tr>
 <tr>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>8</p>
  </td>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>(E3 + E5 + E6 - E13 - E11 - E9 + E15)</p>
  </td>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>(R2 &times; R9 + R2 &times; R3 + R3 &times; R9) &times;
  [(R6 &times; R11 + R6 &times; R7 + R7 &times; R11) &times; (R4 + R15) + R4
  &times; (R6 + R7) &times; R15]</p>
  </td>
 </tr>
 <tr>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>9</p>
  </td>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>(E3 + E5 + E14 - E12 - E11 - E9 + E15)</p>
  </td>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>(R6 &times; R11 + R6 &times; R7 + R7 &times; R11) &times;
  [(R2 &times; R9 + R2 &times; R3 + R3 &times; R9) &times; (R5 + R14) + R5
  &times; (R2 + R3) &times; R14]</p>
  </td>
 </tr>
 <tr>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>10</p>
  </td>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>(-E1 - E4 - E13 + E12 + E10 + E7 + E15)</p>
  </td>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>(R6 &times; R12 + R6 &times; R8 + R8 &times; R12) &times;
  [(R1 &times; R10 + R1 &times; R2 + R2 &times; R10) &times; (R4 + R14) + R4
  &times; (R1 + R2) &times; R14]</p>
  </td>
 </tr>
 <tr>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>11</p>
  </td>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>(-E1 - E2 + E5 + E6 - E13 - E11 - E9 + E15)</p>
  </td>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>R1 &times; R9 &times; [(R6 &times; R11 + R6 &times; R7 +
  R7 &times; R11) &times; (R4 + R15) + R4 &times; (R6 + R7) &times; R15]</p>
  </td>
 </tr>
 <tr>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>12</p>
  </td>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>(E3 + E2 - E4 - E6 + E14 + E10 + E7 + E15)</p>
  </td>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>R3 &times; R10 &times; [(R6 &times; R12 + R6 &times; R8 +
  R8 &times; R12) &times; (R5 + R15) + R5 &times; R15 &times; (R6 + R8)]</p>
  </td>
 </tr>
 <tr>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>13</p>
  </td>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>(-E1 - E2 + E5 + E14 + E10 - E8 - E9 + E15)</p>
  </td>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>R1 &times; R7 &times; [(R5 &times; R9 + R5 &times; R14 +
  R9 &times; R14) &times; (R12 + R15) + (R9 + R14) &times; R12 &times; R15]</p>
  </td>
 </tr>
 <tr>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>14</p>
  </td>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>(E3 + E2 - E4 - E13 - E11 + E8 + E7 + E15)</p>
  </td>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>R3 &times; R8 &times; [(R4 &times; R10 + R4 &times; R14 +
  R10 &times; R14) &times; (R11 + R15) + (R10 + R14) &times; R11 &times; R15]</p>
  </td>
 </tr>
 <tr>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>15</p>
  </td>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>(-E1 - E4 - E13 + E12 + E10 - E8 - E9 + E15)</p>
  </td>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>R7 &times; R12 &times; [(R1 &times; R10 + R1 &times; R2 +
  R2 &times; R10) &times; (R4 + R14) + R4 &times; (R1 + R2) &times; R14]</p>
  </td>
 </tr>
 <tr>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>16</p>
  </td>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>(E3 + E5 + E14 - E12 - E11 + E8 + E7 + E15)</p>
  </td>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>R8 &times; R11 &times; [(R2 &times; R9 + R2 &times; R3 +
  R3 &times; R9) &times; (R5 + R14) + R5 &times; R14 &times; (R2 + R3)]</p>
  </td>
 </tr>
 <tr>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>17</p>
  </td>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>(-E1 - E2 + E5 + E14 - E12 - E11 - E9 + E15)</p>
  </td>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>R1 &times; (R5 &times; R9 + R5 &times; R14 + R9 &times;
  R14) &times; (R6 &times; R11 + R6 &times; R7 + R7 &times; R11)</p>
  </td>
 </tr>
 <tr>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>18</p>
  </td>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>(-E1 - E2 + E5 + E14 - E12 - E11 + E8 + E7 + E15)</p>
  </td>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>R1 &times; (R5 &times; R9 + R5 &times; R14 + R9 &times;
  R14) &times; R11 &times; R8</p>
  </td>
 </tr>
 <tr>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>19</p>
  </td>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>(-E1 - E2 + E5 + E6 - E13 + E12 + E10 + E7 + E15)</p>
  </td>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>R1 &times; R9 &times; R4 &times; (R6 &times; R12 + R6
  &times; R8 + R8 &times; R12)</p>
  </td>
 </tr>
 <tr>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>20</p>
  </td>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>(-E1 - E2 + E5 + E6 - E13 - E11 + E8 + E7 + E15)</p>
  </td>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>R1 &times; R9 &times; (R4 &times; R11 + R4 &times; R15 +
  R11 &times; R15) &times; R8</p>
  </td>
 </tr>
 <tr>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>21</p>
  </td>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>(-E1 - E4 - E6 + E14 - E12 - E11 - E9 + E15)</p>
  </td>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>(R1 &times; R10 + R1 &times; R2 + R2 &times; R10) &times;
  R5 &times; (R6 &times; R11 + R6 &times; R7 + R7 &times; R11)</p>
  </td>
 </tr>
 <tr>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>22</p>
  </td>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>(-E1 - E4 - E6 + E14 - E12 - E11 + E8 + E7 + E15)</p>
  </td>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>(R1 &times; R10 + R1 &times; R2 + R2 &times; R10) &times;
  R5 &times; R11 &times; R8</p>
  </td>
 </tr>
 <tr>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>23</p>
  </td>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>(-E1 - E4 - E6 + E14 + E10 - E8 - E9 + E15)</p>
  </td>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>(R1 &times; R10 + R1 &times; R2 + R2 &times; R10) &times;
  (R5 &times; R12 + R5 &times; R15 + R12 &times; R15) &times; R7</p>
  </td>
 </tr>
 <tr>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>24</p>
  </td>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>(E3 + E2 - E4 - E13 + E12 + E10 + E7 + E15)</p>
  </td>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>R3 &times; (R4 &times; R10 + R4 &times; R14 + R10 &times;
  R14) &times; (R6 &times; R12 + R6 &times; R8 + R8 &times;
  R12)&nbsp;&nbsp;&nbsp; </p>
  </td>
 </tr>
 <tr>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>25</p>
  </td>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>(E3 + E2 - E4 - E6 + E14 - E12 - E11 - E9 + E15)</p>
  </td>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>R3 &times; R10 &times; R5 &times; (R6 &times; R11 + R6
  &times; R7 + R7 &times; R11)</p>
  </td>
 </tr>
 <tr>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>26</p>
  </td>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>(E3 + E2 - E4 - E13 + E12 + E10 - E8 - E9 + E15)</p>
  </td>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>R3 &times; (R4 &times; R10 + R4 &times; R14 + R10 &times;
  R14) &times; R12 &times; R7</p>
  </td>
 </tr>
 <tr>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>27</p>
  </td>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>(E3 + E2 - E4 - E6 + E14 + E10 - E8 - E9 + E15)</p>
  </td>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>R3 &times; (R5 &times; R12 + R5 &times; R15 + R12 &times;
  R15) &times; R10 &times; R7</p>
  </td>
 </tr>
 <tr>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>28</p>
  </td>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>(E3 + E5 + E6 - E13 + E12 + E10 + E7 + E15)</p>
  </td>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>(R2 &times; R9 + R2 &times; R3 + R3 &times; R9) &times; R4
  &times; (R6 &times; R12 + R6 &times; R8 + R8 &times; R12)</p>
  </td>
 </tr>
 <tr>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>29</p>
  </td>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>(E3 + E5 + E6 - E13 - E11 + E8 + E7 + E15)</p>
  </td>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>(R2 &times; R9 + R2 &times; R3 + R3 &times; R9) &times;
  (R4 &times; R11 + R4 &times; R15 + R11 &times; R15) &times; R8</p>
  </td>
 </tr>
 <tr>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>30</p>
  </td>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>(E3 + E5 + E6 - E13 + E12 + E10 - E8 - E9 + E15)</p>
  </td>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>(R2 &times; R9 + R2 &times; R3 + R3 &times; R9) &times; R4
  &times; R12 &times; R7</p>
  </td>
 </tr>
 <tr>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>31</p>
  </td>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>(-E1 - E2 + E5 + E6 - E13 + E12 + E10 - E8 - E9 + E15)</p>
  </td>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>R1 &times; R9 &times; R4 &times; R12 &times; R7</p>
  </td>
 </tr>
 <tr>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>32</p>
  </td>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>(E3 + E2 - E4 - E6 + E14 - E12 - E11 + E8 + E7 + E15)</p>
  </td>
  <td valign=top>
  <SCRIPT>comment(1)</SCRIPT><p>R3 &times; R10 &times; R5 &times; R11 &times; R8</p>
  </td>
 </tr>
</table>

<SCRIPT>comment(1)</SCRIPT><p>The analysis of the obtained expressions shows:</p>

<ol start=1 type=1>
 <li>every sum of emfs is the emf of the well-defined chemical/electrochemical 
 process. <span style="font-size: 12.0pt; font-family: Times New Roman">
 According to the principle of currents superposition, and the determination of 
 the K1i/K, every factor K1i is the numerator of the equivalent conductivity of 
 all subcircuits, connected with this closed j-subcircuit (subcircuit describing 
 this chemical/electrochemical process).</span> The values of K1i/K can be obtained as
     results of the solution of corresponding combined equations. However, some
     of factors K1i can be quickly calculated according to the following
     simplest rules, which were obtained by the paper author:</li>
 <ol start=1 type=a>
  <li>if the subcircuit (which describes the completed
      electrochemical/chemical process) by-passes (when we go round this
      subcircuit) the single resistances of the circuit (that are not connected
      with each other), then the factor K of the emf of this process is equal
      to the product of these resistances. If the factor of the emf (E3 + E2 -
      E4 - E6 + E14 - E12 - E11 + E8 + E7 + E15) is equal to R3 &times; R10
      &times; R5 &times; R11 &times; R8 then this subcircuit by-passes single
      resistances R3, R10, R5, R11 and R8;</li>
  <li>if the subcircuit (which describes the completed
      electrochemical/chemical process), by-passes (when we go round this
      subcircuit) one complex combination of resistances (e.g. a star
      connection of resistances), then the factor K of the emf of this process
      contains a function of these resistances as a subfactor. For example, the
      sum (R1 &times; R10 + R1 &times; R2 + R2 &times; R10), contained in the
      factor K1i of the emf (-E1 - E4 - E6 + E14 + E10 - E8 - E9 + E15),
      corresponds to the star connection of resistances R1-R2-R10 that were
      by-passed by the subcircuit (-E1 - E4 - E6 + E14 + E10 - E8 - E9 + E15);</li>
 </ol>
 <li>the value of the K1i (and every resistance contained in
     the K1i) shows the influence of the value of the emf of the given process
     (that corresponds to the K1i) on the value of a current which is the
     function of this emf The value of every resistance (or group of
     resistances), contained in the K1i, can increase (or decrease) the
     influence of the emf of the given chemical/electrochemical process on the
     value of the current which is the function of this emf. For example, the
     growth of the cation&nbsp;resistance
     of the film, on the anode, R1 increases the influence of the emfs of the
     processes (whose factors K1i/K contain R1) on the current J6. These
     processes are accompanied by the reduction of the oxidant on the surface
     of the anode film. Thus, the processes of the reduction of an oxidant will
     predominate over the processes of the oxidation of a metal, on the anode.
     The other consequence of these processes is the growth of the electrode
     potential of the anode. </li>
</ol>

<SCRIPT>comment(1)</SCRIPT><p><b>Note</b>: It is necessary to take into consideration that
the sign of the same emf of the process can vary in the equations of the
different currents. The sign of every emf, included in the emf of the process,
is positive if the vector of this emf has the same direction as the
path-tracing direction of this subcircuit. For example, the currents J1 and J2
have opposite signs of the sum of emfs (E2 - E4 - E5 - E6). The direction of
the vector of the emf E2 is the same as the direction of the current J1. So,
the current J1 is the function of the emf (E2 - E4 - E5 - E6). Moreover, the
value E2 is positive in the emfs (contained in the current J1), which contain
the value E2. In the case with a current J2 the situation is opposite;</p>

<SCRIPT>comment(1)</SCRIPT><h4>The working current (or the measured current) of a galvanic element
(J6).</h4>

<SCRIPT>comment(1)</SCRIPT><p>It was found, that the current J6 depends on the overall
emfs of the subcircuits (chemical/electrochemical processes), that can run down
on the external resistance R13 (the subcircuits containing the resistance R13):</p>

<SCRIPT>comment(1)</SCRIPT><p align="center"><sub>
<img border=0
src="http://www.jcse.org/volume3/paper22/v3p22_files/image004.gif" alt="J subscript 6 is equal to 1 divided by K times the sum for i=1 to 32 of (K1i times the (sum for j=1 to m of (Ej)))" align="middle" width="153" height="48"></sub>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
(2)</p>

<SCRIPT>comment(1)</SCRIPT>
<blockquote>
  <p>where sum(for j=1 to m of (Ej)) is the sum of the values of
the emfs -Ej, which describes a closed j-subcircuit (subcircuit of the
chemical/electrochemical process), which contains resistance R13 (or emf E15).</p>

</blockquote>

<SCRIPT>comment(1)</SCRIPT><p>The signs of the aforesaid sums must guarantee the positive
sign of the vector of E15.</p>

<SCRIPT>comment(1)</SCRIPT><p>It is important to draw your attention to the fact that, the
directions of both the current and emf (of the galvanic element) can be
reversed when there is a certain ratio of the circuit resistances, but the emfs
values are constant. An outside observer can interpret it as a polarity
reversal of the galvanic element (the change of the sign of the electrode
potential). This phenomenon can be observed in practice and this circuit shows
the possibility of its existence.</p>

<SCRIPT>comment(1)</SCRIPT><h4>The emf of a galvanic element (emfel).</h4>

<SCRIPT>comment(1)</SCRIPT><p>On the basis of the expression for the working current of a
galvanic element it is easy to determine the expression for the emf of the
element. </p>

<SCRIPT>comment(1)</SCRIPT><p>In practice the emf of a power source is determined with the
help of the opposition method when an external opposite polarization, that
stops the current (flowing in the external circuit), is connected to the
sockets of the electrodes of the battery. This polarization value is equal to
the emf of the power source, but its direction is opposite to the emf of the
power source. Therefore, for the determination of the emf of a chemical power
source it is necessary to determine such polarization (E15) when the discharge
current of the battery J6 is equal to 0. So, it is necessary to determine such
E15 value when the numerator of J6 is equal to 0. It was found, that the emf
(emfel) of the galvanic element (the potential of the single electrode) is
equal to:</p>

<SCRIPT>comment(1)</SCRIPT><p align="center"><sub>
<img border=0
src="http://www.jcse.org/volume3/paper22/v3p22_files/image005.gif" alt="the emf of this element is equal to the (sum for i=1 to 32 of (the product of K1i &times; (E15 - sum for j=1 to m of (Ej)))) divided by Kemf" align="middle" width="279" height="48"></sub>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
(3)</p>

<SCRIPT>comment(1)</SCRIPT>

<SCRIPT>comment(1)</SCRIPT><p>The equation for Kemf is given in  Appendix 1. </p>

<SCRIPT>comment(1)</SCRIPT><p>The value (E15 - sum (for j=1 to m of (Ej))) is similar to
the sum (for j=1 to m of (Ej)), in the equation (2), but these sums differ by
the sign and the final sum in the equation (3) doesn't contain the value of E15</p>

<SCRIPT>comment(1)</SCRIPT><p>Since the equation (3) contains the subcircuits, which can
run down on the external resistance R13 only, it is obvious, that:</p>

<ol start=1 type=1>
 <li>The value of the emfel doesnt depend on the resistance of
     the measuring instrument (R13) as well as the value of the external
     polarization (E15) (see equation 3.). It is correct, because this value
     (emfel) is the function of the nature of the components of this system,
     but not the characteristics of a measurement system. </li>
 <li>This expression for the emfel (the electrode potential)
     notably differ from the well-known expression for the emf of a galvanic
     element (the electrode potential), where the emf of only one reaction,
     which generates the current, was included. The role of other reactions,
     which generate the current, has not been taken into account before. Now it
     is possible to say with confidence, that the emf of a galvanic element
     (the electrode potential) is a function of all possible chemical
     (electrochemical) processes which can run down on an external resistance. </li>
 <li>Every item of the emfel is equal to the sum of the
     difference of the potentials of the anode and cathode reactions of the
     fixed process + the potential of the ion-ion interaction (in the solution)
     of this process. This fact is observed, because the emf of the galvanic
     element is equal to the change of the Gibbs free energy of a chemical
     process divided by the nF value. Thus, the emf of a galvanic element (the
     electrode potential) is not equal to the ordinary difference of the
     electrode potentials of the anode and cathode (the difference of the
     electrode potentials of the working electrode and reference electrode). It
     is the well-known fact for every electrochemist and it often used in the
     course of the calculation of the emf of galvanic elements. Unfortunately,
     most electrochemists use the ordinary difference of the electrode
     potentials of the anode and cathode (the difference of the electrode
     potentials of the working electrode and reference electrode) instead of
     the real value of the emf (the electrode potential) and, so, ignore this
     fact very often. Such operation may be justified if the change of the
     Gibbs free energy of the ion-ion (and other) interaction, in the solution,
     is small; otherwise it is necessary to take this fact into account. Now we
     can see, that the using of this fact can be useful for the determination
     of the contributions of the different ion-ion (and other) processes to the
     emf of the galvanic element (the electrode potential) in the course of the
     measurements of the emf (electrode potential). </li>
 <li>the potential of any is electrode (the emf of a galvanic
     element) depends on:</li>
 <ol start=1 type=a>
  <li>the predominant resistance (cationic or anionic) of films
      and interface boundaries on the anode (R1 and R3) and on the cathode (R7
      and R8);</li>
  <li><strong style="font-weight: 400">the sum value of the migration resistances of cations
      and anions on the film surface on the anode (R2) and cathode (R6);</strong></li>
  <li>the predominant resistance of the transfer of the
      molecules of the solvent to the place where cation goes out on the
      film/solution phase boundary (R10) or anion is formed (R9) for the anode
      (R11 or R12 correspondingly for the cathode);</li>
  <li><strong style="font-weight: 400">the sum value of the migration resistances of
      solvated cations and anions (which were obtained on the same electrode)
      from the places where they form to the places, in the solution, where
      they interact (R14 for the anode and R15 for the cathode);</strong></li>
  <li><strong style="font-weight: 400">the sum value of the migration resistances of
      solvated cations and anions (which were obtained on the different
      electrodes) from the places where they form to the places, in the
      solution, where they interact (R4 or R5);</strong></li>
  <li><strong style="font-weight: 400">the values of the ratio of emfs (Ei) between each
      other;</strong></li>
 </ol>
 <li>the expression numerator for the electrode potential (the
     emf of a galvanic element) is practically similar to the expression of the
     numerator of the current J6. The difference between these values lies in
     the fact, that they can have opposite signs and the value E15 is certainly
     absent in the expression for the emf. This applies to all expressions for
     the emfs of this model. </li>
</ol>

<SCRIPT>comment(1)</SCRIPT><p>The currents flowing through the system containing
2 similar electrodes (made out of the anode material - J6Ria and the cathode
material - J6Ric) and an electrolyte (which contains an oxidant). &nbsp;The process of the DC
measurement of the electrolyte resistance.</p>

<p>J6Ria={2 &times; E15 &times; [[(R1 &times; R10 + R1 &times;
R2 + R2 &times; R10) + (R2 &times; R9 + R3 &times; R2 + R3 &times; R9) + (R1
&times; R9 + R3 &times; R10)] &times; [[(R1 &times; R10 + R1 &times; R2 + R2
&times; R10) + (R2 &times; R9 + R3 &times; R2 + R3 &times; R9) + (R1 &times; R9
+ R3 &times; R10)] &times; (R4 + R14) + R14 &times; (R1 + R2 + R3) &times; (2
&times; R4 + R14)] + R4 &times; (R1 &times; R14 + R2 &times; R14 + R3 &times;
R14) &times; (R1 &times; R14 + R2 &times; R14 + R3 &times; R14)]/[KJ6Ria] } <b>equation (4)</b></p>

<SCRIPT>comment(1)</SCRIPT><p>The equation for KJ6Ria is given in Appendix 1.</p>

<SCRIPT>comment(1)</SCRIPT><p>J6Ric={2 &times; E15 &times; (((R6 &times; R11 + R6 &times;
R7 + R7 &times; R11) + (R6 &times; R12 + R6 &times; R8 + R8 &times; R12) + (R7
&times; R12 + R8 &times; R11)) &times; (((R6 &times; R11 + R6 &times; R7 + R7
&times; R11) + (R6 &times; R12 + R6 &times; R8 + R8 &times; R12) + (R7 &times;
R12 + R8 &times; R11)) &times; (R5 + R15) + R15 &times; (R6 + R7 + R8) &times;
(2 &times; R5 + R15)) + R5 &times; (R8 &times; R15 + R6 &times; R15 + R7 &times;
R15) &times; (R8 &times; R15 + R6 &times; R15 + R7 &times; R15))/[ KJ6Ric]} <b>equation (5)</b></p>

<SCRIPT>comment(1)</SCRIPT><p>The equation for KJ6Ric is given in Appendix 1.</p>

<SCRIPT>comment(1)</SCRIPT><p>The J6Ria current corresponds to the case, when E1=E7,
E3=E9, E2=E8, E4=E10, E5=E11, E6=E12, E14=E13, R1=R8, R3=R7, R2=R6, R9=R11,
R10=R12, R4=R5, R15=R14. The J6Ric current corresponds to the case, when E1=E7,
E3=E9, E2=E8, E4=E10, E5=E11, E6=E12, E14=E13, R1=R8, R3=R7, R2=R6, R9=R11,
R10=R12, R5=R4, R14=R15. The result that was obtained shows that these currents
do not depend on any process in the system. They depend, only, on the
equivalent resistances of the obtained system of electrodes. The values of
these currents can be used for the calculation of the parameters of an electric
circuit.</p>

<SCRIPT>comment(1)</SCRIPT><h4>The internal resistance of a galvanic element (Rint).</h4>

<SCRIPT>comment(1)</SCRIPT><p>The expression for the internal resistance of a galvanic
element, which is described by means of the aforesaid model, can be obtained on
the basis of the expressions of a working current value (J6), the emf of a
galvanic element (emfel) and Ohm's law for the complete circuit:</p>

<SCRIPT>comment(1)</SCRIPT><p align="center"><sub>
<img border=0
src="http://www.jcse.org/volume3/paper22/v3p22_files/image006.gif" align="middle" width="209" height="47"></sub>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
(6)</p>

<SCRIPT>comment(1)</SCRIPT><p>Rint={[(R6 &times; R11 + R6 &times; R7 + R7 &times; R11) +
(R6 &times; R12 + R6 &times; R8 + R8 &times; R12) + (R7 &times; R12 + R8
&times; R11) + R15 &times; (R6 + R7 + R8)] &times; [R4 &times; R5 &times; [(R1
&times; R10 + R1 &times; R2 + R2 &times; R10) + (R2 &times; R9 + R3 &times; R2
+ R3 &times; R9) + (R1 &times; R9 + R3 &times; R10) + R14 &times; (R1 + R2 +
R3)]] + R14 &times; R15 &times; [(R6 &times; R12 + R6 &times; R8 + R8 &times;
R12) + R7 &times; R12] &times; [(R1 &times; R10 + R1 &times; R2 + R2 &times;
R10) + R3 &times; R10] + R14 &times; R15 &times; [(R6 &times; R11 + R6 &times;
R7 + R7 &times; R11) + R8 &times; R11] &times; [(R2 &times; R9 + R3 &times; R2
+ R3 &times; R9) + R1 &times; R9] + [(R6 &times; R11 + R6 &times; R7 + R7
&times; R11) + (R6 &times; R12 + R6 &times; R8 + R8 &times; R12) + (R7 &times;
R12 + R8 &times; R11) + R15 &times; (R6 + R7 + R8)] &times; [[(R4 &times; R10 +
R4 &times; R14 + R10 &times; R14) + R5 &times; R10] &times; [(R2 &times; R9 +
R3 &times; R2 + R3 &times; R9) + R1 &times; (R3 + R9)] + R1 &times; (R4 + R5 +
R14) &times; (R2 &times; R9 + R3 &times; R2 + R3 &times; R9) + R5 &times; R14
&times; [(R1 &times; R10 + R1 &times; R2 + R2 &times; R10) + R3 &times; (R1 +
R10)&nbsp;]] + [(R1 &times; R10 +
R1 &times; R2 + R2 &times; R10) + (R2 &times; R9 + R3 &times; R2 + R3 &times;
R9) + (R1 &times; R9 + R3 &times; R10) + R14 &times; (R1 + R2 + R3)] &times;
[[(R4 &times; R11 + R4 &times; R15 + R15 &times; R11) + R5 &times; R11] &times;
[(R6 &times; R12 + R6 &times; R8 + R8 &times; R12) + R7 &times; (R8 + R12)] +
R7 &times; (R4 + R5 + R15) &times; (R6 &times; R12 + R6 &times; R8 + R8 &times;
R12) + R5 &times; R15 &times; [(R6 &times; R11 + R6 &times; R7 + R7 &times;
R11) + R8 &times; (R7 + R11)]] + [(R6 &times; R11 + R6 &times; R7 + R7 &times;
R11) + (R6 &times; R12 + R6 &times; R8 + R8 &times; R12) + (R7 &times; R12 + R8
&times; R11)] &times; R15 &times; [R1 &times; [(R2 &times; R9 + R3 &times; R2 +
R3 &times; R9) + R3 &times; (R10 + R14)] + R10 &times; [(R2 &times; R9 + R3
&times; R2 + R3 &times; R9) + R1 &times; R9]] + [(R1 &times; R10 + R1 &times;
R2 + R2 &times; R10) + (R2 &times; R9 + R3 &times; R2 + R3 &times; R9) + (R1
&times; R9 + R3 &times; R10)] &times; R14 &times; [R7 &times; [(R6 &times; R12
+ R6 &times; R8 + R8 &times; R12) + R8 &times; (R11 + R15)] + R11 &times; [(R6
&times; R12 + R6 &times; R8 + R8 &times; R12) + R7 &times; R12]]}/{(R4 + R5)
&times; [[(R1 &times; R10 + R1 &times; R2 + R2 &times; R10) + (R2 &times; R9 +
R3 &times; R2 + R3 &times; R9) + (R1 &times; R9 + R3 &times; R10) + R14 &times;
(R1 + R2 + R3)] &times; [[(R6 &times; R11 + R6 &times; R7 + R7 &times; R11) +
(R6 &times; R12 + R6 &times; R8 + R8 &times; R12) + (R7 &times; R12 + R8
&times; R11) + R15 &times; (R6 + R7 + R8)]]] + R14 &times; [(R1 &times; R10 +
R1 &times; R2 + R2 &times; R10) + (R2 &times; R9 + R3 &times; R2 + R3 &times;
R9) + (R1 &times; R9 + R3 &times; R10)] &times; [[(R6 &times; R11 + R6 &times;
R7 + R7 &times; R11) + (R6 &times; R12 + R6 &times; R8 + R8 &times; R12) + (R7
&times; R12 + R8 &times; R11) + R15 &times; (R6 + R7 + R8)]] + R15 &times; [(R1
&times; R10 + R1 &times; R2 + R2 &times; R10) + (R2 &times; R9 + R3 &times; R2
+ R3 &times; R9) + (R1 &times; R9 + R3 &times; R10) + R14 &times; (R1 + R2 +
R3)] &times; [[(R6 &times; R11 + R6 &times; R7 + R7 &times; R11) + (R6 &times;
R12 + R6 &times; R8 + R8 &times; R12) + (R7 &times; R12 + R8 &times;
R11)]]}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>equation (7)</b></p>

<SCRIPT>comment(1)</SCRIPT><p>One can say with confidence, that this expression is the
internal resistance of the galvanic couple, with potential <i>emfel</i>, such that the 
current through the resistance in the external circuit (R13 or Rext) is given by 
(<i>emfel </i>+ E15)/(Rint + R13). </p>

<SCRIPT>comment(1)</SCRIPT><h4>The currents of the formation of insoluble corrosion products on
the anode (J1) and cathode (J3).</h4>

<SCRIPT>comment(1)</SCRIPT><p>The expressions for corrosion currents J1 (for anode) and J3
(for cathode) are symmetrical (they are mirror images for each other), because
this circuit is symmetrical:</p>

<SCRIPT>comment(1)</SCRIPT><p align="center"><sub>
<img border=0
src="http://www.jcse.org/volume3/paper22/v3p22_files/image007.gif" alt="J1 is equal to 1 divided by K times the sum for i=1 to 21 of (K1i times the sum for j=1 to m of (Ej))" align="middle" width="153" height="48"></sub>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
(8)</p>

<SCRIPT>comment(1)</SCRIPT><p><strong style="font-weight: 400">where</strong> the sum for j=1 to m of (Ej) is equal
to the emf of the process, contained in the Table 2, which includes the value
of E2.</p>

<SCRIPT>comment(1)</SCRIPT><p align="center"><strong>&nbsp;</strong><sub><img
border=0
src="http://www.jcse.org/volume3/paper22/v3p22_files/image008.gif" ALT="J3 is equal to 1 divided by K times the sum for i=1
to 21 of (K1i times the sum for j=1 to m of (Ej))" align="middle" width="153" height="48"></span></sub><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </b>&nbsp;(9)</p>

<SCRIPT>comment(1)</SCRIPT><p>where the sum for j=1 to m of (Ej) is equal to the emf of
the process, contained in the Table 2, which includes the value of E8. </p>

<SCRIPT>comment(1)</SCRIPT><p>The signs of the aforesaid sums must guarantee the positive sign
of the vectors of E2 (in the case of J1) and E8 (in the case of J3).</p>

<SCRIPT>comment(1)</SCRIPT><p>The equations (8 and 9) show that the currents J1 and J3
depend on the emfs of the processes which run down on the resistance R13 (and
do not run down on the resistance R13). So, we can say, that:</p>

<p>1.&nbsp;&nbsp;&nbsp;&nbsp; the currents J1 and J3 are sums of the following currents:</p>

<SCRIPT>comment(1)</SCRIPT><p>1.1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
currents that do not depend on the external polarization (E15):</p>

<SCRIPT>comment(1)</SCRIPT><p>1.1.1.&nbsp; currents
which depend on the emf of the processes of the formation of the films of
corrosion products &nbsp;(E1 + E2 + E3) (for the current J1) and (E7 + E8 + E9)
(for the current J3);</p>

<SCRIPT>comment(1)</SCRIPT><p>1.1.2.&nbsp; currents
which depend on the emf of processes of the crystallization (from the solution)
of the soluble corrosion products on the film surface (E2 - E4 - E5 - E6) (for
the current J1) and (E8 - E10 - E11 - E12) (for the current J3);</p>

<SCRIPT>comment(1)</SCRIPT><p>1.1.3.&nbsp; the
electric currents depending on the processes whose emfs are equal to (E2 - E4 -
E5 - E14 - E13 + E12) (for the current J1) and (E6 - E13 - E14 - E10 - E11 +
E8) (for the current J3). These processes include the following stages:&nbsp;</p>

<SCRIPT>comment(1)</SCRIPT><p>1.1.3.1.&nbsp;&nbsp;&nbsp;&nbsp; the
compounds c1sa2s and c2sa1s dissociate in the solution;</p>

<SCRIPT>comment(1)</SCRIPT><p>1.1.3.2.&nbsp;&nbsp;&nbsp;&nbsp; in
the case of the current J1, the formed ions c2s and a2s form the compound
c2sa2s in the solution. In the case of the current J3, the formed ions c1s and
a1s form the compound c1sa1s in the solution.;</p>

<SCRIPT>comment(1)</SCRIPT><p>1.1.3.3.&nbsp; In the case of
the current J1, the formed ions c1s and a1s decompose with the formation of the
ions c1 and a1 and the molecules of the solvent. In the case of the current J3,
the formed ions c2s and a2s decompose with the formation of the ions c2 and a2
and the molecules of the solvent. We call this process desolvation (to
desolvate). So I shall use this term below.</p>

<SCRIPT>comment(1)</SCRIPT><p>1.1.3.4.&nbsp; in the case of
the current J1, the corrosion product film grows on the anode. In the case of
the current J3, the corrosion product film grows on the cathode.</p>

<SCRIPT>comment(1)</SCRIPT><p>1.1.4.&nbsp; the
electric current depending on the process whose emf are equal to (E2 - E4 - E5
- E13 - E14 - E10 - E11 + E8) (for the current J1and current J3). This process
includes the following stages:</p>

<SCRIPT>comment(1)</SCRIPT><p>1.1.4.1.&nbsp;&nbsp;&nbsp;&nbsp; the
corrosion product films located on the cathode and anode dissociate in the
solution. The ions c2s, a2s, c1s and a1s are formed at this stage;</p>

<SCRIPT>comment(1)</SCRIPT><p>1.1.4.2.&nbsp;&nbsp;&nbsp;&nbsp; the
ions c2s and a2s (c1s and a1s) interact in the solution. The ion pairs c2sa2s
and c1sa1s are formed at this stage;</p>

<SCRIPT>comment(1)</SCRIPT><p>1.1.5.&nbsp; the
electric currents depending on the processes whose emfs are equal to (E2 - E4 -
E5 - E13 - E14 - E10 - E11 - E7 - E9) (for the current J1) and (-E1 - E3 - E4 -
E5 - E13 - E14 - E10 - E11 + E8) (for the current J3). These processes include
the following stages:</p>

<SCRIPT>comment(1)</SCRIPT><p>1.1.5.1.&nbsp;&nbsp;&nbsp;&nbsp; the
compounds c1sa2s and c2sa1s dissociate in the solution. The ions c1s, a1s, c2s
and a2s are formed at this stage;</p>

<SCRIPT>comment(1)</SCRIPT><p>1.1.5.2.&nbsp;&nbsp;&nbsp;&nbsp; in
the case of the current J1, formed ions c2s and a2s are desolvated then. In the
case of the current J3, the formed ions c1s and a1s are desolvated then;</p>

<SCRIPT>comment(1)</SCRIPT><p>1.1.5.3.&nbsp;&nbsp;&nbsp;&nbsp; in
the case of the current J1, the desolvated ion c2 transferring through the film
on the cathode surface is reduced then on the cathode; the desolvated ion a2 is
oxidized on the film on the cathode surface. In the case of the current J3, the
desolvated ion c1 transferred through the film on the anode surface is reduced
then on the anode; the desolvated ion a1 is oxidized on the film on the anode
surface;</p>

<SCRIPT>comment(1)</SCRIPT><p>1.1.5.4.&nbsp;&nbsp;&nbsp;&nbsp; in
the case of the current J1 (J3), the solvated ions c1s and a1s (c2s and a2s)
are desolvated then on the surface of the film on the anode (cathode);</p>

<SCRIPT>comment(1)</SCRIPT><p>1.1.5.5.&nbsp;&nbsp;&nbsp;&nbsp; the
corrosion product film c1a1 (c2a2) grows on the anode (cathode);</p>

<SCRIPT>comment(1)</SCRIPT><p>1.2.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
the sum of currents, which depend on the external polarization (E15);</p>

<SCRIPT>comment(1)</SCRIPT><p>2.&nbsp;&nbsp;&nbsp;&nbsp; in
the case of the anode, it is clear, that when the sum of the resistances of the
transfer of the molecules of the solvent to the place where a cation goes out
on the film/solution phase boundary (and an anion is formed) (R9 + R10) is
greater, than the sum value of the migration resistances of cations and anions
on the film surface on the anode (R2), then the formation of the insoluble
corrosion products film on the anode takes place. In a similar manner, when the
sum of the resistances of the transfer of the molecules of the solvent to the
place where cation goes out on the film/solution phase boundary (and anion is
formed) (R11 + R12) is greater than the sum value of the migration resistances
of cations and anions on the film surface on the cathode (R6), then the
formation of the insoluble corrosion products film takes place on the cathode;</p>

<SCRIPT>comment(1)</SCRIPT><p>3.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; the value of the
current J1 (J3) depends on the currents (which depend on the external
polarization), which flow through the branch of the circuit 1-2 (7-8) and that
are accompanied by the formation of the film of products of corrosion on the
anode (cathode) (it is a result of either corrosion or the solution
crystallization).</p>

<SCRIPT>comment(1)</SCRIPT><p><strong>4.</strong><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong>the
current J1 equal to 0 (J3 is equal to 0) when E15 have certain value (see
below).</p>

<h4>The values of an external polarization
(E15) when the current J1 (or J3) of the formation of insoluble products of
corrosion for the anode (cathode) is equal to 0.</h4>

<SCRIPT>comment(1)</SCRIPT><p>The expressions of the values of these emfs are symmetrical
(they are mirror images for each other), because this circuit is symmetrical.
The expressions of these values (E15J1=0 for the anode) and (E15J3=0 for the
cathode) are illustrated below<strong>:</strong></p>

<SCRIPT>comment(1)</SCRIPT><p align="center"><sub>
<img border=0
src="http://www.jcse.org/volume3/paper22/v3p22_files/image009.gif" alt="if E15 equal to one divided by Ke1 times the sum for i=1 to 21 of (K1i times (E15 - the sum for j=1 to m of (Ej))) then the current J1 is equal to 0. Let call the value of E15 as E15J1" align="middle" width="255" height="48"></sub>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;(10)</p>

<SCRIPT>comment(1)</SCRIPT><p align="center"><sub>
<img border=0
src="http://www.jcse.org/volume3/paper22/v3p22_files/image010.gif" alt="if E15 equal to one divided by Ke3 times the sum for i=1 to 21 of (K1i times (E15 - the sum for j=1 to m of (Ej))) then the current J3 is equal to 0. Let call the value of E15 as E15J3" align="middle" width="256" height="48"></sub>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
(11)</p>

<blockquote>
  <p align="left"><strong style="font-weight: 400">where the </strong>sum for j=1 to m of (Ej) - the
sum of the items of the emfel, whose emfs (emfi) of processes include values of
E2 or E8. The signs of the aforesaid sums must guarantee the negative sign of
the vectors of E2 (in the case of E15J1) and E8 (in the case of E15J3).</p>

</blockquote>

<SCRIPT>comment(1)</SCRIPT><p>The equations for Ke1 and Ke3 are given in Appendix 1.</p>

<SCRIPT>comment(1)</SCRIPT><p>These results represent the values of the external
polarization when corrosion currents (that determine the growth of the films of
corrosion products) of the anode and cathode are equal to 0. These values are
one of the conditions of the protection against corrosion for the anode and
cathode. The expressions, obtained, can be useful for the determination of the
condition of the cathodic and anodic protection of metals against corrosion. </p>

<SCRIPT>comment(1)</SCRIPT><p>The currents (J2 and J4), which form the anode's (cathode's)
soluble corrosion products in the solution.</p>

<SCRIPT>comment(1)</SCRIPT><p><strong style="font-weight: 400">The expressions for corrosion currents J2 (for anode) and
J4 (for cathode) are symmetrical (they are mirror images for each other),
because this circuit is symmetrical. &nbsp;</strong></p>

<SCRIPT>comment(1)</SCRIPT><p align="center"><sub>
<img border=0
src="http://www.jcse.org/volume3/paper22/v3p22_files/image011.gif" alt="J2 is equal to one divided by K times the sum for i=1 to 21 of (K1i times the sum for j=1 to m of (Ej))" align="middle" width="156" height="48"></sub>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
(12)</p>

<SCRIPT>comment(1)</SCRIPT><p><strong style="font-weight: 400">where</strong> the sum for j=1 to m of (Ej) is equal
to the emf of the process, contained in the Table 2, which includes the value
of E6.</p>

<SCRIPT>comment(1)</SCRIPT><p align="center"><sub>
<img border=0
src="http://www.jcse.org/volume3/paper22/v3p22_files/image012.gif" alt="J4 is equal to one divided by K times the sum for i=1 to 21 of (K1i times the sum for j=1 to m of (Ej))" align="middle" width="156" height="48"></sub><strong>&nbsp;&nbsp;&nbsp;&nbsp; </strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;(13)</p>

<SCRIPT>comment(1)</SCRIPT><p>where the sum for j=1 to m of (Ej) is equal to the emf of
the process, contained in the Table 2, which includes the value of E12. </p>

<SCRIPT>comment(1)</SCRIPT><p>The signs of the aforesaid sums must guarantee the positive
sign of the vectors of E8 (in the case of J3) and E12 (in the case of J4). 
<strong style="font-weight: 400">The results
obtained show that:</strong></p>

1.&nbsp;&nbsp;&nbsp; the soluble products of corrosion of the anode (cathode)
     form due to the currents:<SCRIPT>comment(1)</SCRIPT><p>
<strong style="font-weight: 400">1.1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; which do not depend on the external polarization (E15):</strong></p>

<SCRIPT>comment(1)</SCRIPT><p>1.1.1.&nbsp; the
currents, which depend on the corrosion processes on the anode (whose emf is
equal to (E1 + E3 + E4 + E5 + E6)) and cathode (whose emf is equal to (E7 + E9
+ E10 + E11 + E12));</p>

<SCRIPT>comment(1)</SCRIPT><p>1.1.2.&nbsp; the currents,
which depend on the processes of the physical dilution of the corrosion
products of the anode (cathode) in the solution (whose values of emf are equal
to (-E2 + E4 + E5 + E6) and (-E8 + E10 + E11 + E12));</p>

<SCRIPT>comment(1)</SCRIPT><p>1.1.3.&nbsp; the
currents, which depend on the processes of the exchange of ions in the solution
whose emf is equal to (E6 + E12 - E13 - E14);</p>

<SCRIPT>comment(1)</SCRIPT><p>1.1.4.&nbsp; the
electric currents depending on the processes whose emfs are equal to (E6 - E14
- E13 - E10 - E11 + E8) (for the current J2) and (E2 - E4 - E5 - E13 - E14 +
E12) (for the current J4). These processes include the following stages:</p>

<SCRIPT>comment(1)</SCRIPT><p>1.1.4.1.&nbsp;&nbsp;&nbsp;the compounds c1sa2s and c2sa1s dissociate in the solution;</p>

<SCRIPT>comment(1)</SCRIPT><p>1.1.4.2.&nbsp;&nbsp;&nbsp;in the case of the current J2, the formed ions c1s and a1s form a
compound c1sa1s in the solution. In the case of the current J4, the formed ions
c2s and a2s form a compound c2sa2s in the solution.;</p>

<SCRIPT>comment(1)</SCRIPT><p>1.1.4.3.&nbsp;&nbsp;&nbsp;in the case of the current J2, the formed ions c2s and a2s desolvate. In
the case of the current J4, the formed ions c1s and a1s desolvate.</p>

<SCRIPT>comment(1)</SCRIPT><p>1.1.4.4.&nbsp;&nbsp;&nbsp;in the case of the current J2, the corrosion product film grows on the
cathode. In the case of the current J4, the corrosion product film grows on the
anode.</p>

<SCRIPT>comment(1)</SCRIPT><p>1.1.5.&nbsp; the
electric currents depending on the processes whose emfs are equal to (E6 - E14
- E13 - E10 - E11 - E7 - E9) (for the current J2) and (-E1 - E3 - E4 - E5 - E13
- E14 + E12) (for the current J4). These processes include the following
stages:</p>

<SCRIPT>comment(1)</SCRIPT><p>1.1.5.1.&nbsp;&nbsp;&nbsp;the compounds c1sa2s and c2sa1s dissociate in the solution;</p>

<SCRIPT>comment(1)</SCRIPT><p>1.1.5.2.&nbsp;&nbsp;&nbsp;in the case of the current J2, formed ions c2s and a2s are desolvated
then on the surface of the film on the cathode. In the case of the current J4,
formed ions c1s and a1s are desolvated then on the surface of the film on the
anode;</p>

<SCRIPT>comment(1)</SCRIPT><p>1.1.5.3.&nbsp;&nbsp;&nbsp;in the case of the current J2, the desolvated ion c2 transferred through
the film on the cathode surface is reduced then on the cathode; the desolvated
ion a2 is oxidized on the film on the cathode surface. In the case of the
current J4, the desolvated ion c1 transferring through the film on the anode
surface is reduced then on the anode; the desolvated ion a1 is oxidized on the
film on the anode surface; </p>

<SCRIPT>comment(1)</SCRIPT><p>1.1.5.4.&nbsp;&nbsp;&nbsp;in the case of the current J2, the compound c1sa1s forms in the
solution. In the case of the current J4, the compound c2sa2s forms in the
solution;</p>

<SCRIPT>comment(1)</SCRIPT><p>1.2.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
the current, which depends on the external polarization (E15);</p>

2.&nbsp;&nbsp;&nbsp; in the case of the anode, when the sum of the resistances
     of the transfer of the molecules of the solvent to the place where the
     cation goes out on the film/solution phase boundary (and the anion is
     formed) (R9 + R10) + the resistance of the migration of the ions c1s and
     a1s in the solution (R14) is smaller, than the sum value of the migration
     resistances of cations (c1) and anions (a1) on the film surface on the
     anode (R2) + the sum value of the migration resistances of cations (c1s)
     and anions (a1s) in the solution (R4 + R5), then the formation of the
     soluble corrosion product (c1sa1s) of the anode takes place in the
     solution. In the similar manner, in the case of the cathode, when a sum of
     the resistances of the transfer of the molecules of the solvent to the
     place where a cation goes out on the film/solution phase boundary (and an
     anion is formed) (R11 + R12) + the resistance of the migration of the ions
     c2s and a2s in the solution (R15) is smaller, than the sum value of the
     migration resistances of cations (c2) and anions (a2) on the film surface
     on the cathode (R6) + the sum value of the migration resistances of
     cations (c2s) and anions (a2s) in the solution (R4 + R5), then the
     formation of the soluble corrosion product (c2sa2s) of the cathode takes
     place in the solution.<p>3.&nbsp; only the currents that depend on the external polarization
     and which flow through subcircuits 3-4 or 5-6 exert influence on the
     currents J2 and J4. These currents are accompanied by the formation of
     soluble products of corrosion of the anode (cathode) &nbsp;(this process
     take place due to corrosion or due to physical dilution of the film on the
     anode (cathode) or due to the process of the ion exchange in the
     solution);</p>
4.&nbsp; the similar item, but with the opposite sign, is included
     in the value of the currents J1 and J2 (J3 and J4). This item is the
     current of the crystallization of the film from the solution or the
     current of the physical dilution of the film in the solution. This value,
     for the anode, is proportional to the value (E2 - E4 - E5 - E6) for the
     current of the crystallization of the film from the solution and this
     value is proportional to the value (-E2 + E4 + E5 + E6) for the current of
     the physical dilution of the film in the solution. This value, for the
     cathode, is proportional to the value (-E8 + E10 + E11 + E12) for the
     current of the crystallization of the film from the solution and this
     value is proportional to the value (E8 - E10 - E11 - E12) for the current
     of the physical dilution of the film in the solution;<p>5.&nbsp; the current J2 equal to 0 (J4 is equal to 0) when E15 have
     a certain value (see below).</p>

<SCRIPT>comment(1)</SCRIPT><p>The values of an external polarization emfs when J2 is equal to 0
(E<sub>15J2=0</sub>) and J4 is equal to 0 (E<sub>15J4=0</sub>).</p>

<SCRIPT>comment(1)</SCRIPT><p>The expressions of these values are 
<strong style="font-weight: 400">mirror images for
each other, because this circuit is symmetrical.</strong></p>

<SCRIPT>comment(1)</SCRIPT><p align="center"><sub>
<img border=0
src="http://www.jcse.org/volume3/paper22/v3p22_files/image013.gif" alt="if E15 equal to one divided by Ke2 times the sum for i=1 to 21 of (K1i times (E15 - the sum for j=1 to m of (Ej))) then the current J2 is equal to 0. Let call the value of E15 as E15J2" align="middle" width="261" height="48"></sub>&nbsp;&nbsp;
&nbsp;(14)</p>

<SCRIPT>comment(1)</SCRIPT><p align="center"><sub>
<img border=0
src="http://www.jcse.org/volume3/paper22/v3p22_files/image014.gif" alt="if E15 equal to one divided by Ke4 times the sum for i=1 to 21 of (K1i times (E15 - the sum for j=1 to m of (Ej))) then the current J4 is equal to 0. Let call the value of E15 as E15J4" align="middle" width="260" height="48"></sub>&nbsp;&nbsp;
&nbsp;(15)</p>

<SCRIPT>comment(1)</SCRIPT><p><strong style="font-weight: 400"> where the </strong>sum for j=1 to m of (Ej) - the
sum of the items of the emfel, whose emfs (emf<sub>i</sub>) of processes
include values of E6 or E12. </p>

<SCRIPT>comment(1)</SCRIPT><p>The signs of the
aforesaid sums must guarantee the negative sign of the vectors of E6 (in the
case of E15J3) and E12 </p>

<SCRIPT>comment(1)</SCRIPT><p>The equations for Ke2 and Ke4 are given in Appendix 1.</p>

<SCRIPT>comment(1)</SCRIPT><h4>The summed currents of corrosion of the anode (Ja = J1 + J2) and
the cathode (Jc = J3 + J4).</h4>

<SCRIPT>comment(1)</SCRIPT><p>The expressions of the values of the summed currents of
corrosion Ja and Jc are symmetrical (they are mirror images for each other)
because this circuit is symmetrical.</p>

<SCRIPT>comment(1)</SCRIPT><p align="center">Ja=J1 +
J3&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
(16)</p>

<SCRIPT>comment(1)</SCRIPT><p align="center">Jc=J2 +
J4&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
(17)</p>

<SCRIPT>comment(1)</SCRIPT><p>The results obtained show that:</p>

<ol start=1 type=1>
 <li>only the currents, which flow through subcircuits 1-2,
     3-4, 5-6, 7-8 and which correspond to the formation of the insoluble and
     soluble products of corrosion of the anode and cathode (which, also, is
     the result of corrosion, or the result of the processes of the ion exchange
     in the solution) can influence the values of the currents of the summed
     corrosion of the anode (J1 + J2) and cathode (J3 + J4);</li>
 <li>we can determine a certain E15 value, when the current of
     summed corrosion of the anode (J1 + J2) is equal to 0 and a certain E15
     value when the current of summed corrosion of the cathode (J3 + J4) are
     equal to 0 (see below).</li>
</ol>

<SCRIPT>comment(1)</SCRIPT><p>The values of an external polarization (E15) when current Ja= J1 +
J2 =0 (E15J120) and Jc=J3 + J4=0 (E15J340).</p>

<SCRIPT>comment(1)</SCRIPT><p>The expressions of these values (E15J120 and E15J340) are 
<strong style="font-weight: 400">mirror images for
each other, because the circuit is symmetrical. </strong></p>

<SCRIPT>comment(1)</SCRIPT><p align="center"><strong style="font-weight: 400">
E15J120=</strong> <sub>
<img border=0
src="http://www.jcse.org/volume3/paper22/v3p22_files/image015.gif" alt="if E15 is equal to one divided by Ke12 times the sum for i=1 to 24 of (K1i times (E15 - the sum for j=1 to m of (Ej)) then Ja=J1+J2=0. Let call this value of E15 as E15J120" align="middle" width="183" height="48"></sub>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
(18)</p>

<SCRIPT>comment(1)</SCRIPT><p align="center"><sub>
<img border=0
src="http://www.jcse.org/volume3/paper22/v3p22_files/image016.gif" alt="if E15 is equal to one divided by Ke34 times the sum for i=1 to 24 of (K1i times (E15 - the sum for j=1 to m of (Ej)) then Jc=J3+J4=0. Let call this value of E15 as E15J340" align="middle" width="287" height="48"></sub>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
(19)</p>

<SCRIPT>comment(1)</SCRIPT><p>where <sub>
<img
border=0
src="http://www.jcse.org/volume3/paper22/v3p22_files/image017.gif" align="middle" alt="Sum for j=1 to m of Ej" width="39" height="47"></sub>&nbsp;is the
sum of the items of the emfel, whose emfs (emf<sub>i</sub>) of the processes
include one (not two) of the values of E2, E6, E8, E12. For example, in the
case of E15J120, this sum cant include the emfs of the processes that contain
the values E2 and E6 at the same time. The sign of the sum must guarantee the counter-clockwise direction of the vectors of E2, E6,
E8, E12. </p>

<SCRIPT>comment(1)</SCRIPT><p>The equations for Ke12 and Ke34 are given in Appendix 1.</p>

<SCRIPT>comment(1)</SCRIPT><p>The results obtained show that it is possible to stop
corrosion processes on the anode and cathode when certain values of the
external polarization are applied. The aforesaid expressions have an important
practical meaning. They either allow us to determine the numerical values of
the external polarization protecting the electrodes (or a corrodible metal) and
show such factors of the system that exert an influence on the value of this
polarization. It is obvious, that the similar expressions may be obtained for
all combinations of the currents (processes). This allows us to stop any
chemical/electrochemical processes in this system with the help of the
corresponding value of external polarization.</p>

<SCRIPT>comment(1)</SCRIPT><h4>The current of the joint corrosion of the anode and cathode (Jjc).</h4>

<SCRIPT>comment(1)</SCRIPT><p>This type of corrosion is the result of the interaction, in
the solution, of cationic (anionic) products of corrosion of the anode with the
anionic (cationic) products of corrosion of the cathode.</p>

<SCRIPT>comment(1)</SCRIPT><p align="center"><sub>
<img border=0
src="http://www.jcse.org/volume3/paper22/v3p22_files/image018.gif" alt="Jjc is equal to one divided by K times the sum for i=1 to 25 of (K1i times the sum for j=1 to m of (Ej))" align="middle" width="172" height="48"></sub><strong>&nbsp;&nbsp; </strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;(20)</p>

<SCRIPT>comment(1)</SCRIPT><p>where sum for j=1 to m of
(Ej) is equal to the emf of the process, contained in the Table 2, which
includes the value of E13. </p>

<SCRIPT>comment(1)</SCRIPT><p>The signs of the aforesaid sums must guarantee the positive
sign of the vector of E13.</p>

<SCRIPT>comment(1)</SCRIPT><p>The result obtained shows that:</p>

<ol start=1 type=1>
 <li>only the currents, which flows through subcircuits 3-5
     exert influence on the value of the current of joint corrosion of the
     anode and cathode;</li>
 <li>we can determine a certain E15 value, when the total
     current of the joint corrosion of the anode and cathode (Jjc) is equal to
     0 (see below).</li>
</ol>

<p>The value of an external polarization (E15) when Jjc is equal to 0 (E15Jjc=0).</p>

<SCRIPT>comment(1)</SCRIPT><p align="center"><sub>
<img border=0
src="http://www.jcse.org/volume3/paper22/v3p22_files/image019.gif" alt="if E15 &nbsp;is equal to one divided by Kejc times the sum for i=1 to 25 of (K1i times (-E15 + the sum for j=1 to m of (Ej))  then the current Jjc are equal to 0. Let call this E15 value as (E15Jjc)." align="middle" width="281" height="48"></sub>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
(21)</p>

<SCRIPT>comment(1)</SCRIPT><p>where sum for j=1 to m of (Ej) - the sum of
the items of the emfel, whose emfs (emf<sub>i</sub>) of processes include value
of E13. </p>

<SCRIPT>comment(1)</SCRIPT><p>The sign of the sum
must guarantee the positive sign of the vectors of E13.</p>

<SCRIPT>comment(1)</SCRIPT><p>The equation for Kejc is given in Appendix 1.</p>

<h4>The current of the total corrosion in a galvanic element Jcel=J1 + J2 + J3
+ J4 + Jjc</h4>

<SCRIPT>comment(1)</SCRIPT><p align="center">Jcel=J1 + J2 + J3 + J4 +
Jjc&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
(22)</p>

<SCRIPT>comment(1)</SCRIPT><p>The result obtained shows that:</p>

<SCRIPT>comment(1)</SCRIPT><p>1.&nbsp; the total corrosion of the anode and cathode takes place due to
currents, which do not depends on the external polarization (E15);</p>

<ol start=2 type=1>
 <li>the total corrosion of the
     anode and cathode takes place due to currents, which depends on the
     external polarization (E15) also;</li>
 <li>we can determine certain E15 value, when the total
     corrosion current of the galvanic element (Jcel) is equal to 0 (see
     below).</li>
</ol>

<SCRIPT>comment(1)</SCRIPT><p>The
value of the emf of an external polarization (E15) when Jcel=0 (E15Jcel0)</p>

<SCRIPT>comment(1)</SCRIPT><p align="center"><sub>
<img border=0
src="http://www.jcse.org/volume3/paper22/v3p22_files/image020.gif" alt="if E15 is equal to one divided by Ke12345 times the sum for i=1 to 28 of (K1i times (E15 - the sum for j=1 to m of (Ej)) then the current Jcel is equal to 0. Let call this value of E15 as E15Jcel0" align="middle" width="311" height="48"></sub>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
(23)</p>

<SCRIPT>comment(1)</SCRIPT><p>where: the sign of the sum must guarantee the
counter-clockwise direction of the vectors of E2, E6, E8, E12, E13.</p>

<SCRIPT>comment(1)</SCRIPT><p>The equation for Ke12345 is given in Appendix 1.</p>

<SCRIPT>comment(1)</SCRIPT><p>The result obtained shows that for this model there is such
value of the external polarization (E15), when the sum of all corrosion
currents of the anode and cathode in the galvanic element is equal to 0. This
polarization allows carrying out the complete
protection of a galvanic element from any forms of the self-discharge (that
take place due to corrosion of separate electrodes, as well as the joint
corrosion of the electrodes). This phenomenon can
find the practical application for the:</p>

<ol start=1 type=1>
 <li><strong style="font-weight: 400">realization of the ideal galvanic protection of metals
     against corrosion;</strong></li>
 <li><strong style="font-weight: 400">long time storage of galvanic elements before sale (or
     at their non-working periods).</strong></li>
</ol>

<SCRIPT>comment(1)</SCRIPT><p>Conclusions.</p>

<ol start=1 type=1>
 <li>On the basis of the approach developed earlier [1] for the
     modelling of ionic processes, as an example, the model of the functioning
     (under conditions of discharge on an external resistance and when an
     additional external polarization is applied) of a galvanic element is
     proposed;</li>
 <li>the fundamentally new design equations for the working current, the emf of a galvanic
     element (the potentials of separate electrodes), the currents of corrosion
     of each electrode, the values of an external polarization (which eliminates
     the corrosion of separate electrodes as well as that of all electrodes
     simultaneously) are obtained for this model;</li>
 <li>the expressions obtained (paragraph 2) allow us to
     determine the factors, which exert influence on the working current, the
     emf of a galvanic element (the potentials of separate electrodes), the
     currents of corrosion of electrodes. Some of these results agree with the
     well-known electrochemical practice (the possibility of the galvanic
     protection of metals against corrosion). The other results are obtained
     for the first time in practice (general expressions for the working
     current, the corrosion currents of electrodes in a battery, the emf of a
     galvanic element, the potentials of separate electrodes, the external
     polarizations which eliminate the corrosion of separate as well as that of
     all electrodes, the internal resistance of the galvanic element). The
     physical meaning of the measured potential of an electrode (the emf of a
     galvanic element) is described in detail. All expressions obtained have a
     clear thermodynamic meaning.</li>
 <li>thus, the possibility of the application of the earlier
     proposed approach [1] is demonstrated for the description, modelling and
     optimizing of the existent and radically new galvanic elements. This
     approach can be useful, also, for the description and understanding of the
     results, which have been obtained in the course of different
     electrochemical research activities. </li>
</ol>

<SCRIPT>comment(1)</SCRIPT><h3>Acknowledgments</h3>

<SCRIPT>comment(1)</SCRIPT><p>Special thanks to
Freydman Leonid Isaacovich, engineer-creator of the experimental-design office
ART (for his advices and significant remarks concerning the material of this
paper) and to Panov E. E. (for his important assistance in the translation of
this paper).. </p>

<SCRIPT>comment(1)</SCRIPT>
<h3>References</h3>

<p>1.&nbsp;&nbsp;&nbsp;&nbsp; The new principles of the building of equivalent
circuits for the modeling of metal-film-corrosive environment systems, Shagaev
A. A., Abolin O. E., Danilov V. G.. The Journal of Corrosion Science and
Engineering, 2002, vol. 3, paper 14.</p>

<h3>Appendix</h3>

<SCRIPT>comment(1)</SCRIPT><h4>Values of some terms</h4>

<p>The value of some of the terms used in the text are given by the following 
expressions:</p>

<SCRIPT>comment(1)</SCRIPT><p>K={[(R6 &times; R11 + R6 &times; R7 + R7 &times; R11) + (R6
&times; R12 + R6 &times; R8 + R8 &times; R12) + (R7 &times; R12 + R8 &times;
R11) + R15 &times; (R6 + R7 + R8)] &times; [[(R2 &times; R9 + R2 &times; R3 +
R3 &times; R9) + R1 &times; R9] &times; [(R4 &times; R10 + R4 &times; R14 + R10
&times; R14) + R5 &times; R10] + [(R1 &times; R10 + R1 &times; R2 + R2 &times;
R10) + (R2 &times; R9 + R2 &times; R3 + R3 &times; R9) + (R1 &times; R9 + R3
&times; R10)] &times; [(R4 + R5 + R14) &times; R13 + R4 &times; R5] + [(R4
&times; R10 + R4 &times; R14 + R10 &times; R14) + (R5 &times; R9 + R5 &times;
R14 + R9 &times; R14) + (R4 &times; R9 + R5 &times; R10)] &times; R1 &times; R3
+ (R4 + R5 + R14) &times; R1 &times; R2 &times; (R3 + R9) + R14 &times; [(R1 +
R2 + R3) &times; (R4 &times; R13 + R4 &times; R5 + R5 &times; R13) + R5 &times;
[(R1 &times; R10 + R1 &times; R2 + R2 &times; R10) + R3 &times; R10]]] + R15
&times; [(R6 &times; R11 + R6 &times; R7 + R7 &times; R11) + (R6 &times; R12 +
R6 &times; R8 + R8 &times; R12) + (R7 &times; R12 + R8 &times; R11)] &times;
[R13 &times; [(R1 &times; R10 + R1 &times; R2 + R2 &times; R10) + (R2 &times;
R9 + R2 &times; R3 + R3 &times; R9) + (R1 &times; R9 + R3 &times; R10) + R14
&times; (R1 + R2 + R3)] + (R1 &times; R10 + R1 &times; R2 + R2 &times; R10)
&times; (R3 + R9) + R3 &times; R9 &times; (R1 + R10)] + [(R1 &times; R10 + R1
&times; R2 + R2 &times; R10) + (R2 &times; R9 + R2 &times; R3 + R3 &times; R9)
+ (R1 &times; R9 + R3 &times; R10)] &times; [(R6 &times; R12 + R6 &times; R8 +
R8 &times; R12) &times; [(R4 &times; R11 + R4 &times; R15 + R11 &times; R15) +
R5 &times; R11 + R7 &times; (R4 + R5 + R14 + R15)] + [(R6 &times; R12 + R6
&times; R8 + R8 &times; R12) + R7 &times; (R8 + R12)] &times; R14 &times; R11 +
[(R4 &times; R11 + R4 &times; R15 + R11 &times; R15) + R5 &times; R11] &times;
R7 &times; (R8 + R12) + [(R6 &times; R11 + R6 &times; R7 + R7 &times; R11) + R8
&times; (R7 + R11)] &times; R5 &times; R15] + R14 &times; [(R6 &times; R12 + R6
&times; R8 + R8 &times; R12) + R7 &times; R12] &times; [ R15 &times; [(R1
&times; R10 + R1 &times; R2 + R2 &times; R10) + R3 &times; R10] + (R1 + R2 +
R3) &times; [(R4 &times; R11 + R4 &times; R15 + R11 &times; R15) + R5 &times;
R11]] + R14 &times; R7 &times; (R1 + R2 + R3) &times; (R4 + R5 + R15) &times;
[(R6 &times; R12 + R6 &times; R8 + R8 &times; R12) + R8 &times; R11] + R14
&times; R15 &times; [[(R6 &times; R11 + R6 &times; R7 + R7 &times; R11) + R8
&times; R11] &times; [(R2 &times; R9 + R2 &times; R3 + R3 &times; R9) + R1
&times; R9 + R5 &times; (R1 + R2 + R3)] + [(R1 &times; R10 + R1 &times; R2 + R2
&times; R10) + (R2 &times; R9 + R2 &times; R3 + R3 &times; R9) + (R1 &times; R9
+ R3 &times; R10)] &times; R7 &times; R8 + [(R6 &times; R11 + R6 &times; R7 +
R7 &times; R11) + (R6 &times; R12 + R6 &times; R8 + R8 &times; R12) + (R7
&times; R12 + R8 &times; R11)] &times; R1 &times; R3 + R7 &times; R8 &times;
(R1 + R2 + R3) &times; (R4 + R5)]} <b>equation (24)</b></p>

<SCRIPT>comment(1)</SCRIPT><p>Kemf={[(R1 &times; R10 + R1 &times; R2 + R2 &times; R10) +
(R2 &times; R9 + R2 &times; R3 + R3 &times; R9) + (R1 &times; R9 + R3 &times; R10)
+ R14 &times; (R1 + R2 + R3)] &times; (R4 + R5) &times; [(R6 &times; R11 + R6
&times; R7 + R7 &times; R11) + (R6 &times; R12 + R6 &times; R8 + R8 &times;
R12) + (R7 &times; R12 + R8 &times; R11) + R15 &times; (R6 + R7 + R8)] + R14
&times; [(R1 &times; R10 + R1 &times; R2 + R2 &times; R10) + (R2 &times; R9 +
R2 &times; R3 + R3 &times; R9) + (R1 &times; R9 + R3 &times; R10)] &times;
[[(R6 &times; R11 + R6 &times; R7 + R7 &times; R11) + (R6 &times; R12 + R6
&times; R8 + R8 &times; R12) + (R7 &times; R12 + R8 &times; R11) + R15 &times;
(R6 + R7 + R8)]] + R15 &times; [(R1 &times; R10 + R1 &times; R2 + R2 &times;
R10) + (R2 &times; R9 + R2 &times; R3 + R3 &times; R9) + (R1 &times; R9 + R3
&times; R10) + R14 &times; (R1 + R2 + R3)] &times; [[(R6 &times; R11 + R6
&times; R7 + R7 &times; R11) + (R6 &times; R12 + R6 &times; R8 + R8 &times;
R12) + (R7 &times; R12 + R8 &times; R11)]]}&nbsp;&nbsp;&nbsp;<b>equation (25)</b></p>

<SCRIPT>comment(1)</SCRIPT><p>KJ6Ria={[(R1 &times; R10 + R1 &times; R2 + R2 &times; R10) +
(R2 &times; R9 + R2 &times; R3 + R3 &times; R9) + (R1 &times; R9 + R3 &times;
R10) + R14 &times; (R1 + R2 + R3)] &times; [[(R2 &times; R9 + R2 &times; R3 +
R3 &times; R9) + R1 &times; R9] &times; [(R4 &times; R10 + R4 &times; R14 + R10
&times; R14) + R4 &times; R10] + [(R1 &times; R10 + R1 &times; R2 + R2 &times;
R10) + (R2 &times; R9 + R2 &times; R3 + R3 &times; R9) + (R1 &times; R9 + R3
&times; R10)] &times; [2 &times; R13 &times; (R4 + R14) + R4^2] + [(R4 &times;
R10 + R4 &times; R14 + R10 &times; R14) + (R4 &times; R9 + R4 &times; R14 + R9
&times; R14) + R4 &times; (R9 + R10)] &times; R1 &times; R3 + (2 &times; R4 +
R14) &times; R1 &times; R2 &times; (R3 + R9) + R14 &times; R4 &times; [(R1 + R2
+ R3) &times; (R4 + 2 &times; R13) + [(R1 &times; R10 + R1 &times; R2 + R2
&times; R10) + R3 &times; R10]]] + R4 &times; R14 &times; [(R1 &times; R10 + R1
&times; R2 + R2 &times; R10) + (R2 &times; R9 + R2 &times; R3 + R3 &times; R9)
+ (R1 &times; R9 + R3 &times; R10)]^2 + [(R1 &times; R10 + R1 &times; R2 + R2
&times; R10) + (R2 &times; R9 + R2 &times; R3 + R3 &times; R9) + (R1 &times; R9
+ R3 &times; R10)] &times; [(R1 &times; R10 + R1 &times; R2 + R2 &times; R10)
&times; [(R4 &times; R9 + R9 &times; R14) + R4 &times; R9 + 2 &times; R3
&times; (R4 + R14)] + [(R1 &times; R10 + R1 &times; R2 + R2 &times; R10)
&times; (R3 + 2 &times; R9) + 2 &times; R3 &times; R9 &times; (R1 + R10)]
&times; R14 + [2 &times; R4 &times; R9 + 2 &times; R4 &times; R14 + R9 &times;
R14 + 2 &times; R14^2] &times; R1 &times; R3 + (2 &times; R4 + R14) &times; R3
&times; R9 &times; R10] + R14 &times; [(R1 &times; R10 + R1 &times; R2 + R2
&times; R10) + R3 &times; R10] &times; [R14 &times; [(R1 &times; R10 + R1
&times; R2 + R2 &times; R10) + R3 &times; R10] + (R1 + R2 + R3) &times; (2
&times; R4 &times; R9 + R4 &times; R14 + R9 &times; R14)] + R14 &times; R3
&times; (R1 + R2 + R3) &times; (R4 + R4 + R14) &times; [(R1 &times; R10 + R1
&times; R2 + R2 &times; R10) + R1 &times; R9] + R14^2 &times; [[(R2 &times; R9
+ R2 &times; R3 + R3 &times; R9) + R1 &times; R9] &times; [(R2 &times; R9 + R2
&times; R3 + R3 &times; R9) + R1 &times; R9 + R4 &times; (R1 + R2 + R3)] + 2
&times; R1 &times; R3 &times; R4 &times; (R1 + R2 + R3)]}&nbsp; <b>equation (26)</b></p>

<SCRIPT>comment(1)</SCRIPT><p>KJ6Ric={[(R6 × R11 + R6 × R7 + R7 × R11) + (R6 × 
R12 + R6 × R8 + R8 × R12) + (R7 × R12 + R8 × R11) + R15 × (R6 + R7 + R8)] × 
[[(R6 × R11 + R6 × R7 + R7 × R11) + R8 × R11] × [(R5 × R12 + R5 × R15 + R12 × 
R15) + R5 × R12] + [(R6 × R11 + R6 × R7 + R7 × R11) + (R6 × R12 + R6 × R8 + R8 × 
R12) + (R7 × R12 + R8 × R11)] × [2 × R13 × (R5 + R15) + R5^2] + [(R5 × R12 + R5 
× R15 + R12 × R15) + (R5 × R11 + R5 × R15 + R11 × R15) + R5 × (R11 + R12)] × R8 
× R7 + (2 × R5 + R15) × R8 × R6 × (R7 + R11) + R15 × R5 × [(R6 + R7 + R8) × (R5 
+ 2 × R13) + [(R6 × R12 + R6 × R8 + R8 × R12) + R7 × R12]]] + R5 × R15 × [(R6 × 
R11 + R6 × R7 + R7 × R11) + (R6 × R12 + R6 × R8 + R8 × R12) + (R7 × R12 + R8 × 
R11)]^2 + [(R6 × R11 + R6 × R7 + R7 × R11) + (R6 × R12 + R6 × R8 + R8 × R12) + 
(R7 × R12 + R8 × R11)] × [(R6 × R12 + R6 × R8 + R8 × R12) × [(R5 × R11 + R11 × 
R15) + R5 × R11 + 2 × R7 × (R5 + R15)] + [(R6 × R12 + R6 × R8 + R8 × R12) × (R7 
+ 2 × R11) + 2 × R7 × R11 × (R8 + R12)] × R15 + [2 × R5 × R11 + 2 × R5 × R15 + 
R11 × R15 + 2 × R15^2] × R8 × R7 + (2 × R5 + R15) × R7 × R11 × R12] + R15 × [(R6 
× R12 + R6 × R8 + R8 × R12) + R7 × R12] × [R15 × [(R6 × R12 + R6 × R8 + R8 × 
R12) + R7 × R12] + (R6 + R7 + R8) × (2 × R5 × R11 + R5 × R15 + R11 × R15)] + R15 
× R7 × (R6 + R7 + R8) × (2 × R5 + R15) × [(R6 × R12 + R6 × R8 + R8 × R12) + R8 × 
R11] + R15^2 × [[(R6 × R11 + R6 × R7 + R7 × R11) + R8 × R11] × [(R6 × R11 + R6 × 
R7 + R7 × R11) + R8 × R11 + R5 × (R6 + R7 + R8)] + 2 × R8 × R7 × R5 × (R6 + R7 + 
R8)]} <b>equation (27)</b></p>

<SCRIPT>comment(1)</SCRIPT><p>Ke1={[(R6 &times; R11 + R6 &times;
R7 + R7 &times; R11) + (R6 &times; R12 + R6 &times; R8 + R8 &times; R12) + (R7
&times; R12 + R8 &times; R11) + R15 &times; (R6 + R7 + R8)] &times; [-R1
&times; [(R9 &times; R5 + R14 &times; R5 + R9 &times; R14) + R9 &times; R4] +
R3 &times; [(R10 &times; R4 + R14 &times; R4 + R10 &times; R14) + R10 &times;
R5]] + R15 &times; [+(-&nbsp;R1 &times; R9 + R3
&times; R10) &times; [(R6 &times; R11 + R6 &times; R7 + R7 &times; R11) + (R6
&times; R12 + R6 &times; R8 + R8 &times; R12) + (R7 &times; R12 + R8 &times;
R11)] + R14 &times; [-R1 &times; [(R6 &times; R12 + R6 &times; R8 + R8 &times;
R12) + R7 &times; R12] + R3 &times; [(R6 &times; R11 + R6 &times; R7 + R7
&times; R11) + R8 &times; R11]]]} <b>equation (28)</b></p>

<SCRIPT>comment(1)</SCRIPT><p>Ke3={[(R1 × R10 + R1 × R2 + R2 × R10) + (R2 × R9 + 
R2 × R3 + R3 × R9) + (R1 × R9 + R3 × R10) + R14 × (R1 + R2 + R3)] × [-R7 × [(R12 
× R5 + R15 × R5 + R12 × R15) + R12 × R4] + R8 × [(R11 × R4 + R15 × R4 + R11 × 
R15) + R11 × R5]] + R14 × [(-R7 × R12 + R8 × R11) × [(R1 × R10 + R1 × R2 + R2 × 
R10) + (R2 × R9 + R2 × R3 + R3 × R9) + (R1 × R9 + R3 × R10)] + R15 × [-R7 × [(R2 
× R9 + R2 × R3 + R3 × R9) + R1 × R9] + R8 × [(R1 × R10 + R1 × R2 + R2 × R10) + 
R3 × R10]]]} <b>equation (29)</b></p>

<SCRIPT>comment(1)</SCRIPT><p>Ke2={ [(R6 &times;
R11 + R6 &times; R7 + R7 &times; R11) + (R6 &times; R12 + R6 &times; R8 + R8
&times; R12) + (R7 &times; R12 + R8 &times; R11) + R15 &times; (R6 + R7 + R8)]
&times; [R5 &times; [(R1 &times; R10 + R1 &times; R2 + R2 &times; R10) + R3
&times; R10] - R4 &times; [(R2 &times; R9 + R3 &times; R2 + R3 &times; R9) + R1
&times; R9]] + R15 &times; [(R6 &times; R12 + R6 &times; R8 + R8 &times; R12) +
R7 &times; R12] &times; [(R1 &times; R10 + R1 &times; R2 + R2 &times; R10) + R3
&times; R10] - R15 &times; [(R6 &times; R11 + R6 &times; R7 + R7 &times; R11) +
R8 &times; R11] &times; [(R2 &times; R9 + R3 &times; R2 + R3 &times; R9) + R1
&times; R9]<strong>}&nbsp;&nbsp;</strong><b>equation (30)</b></p>

<SCRIPT>comment(1)</SCRIPT><p>Ke4={[(R1 &times; R10 + R1
&times; R2 + R2 &times; R10) + (R2 &times; R9 + R3 &times; R2 + R3 &times; R9)
+ (R1 &times; R9 + R3 &times; R10) + R14 &times; (R1 + R2 + R3)] &times; [R5
&times; [(R6 &times; R11 + R6 &times; R7 + R7 &times; R11) + R8 &times; R11] -
R4 &times; [(R6 &times; R12 + R6 &times; R8 + R8 &times; R12) + R7 &times;
R12]] + R14 &times; [(R6 &times; R11 + R6 &times; R7 + R7 &times; R11) + R8
&times; R11] &times; [(R2 &times; R9 + R3 &times; R2 + R3 &times; R9) + R1
&times; R9] - R14 &times; [(R6 &times; R12 + R6 &times; R8 + R8 &times; R12) +
R7 &times; R12] &times; [(R1 &times; R10 + R1 &times; R2 + R2 &times; R10) + R3
&times; R10]}<strong> equation
(31)</strong></p>

<SCRIPT>comment(1)</SCRIPT><p>Ke12={[(R6
&times; R11 + R6 &times; R7 + R7 &times; R11) + (R6 &times; R12 + R6 &times; R8
+ R8 &times; R12) + (R7 &times; R12 + R8 &times; R11) + R15 &times; (R6 + R7 +
R8)] &times; [-(R1 &times; R10 + R1 &times; R2 + R2 &times; R10) &times; R5 +
(R2 &times; R9 + R3 &times; R2 + R3 &times; R9) &times; R4 + (R4 &times; R10 +
R4 &times; R14 + R10 &times; R14) &times; R3 - (R5 &times; R9 + R5 &times; R14
+ R9 &times; R14) &times; R1] + R15 &times; [(R2 &times; R9 + R3 &times; R2 +
R3 &times; R9) + R3 &times; (R10 + R14)] &times; [(R6 &times; R11 + R6 &times;
R7 + R7 &times; R11) + R8 &times; R11] - R15 &times; [(R1 &times; R10 + R1
&times; R2 + R2 &times; R10) + R1 &times; (R9 + R14)] &times; [(R6 &times; R12
+ R6 &times; R8 + R8 &times; R12) + R7 &times; R12]} <b>equation (32)</b></p>

<SCRIPT>comment(1)</SCRIPT><p>Ke34={ [(R1 × R10 + R1 × R2 + R2 × R10) + (R2 × R9 
+ R3 × R2 + R3 × R9) + (R1 × R9 + R3 × R10) + R14 × (R1 + R2 + R3)] × [R5 × (R6 
× R11 + R6 × R7 + R7 × R11) - R4 × (R6 × R12 + R6 × R8 + R8 × R12) - R8 × (R4 × 
R11 + R4 × R15 + R11 × R15) + R7 × (R5 × R12 + R5 × R15 + R12 × R15)] + R14 × 
[(R6 × R11 + R6 × R7 + R7 × R11) + R7 × (R12 + R15)] × [(R2 × R9 + R3 × R2 + R3 
× R9) + R1 × R9] - R14 × [(R6 × R12 + R6 × R8 + R8 × R12) + R8 × (R11 + R15)] × 
[(R1 × R10 + R1 × R2 + R2 × R10) + R3 × R10]} <b>equation (33)</b></p>

<SCRIPT>comment(1)</SCRIPT><p>Kejc={R4 &times; [(R1
&times; R10 + R1 &times; R2 + R2 &times; R10) + (R2 &times; R9 + R3 &times; R2
+ R3 &times; R9) + (R1 &times; R9 + R3 &times; R10) + R14 &times; (R1 + R2 +
R3)] &times; [ [(R6 &times; R11 + R6 &times; R7 + R7 &times; R11) + (R6 &times;
R12 + R6 &times; R8 + R8 &times; R12) + (R7 &times; R12 + R8 &times; R11) + R15
&times; (R6 + R7 + R8)]] + R14 &times; [(R1 &times; R10 + R1 &times; R2 + R2
&times; R10) + R3 &times; R10] &times; [ [(R6 &times; R11 + R6 &times; R7 + R7
&times; R11) + (R6 &times; R12 + R6 &times; R8 + R8 &times; R12) + (R7 &times;
R12 + R8 &times; R11) + R15 &times; (R6 + R7 + R8)]] + R15 &times; [(R1 &times;
R10 + R1 &times; R2 + R2 &times; R10) + (R2 &times; R9 + R3 &times; R2 + R3
&times; R9) + (R1 &times; R9 + R3 &times; R10) + R14 &times; (R1 + R2 + R3)]
&times; [[(R6 &times; R11 + R6 &times; R7 + R7 &times; R11) + R8 &times; R11]]} <b>equation (34)</b></p>

<SCRIPT>comment(1)</SCRIPT><p>Ke12345={[(R1 &times;
R10 + R1 &times; R2 + R2 &times; R10) + (R2 &times; R9 + R3 &times; R2 + R3
&times; R9) + (R1 &times; R9 + R3 &times; R10) + R14 &times; (R1 + R2 + R3)]
&times; [R5 &times; [(R6 &times; R11 + R6 &times; R7 + R7 &times; R11) + R7
&times; (R12 + R15)] + R7 &times; R12 &times; R15] + [(R6 &times; R11 + R6
&times; R7 + R7 &times; R11) + (R6 &times; R12 + R6 &times; R8 + R8 &times;
R12) + (R7 &times; R12 + R8 &times; R11) + R15 &times; (R6 + R7 + R8)] &times;
[R5 &times; [(R1 &times; R10 + R1 &times; R2 + R2 &times; R10) + R1 &times; (R9
+ R14)] + R1 &times; R9 &times; R14] + R14 &times; [(R1 &times; R10 + R1
&times; R2 + R2 &times; R10) + (R2 &times; R9 + R3 &times; R2 + R3 &times; R9)
+ R1 &times; R9] &times; [[(R6 &times; R11 + R6 &times; R7 + R7 &times; R11) +
R7 &times; (R12 + R15)]] + R15 &times; [(R6 &times; R11 + R6 &times; R7 + R7
&times; R11) + (R6 &times; R12 + R6 &times; R8 + R8 &times; R12) + R7 &times;
R12] &times; [[(R1 &times; R10 + R1 &times; R2 + R2 &times; R10) + R1 &times;
(R9 + R14)]] + R14 &times; R15 &times; [R6 &times; (R1 &times; R10 + R1 &times;
R2 + R2 &times; R10) + R2 &times; (R6 &times; R11 + R6 &times; R7 + R7 &times;
R11)] + R4 &times; [(R1 &times; R10 + R1 &times; R2 + R2 &times; R10) + R1
&times; R9 + R14 &times; (R1 + R2)] &times; [(R6 &times; R11 + R6 &times; R7 +
R7 &times; R11) + R7 &times; R12 + R15 &times; (R6 + R7)] - (R2 &times; R9 + R3
&times; R2 + R3 &times; R9) &times; [R8 &times; (R4 &times; R11 + R4 &times;
R15 + R15 &times; R11) + R4 &times; (R6 &times; R12 + R6 &times; R8 + R8
&times; R12)] - R3 &times; (R10 &times; R4 + R14 &times; R4 + R10 &times; R14)
&times; [(R6 &times; R12 + R6 &times; R8 + R8 &times; R12) + R8 &times; R11] -
R3 &times; R15 &times; R8 &times; [(R10 &times; R4 + R14 &times; R4 + R10
&times; R14) + R11 &times; (R10 + R14)]} <b>equation (35)</b></p>

<h4><a name="Text description of Figure 1">Text description of Figure 1</a></h4>

<SCRIPT>comment(1)</SCRIPT><p>The figure shows the initial equivalent circuit
used in this paper. There are following major nodes in the circuit:</p>

<SCRIPT>comment(1)</SCRIPT><p>node 0 corresponds to the bulk of the metal of the anode</p>

<SCRIPT>comment(1)</SCRIPT><p>node 1 corresponds to the place on the anode film where
delocalized anion (a1) is generated</p>

<SCRIPT>comment(1)</SCRIPT><p>node 2 corresponds to the place, on the anode, where the
delocalized cation (c1) of the anode metal goes out on the film surface on the
anode</p>

<SCRIPT>comment(1)</SCRIPT><p>node 3 corresponds to the place, in the solution, where
solvated anion (a1s) is generated</p>

<SCRIPT>comment(1)</SCRIPT><p>node 4 corresponds to the place, in the solution, where
solvated cation (c1s) of the anode metal is formed</p>

<SCRIPT>comment(1)</SCRIPT><p>node 5 correspond to the place, in the solution, where
solvated cation (c2s) of the cathode metal is formed</p>

<SCRIPT>comment(1)</SCRIPT><p>node 6 corresponds to the place, in the solution, where
solvated anion (a2s) is generated</p>

<SCRIPT>comment(1)</SCRIPT><p>node 7 corresponds to the place, on the cathode, where the delocalized cation (c2) of the cathode metal goes
out on the film surface on the cathode</p>

<SCRIPT>comment(1)</SCRIPT><p>node 8 corresponds to the place on the cathode film where delocalized anion (a2) is generated</p>

<SCRIPT>comment(1)</SCRIPT><p>node 9 corresponds to the bulk of the metal of the cathode.</p>

<SCRIPT>comment(1)</SCRIPT><p>Then the following circuit elements are connected in series:</p>

<SCRIPT>comment(1)</SCRIPT><p>RM11 + Re1 + ER1 + Rs1ox between node 0 and node 1 (this branch
of the circuit describes the transfer of the electron and oxidant molecule
towards each other, on the anode, and their interaction. The delocalized anion
a1 is the result of this interaction)</p>

<SCRIPT>comment(1)</SCRIPT><p>RM12 + EM1 + Rc1 between node 0 and node 2 (this branch of
the circuit describes, first of all, the formation of the cation c1 and
electron in the volume of the metal of anode and, secondly, the migration of
the cation c1 to the metal/film phase boundary and, thirdly, the migration of
the electron to the place where it interacts with the molecule of the oxidant.)</p>

<SCRIPT>comment(1)</SCRIPT><p>Rc1a1a1 + Efac1a1 + Rc1a1c1 between node 1 and node 2 (this
branch of the circuit describes the migration of the delocalized cation c1and
anion a1 towards each other, on the surface of the film, and their interaction.
The film substance c1a1 is the result of this interaction).</p>

<SCRIPT>comment(1)</SCRIPT><p>Esa1 + Ras1 between node 1 and node 3 (this branch of the
circuit describes the transfer of the solvent molecule to the places where the
anion a1 is formed on the anode film surface)</p>

<SCRIPT>comment(1)</SCRIPT><p>Esc1 + Ras2 between node 2 and node 4 (this branch of the
circuit describes the transfer of the solvent molecule to the places where
cation c1 goes out on the film surface on the anode)</p>

<SCRIPT>comment(1)</SCRIPT><p>Rc1sa1sa1s + Esc1sa1s + Rc1sa1sc1s between node 3 and node 4
(this branch of the circuit describes the migration of the solvated cation c1s
and anion a1s towards each other, in the solution, and their interaction. The
ionic pair c1sa1s is the result of this interaction)</p>

<SCRIPT>comment(1)</SCRIPT><p>Rsc1sa2s + Esc1sa2s + Rsa2sc1s between node 4 and node 6
(this branch of the circuit describes the migration of the solvated cation c1s
and anion a2s towards each other, in the solution, and their interaction. The
ionic pair c1sa2s is the result of this interaction)</p>

<SCRIPT>comment(1)</SCRIPT><p>Rsa1sc2s + Esc2sa1s + Rsc2sa1s between node 3 and node 5
(this branch of the circuit describes the migration of the solvated cation c2s
and anion a1s towards each other, in the solution, and their interaction. The
ionic pair c2sa1s is the result of this interaction)</p>

<SCRIPT>comment(1)</SCRIPT><p>Rc2sa2sc2s + Esc2sa2s + Rc2sa2sa2s between node 5 and node 6
(this branch of the circuit describes the migration of the solvated cation c2s
and anion a2s towards each other, in the solution, and their interaction. The
ionic pair c2sa2s is the result of this interaction)</p>

<SCRIPT>comment(1)</SCRIPT><p>Esc2 + Rcs3 between node 5 and node 7 (this branch of the
circuit describes the transfer of the solvent molecule to the places where
cation a2 goes out on the film surface on the cathode)</p>

<SCRIPT>comment(1)</SCRIPT><p>Esa2 + Rcs4 between node 6 and node 8 (this branch of the
circuit describes the transfer of the solvent molecule to the places where
anion a2 is formed on the film surface on the cathode) </p>

<SCRIPT>comment(1)</SCRIPT><p>Rc2a2a2 + Efcc2a2 + Rc2a2c2 between node 7 and node 8 (this
branch of the circuit describes the migration of the delocalized cation c2 and
anion a2 towards each other, on the surface of the film, and their interaction.
The film substance c2a2 is the result of this interaction).</p>

<SCRIPT>comment(1)</SCRIPT><p>RM21 + Re2 + ER2 + Rs2ox between node 8 and node 9 (this
branch of the circuit describes the transfer of the electron and oxidant
molecule towards each other and their interaction. The delocalized anion a2 is
the result of this interaction)</p>

<SCRIPT>comment(1)</SCRIPT><p>RM22 + EM2 + Rc2 between node 7 and node 9 (this branch of
the circuit describes, first of all, the formation of the cation c2 and
electron in the volume of the cathode metal and, secondly, the migration of the
cation c2 to the metal/film phase boundary and, thirdly, the migration of the
electron to the place where it interacts with molecule of oxidant.)</p>

<SCRIPT>comment(1)</SCRIPT><p>RM21 + Re2 + ER2 + Rs2ox between node 8 and node 9 (this
branch of the circuit describes the transfer of the electron and oxidant
molecule towards each other, on the cathode, and their interaction. The
delocalized anion a2 is the result of this interaction)</p>

<SCRIPT>comment(1)</SCRIPT><p>Ep + Rext between node 0 and node 9 (this branch of the
circuit describes an external circuit, that contains a pure resistance and the
source of an external polarization)</p>

<SCRIPT>comment(1)</SCRIPT><p>The author of the paper took into account following currents
flowing in this circuit:</p>

<SCRIPT>comment(1)</SCRIPT><p>current J1, flowing from node 0 to node 1, next to node 2
and finally to node 0 (this current describes the rate of the growth of the
corrosion product (c1a1) film on the anode);</p>

<SCRIPT>comment(1)</SCRIPT><p>current J2, flowing from the node 0 to node 1, then to node
3, then to node 4, then to node 2 and finally to node 0 (this current describes
the rate of the formation of the soluble corrosion product (c1sa1s) of the
anode in the solution);</p>

<SCRIPT>comment(1)</SCRIPT><p>current J3, flowing from node 9 to node 8, next to node 7
and finally to node 9 (this current describes the rate of the growth of the
corrosion product (c2a2) film on the cathode);</p>

<SCRIPT>comment(1)</SCRIPT><p>current J4, flowing from the node 9 to node 8, then to node
6, then to node 5, then to node 7 and finally to node 9 (this current describes
the rate of the formation of the soluble corrosion product (c2sa2s) of the
cathode in the solution);</p>

<SCRIPT>comment(1)</SCRIPT><p>current J5, flowing from node 0 to node 1, then to node 3,
then to node 5, then to node 7, then to node 9, then to node 8, then to node 6,
then to node 4, then to node 2 and finally to node 0 (this current describes
the rates of the formation of the soluble corrosion products c1sa2s and c2sa1s
in the solution. It is the current flowing between anode and cathode when an
external circuit is open, also);</p>

<SCRIPT>comment(1)</SCRIPT><p>current J6, flowing from the node 0 to node 9, then to node
8, then to node 6, then to node 4, then to node 2 and finally to node 0. It is
the current flowing through the external resistance R13. We can measure this
current by means of the usual VA measurement. </p>

<SCRIPT>comment(1)</SCRIPT><p><b>End of description of Figure 1</b></p>

<SCRIPT>comment(1)</SCRIPT><p>&nbsp;</p>

</body>

<SCRIPT>footer()</SCRIPT></html>