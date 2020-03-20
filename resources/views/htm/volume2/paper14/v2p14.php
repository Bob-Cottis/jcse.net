<?php 
session_start();
require_once('/home/jcsete5/public_html/jcse.org/jcse/php_inc/jrnl_subs.php');
$logged_in=is_loggedin();
?>
<html>
<head>
<meta name="Generator" content="Microsoft FrontPage 6.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<meta name="Originator" content="Microsoft Word 9">
<link rel="schema.DC" href="http://purl.org/dc/elements/1.1/" title="Dublin Core Metadata Element Set">
<link rel="schema.Corrosion" href="http://www.oceancorrosion.org/OSIS/1.0" title="OCEAN Service Information Sheet">
<meta name="DC.Creator" lang="en" content="personName=W.J van Ooij; organizationName=Department of Materials Science and Engineering University of Cincinnati; email=wvanooij@uceng.uc.edu">
<meta name="DC.Publisher" lang="en" content="organizationName=UMIST; email=Admin@jcse.org">
<meta name="DC.Rights" scheme="OCEANRights" content="access=free; address=http://www.jcse.org/details.php">
<meta name="DC.Title" lang="en" content="Silane Coatings for Replacement of Phosphate/Chromate Pretreatments of Automotive Metal Sheets">
<meta name="DC.Subject" scheme="OCEANDictionary-V101" content="silanes; phosphates; chromates; steel; automotive components">
<meta name="DC.Description" lang="en" content="Silane coatings based on bis-amino and bis-polysulfur silanes have been">
<meta name="DC.Language" scheme="RFC1766" content="en">
<meta name="DC.Identifier" scheme="URI" content="http://www.jcse.org/volume2/paper14/v2p14.php">
<meta name="DC.Type.category" content="document">
<meta name="DC.Type.documentType" content="">
<meta name="DC.Type.aggregationLevel" content="item">
<meta name="DC.Format" scheme="IMT" content="text/html">
<title>JCSE Volume 2 Paper 14</title>
<SCRIPT src="/getcomm.php?vol=2&pap=14"></SCRIPT>
<SCRIPT src="/jsinc/jcsesubs.js.php"></SCRIPT>
<SCRIPT>
getcommentmode();</SCRIPT></HEAD><body>
<script>var lgi=<?php if ($logged_in) { echo('true');} else { echo('false');} ?>;</script>
<script src="/jsinc/writeheader.js"></script><?php ggl_ad(); ?>

  <h2>Volume 2 Paper 14</h2>
<script>ifnotmode(3,'<p><i>Submitted 16<sup>th</sup> March 2000</i></p>')</script>
  <hr>
  <h2>Silane Coatings for Replacement of Phosphate/Chromate Pretreatments of
  Automotive Metal Sheets</h2>
  <p><i>&nbsp;W.J van Ooij<sup>*</sup> and Guru Prasad Sundararajan</i></p>
  <p>Department of Materials Science and Engineering University of Cincinnati,
  Cincinnati, OH 45221-0012 USA (* Corresponding author; E-mail: <script>mailto2('wvanooij','uceng.uc.edu')</script></i><i>)</i></p>
<SCRIPT>notify();</SCRIPT><SCRIPT>comment(1)</SCRIPT>  <h3>Abstract</h3>
  <p>Silane coatings based on bis-amino and bis-polysulfur silanes have been
  shown to be an effective replacement for phosphating (including final chromate
  rinse) pretreatments of electrocoated metals. The performance of these silanes
  on automotive metals which includes cold-rolled steel (CRS), electrogalvanized
  steel (EGS), hot-dip galvanized steel (HDG), and aluminum alloys have been
  shown to outperform the current phosphating pretreatments. These silanes if
  applied at optimized conditions provide outstanding corrosion protection and
  adhesion with a standard electrocoat (ED-5000) in a variety of tests including
  GM scab test, EIS and Hot-salt immersion tests. These films have also been
  characterized using RAIR and AFM.</p>
  <SCRIPT>comment(2)</SCRIPT><p><b>Keywords:</b> Silanes, E-coat, HSS, EIS, NMP, bis-amino, bis-polysulfur,
  RAIR, AFM</p>
  <h3>Introduction</h3>
  <SCRIPT>comment(3)</SCRIPT><p>Organofunctional silanes are hybrid organic-inorganic compounds that can be
  used as coupling agents across the organic-inorganic interface. These
  functional silanes have the structure X<sub>3</sub>Si(CH<sub>2</sub>)<sub>n</sub>Y,
  where X represents a hydrolyzable group such as methoxy or ethoxy and Y an
  organofunctional group. The functional group attaches itself to the paint
  polymer that is applied to the silane-coated metal. When the silane is
  symmetrical about the functional group Y, viz. if there are two hydrolyzable&nbsp;
  (X<sub>3</sub>) groups about the functional group, then these molecules are
  called as bis-functional silanes. These bis-functional silanes have the
  structure X<sub>3</sub>Si(CH<sub>2</sub>)<sub>n</sub>Y(CH<sub>2</sub>)<sub>n</sub>Si
  X<sub>3</sub>, where X represents a hydrolyzable group such as methoxy or
  ethoxy and Y an organofunctional group.</p>
  <SCRIPT>comment(4)</SCRIPT><p>The environmentally toxic properties of phosphates and chromate
  pretreatments on automotive metals have been widely documented. Although some
  alternatives have been proposed [1,2], they have not yet been universally
  acceptable or cost-effective without loss of performance. In our laboratory we
  have developed an environmentally friendly as well as cost-effective
  replacement for these pretreatments by the use of novel organofunctional
  silanes on automotive alloys which includes electrogalvanized steel (EGS),
  hot-dipped galvanized steel (HDG), cold-rolled steel (CRS) and aluminum alloys
  (Al 6061and Al 6111).</p>
  <SCRIPT>comment(5)</SCRIPT><p>&nbsp;The typical silanes are bis-organofunctional silanes viz.&nbsp;
  bis-(trimethoxysilylpropyl)amine and bis-(triethoxysilylpropyl)tetrasulfide.
  Earlier we had reported the performance of organofunctional and non-functional
  silanes on metals as a pretreatment for painting and demonstrated that the
  silane with the optimum performance is not the same for all the metals [3].
  However, as a part of the ongoing work on automotive steels, we have now
  successfully reduced the choice of silanes to the above two silanes.</p>
  <SCRIPT>comment(6)</SCRIPT><p>In this paper, we have shown that silane-based pretreatments using either
  of both of these silanes can outperform the currently used phosphating
  treatments of automotive metal sheets</p>
  <SCRIPT>comment(7)</SCRIPT><p>After active hydrolysis with water, the bis-amino silane obtains the
  structure: (HO)<sub>3 </sub>� Si � (CH<sub>2</sub>)<sub>3 </sub>�NH -
  (CH<sub>2</sub>)<sub>3 </sub>� Si � (OH)<sub>3</sub>. The bis-amino silane
  is supplied as a methoxy ester while the bis-polysulfur one is supplied as an
  ethoxy ester. Similarly, the bis-polysulfur silane has the following structure
  after hydrolysis: (HO)<sub>3 </sub>� Si � (CH<sub>2</sub>)<sub>3 </sub>�S<sub>4</sub>
  � (CH<sub>2</sub>)<sub>3 </sub>� Si � (OH)<sub>3</sub></p>
  <h3>Experimental</h3>
  <SCRIPT>comment(8)</SCRIPT><p>The automotive materials of CRS, EGS, HDG, Al 6061 and Al 6111 were
  obtained from ACT laboratories, Hillsdale Michigan. The silanes were obtained
  from Witco Corp., Friendly, WV, as liquids of approximately 95% purity.</p>
  <SCRIPT>comment(9)</SCRIPT><p>The bis-amino silane having an amine functional group could be completely
  hydrolyzed in water. However, the stable pH range (where condensation of
  silanols do not occur) was found to be between 4-9.5. Bis-polysulfur on the
  other hand required at least 50-vol% of solvent (preferably ethanol) and had a
  pH stability range of 3.5- 9.5 [4]. However, we have earlier shown [5] that
  amino silane hydrolysis at an acid pH protonates the group and hence not
  suitable for deposition on a zinc surface as the zinc oxide is stable within a
  pH of 8-12. So bis-amino was deposited at a pH of 8.5 on EGS, acetic acid
  being used for controlling the pH. The bis-polysulfur silane (sulfane) could
  be hydrolyzed without addition of acid at a natural pH of 4.5.</p>
  <SCRIPT>comment(10)</SCRIPT><p>The silanes after application were in-place cured or preferentially baked
  at 100&deg;C for 5 minutes and then electrocoated with the standard
  automotive E-coat ED-5000 (from PPG-Industries). After elecctrocoating, the
  panels were cured at 175&deg;C for 20 minutes. The performances of the
  silanes were then reported for EIS, GM 9540P accelerated cyclic corrosion test.</p>
  <SCRIPT>comment(11)</SCRIPT><p>In order to screen the silanes for performance and to reduce the 1000 hr
  Salt Spray test program, we have introduced a new test called the Hot-Salt
  Soak test (HSS). This involves immersion of e-coated panels with two parallel
  scribes (scribed deep into the base metal) about 10 cm long into a 3% NaCl
  solution for 5 days at 55&deg;C. The panels are then washed with DI
  water and a tape-pull off using an adhesive tape is done. Figure 1 shows the
  comparative performances of the silane-pretreated, phosphated and the blank
  EGS panels in the HSS test. The average creep from the scribe gives the extent
  of corrosion and adhesion performance of the e-coat with the metal. The HSS
  test has been found to be very useful for demonstrating the effect of
  corrosion and adhesion performance of functional silanes with the e-coat.</p>
  <SCRIPT>comment(12)</SCRIPT><p>It has been reported earlier that the properties of the silane films on
  metals depends upon the metal cleaning procedure, concentration of the silane,
  pH of application and post-treatment [2-6]. All the automotive metals were
  degreased ultrasonically using acetone, hexane and then alkaline cleaned with
  alkaline cleaner for 5-10 minutes. They were then washed thoroughly with DI
  water until complete wettability was attained and then blown-dried. They were
  then dipped into the corresponding silane solution for at least 2 seconds and
  then in-place cured.&nbsp; The bis-amino coated silane films were
  preferentially baked at 100&deg;C for 5 minutes. The silane coated films were then
  cathodically electro coated with the paint ED-5000 (from PPG Inc.). The
  painted panels were then screened using HSS test. EIS in 3% NaCl provided the
  resistance of the e-coat with the silane. The experiment was carried out using
  CMS 300 EIS system from GAMRY Instruments. The reference electrode was a
  saturated calomel electrode (SCE) and the counter electrode was graphite and
  the area of exposure of the painted panels was about 5.25 cm<sup>2</sup>. The
  experiments were carried out at open circuit potential of the system and an AC
  voltage of 50 mV was applied as the input signal.&nbsp; A conventional nested
  loop electrical model with two time constants was used for fitting the
  experimental data and the corrosion resistance R<sub>corr</sub> was obtained
  from the EIS analysis software obtained from GAMRY Inc. (Figure2)</p>
  <SCRIPT>comment(13)</SCRIPT><p>The panels were also subjected to the GM Scab creep cyclic corrosion test
  which was performed by exposing them in a humidity chamber to conditions at
  60C and 85% relative humidity followed by salt immersion, drying and exposure
  in a cycle for 4 weeks. The scribe creep was measured after a tape-pull off
  using a standard adhesive tape.</p>
  <SCRIPT>comment(14)</SCRIPT><p>The chemical structures of the deposited silane films were studied by
  reflection-absorption infrared spectroscopy (RAIR). The RAIR spectra were
  obtained using a BIO-RAD FTS-40 FT-IR spectrometer equipped with a BIO-RAD
  variable angular reflectance attachment at an angle of 60&deg;. The
  spectra were acquired for 500 scans using 4 cm<sup>-1</sup> resolution. The
  spectra for the silane films were obtained by subtracting their corresponding
  background spectrum obtained with the uncoated polished substrates.</p>
  <SCRIPT>comment(15)</SCRIPT><p>AFM images of polished pure zinc substrates with and without silane films
  were obtained on a Burleigh Instruments METRIS-2000 AFM system. Samples were
  analyzed at ambient conditions. The instrument was operated in the contact
  mode during imaging and the micromachined silicon nitride cantilever was in
  contact with the surface under a reference force of ~5.0 N. The topography of
  the surface was a measurement of the adjustment in the vertical direction
  necessary to keep the reference force constant.<b>&nbsp;</b></p>
  <h3>Results and Discussion</h3>
  <h4>Hot-salt soak test and GM scab test</h4>
  <SCRIPT>comment(16)</SCRIPT><p>While either of the above two silanes deposited on EGS, HDG and Al 6061
  could provide adhesion and corrosion performance on par with the phosphated
  system, for CRS it was found that the mixture of bis-amino and bis-polysulfur
  (2% prehydrolyzed concentration each, 9:1 mix ratio, at pH= 8), provided
  results comparable to the zinc phosphated CRS The Hot-Salt Soak test clearly
  shows the effect of pH on automotive substrates, specially on zinc surfaces
  (Table 1). While the bis-amino silane deposited between 8-9 showed the best
  performance, those bis- amino silanes deposited below pH=8 showed considerable
  delamination of the paint. Similarly the concentration of the silane was also
  critical as far as the e-coatability is concerned. Concentrations of bis-amino
  higher than 2% provided inferior performance. This could be attributed to the
  fact that silane films are not electronically conductive and hence beyond a
  critical concentration of 2% for a bis-amino film, the adhesion of the e-coat
  with the silane decreases during electrocoating due to poor conductivity of
  films of higher concentration [7]. The bis-sulfur films on the other hand,
  which would be more conductive, provide corrosion protection even at 5%
  concentration [7]. The electronic conductivity of a 2% bis-amino film on EGS
  is 8.81 Ohm<sup>-1</sup> cm<sup>-1</sup> and that of a 2% bis-sulfur film is
  12.61 Ohm<sup>-1</sup> cm<sup>-1</sup>. This correlated with the corrosion
  performance results obtained from GM test.&nbsp; The requirement of an optimum
  concentration (2% in case of bis-amino) is also seen in the GM test results
  (Table. 2)</p>
  <h4>EIS of E-Coated Steels</h4>
  <SCRIPT>comment(17)</SCRIPT><p>EIS has been shown to be a scientific method to study the corrosion
  performance of polymer-coated metals in recent years. However, from the data
  shown (Table 3), it can be inferred that the quality of the paint can mask the
  performance of pretreatment. Hence in this case EIS testing at pH = 6 was not
  useful for studying the effect of pretreatment on metals. Also we can see that
  even an alkaline-cleaned panel with e-coat performs well in neutral 3% NaCl.
  The differences are seen only when the pH of the NaCl was decreased to an
  acidic value of 3. Also we can see that the correlation between EIS and GM
  Scab tests were poor as far as performance of bis-polysulfur silane on CRS is
  concerned. This is in agreement with our earlier results indicating a poor
  correlation between adhesion and corrosion results [8]</p>
  <h4>RA-IR</h4>
  <SCRIPT>comment(18)</SCRIPT><p>The bis-amino and bis-polysulfur silane films were also characterized by
  RA-IR. The IR spectrum (figure 3) of bis-amino shows the presence of strong
  Si-O-Si&nbsp; peak&nbsp; present at 1144 cm<sup>-1</sup> and IR (figure 4) of
  bis-polysulfur shows S-S peaks at 460 cm<sup>-1</sup>  [9]. The presence of
  broad peak around 3340 cm<sup>-1</sup> indicates the presence of&nbsp; a large
  amount of OH groups that are hydrogen bonded (due to Si � OH groups or water
  present in the film). The peak present at 881 cm<sup>-1</sup> indicates the
  presence of Si-O-C<sub>2</sub>H<sub>5</sub> groups present in the film, which
  shows that the silane cannot be completely hydrolyzed even after four days of
  hydrolysis.&nbsp; It is interesting to note the IR spectrum of mixture of bis-amino
  and bis-polysulfur films (mixing ratio 3:1) is simply the addition of the
  individual spectra (figure 5) Further, it can be seen there is no peak present
  around 881 cm<sup>-1</sup> when the bis-sulfur silane is mixed with bis-amino
  silane in the ratio 1:3, which indicates that the amino-silane aids in
  hydrolyzing the bis-sulfur silane almost completely.</p>
  <h4>AFM</h4>
  <SCRIPT>comment(19)</SCRIPT><p>Both the bis-functional silanes were analyzed using AFM.&nbsp; Figure 6
  shows the 3-dimensional surface topography of a blank polished Zn surface.
  Figures 7 and 8 show the surface scan of films of a 2% bis-amino and a 5%
  bis-polysulfur films respectively on Zn. These figures show that both silane
  films formed under the conditions studied were continuous and it can be seen
  that the surface topography of bis-polysulfur film differs from that of the
  bis-amino silane. The former appears to be smoother than the amino-film.&nbsp;
  However, both the films appear to be smoother than the uncoated Zn substrate.</p>
  <h3>Conclusions</h3>
  <SCRIPT>comment(20)</SCRIPT><p>A process consisting of coating thin films of organofunctional silanes on
  automotive substrates have been proposed to replace the conventional
  phosphating pretreatments. EIS, HSS and GM Tests have been successfully used
  to demonstrate the effect of deposition parameters on metal. RA-IR and AFM has
  been used for characterizing these silane films.&nbsp; EIS was found to be a
  useful tool, only the when the corrosive medium (3% NaCl) is made aggressive
  by making the pH acidic. Also poor correlation is seen between the EIS and GM
  test results that agree with our earlier findings.&nbsp; For EGS, HDG and Al
  6061 alloys, one of the bis-functional silanes when applied at an optimum pH
  and concentration, provided excellent adhesion and corrosion protection with
  the electrocoat ED-5000. For CRS, an optimized mixture of these two silanes
  provided a performance on par with the phosphated systems. An extensive
  characterization of electrical properties of these films and its structure
  will be reported elsewhere.</p>
  <h3>References</h3>
  <SCRIPT>comment(21)</SCRIPT><p>1. W.J. van Ooij and K.D. Conners, J. Electrochem. Soc., Vol. <u>95-13</u>,
  229 (1995)</p>
  <p>2. T.J. Lin, J.A. Antonelli, D.J.Yang, H.K. Yasuda, F.T.Wang, Prog.Org.Coat.
  <u>31,</u> 351 (1997)</p>
  <p>3. W.J. van Ooij, Chunbin Zang, Jun Q. Zhang and Wei Yuan, International
  Symposium on Advances in Corrosion Protection by Organic Coatings- ACPOC 127
  (1997)</p>
  <p>4. Thomas van Schaftinghen, Thesis, Vrije Universiteit Brussels, Belgium,
  1999.</p>
  <p>5. W. Yuan and W.J. van Ooij, J. Coll. Interface Sci., 185 (1997).</p>
  <p>6. Chunbin Zhang, Ph.D. Thesis University of Cincinnati, Department of
  Materials Science and Engineering, 1997.</p>
  <p>7. Guru Prasad. S, MS Thesis, Department of Materials Science and
  Engineering, University of Cincinnati, 2000.</p>
  <p>8. N. Tang, W.J. van Ooij, G. Gorecki; Prog.Org.Coat. <u>30,</u> 255 (1997)</p>
  <p>9. Socrates.G, Infrared Characteristic Group Frequencies, 2<sup>nd</sup>
  Ed., John Wiley&nbsp; (1994)</p>
  <p>&nbsp;</p>
<SCRIPT>comment(22)</SCRIPT>  <p><b>Table1: Hot Salt Soak Test Results<br>
  </b>(Immersion of Scribed panels in 3% NaCl for 5 days at 55 � 5<sup>o</sup>C).</p>
<div align="center">
  <center>
  <table border="1" cellspacing="0" cellpadding="0">
    <tr>
      <td width="397" valign="top">
        <p>Specimen</p>
      </td>
      <td width="175" valign="top">
        <p><b>Creep (mm)</b></p>
      </td>
    </tr>
    <tr>
      <td width="397" valign="top">
        <p>&nbsp;</p>
      </td>
      <td width="175" valign="top">
        <p>&nbsp;</p>
      </td>
    </tr>
    <tr>
      <td width="397" valign="top">
        <p>EGS</p>
      </td>
      <td width="175" valign="top">
        <p>&nbsp;</p>
      </td>
    </tr>
    <tr>
      <td width="397" valign="top">
        <p>Phosphated</p>
      </td>
      <td width="175" valign="top">
        <p>1.2 � 0.9</p>
      </td>
    </tr>
    <tr>
      <td width="397" valign="top">
        <p>Blank</p>
      </td>
      <td width="175" valign="top">
        <p>22.6 � 10.1</p>
      </td>
    </tr>
    <tr>
      <td width="397" valign="top">
        <p>Bis-amino (0.5%, pH=8.5, baked<sup>*</sup>)</p>
      </td>
      <td width="175" valign="top">
        <p>5.1 � 2.1</p>
      </td>
    </tr>
    <tr>
      <td width="397" valign="top">
        <p>Bis-amino (2.0%, pH=8.5, baked)</p>
      </td>
      <td width="175" valign="top">
        <p>Negligible<sup>**</sup></p>
      </td>
    </tr>
    <tr>
      <td width="397" valign="top">
        <p>Bis-amino (3.0%, pH=8.5, baked)</p>
      </td>
      <td width="175" valign="top">
        <p>3.9 � 1.1</p>
      </td>
    </tr>
    <tr>
      <td width="397" valign="top">
        <p>Bis-amino (4.0%, pH=8.5, baked)</p>
      </td>
      <td width="175" valign="top">
        <p>6.2 � 4.3</p>
      </td>
    </tr>
    <tr>
      <td width="397" valign="top">
        <p>Sulfane (5%, natural pH, as-cured)</p>
      </td>
      <td width="175" valign="top">
        <p>1 � 0.8</p>
      </td>
    </tr>
    <tr>
      <td width="397" valign="top">
        <p>Sulfane (2%, natural pH, as-cured)</p>
      </td>
      <td width="175" valign="top">
        <p>12.1 � 6.6</p>
      </td>
    </tr>
    <tr>
      <td width="397" valign="top">
        <p>&nbsp;</p>
      </td>
      <td width="175" valign="top">
        <p>&nbsp;</p>
      </td>
    </tr>
    <tr>
      <td width="397" valign="top">
        <p>HDG</p>
      </td>
      <td width="175" valign="top">
        <p>&nbsp;</p>
      </td>
    </tr>
    <tr>
      <td width="397" valign="top">
        <p>Blank</p>
      </td>
      <td width="175" valign="top">
        <p>Complete Delamination</p>
      </td>
    </tr>
    <tr>
      <td width="397" valign="top">
        <p>Phosphated</p>
      </td>
      <td width="175" valign="top">
        <p>Negligible Delamination</p>
      </td>
    </tr>
    <tr>
      <td width="397" valign="top">
        <p>Sulfane (5%, nat. pH, as-cured)</p>
      </td>
      <td width="175" valign="top">
        <p>Negligible Delamination</p>
      </td>
    </tr>
    <tr>
      <td width="397" valign="top">
        <p>Bis-amino (2%, pH=8, baked)</p>
      </td>
      <td width="175" valign="top">
        <p>Negligible Delamination</p>
      </td>
    </tr>
    <tr>
      <td width="397" valign="top">
        <p>&nbsp;</p>
      </td>
      <td width="175" valign="top">
        <p>&nbsp;</p>
      </td>
    </tr>
    <tr>
      <td width="397" valign="top">
        <p>CRS</p>
      </td>
      <td width="175" valign="top">
        <p>&nbsp;</p>
      </td>
    </tr>
    <tr>
      <td width="397" valign="top">
        <p>Blank</p>
      </td>
      <td width="175" valign="top">
        <p>6.8 � 1.7</p>
      </td>
    </tr>
    <tr>
      <td width="397" valign="top">
        <p>Phosphated</p>
      </td>
      <td width="175" valign="top">
        <p>Negligible delamination</p>
      </td>
    </tr>
    <tr>
      <td width="397" valign="top">
        <p>Bis-amino (2%, pH=8, baked)</p>
      </td>
      <td width="175" valign="top">
        <p>4.7 � 2.5</p>
      </td>
    </tr>
    <tr>
      <td width="397" valign="top">
        <p>Bis-amino (2%, pH=5, baked)</p>
      </td>
      <td width="175" valign="top">
        <p>5 � 1.7</p>
      </td>
    </tr>
    <tr>
      <td width="397" valign="top">
        <p>Bis-polysulfur (5%, nat. pH, as-cured)</p>
      </td>
      <td width="175" valign="top">
        <p>Complete delamination</p>
      </td>
    </tr>
    <tr>
      <td width="397" valign="top">
        <p>Bis-polysulfur + Bis-amino (2% conc. Each prehydrolysed &amp; vol.
        ratio of mixing is 1:3), pH=8, as-cured</p>
      </td>
      <td width="175" valign="top">
        <p>1.1 � 0.4</p>
      </td>
    </tr>
    <tr>
      <td width="397" valign="top">
        <p>Bis-polysulfur + Bis-amino (2% conc. Each prehydrolysed &amp; vol.
        ratio of mixing is 1:9), pH=8, as-cured</p>
      </td>
      <td width="175" valign="top">
        <p>3.5 � 2.0</p>
      </td>
    </tr>
    <tr>
      <td width="397" valign="top">
        <p>Bis-polysulfur + Bis-amino (2% conc. Each prehydrolysed &amp; vol.
        ratio of mixing is 1:1), pH=8, as-cured</p>
      </td>
      <td width="175" valign="top">
        <p>6.1 � 1.8</p>
      </td>
    </tr>
    <tr>
      <td width="397" valign="top">
        <p>&nbsp;</p>
      </td>
      <td width="175" valign="top">
        <p>&nbsp;</p>
      </td>
    </tr>
    <tr>
      <td width="397" valign="top">
        <p><b>Al alloys (AL6061 &amp; AL 6111)</b></p>
      </td>
      <td width="175" valign="top">
        <p>&nbsp;</p>
      </td>
    </tr>
    <tr>
      <td width="397" valign="top">
        <p><b>Phosphated</b></p>
      </td>
      <td width="175" valign="top">
        <p>Negligible delamination</p>
      </td>
    </tr>
    <tr>
      <td width="397" valign="top">
        <p>Bis-amino (2%, pH=8, baked)</p>
      </td>
      <td width="175" valign="top">
        <p>Negligible Delamination</p>
      </td>
    </tr>
    <tr>
      <td width="397" valign="top">
        <p>Bis-amino (2%, pH=8, as-cured)</p>
      </td>
      <td width="175" valign="top">
        <p>Negligible Delamination</p>
      </td>
    </tr>
  </table>
  </center>
</div>
  <p><sup>*&nbsp;&nbsp; </sup>cured at 100<sup>o</sup>C for 5 minutes</p>
  <p><sup>**</sup> Average Creep &lt; 0.5 mm</p>
  <SCRIPT>comment(23)</SCRIPT><p><b>Table 2: GM SCAB Creep Test Results<br>
  </b>(4 weeks of exposure to 60<sup>o</sup>C &amp; 85%R.H)</p>
<div align="center">
  <center>
  <table border="1" cellspacing="0" cellpadding="0">
    <tr>
      <td width="395" valign="top">
        <p><b>Specimen</b></p>
      </td>
      <td width="177" valign="top">
        <p><b>Creep (mm)</b></p>
      </td>
    </tr>
    <tr>
      <td width="395" valign="top">
        <p><b>EGS</b></p>
      </td>
      <td width="177" valign="top">
        <p>&nbsp;</p>
      </td>
    </tr>
    <tr>
      <td width="395" valign="top">
        <p>Blank</p>
      </td>
      <td width="177" valign="top">
        <p>6.0 � 1.5</p>
      </td>
    </tr>
    <tr>
      <td width="395" valign="top">
        <p>Phosphated</p>
      </td>
      <td width="177" valign="top">
        <p>Negligible delamination<sup>*</sup></p>
      </td>
    </tr>
    <tr>
      <td width="395" valign="top">
        <p>Bis-amino (2.0%, pH=8,baked)</p>
      </td>
      <td width="177" valign="top">
        <p>Negligible delamination</p>
      </td>
    </tr>
    <tr>
      <td width="395" valign="top">
        <p>Bis-amino (2.0%, pH=5,baked)</p>
      </td>
      <td width="177" valign="top">
        <p>2.8 � 2.2</p>
      </td>
    </tr>
    <tr>
      <td width="395" valign="top">
        <p>Bis-polysulfur (5%, natural pH, as-cured)</p>
      </td>
      <td width="177" valign="top">
        <p>Negligible delamination</p>
      </td>
    </tr>
    <tr>
      <td width="395" valign="top">
        <p>&nbsp;</p>
      </td>
      <td width="177" valign="top">
        <p>&nbsp;</p>
      </td>
    </tr>
    <tr>
      <td width="395" valign="top">
        <p><b>HDG</b></p>
      </td>
      <td width="177" valign="top">
        <p>&nbsp;</p>
      </td>
    </tr>
    <tr>
      <td width="395" valign="top">
        <p>Blank</p>
      </td>
      <td width="177" valign="top">
        <p>4.7 � 2.6</p>
      </td>
    </tr>
    <tr>
      <td width="395" valign="top">
        <p>Phosphated</p>
      </td>
      <td width="177" valign="top">
        <p>Negligible delamination</p>
      </td>
    </tr>
    <tr>
      <td width="395" valign="top">
        <p>Bis-amino (2%, pH=8, as-cured)</p>
      </td>
      <td width="177" valign="top">
        <p>Negligible delamination</p>
      </td>
    </tr>
    <tr>
      <td width="395" valign="top">
        <p>Bis-amino (2%, pH=8, baked)</p>
      </td>
      <td width="177" valign="top">
        <p>Negligible delamination</p>
      </td>
    </tr>
    <tr>
      <td width="395" valign="top">
        <p>Bis-polysulfur (nat. pH, in-place cured)</p>
      </td>
      <td width="177" valign="top">
        <p>Negligible delamination</p>
      </td>
    </tr>
    <tr>
      <td width="395" valign="top">
        <p>&nbsp;</p>
      </td>
      <td width="177" valign="top">
        <p>&nbsp;</p>
      </td>
    </tr>
    <tr>
      <td width="395" valign="top">
        <p><b>CRS</b></p>
      </td>
      <td width="177" valign="top">
        <p>&nbsp;</p>
      </td>
    </tr>
    <tr>
      <td width="395" valign="top">
        <p>Blank</p>
      </td>
      <td width="177" valign="top">
        <p>27.0 � 10.1</p>
      </td>
    </tr>
    <tr>
      <td width="395" valign="top">
        <p>Phosphated</p>
      </td>
      <td width="177" valign="top">
        <p>3.5 � 0.7</p>
      </td>
    </tr>
    <tr>
      <td width="395" valign="top">
        <p>Bis-amino (2%, pH=8, baked)</p>
      </td>
      <td width="177" valign="top">
        <p>18.6 � 5.4</p>
      </td>
    </tr>
    <tr>
      <td width="395" valign="top">
        <p>Bis-polysulfur (5%, nat. pH, as-cured)</p>
      </td>
      <td width="177" valign="top">
        <p>10.5 � 3.6</p>
      </td>
    </tr>
    <tr>
      <td width="395" valign="top">
        <p>Bis-amino + bis-polysulfur mix. (2%, 9:1 vol.ratio, pH=8, as-cured)</p>
      </td>
      <td width="177" valign="top">
        <p>6.5 � 1.7</p>
      </td>
    </tr>
    <tr>
      <td width="395" valign="top">
        <p>&nbsp;</p>
      </td>
      <td width="177" valign="top">
        <p>&nbsp;</p>
      </td>
    </tr>
    <tr>
      <td width="395" valign="top">
        <p><b>Al alloys (Al 6061 &amp; Al 6111)</b></p>
      </td>
      <td width="177" valign="top">
        <p>&nbsp;</p>
      </td>
    </tr>
    <tr>
      <td width="395" valign="top">
        <p>Blank</p>
      </td>
      <td width="177" valign="top">
        <p>Negligible delamination</p>
      </td>
    </tr>
    <tr>
      <td width="395" valign="top">
        <p>Phosphated</p>
      </td>
      <td width="177" valign="top">
        <p>Negligible delamination</p>
      </td>
    </tr>
    <tr>
      <td width="395" valign="top">
        <p>bis-amino (2%, pH=8, as-cured)</p>
      </td>
      <td width="177" valign="top">
        <p>Negligible delamination</p>
      </td>
    </tr>
    <tr>
      <td width="395" valign="top">
        <p>Bis-amino (2%, pH=8, baked)</p>
      </td>
      <td width="177" valign="top">
        <p>Negligible delamination</p>
      </td>
    </tr>
  </table>
  </center>
</div>
  <p>* Average Creep &lt; 0.5 mm</p>
  <SCRIPT>comment(24)</SCRIPT><p><b>Table 3: EIS of Electrocoated Automotive Steels</b></p>
<div align="center">
  <center>
  <table border="1" cellspacing="0" cellpadding="0">
    <tr>
      <td width="197" valign="top">
        <p><b>AUTOMOTIVE SYSTEM</b></p>
      </td>
      <td width="196" valign="top">
        <p><b>CORROSION RESISTANCE</b> (R<sub>corr</sub> in Ohms)- After 8 weeks
        in neutral 3% NaCl.</p>
      </td>
      <td width="197" valign="top">
        <p><b>CORROSION RESISTANCE</b> (R<sub>corr</sub> in Ohms)- After 8 weeks
        in 3% NaCl (pH=3).</p>
      </td>
    </tr>
    <tr>
      <td width="197" valign="top">
        <p>EGS</p>
      </td>
      <td width="196" valign="top">
        <p>&nbsp;</p>
      </td>
      <td width="197" valign="top">
        <p>&nbsp;</p>
      </td>
    </tr>
    <tr>
      <td width="197" valign="top">
        <p>Alkaline-Cleaned only</p>
      </td>
      <td width="196" valign="top">
        <p>1.19 x 10<sup>9</sup></p>
      </td>
      <td width="197" valign="top">
        <p>9.96 x 10<sup>6</sup></p>
      </td>
    </tr>
    <tr>
      <td width="197" valign="top">
        <p>Phosphated</p>
      </td>
      <td width="196" valign="top">
        <p>3.31 x 10<sup>10</sup></p>
      </td>
      <td width="197" valign="top">
        <p>3.25 x 10<sup>5</sup></p>
      </td>
    </tr>
    <tr>
      <td width="197" valign="top">
        <p>Bis-amino (2%, pH=8, baked)</p>
      </td>
      <td width="196" valign="top">
        <p>1.29 x 10<sup>10</sup></p>
      </td>
      <td width="197" valign="top">
        <p>5.69 x 10<sup>9</sup></p>
      </td>
    </tr>
    <tr>
      <td width="197" valign="top">
        <p>&nbsp;</p>
      </td>
      <td width="196" valign="top">
        <p>&nbsp;</p>
      </td>
      <td width="197" valign="top">
        <p>&nbsp;</p>
      </td>
    </tr>
    <tr>
      <td width="197" valign="top">
        <p>HDG</p>
      </td>
      <td width="196" valign="top">
        <p>&nbsp;</p>
      </td>
      <td width="197" valign="top">
        <p>&nbsp;</p>
      </td>
    </tr>
    <tr>
      <td width="197" valign="top">
        <p>Alkaline-Cleaned only</p>
      </td>
      <td width="196" valign="top">
        <p>6.78 x 10<sup>9</sup></p>
      </td>
      <td width="197" valign="top">
        <p>9.7 x 10<sup>10</sup></p>
      </td>
    </tr>
    <tr>
      <td width="197" valign="top">
        <p>Phosphated</p>
      </td>
      <td width="196" valign="top">
        <p>6.69 x 10<sup>9</sup></p>
      </td>
      <td width="197" valign="top">
        <p>8.75 x 10<sup>5</sup></p>
      </td>
    </tr>
    <tr>
      <td width="197" valign="top">
        <p>Bis-amino (2%) coated</p>
      </td>
      <td width="196" valign="top">
        <p>3.60 x 10<sup>10</sup></p>
      </td>
      <td width="197" valign="top">
        <p>2.75 x 10<sup>11</sup></p>
      </td>
    </tr>
    <tr>
      <td width="197" valign="top">
        <p>&nbsp;</p>
      </td>
      <td width="196" valign="top">
        <p>&nbsp;</p>
      </td>
      <td width="197" valign="top">
        <p>&nbsp;</p>
      </td>
    </tr>
    <tr>
      <td width="197" valign="top">
        <p>CRS</p>
      </td>
      <td width="196" valign="top">
        <p>&nbsp;</p>
      </td>
      <td width="197" valign="top">
        <p>&nbsp;</p>
      </td>
    </tr>
    <tr>
      <td width="197" valign="top">
        <p>Alkaline-Cleaned only</p>
      </td>
      <td width="196" valign="top">
        <p>4.63 x 10<sup>9</sup></p>
      </td>
      <td width="197" valign="top">
        <p>2.75 x 10<sup>8</sup></p>
      </td>
    </tr>
    <tr>
      <td width="197" valign="top">
        <p>Phosphated</p>
      </td>
      <td width="196" valign="top">
        <p>5.59 x 10<sup>9</sup></p>
      </td>
      <td width="197" valign="top">
        <p>1.44 x 10<sup>6</sup></p>
      </td>
    </tr>
    <tr>
      <td width="197" valign="top">
        <p>5% bis-polysulfur (nat.pH, as-cured)</p>
      </td>
      <td width="196" valign="top">
        <p>1.47 x 10<sup>11</sup></p>
      </td>
      <td width="197" valign="top">
        <p>2.63 x 10<sup>9</sup></p>
      </td>
    </tr>
    <tr>
      <td width="197" valign="top">
        <p>&nbsp;</p>
      </td>
      <td width="196" valign="top">
        <p>&nbsp;</p>
      </td>
      <td width="197" valign="top">
        <p>&nbsp;</p>
      </td>
    </tr>
    <tr>
      <td width="197" valign="top">
        <p>Al6061</p>
      </td>
      <td width="196" valign="top">
        <p>&nbsp;</p>
      </td>
      <td width="197" valign="top">
        <p>&nbsp;</p>
      </td>
    </tr>
    <tr>
      <td width="197" valign="top">
        <p>Alkaline-Cleaned only</p>
      </td>
      <td width="196" valign="top">
        <p>1.37 x 10<sup>11</sup></p>
      </td>
      <td width="197" valign="top">
        <p>9.8 x 10<sup>7</sup></p>
      </td>
    </tr>
    <tr>
      <td width="197" valign="top">
        <p>Phosphated</p>
      </td>
      <td width="196" valign="top">
        <p>3.48 x 10<sup>10</sup></p>
      </td>
      <td width="197" valign="top">
        <p>3.45 x 10<sup>10</sup></p>
      </td>
    </tr>
    <tr>
      <td width="197" valign="top">
        <p>Bis-amino coated (2%)</p>
      </td>
      <td width="196" valign="top">
        <p>5.34 x 10<sup>9</sup></p>
      </td>
      <td width="197" valign="top">
        <p>3.23 x 10<sup>11</sup></p>
      </td>
    </tr>
  </table>
  </center>
</div>
  <p><img border="0" src="{{ $htmURL }}fig1.jpg" width="782" height="456"></p>
  <SCRIPT>comment(25)</SCRIPT><p><b>Figure 1: Hot salt soak test of e-coated EGS</b></p>
  <p><img border="0" src="{{ $htmURL }}fig2.gif" width="569" height="290"></p>
  <SCRIPT>comment(26)</SCRIPT><p><b>Figure 2: Model for a corroding automotive metal with an electrocoat</b></p>
  <p><img border="0" src="{{ $htmURL }}v2p14_image004.jpg" width="648" height="367"></p>
  <SCRIPT>comment(27)</SCRIPT><p><b>Fig. 3: IR Spectrum of bis-amino (2%, pH= 8.5) on polished Chrome Steel</b></p>
  <p><b><img border="0" src="{{ $htmURL }}v2p14_image006.jpg" width="648" height="371"></b></p>
  <SCRIPT>comment(28)</SCRIPT><p><b>Fig. 4: IR spectrum of bis-polysulfur (5%, natural pH) on polished
  stainless steel</b></p>
  <p><img border="0" src="{{ $htmURL }}v2p14_image008.jpg" width="672" height="351"></p>
  <SCRIPT>comment(29)</SCRIPT><p><b>Fig. 5: IR spectrum of bis-amino and bis-sulfur mixture (3:1) on
  polished stainless steel</b></p>
  <p><img border="0" src="{{ $htmURL }}fig6.jpg" width="579" height="320"></p>
  <SCRIPT>comment(30)</SCRIPT><p><b>Figure 6: AFM image of a bis-polysulfur silane coated Zn surface</b></p>
  <p><img border="0" src="{{ $htmURL }}fig7.jpg" width="579" height="316"></p>
  <SCRIPT>comment(31)</SCRIPT><p><b>Figure 7: AFM image of a bis-amino silane coated Zn surface</b></p>
  <p><img border="0" src="{{ $htmURL }}fig8.jpg" width="573" height="321"></p>
  <SCRIPT>comment(32)</SCRIPT><p><b>Figure 8: AFM image of a bis-polysulfur silane coated Zn surface</b></p>
<SCRIPT>footer()</SCRIPT></html>
