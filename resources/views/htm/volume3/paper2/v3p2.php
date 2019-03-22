<?php 
session_start();
require_once('/home/jcsete5/public_html/jcse.org/jcse/php_inc/jrnl_subs.php');
$logged_in=is_loggedin();
?>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=iso-8859-1">
<meta name="generator" content="Microsoft FrontPage 6.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<title>JCSE Volume 3, Paper 2</title>
<SCRIPT src="/getcomm.php?vol=3&pap=2"></SCRIPT>
<SCRIPT src="/jsinc/jcsesubs.js.php"></SCRIPT>
<SCRIPT>
getcommentmode();</SCRIPT></HEAD><body>
<script>var lgi=<?php if ($logged_in) { echo('true');} else { echo('false');} ?>;</script>
<script src="/jsinc/writeheader.js"></script><?php ggl_ad(); ?>

  <h2>Volume 3, Paper 2</h2>
  <script>ifnotmode(3,'<p><i><b>Submitted 16th March 2000, published for public review June 2000</b></i></p>');</script>
  <hr>
  <h2>Magnetic Measurements of the Response of Corrosion Activity within
  Aircraft Lap Joints to Accelerated Corrosion Testing</h2>
  <p>Grant Skennerton (1), Afshin Abedi (1), Robert G. Kelly (2), and John P.
  Wikswo, Jr. (1)<br>
  <i>(1) Department of Physics and Astronomy, Vanderbilt University,</i> <i>Nashville,
  TN 37235, USA<br>
  (2) Department of Materials Science and Engineering, University of Virginia</i>
  <i>Charlottesville, VA 22903, USA<br>
  (1) </i><script>mailto2('grant.skennerton','vanderbilt.edu')</script></p>
<SCRIPT>notify();</SCRIPT><SCRIPT>comment(1)</SCRIPT>  <h4>Abstract</h4>
  <p>We have demonstrated the ability of Superconducting QUantum Interference
  Device (SQUID) magnetometers to qualitatively monitor electrochemical activity
  within lap joints removed from actual aircraft. This work lays the foundation
  for quantitative measurements of corrosion rates within occluded structures.
  In this study, a SQUID magnetometer was used to examine hidden corrosion
  activity within lap joints removed from ageing KC-135 aircraft. During
  exposure, we imaged each specimen every 60 minutes. We designed the protocol
  to expose each lap joint specimen to a range of increasingly corrosive
  exposure sequences. The results obtained from this protocol show that there is
  a clear relationship between corrosivity of the environment and the activity
  generated within the lap joint. Over a range of increasing corrosive
  environments, the activity generated shows significant increases with each
  step. This technique allows us to determine non-invasively the corrosivity of
  the chemical environment already existing inside the lap joint relative to
  environments of known corrosivity.</p>
  <SCRIPT>comment(2)</SCRIPT><p><b>Keywords:</b> SQUID magnetometers, lap joints, corrosion measurement</p>
  <h3>1. Introduction</h3>
  <SCRIPT>comment(3)</SCRIPT><p>Corrosion of aircraft aluminium is a major problem for the United States
  Air Force and a great deal of effort is being applied to incorporate its
  effects into aircraft maintenance and structural integrity decisions. Models
  used for such decisions require accurate values of the rate of corrosion
  within occluded regions, such as lap joints, in a variety of operational
  environments. The overall goal of this project is to ascertain the rate of
  hidden corrosion in lap joints specimens removed from ageing aircraft under
  controlled environmental conditions.</p>
  <SCRIPT>comment(4)</SCRIPT><p>A limitation common to the existing corrosion measurement techniques is
  their inability to probe accurately the instantaneous rate of corrosion within
  lap joints or beneath thick layers of paint or specialised military coatings.
  This barrier has prevented incorporation of corrosion into the Aircraft
  Structural Integrity Program (ASIP). As a result, studies of these phenomena
  typically require the creation of redundant samples that are examined
  destructively at regular intervals throughout the duration of test. Until now,
  instantaneous rates of hidden corrosion, their spatial distribution within a
  structure and how the environment affects those rates could not be determined
  by existing techniques.</p>
  <SCRIPT>comment(5)</SCRIPT><p>Unlike the variety of techniques presently utilised, such as atmospheric
  exposure, electrochemical techniques and NDE techniques, SQUIDs possess the
  ability to measure rate instantaneously, and do not need to integrate
  corrosion damage over long periods of time to determine corrosion rates.
  Preliminary work at Vanderbilt [1-4] using SQUIDs to monitor currents from
  either exposed or hidden corrosion demonstrated the SQUIDs' utility for the
  periodic, non-destructive analysis of corrosion test specimens for which the
  corrosion activity is not directly accessible. Their unparalleled sensitivity,
  spatial resolution (microns to millimetres), and DC-to-10 kHz bandwidth allows
  SQUIDs to map steady or time-varying currents deep within a sample without
  having to make contact with the sample. In addition, SQUIDs do not require
  visualisation of or other direct access to the metal surface that is
  undergoing corrosion.</p>
  <h3>2. Experimental</h3>
  <h4>2.1 SQUID System</h4>
  <SCRIPT>comment(6)</SCRIPT><p>We have developed instrumentation, recording, and analysis techniques that
  are optimised for the measurement of the spatial and temporal dependence of
  the magnetic fields associated with hidden corrosion in lap joints. Our two
  corrosion mapping systems [5,6] use SQUID gradiometers and each include a
  magnetic shield, a scanning stage with a custom sample-handling system, a
  computer control system, and custom scanning and analysis software.</p>
  <h4>2.2 Specimen Design</h4>
  <SCRIPT>comment(7)</SCRIPT><p>Four aluminium lap joint specimens were obtained from retired KC-135
  aircraft. The specimens were approximately 250 mm long, had three fastener
  (rivet) rows, and were three fasteners wide (plus half the fastener pitch on
  each side). The majority of the free-standing stringer material was cut off.
  The total height of each specimen at the stringer was approximately 10 mm. All
  exposed metal surfaces were painted with MIL-P-23377 epoxy primer and
  MIL-PRF-85285 polyurethane top coat. The paint was applied with a paint spray
  gun in the same manner the aircraft are painted. The edges were sealed with
  low-adhesion polysulfide sealant so hydration could only occur from the two
  mouths of the lap joint. Holes were drilled and countersunk in the ends of the
  lap joint for accommodating 4-40 flat-head nylon screws as shown in Figure 1.
  These holes were used to fasten the lap joints to the specimen chamber.</p>
  <p><img src="figure1.jpg" align="bottom" border="0" naturalsizeflag="3" width="527" height="321"></p>
  <SCRIPT>comment(8)</SCRIPT><p><b>Figure 1: Schematic diagram of a typical lap joint specimen.</b></p>
  <h4>2.3 Corrosion Chambers</h4>
  <SCRIPT>comment(9)</SCRIPT><p>We designed environmental chambers that allowed us to expose lap joints to
  a variety of environments while we scanned them under the SQUID. After
  attachment of the samples and baseline SQUID scanning, we introduced the
  various gaseous or liquid environments to the chamber. We did not remove the
  lap joints from the chamber or from the magnetic shield until the test was
  completed.</p>
  <h4>2.4 Accelerated Corrosion Methodology</h4>
  <SCRIPT>comment(10)</SCRIPT><p>To determine the chloride-dependence of corrosion within the lap joint, and
  to examine experiment repeatability and cycling effects, we designed a
  protocol that exposed each lap joint specimen to a range of increasingly
  corrosive exposure sequences. These sequences are shown in Table 1. Each
  sequence, or &quot;step,&quot; was six days in duration. We applied three
  passes of each step to each specimen before progressing to the next step in
  the protocol. At the beginning of each pass, we baked the specimen at 50�C in
  a vacuum oven for three days to dehydrate the sample and halt any ongoing
  corrosion. Prior to scanning, we degaussed the specimen in order to provide a
  background level that was repeatable over multiple passes. To quantify the
  background magnetic field of the lap joints, we scanned samples in dry
  nitrogen gas for 24 hours. We then exposed the specimen to a corrosive
  environment for 48 hours. We intended that the corrodent used in each
  subsequent step was more corrosive than the one used in the previous step.
  During step 1, we exposed specimens to humid air. During step 2, distilled
  water was used to provide a measure of the corrosivity of the material already
  present in the lap joint. Steps 3 and 4 used 0.01 M Cl<sup>-</sup> and 0.1 M
  Cl- respectively. We only completed one pass of step 4.</p>
  <p><b>Table 1: Exposure sequence of lap joint
  protocol III. We repeated each step twice.</b>
  <table border="1" cellspacing="2" cellpadding="3">
    <tr>
      <td align="center"><b>&nbsp;<font face="Times New Roman">Step</font></b></td>
      <td align="center"><font face="Times New Roman"><b>Sequence</b></font></td>
    </tr>
    <tr>
      <td align="center">1</td>
      <td><font face="Times New Roman">&nbsp;Vacuum bake (3 days), degauss, dry
        N</font><font size="1" face="Times New Roman">2</font><font face="Times New Roman">
        (1 day), 98% RH (2 days)</font></td>
    </tr>
    <tr>
      <td align="center">&nbsp;2</td>
      <td>&nbsp;Vacuum bake (3 days), degauss, dry N<font size="1">2</font> (1
        day), distilled water (2 days)</td>
    </tr>
    <tr>
      <td align="center">&nbsp;3</td>
      <td>&nbsp;Vacuum bake (3 days), degauss, dry N<font size="1">2</font> (1
        day), 0.01M NaCl (2 days)</td>
    </tr>
    <tr>
      <td align="center">&nbsp;4</td>
      <td>&nbsp;Vacuum bake (3 days), degauss, dry N<font size="1">2</font> (1
        day), 0.1M NaCl (2 days)</td>
    </tr>
  </table>
  <h4>&nbsp;2.5 Magnetic Field Metrics</h4>
  <SCRIPT>comment(11)</SCRIPT><p>We define several useful magnetic field metrics in a previous paper [7].
  Briefly, the background magnetic field image, <i>BG</i>, is defined as the
  spatial average of <i>K</i> dry scan images (raster scans) at a fixed height
  above the dry (non-corroding) sample.</p>
  <table cellspacing="0" border="0" cellpadding="7" width="564">
    <tr>
      <td width="14%" valign="top">&nbsp;</td>
      <td width="74%" valign="top"><img src="equation1.jpg" width="237" height="53"></td>
      <td width="12%" valign="top">
        <div align="right">
          (1)
        </div>
      </td>
    </tr>
  </table>
  <p>Here <i>B<sub>z</sub></i> represents the average magnetic flux density
  measured over the area of the z-axis pickup-coil of the magnetometer, <i>x<sub>i</sub></i>
  and <i>y<sub>j</sub></i> represent the position of the (<i>i,j</i>)<sup><i>th</i></sup>
  pixel with respect to the scanning co-ordinates, <i>K</i> represents the
  number of dry scans to be averaged, <i>t<sub>k</sub></i> denotes the starting
  time of the <i>k<sup>th</sup></i> scan and is measured with respect to the
  beginning of the first scan of the experiment, and <font face="Symbol"><i>D</i></font><i>t</i>
  represents the time it takes to finish a single raster scan and is a constant
  for all the scans taken in one experiment.&nbsp; The notation in this and the
  following equations contains <font face="Symbol"><i>D</i></font><i>t</i> in
  order to remind the reader that we acquired each raster image in a time
  interval [<i>t<sub>k </sub></i>, <i>t+</i><font face="Symbol"><i>D</i></font><i>t</i>].</p>
  <SCRIPT>comment(12)</SCRIPT><p>After recording a stable background, we introduced the corrosive solution
  to the sample.&nbsp; The resulting change in magnetic field with respect to <i>BG</i>
  we refer to as <i>B<sub>corr</sub></i> and define (2).</p>
  <table cellspacing="0" border="0" cellpadding="7" width="564">
    <tr>
      <td width="14%" valign="top">&nbsp;</td>
      <td width="74%" valign="top"><img src="equation2.jpg" width="337" height="26"></td>
      <td width="12%" valign="top">
        <div align="right">
          (2)
        </div>
      </td>
    </tr>
  </table>
  <p>where <i>k</i> represents the <i>k<sup>th</sup></i> magnetic field
  image.&nbsp; The Magnetic Activity (<i>MA</i>) of the sample, recorded in the <i>k<sup>th</sup></i>
  scan of the experiment, is defined as the absolute value of (2), and
  represents the absolute change in magnetic field due to corrosion with respect
  to the non-corroding (dry) background image.</p>
  <SCRIPT>comment(13)</SCRIPT><p>Furthermore, we define the Spatially Integrated Magnetic Activity (<i>SIMA</i>)
  as</p>
  <table cellspacing="0" border="0" cellpadding="7" width="564">
    <tr>
      <td width="14%" valign="top">&nbsp;</td>
      <td width="74%" valign="top"><img src="equation3.jpg" width="322" height="60">,</td>
      <td width="12%" valign="top">
        <div align="right">
          (3)
        </div>
      </td>
    </tr>
  </table>
  <p>where we take the summations over all the pixels in the <i>k<sup>th</sup></i>
  image, and <font face="Symbol"><i>D</i></font><i>x</i> and <font face="Symbol"><i>D</i></font><i>y</i>
  represent the distance between two consecutive pixels in the corresponding
  scan direction.&nbsp; <i>SIMA(t<sub>k</sub>,</i><font face="Symbol"><i>D</i></font><i>t)</i>
  is a number proportional to the net magnetic activity of the sample as
  recorded during the <i>k<sup>th</sup></i> scan, and should be proportional to
  the net corrosion activity of the sample during this time-interval (<i>i.e.</i>,
  [<i>t<sub>k</sub> , t<sub>k</sub>+</i><font face="Symbol"><i>D</i></font><i>t</i>]).
  The graph of <i>SIMA(t,</i><font face="Symbol"><i>D</i></font><i>t)</i> versus
  time represents the time-course of corrosion activity of the sample.</p>
  <SCRIPT>comment(14)</SCRIPT><p>Since <i>SIMA(t<sub>k</sub>,</i><font face="Symbol"><i>D</i></font><i>t)</i>
  is proportional to the net corrosion current (and hence the mass-loss rate) in
  the <i>k<sup>th</sup></i> image, then the area under the curve <i>SIMA(t,</i><font face="Symbol"><i>D</i></font><i>t)</i>
  versus time must be proportional to the total mass-loss of the sample during
  the corrosion experiment.&nbsp; For an experiment consisting of <i>K</i>
  raster scans, we define this quantity as the Temporally Summed <i>SIMA
  (TSSIMA)</i>:</p>
  <table cellspacing="0" border="0" cellpadding="7" width="564">
    <tr>
      <td width="14%" valign="top">&nbsp;</td>
      <td width="74%" valign="top"><img src="equation4.jpg" width="246" height="48"></td>
      <td width="12%" valign="top">
        <div align="right">
          (4)
        </div>
      </td>
    </tr>
  </table>
  <SCRIPT>comment(15)</SCRIPT><p>In the case where <i>SIMA</i> is proportional to mass-loss rate, <i>TSSIMA</i>
  should be proportional to the total mass-loss of the sample during the
  experiment.</p>
  <SCRIPT>comment(16)</SCRIPT><p>Finally, to determine the cumulative magnetic activity at each pixel for
  the course of the experiment, we define the Temporally Summed Magnetic
  Activity (<i>TSMA</i>) at point (<i>x<sub>i</sub>,y<sub>j</sub></i>) as</p>
  <table cellspacing="0" border="0" cellpadding="7" width="602">
    <tr>
      <td width="9%" valign="top">&nbsp;</td>
      <td width="85%" valign="top"><img src="equation5.jpg" width="504" height="53"></td>
      <td width="7%" valign="top">
        <div align="right">
          (5)
        </div>
      </td>
    </tr>
  </table>
  <p>where <i>T</i> is the length of time that the sample was exposed to
  corrosive solution. Therefore, <i>TSMA(x,y)</i> is a two-dimensional image,
  wherein each pixel is the time-weighted cumulative measure of the magnetic
  activity of that pixel throughout the experiment, and hence will spatially
  identify the regions with differing net magnetic activity.</p>
  <h4>2.6 Removal of Magnetic Contamination</h4>
  <SCRIPT>comment(17)</SCRIPT><p>Before we computed final quantitative metrics, we processed the data to
  minimise the influence of magnetic contamination on the calculated corrosion
  activity. We observed localised regions of high magnetic activity within the
  scan's area, and the time-course of magnetic activity in these regions was
  often different from the time-course of activity in the rest of the corroding
  sample. The spatio-temporal property of this activity is consistent with
  behaviour we have observed for the corrosion of localised ferro-magnetic
  contaminants. As these localised regions were not necessarily within the area
  of the specimen, it cannot be assumed that these signals are associated with
  localised distribution of corrosion current sources. Because of this, we
  removed the magnetic contribution of these localised particles from that of
  the corroding samples in order to have proper measurements of the
  corrosion-related changes in magnetic activity.</p>
  <SCRIPT>comment(18)</SCRIPT><p>We used a post-processing technique based on temporal-correlation to
  distinguish and then remove the contaminated regions from the data. Once we
  identified a pixel as exhibiting time-dependent magnetic contamination, we
  correlated the time-course of that pixel's magnetic activity with the
  time-course of all other pixels in the image. The correlation coefficient, <i>S</i>,
  of the contaminant pixel (A) with another pixel (B) is:</p>
  <table cellspacing="0" border="0" cellpadding="7" width="602">
    <tr>
      <td width="9%" valign="top">&nbsp;</td>
      <td width="85%" valign="top"><img src="equation6.jpg" width="301" height="50"></td>
      <td width="7%" valign="top">
        <div align="right">
          (6)
        </div>
      </td>
    </tr>
  </table>
  <SCRIPT>comment(19)</SCRIPT><p>All pixels whose cross-correlation with contamination exceeded a
  predetermined threshold were eliminated from the calculation of quantitative
  metrics. Using this user-controlled threshold limit, we generated a mask and
  applied this to the data. We zeroed the magnitude of the magnetic activity of
  pixels with correlation coefficients greater than or equal to the threshold
  limit. We did not change the magnitude of activity of pixels with correlation
  coefficients less than the threshold limit. Though some loss of data is
  unavoidable, the post-processing technique has proved to be a viable technique
  for studying magnetically contaminated samples. In the future, we expect to
  improve the method used for identifying and eliminating contaminated areas
  from the data.</p>
  <SCRIPT>comment(20)</SCRIPT><p>This procedure is demonstrated in Figure 2. Figure 2(a) is a <i>TSMA</i>
  image obtained from lap joint SM11-SP1. We identify region A as one typical of
  contamination, while we identify region B as one typical of the lap joint's
  true activity. Figure 2(b) shows the magnitude of the dipolar contamination
  source along section X-X. The dipole is clearly much greater in magnitude than
  other areas along section X-X. Figure 2(c) shows the time-course of the
  magnetic activity of region A. Figure 2(d) shows the time-course of the
  magnetic activity of region B. Comparison of Figure 2(c) and 2(d) shows the
  marked difference between the contaminated and uncontaminated reigions, both
  in magnitude and nature of the magnetic activity. Figure 2(e) shows the mask
  generated by an 80% cross-correlation of the data with region A. Once the mask
  is applied, Figure 2(f) shows the magnitude of the dipolar contamination
  source along section X-X after masking. Comparison of Figure 2(b) with 2(f)
  demonstrates the success of this masking technique in removing the signal of a
  contaminant source from the data.</p>
  <p><img src="figure2.jpg" align="bottom" border="0" naturalsizeflag="3" width="597" height="752"></p>
  <SCRIPT>comment(21)</SCRIPT><p><b>Figure 2: (a) The <i>TSMA</i>&nbsp;image from lap-joint SM11-SP1. We
  identified region A as contamination. We identified region B as a region
  typical of the lap joint's activity. (b) The magnitude of the dipolar
  contamination source along section X-X. (c) The time-course of magnetic
  activity in region A. (d) The time-course of activity in region B. (e) The
  mask generated by an 80% correlation of the data with region A. (f) The effect
  of masking on the region A along section X-X.</b></p>
  <h4>&nbsp;2.7 Statistical Analyses</h4>
  <SCRIPT>comment(22)</SCRIPT><p>Our statistical analysis of the data involved a test of the significance on
  the mean [8]. In all cases, we hypothesised that environmental changes under
  either protocol would produce no significant change in magnetic activity, <i>i.e.</i>,
  the ratio of the activity before the transition to the activity after the
  transition would be unity, or 1 (<font face="Symbol">m</font><sub><i>0</i></sub>
  = 1). Thus our null hypothesis can be written: <i>H<sub>0</sub></i>: <font face="Symbol">m</font>
  = <font face="Symbol">m</font><sub><i>0</i></sub>, <i>i.e.</i>, the population
  mean (<font face="Symbol">m</font>) was expected to be equal to <font face="Symbol">m</font><sub><i>0</i></sub>.
  Each protocol was analysed independently. The selected significance level was
  1%, or <font face="Symbol">a</font> = 0.01. In testing the significance of the
  mean, we reject the null hypothesis if the probability (P) of the observed
  difference between <font face="Symbol">m</font> and <font face="Symbol">m</font><sub><i>0</i></sub>
  is less than <font face="Symbol">a</font> (0.01), which is to say that <font face="Symbol">m</font>
  is not compatible with <font face="Symbol">m</font><sub><i>0</i></sub>. In
  such a case, variation in the sample population is not able to explain the
  difference between the null hypothesis value and the sample values. However,
  should P exceed the significance level of 0.01, we expected that there is no
  significant difference between <font face="Symbol">m</font> and <font face="Symbol">m</font><sub><i>0</i></sub>.</p>
  <h4>3 Results and Discussion</h4>
  <h4>3.1 Dynamics of Magnetic Activity</h4>
  <SCRIPT>comment(23)</SCRIPT><p>We examined four KC-135 lap joints in Protocol III (Sample 11 Specimens 1
  through 4). <i>SIMA</i> versus time curves obtained from each are shown in
  Figures 3 to 6 respectively. In each step, upon introduction of the corrodent
  at 24 hours, the magnetic activity increased. For step 1 (exposure to 98% RH
  air), the new level reached is constant over the 48 hour period when compared
  to the levels reached in steps 2 to 4 (exposure to solutions). We observed
  transients in the level of activity that did not coincide with changes in the
  corrosive. We observed this behaviour in specimens exposed under earlier
  protocols (unpublished).</p>
  <p><img src="figure3.jpg" align="bottom" border="0" naturalsizeflag="3" width="562" height="430"><br>
  <SCRIPT>comment(24)</SCRIPT><b>Figure 3: SIMA versus time curves obtained from KC-135 SM11-SP1.</b></p>
  <p><br>
  <img src="figure4.jpg" align="bottom" border="0" naturalsizeflag="3" width="562" height="430"><br>
  <b>Figure 4: SIMA versus time curves obtained from KC-135 SM11-SP2.</b></p>
  <p><br>
  <img src="figure5.jpg" align="bottom" border="0" naturalsizeflag="3" width="560" height="430"><br>
  <SCRIPT>comment(25)</SCRIPT><b>Figure 5: SIMA versus time curves obtained from KC-135 SM11-SP3.</b></p>
  <p><br>
  <img src="figure6.jpg" align="bottom" border="0" naturalsizeflag="3" width="560" height="430"><br>
  <SCRIPT>comment(26)</SCRIPT><b>Figure 6: SIMA versus time curves obtained from KC-135 SM11-SP4.</b></p>
  <SCRIPT>comment(27)</SCRIPT><p>For each lap joint, we calculated the average SIMA for the 24-hour period
  that we held the specimen in dry N<sub>2</sub>. We also calculated the average
  SIMA for the 48-hour period that we exposed the specimen to corrodent. Figure
  7 shows the ratio of the average SIMA of the corrosive environment to the
  average SIMA obtained during exposure to dry nitrogen averaged over all lap
  joints for each step. We hypothesised that the corrodent would have no
  significant effect on the magnetic activity within the lap joint, <i>i.e.</i>,
  that there would be no increase (<i>H<sub>0</sub></i>: ratio = 1). We tested
  our null hypothesis using the populations of SIMA ratios obtained in each
  step. Table 2 shows that introduction of corrodent produces a statistically
  significant increase in activity in the lap joints (P&lt;0.01). As shown the
  level of activity achieved during corrosion in each step increases relative to
  the earlier steps. During step 2, the level of SIMA attained during exposure
  to the corrodent was 2.6 times greater than that attained in step 1, step 3
  2.1 times greater than step 2, and step 4 1.4 times greater than step 3.</p>
  <p><img src="figure7.jpg" align="bottom" border="0" naturalsizeflag="3" width="560" height="388"></p>
  <SCRIPT>comment(28)</SCRIPT><p><b>Figure 7: Average increases in activity upon humidification/immersion of
  KC-135 SM11 lap joint specimens. The figure shows the inter-step increase in
  SIMA.</b></p>
  <b><font face="Times New Roman">Table 2: Average increases in activity upon
  humidification or immersion of KC-135 SM11 lap joint specimens, and the
  statistical significance calculated for this increase. <i>H</i></font><font size="1" face="Times New Roman"><sub><i>0</i></sub></font><font face="Times New Roman">:
  ratio = 1, </font><font face="Symbol">a</font><font face="Times New Roman"> =
  1%.</font></b>
  <table border="1" cellspacing="2" cellpadding="3">
    <tr>
      <td align="center" valign="middle"><font face="Times New Roman">Ratio of:<br>
        to SIMAdry</font></td>
      <td align="center" valign="top"><font face="Times New Roman">SIMA</font><sub><font size="1" face="Times New Roman">HUM</font></sub></td>
      <td align="center" valign="top"><font face="Times New Roman">SIMA</font><sub><font size="1" face="Times New Roman">DW</font></sub></td>
      <td align="center" valign="top"><font face="Times New Roman">SIMA</font><font size="1" face="Times New Roman"><sub>0.01
        M Cl</sub></font><font face="Times New Roman">-</font></td>
      <td align="center" valign="top"><font face="Times New Roman">SIMA</font><font size="1" face="Times New Roman"><sub>0.1
        M Cl</sub></font><font face="Times New Roman">-</font></td>
    </tr>
    <tr>
      <td align="center" valign="middle">&nbsp;<font face="Times New Roman">Average</font></td>
      <td align="center" valign="middle">&nbsp;4.3</td>
      <td align="center" valign="middle">&nbsp;11.2</td>
      <td align="center" valign="middle">24.7</td>
      <td align="center" valign="middle">35.3</td>
    </tr>
    <tr>
      <td align="center" valign="middle">&nbsp;<font face="Symbol">s</font><font size="1">ratio</font></td>
      <td align="center" valign="middle">&nbsp;1.3</td>
      <td align="center" valign="middle">4.4</td>
      <td align="center" valign="middle">9.9</td>
      <td align="center" valign="middle">19.1</td>
    </tr>
    <tr>
      <td align="center" valign="middle">&nbsp;P</td>
      <td align="center" valign="middle">&nbsp;&lt;0.01%</td>
      <td align="center" valign="middle">&nbsp;&lt;0.01%</td>
      <td align="center" valign="middle">&nbsp;&lt;0.01%</td>
      <td align="center" valign="middle">&nbsp;0.09%</td>
    </tr>
  </table>
  <h4>3.2 Cumulative Magnetic Activity Generated in Protocol III</h4>
  <SCRIPT>comment(29)</SCRIPT><p>Table 3 shows the average <i>TSSIMA</i> obtained during each step for each
  lap joint. Figure 8 shows an upward trend in activity over the four passes.
  These data are consistent with the relationship seen in the <i>SIMA</i> data,
  discussed above. Figure 9 shows the average <i>TSSIMA</i> obtained from each
  step. This figure shows a clear upward trend in <i>TSSIMA</i> as the
  environment becomes more corrosive. However, the increase in activity between
  steps 3 and 4 is not as pronounced. We tested the significance the increase in
  <i>TSSIMA</i> seen between steps. We hypothesised that there would be no
  significant increase in <i>TSSIMA</i>, <i>i.e.</i>, the ratio would be unity (<i>H<sub>0</sub></i>:
  ratio = 1, <font face="Symbol">a</font> = 1%). Table 4 presents the ratios of <i>TSSIMA</i>
  from step to step and the significance of this increase. As can be seen, the
  increase in activity from step 1 (98%&nbsp;RH) to step 2 (distilled water) is
  significant, as is the increase from step 2 to step 3 (0.01 M&nbsp;Cl<sup>-</sup>).
  The significance levels for these ratios are &lt;0.0001 and 0.0044
  respectively, which are both below our significance level of 0.01. The ratio
  of <i>TSSIMA</i> between step 4 and step 3 is only 1.1, or an increase of 10%.
  As expected, this increase was calculated to not be significant (<i>P</i> =
  0.32). However, as we took only four data points in step 4, we cannot assume
  this last observation to be definitive.</p>
  <b><font face="Times New Roman">Table 3: <i>TSSIMA</i> data from KC-135 lap
  joint specimens averaged over each step. The table also shows the average <i>TSSIMA</i>
  for all four lap joints for each step. (<i>TSSIMA</i> � </font><font size="4" face="Symbol">s</font><font size="1" face="Times New Roman">TSSIMA</font><font face="Times New Roman">
  (</font><font face="Symbol">m</font><font face="Times New Roman">T�mm<sup>2</sup>�hr))</font></b>
  <table border="1" cellspacing="2" cellpadding="3">
    <tr>
      <td align="center">&nbsp;Specimen</td>
      <td align="center">&nbsp;Step 1</td>
      <td align="center">&nbsp;Step 2</td>
      <td align="center">Step 3 &nbsp;</td>
      <td align="center">&nbsp;Step 4</td>
    </tr>
    <tr>
      <td align="center">&nbsp;SM11-SP1</td>
      <td align="center">&nbsp;8 � 4</td>
      <td align="center">&nbsp;23 � 13</td>
      <td align="center">&nbsp;37 � 5</td>
      <td align="center">&nbsp;51</td>
    </tr>
    <tr>
      <td align="center">&nbsp;SM11-SP2</td>
      <td align="center">11 � 2</td>
      <td align="center">28 � 10</td>
      <td align="center">39 � 4</td>
      <td align="center">63&nbsp;</td>
    </tr>
    <tr>
      <td align="center">&nbsp;SM11-SP3</td>
      <td align="center">9 � 2</td>
      <td align="center">&nbsp;34 � 15</td>
      <td align="center">52 � 19&nbsp;</td>
      <td align="center">35&nbsp;</td>
    </tr>
    <tr>
      <td align="center">&nbsp;SM11-SP4</td>
      <td align="center">&nbsp;6 � 1</td>
      <td align="center">29 � 14</td>
      <td align="center">42 � 3</td>
      <td align="center">35&nbsp;</td>
    </tr>
    <tr>
      <td align="center">&nbsp;All</td>
      <td align="center">&nbsp;8 � 3</td>
      <td align="center">&nbsp;28 � 14</td>
      <td align="center">&nbsp;43 � 12</td>
      <td align="center">46 � 12</td>
    </tr>
  </table>
  <p><img src="figure8.jpg" align="bottom" border="0" naturalsizeflag="3" width="462" height="335"></p>
  <SCRIPT>comment(30)</SCRIPT><p><b>Figure 8: TSSIMA data of KC-135 lap joint specimens averaged over three
  passes.</b></p>
  <p><img src="figure9.jpg" align="bottom" border="0" naturalsizeflag="3" width="483" height="387"></p>
  <SCRIPT>comment(31)</SCRIPT><p><b>Figure 9: Average TSSIMA data of each step of Protocol III. Average
  inter-step increases in <i>TSSIMA</i> of KC-135 SM11 lap joint specimens, and
  their probability (<i>H</i><font color="maroon" size="1"><i>0</i></font>:
  ratio = 1, <font color="maroon" face="Symbol">a</font> = 1).</b></p>
  <h4>4 Summary</h4>
  <SCRIPT>comment(32)</SCRIPT><p>We designed a protocol to determine the effects of moisture and chloride on
  lap joints relative to the initial condition of a dry, inactive joint. We
  exposed lap joint specimens to what we anticipated was a range of increasingly
  corrosive exposure sequences: humid air, distilled water, 0.01 M Cl<sup>-</sup>,
  and 0.1 M Cl<sup>-</sup>. In between each exposure, we effectively
  &quot;reset&quot; the specimens by baking them in a vacuum and degaussing
  before the subsequent exposure. We show that the SQUID has sufficient
  sensitivity to detect corrosion activity within the joint upon exposure to
  only humid air. By then immersing the lap joints in distilled water, we have
  observed the corrosivity of the chemical environment existing inside the lap
  joint. We show that distilled water generates significantly more activity than
  humid air.</p>
  <SCRIPT>comment(33)</SCRIPT><p>Upon exposure to 0.1 M Cl<sup>-</sup>, we show chloride to generate
  significantly more activity than the natural conditions with the lap joint, as
  brought out by the distilled water. However, there was no statistically
  significant difference between the activity generated in 0.01 M Cl<sup>-</sup>
  and that generated in 0.1 M Cl<sup>-</sup>. Hence we conclude that SQUIDs are
  capable of making quantitative measurements of the relative rates of corrosion
  of aircraft lap joints under differing conditions of humidity and chloride.</p>
  <SCRIPT>comment(34)</SCRIPT><p>We have yet to obtain the calibration of mass-loss to magnetic-signal for
  lap joint specimens. Although we have established a quantitative calibration
  between magnetic signal and corrosion rate for other geometries, its use for
  lap joints is currently under study. Hence, we present a magnetic measurement
  that can be used to compose the corrosion rate under different circumstances,
  but it is not yet possible to use these data for quantitative assessment of
  absolute corrosion rates. In the future we will be conducting experiments to
  determine the mass-loss to magnetic field calibration for specimens of lap
  joint geometry.</p>
  <SCRIPT>comment(35)</SCRIPT><p>Although magnetic contamination had been previously thought to be a
  limiting factor in the use of SQUIDs to study corrosion activity in aircraft
  samples, we show that the problems of magnetic contamination can in general be
  overcome by selection of samples without ferromagnetic fasteners, modest care
  in sample preparation, thorough degaussing of the samples at the beginning of
  each step in the exposure protocol, subtraction of time-independent background
  fields, and masking of the regions of the magnetic images that show a time
  course consistent with the corrosive activity of ferromagnetic contaminants.
  While work will continue to refine this technique, we demonstrate clearly that
  high-quality corrosion data can be obtained from samples removed from aging
  aircraft.</p>
  <h4>5 Acknowledgements</h4>
  <SCRIPT>comment(36)</SCRIPT><p>This work was funded in part through Air Force contract F09603-97-C-0050,
  &quot;Corrosion/Fatigue Effects on Structural Integrity,&quot; issued through
  the Air Force Corrosion Office (AFCO) at Robins Air Force Base in Warner
  Robins, GA, NCI Information Systems, Inc., and Air Force Research Laboratory
  (AFRL). We thank Garth Cooke and Jim Suzel (NCI), Deborah Peeler (AFRL), and
  Richard Kinzie (AFCO) for their comments and suggestions regarding the
  experimental design and these measurements. We thank Steve Kaldon (NCI) for
  provision of the lap joint samples.</p>
  <h4>6 References</h4>
  <SCRIPT>comment(37)</SCRIPT><ol>
    <li>J.P. Wikswo, Jr., &quot;SQUID Magnetometers for Studying Corrosion and
      Corrosion Protection in Aircraft Aluminium&quot;, NACE International,
      Paper No. 293, pp. 1-17 (1997).
    <li>D. Li, Y.P. Ma, W.F. Flanagan, B.D. Lichter, &amp; J.P. Wikswo, Jr.,
      &quot;Application of Superconducting Magnetometry in the Study of Aircraft
      Aluminium Alloy Corrosion&quot;, Corrosion, 52 (3): 219-231 (1996).
    <li>D. Li, Y.P. Ma, W.F. Flanagan, B.D. Lichter, &amp; J.P. Wikswo, Jr.,
      &quot;Detecting In-Situ Active Corrosion by a SQUID Magnetometer&quot;,
      Journal of Minerals, Metals and Materials, 47 (9): 36-39 (1995).
    <li>D. Li, Y.P. Ma, W.F. Flanagan, B.D. Lichter, and J.P. Wikswo, Jr.,
      &quot;The Use of Superconducting Magnetometry to Detect Corrosion in
      Aircraft Alloys&quot;, Proceedings of the Tri-Service Conference on
      Corrosion, Orlando, FL, pp. 335-346 (June 1994).
    <li>A. Abedi, J. Fellenstein, A. Lucas, &amp; J. Wikswo Jr., &quot;A SQUID
      Magnetometer System for Quantitative Analysis and Imaging of Hidden
      Corrosion Activity in Aircraft Aluminium Structures&quot;, Rev. Sci.
      Instrum., in press.
    <li>D.S. Buchanan, D.B. Crum, D. Cox, T.H. Aukerman, T.A. Sager, &amp; J.P.
      Wikswo Jr., in Advances in Biomagnetism, eds. S.J. Williamson, G. Hoke, G.
      Stroink, &amp; M. Kotani (NY: Plenum Press, 1990), pp. 667-679.
    <li>A. Abedi, J. P. Wikswo Jr., &quot;Magnetic Field as a Quantitative
      Measure of Ongoing Corrosion&quot;, submitted for publication, (1999).
    <li>T. Colton, &quot;Statistics in Medicine&quot;, Little, Brown &amp;
      Company, Boston, MA, p. 116 (1974).
  </ol>
<SCRIPT>footer()</SCRIPT></html>