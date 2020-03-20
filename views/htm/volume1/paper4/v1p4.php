<?php 
session_start();
include_once('/home/jcsete5/public_html/jcse.org/jcse/php_inc/jrnl_subs.php');
$logged_in=is_loggedin();
?>
<!DOCTYPE HTML PUBLIC "-//W3O/DTD HTML//EN">
<html>

<head>
<title>JCSE Volume 1, Paper 4</title>
<meta name="GENERATOR" content="Microsoft FrontPage 6.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<link rel="schema.DC" href="http://purl.org/dc"> 
<link rel="schema.Corrosion" href="http://www.umist.ac.uk/corrosion/ocean/OSIS_1.0_doc" title="OCEAN Service Information Sheet">
<meta name="DC.Title" content="JCSE Volume 1, Paper 4, An Electrochemical Investigation of the Corrosion Behavior of Aluminum Alloy AA5052 in Methanolic Solutions"> 
<meta name="DC.Publisher" content="UMIST"> 
<meta name="DC.Date" scheme="W3CDTF" content="2000-05-25"> 
<meta name="DC.Type" scheme="DCMIType" content="Text"> 
<meta name="DC.Format" content="text/html"> 
<meta name="DC.Format" content="26928 bytes"> 
<meta name="DC.Identifier" content="http://www.jcse.org/vol1/paper4/v1p4.php"> 
<meta name="DC.Rights" scheme="OCEANRights" content="access=free; address=www.jcse.org/details.php" >
<meta name="DC.Subject" scheme="OCEANDictionary-V00001" content="aluminium-manganese alloys; passivity; pitting">

<SCRIPT src="/getcomm.php?vol=1&pap=4"></SCRIPT>
<SCRIPT src="/jsinc/jcsesubs.js.php"></SCRIPT>
<SCRIPT>
getcommentmode();</SCRIPT></HEAD><body>
<script>var lgi=<?php if ($logged_in) { echo('true');} else { echo('false');} ?>;</script>
<script src="/jsinc/writeheader.js"></script><?php ggl_ad(); ?>
<h2>Volume 1 Paper 4</h2>
<script>ifnotmode(3,'<p>Submitted 15 July 1995, revised version submitted 29 November 1995</p>');</script>
<hr>
<h2>An Electrochemical Investigation of the Corrosion Behavior of Aluminum
  Alloy AA5052 in Methanolic Solutions</h2>
  <p><b>L. A. Pawlick, R. G. Kelly</b><br>
  <i>Center for Electrochemical Science and Engineering<br>
  Department of Materials Science and Engineering<br>
  University of Virginia<br>
  Charlottesville, VA 22903</i></p>
<SCRIPT>notify();</SCRIPT><SCRIPT>comment(1)</SCRIPT><h4>ABSTRACT</h4>
  <p>The electrochemical behavior of aluminum alloy AA5052 in methanolic
  solutions containing low concentrations of acid, chloride, sulfate and water
  has been studied. In all solutions investigated, the alloy exhibited
  spontaneous passivity. The addition of 1 mM acid increased the corrosion
  potential dramatically, whereas 1 mM chloride decreased the pitting potential
  and 1mM sulfate had no measurable effects. Water appears to decrease the
  pitting potential due to the enhancement of aluminum ion hydrolysis at
  incipient pits. No important second order interactions were observed. The
  effects of acid on the corrosion potential and rate are explained in terms of
  mixed potential theory.</p>
<SCRIPT>comment(2)</SCRIPT><h4>INTRODUCTION</h4>
  <p>As the use of alcohol in automotive fuels increases due to environmental
  concerns, so does the need to characterize and understand the corrosion of
  metals and alloys in alcoholic solutions. Of particular importance are the
  effects of low levels of the impurities commonly expected in these fuels such
  as acid, chloride, sulfate, and water. In recent work on iron in methanolic
  solutions, Brossia and Kelly first developed a quantitative characterization
  of the electrochemical phenomenology of iron in methanolic solutions including
  the effects of common impurities [1] which led to a description of the
  mechanisms underlying the accelerating effects of acid and the inhibitory
  effects of water on the open circuit corrosion rate [2]. One of the key
  elements of that work involved the use of statistical experimental design [3]
  to allow a quantitative analysis of the main (first-order) effects of the
  various solution additions, second-order interactions and an estimate of the
  experimental error. The error estimation permitted the statistical
  significance of each effect to be quantitatively assessed.</p>
<SCRIPT>comment(3)</SCRIPT>  <p>Brossia et al. [2] were able to explain the two primary empirical
  observations concerning the effect of acid on the corrosion of iron in
  methanol [4-6]: large increases in corrosion rate (by a factor of 15 due to a
  1 mM acid addition [4]) and the corrosion potential (by 200 mV due to a 1 mM
  acid addition [5]). Brossia et al. [2] showed that the effects of acid were
  due to two separable phenomena; acid activates the originally passive iron
  surface, and proton reduction has substantially faster kinetics than oxygen
  reduction in acidified methanol. This latter effect dominates, leading to an
  increase in the corrosion potential with a subsequent increase in corrosion
  rate.</p>
<SCRIPT>comment(4)</SCRIPT>  <p>The addition of water inhibits the corrosion of iron in acidic methanol
  dramatically [1-6]. Brossia et al. [2] determined that proton reduction was
  under substantial mass transport control at the corrosion potential of iron.
  They then showed that the addition of water to acidified solutions reduced the
  corrosion rate predominantly by inhibiting the mobility of the proton, thus
  reducing the proton diffusivity and hence the diffusion limited current
  density of the dominant cathodic reaction in acidified methanol. This
  reduction in diffusion limited current density led directly to the decrease in
  the corrosion rate. The reduction in proton mobility is due to the
  preferential solvation of protons by water relative to methanol [7]. At low
  concentrations of water, this limits the proton hopping that is important for
  conductivity.</p>
<SCRIPT>comment(5)</SCRIPT>  <p>In an extension of that work, the electrochemical behavior of aluminum
  alloy AA5052 has been studied and analyzed. By studying a valve metal such as
  aluminum which passivates with a thick film, information on the effect of the
  nature of the passive film on the corrosion of materials in methanol can be
  gained. In addition, AA5052 is being considered as a construction material for
  future automobile fuel tanks. Thus, an assessment of the effects of impurities
  on its corrosion behavior would have practical importance as well.</p>
<SCRIPT>comment(6)</SCRIPT>  <p>Limited previous work on the corrosion of aluminum alloys in methanolic
  solutions has been performed. Mansfeld [8] and Palit et al. [9] focussed on
  the corrosion of aluminum alloys in strongly acidified methanolic solutions.
  Upon anodic polarization of AA6061 above 0 V(SCE) in 0.1 N sulfuric acid,
  Mansfeld observed pitting with gas evolution from the pits. He proposed that
  the pitting was due to the presence of the sulfate ion. Palit et al. [9] also
  observed pitting of pure Al in acidic methanol in solutions open to air.
  Hronsky [10] measured weight loss for pure Al in 0.3 M HCl. Severe pitting was
  observed under open circuit conditions. Wing et al. [11] and Lash [12] also
  used coupon testing to investigate the behavior of various cast aluminum
  alloys in M85 (15% fuel, 85% methanol with 1.1mM acid, 0.1% water, and 0.07mM
  chloride). They found substantial weight losses and pitting of the cast Al
  alloys.</p>
<SCRIPT>comment(7)</SCRIPT><p>In order to better understand the corrosion of aluminum alloys in methanol,
  the present study was conducted. The corrosion and electrochemical behavior of
  AA5052 in a variety of methanolic solutions was studied and the effects of the
  addition of several impurities were quantified and explained in terms of the
  previous work on iron [2]. Previous observations in this area are also
  rationalized within the framework of mixed potential theory.</p>
<SCRIPT>comment(8)</SCRIPT><h4>EXPERIMENTAL</h4>
  <p><i>Materials</i> - Aluminum alloy AA5052 was supplied by Kobe Steel in the
  form of 0.50 mm thick sheet. Its composition was (in wt.%) 2.46 Mn, 0.22 Fe,
  0.19 Cr, 0.1 Si, 0.02 Ti, remainder Al. Disk electrodes were cut from the
  sheet and wet polished with successively finer silicon carbide paper to a 600
  grit finish.</p>
<SCRIPT>comment(9)</SCRIPT><p><i>Solutions</i> - All test solutions were based on spectrophotometry
  grade, &quot;Photrex&quot; reagent methanol (J.T. Baker). All solutions
  contained 0.1 M anhydrous sodium perchlorate (Aesar) as a supporting
  electrolyte. Other solution additions included water, chloride, sulfate,
  and/or acid. The chloride was added as anhydrous lithium chloride (Fisher),
  the sulfate as anhydrous sodium sulfate (Aldrich), and acid as sulfuric acid.
  The water content of the solutions was measured via Karl Fischer titration (Mettler
  DL-18). A full factorial design was used to investigate the effects of the
  various impurities. Two levels of concentration were used, zero and 1 mM,
  except for water. The inherent water level of the methanol and that added from
  perchlorate led to a minimum water content for solutions of &lt;0.06 wt.%. The
  effects of water were studied by the addition of water to a concentration of
  wt.%. No efforts were made to remove dissolved molecular oxygen as this would
  tend to evaporate large quantities of methanol, changing the concentrations of
  the dissolved substances. Previous work has identified the relevant cathodic
  reactions at occurring in the different solutions.</p>
<SCRIPT>comment(10)</SCRIPT><p><i>Testing Procedures</i> - All experiments were conducted at room
  temperature. Electrochemical measurements were conducted with an E.G.&amp;G.
  Princeton Applied Research (PAR) Versastat(TM) controlled by the PAR Model 352
  software. A silver/silver chloride (SSC) electrode immersed in a compartment
  containing methanol with 0.1 M LiCl and 1.5 mass% water was used as the
  reference electrode. The reference electrode was separated from the working
  electrode solution by a Vycor(TM) frit. The SSC electrode has a potential of
  -29 mV vs. an aqueous saturated calomel electrode. The SSC was found to be
  very stable with respect to time and minimized the liquid junction potential
  [13]. Cyclic polarization scans were conducted at a scan rate of 0.5 mV/s
  starting at an initial potential of -0.8 V(SSC). A vertex current density of 5
  mA/cm2 was used. Automatic current interruption was used for on-line
  correction for ohmic drop.</p>
<SCRIPT>comment(11)</SCRIPT><p><i>Analysis Procedures</i> - Each curve was analyzed for corrosion
  potential, corrosion current density and pitting potential. The corrosion
  current density was determined by use of PARcalc(TM) and checked manually by
  Tafel extrapolation. To quantitatively determine the significance of the
  effects of added impurities and the experimental error, the results of the <a href="factor.php">full
  factorial design </a>were analyzed with Number Cruncher Statistical Software (NCSS)
  ver.5.03 (licensed by J. L. Hintze). Performing duplicate experiments for each
  condition and comparing the results of all experiments containing the solution
  species of interest to all experiments that did not contain that species
  allowed for the separation of effects due to single impurities as well as any
  synergistic effects between species. Upon completion of the tests, each effect
  was statistically analyzed to determine its significance as well as to
  determine the experimental error.</p>
<SCRIPT>comment(12)</SCRIPT><h4>&nbsp;RESULTS</h4>
  <p>In the base solution, AA5052 did not exhibit an active-passive transition
  as shown in <a href="figure1.php">Figure 1</a>. This lack of an
  active-passive transition near the corrosion potential can be termed
  spontaneous passivity, and this term is used throughout this manuscript to
  refer to such behavior. This passive region was limited at +0.35 V(SSC) by
  pitting as shown in the photomicrograph of <a href="figure2.php">Figure 2</a>.
  The effects on the polarization behavior of the addition of individual
  impurities (1 mM acid or 1 mM sulfate or 1 mM chloride or 0.5 wt.% water) are
  shown in <a href="figure3.php">Figure 3</a>. Acid increased the open circuit
  potential and decreased the pitting potential of the AA5052, and increased the
  open circuit corrosion rate slightly. The addition of water led to a decrease
  in the pitting potential, while sulfate had little effect. Chloride decreased
  the pitting potential.</p>
<SCRIPT>comment(13)</SCRIPT><p>A summary of the first order effects of the impurities on the
  electrochemical parameters that characterize the corrosion process in both low
  and high water contents is shown in <a href="figure4.php">Figures 4</a> and <a href="figure5.php">5</a>.
  None of the solution species had a dramatic effect on the corrosion rate,
  either alone or in combination. No significant synergistic effects were
  observed. In all solutions studied in which acid was present, the corrosion
  potential rose dramatically. Acid was the only solution addition studied which
  affected the corrosion potential to a statistically significant degree. A
  solution containing acid and water led to an increased OCP and a decreased
  pitting potential as shown in <a href="figure6.php">Figure 6</a>. None of the
  solution additions had a significant effect on the repassivation potential,
  with all values close to -0.44 V(SCE).</p>
<SCRIPT>comment(14)</SCRIPT><p>In order to investigate the importance of hydrolysis on the stabilization
  of pits, a study was performed in which AlCl3 was added and its effects on the
  acid concentration and the corrosion of the AA5052 were studied. The initial
  water concentration was 500 ppm, and the open circuit potential of the AA5052
  was -0.5 V(SSC). Upon addition of the 0.05 M AlCl<sub>3</sub>, a white
  precipitate formed and the solution fizzed. The open circuit potential of the
  AA5052 fell to -1.1 V(SSC) and the polarization resistance decreased from 897
  to 4.3 ohms-cm<sup>2</sup>. Post-test inspection of the surface showed that
  the attack was pitting, not uniform corrosion. The diffusion limited current
  density on Pt increased after the addition of the AlCl<sub>3</sub> to
  approximately 1.3 mA/cm<sup>2</sup>, indicative of a acid concentration of
  approximately 60 mM. Water was then added to the solution to increase its
  concentration to 0.5 wt.%. This addition resulted in the reduction in the
  diffusion limited current density for proton reduction on Pt to 0.929 mA/cm<sup>2</sup>.
  The corrosion potential of the AA5052 increased to -0.722 V(SSC) and the
  polarization resistance also increased to 491ohms-cm<sup>2</sup>.</p>
<SCRIPT>comment(15)</SCRIPT><h4>&nbsp;DISCUSSION</h4>
  <p>In all solutions studied, AA5052 exhibits spontaneous passivity, indicating
  that the air-formed film is stable at and near the open circuit potential (<a href="figure1.php">Figure
  1</a>). The correspondence of the measured pitting potential to the
  stabilization of localized attack was established via post-test examination (<a href="figure2.php">Figure
  2</a>). While the effects of sulfate, chloride, acid and water on the open
  circuit corrosion parameters (i.e., corrosion rate and corrosion potential)
  were qualitatively similar to those observed for iron previously [1,2], the
  effects are much smaller quantitatively. Of particular interest was the small
  effect of low levels of acidity. At these same levels of acid, iron
  spontaneously activated under open circuit conditions [2]. These levels might
  reasonably be expected in a methanol fuel [11]. Thus, it might appear that
  AA5052 tanks would perform better from a corrosion standpoint than steel in
  such an application. However, it should be noted that the presence of 1 mM
  acid did increase the corrosion potential of the AA5052 substantially (ca. 200
  mV) while lowering its pitting potential by 100 mV (<a href="figure3.php">Figure
  3</a>). This decrease in the range of passivity increases the probability of
  stable pitting occuring under open circuit conditions.</p>
<SCRIPT>comment(16)</SCRIPT><p>As was also observed for iron [2], sulfate had no effect on the corrosion
  behavior of AA5052 (<a href="figure4.php">Figures 4</a> and <a href="figure5.php">5</a>).
  This is contrary to the conclusions of Mansfeld [8] who speculated that
  sulfate was the cause of the pitting of a variety of alloys (including AA6061)
  in acidified methanol. The experiments in that work were not designed to
  separate the effects of acid from those of the sulfate. In the present work,
  the use of sodium sulfate and a statistical experimental design allowed the
  individual effects of each species to be determined, indicating that AA5052
  will pit in neutral methanolic solutions in the absence of sulfate upon
  sufficient anodic polarization. The low pitting potential observed by Mansfeld
  of 0 V(SCE) was most likely due to the high acidity (0.2 M) present in his
  solutions.</p>
<SCRIPT>comment(17)</SCRIPT><p>As shown in <a href="figure3.php">Figure 3</a>, the addition of 1 mM acid
  increased the corrosion potential of AA5052 by 100 mV. This increase results
  from the introduction of an additional cathodic reaction (proton reduction)
  with faster kinetics than oxygen reduction (which is the predominant cathodic
  reaction in neutral methanol [2]). Unlike iron, the small acid addition does
  not activate the surface of the AA5052, so the increase in corrosion rate is
  quite modest and due solely to the slight increase in passive current density
  with potential (<a href="figure1.php">Figure 1</a>). The addition of 1 mM
  acid also decreases the pitting potential of the AA5052 by 200 mV, which
  combined with the 100 mV increase in the corrosion potential, significantly
  decreases the passive range of the alloy (<a href="figure6.php">Figure 6</a>).
  It would be expected that sufficient increase in the acid concentration would
  lead to the equivalence of the corrosion and pitting potentials, leading to
  pitting under open circuit conditions as observed by Hronsky [10] for pure Al
  in strongly acidified methanol. The high chloride content of Hronsky's
  solutions would also be expected to contribute to a decrease the pitting
  potential, as shown in this work. Wing and Evarts [11] also observed pitting
  of AA356 under open circuit conditions in a simulated 85% methanol fuel
  containing low levels of chloride, acid and water.</p>
<SCRIPT>comment(18)</SCRIPT><p>Water has a very small effect on the open circuit corrosion rate of AA5052,
  even in the presence of acid. This is not unexpected, due to the fact that the
  alloy surface remains passive. Under these conditions, the decrease in the
  limiting current for proton reduction due to the addition of water [2] will
  not have an effect on the corrosion rate, i.e., the corrosion potential of
  AA5052 is in the activation control region of the proton reduction reaction in
  methanol.</p>
<SCRIPT>comment(19)</SCRIPT><p>The deleterious effect of water on the pitting potential was unexpected.
  Generally, water is considered to improve the ability of the passive film to
  form in nonaqueous solutions, particularly under acidic conditions [1-6]. One
  explanation for the present results showing a clearly deleterious effect on
  water on the pitting potential is an increase in the stabilization of pitting
  that could result from hydrolysis of Al ions produced at metastable pits. It
  has become generally accepted that the pitting potential observed in
  potentiodynamic polarization scans is related to the conditions under which
  pits can propagate stably, rather than the potential at which they can
  initiate. Under such conditions, the high level of acidity required for
  localized corrosion site propagation must be achieved by hydrolysis of Al<sup>3+</sup>
  at the incipient pit. As the water content of the solution increases, the
  hydrolysis becomes less reactant limited and stabilization of pitting occurs
  at lower potentials.</p>
<SCRIPT>comment(20)</SCRIPT><p align="left">This proposal was tested by the study of the addition of AlCl<sub>3</sub>
  on the acid content and the corrosion of the AA5052. The addition of the AlCl<sub>3</sub>
  caused fizzing and the formation of a white precipitate. The hydrolysis of the
  aluminum salt would occur via:</p>
<SCRIPT>comment(21)</SCRIPT><p align="center">AlCl<sub>3</sub> + 3H<sub>2</sub>O = Al(OH)<sub>3</sub> +
  3H+ + 3Cl<sup>-</sup>.</p>
<SCRIPT>comment(22)</SCRIPT><p align="left">The reaction proceeded as written as evidenced by the large
  increase in acid content (from 0 to 60 mM) for the 50 mM AlCl<sub>3</sub>
  added. The large decrease in the open circuit potential and spontaneous
  pitting of the AA5052 upon the addition of the AlCl<sub>3</sub> supports the
  contention that the stabilization of the pitting occurs by hydrolysis. The 500
  ppm of water initially present is more than sufficient to allow the hydrolysis
  to occur to completion. The 60 mM of acid (and 150 mM chloride) led to the
  formation of stable pits which propagated at a very high rate due to the
  reduction on protons on the areas which did not pit. The massive decrease in
  the polarization resistance could not be used to calculate a penetration rate,
  due to the localized nature of the attack, but in conjunction with the
  post-test inspection and drop in the open circuit potential, can be used to
  support the contention that the pitting intiated upon addition of the AlCl<sub>3</sub>.
  The addition of further water did decrease the corrosion rate, as signified by
  the increase in polarization resistance from 4.3 to 491 ohms-cm<sup>2</sup>.</p>
<SCRIPT>comment(23)</SCRIPT><p>Thus, water plays several roles in organic solutions. It can decrease the
  mobility of the proton and thereby decrease corrosion rates when active
  corrosion occurs, as has been shown for iron [2] and for the actively pitting
  AA5052 in this study. In addition, for metals which strongly hydrolyze, water
  additions can lower the pitting potential in neutral solutions by enhancing
  the stability of metastable pits. The extent of the effect of water on the
  pitting potential in neutral organic solutions would be expected to depend
  upon the hydrolysis rates of the different metal ions in methanolic solutions,
  as the diffusion limited current density for proton reduction will be
  independent of substrate. Based on previous work on iron [2], in which neither
  water nor acid had deleterious effects on the pitting potential, it appears
  that hydrolysis effects are more important for aluminum. It would be of
  interest to use methanol solutions as test vehicles for studies of metal ion
  hydroylsis and its relation to localized corrosion.</p>
<SCRIPT>comment(24)</SCRIPT><h4>SUMMARY AND CONCLUSIONS</h4>
  <ol>
<SCRIPT>comment(25)</SCRIPT><li>This work has provided additional support for the mechanisms proposed by
      Brossia et al. [2] concerning the deleterious effects of acid and the
      inhibitory effects of water on the corrosion rate of materials in
      methanol. The deleterious effects of acid were shown to be due to the
      addition of a more oxidizing cathodic reaction (proton reduction) which
      has faster kinetics than oxygen reduction, despite the much higher oxygen
      concentration (68 vs. 1 ppm). Water additions to acidified methanol
      inhibit this increase in corrosion rate for actively corroding materials
      by reducing the rate of proton hopping due to preferential solvation of
      the proton by water. For materials such as AA5052 which do not activate in
      1 mM acid, the quantitative effects of water are much smaller than
      materials such as iron which actively corrode in 1 mM acid.<br>
    </li>
<SCRIPT>comment(26)</SCRIPT><li>While the effects of the 1 mM chloride, sulfate and acid were
      qualitatively the same for AA5052 as previously found for iron, all of the
      effects were smaller in magnitude for the AA5052, indicating that the
      aluminum alloy would be more robust to minor impurities present in
      methanol-based fuels.<br>
    </li>
<SCRIPT>comment(27)</SCRIPT><li>The proposed mechanisms for the accelerating effects of acid and the
      inhibitory effects of water on active corrosion have been used to
      rationalize the previously reported work on the corrosion of Al alloys in
      methanol. Much of the previous work did not interprete their results in
      terms of underlying mechanisms. In some cases, this work has been used to
      show that effects previously attributed to sulfate ions were in fact due
      to the presence of high concentrations of acid.<br>
    </li>
<SCRIPT>comment(28)</SCRIPT><li>The deleterious effect of water on the pitting potential has been
      related to the competition between its stabilization effects on incipient
      pits by Al<sup>3+</sup> hydrolysis and its inhibition of the diffusion
      limited current for proton reduction. Thus, while water is generally found
      to be a good inhibitor for general corrosion in acidified organic
      solvents, the addition of small amounts water to an acid-containing
      methanol solution would lead to an increased likelihood of pitting for
      AA5052. At higher water contents, the stabilization of the pitting is
      restricted by the inhibition of the predominant cathodic reaction occuring
      on the passive surface. This effect on the cathodic reaction overcomes the
      effects of water on hydrolysis and water acts as an inhibitor at higher
      concentrations.</li>
  </ol>
<SCRIPT>comment(29)</SCRIPT><h4>ACKNOWLEDGEMENTS</h4>
  <p>The authors would like to acknowledge the technical discussions with C.S.
  Brossia (University of Virginia) as well as the financial support of Kobe
  Steel and equipment support from EG&amp;G Princeton Applied Research. The
  assistance of J. Vining in the preparation of the HTML version of this
  manuscript is also gratefully acknowledged.</p>
<SCRIPT>comment(30)</SCRIPT><h4>REFERENCES</h4>
  <p>[1] C. S. Brossia, R. G. Kelly, Proc. of the 6th Automotive Corrosion and
  Prevention Conf., p. 173, Society of Automotive Engineers, Warrendale, PA
  (1993).</p>
  <p>[2] C. S. Brossia, E. Gileadi, R. G. Kelly, Corros. Sci., in press.</p>
  <p>[3] G. E. P. Box, W. G. Hunter, J. S. Hunter, Statistics for Experimenters,
  Wiley, NY (1978).</p>
  <p>[4] F. Bellucci, G. Capobianco, G. Faita, C. A. Farina, G. Farina, F. Mazza,
  S. Torchio, Corros. Sci., 28, 371 (1988).</p>
  <p>[5] P. L. de Anna, Corros. Sci., 25, 43 (1985).</p>
  <p>[6] F. Mazza, S. Torchio, N. Ghislandi, Int. Cong. on Metallic Corrosion,
  Vol. 1, p. 465, National Research Council of Canada, Ottawa (1984).</p>
  <p>[7] R. DeLisi, M. Goffredi, Electrochim. Acta, 16, 2181 (1971).</p>
  <p>[8] F. Mansfeld, in Galvanic and Pitting Corrosion, ASTM STP 576, R.
  Baboian, W. D. France, L. C. Rowe, Jr., J. F. Rynewicz, eds., Amer. Soc. for
  Testing and Materials, p. 180 (1976).</p>
  <p>[9] G. C. Palit, K. Elayaperumal, Corros. Sci., 18, 169 (1978).</p>
  <p>[10] P. Hronsky, Corrosion, 37, p. 161 (1981).</p>
  <p>[11] L. Wing, G. L. Evarts, D. M. Tramontana, J. Mat. Eng., p. 26 (April,
  1992).</p>
  <p>[12] R. J. Lash, Proc. of the 6th Automotive Corrosion and Prevention
  Conf., p. 153, Society of Automotive Engineers, Warrendale, PA (1993).</p>
  <p>[13] C. S. Brossia, R. G. Kelly, submitted to Electrochim. Acta.</p>
<SCRIPT>footer()</SCRIPT></html>