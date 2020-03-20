<?php 
session_start();
include_once('jrnl_subs.php');
$logged_in=is_loggedin();
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<meta name="Generator" content="Microsoft FrontPage 6.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<title>JCSE Volume 2 Paper 19</title>
<meta name="Template" content="D:\Program Files\Microsoft Office\Templates\extabs_template.dot">
</head>

<body stylesrc="../../default.htm">

<font size="2">
<p><img border="0" src="../../images/jrnl_logo.gif" WIDTH="1200" HEIGHT="84"></p>
</font>
<blockquote>
  <p><small><b>(at http://www.jcse.org/, ISSN 1466-8858)</b></small></p>
  <h2>Volume 2 Paper 19</h2>
  <p>Submitted 13<sup>th</sup> September 1999</p>
  <hr align="RIGHT">
  <h2>An Electrochemical Impedance Spectroscopy Analysis of Protective Behaviour
  of Final Coatings on Naval Steel.</h2>
  <p>E.C. Bucharsky<sup>#</sup>, E.B. Castro and S.G. Real</p>
  <i>
  <p>Instituto de Investigaciones Fisicoqu�micas Te�ricas y Aplicadas (INIFTA),<br>
  Suc. 4, C.C.16 (1900) La Plata, Argentina.</p>
  <sup>
  <p>#</sup>Universidad Nacional de Quilmes, Roque Saenz Pe�a 180, (1876)
  Bernal, Argentina</p>
  </i>
  <h3>Abstract</h3>
  <p>The protective performance of zinc rich paints(ZRP)/top-coating systems has
  been investigated using electrochemical impedance spectroscopy (EIS) and
  corrosion potential measurement, at different immersion times. ZRP
  formulations included zinc pigment content close to 78% and different organic
  binders, such as alkyd resins and epoxypolyamide, an alkyd type resin was used
  as a top-coating. Experimental impedance diagrams were described in terms of
  transfer function analysis using non-linear fit routines. Changes in the
  dielectric properties of the top-coating, monitored by EIS, were used to
  evaluate the water uptake.</p>
  <b>
  <p>Keywords: </b>organic coatings, electrochemical impedance, cathodic
  protection.</p>
  <h3>Introduction</h3>
  <p>Coatings or linings with organic and inorganic compounds are a widespread
  method to provide corrosion protection in order to improve the durability of
  engineering structures. Transport properties of water and corrosion species
  are very important factors in the coating formulation design.</p>
  <p>In the development of coatings it is therefore necessary to optimize the
  permeability of the coating for water and corrosive species. Water, becomes
  the major cause of swelling, loss of adhesion, deterioration of the mechanical
  properties and the start of the corrosion process. Modern electrochemical
  techniques, such as electrochemical impedance spectroscopy, has been used for
  the investigation of the protective coating properties on metals [1-5]. In the
  present work, changes of coating properties have been monitored employing
  electrochemical impedance spectroscopy to evaluate the water transport and
  protective behaviour in final coating system containing an alkyd-type-top and
  either sprayed zinc or zinc rich paint (ZRP) based on different organic
  binders such as epoxy and alkyd. For this purpose, a short description of the
  theory related to the capacitance method of evaluating water up-take is
  presented.</p>
  <p>Water is transported through the coating by two different and simultaneous
  mechanisms: convection through pores and imperfections and diffusion through
  the polymer matrix.</p>
  <p>The convection of the electrolyte through the coating pores is responsible
  for the initiation of the corrosion process at relatively short times, (t <font face="Symbol">@</font>
  1h), allowing the electrical contact between Zn particles in the ZRP and with
  the steel substrate.</p>
  <p>Water diffusion through the top-coating layer, is a much slower process,
  resulting in an increase of the permittivity of the polymer with immersion
  time. Accordingly, higher values of the film capacitance, C, may be determined
  from impedance measurements recorded at increasing immersion times. C being
  related to the polymer permitivity, <font face="Symbol">e</font> <sub>p</sub>,
  by:</p>
  <p>&nbsp;</p>
  <p><img src="{{ $htmURL }}Image221.gif" WIDTH="201" HEIGHT="41"></p>
  <p>Where <font face="Symbol">e</font> <sub>o</sub> is the permittivity of
  vacuum, A is the area of the polymer film and l is the thickness.</p>
  <p>In this way impedance measurements may be used as a method to monitore the
  diffusion of water in the coating.</p>
  <p>The empirical equation of Brasher and Kingsbury [6], accounts for the
  relationship between the coating capacitance and the volume fraction of water
  in the coating layer, as already described by de Witt et al [7]:</p>
  <p>&nbsp;</p>
  <p><img src="{{ $htmURL }}Image222.gif" WIDTH="242" HEIGHT="45"></p>
  <p>Where <font face="Symbol">f</font> is the volume fraction of water in the
  coating, C(t) is the capacitance at time t and C(0) is the capacitance at t=0,
  80 is the relative permittivity of water.</p>
  <p>Parameters related to water diffusion in the paint film, such as the
  diffusion coefficient D, the solubility S and the permeation coefficient P,
  may be derived from impedance data recorded at different immersion times. For
  this purpose the transport equation of water in the coating must be solved
  with the adequate boundary conditions.</p>
  <p>As a first approximation water diffusion may be described by Fick�s laws.
  The solution of Fick&#146;s second law, for a free film taking up water from the
  environment, was given by Crank and Park [8,9], considering as boundary
  conditions:</p>
  <p>- For t <font face="Symbol">�</font> 0, The concentration of water in the
  coating is uniform (or zero).</p>
  <p>- For t &gt; 0, The surface concentrations of water at x=0 and x= l are
  equal and</p>
  <p>constant. The existence of water , is assumed at the ZRP/top-coat<br>
  interface due to the fast convective transport through the pores, as indicated
  by EIS data described below.</p>
  <p>The flux of water, at x=l/2 ( half thickness of free film) is J<sub>w</sub>=
  0.</p>
  <p>Taking into account eq.(2), the following expression may be derived<sup> </sup>[7],
  valid at long immersion times:</p>
  <p>&nbsp;</p>
  <p><img src="{{ $htmURL }}Image223.gif" WIDTH="432" HEIGHT="82"></p>
  <p>The simulation of experimental C(t) values, in terms of eq. (3) allows the
  determination of the diffusion coefficient, D, if the polymer layer exhibits
  ideal Fickean behavior even at long immersion times.</p>
  <p>This procedure requires good estimated values of the initial coating
  capacitance, C<sub>0</sub>, and of the capacitance at infinite time, C<font face="Symbol">�</font>
  .</p>
  <p>The solution of Fick&#146;s laws indicates a linear dependence of C(t) vs t<sup>1/2</sup>,
  for t<font face="Symbol">�</font> 0 [11], so C<sub>0 </sub>may be calculated
  from the extrapolation of this plot at t=0.</p>
  <p>C<font face="Symbol">�</font> may be determined from capacitance values at
  very long immersion times, provided that no swelling of the coating takes
  place, <i>ie </i>C(t) is constant for t<font face="Symbol">�</font> <font face="Symbol">�</font>
  .</p>
  <h3>Experimental</h3>
  <p>SAE 1020 (UNS G10200) steel plates 20x8x0.2 cm were used as metallic
  substrate. Metal surfaces were initially sandblasted to A Sa 2 1/2&#150;3 degree
  (SIS Standard 05 59 00/ 67), degreased with vapor toluene, and finally coated
  with different ZRP and top-coating alkyd resins; in all the cases panels were
  prepared in duplicate and stored seven days for curing at 20<font face="Symbol">�</font>
  2 <font face="Symbol">�</font> C before beginning the tests. The primer
  compositions and dry film thickness are assembled in Table 1. ZRP formulations
  included spherical zinc as unique pigment, whose physical properties are given
  in Table 2. For the sake of comparison, some steel samples were covered with
  sprayed Zn (sample S3 in Table 1).</p>
  <p><b>Table 1. ZRP and Top Coat Compositions</b></p>
  <table border="1" cellspacing="2" cellpadding="4" width="486">
    <tr>
      <td width="20%" valign="TOP">
        <p>ZRP Paint</p>
      </td>
      <td width="47%" valign="TOP">
        <p>Composition</p>
      </td>
      <td width="14%" valign="TOP">&nbsp;</td>
      <td width="19%" valign="TOP">
        <p>Thickness<br>
        �m</p>
      </td>
    </tr>
    <tr>
      <td width="20%" valign="TOP">
        <p>S1</p>
      </td>
      <td width="47%" valign="TOP">
        <p>Alkyd Resin<br>
        Zn Powder<br>
        Total Solids<br>
        Zn/Total Solids Ratio</p>
      </td>
      <td width="14%" valign="TOP">
        <p>21.5%<br>
        78.5%<br>
        86.5%<br>
        90.75%</p>
      </td>
      <td width="19%" valign="middle">60</td>
    </tr>
    <tr>
      <td width="20%" valign="TOP">
        <p>S2</p>
      </td>
      <td width="47%" valign="TOP">
        <p>Epoxipolyamide<br>
        Zinc Powder<br>
        Total Solids<br>
        Zn/Total Solids Ratio</p>
      </td>
      <td width="14%" valign="TOP">
        <p>22.2%<br>
        77.8%<br>
        85.1%<br>
        91.4 %</p>
      </td>
      <td width="19%" valign="middle">60</td>
    </tr>
    <tr>
      <td width="20%" valign="TOP">
        <p>S3</p>
      </td>
      <td width="47%" valign="TOP">
        <p>Zinc Sprayed</p>
      </td>
      <td width="14%" valign="TOP">
        <p>100%</p>
      </td>
      <td width="19%" valign="TOP">
        <p>75</p>
      </td>
    </tr>
    <tr>
      <td width="20%" valign="TOP">
        <p>Top Coating</p>
      </td>
      <td width="47%" valign="TOP">
        <p>Alkyd Resin<br>
        Pigment<br>
        Solids</p>
      </td>
      <td width="14%" valign="TOP">
        <p>45.4%<br>
        10.1%<br>
        35.3 %</p>
      </td>
      <td width="19%" valign="middle">30</td>
    </tr>
  </table>
  <p><b>Table 2. Zinc Pigment Physical Characteristics</b></p>
  <table border="1" cellspacing="2" cellpadding="7" width="423">
    <tr>
      <td width="49%" valign="TOP">
        <p>Zinc Pigment</p>
      </td>
      <td width="51%" valign="TOP">&nbsp;</td>
    </tr>
    <tr>
      <td width="49%" valign="TOP">
        <p>Form</p>
      </td>
      <td width="51%" valign="TOP">
        <p>Powder (Spherical Particles)</p>
      </td>
    </tr>
    <tr>
      <td width="49%" valign="TOP">
        <p>Color</p>
      </td>
      <td width="51%" valign="TOP">
        <p>Gray</p>
      </td>
    </tr>
    <tr>
      <td width="49%" valign="TOP">
        <p>Odor</p>
      </td>
      <td width="51%" valign="TOP">
        <p>Odorless</p>
      </td>
    </tr>
    <tr>
      <td width="49%" valign="TOP">
        <p>Density (g cm<sup>-3</sup>)</p>
      </td>
      <td width="51%" valign="TOP">
        <p>7.1</p>
      </td>
    </tr>
    <tr>
      <td width="49%" valign="TOP">
        <p>Apparent density (g cm<sup>-3</sup>)</p>
      </td>
      <td width="51%" valign="TOP">
        <p>2.4</p>
      </td>
    </tr>
    <tr>
      <td width="49%" valign="TOP">
        <p>Oil Absorption (g/100 g)</p>
      </td>
      <td width="51%" valign="TOP">
        <p>13</p>
      </td>
    </tr>
    <tr>
      <td width="49%" valign="TOP">
        <p>Purity (%)</p>
      </td>
      <td width="51%" valign="TOP">
        <p>99.02</p>
      </td>
    </tr>
  </table>
  <p>The ZRP/Topcoat dry film thickness was measured with an electromagnetic
  gauge employing bare sanded plates and standards of known thickness as
  reference. Potentials were measured and referred to in the text against a
  saturated calomel electrode (SCE). Electrochemical impedance Spectroscopy (EIS)
  measurements in the 3 mHz <font face="Symbol">�</font> f <font face="Symbol">�</font>
  65 kHz frequency range were performed in the potentiostatic mode at the
  corresponding corrosion potential attained after different exposure times in
  artificial sea water using a frequency response analyzer and an
  electrochemical interface (Solartron, FRA 1250 and EI 1186, respectively)
  integrated with a PC system. The exposed geometrical area of samples was 16 cm<sup>2</sup>.
  For impedance measurements, an activated Pt probe was coupled to the SCE
  through a 10 �F capacitor to reduce phase shift errors at high frequencies.
  Artificial sea water was prepared according to the ASTM Standard D 1141-90.
  Detailed descriptions of the experimental setup and data processing have been
  described elsewhere [12-14].</p>
  <p>The standarized procedures ASTM B 117-85 (Salt Spray Chamber) and ASTM D
  4541-85 (Pull-Off Adhesion) were also performed on the painted steel samples
  for comparing their results with the electrochemical ones. After these tests,
  the painted panels were assessed with the ASTM Standards D 610-68 and D 714-87
  in order to evaluate the degree of rusting and of blistering, respectively, in
  an attempt to correlate visual observations and electrochemical data.</p>
  <h3>Results and Discussion</h3>
  <p>The dependence of the corrosion potential E<sub>corr</sub> on immersion
  time (Fig. 1) in artificial sea water illustrates changes in the protective
  mechanisms supplied to the steel substrates by the studied final coating. At
  the beginning of the exposure<br>
  the oscilations of the open circuit potential indicate that E<sub>corr</sub>
  remains undefined due to an initial barrier protective mechanism.</p>
  <p>With increasing immersion time, (t &gt; 1h) E<sub>corr</sub> attains a
  potential that lies in the range of the corrosion potential of pure Zn
  electrodes in sea water [15]. This fact indicating that water has reached the
  ZRP layer, giving rise to the electric contact among the Zn particles and with
  the steel substrate. In this way the cathodic protection mechanism period is
  established, at relatively short immersion times.</p>
  <p><img src="{{ $htmURL }}Image225.gif" WIDTH="253" HEIGHT="239"></p>
  <p><b>Figure 1. E<sub>corr</sub> dependence on exposure time in artificial
  seawater for the tested samples</b></p>
  <p>The fast initial transport of water into the ZRP layer must occur by
  convection through the pores and imperfections of the top-coating polymer.
  Diffusion of water through the polymer matrix is a much slower process,
  producing changes in the top-coating capacitance, C, at longer times, as
  described above.</p>
  <p>After prolonged exposure time in the electrolyte, t &gt; 120 days, E<sub>corr</sub>
  attains values corresponding to the corrosion potential range of steel in sea
  water (-0.65V), indicating that the cathodic protection is no longer active.</p>
  <p>The comparison of E<sub>corr </sub>vs t plots, of ZRP (of the same Zn
  content) without top-coating, previously published[1], with the results
  depicted in fig.1, shows a longer period of cathodic protection for the
  samples with top-coating. This fact can be interpreted considering that the
  top-coat acts as a barrier for the transport of both water and oxygen.</p>
  <p><img src="{{ $htmURL }}Image226.gif" WIDTH="666" HEIGHT="623"></p>
  <p><b>Figure 2 Nyquist plots for samples S1, S2 and S3 at different immersion
  time.</b></p>
  <p>Impedance spectra at different immersion times for sample S1, S2 and S3 are
  depicted in Figure 2. Impedance data display similar features as those
  reported for ZRP without the top-coating [1,10], indicating the presence of
  water in the ZRP layer at short immersion times, as described above.
  Nevertheless significant diferences are evident: Higher impedance values are
  determined at comparable immersion times, and a continuous decrease of the
  modulus lZl is observed, in contradiction with EIS data for ZRP without
  Top-coat. For t &gt; 30 days relatively constant values of lZl are attained.
  These experimental facts indicate a continuous increment of the exposed active
  Zn area, due to a much longer wetting period, in comparison with the data of
  ZRP without Top-coat. The whole corrosion process of active Zn is also
  hindered by the smallest rate in the oxygen diffusion process.</p>
  <p>An increase of the whole system impedance is observed after t &gt; 100
  days, as the formation of Zn corrosion products reduce the active area, at
  long exposure times.</p>
  <p>The set of impedance diagrams contains valuable information related to the
  characteristic coating parameters as well as to the kinetics of corrosion
  process. Impedance spectra were analyzed using a non linear fit routine
  according to the following transfer function:</p>
  <p>&nbsp;</p>
  <p><img src="{{ $htmURL }}Image227.gif" WIDTH="477" HEIGHT="108"></p>
  <p>The transfer function described by eqs. (4) and (5) corresponds to the
  dynamic behaviour of the equivalent circuit:</p>
  <p><img src="{{ $htmURL }}Image228.gif" width="194" height="194"></p>
  <p>Zi corresponds to:</p>
  <p>&nbsp;</p>
  <p><img src="{{ $htmURL }}Image229.gif" width="194" height="194"></p>
  <p>Where Rs is the electrolyte resistence, C is the top-paint film capacitance
  and R<sub>p </sub>the pore resistance in the top-coat. Z<sub>i </sub>corresponds
  to the impedance related to the whole corrosion process taking place in the
  ZRP layer[3], R<sub>C </sub>is related to the charge transfer resistance of
  the oxygen reduction reaction and R<sub>A </sub>accounts for the charge
  transfer resistance of zinc dissolution reaction. C<sub>dl </sub>is the
  capacitance associated with the Zn/electrolyte interface. A finite diffusion
  impedance, Zd, was considered in order to account for the transport process
  involved in the cathodic partial reaction; being Zd=R<sub>D0 </sub>(jS)<sup>-1/2
  </sup>tanh(jS)<sup>�</sup>, were S=<font face="Symbol">d</font> <sup>2</sup>??D<sub>o</sub>,
  ???<font face="Symbol">p</font> f, <font face="Symbol">d</font> and D<sub>o</sub>
  being the diffusion length and diffusion coefficient of oxygen.</p>
  <p>Figure 3 shows a fairly good agreement between experimental and fitted
  results obtained according to the transfer function described by equations (4)
  and (5).</p>
  <p><img src="{{ $htmURL }}Image230.gif" WIDTH="662" HEIGHT="814"></p>
  <p><b>Figure 3 Experimental and simulated Bode and Nyquist plots, for the
  samples S1, S2 and S3 at different exposure time.</b></p>
  <p>The C values obtained from the fitting procedures were used to determine
  the diffusion coefficient of water through the coating according to the
  theoretical analysis presented above. Equation (3) is valid when the transport
  of water is properly described in terms of Fick&#146;s laws. If this is the case,
  two limiting conditions must be observed: a linear dependence of C vs t<sup>1/2</sup>
  as t <font face="Symbol">�</font> 0, and a plateau in the C vs t curve as t <font face="Symbol">�</font>
  <font face="Symbol">�</font> , indicating the value of C<font face="Symbol">�</font>
  .</p>
  <p>The plot C vs t <sup>1/2</sup> corresponding to the system S<sub>2</sub>,
  is depicted in Figure 4.</p>
  <p><img src="{{ $htmURL }}Image231.gif" width="552" height="574"></p>
  <p><b>Figure 4. Dependence of C on t<sup>1/2 </sup>for sample S2</b>.</p>
  <p>From the extrapolation to t=0, a value of C<sub>0</sub>= 3x10<sup>-9</sup>/
  F cm<sup>-2</sup>, may be obtained. A value of C<font face="Symbol">�</font>
  =4 x10<sup>-7</sup>/ F cm<sup>-2</sup>, corresponding to the experimental
  capacitance after 28 days of immersion, was considered as the capacitance at
  infinite time.</p>
  <p>Figure 5 depicts experimental and theoretical [log(C(t)/C<sub>0</sub>)/log(C<font face="Symbol">�</font>
  /C<sub>0</sub>)] vs t plots</p>
  <p><img src="{{ $htmURL }}Image232.gif" WIDTH="589" HEIGHT="573"></p>
  <p><b>Figure 5. Experimental and theoretical [log(C(t)/Co) / log (C<font face="Symbol">�</font>
  /Co)] vs t plot, corresponding to sample S2.</b></p>
  <p>The theoretical curve was calculated in terms of Eq.3 .</p>
  <p>The theoretical curve was calculated in terms of eq.(3), taking into
  account seven terms of the series and D = 2x10<sup>-8</sup> cm<sup>2</sup> s<sup>-1</sup>
  for the diffusion coefficient of water in the polymer layer. Good agreement
  between experimental and calculated data may be observed indicating that the
  assumption of Fickean behaviour can be considered as a good approximation for
  the diffusion of water through the polymers presented in this work.</p>
  <p>The dependence of fit parameters on immersion time is assembled in Figure 6
  for the different ZRP formulations.</p>
  <p>In the absence of Top-coat[1], the continuous decrease of the capacitance
  Cdl as well as the increase of the resistance R<sub>A</sub> and R<sub>C </sub>can
  be assigned to a progressive decrease of the electrochemically active area due
  to the accumulation of corrosion products in the ZRP.</p>
  <p>In the present case the existence of a top-coat introduces modifications in
  this behaviour: An increase in the Zn active area, with immersion time, is
  deduced by the decrease of the parameters R<sub>A</sub> and R<sub>C</sub> and
  the increse of C<sub>dl </sub>. Higher values of R<sub>DO</sub> are also
  related to higher values of the diffusion length for oxygen transport, <font face="Symbol">d</font>
  , due to the presence of the top-layer.</p>
  <p><img src="{{ $htmURL }}Image233.gif" WIDTH="583" HEIGHT="523"></p>
  <p><b>Figure 6. Dependence of fitting parameters C, Cdl , R<sub>A</sub> and Rc
  on exposure time for samples S1, S2 and S3.</b></p>
  <h3>Conclusions</h3>
  <p>Dynamic system analysis employing small signal perturbation allows the
  determination of specific parameters of the system, which characterize the
  protective performance of the final paint scheme with increasing immersion
  time in sea water.</p>
  <p>The dependence of E<sub>corr</sub>, and of the fitting parameters with
  immersion time indicates that the top-coating acts as a barrier, hindering
  both water and oxygen transport. As a consequence the wetting period of the
  ZRP layer is much longer, and the oxygen diffusion transport is slower. In
  this way Zn particles provide active cathodic protection for longer exposure
  times than ZRP without top-coating.</p>
  <p>EIS has proved to be a powerful tool allowing to monitor changes in the
  coating properties, with immersion time as well as providing information
  related to both water transport and corrosion process taking place at the
  metal/coating interface.</p>
  <h3>Acknowledgments</h3>
  <p>This research project was financially supported by Consejo de
  Investigaciones Ci�ntificas y T�cnicas (CONICET), Comisi�n de
  Investigaciones Ci�ntificas de la Provincia de Buenos Aires (CIC), and
  Fundaci�n Antorchas. Part of the equipment used in this work was provided by
  the DAAD and the Alexander von Humboldt-Stifung.</p>
  <h3>References</h3>
  <p>[1] E.C. Bucharsky, S.G. Real and J.R. Vilche, <i>Corrosion Reviews</i>,14,
  No1-2,(1996)</p>
  <p>[2] C.G. Munger, <u>Corrosion Prevention by Protective Coatings</u>,
  NACE,2nd ed., Houston, Texas,(1986).</p>
  <p>[3] C.A. Gervasi, A.R. Di Sarli, E. Calvalcanti, O. Ferraz, E.C. Bucharsky,
  S.G. Real and J.R. Vilche, Corros Sci.,36,1963,(1994).</p>
  <p>[4] C.A. Gervasi, R. Armas, A.R. Di Sarli, E.C. Bucharsky, S.G. Real and
  J.R. Vilche, Materials Science Forum, Vols.192-194,357,(1995).</p>
  <p>[5] R.D. Armstrong, B.W. Johnson and J.D. Wright, Electrochim. Acta,
  36,1915(1991).</p>
  <p>[6] D. M. Brasher and A. H. Kingsbury , <i>J. Appl. Chem</i>. 4, 62(1954).</p>
  <p>[7] E. P. M. Van Westing, G. M. Ferrari and J. H. W. de Witt, <i>Corrosion
  Sci.</i>, 36 , 957(1994).</p>
  <p>[8] J. Crank, <u>The Mathematics of Diffusion, </u>Oxford University Press,
  London (1967).</p>
  <p>[9] J. Crank and G. S. Park, <u>Diffusion in Polymers,</u> Academic Press,
  London (1968).</p>
  <p>[10] C. M. Abreu, M. Izquierdo, M. Keddam, X. R. Novoa and H. Takenouti, <i>Electrochim.
  Acta</i> 41, 2405(1996).</p>
  <p>[11] F. Belluci and L. Nicodemo, <i>Corrosion</i>, 49,235(1993).</p>
  <p>[12] R.A. Armas, C.A. Gervasi, A.R. Di Sarli, S.G. Real and J.R.Vilche, <i>Corrosion</i>
  48,379(1992).</p>
  <p>[13] S.G. Real, A.C. El�as,C.A. Gervasi, A.R. Di Sarli and J.R. Vilche,
  Electr<i>ochim.Acta </i>38,2029(1993).</p>
  <p>[14] E.B. Castro,S.G. Real, R.H. Milocco and J.R. Vilche, <i>Elctrochim.Acta,
  </i>36,117(1991).</p>
  <p>[15] M. Pourbaix <i>, Atlas d�Equilibres Electrochemiques</i>,
  Ganthier-Villars, Paris, p. 312, (1963)</p>
  <hr>
  <p><a href="http://www.jcse.org/Background.htm">Comment</a> on this
  paper</p>
  <p>Send Mail to the <script>mailtoeditor()</script></p>
  <p><a href="../../default.php">Journal of Corrosion Science &amp; Engineering
  Home Page</a><br>
  <a href="http://corrosiontest.its.manchester.ac.uk/default.htm">Corrosion Information Server</a><br>
  <a href="http://minerva.acc.virginia.edu/~cese">Centre for Electrochemical
  Science and Engineering, University of Virginia (JCSE Mirror Site)</a></p>
  <p>&nbsp;</p>
</blockquote>

</body>

</html>
