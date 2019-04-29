<?php 
session_start();
require_once('/home/jcsete5/public_html/jcse.org/jcse/php_inc/jrnl_subs.php');
$logged_in=is_loggedin();
?>
<html>
<head>
<meta name=Generator content="Microsoft FrontPage 6.0">
<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
<meta name=Originator content="Microsoft Word 9">
<title>JCSE Volume 3, Paper 10</title>
<SCRIPT src="/getcomm.php?vol=3&pap=10"></SCRIPT>
<SCRIPT src="/jsinc/jcsesubs.js.php"></SCRIPT>
<SCRIPT>
getcommentmode();</SCRIPT></HEAD><body>
<script>var lgi=<?php if ($logged_in) { echo('true');} else { echo('false');} ?>;</script>
<script src="/jsinc/writeheader.js"></script><?php ggl_ad(); ?>

  <h2>Volume 3, Paper 10</h2>
  <script>ifnotmode(3,'<p><i><b>Submitted 28th December 1999, published for public review 14 September 2001</b></i></p>');</script>
  <hr>


<h2>Evaluation of Optimal Conditions of Austenitic Stainless Steel Using
Electrochemical Reactivation Method for Detecting Sensitization to IGC</h2>

<p>A. Kriaa<sup>1</sup>, H. Sidhom<sup>1</sup>,
H. Marrakchi<sup>1</sup>, C.Braham<sup>2</sup>, J. Ledion<sup>2<br>
1</sup>laboratoire
de m�canique et mat�riaux de l�ESSTT, 5 avenue Taha Hussein 1008, monfleury,
Tunis.<br>
 <sup>2</sup>Laboratoire
de Microstructure et M�canique des Mat�riaux�
ENSAM Paris/ URA CNRS 1219</p>

<SCRIPT>notify();</SCRIPT><SCRIPT>comment(1)</SCRIPT><h3>Abstract</h3>

<p>Optimal Conditions of the EPR DL
tests have been drawn up by the method of the experience plan in order to
evaluate the degree of sensitization of a forged Austenitic stainless steel of
type 316L. The research of the electrolyte composition has been carried out to
specimens corresponding to the annealed and aged states at 550�C for 80 000h,
according to a program planned of tests, using the variation of the 4 main
factors controlling the EPR DL tests. It is about the sweep rate (dE/dt), the
concentration of sulphuric acid (H<sub>2</sub>SO<sub>4</sub>), the
concentration of ammonium thiocyanate�(NH<sub>4</sub>SCN) and the temperature in �C.</p>

<SCRIPT>comment(1)</SCRIPT><p>The sensitization to the IGC is
evaluated by the ratio I<sub>r</sub>/I<sub>a</sub> or Q<sub>r</sub>/Q<sub>a</sub>
expressed in %. The criterias of sensitization to the IGC, kept in this study
corresponds to I<sub>r</sub>/I<sub>a</sub> &gt;1% and Q<sub>r</sub>/Q<sub>a</sub>
&gt;1%.</p>

<SCRIPT>comment(1)</SCRIPT><p>On the other hand, The results of
EPR DL test have been confronted to microstructural study, done by optical
microscope and Scanning Transmission Electron Microscope (STEM) for annealed
and age samples. The profiles of Chromium, Nickel and Molybdenum concentration
establish by microanalyses on thin blades in STEM, permitted to confirm a
lowering of the content in elements of alloy entered in the composition of M<sub>23</sub>C<sub>6</sub>
carbides, contributory thus to the formation of Cr-depleted zones responsible
of the sensitization phenomenon to the IGC.</p>

<SCRIPT>comment(1)</SCRIPT><p>A mathematical model clarified
from results of the experience plan and integrating the main above- effect
parameters, permits to quantify the operative condition effect on the answer of
the test EPR DL in the assessment of the sensitization to the IGC of an
Austenitic Stainless Steel structure.</p>

<SCRIPT>comment(1)</SCRIPT><p><b>Keywords:</b></p>

<SCRIPT>comment(1)</SCRIPT><h3>Introduction� </h3>

<p>The non destructive
Electro-chemical test of assessment of sensitization to the intergranular
corrosion known under EPR (Electrochemical Potentiokinetic Reactivation) or
potentiokinetic reactivation method has been developed 25 years ago by the
french company� (CAFL)<sup>1</sup> to
assure the control of casting products. Since this date, numerous studies<sup>2-21</sup>
contributed to the development of the technique that exists today under
different variants of which the used more, due to its weakly sensitivity to the
state of surface<sup>13, 18, 19</sup>, is the double loop method (EPR DL)<sup>2-6</sup>.
This technique is applied currently on sites by means of a portable EPR cell<sup>14</sup>
for test in situ of finished receipt pieces, either of cauldron apparatus<sup>7-10</sup>.� </p>

<SCRIPT>comment(1)</SCRIPT><p>The great sensitivity of this
technique according to the electrolyte composition and the operative conditions
doesn't put back in reason its reliability that has been demonstrated otherwise
on numerous Austenitic stainless Steel and Nickel alloys <sup>1-17,24</sup>.
However the high precision to detect the fine precipitation requires research
for every alloy, the suitable electrolyte composition, its temperature, the
conditions limits of potential and the scan rates<sup>9,13-17</sup>. A
synthesis of the relative technical literature to Austenitic Stainless Steel
summarized in the table1, shows that The basis of the electrolyte being
constituted by the sulfuric acid (H2SO4) with the addition of a depassivant as
the KSCN<sup>13,15</sup> or the NH4SCN<sup>9,17</sup> or of the HCl<sup>14</sup>
in the case of the modified EPR method. The the scan rate varies between� 0,5 and 2,5 mV/sec<sup>13,14,15</sup>� and the temperature of test is often ambiant<sup>9,13,17,26</sup>
or 30�C<sup>13,15,25,20,27</sup>.� </p>

<SCRIPT>comment(1)</SCRIPT><p>In spite of numerous studys<sup>2-21,24-27</sup>,
implying the exploitation of the technical EPR, the optimal combination,
conjugating the effect of different parameters on limits of detection of the
sensitization to the CIG, remains doubtful. The aim of this paper is to study
by the experience plan method, the development of a model integrating the main
parameter effect controlling the sensitivity of the technical EPR in the
detection of the fine intergranular precipitation susceptible to induce
sensitization to the IGC of forged Austenitic Stainless Steel.� </p>

<SCRIPT>comment(1)</SCRIPT><p>Table 1<b>:</b>
Operative conditions and criteria of the evaluation by EPR method, the
sensitization to IGC of Austenitic Stainless Steel nuances.</p>

<table border=1 cellspacing=0 cellpadding=0 width=638>
 <tr>
  <td width=109 valign=top>
  <p align=center><b>Specimen designation</b></p>
  </td>
  <td width=57 valign=top>
  <p align=center><b>Temp.&nbsp;</b></p>
  <p align=center><b>�C</b></p>
  </td>
  <td width=123 valign=top>
  <p align=center><b>Electrolyte composition</b></p>
  </td>
  <td width=104 valign=top>
  <p align=center><b>Limits conditions of potential<br>
  mV/ECS</b></p>
  </td>
  <td width=76 valign=top>
  <p align=center><b>Scan rates mV/s</b></p>
  </td>
  <td width=104 valign=top>
  <p align=center><b>Criteria of sensitization to� IGC</b></p>
  <p align=center>&nbsp;</p>
  </td>
  <td width=66 valign=top>
  <p align=center><b>Ref.</b></p>
  </td>
 </tr>
 <tr>
  <td width=109 valign=top>
  <p align=center>304-304L</p>
  </td>
  <td width=57 valign=top>
  <p align=center>30</p>
  </td>
  <td width=123 valign=top>
  <p align=center>H<sub>2</sub>SO<sub>4</sub>
  0,5M </p>
  <p align=center>�KSCN 0,01M</p>
  </td>
  <td width=104 valign=top>
  <p align=center>-400 to +300</p>
  <p align=center>&nbsp;</p>
  </td>
  <td width=76 valign=top>
  <p align=center>1,67 </p>
  </td>
  <td width=104 valign=top>
  <p align=center>_</p>
  </td>
  <td width=66 valign=top>
  <p align=center>[13]</p>
  </td>
 </tr>
 <tr>
  <td width=109 valign=top>
  <p align=center>316L</p>
  </td>
  <td width=57 valign=top>
  <p align=center>30</p>
  </td>
  <td width=123 valign=top>
  <p align=center>H<sub>2</sub>SO<sub>4</sub>
  6N� </p>
  <p align=center>�KSCN 0,005M</p>
  </td>
  <td width=104 valign=top>
  <p align=center>-600 to +200</p>
  <p align=center>&nbsp;</p>
  </td>
  <td width=76 valign=top>
  <p align=center>1,67</p>
  </td>
  <td width=104 valign=top>
  <p align=center>&nbsp;</p>
  <p align=center>I / I<sub>a</sub>&gt;&gt;0</p>
  <p align=center>&nbsp;</p>
  </td>
  <td width=66 valign=top>
  <p align=center>[15]</p>
  </td>
 </tr>
 <tr>
  <td width=109 valign=top>
  <p align=center>AISI 304</p>
  </td>
  <td width=57 valign=top>
  <p align=center>30</p>
  </td>
  <td width=123 valign=top>
  <p align=center>H<sub>2</sub>SO<sub>4</sub>
  0,5M </p>
  <p align=center>�KSCN 0,01M</p>
  </td>
  <td width=104 valign=top>
  <p align=center>-400 to +300</p>
  </td>
  <td width=76 valign=top>
  <p align=center>1,67 </p>
  </td>
  <td width=104 valign=top>
  <p align=center>I<sub>r</sub>/I<sub>a</sub>&gt;0,005</p>
  <p align=center>Metallographic</p>
  </td>
  <td width=66 valign=top>
  <p align=center>[24]</p>
  </td>
 </tr>
 <tr>
  <td width=109 valign=top>
  <p align=center>1Cr18Ni9Ti</p>
  </td>
  <td width=57 valign=top>
  <p align=center>20 &amp; 70</p>
  </td>
  <td width=123 valign=top>
  <p align=center>H<sub>2</sub>SO<sub>4</sub>
  2,5M</p>
  <p align=center>0,5-2M KSCN</p>
  </td>
  <td width=104 valign=top>
  <p align=center>E<sub>pass</sub> to
  E<sub>act</sub> return to P<sub>eas</sub></p>
  </td>
  <td width=76 valign=top>
  <p align=center>1,67 or 2,5 </p>
  </td>
  <td width=104 valign=top>
  <p align=center>I<sub>r</sub> / I<sub>a</sub>
  or Q<sub>r</sub> / Q<sub>a</sub></p>
  </td>
  <td width=66 valign=top>
  <p align=center>[25]</p>
  </td>
 </tr>
 <tr>
  <td width=109 valign=top>
  <p align=center>AISI 304L</p>
  </td>
  <td width=57 valign=top>
  <p align=center>30</p>
  </td>
  <td width=123 valign=top>
  <p align=center>H<sub>2</sub>SO<sub>4</sub>
  0,5M� </p>
  <p align=center>�KSCN 0,01M</p>
  </td>
  <td width=104 valign=top>
  <p align=center>-500 to +300</p>
  </td>
  <td width=76 valign=top>
  <p align=center>-</p>
  </td>
  <td width=104 valign=top>
  <p align=center>I<sub>r</sub> / I<sub>p</sub>&gt;0,0182</p>
  </td>
  <td width=66 valign=top>
  <p align=center>[20]</p>
  </td>
 </tr>
 <tr>
  <td width=109 valign=top>
  <p align=center>Z2NCDU 25-20.04M</p>
  <p align=center>Super austenitic</p>
  </td>
  <td width=57 valign=top>
  <p align=center>&nbsp;</p>
  <p align=center>25</p>
  </td>
  <td width=123 valign=top>
  <p align=center>H<sub>2</sub>SO<sub>4</sub>
  33% </p>
  <p align=center>�0,3% HCl</p>
  </td>
  <td width=104 valign=top>
  <p align=center>-30 to +560</p>
  <p align=center>&nbsp;</p>
  </td>
  <td width=76 valign=top>
  <p align=center>0,5 </p>
  </td>
  <td width=104 valign=top>
  <p align=center>I<sub>r</sub>/ I<sub>a</sub>&gt;
  1%</p>
  </td>
  <td width=66 valign=top>
  <p align=center>[14]</p>
  </td>
 </tr>
 <tr>
  <td width=109 valign=top>
  <p align=center>304LN and 316LN</p>
  </td>
  <td width=57 valign=top>
  <p align=center>25</p>
  </td>
  <td width=123 valign=top>
  <p align=center>H<sub>2</sub>SO<sub>4</sub>
  0,5M </p>
  <p align=center>�NH<sub>4</sub>SCN 0,01M</p>
  </td>
  <td width=104 valign=top>
  <p align=center>-</p>
  </td>
  <td width=76 valign=top>
  <p align=center>1,67</p>
  </td>
  <td width=104 valign=top>
  <p align=center>-</p>
  </td>
  <td width=66 valign=top>
  <p align=center>[13] [9]</p>
  </td>
 </tr>
 <tr>
  <td width=109 valign=top>
  <p align=center>304LN-316LN</p>
  </td>
  <td width=57 valign=top>
  <p align=center>25</p>
  </td>
  <td width=123 valign=top>
  <p align=center>H<sub>2</sub>SO<sub>4</sub>
  0,5M </p>
  <p align=center>�NH<sub>4</sub>SCN 0,01M</p>
  </td>
  <td width=104 valign=top>
  <p align=center>+200 to E<sub>corr</sub></p>
  </td>
  <td width=76 valign=top>
  <p align=center>1,66 </p>
  </td>
  <td width=104 valign=top>
  <p align=center>I<sub>r</sub>&gt;&gt;0
  or Q<sub>r</sub>&gt;&gt;0� metallographic</p>
  </td>
  <td width=66 valign=top>
  <p align=center>[17]</p>
  </td>
 </tr>
 <tr>
  <td width=109 valign=top>
  <p align=center>316L</p>
  </td>
  <td width=57 valign=top>
  <p align=center>&nbsp;</p>
  <p align=center>25-40</p>
  </td>
  <td width=123 valign=top>
  <p align=center>H<sub>2</sub>SO<sub>4</sub>
  0,1- 4M</p>
  <p align=center>�NH<sub>4</sub>SCN 0 - 0,1M</p>
  </td>
  <td width=104 valign=top>
  <p align=center>-400 to -300</p>
  <p align=center>&nbsp;</p>
  </td>
  <td width=76 valign=top>
  <p align=center>0,5-5 </p>
  </td>
  <td width=104 valign=top>
  <p align=center>I<sub>r</sub> /I<sub>a
  </sub>&gt;to
  1% metallographic</p>
  </td>
  <td width=66 valign=top>
  <p align=center>this study</p>
  </td>
 </tr>
</table>

<p>With:</p>

<p>�I<sub>a</sub>: activation peak current
density<br>
&nbsp;I<sub>r</sub>: reactivation peak current
density<br>
&nbsp;Q<sub>r</sub>: reactivation� electric charge density<br>
&nbsp;Q<sub>a</sub>: activation electric charge
density </p>

<SCRIPT>comment(1)</SCRIPT><h3>Materials and Tests�</h3>

<h4>Material and
states of thermal treatment:�</h4>

<p>This study has been concerned an
Austenitic Stainless Steel nuance of type 316 L (or 17 -13 Mo) in state of
water quenching since 1100�C and aged state at 550�C for� 80 000h.�
The chemical composition of the studied nuance is reported in table 2.</p>

<SCRIPT>comment(1)</SCRIPT><p align=center><b>Table 2: Chemical
composition of Steel 17-13Mo (in weight %).</b></p>

<div align=center>

<table border=1 cellspacing=0 cellpadding=0>
 <tr>
  <td width=91 valign=top>
  <p align=center>Nuance</p>
  </td>
  <td width=38 valign=top>
  <p align=center>C</p>
  </td>
  <td width=38 valign=top>
  <p align=center>S</p>
  </td>
  <td width=38 valign=top>
  <p align=center>P</p>
  </td>
  <td width=38 valign=top>
  <p align=center>Si</p>
  </td>
  <td width=38 valign=top>
  <p align=center>Mn</p>
  </td>
  <td width=38 valign=top>
  <p align=center>Ni</p>
  </td>
  <td width=38 valign=top>
  <p align=center>Cr</p>
  </td>
  <td width=38 valign=top>
  <p align=center>�Mo</p>
  </td>
  <td width=53 valign=top>
  <p align=center>Ti</p>
  </td>
  <td width=53 valign=top>
  <p align=center>Nb</p>
  </td>
  <td width=44 valign=top>
  <p align=center>Cu</p>
  </td>
  <td width=44 valign=top>
  <p align=center>N</p>
  </td>
 </tr>
 <tr>
  <td width=91 valign=top>
  <p align=center>Z2CND17-12</p>
  </td>
  <td width=38 valign=top>
  <p align=center>0,022</p>
  </td>
  <td width=38 valign=top>
  <p align=center>0,015</p>
  </td>
  <td width=38 valign=top>
  <p align=center>0,020</p>
  </td>
  <td width=38 valign=top>
  <p align=center>0,35</p>
  </td>
  <td width=38 valign=top>
  <p align=center>1,74</p>
  </td>
  <td width=38 valign=top>
  <p align=center>13,4</p>
  </td>
  <td width=38 valign=top>
  <p align=center>17,3</p>
  </td>
  <td width=38 valign=top>
  <p align=center>2,13</p>
  </td>
  <td width=53 valign=top>
  <p align=center>&lt;0,005</p>
  </td>
  <td width=53 valign=top>
  <p align=center>�&lt;0,005</p>
  </td>
  <td width=44 valign=top>
  <p align=center>0,04</p>
  </td>
  <td width=44 valign=top>
  <p align=center>�0,035</p>
  </td>
 </tr>
</table>

</div>

<SCRIPT>comment(1)</SCRIPT><h4>Experimental procedures</h4>

<h5>Microstructure analysis� </h5>

<p>The Microstructures of the as
received state and the aged state have been examined to the optical microscope
and Scaning Electronic in Transmission. The Profiles of Chromium Molybdenum and
Nickel concentration in� grain
boundaries of the aged state 550�C-80 000h have been established by X
microanalyse on thin blades in STEM. The identification of intergranular
carbides has been done by electronic diffraction and their contents in metallic
elements have been determined by X microanalyse on retorts extractives in
STEM.� </p>

<SCRIPT>comment(1)</SCRIPT><h5>EPR DL tests and criteria of sensitization�
</h5>

<p>A program of tests has been
planned to the basis of the method of the experience plan to samples
corresponding to the� annealed and aged
states. This program deals with the variation of 4 factors, controling the
tests EPR DL, with� two levels each. It
is about the scan rate, (mV/s), the concentration of sulphuric acid ([H<sub>2</sub>SO<sub>4</sub>
]mol/l), the concentration of depassivator ([NH<sub>4</sub>SCN] mol /l), and
the temperature of the electrolyte (�
�C). The choice of levels limits of these factors has been made to the
basis of results from previous investigations, and summarised in the table
1.� </p>

<SCRIPT>comment(1)</SCRIPT><p>The EPR DL tests consist in a
anodic scan of the active domain of the material (-400 mV/ECSs) toward its
passive domain (+300 mV/ECSs) with a return to its potential initial (fig. -1).
The sensitization to the IGC is evaluted then by the report of current
densities Ir / Ia and by� Qr / Qa
expressed in %, in accordance with the previous studies reported in the table
1. The criteria of the sensitization detection to the IGC, retained in this
study,� in agreement with the works of
Y. CETRES and al / 14 /, is� indicated
in� table 3.</p>

<p>&nbsp;</p>

<p><img width=533 height=200
src="./v3p10_files/image002.gif"></p>

<SCRIPT>comment(1)</SCRIPT><p align="center"><b>Fig.-1 EPR DL Method</b></p>

<SCRIPT>comment(1)</SCRIPT><p align="center"><b>Table -3:
Evaluation criteria of sensitization to IGC</b></p>

<div align=center>

<table border=1 cellspacing=0 cellpadding=0>
 <tr>
  <td width=113 valign=top>
  <p align=center>Criteria of
  sensitization</p>
  </td>
  <td width=227 valign=top>
  <p align=center>Annealed state</p>
  </td>
  <td width=227 valign=top>
  <p align=center>Sensitized state</p>
  </td>
 </tr>
 <tr>
  <td width=113 valign=top>
  <p align=center>I<sub>r </sub>/ I<sub>a</sub>
  (%)</p>
  </td>
  <td width=227 valign=top>
  <p align=center>&lt; 0,03</p>
  </td>
  <td width=227 valign=top>
  <p align=center>&gt; 1</p>
  </td>
 </tr>
 <tr>
  <td width=113 valign=top>
  <p align=center>Q<b><sub>r</sub> / </b>Q<b><sub>a </sub></b>(%)</p>
  </td>
  <td width=227 valign=top>
  <p align=center>&lt; 0,05</p>
  </td>
  <td width=227 valign=top>
  <p align=center>&gt; 1</p>
  </td>
 </tr>
</table>

</div>

<SCRIPT>comment(1)</SCRIPT><h3>Results </h3>

<h4>Microstructure analysis of the sensitization to the IGC.� </h4>

<h5>Precipitation of� M<sub>23</sub>C<sub>6</sub>
carbides</h5>

<p>The metallographic Examination by
optical microscope and Scanning Electronic Microscope in Transmission of samples
appropriated of the as received state, reveal an Austenitic structure perfectly
homogenized destitute of intergranular precipitation trace (fig. 2).� </p>

<table border=1 cellspacing=0 cellpadding=0 width=690>
 <tr>
  <td width=345 valign=top>
  <p><img width=335 height=249
  src="./v3p10_files/image004.gif"></p>
  <p>a) structure on massive sample by optical microscope</p>
  </td>
  <td width=345 valign=top>
  <p><img width=335 height=249
  src="./v3p10_files/image006.gif"></p>
  <p>b� structure on thin blade by MET</p>
  </td>
 </tr>
</table>

<SCRIPT>comment(1)</SCRIPT><p align=center><b>Fig.2 Austenitic
structures perfectly homogenized of annealed state</b></p>

<SCRIPT>comment(1)</SCRIPT><p>The examination� of the aged state at 550�C for 80 000h,
shows a discontinuous precipitation of M<sub>23</sub>C<sub>6 </sub>carbides to
grains boundary under shape of particles (plaquettaires) and abundant
intragranular precipitation (fig.3). The analysis done on thin blades, permit
to associate to boundaries of weakly&nbsp; disorientations, a fine precipitation and to boundarys� of strongly disorientations, a coarser precipitation
of M<sub>23</sub>C<sub>6</sub> carbides. The multifaceted morphology,
associated to plans of accolement with the Austenite of type {111},
ensue of the �pitaxie relation� joining
the carbide with one of the two austenitic�
grains (fig.3). To this stadium of observation, the Chromium depletion
consecutive to intergranular precipitation appears by the existence of denuded
zones of intragranular marginals carbides to grain boundaries. (fig.3a).</p>

<table border=0 cellspacing=0 cellpadding=0>
 <tr>
  <td width=364 valign=top>
  <p><img width=359 height=307
  src="./v3p10_files/image008.gif"></p>
  <p align=center>a) View to MES of
  M23C6 carbides precipitations</p>
  </td>
  <td width=383 valign=top>
  <p><img width=301 height=305
  src="./v3p10_files/image010.gif"></p>
  <p>b) View to MET of Intergranular
  precipitation M23C6 carbides</p>
  </td>
 </tr>
</table>

<SCRIPT>comment(1)</SCRIPT><p align=center><b>Fig-3 :
Precipitations of M23C6 carbides after heat treatment at 550�C for 80 000h.</b></p>

<SCRIPT>comment(1)</SCRIPT><p>The X microanalyse on retort
extractive in STEM done on numerous particles of M<sub>23</sub>C<sub>6</sub>
carbides permitted to determine the average concentration of metallic elements
of these carbides without taking account the carbon. Table-4 shows that these carbides, rich in chromium (68,7%), contains other metallic elements
in quantities no negligible as Iron, Nickel and Molybdenum. </p>

<SCRIPT>comment(1)</SCRIPT><p align=center><b>Table-4.�� Concentration in metallic elements of the
determined carbides M23C6 by X-ray microanalysis on retorts extractives in STEM</b></p>

<div align=center>

<table border=1 cellspacing=0 cellpadding=0>
 <tr>
  <td width=88 valign=top>
  <p align=center>Weight %</p>
  </td>
  <td width=88 valign=top>
  <p align=center>Si</p>
  </td>
  <td width=88 valign=top>
  <p align=center>Cr</p>
  </td>
  <td width=88 valign=top>
  <p align=center>Mn</p>
  </td>
  <td width=88 valign=top>
  <p align=center>Fe</p>
  </td>
  <td width=88 valign=top>
  <p align=center>Ni</p>
  </td>
  <td width=88 valign=top>
  <p align=center>Mo</p>
  </td>
 </tr>
 <tr>
  <td width=88 valign=top>
  <p align=center>M<sub>23</sub>C<sub>6</sub></p>
  </td>
  <td width=88 valign=top>
  <p align=center>0,3</p>
  </td>
  <td width=88 valign=top>
  <p align=center>68,7</p>
  </td>
  <td width=88 valign=top>
  <p align=center>1,8</p>
  </td>
  <td width=88 valign=top>
  <p align=center>14,1</p>
  </td>
  <td width=88 valign=top>
  <p align=center>3,3</p>
  </td>
  <td width=88 valign=top>
  <p align=center>11,8</p>
  </td>
 </tr>
</table>

</div>

<SCRIPT>comment(1)</SCRIPT><h5>Cr-depleted zones� </h5>

<p>The involvement of elements as
Chromium and Molybdenum to the formation of intergranular carbides weakens
their content appreciably in the surrounding grain boundaries and contribute to
the formation of Cr-depleted zones responsible of sensitization phenomenon to
the IGC. (fig.4). The profiles of concentration associated� to these zones, established by X-ray
microanalysis in STEM on thin blades, confirm an impoverishment in elements of
alloy entered in the composition of M<sub>23</sub>C<sub>6</sub> carbides,
compensated by local content increasing in Fe and in Ni (fig.5).</p>

<table border=1 cellspacing=0 cellpadding=0>
 <tr>
  <td width=345 valign=top>
  <p><img width=339 height=260
  src="./v3p10_files/image012.gif"></p>
  <p>a). Cr_depleted zons thinned by
  electrolytic polisching. Age state, 550�C for 80 000h </p>
  </td>
  <td width=345 valign=top>
  <p><img width=335 height=259
  src="./v3p10_files/image014.gif"></p>
  <p>b) qualitative Distribution of the Chromium in denuded
  zones. Age state, 550�C for 80 000h </p>
  <p>&nbsp;</p>
  </td>
 </tr>
</table>

<SCRIPT>comment(1)</SCRIPT><p align=center><b>Fig.4�� Cr-depletd zones consecutive to
intergranular precipitation of M23C6 carbides.</b></p>

<p>Age state� 550�C for 80 000h</p>

<p><img width=538 height=307
src="./v3p10_files/image016.gif"></p>

<SCRIPT>comment(1)</SCRIPT><p align=center><b>Fig.5:Profils of
iron, Chromium, Nickel and Molybdenum concentration associated to Cr-depleted
zone visualized in figure 4 . Aged state 550�C for 80 000h</b></p>

<SCRIPT>comment(1)</SCRIPT><h4>Assessment of the sensitization to the IGC by EPRDL test.�� </h4>

<h5>Tests EPR DL� </h5>

<p>The ratios of current density (Ir
/ Ia ) and charge density (Qr /Qa) deducted, done on annealed and aged states
at 550�C for 80 000h� are reported in
table 5, representing the matrix of scheduling, in reduced centered variables
dealed with by the experience plan. In this matrix, 4 factors, with two levels
each, has been combined according to a factorial plan to 24 tests. The
significance of these variables and chosen level values limits reasonably, are
given in table 6.� </p>

<SCRIPT>comment(1)</SCRIPT><p align="center"><b>Table-5. Matrix of scheduling
in reduced variables and results of EPR DL tests.</b> </p>

<div align=center>

<table border=1 cellspacing=0 cellpadding=0 width=625>
 <tr>
  <td width=57 valign=top>
  <p align=center>Test<br>
  Number</p>
  </td>
  <td width=43 valign=top>
  <p align=center>X<sub>1</sub></p>
  </td>
  <td width=58 valign=top>
  <p align=center>X<sub>2</sub></p>
  </td>
  <td width=74 valign=top>
  <p align=center>X<sub>3</sub></p>
  </td>
  <td width=50 valign=top>
  <p align=center>X<sub>4</sub></p>
  </td>
  <td width=106 colspan=2 valign=top>
  <p align=center><b>Annealed state</b></p>
  </td>
  <td width=236 colspan=4 valign=top>
  <p align=center><b>Aged state</b></p>
  </td>
 </tr>
 <tr>
  <td width=57 valign=top>
  <p align=center>&nbsp;</p>
  </td>
  <td width=43 valign=top>
  <p align=center>dE/dt</p>
  </td>
  <td width=58 valign=top>
  <p align=center>�[H<sub>2</sub>S0<sub>4</sub> ]</p>
  </td>
  <td width=74 valign=top>
  <p align=center>[NH<sub>4</sub>SCN]</p>
  </td>
  <td width=50 valign=top>
  <p align=center>Temp.</p>
  </td>
  <td width=54 valign=top>
  <p align=center>I<sub>r</sub> / I<sub>a</sub></p>
  <p align=center>(%)</p>
  </td>
  <td width=52 valign=top>
  <p align=center>Q<sub>r</sub> /Q<sub>a</sub>
  </p>
  <p align=center>(%)</p>
  </td>
  <td width=66 valign=top>
  <p align=center>I<sub>a</sub> <br>
  mA/cm<sup>2</sup></p>
  </td>
  <td width=57 valign=top>
  <p align=center>I<sub>r</sub></p>
  <p align=center>mA/cm<sup>2</sup></p>
  </td>
  <td width=57 valign=top>
  <p align=center>�I<sub>r</sub> / I<sub>a</sub></p>
  <p align=center>(%)</p>
  </td>
  <td width=57 valign=top>
  <p align=center>Q<sub>r</sub> /Q<sub>a</sub>
  </p>
  <p align=center>(%)</p>
  </td>
 </tr>
 <tr>
  <td width=57 valign=top>
  <p align=center>1</p>
  </td>
  <td width=43 valign=top>
  <p align=center>-1</p>
  </td>
  <td width=58 valign=top>
  <p align=center>-1</p>
  </td>
  <td width=74 valign=top>
  <p align=center>-1</p>
  </td>
  <td width=50 valign=top>
  <p align=center>-1</p>
  </td>
  <td width=54 valign=top>
  <p align=center>0</p>
  </td>
  <td width=52 valign=top>
  <p align=center>0</p>
  </td>
  <td width=66 valign=top>
  <p align=center>0,320</p>
  </td>
  <td width=57 valign=top>
  <p align=center>0,254</p>
  </td>
  <td width=57 valign=top>
  <p align=center>79,3</p>
  </td>
  <td width=57 valign=top>
  <p align=center>71,95</p>
  </td>
 </tr>
 <tr>
  <td width=57 valign=top>
  <p align=center>2</p>
  </td>
  <td width=43 valign=top>
  <p align=center>+1</p>
  </td>
  <td width=58 valign=top>
  <p align=center>-1</p>
  </td>
  <td width=74 valign=top>
  <p align=center>-1</p>
  </td>
  <td width=50 valign=top>
  <p align=center>-1</p>
  </td>
  <td width=54 valign=top>
  <p align=center>0</p>
  </td>
  <td width=52 valign=top>
  <p align=center>0</p>
  </td>
  <td width=66 valign=top>
  <p align=center>1,149</p>
  </td>
  <td width=57 valign=top>
  <p align=center>0,105</p>
  </td>
  <td width=57 valign=top>
  <p align=center>9,1</p>
  </td>
  <td width=57 valign=top>
  <p align=center>15</p>
  </td>
 </tr>
 <tr>
  <td width=57 valign=top>
  <p align=center>3</p>
  </td>
  <td width=43 valign=top>
  <p align=center>-1</p>
  </td>
  <td width=58 valign=top>
  <p align=center>+1</p>
  </td>
  <td width=74 valign=top>
  <p align=center>-1</p>
  </td>
  <td width=50 valign=top>
  <p align=center>-1</p>
  </td>
  <td width=54 valign=top>
  <p align=center>0</p>
  </td>
  <td width=52 valign=top>
  <p align=center>0</p>
  </td>
  <td width=66 valign=top>
  <p align=center>5,237</p>
  </td>
  <td width=57 valign=top>
  <p align=center>3,435</p>
  </td>
  <td width=57 valign=top>
  <p align=center>65,6</p>
  </td>
  <td width=57 valign=top>
  <p align=center>53,65</p>
  </td>
 </tr>
 <tr>
  <td width=57 valign=top>
  <p align=center>4</p>
  </td>
  <td width=43 valign=top>
  <p align=center>+1</p>
  </td>
  <td width=58 valign=top>
  <p align=center>+1</p>
  </td>
  <td width=74 valign=top>
  <p align=center>-1</p>
  </td>
  <td width=50 valign=top>
  <p align=center>-1</p>
  </td>
  <td width=54 valign=top>
  <p align=center>0</p>
  </td>
  <td width=52 valign=top>
  <p align=center>0</p>
  </td>
  <td width=66 valign=top>
  <p align=center>8,033</p>
  </td>
  <td width=57 valign=top>
  <p align=center>1,267</p>
  </td>
  <td width=57 valign=top>
  <p align=center>15,8</p>
  </td>
  <td width=57 valign=top>
  <p align=center>28,57</p>
  </td>
 </tr>
 <tr>
  <td width=57 valign=top>
  <p align=center>5</p>
  </td>
  <td width=43 valign=top>
  <p align=center>-1</p>
  </td>
  <td width=58 valign=top>
  <p align=center>-1</p>
  </td>
  <td width=74 valign=top>
  <p align=center>+1</p>
  </td>
  <td width=50 valign=top>
  <p align=center>-1</p>
  </td>
  <td width=54 valign=top>
  <p align=center>0</p>
  </td>
  <td width=52 valign=top>
  <p align=center>0</p>
  </td>
  <td width=66 valign=top>
  <p align=center>42,28</p>
  </td>
  <td width=57 valign=top>
  <p align=center>10,17</p>
  </td>
  <td width=57 valign=top>
  <p align=center>24,07</p>
  </td>
  <td width=57 valign=top>
  <p align=center>21,68</p>
  </td>
 </tr>
 <tr>
  <td width=57 valign=top>
  <p align=center>6</p>
  </td>
  <td width=43 valign=top>
  <p align=center>+1</p>
  </td>
  <td width=58 valign=top>
  <p align=center>-1</p>
  </td>
  <td width=74 valign=top>
  <p align=center>+1</p>
  </td>
  <td width=50 valign=top>
  <p align=center>-1</p>
  </td>
  <td width=54 valign=top>
  <p align=center>0</p>
  </td>
  <td width=52 valign=top>
  <p align=center>0</p>
  </td>
  <td width=66 valign=top>
  <p align=center>32,14</p>
  </td>
  <td width=57 valign=top>
  <p align=center>4,432</p>
  </td>
  <td width=57 valign=top>
  <p align=center>13,78</p>
  </td>
  <td width=57 valign=top>
  <p align=center>31,98</p>
  </td>
 </tr>
 <tr>
  <td width=57 valign=top>
  <p align=center>7</p>
  </td>
  <td width=43 valign=top>
  <p align=center>-1</p>
  </td>
  <td width=58 valign=top>
  <p align=center>+1</p>
  </td>
  <td width=74 valign=top>
  <p align=center>+1</p>
  </td>
  <td width=50 valign=top>
  <p align=center>-1</p>
  </td>
  <td width=54 valign=top>
  <p align=center>0</p>
  </td>
  <td width=52 valign=top>
  <p align=center>0</p>
  </td>
  <td width=66 valign=top>
  <p align=center>162,4</p>
  </td>
  <td width=57 valign=top>
  <p align=center>56,89</p>
  </td>
  <td width=57 valign=top>
  <p align=center>35,03</p>
  </td>
  <td width=57 valign=top>
  <p align=center>34,65</p>
  </td>
 </tr>
 <tr>
  <td width=57 valign=top>
  <p align=center>8</p>
  </td>
  <td width=43 valign=top>
  <p align=center>+1</p>
  </td>
  <td width=58 valign=top>
  <p align=center>+1</p>
  </td>
  <td width=74 valign=top>
  <p align=center>+1</p>
  </td>
  <td width=50 valign=top>
  <p align=center>-1</p>
  </td>
  <td width=54 valign=top>
  <p align=center>0</p>
  </td>
  <td width=52 valign=top>
  <p align=center>0</p>
  </td>
  <td width=66 valign=top>
  <p align=center>250,2</p>
  </td>
  <td width=57 valign=top>
  <p align=center>45,82</p>
  </td>
  <td width=57 valign=top>
  <p align=center>18,31</p>
  </td>
  <td width=57 valign=top>
  <p align=center>18,70</p>
  </td>
 </tr>
 <tr>
  <td width=57 valign=top>
  <p align=center>9</p>
  </td>
  <td width=43 valign=top>
  <p align=center>-1</p>
  </td>
  <td width=58 valign=top>
  <p align=center>-1</p>
  </td>
  <td width=74 valign=top>
  <p align=center>-1</p>
  </td>
  <td width=50 valign=top>
  <p align=center>+1</p>
  </td>
  <td width=54 valign=top>
  <p align=center>0</p>
  </td>
  <td width=52 valign=top>
  <p align=center>0</p>
  </td>
  <td width=66 valign=top>
  <p align=center>2,02</p>
  </td>
  <td width=57 valign=top>
  <p align=center>0,340</p>
  </td>
  <td width=57 valign=top>
  <p align=center>16,83</p>
  </td>
  <td width=57 valign=top>
  <p align=center>23,33</p>
  </td>
 </tr>
 <tr>
  <td width=57 valign=top>
  <p align=center>10</p>
  </td>
  <td width=43 valign=top>
  <p align=center>+1</p>
  </td>
  <td width=58 valign=top>
  <p align=center>-1</p>
  </td>
  <td width=74 valign=top>
  <p align=center>-1</p>
  </td>
  <td width=50 valign=top>
  <p align=center>+1</p>
  </td>
  <td width=54 valign=top>
  <p align=center>0</p>
  </td>
  <td width=52 valign=top>
  <p align=center>0</p>
  </td>
  <td width=66 valign=top>
  <p align=center>0,558</p>
  </td>
  <td width=57 valign=top>
  <p align=center>0,186</p>
  </td>
  <td width=57 valign=top>
  <p align=center>33,33</p>
  </td>
  <td width=57 valign=top>
  <p align=center>33,33</p>
  </td>
 </tr>
 <tr>
  <td width=57 valign=top>
  <p align=center>11</p>
  </td>
  <td width=43 valign=top>
  <p align=center>-1</p>
  </td>
  <td width=58 valign=top>
  <p align=center>+1</p>
  </td>
  <td width=74 valign=top>
  <p align=center>-1</p>
  </td>
  <td width=50 valign=top>
  <p align=center>+1</p>
  </td>
  <td width=54 valign=top>
  <p align=center>0,04</p>
  </td>
  <td width=52 valign=top>
  <p align=center>0</p>
  </td>
  <td width=66 valign=top>
  <p align=center>2,892</p>
  </td>
  <td width=57 valign=top>
  <p align=center>1,071</p>
  </td>
  <td width=57 valign=top>
  <p align=center>37,03</p>
  </td>
  <td width=57 valign=top>
  <p align=center>45,45</p>
  </td>
 </tr>
 <tr>
  <td width=57 valign=top>
  <p align=center>12</p>
  </td>
  <td width=43 valign=top>
  <p align=center>+1</p>
  </td>
  <td width=58 valign=top>
  <p align=center>+1</p>
  </td>
  <td width=74 valign=top>
  <p align=center>-1</p>
  </td>
  <td width=50 valign=top>
  <p align=center>+1</p>
  </td>
  <td width=54 valign=top>
  <p align=center>0</p>
  </td>
  <td width=52 valign=top>
  <p align=center>0</p>
  </td>
  <td width=66 valign=top>
  <p align=center>6,145</p>
  </td>
  <td width=57 valign=top>
  <p align=center>1,584</p>
  </td>
  <td width=57 valign=top>
  <p align=center>25,77</p>
  </td>
  <td width=57 valign=top>
  <p align=center>30</p>
  </td>
 </tr>
 <tr>
  <td width=57 valign=top>
  <p align=center>13</p>
  </td>
  <td width=43 valign=top>
  <p align=center>-1</p>
  </td>
  <td width=58 valign=top>
  <p align=center>-1</p>
  </td>
  <td width=74 valign=top>
  <p align=center>+1</p>
  </td>
  <td width=50 valign=top>
  <p align=center>+1</p>
  </td>
  <td width=54 valign=top>
  <p align=center>0</p>
  </td>
  <td width=52 valign=top>
  <p align=center>0</p>
  </td>
  <td width=66 valign=top>
  <p align=center>69,88</p>
  </td>
  <td width=57 valign=top>
  <p align=center>8,68</p>
  </td>
  <td width=57 valign=top>
  <p align=center>12,42</p>
  </td>
  <td width=57 valign=top>
  <p align=center>9,89</p>
  </td>
 </tr>
 <tr>
  <td width=57 valign=top>
  <p align=center>14</p>
  </td>
  <td width=43 valign=top>
  <p align=center>+1</p>
  </td>
  <td width=58 valign=top>
  <p align=center>-1</p>
  </td>
  <td width=74 valign=top>
  <p align=center>+1</p>
  </td>
  <td width=50 valign=top>
  <p align=center>+1</p>
  </td>
  <td width=54 valign=top>
  <p align=center>0</p>
  </td>
  <td width=52 valign=top>
  <p align=center>0</p>
  </td>
  <td width=66 valign=top>
  <p align=center>73,63</p>
  </td>
  <td width=57 valign=top>
  <p align=center>6,832</p>
  </td>
  <td width=57 valign=top>
  <p align=center>9,27</p>
  </td>
  <td width=57 valign=top>
  <p align=center>8,81</p>
  </td>
 </tr>
 <tr>
  <td width=57 valign=top>
  <p align=center>15</p>
  </td>
  <td width=43 valign=top>
  <p align=center>-1</p>
  </td>
  <td width=58 valign=top>
  <p align=center>+1</p>
  </td>
  <td width=74 valign=top>
  <p align=center>+1</p>
  </td>
  <td width=50 valign=top>
  <p align=center>+1</p>
  </td>
  <td width=54 valign=top>
  <p align=center>0,02</p>
  </td>
  <td width=52 valign=top>
  <p align=center>0</p>
  </td>
  <td width=66 valign=top>
  <p align=center>143,6</p>
  </td>
  <td width=57 valign=top>
  <p align=center>21,66</p>
  </td>
  <td width=57 valign=top>
  <p align=center>15,08</p>
  </td>
  <td width=57 valign=top>
  <p align=center>20,04</p>
  </td>
 </tr>
 <tr>
  <td width=57 valign=top>
  <p align=center>16</p>
  </td>
  <td width=43 valign=top>
  <p align=center>+1</p>
  </td>
  <td width=58 valign=top>
  <p align=center>+1</p>
  </td>
  <td width=74 valign=top>
  <p align=center>+1</p>
  </td>
  <td width=50 valign=top>
  <p align=center>+1</p>
  </td>
  <td width=54 valign=top>
  <p align=center>0</p>
  </td>
  <td width=52 valign=top>
  <p align=center>0</p>
  </td>
  <td width=66 valign=top>
  <p align=center>157,0</p>
  </td>
  <td width=57 valign=top>
  <p align=center>14,44</p>
  </td>
  <td width=57 valign=top>
  <p align=center>9,19</p>
  </td>
  <td width=57 valign=top>
  <p align=center>14,04</p>
  </td>
 </tr>
</table>

</div>

<SCRIPT>comment(1)</SCRIPT><p align=center><b>Table -6 Levels of
factors controlling the EPR DL tests</b></p>

<div align=center>

<table border=1 cellspacing=0 cellpadding=0>
 <tr>
  <td width=180 valign=top>
  <p>reduced variables&nbsp;</p>
  </td>
  <td width=76 valign=top>
  <p><b>X<sub>1</sub></b>
  (mV/s)</p>
  </td>
  <td width=76 valign=top>
  <p><b>X<sub>2</sub></b>
  (mol/l)</p>
  </td>
  <td width=85 valign=top>
  <p><b>X<sub>3</sub></b>
  (mol/l)</p>
  </td>
  <td width=85 valign=top>
  <p><b>X<sub>4</sub></b>
  (�C)</p>
  </td>
 </tr>
 <tr>
  <td width=180 valign=top>
  <p>level -1</p>
  </td>
  <td width=76 valign=top>
  <p>0,5</p>
  </td>
  <td width=76 valign=top>
  <p>0,1</p>
  </td>
  <td width=85 valign=top>
  <p>0</p>
  </td>
  <td width=85 valign=top>
  <p>25</p>
  </td>
 </tr>
 <tr>
  <td width=180 valign=top>
  <p>level +1</p>
  </td>
  <td width=76 valign=top>
  <p>5 </p>
  </td>
  <td width=76 valign=top>
  <p>4 </p>
  </td>
  <td width=85 valign=top>
  <p>0,1 </p>
  </td>
  <td width=85 valign=top>
  <p>40</p>
  </td>
 </tr>
</table>

</div>

<SCRIPT>comment(1)</SCRIPT><h5>Optimal Conditions� </h5>

<p>Two operative conditions of
assessment of the sensitization to the IGC by the EPR DL tests distinguish
themselves distinctly to the basis of criteria fixed previously. They are
reported in table 7.� </p>

<SCRIPT>comment(1)</SCRIPT><p align="center"><b>Table 7. Optimal
operative conditions of the sensitization to IGC by EPR DL tests</b></p>

<div align="center">
  <center>

<table border=1 cellspacing=0 cellpadding=0>
 <tr>
  <td width=90 valign=top>
  <p align=center>Operative
  conditions</p>
  </td>
  <td width=47 valign=top>
  <p align=center>dE/dt<br>
  mV/s</p>
  </td>
  <td width=57 valign=top>
  <p align=center>[H<sub>2</sub>SO<sub>4</sub>]<br>
  mol/l</p>
  </td>
  <td width=76 valign=top>
  <p align=center>[NH<sub>4</sub>SCN]<br>
  mol/l</p>
  </td>
  <td width=57 valign=top>
  <p align=center>Temp.<br>
  �C</p>
  </td>
  <td width=246 colspan=4 valign=top>
  <p>EPR DL answer</p>
  </td>
 </tr>
 <tr>
  <td width=90 valign=top>
  <p align=center>&nbsp;</p>
  </td>
  <td width=47 valign=top>
  <p align=center>&nbsp;</p>
  </td>
  <td width=57 valign=top>
  <p align=center>&nbsp;</p>
  </td>
  <td width=76 valign=top>
  <p align=center>&nbsp;</p>
  </td>
  <td width=57 valign=top>
  <p align=center>&nbsp;</p>
  </td>
  <td width=123 colspan=2 valign=top>
  <p align=center>Aged state</p>
  </td>
  <td width=123 colspan=2 valign=top>
  <p align=center>Annealed state</p>
  </td>
 </tr>
 <tr>
  <td width=90 valign=top>
  <p align=center>&nbsp;</p>
  </td>
  <td width=47 valign=top>
  <p align=center>&nbsp;</p>
  </td>
  <td width=57 valign=top>
  <p align=center>&nbsp;</p>
  </td>
  <td width=76 valign=top>
  <p align=center>&nbsp;</p>
  </td>
  <td width=57 valign=top>
  <p align=center>&nbsp;</p>
  </td>
  <td width=57 valign=top>
  <p align=center>I<sub>r</sub>/I<sub>a</sub></p>
  </td>
  <td width=66 valign=top>
  <p align=center>Q<sub>r</sub>/Q<sub>a</sub></p>
  </td>
  <td width=66 valign=top>
  <p align=center>I<sub>r</sub>/I<sub>a</sub></p>
  </td>
  <td width=57 valign=top>
  <p align=center>Q<sub>r</sub>/Q<sub>a</sub></p>
  </td>
 </tr>
 <tr>
  <td width=90 valign=top>
  <p align=center>Condition 1</p>
  </td>
  <td width=47 valign=top>
  <p align=center>0,5</p>
  </td>
  <td width=57 valign=top>
  <p align=center>0,1</p>
  </td>
  <td width=76 valign=top>
  <p align=center>0</p>
  </td>
  <td width=57 valign=top>
  <p align=center>25</p>
  </td>
  <td width=57 valign=top>
  <p align=center>79,3</p>
  </td>
  <td width=66 valign=top>
  <p align=center>71,95</p>
  </td>
  <td width=66 valign=top>
  <p align=center>0</p>
  </td>
  <td width=57 valign=top>
  <p align=center>0</p>
  </td>
 </tr>
 <tr>
  <td width=90 valign=top>
  <p align=center>Condition 2</p>
  </td>
  <td width=47 valign=top>
  <p align=center>0,5</p>
  </td>
  <td width=57 valign=top>
  <p align=center>4</p>
  </td>
  <td width=76 valign=top>
  <p align=center>0</p>
  </td>
  <td width=57 valign=top>
  <p align=center>25</p>
  </td>
  <td width=57 valign=top>
  <p align=center>65,6</p>
  </td>
  <td width=66 valign=top>
  <p align=center>53,65</p>
  </td>
  <td width=66 valign=top>
  <p align=center>0</p>
  </td>
  <td width=57 valign=top>
  <p align=center>0</p>
  </td>
 </tr>
</table>

  </center>
</div>

<SCRIPT>comment(1)</SCRIPT><h5>Model proposed</h5>

<p>The Effects of factors and their
interactions, reported in the table 8, permit to evalue the answer of the test
EPR DL according to the reduced variables X1, X2, X3 and X4, corresponding to
influence factors dE/dt, [H<sub>2</sub>SO<sub>4</sub>], [NH<sub>4</sub>SCN] and
temperature in �C, according to a type model:</p>

<p>Y<sub>1</sub>(I<sub>r</sub> /I<sub>a</sub>) = 26,244� - 9,42X<sub>1</sub>� - 9,1X<sub>3</sub> - 6,4 X<sub>4</sub>� + 8,95 X<sub>1</sub> X<sub>4</sub> +4,919 X<sub>1</sub>
X<sub>3</sub> � 6,7 X<sub>1</sub>X<sub>3</sub>X<sub>4 </sub>�- 2,03 X<sub>2</sub>X<sub>3</sub>X<sub>4�
</sub>� 2,78 X<sub>1</sub>X<sub>2</sub>X<sub>4</sub> + 3,24 X<sub>1</sub>X<sub>2</sub>X<sub>3</sub>X<sub>4</sub>. </p>

<p>Y<sub>2</sub>(Q<sub>r</sub>/Q<sub>a</sub>)
= 28,81 �6,26 X<sub>1</sub> �8,84 X<sub>3</sub> � 5,70 X<sub>4</sub> + 4,67 X<sub>1</sub>X<sub>3</sub>
+ 4,69 X<sub>1</sub>X<sub>4</sub> +2,45 X<sub>2</sub>X<sub>4</sub> � 2,34 X<sub>1</sub>X<sub>2</sub>X<sub>3</sub>
���� 4,87 X<sub>1</sub>X<sub>3</sub>X<sub>4</sub>
�2,24 X<sub>1</sub>X<sub>2</sub>X<sub>4</sub> +4,91X<sub>1</sub>X<sub>2</sub>X<sub>3</sub>X<sub>4</sub>
. </p>

<SCRIPT>comment(1)</SCRIPT><p align="center"><b>Table 8- Effects and
interactions</b></p>

<div align="center">
  <center>

<table border=1 cellspacing=0 cellpadding=0>
 <tr>
  <td width=42 valign=top>
  <p>&nbsp;</p>
  </td>
  <td width=42 valign=top>
  <p>M</p>
  </td>
  <td width=42 valign=top>
  <p>1</p>
  </td>
  <td width=42 valign=top>
  <p>2</p>
  </td>
  <td width=42 valign=top>
  <p>3</p>
  </td>
  <td width=42 valign=top>
  <p>4</p>
  </td>
  <td width=42 valign=top>
  <p>12</p>
  </td>
  <td width=42 valign=top>
  <p>13</p>
  </td>
  <td width=42 valign=top>
  <p>14</p>
  </td>
  <td width=42 valign=top>
  <p>23</p>
  </td>
  <td width=42 valign=top>
  <p>24</p>
  </td>
  <td width=42 valign=top>
  <p>34</p>
  </td>
  <td width=42 valign=top>
  <p>123</p>
  </td>
  <td width=42 valign=top>
  <p>124</p>
  </td>
  <td width=42 valign=top>
  <p>134</p>
  </td>
  <td width=42 valign=top>
  <p>234</p>
  </td>
  <td width=42 valign=top>
  <p>1234</p>
  </td>
 </tr>
 <tr>
  <td width=42 valign=top>
  <p>Y<sub>1</sub></p>
  </td>
  <td width=42 valign=top>
  <p>26,24</p>
  </td>
  <td width=42 valign=top>
  <p>-9,42</p>
  </td>
  <td width=42 valign=top>
  <p>+1,48</p>
  </td>
  <td width=42 valign=top>
  <p>-9,1</p>
  </td>
  <td width=42 valign=top>
  <p>-6,4</p>
  </td>
  <td width=42 valign=top>
  <p>-1,03</p>
  </td>
  <td width=42 valign=top>
  <p>+4,919</p>
  </td>
  <td width=42 valign=top>
  <p>+8,95</p>
  </td>
  <td width=42 valign=top>
  <p>+0,776</p>
  </td>
  <td width=42 valign=top>
  <p>+0,42</p>
  </td>
  <td width=42 valign=top>
  <p>+0,725</p>
  </td>
  <td width=42 valign=top>
  <p>-0,11</p>
  </td>
  <td width=42 valign=top>
  <p>-2,78</p>
  </td>
  <td width=42 valign=top>
  <p>-6,70</p>
  </td>
  <td width=42 valign=top>
  <p>-2,03</p>
  </td>
  <td width=42 valign=top>
  <p>+3,24</p>
  </td>
 </tr>
 <tr>
  <td width=42 valign=top>
  <p>Y<sub>2</sub></p>
  </td>
  <td width=42 valign=top>
  <p>28,81</p>
  </td>
  <td width=42 valign=top>
  <p>-6,26</p>
  </td>
  <td width=42 valign=top>
  <p>1,81</p>
  </td>
  <td width=42 valign=top>
  <p>-8,84</p>
  </td>
  <td width=42 valign=top>
  <p>-5,70</p>
  </td>
  <td width=42 valign=top>
  <p>-1,54</p>
  </td>
  <td width=42 valign=top>
  <p>+4,67</p>
  </td>
  <td width=42 valign=top>
  <p>+4,69</p>
  </td>
  <td width=42 valign=top>
  <p>0,06</p>
  </td>
  <td width=42 valign=top>
  <p>+2,45</p>
  </td>
  <td width=42 valign=top>
  <p>-1,07</p>
  </td>
  <td width=42 valign=top>
  <p>-2,34</p>
  </td>
  <td width=42 valign=top>
  <p>-2,24</p>
  </td>
  <td width=42 valign=top>
  <p>-4,87</p>
  </td>
  <td width=42 valign=top>
  <p>+0,38</p>
  </td>
  <td width=42 valign=top>
  <p>+4,91</p>
  </td>
 </tr>
</table>

  </center>
</div>

<SCRIPT>comment(1)</SCRIPT><p>This model permits to quantify
the operative condition effect on the answer of the EPR DL test evaluating the
sensitization of Austenitic Stainless Steel structure to IGC. The exploitation
of this model requires a passage of the real variable (xi) to the variable
centered r�duite (Xi) by the relation,�
Xi = xi -x<sub>0</sub> / step.� </p>

<SCRIPT>comment(1)</SCRIPT><p>With:�� -�
xi is the measured current variable in usual units: mV/s for the scan
rate������ �for example.� </p>

<p>-� x<sub>0</sub> are the value (measured in
usual units) that takes the current variable to�� </p>

<p>�� the��
middle of domain ,at chosen point like origin for the reduced�� centered variable.�� </p>

<p>����������������� -The step is the value corresponding to the unit
of the reduced centered variable</p>

<p>������������������ measured in units of origin.� </p>

<SCRIPT>comment(1)</SCRIPT><h5>Validation of the model� </h5>

<p>We achieved tests at the center
of experimental domain corresponding to the average studied factor (dE/dt =2,75
mV/s, [H2SO4] = 2,05 M, [NH4SCN] =0,05M, t�C=32,5).� </p>

<SCRIPT>comment(1)</SCRIPT><p>The measured average answer (M.A)
equals to 27,63% is� quite comparable to
the calculated average answer (C.A) equals to 26,244% for Ir/Ia.� This result appears satisfactory for The
validity of a linear model <sup>28,29,30,31</sup>� (<u>fig. 8</u>). Moreover, This slight difference observed
between the two� extents can be
explained by the natural variance of the used electro-chemical process that is
appreciable to a more elevated number of parameters. In our study, we kept, in
accordance with data of the litt�rature<sup>2-21,24-27</sup>, the 4 main
factors that act on the sensitivity of the EPR test. Other parameters like the
potential of passivation, the time of passivation, the polisching, the size of
grains, the aeration etc, can have an influence on the measure of currents
during the anodic and reactivation scan and therefore on the criteria Ir / Ia
or Qr/Qa.� </p>

<table cellpadding=0 cellspacing=0>
 <tr>
  <td width=122 height=61 align=left valign=top bgcolor=white>
  <table cellpadding=0 cellspacing=0 width="100%">
   <tr>
    <td>
    <div>
    <p>I<sub>r </sub>/ I<sub>a</sub> =27,63</p>
    <p>Q<sub>r </sub>/Q<sub>a</sub> =</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p><i>&nbsp;</i></p>
    </div></td>
   </tr>
  </table>
  </span>&nbsp;</td>
 </tr>
</table>

<table cellpadding=0 cellspacing=0>
 <tr>
  <td width=228 height=118 align=left valign=top bgcolor=white>
  <table cellpadding=0 cellspacing=0 width="100%">
   <tr>
    <td>
    <div>
    <p>Operative conditions:</p>
    <p>-dE/dt =2,5 mV/s</p>
    <p>-[H<sub>2</sub>SO<sub>4</sub>] =2,05mol/l</p>
    <p>-[NH<sub>4</sub>SCN] =0,05 mol/l</p>
    <p>-T�C = 32,5</p>
    <p>&nbsp;</p>
    </div></td>
   </tr>
  </table>
  </span>&nbsp;</td>
 </tr>
</table>

<p align="center">

<img width=360 height=379
src="./v3p10_files/image018.gif">

<SCRIPT>comment(1)</SCRIPT><p align="center"><b>Figure 8 validation
model test of Aged state at 550�C for 80 000h</b> </p>

<SCRIPT>comment(1)</SCRIPT><p>Otherwise, some authors explain
that the validity of the mathematical linear model , in accordance with data of
the litt�rature<sup>28,29,30</sup>, doesn't present the same precision in all
the experimental domain. It is most precise at�
the central point, what is in agreement with our results. In the same
order of ideas, and on both sides� of
the experimental domain, the same auteurs<sup>28,29,30</sup> note that the
linear model is not precise and difference appears between the measured and
calculated answers. To this consideration, 2 tests have been achieved to
confirm these observations and have been summarized in the table 9.</p>

<SCRIPT>comment(1)</SCRIPT><p align=center><b>Table 9. Tests
carried out on both sides the center of the experimental domain</b> </p>

<div align="center">
  <center>

<table border=1 cellspacing=0 cellpadding=0>
 <tr>
  <td width=98 valign=top>
  <p>Test N�&nbsp;</p>
  </td>
  <td width=98 valign=top>
  <p>dE/dt</p>
  </td>
  <td width=98 valign=top>
  <p>[H<sub>2</sub>SO<sub>4</sub>]</p>
  </td>
  <td width=98 valign=top>
  <p>[NH<sub>4</sub>SCN]</p>
  </td>
  <td width=98 valign=top>
  <p>Temperature</p>
  </td>
  <td width=98 valign=top>
  <p>Y<sub>exp</sub> </p>
  </td>
  <td width=98 valign=top>
  <p>Y<sub>cal</sub> </p>
  </td>
 </tr>
 <tr>
  <td width=98 valign=top>
  <p>Test 1</p>
  </td>
  <td width=98 valign=top>
  <p>1 mV/s</p>
  </td>
  <td width=98 valign=top>
  <p>1 M</p>
  </td>
  <td width=98 valign=top>
  <p>0,03 M</p>
  </td>
  <td width=98 valign=top>
  <p>30 �C</p>
  </td>
  <td width=98 valign=top>
  <p>35,75</p>
  </td>
  <td width=98 valign=top>
  <p>44,157</p>
  </td>
 </tr>
 <tr>
  <td width=98 valign=top>
  <p>Test 2</p>
  </td>
  <td width=98 valign=top>
  <p>2,5 mV/s</p>
  </td>
  <td width=98 valign=top>
  <p>3 M</p>
  </td>
  <td width=98 valign=top>
  <p>0,06 M</p>
  </td>
  <td width=98 valign=top>
  <p>40 �C</p>
  </td>
  <td width=98 valign=top>
  <p>11,88</p>
  </td>
  <td width=98 valign=top>
  <p>18</p>
  </td>
 </tr>
</table>

  </center>
</div>

<SCRIPT>comment(1)</SCRIPT><p>On the other hand, The
calculation of residuals (Y<sub>exp</sub> - Y<sub>cal</sub>) permits us to
verify that there are not any mistakes in the relative coefficient effects
calculation of factors and their interactions having permitted the writing of
the model proposed. One can also verify, as emphasised by certain authors <sup>29,30</sup>,
that the sum of residuals is appreciably equal to zero, either 0,495 in this
case, as indicated� the residual
calculation reported in table 10.</p>

<SCRIPT>comment(1)</SCRIPT><p align=center><b>Table 10. Residuals
calculation</b></p>

<div align="center">
  <center>

<table border=1 cellspacing=0 cellpadding=0>
 <tr>
  <td width=41 valign=top>
  <p>N<sup>)</sup> ess.</p>
  </td>
  <td width=41 valign=top>
  <p>1</p>
  </td>
  <td width=41 valign=top>
  <p>2</p>
  </td>
  <td width=41 valign=top>
  <p>3</p>
  </td>
  <td width=41 valign=top>
  <p>4</p>
  </td>
  <td width=41 valign=top>
  <p>5</p>
  </td>
  <td width=41 valign=top>
  <p>6</p>
  </td>
  <td width=41 valign=top>
  <p>7</p>
  </td>
  <td width=41 valign=top>
  <p>8</p>
  </td>
  <td width=41 valign=top>
  <p>9</p>
  </td>
  <td width=41 valign=top>
  <p>10</p>
  </td>
  <td width=41 valign=top>
  <p>11</p>
  </td>
  <td width=41 valign=top>
  <p>12</p>
  </td>
  <td width=41 valign=top>
  <p>13</p>
  </td>
  <td width=41 valign=top>
  <p>14</p>
  </td>
  <td width=41 valign=top>
  <p>15</p>
  </td>
  <td width=41 valign=top>
  <p>16</p>
  </td>
 </tr>
 <tr>
  <td width=41 valign=top>
  <p>Y<sub>ca</sub><sub>l</sub></p>
  </td>
  <td width=41 valign=top>
  <p>79,3</p>
  </td>
  <td width=41 valign=top>
  <p>9,1</p>
  </td>
  <td width=41 valign=top>
  <p>65,6</p>
  </td>
  <td width=41 valign=top>
  <p>15,8</p>
  </td>
  <td width=41 valign=top>
  <p>24,07</p>
  </td>
  <td width=41 valign=top>
  <p>13,78</p>
  </td>
  <td width=41 valign=top>
  <p>35,03</p>
  </td>
  <td width=41 valign=top>
  <p>18,31</p>
  </td>
  <td width=41 valign=top>
  <p>16,83</p>
  </td>
  <td width=41 valign=top>
  <p>33,33</p>
  </td>
  <td width=41 valign=top>
  <p>37,03</p>
  </td>
  <td width=41 valign=top>
  <p>25,77</p>
  </td>
  <td width=41 valign=top>
  <p>12,42</p>
  </td>
  <td width=41 valign=top>
  <p>9,27</p>
  </td>
  <td width=41 valign=top>
  <p>15,08</p>
  </td>
  <td width=41 valign=top>
  <p>9,19</p>
  </td>
 </tr>
 <tr>
  <td width=41 valign=top>
  <p>Y<sub>exp</sub></p>
  </td>
  <td width=41 valign=top>
  <p>79,28</p>
  </td>
  <td width=41 valign=top>
  <p>7,76</p>
  </td>
  <td width=41 valign=top>
  <p>63,68</p>
  </td>
  <td width=41 valign=top>
  <p>15,74</p>
  </td>
  <td width=41 valign=top>
  <p>27,80</p>
  </td>
  <td width=41 valign=top>
  <p>15,22</p>
  </td>
  <td width=41 valign=top>
  <p>32,78</p>
  </td>
  <td width=41 valign=top>
  <p>18,36</p>
  </td>
  <td width=41 valign=top>
  <p>19,58</p>
  </td>
  <td width=41 valign=top>
  <p>34,24</p>
  </td>
  <td width=41 valign=top>
  <p>35,68</p>
  </td>
  <td width=41 valign=top>
  <p>26,26</p>
  </td>
  <td width=41 valign=top>
  <p>15,48</p>
  </td>
  <td width=41 valign=top>
  <p>10,06</p>
  </td>
  <td width=41 valign=top>
  <p>10,50</p>
  </td>
  <td width=41 valign=top>
  <p>6,923</p>
  </td>
 </tr>
 <tr>
  <td width=41 valign=top>
  <p>r</p>
  </td>
  <td width=41 valign=top>
  <p>0,017</p>
  </td>
  <td width=41 valign=top>
  <p>1,335</p>
  </td>
  <td width=41 valign=top>
  <p>1,915</p>
  </td>
  <td width=41 valign=top>
  <p>0,055</p>
  </td>
  <td width=41 valign=top>
  <p>-3,73</p>
  </td>
  <td width=41 valign=top>
  <p>-1,44</p>
  </td>
  <td width=41 valign=top>
  <p>2,24</p>
  </td>
  <td width=41 valign=top>
  <p>-0,053</p>
  </td>
  <td width=41 valign=top>
  <p>-2,75</p>
  </td>
  <td width=41 valign=top>
  <p>-0,915</p>
  </td>
  <td width=41 valign=top>
  <p>1,34</p>
  </td>
  <td width=41 valign=top>
  <p>-0,49</p>
  </td>
  <td width=41 valign=top>
  <p>-3,06</p>
  </td>
  <td width=41 valign=top>
  <p>-0,79</p>
  </td>
  <td width=41 valign=top>
  <p>4,58</p>
  </td>
  <td width=41 valign=top>
  <p>2,26</p>
  </td>
 </tr>
</table>

  </center>
</div>

<SCRIPT>comment(1)</SCRIPT><h5>Meaningful factor � Evaluation:� </h5>

<p>The determination of the
influence of a factor is based on the knowledge of experimental error. This one
can be evaluated by the utilization of interactions of orders raised in order
to calculate an evaluation of the error type of effect<sup>29</sup>. By
comparison of the effect to the error type average of the effect (s<sub>E</sub>
=3,667), we estimate the probability that the effect is influential.� </p>

<SCRIPT>comment(1)</SCRIPT><p>The comparison of factor effects
to himself =3,667, shows that [H<sub>2</sub>SO<sub>4</sub>] doesn't have a
meaningful effect on the answer I<sub>r</sub>/I<sub>a</sub> or Q<sub>r</sub>/Q<sub>a</sub>
of the EPR test DL. On the other hand, the scan rate of the potential, the
concentration of the depassivator and the temperature are some influential
factors. </p>

<SCRIPT>comment(1)</SCRIPT><h3>Discussion </h3>

<p>The method of the experience
plan, applied in this study, permitted to define the operative conditions
optimizing the sensitivity of the EPR test DL according to� consecutive Cr depleted zones to settind in
incomplete solution, or to their possible formation during welding
operations.� </p>

<SCRIPT>comment(1)</SCRIPT><p>A mathematical model permitting
to quantify effects and different influential factor interactions on the answer
of the test evaluated by the I<sub>r</sub>/I<sub>a</sub> reports or Q<sub>r</sub>/Q<sub>a</sub>
has been elaborated. It corroborates the main previous investigating results
concerning the effect of factors determinants the operative conditions of the
test EPR DL. Factors of meaningful influence are mainly the scan rate of the
potential, the concentration of depassivator and the temperature of the
electrolyte.� </p>

<SCRIPT>comment(1)</SCRIPT><h4>Effect of potential scan rate� </h4>

<p>The sensitivity of the answer of
the test EPR DL increases when the scan rate decreases. This result seems to
be� generally admitted independently of
the tested material and of the operative conditions. Table 11 confirms this
effect of scan rate tendency on the criteria of evaluation to the
susceptibility to the IGC as emphasised�
by certain authors in the literature<sup>23,24,25,33</sup> . The results
of this study on the nuance 316L are in perfect agreement with those of
Streicher<sup>24</sup>� relative to the
nuance 304 (fig.9). A slow sufficiently scan rate (dE/dt), but superior or
equal to 0,5 mV/s, would offer one optimal sensitivity of the EPRDL test. A low
scan rates would accentuate phenomena of generalized and pitting corrosion . On
the other hand, a higher scan rates would involve a loss of the selectivity of
the test<sup>24,33</sup> . A scan rate near 0,5 mV/s seems to offer the well
compromised for alloys of Nickel<sup>23</sup>�
that for Austenitic Stainless Steel nuances cited� in this study.� </p>

<SCRIPT>comment(1)</SCRIPT><p align=center><b>�Table 11. Principaux r�sultats de
l'�tude de l'influence de la vitesse de balayage sur le crit�re de
sensibilisation I<sub>r</sub>/I<sub>a</sub> extraits de la litt�rature</b></p>

<div align=center>

<table border=1 cellspacing=0 cellpadding=0>
 <tr>
  <td width=98 valign=top>
  <p>Authors and</p>
  <p>R�f�rences</p>
  </td>
  <td width=106 valign=top>
  <p>Materials and heat treament</p>
  </td>
  <td width=151 valign=top>
  <p align=center>Operative
  conditions</p>
  </td>
  <td width=293 valign=top>
  <p align=center>Variation of scan
  rate</p>
  </td>
 </tr>
 <tr>
  <td width=98 valign=top>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>A.MAJIDI et M.STREICHER</p>
  <p>[ 24]</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  </td>
  <td width=106 valign=top>
  <p>AISI 304 et 304L</p>
  <p>(667�C-1h)</p>
  </td>
  <td width=151 valign=top>
  <p align=center>-Test EPR DL</p>
  <p>-time of passivation 2mn</p>
  <p align=center>(-400 mV to +300
  mVs return to �400mV)</p>
  <p align=center>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  electrolyte&nbsp;: 0,5 M H<sub>2</sub>SO<sub>4</sub> + 0,01M
  KSCN</p>
  <p align=center>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  desaereted electrolyte 30�C</p>
  <p>&nbsp;</p>
  </td>
  <td width=293 valign=top>
  <p>dE/dt��������
  3,35���� 1,67��� 0,83���
  0,417�� 0,2��� 0,1</p>
  <p>(mV/s)</p>
  <p>I<sub>r</sub> /I<sub>a</sub> %������� 10������� 18������ 22������ 30������ 40���� 50</p>
  </td>
 </tr>
 <tr>
  <td width=98 valign=top>
  <p>A.ROELANDT and J.VEREECKEN</p>
  <p>� [ 23 ]</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  </td>
  <td width=106 valign=top>
  <p>INCONEL 600</p>
  <p>Sensitized specimen </p>
  <p>(650�C-2h)</p>
  </td>
  <td width=151 valign=top>
  <p align=center>Modified EPR test</p>
  <p align=center>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  electrolyte&nbsp;: 1M H<sub>2</sub>SO<sub>4</sub> + 10 ppm
  of KSCN ou 10<sup>-4</sup> mol/l</p>
  <p align=center>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  Time of passivation 2mn � +880 mV/e.c.s</p>
  <p>&nbsp;</p>
  </td>
  <td width=293 valign=top>
  <p>dE/dt (mV/s)���
  0,16��� 0,32��� 0,83����
  1,66���� 3,33 </p>
  <p>I<sub>m,1</sub>(mA/cm<sup>2</sup>)���� 3,3����
  2,4������ 2��������� 1,15���� 0,3 </p>
  <p>������ </p>
  </td>
 </tr>
 <tr>
  <td width=98 valign=top>
  <p>This study </p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  </td>
  <td width=106 valign=top>
  <p>steel 316L </p>
  <p>550�C-80 000h</p>
  </td>
  <td width=151 valign=top>
  <p align=center>-EPR DL test</p>
  <p align=center>--electrolyte&nbsp;:
  0,1 M H<sub>2</sub>SO<sub>4</sub> � T=25�C�
  </p>
  <p align=center>-stirred� and aereted</p>
  </td>
  <td width=293 valign=top>
  <p>dE/dt (mV/s)��
  5����� 2,5������ 1���������� 0,5</p>
  <p>%I<sub>r</sub>/ I<sub>a</sub>������������ 9,1���
  23,6��� 35,3������ 79,3</p>
  <p>&nbsp;</p>
  </td>
 </tr>
</table>

</div>

<p>�������������������������������������������������������������������������������������������������������������������������������
���������������������������������������</p>

<p><img width=657 height=370
 src="./v3p10_files/image020.gif"><br clear=ALL>

<p>

<br clear=ALL>

<img width=656 height=370 src="./v3p10_files/image022.gif"></p>

<SCRIPT>comment(1)</SCRIPT><p align=center><b>Figure-9.
Effect of scan rate on the criteria of sensitization I<sub>r</sub>/I<sub>a</sub>.</b>
</p>

<<SCRIPT>comment(1)</SCRIPT>p>b) Effet of depassivator
concentration:��

<p>The optimal conditions of the
detection susceptibility to IGC are obtained with electrolyte without addition
of depassivator. </p>

<SCRIPT>comment(1)</SCRIPT><p>The main results of this study of
the influence of the depassivator concentration are gathered in the table 12.
One notices that Ir/Ia criteria is most elevated (79,3%) when the concentration
of NH<sub>4</sub>SCN is non existent although the current Ia and Ir� are weak but meaningful. In presence of
depassivator, the current Ia and Ir are more elevated but the criteria of
sensitization stabilizes only at about�
20% for concentrations going until 0,1M. Otherwise, we notice in figure
10, that in presence of depassivator, a similar evolution of the criteria
of Ir/Ia sensitization compared to the works of STREICHER<sup>24</sup> on the
sensitized AISI 304. In the absence of depassivator, our results show an
electro-chemical behavior different of those of the litt�rature<sup>23,24,31</sup>,
presumably because of� special aged
conditions of Austenitic Stainless Steel (550�C-80000h).</p>

<SCRIPT>comment(1)</SCRIPT><p align=center><b>table 12. Operative
conditions: (electrolyte H2<sub>S</sub>O<sub>4</sub> 0,1M, dE/dt =0,5 mV/s, 25�C).</b></p>

<div align=center>

<table border=1 cellspacing=0 cellpadding=0>
 <tr>
  <td width=115 valign=top>
  <p>[NH4SCN]<br>
  mol/l </p>
  </td>
  <td width=87 valign=top>
  <p>0</p>
  </td>
  <td width=87 valign=top>
  <p>0,005</p>
  </td>
  <td width=87 valign=top>
  <p>0,01</p>
  </td>
  <td width=87 valign=top>
  <p>0,05</p>
  </td>
  <td width=87 valign=top>
  <p>0,1</p>
  </td>
 </tr>
 <tr>
  <td width=115 valign=top>
  <p>Ia (mA/cm2) </p>
  </td>
  <td width=87 valign=top>
  <p>0,320</p>
  </td>
  <td width=87 valign=top>
  <p>16,89</p>
  </td>
  <td width=87 valign=top>
  <p>27,73</p>
  </td>
  <td width=87 valign=top>
  <p>32,828</p>
  </td>
  <td width=87 valign=top>
  <p>42,28</p>
  </td>
 </tr>
 <tr>
  <td width=115 valign=top>
  <p>Ir (mA/cm2) </p>
  </td>
  <td width=87 valign=top>
  <p>0,254</p>
  </td>
  <td width=87 valign=top>
  <p>1,8278</p>
  </td>
  <td width=87 valign=top>
  <p>5,96</p>
  </td>
  <td width=87 valign=top>
  <p>5,90</p>
  </td>
  <td width=87 valign=top>
  <p>10,177</p>
  </td>
 </tr>
 <tr>
  <td width=115 valign=top>
  <p>Ir /Ia% </p>
  </td>
  <td width=87 valign=top>
  <p>79,3</p>
  </td>
  <td width=87 valign=top>
  <p>10,81</p>
  </td>
  <td width=87 valign=top>
  <p>21,88</p>
  </td>
  <td width=87 valign=top>
  <p>18</p>
  </td>
  <td width=87 valign=top>
  <p>24,07</p>
  </td>
 </tr>
 <tr>
  <td width=115 valign=top>
  <p>�C temperature </p>
  </td>
  <td width=87 valign=top>
  <p>25 (2�C </p>
  </td>
  <td width=87 valign=top>
  <p>25 (2�C </p>
  </td>
  <td width=87 valign=top>
  <p>25 (2�C </p>
  </td>
  <td width=87 valign=top>
  <p>25 (2�C </p>
  </td>
  <td width=87 valign=top>
  <p>25 (2�C </p>
  </td>
 </tr>
</table>

</div>

<p align="center">
 <img width=536 height=282 src="./v3p10_files/image024.gif">

<SCRIPT>comment(1)</SCRIPT><p align=center><b>Fig.-10.
Effect of concentration depassivator on the criteria of sensitization I<sub>r</sub>/I<sub>a</sub></b></p>

<SCRIPT>comment(1)</SCRIPT><p>b) Effect of temperature: </p>

<p>The main result extracted�
from the literature concerning the effect of the temperature on the
criteria of sensitization to the CIG are summarized in the table 13
of� which we have included our results
for comparison. The evolution of the criteria Ir/Ia with the temperature is
represented on the figure11 on which&nbsp; we have mentioned results of STREICHER [] for� comparison. </p>

<SCRIPT>comment(1)</SCRIPT><p>Contrary to the quoted works in reference in the table 14,
our experimental results show a reduction of the sensitization criteria with
the temperature. On the other hand, the more part of works shows an increase of
the sensitization criteria with the increase of the temperature. Although� this effect is beneficial in the improvement
of the sensitization degree, the same authors recommend operating to an optimal
temperature of the ambient or 30�C in order to increase the selectivity of the
test EPR DL. In this context, analysis microstructure on the sensitized samples
and reactivated at 650�C, done by VEREECKENS and al <sup>23</sup>, reveal
severe attacks of the grain boundary and a localised� attack on all the surface of grains. it results that the
selectivity test� is influenced
contrarily to high temperature and a thermostatisation to 25�C is necessary for
a t reproducible EPR tes and for a selective attack of the grain boundary.</p>

<SCRIPT>comment(1)</SCRIPT><p align=center><b>Table 13 Operative
conditions: (H<sub>2</sub>SO<sub>4</sub> 0,1M, dE/dt=0,5 mV/s, NH<sub>4</sub>SCN
=0) .</b></p>

<div align=center>

<table border=1 cellspacing=0 cellpadding=0>
 <tr>
  <td width=113 valign=top>
  <p align=center>temperature �C</p>
  </td>
  <td width=113 valign=top>
  <p align=center>25</p>
  </td>
  <td width=113 valign=top>
  <p align=center>40</p>
  </td>
  <td width=113 valign=top>
  <p align=center>71</p>
  </td>
 </tr>
 <tr>
  <td width=113 valign=top>
  <p align=center>Ia (mA/cm2)</p>
  </td>
  <td width=113 valign=top>
  <p align=center>0,320</p>
  </td>
  <td width=113 valign=top>
  <p align=center>2,02</p>
  </td>
  <td width=113 valign=top>
  <p align=center>4,1526</p>
  </td>
 </tr>
 <tr>
  <td width=113 valign=top>
  <p align=center>Ir (mA/cm2)</p>
  </td>
  <td width=113 valign=top>
  <p align=center>0,254</p>
  </td>
  <td width=113 valign=top>
  <p align=center>0,340</p>
  </td>
  <td width=113 valign=top>
  <p align=center>1,064</p>
  </td>
 </tr>
 <tr>
  <td width=113 valign=top>
  <p align=center>Ir /Ia %</p>
  </td>
  <td width=113 valign=top>
  <p align=center>79,3</p>
  </td>
  <td width=113 valign=top>
  <p align=center>16,83</p>
  </td>
  <td width=113 valign=top>
  <p align=center>25,48</p>
  </td>
 </tr>
</table>

</div>

<SCRIPT>comment(1)</SCRIPT><p align=center><b>Table 14. Main� result of the temperature influence on the
criteria of sensitization excerpts from the literature</b> </p>

<div align=center>

<table border=1 cellspacing=0 cellpadding=0>
 <tr>
  <td width=117 valign=top>
  <p align=center>Authors and
  references</p>
  </td>
  <td width=132 valign=top>
  <p align=center>Materials and heat
  treatment </p>
  </td>
  <td width=378 colspan=2 valign=top>
  <p align=center>Effect of
  temperature on the critreria of susceptibility to IGC</p>
  </td>
 </tr>
 <tr>
  <td width=117 valign=top>
  <p align=center>ROELANDT and
  VEREECKEN [23] </p>
  <p align=center>&nbsp;</p>
  </td>
  <td width=132 valign=top>
  <p align=center>&nbsp;</p>
  <p align=center>Sensitized Inconel
  600 </p>
  <p align=center>(650�C-2h) </p>
  </td>
  <td width=189 valign=top>
  <p align=center><u>Been worth of
  Im,1 however Qr at 25�C </u></p>
  <p align=center>Im,1(mA/cm2) Qr
  (C/cm2) </p>
  <p align=center>2������������������������� 0,5</p>
  <p align=center>&nbsp;</p>
  </td>
  <td width=189 valign=top>
  <p align=center><u>been worth of
  Im,1 however Qr at 40�C </u></p>
  <p align=center>Im,1(mA/cm2) Qr
  (C/cm2) </p>
  <p align=center>5,2������������������������ 1,2</p>
  </td>
 </tr>
 <tr>
  <td width=117 valign=top>
  <p align=center>STREICHER and al
  [24] </p>
  <p align=center>&nbsp;</p>
  </td>
  <td width=132 valign=top>
  <p align=center>&nbsp;</p>
  <p align=center>AISI 304, Heat To </p>
  <p align=center>Ditch structures </p>
  </td>
  <td width=378 colspan=2 valign=top>
  <p>T�C 25 30 40 </p>
  <p>Ir/Ia 13,5 14,7 19,3 </p>
  </td>
 </tr>
 <tr>
  <td width=117 valign=top>
  <p align=center>This study </p>
  <p align=center>&nbsp;</p>
  </td>
  <td width=132 valign=top>
  <p align=center>&nbsp;</p>
  <p align=center>steel 316L </p>
  <p align=center>550�C-80 000h </p>
  </td>
  <td width=378 colspan=2 valign=top>
  <p>T�C 25 40 71 </p>
  <p>Ir/Ia 79,3 16,83 25,48 </p>
  </td>
 </tr>
</table>

</div>

<p align="center"><img width=485 height=271 src="./v3p10_files/image026.gif"><br clear=ALL><SCRIPT>comment(1)</SCRIPT><b>&nbsp;Fig.-11.
Influence of the temperature on the sensitization criteria� Ir/Ia</b></p>

<SCRIPT>comment(1)</SCRIPT><h3>Conclusions</h3>

<p>It appears from this study that: </p>

<ul>
<SCRIPT>comment(1)</SCRIPT>  <li>The relative parameter values to the optimal conditions of
assessment by the EPRDL tests of the sensitization to the IGC of forged
Austenitic stainless Steels correspond to dE/dt =0,5 mV/se, [H2SO4]=0,1M,
[NH4SCN] =0M and the temperature of 25�C.</li>
<SCRIPT>comment(1)</SCRIPT>  <li>The exam of results of the test EPR DL, establish by the
method of the experience plan, schows that the sensitivity of the test is of as
much more elevated than ,dans the domain of chosen parameter variation in this
study, the scan rate as well as the concentration in ammonium thiocyanate� is weak, the temperature is the ambient and
that the concentration in sulphuric acid is without effect.</li>
<SCRIPT>comment(1)</SCRIPT>  <li>The profiles of concentration associated to Cr-depleted� zones ,responisible of the sensitization
phenomenon to the IGC, establish by X microanalyse in STEM show an
impoverishment in elements of alloy entered in the composition of� M<sub>23</sub>C<sub>6</sub> carbides.</li>
</ul>

<SCRIPT>comment(1)</SCRIPT><h3>References</h3>

<p>1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>Cihal
V., Desestret A., A. Wagner G. H, test d��tude et d��valuation de la
sensibilit� des aciers inoxydables � la corrosion intergranulaire, 5<sup>�me</sup>
Congr�s Europ�en de la Corrosion, pp 249-254 Paris, Mars (1973).</p>

<p>2.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>M.
Verneau, J. Charles, F. Dupoiron, Application of accelerated tests to service
life prediction on materials, ASTM STP 1194, Miami (1992).</p>

<p>3.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>M.
Verneau, C. Lojewski, J. Charles, Duplex Stainless Steels 91, Beaune (1991)</p>

<p>4.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>M.
Verneau, F. Dupoiron, J. Charles, 12<sup>th</sup> International Corrosion
Congress, Houston (1993)</p>

<p>5.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>M.
Verneau, J. M. Scarabello, Corrosion dans les Industries Chimiques et
Parachimiques, Grenoble (1994).</p>

<p>6.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>M.
Verneau, J. M. Scarabello-Interchimie-Paris-(1995)</p>

<p>7.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>V.
Cihal, cercle d��tudes des m�taux, Lyon (1991)</p>

<p>8.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>V.
Cihal, les entretiens de la technologie, paris (1994)</p>

<p>9.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>W.
L. Clarke, R. L. Cowan, W. L. Walker, ASTM STP 656, Ed NACE</p>

<p>10.&nbsp; </span>M. Verneau, J.
Charles, C. Lojewski, Corrosion dans les Industries Chimiques et Parachimiques,
Lyon (1994)</p>

<p>11.&nbsp; </span>G. Sibaud, M�moire
CNAM, septembre (1995).</p>

<p>12.&nbsp; </span>N. Lopez, M.
Puiggali, M. CID, 3<sup>�me</sup> Colloque Europ�en, Corrosion dans les usines
Chimiques et Parachimiques, Lyon 14-15, p13-1 � p13-6,� octobre (1997).</p>

<p>13.&nbsp; </span>F. Mazaudier, G.
Sanchez, P. Fauvet, 3<sup>�me</sup> Colloque Europ�en, Corrosion dans les
usines Chimiques et Parachimiques, Lyon 14-15 p121, ctobre (1997).</p>

<p>14.&nbsp; </span>Y. Cetre, P.
Eichner, G. Sibaud, J. M. Scarabello, 3<sup>�me</sup> Colloque Europ�en,
Corrosion dans les usines Chimiques et Parachimiques, Lyon 14-15 ,C4-1 � C4-12
octobre (1997).</p>

<p>15.&nbsp; </span>M. Verneau, B.
Bonnefois, 3<sup>�me</sup> Colloque Europ�en, Corrosion dans les usines
Chimiques et Parachimiques, Lyon 14-15), C5-1 � C5-6. Octobre (1997</p>

<p>16.&nbsp; </span>N. Lopez,
Mat�riaux et Techniques N�XII, pp50-52 ,(1995)</p>

<p>17.&nbsp; </span>U. Kamachi Mudali,
R. K. Dayal, J. B. Gnamoorthy, and P. Rodriguez, Metal and Mat. Trans. A, Vol
27 A, pp 2881-2887, (octobre 1996).</p>

<p>18.&nbsp; </span>Fumio Umemura,
Masatsune Akashi and Teruaki Kawamoto. Evaluation of IGSCC Suceptibility of
Austenitic Stainless Steels using Electrochemical Reactivation method.Japan,29,
163-169 (1980).</p>

<p>19.&nbsp; </span>A. P. Majidi, M.A.
Streicher, , p 62. Corrosion 85</p>

<p>20.&nbsp; </span>S. J. Goodwin, B.
Quayle and F. W. Nobe, Corr. Vol. 43 N�12 , p. 743. D�cembre (1987)</p>

<p>21.&nbsp; </span>J. C. Charbonnier,
T. Jossic, Corr. Sci&nbsp;; Vol. 23, N�11, pp. 1191-1206, (1983)</p>

<p>22 M. J. Hillert et C. Stawstrom.
J. I. S. I., 3, p. 77, (1973)</p>

<p>23&nbsp;&nbsp;&nbsp; </span>A.
Roelandt and J. Vereecken, Vol&nbsp;. 42&nbsp;. N�5,), pp 289-298. May (1986)</p>

<p>24&nbsp;&nbsp;&nbsp; </span>Azar
P. Majidi and M. A. STREICHER, Corrosion-Nace, vol. 40, n�11, , pp584-593.
Novembre (1984)</p>

<p>25&nbsp;&nbsp;&nbsp; </span>V.
Cihal, pp17-10 � 17-17.</p>

<p>26&nbsp;&nbsp;&nbsp; </span>G. L.
Edgemon, M. Marek, D. F. Wilson and G.E. C. Bell. Corrosion Science, vol. 50,
N�12 (1994)</p>

<p>27&nbsp;&nbsp;&nbsp; </span>La
M�thode des plans d�exp�rience. J. Goupy. DUNOD. Code 042962</p>

<p>28&nbsp;&nbsp;&nbsp; </span>Les
plans d�exp�rience. De l�Exp�rimentation � l�assurance qualit�. Gilles et Marie
Sado. Afnor Technique</p>

<p>29&nbsp;&nbsp;&nbsp; </span>Introduction
aux Plan d�exp�rience par la m�thode Taguchi. M.Pillet, les Editions
d�organization Universit�.</p>

<p>30&nbsp;&nbsp;&nbsp; </span>Statistics
for experimenters. An introduction to design data. Analysis and Model Building
, George E. P. Box William , G. Hunter, J. Stuart Hunter.</p>

<p>31&nbsp;&nbsp;&nbsp; </span>Azar
P. Majidi, and Michael A. Streicher, Corrosion -NACE, vol. 40. No. 9. Septembre
(1984).</p>

<p>32&nbsp;&nbsp;&nbsp; </span>�Azar P. Majidi, and Michael A. Streicher,
Corrosion-NACE, vol. 40. No. 8. August (1984).</p>

<p>33 David L. Reichert and Glenn E. Stoner. J. Electrochem.
Soc. Vol. 137, No. 2. February 1990</p>

<SCRIPT>footer()</SCRIPT></html>