<?php 
session_start();
include_once('/home/jcsete5/public_html/jcse.org/jcse/php_inc/jrnl_subs.php');
$logged_in=is_loggedin();
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<meta name="GENERATOR" content="Microsoft FrontPage 6.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<title>JCSE Volume 1, Paper 11</title>
<SCRIPT src="/getcomm.php?vol=1&pap=11"></SCRIPT>
<SCRIPT src="/jsinc/jcsesubs.js.php"></SCRIPT>
<SCRIPT>
getcommentmode();</SCRIPT></HEAD><body>
<script src="/jsinc/writeheader.js"></script><?php ggl_ad(); ?>
<h2>Volume 1 Paper 11</h2>
  <script>ifnotmode(3,'<p>Submitted 16<sup>th</sup> February 1999</p>');</script>
  <hr>
  <h2>Interpreting Electrochemical Noise Resistance as a Statistical Linear
  Polarisation Resistance</h2>
  <b>
  <p align="JUSTIFY">Yong-Jun Tan</b><br>
  <i>Western Australian Corrosion Research Group, School of Applied Chemistry,
  Curtin University of Technology, GPO Box U1987, Perth 6001, Western Australia<br>
  E-Mail&nbsp; <script>mailto2('Y.tan','cc.curtin.edu.au')</script><br>
  </p>
  </i>
<SCRIPT>notify();</SCRIPT><SCRIPT>comment(1)</SCRIPT><h4 align="JUSTIFY">Abstract</h4>
  <p align="JUSTIFY">A theoretical analysis on the electrochemical noise
  resistance is carried out based on basic electrochemical corrosion theory. It
  is proven that the noise resistance is equivalent to the polarisation
  resistance and is in fact a special form of linear polarisation resistance,
  namely statistical linear polarisation resistance.</p>
  <b>
<SCRIPT>comment(2)</SCRIPT>  <p>Keywords:</p></b>
<SCRIPT>comment(3)</SCRIPT>  <h4>Introduction</h4>
  <p align="JUSTIFY">The electrochemical noise resistance (<i>Rn</i>) [1], is
  defined as the ratio of the standard deviations of potential noise and of the
  current noise <i>(Rn = <font face="Symbol">s</font> <b>v</b>/<font face="Symbol">s</font>
  i)</i> between two identical working electrodes which are linked by a zero
  resistance ammeter. In 1986, Eden <i>et al</i> found that the noise resistance
  is comparable to polarisation resistance (<i>Rp</i>), i.e. <i>Rn <font face="Symbol">�</font>
  Rp</i> [1] and thus it can be used as a method of corrosion rate measurement.
  This relationship has received considerable interest and has been
  experimentally confirmed in some laboratories [2-6]. Later, this time domain
  relationship has been extended into the frequency domain to produce noise
  impedance spectra [7-10].</p>
<SCRIPT>comment(4)</SCRIPT>  <p align="JUSTIFY">Major effort has been made in order to understand the
  theoretical background of the time domain noise resistance [11-14, 3] and the
  frequency domain noise impedance spectra [9] since a better theoretical
  understanding of the techniques is very important for recognising their
  advantages, limitations and prerequisite conditions. However, disagreement
  still exists regarding the validity of some of these mathematical
  derivations[15-17].</p>
<SCRIPT>comment(5)</SCRIPT>  <p>This paper presents a mathematical deviation to interpret the time domain
  noise resistance as a statistical noise resistance [3, 18-19]. Errors in a
  previous analysis on the physical meaning of noise resistance made by Chen <i>et
  al.</i> [13] is also analysed in the appendix of this paper.</p>
<SCRIPT>comment(6)</SCRIPT>  <h4>Theoretical Analysis</h4>
  <p align="JUSTIFY">The basic idea of the statistical linear polarisation [3,
  18] is that the difference in random potential noise between two 'identical'
  electrodes (Figure 1) works as an internal polarisation voltage signal,
  producing current noise. That is, the current noise is driven by the
  difference of random potential noise. The polarisation is linear because the
  two electrodes are identical, and are thus supposed to have very similar
  (identical) corrosion potentials, and so polarisation is in the vicinity of
  the corrosion potential and in the linear polarisation zone. The noise
  resistance, which is deduced from statistical analysis of potential and
  current noise signals, is reasonably equivalent to linear polarisation
  resistance which is measured using an externally applied potential signal. Of
  course, the noise experimentally measured between working electrodes and
  reference electrode differs from this internal polarisation signal, but
  statistically they are well related. This is shown in the following
  mathematical derivation of noise resistance.</p>
  <b>
  <p align="CENTER"><img src="image54.gif" WIDTH="573" HEIGHT="373"></p>
<SCRIPT>comment(7)</SCRIPT>  <p align="CENTER">Figure 1.</b> A schematic diagram showing the dual electrode
  system and noise measurement arrangement.</p>
<SCRIPT>comment(8)</SCRIPT>  <p align="JUSTIFY">Electrodes a and b (Figure 1), are assumed to be identical
  and exist in the same environment. Voltage and current are recorded using high
  input impedance voltage- and zero resistance current-meters. It can be assumed
  that all electrochemical properties of the two identical electrodes are the
  same. For example, the electrodes have the same surface area, corrosion
  potential (<i>V<font size="1">corr</font></i>), corrosion current density (<i>i<font size="1">corr</font></i>),
  DC potential shift (<i>V<font size="1">DC</font></i>), Tafel slopes (<i>b<font size="1">a</font>,b<font size="1">c</font></i>)
  and polarisation resistance (<i>R<font size="1">p</font></i>) etc.. However,
  the electrochemical potentials of the two electrodes, at a certain time <i>t</i>,
  are not necessary identical due to random signals of electrochemical noise
  [20].</p>
<SCRIPT>comment(9)</SCRIPT>  <p align="JUSTIFY">For electrode 'a', potential at time '<i>t</i>'<i> </i>can
  be written,</p>
  <table border="0" width="90%" style="border: medium">
    <tr>
      <td width="14%" style="border: medium none"></td>
      <td width="75%" style="border: medium none">
        <p align="center"><i>V<font size="1">a</font>(t) = V<font size="1">DC</font>(t)</i>
        <i>+ V<font size="1">a,noise</font>(t)</i></td>
      <td width="11%" style="border: medium none">
        <p align="right">(1)</td>
    </tr>
  </table>
  <p align="JUSTIFY">where <i>V<font size="1">DC</font>(t)</i> is the DC
  component of the potential noise and <i>V<font size="1">a,noise</font>(t)</i>
  is the potential noise of electrode 'a' at time '<i>t</i>'.</p>
<SCRIPT>comment(10)</SCRIPT>  <p align="JUSTIFY">For electrode 'b', similarly</p>
  <table border="0" width="90%" style="border: medium">
    <tr>
      <td width="14%"></td>
      <td width="75%">
        <p align="center"><i>V<font size="1">b</font>(t) = V<font size="1">DC</font>(t)</i>
        <i>+ V<font size="1">b,noise</font>(t)</i></td>
      <td width="11%">
        <p align="right">(2)</td>
    </tr>
  </table>
<SCRIPT>comment(11)</SCRIPT>  <p align="JUSTIFY">By substituting (2) into (1), the potential difference
  between electrodes 'a' and 'b' can be deduced:</p>
  <table border="0" width="90%" style="border: medium">
    <tr>
      <td width="14%"></td>
      <td width="75%">
        <p align="center"><i>V<font size="1">a</font>(t) - V<font size="1">b</font>(t)=
        V<font size="1">a,noise</font>(t) - V<font size="1">b,noise</font>(t)</i></td>
      <td width="11%">
        <p align="right">(3)</td>
    </tr>
  </table>
<SCRIPT>comment(12)</SCRIPT>  <p align="JUSTIFY">Obviously, the difference between <i>V<font size="1">a</font>(t)
  </i>and <i>V<font size="1">b</font>(t) </i>is due to the difference in random
  potential noise, which could produce current noise between electrodes 'a' and
  'b', <i>I<font size="1">noise</font>(t)</i>.</p>
<SCRIPT>comment(13)</SCRIPT>  <p align="JUSTIFY">If the combined potential of the coupled electrode system
  at time <i>t </i>is <i>V<font size="1">system</font>(t)</i>, which is
  determined using a high input impedance voltage meter simultaneously with
  current noise recording, and <i>V<font size="1">a</font>(t)</i> <font face="Symbol">&lt;</font>
  <i>V<font size="1">system</font>(t)</i> <font face="Symbol">&lt;</font> <i>V<font size="1">b</font>(t)</i>,
  i.e. at time <i>t</i> electrode a is anodically polarised and electrode b is
  cathodically polarised, the overpotential for electrode 'a', <font face="Symbol">D</font>
  <i>V<font size="1">a</font>(t)</i>, is</p>
  <table border="0" width="90%">
    <tr>
      <td width="14%"></td>
      <td width="75%">
        <p align="center"><font face="Symbol">D</font> <i>V<font size="1">a</font>(t)</i>
        = <i>V<font size="1">system</font>(t)</i> - <i>V<font size="1">a</font>(t)</i></td>
      <td width="11%">
        <p align="right">(4)</td>
    </tr>
  </table>
<SCRIPT>comment(14)</SCRIPT>  <p align="JUSTIFY">Similarly, the absolute value of the overpotential for
  electrode 'b', <font face="Symbol">D</font> <i>V<font size="1">b</font>(t)</i>,
  is</p>
  <table border="0" width="90%">
    <tr>
      <td width="14%"></td>
      <td width="75%">
        <p align="center"><font face="Symbol">�</font> <font face="Symbol">D</font>
        <i>V<font size="1">b</font>(t)</i><font face="Symbol">�</font><i> </i>=
        <i>V<font size="1">b</font>(t)</i> - <i>V<font size="1">system</font>(t)</i></td>
      <td width="11%">
        <p align="right">(5)</td>
    </tr>
  </table>
<SCRIPT>comment(15)</SCRIPT>  <p align="JUSTIFY">The amplitude of electrochemical noise is very small, so <font face="Symbol">D</font>
  <i>Va(t)</i> and <font face="Symbol">D</font> <i>Vb(t)</i> are much smaller
  than 10 mV. If the corrosion reactions are totally activation-controlled and
  corrosion is uniform, then polarisation is linear and the Stern-Geary equation
  can be used to calculate the corrosion current for each of the two electrodes.
  From electrode a, the corrosion current can be calculated by an equation,</p>
  <table border="0" width="90%">
    <tr>
      <td width="14%"></td>
      <td width="75%">
        <p align="center"><i>icorr(t)= <img src="image43.gif" WIDTH="190" HEIGHT="56"></i></td>
      <td width="11%">
        <p align="right">(6)</td>
    </tr>
  </table>
  <p align="JUSTIFY">where <i>i<font size="1">noise</font>(t)</i> is the noise
  current at time <i>t</i>.</p>
<SCRIPT>comment(16)</SCRIPT>  <p align="JUSTIFY">Similarly for electrode b, the corrosion current can be
  calculated by the equation,</p>
  <table border="0" width="90%">
    <tr>
      <td width="14%"></td>
      <td width="75%">
        <p align="center"><i>i<font size="1">corr</font>(t)= <img src="image44.gif" WIDTH="171" HEIGHT="54"></i></td>
      <td width="11%">
        <p align="right">(7)</td>
    </tr>
  </table>
<SCRIPT>comment(17)</SCRIPT>  <p align="JUSTIFY">Re-writing and combining equations (7) and (6),</p>
  <table border="0" width="90%">
    <tr>
      <td width="14%"></td>
      <td width="75%">
        <p align="center"><font face="Symbol">D</font> <i>V<font size="1">a</font>(t)</i>
        + <font face="Symbol">�</font> <font face="Symbol">D</font> <i>V<font size="1">b</font>(t)</i><font face="Symbol">�</font><i>
        </i>= 2 <font face="Symbol">�</font> <i><img src="image45.gif" WIDTH="165" HEIGHT="53"></i></td>
      <td width="11%">
        <p align="right">(8)</td>
    </tr>
  </table>
<SCRIPT>comment(18)</SCRIPT>  <p align="JUSTIFY">The Stern-Geary equation can also be written as</p>
  <table border="0" width="90%">
    <tr>
      <td width="14%"></td>
      <td width="75%">
        <p align="center"><i>i<font size="1">corr</font>(t) = <img src="image46.gif" WIDTH="135" HEIGHT="54"></i></td>
      <td width="11%">
        <p align="right">(9)</td>
    </tr>
  </table>
<SCRIPT>comment(19)</SCRIPT>  <p align="JUSTIFY">Substituting (9) into (8) gives</p>
  <table border="0" width="90%">
    <tr>
      <td width="14%"></td>
      <td width="75%">
        <p align="center">[<font face="Symbol">D</font> <i>V<font size="1">a</font>(t)</i>
        + <font face="Symbol">�</font> <font face="Symbol">D</font> <i>V<font size="1">b</font>(t)]</i><font face="Symbol">�</font>]<i>
        </i>/2 = <i>i<font size="1">noise</font>(t)</i> <font face="Symbol">�</font>
        <i>R<font size="1">p</font></i></td>
      <td width="11%">
        <p align="right">(10)</td>
    </tr>
  </table>
<SCRIPT>comment(20)</SCRIPT>  <p align="JUSTIFY">Substituting (3), (4) and (5) into (10) gives,</p>
  <table border="0" width="90%">
    <tr>
      <td width="14%"></td>
      <td width="75%">
        <p align="center">[<i>V<font size="1">b,noise</font>(t) - V<font size="1">a,noise</font>(t)</i>]/2
        = <i>i<font size="1">noise</font>(t) <font face="Symbol">�</font> R<font size="1">p</font></i></td>
      <td width="11%">
        <p align="right">(11)</td>
    </tr>
  </table>
<SCRIPT>comment(21)</SCRIPT>  <p align="JUSTIFY">The standard deviations of both sides of the equation (11)
  during the testing period should be equal:</p>
  <table border="0" width="90%">
    <tr>
      <td width="14%"></td>
      <td width="75%">
        <p align="center"><font face="Symbol">s</font> {[<i>V<font size="1">b,noise</font>
        - V<font size="1">a,noise</font></i>]<i>/2</i>} = <font face="Symbol">s</font>
        {<i>i<font size="1">noise</font> <font face="Symbol">�</font> R<font size="1">p</font></i>}</td>
      <td width="11%">
        <p align="right">(12)</td>
    </tr>
  </table>
<SCRIPT>comment(22)</SCRIPT>  <p align="JUSTIFY">At any time <i>t</i>, the potential measured by the voltage
  meter in Figure 1 is the combined potential of the coupled electrode system, <i>V<font size="1">system</font>(t).
  </i>After removing DC trend in the system potential, the noise component, <i>V<font size="1">noise,
  system</font>(t)</i> can be deduced :</p>
  <table border="0" width="90%">
    <tr>
      <td width="14%"></td>
      <td width="75%">
        <p align="center"><i>V<font size="1">noise, system</font></i>(<i>t</i>)<i><font size="1">
        </font>=V<font size="1">system</font></i>(<i>t</i>) -<i> V<font size="1">DC,
        system</font></i>(<i>t</i>)</td>
      <td width="11%">
        <p align="right">(13)</td>
    </tr>
  </table>
<SCRIPT>comment(23)</SCRIPT>  <p align="JUSTIFY">Because the system is under linear polarisation and the
  anodic and cathodic polarisation have the same slope (1/<i>R<font size="1">p</font></i>),
  the combined system noise potential should be the mean of the two individual
  electrodes. <i>V<font size="1">noise, system</font>(t)</i> can be written as,</p>
  <table border="0" width="90%">
    <tr>
      <td width="14%"></td>
      <td width="75%">
        <p align="center"><i>V<font size="1">noise, system</font>(t) = </i>[<i>V<font size="1">b,noise</font>(t)
        + V<font size="1">a,noise</font>(t)</i>]/2</td>
      <td width="11%">
        <p align="right">(14)</td>
    </tr>
  </table>
<SCRIPT>comment(24)</SCRIPT>  <p align="JUSTIFY">The standard deviations of both sides of the equation 14
  during the testing period should be equal:</p>
  <table border="0" width="90%">
    <tr>
      <td width="14%"></td>
      <td width="75%">
        <p align="center"><font face="Symbol">s</font> <i>V<font size="1">noise,
        system</font></i> = <font face="Symbol">s</font> <i>{(V<font size="1">b,noise</font>
        + V<font size="1">a,noise</font>)/2}</i></td>
      <td width="11%">
        <p align="right">(15)</td>
    </tr>
  </table>
  <i>
<SCRIPT>comment(25)</SCRIPT>  <p align="JUSTIFY">V<font size="1">b,noise</font>(t)</i> and <i>V<font size="1">a,noise</font>(t)</i>
  are independent identical random signals. Statistically, it is expected that,</p>
  <table border="0" width="90%">
    <tr>
      <td width="14%"></td>
      <td width="75%">
        <p align="center"><font face="Symbol">s</font> <i>{(V<font size="1">b,noise</font>
        - V<font size="1">a,noise</font>)/2}</i> = <font face="Symbol">s</font> <i>{(V<font size="1">b,noise</font>
        + V<font size="1">a,noise</font>)/2}</i></td>
      <td width="11%">
        <p align="right">(16)</td>
    </tr>
  </table>
<SCRIPT>comment(26)</SCRIPT>  <p align="JUSTIFY">Substituting equations 12 and 14 into 16 gives,</p>
  <table border="0" width="90%">
    <tr>
      <td width="14%"></td>
      <td width="75%">
        <p align="center"><font face="Symbol">s</font> <i>V<font size="1">noise,
        system</font></i> = <font face="Symbol">s</font> <i>{i<font size="1">noise</font>
        <font face="Symbol">�</font> R<font size="1">p</font>}</i></td>
      <td width="11%">
        <p align="right">(17)</td>
    </tr>
  </table>
<SCRIPT>comment(27)</SCRIPT>  <p align="JUSTIFY">The standard deviation of system noise voltage noise is</p>
  <table border="0" width="90%">
    <tr>
      <td width="14%"></td>
      <td width="75%">
        <p align="center"><font face="Symbol">s</font> <i>V<font size="1">noise,
        system</font></i> <font size="4"><b>= </b></font><img src="image47.gif" WIDTH="196" HEIGHT="83"></td>
      <td width="11%">
        <p align="right">(18)</td>
    </tr>
  </table>
  <p align="JUSTIFY">where <i>n</i> is the number of data points recorded during
  the testing period. <i>m</i> is the mean <img src="image48.gif" WIDTH="66" HEIGHT="70"> of potential
  in the time period, which should be zero in value because the potential noise
  is a random signal.</p>
<SCRIPT>comment(28)</SCRIPT>  <p align="JUSTIFY">Similarly,</p>
  <table border="0" width="90%">
    <tr>
      <td width="14%"></td>
      <td width="75%">
        <p align="center"><font face="Symbol">s</font> <i>{i<font size="1">noise</font>
        <font face="Symbol">�</font> R<font size="1">p</font>}</i><font size="1">
        </font><font size="4"><b>= </b></font><img src="image49.gif" WIDTH="190" HEIGHT="83"> = <i>R<font size="1">p</font></i>
        <font face="Symbol">�</font> <font face="Symbol">s</font> <i><font size="4">i</font><font size="1">noise</font></i></td>
      <td width="11%">
        <p align="right">(19)</td>
    </tr>
  </table>
<SCRIPT>comment(29)</SCRIPT>  <p align="JUSTIFY">Substituting equations 19 into 17 gives,</p>
  <table border="0" width="90%">
    <tr>
      <td width="14%"></td>
      <td width="75%">
        <p align="center"><font face="Symbol">s</font> <i>V<font size="1">noise,
        system </font></i>/ <font face="Symbol">s</font> <i><font size="4">i</font><font size="1">noise</font><font size="4">
        </i><b>=</b></font> <i>R<font size="1">p</font></i></td>
      <td width="11%">
        <p align="right">(20)</td>
    </tr>
    <tr>
      <td width="14%"></td>
      <td width="75%"><i><font size="1">
        <p align="center"></font></i>i.e. <font face="Symbol">s</font> <i>V<font size="1">
        </font></i>/ <font face="Symbol">s</font> <font size="4"><i>i </i><b>=</b></font>
        <i>R<font size="1">p</font></i></td>
      <td width="11%">
        <p align="right">(21)</td>
    </tr>
  </table>
<SCRIPT>comment(30)</SCRIPT>  <h4>Discussion</h4>
  <p align="JUSTIFY">Equation 21 indicates that the ratio of the standard
  deviation of the potential noise and the standard deviation of current noise
  indeed equals to the linear polarisation resistance. In this theoretical
  analysis, several prerequisite conditions were suggested and used: (i). All
  electrochemical properties of the two identical electrodes are the same. (ii).
  Potential noise consists of random signals, and is small in magnitude,
  although its origin is not clearly known. (iii). Corrosion reactions are
  totally activation-controlled and corrosion is uniform. (iv). DC components
  and shifts in potential and current records are removed. (v). Noise components
  in potential and current records are independent identical random signals.</p>
<SCRIPT>comment(31)</SCRIPT>  <p align="JUSTIFY">This analysis explained the prerequisite conditions that
  the noise resistance technique is valid. For example it explained why the
  removal of DC components in potential and current noise records is important
  in the calculation of noise resistance. Equation (16) explained why the noise
  resistance is called statistical linear polarisation resistance.</p>
<SCRIPT>comment(32)</SCRIPT>  <p align="JUSTIFY">This analysis suggests that the noise resistance is
  actually a special form of linear polarisation resistance. Obviously it has
  similar limitations to polarisation resistance techniques.</p>
<SCRIPT>comment(33)</SCRIPT>  <h4>Conclusions</h4>
  <p align="JUSTIFY">A theoretical analysis on the electrochemical noise
  resistance is carried out based on basic electrochemical corrosion theory. It
  is proved that the noise resistance is equivalent to the polarisation
  resistance and is in fact a special form of linear polarisation resistance,
  namely statistical linear polarisation resistance. The difference in random
  potential noise between two 'identical' electrodes works as an internal
  polarisation signal which linearly polarises both electrodes, producing
  current noise.</p>
<SCRIPT>comment(34)</SCRIPT>  <h4>Appendix</h4>
  <p align="JUSTIFY">A theoretical analysis on the electrochemical noise
  resistance has been made by Chen and Bogaerts in a paper named 'The physical
  meaning of noise resistance' [13]. Figure 2 shows the configuration of the
  working electrodes used in that theoretical analysis. Working electrodes 1 and
  2 are identical working electrodes. <i>Vt</i> is the instantaneous corrosion
  potential of the two working electrode system at time <i>t</i> (i.e. the
  voltage noise) which is measured by a high resistance voltage meter (via a
  reference electrode). <i>It</i> is the instantaneous galvanic current which is
  measured by a zero resistance ammeter.</p>
  <p align="CENTER"><img src="image55.gif" WIDTH="619" HEIGHT="343"></p>
  <b>
<SCRIPT>comment(35)</SCRIPT>  <p align="CENTER">Figure 2.</b> The assembly of the working electrodes in the
  analysis of noise resistance [13]</p>
<SCRIPT>comment(36)</SCRIPT>  <p align="JUSTIFY">Chen and Bogaerts analysed working electrode 1 according to
  the Butler-Volmer equation and charge conservation law under three assumptions
  [13]. At any time <i>t</i>, currents entering and leaving the working
  electrode 1 were related by an equation (equation 5 in the reference 13):</p>
  <table border="0" width="90%">
    <tr>
      <td width="14%"></td>
      <td width="75%">
        <p align="center"><img src="image51.gif" WIDTH="421" HEIGHT="36"></td>
      <td width="11%">
        <p align="right">(i)</td>
    </tr>
  </table>
<SCRIPT>comment(37)</SCRIPT>  <p align="JUSTIFY">However, a contradiction arises when similar analysis
  applies to working electrode 2.</p>
<SCRIPT>comment(38)</SCRIPT>  <p align="JUSTIFY">The working electrode 2 is identical to the working
  electrode 1. It is reasonable to assume that at time <i>t</i> electrode 2
  behaves the same as electrode 1, i.e. electrode 2 has the same electrochemical
  equilibrium potentials (<i>Ve,a</i>, <i>Ve,c</i>), the same exchange current
  densities (<i>io,a</i>, <i>io,c</i>), the same Tafel parameters (<i>ba</i>, <i>bc</i>)
  and the same anodic and cathodic areas (<i>Aa</i>, <i>Ac</i>) etc.. At time<i>
  t</i> and under potential <i>Vt</i>, current entering and leaving the working
  electrode 2 should also be related by a similar equation:</p>
  <table border="0" width="90%">
    <tr>
      <td width="14%"></td>
      <td width="75%">
        <p align="center"><img src="image52.gif" WIDTH="139" HEIGHT="23"> <img src="image53.gif" WIDTH="305" HEIGHT="36"></td>
      <td width="11%">
        <p align="right">(ii)</td>
    </tr>
  </table>
<SCRIPT>comment(39)</SCRIPT>  <p align="JUSTIFY">Equations (i) and (ii) are basically identical. <i>It</i>
  and <i>I't</i> are equal in value and different in direction (as shown in
  Figure 2). In this case, if electrode 1 is anodically polarised (<i>It</i> <font face="Symbol">&gt;</font>
  0), then electrode 2 is also anodically polarised (<i>I't</i> <font face="Symbol">&gt;</font>
  0) and so <i>It</i> + <i>I't</i> <font face="Symbol">&gt;</font> 0. Obviously
  the dual electrode system will not be balanced in electric charge because
  there is no auxiliary electrode to absorb (or provide) electrons from (or to)
  the system. This system is against the charge conservation law.</p>
<SCRIPT>comment(40)</SCRIPT>  <p align="JUSTIFY">The analysis in reference 13 can not address this problem.
  The reason causing this problem is that reference 13 did not consider the two
  identical electrodes as a whole system. In that analysis, electrode 2 was
  actually treated as an auxiliary electrode to absorb (or provide) electrons.
  So the analysis and conclusion in the reference 13 is irrelevant to the
  electrochemical noise of a dual electrode system. The analysis and conclusion
  in reference 13 applies only to a single electrode which is under small
  polarisation.</p>
<SCRIPT>comment(41)</SCRIPT>  <h4>References</h4>
  <p align="JUSTIFY">1. D. A. Eden, K. Hladky, D. G. John and J. L. Dawson,
  Corrosion 86, Paper 274, NACE (1986)</p>
  <p align="JUSTIFY">2. F. Mansfeld and H. Xiao,<i> J. Electrochem. Soc.,</i>
  vol.140, p2205 (1993)</p>
  <p align="JUSTIFY">3. Y. J. Tan, B. Kinsella and S. Bailey, Corrosion 96,
  paper 352, NACE (1996).</p>
  <p align="JUSTIFY">4. Y. J. Tan, S. Bailey and B. Kinsella, <i>Corros. Sci.</i>
  vol.38, 1681 (1996)</p>
  <p align="JUSTIFY">5. U. Bertocci <i>et al</i>, <i>J. Electrochem. Soc.,</i>
  vol.144, p37 (1997)</p>
  <p align="JUSTIFY">6. Y. J. Tan, S. Bailey and B. Kinsella, <i>British
  Corrosion Journal</i>, vol.32, no.3 (1997)</p>
  <p align="JUSTIFY">7. J. L. Dawson, D. A. Eden and R. N. Carr, United States
  of America Patent No. 5425867</p>
  <p align="JUSTIFY">8. H. Xiao and F. Mansfeld, <i>J. Electrochem. Soc.,</i>
  vol.141, p2332 (1994)</p>
  <p align="JUSTIFY">9. U. Bertocci <i>et al</i>, <i>J. Electrochem. Soc.,</i>
  vol.144, p31 (1997)</p>
  <p align="JUSTIFY">10. F. Mansfeld and C. C. Lee, <i>Corros. Sci.,</i> vol.39,
  p1141 (1997)</p>
  <p align="JUSTIFY">11. D. A. Eden and A. N. Rothwell, Corrosion 92, Paper 292
  NACE (1992)</p>
  <p align="JUSTIFY">12. G. P. Bierwagen, <i>J. Electrochem. Soc.,</i> vol.141,
  L155 (1994)</p>
  <p align="JUSTIFY">13. J. F. Chen and W. F. Bogaerts, <i>Corros. Sci.,</i>
  vol.37, p1839 (1995)</p>
  <p align="JUSTIFY">14. R. A. Cottis, S. Turgoose and J. Mendoza,
  Electrochemical noise measurement for corrosion applications, ASTM STP 1277,
  J. R. Kearns<i> et al.</i> (ed.), p93 (1996)</p>
  <p align="JUSTIFY">15. F. Huet, <i>J. Electrochem. Soc.,</i> <u>142</u>, p2861
  (1995)</p>
  <p align="JUSTIFY">16. F. Mansfeld and H. Xiao, <i>J. Electrochem. Soc.,</i>
  vol.141, p1403 (1994)</p>
  <p align="JUSTIFY">17. R. A. Cottis, G. Bagley and M. M. Al-Ansari, Proc.
  Electrochemical Noise Analysis Session, Research in Progress Symposium,
  Corrosion 98, NACE (1998)</p>
  <p align="JUSTIFY">18. Y. J. Tan, Ph.D thesis, Curtin University of
  Technology, Australia, pp69-78 (1996)</p>
  <p align="JUSTIFY">19. Y. Tan, S. Bailey and B. Kinsella, <i>Corros. Sci.,</i>
  vol.40, p513 (1998)</p>
  <p align="JUSTIFY">20. W. P. Iverson, <i>J. Electrochem. Soc.</i>, vol.115,
  617 (1968)</p>
  <SCRIPT>footer()</SCRIPT></html>