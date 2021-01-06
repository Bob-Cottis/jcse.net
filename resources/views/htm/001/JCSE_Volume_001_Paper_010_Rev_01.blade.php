<h2>JCSE Volume 1 Paper 10</h2>
  <p>Submitted 24 January 1999<br>
  <hr>
  <h2>The Preliminary Study for the Interpretation of Electrochemical Noise with
  Continuous Wavelet Transform</h2>
  <p>Ding Hong-bo<sup>1</sup>, Pan Zhong-xiao<sup>1</sup>, Yu Xing-zeng<sup>2</sup>,
  Zheng Fu-yang<sup>2</sup>,<sup> </sup>Renato Seeber<sup>3</sup></p>
  <p><i><sup>1</sup>Department of Applied Chemistry, University of Science and
  Technology of China,230026, Hefei, P.R.China; <sup>2</sup>Corrosion Branch,
  Fujian Institute of Research on the Structure of Matters, Chinese Academy of
  Sciences, 361012, Xiamen, P.R. China; <sup>3</sup>Departimento di Chimica,
  Universita di Modena, 41100, Modena, Italy)</i></p>
<h3>&sect;1 Abstract</h3>
  <p>Random fluctuations of the electrical quantities (electrode potential and
  cell current) in electrochemical systems commonly are referred to as
  electrochemical noise (ECN). The ECN signal for the corrosion of mild steel in
  reinforced concrete specimen was analyzed with the Continuous Wavelet
  Transform (CWT). The original signal was transformed into a time-frequency
  phase plane with colors representing the coefficients of the CWT. The signal
  shows a self-similarity structure in the phase plane. Through this way, the
  chaotic nature of corrosion process is manifested.</p>
<p>&sect;2 <strong>Keywords</strong>: Corrosion, ECN, CWT, time-frequency phase plane,
  reinforced concrete specimen, chaos, fractals</p>
<SCRIPT>comment(3)</SCRIPT>  <h3 align="JUSTIFY">1. Introduction</h3>
  <p>Electrochemical noise (ECN) [1-6] is a generic term used to describe the
  spontaneous fluctuations of potential or current which occur at an electrode
  interface. The stochastic process giving rise to the noise signals is related
  to the electrode kinetics, and in the case of a corroding system, may be
  related to the corrosion rate and mechanism.</p>
<p>&sect;4 Because of the simplicity of the test method, the ECN method has attracted
  much attention in the field of electrochemistry, especially for the monitoring
  of metal corrosion. However, due to the non-stationary nature of the ECN
  signal, data analysis has been a barrier to its wide application. Researchers
  have proposed many methods. Unfortunately, it seems that none of them can
  satisfactorily solve the problem. So, Legat and Delecek have, in their paper
  [3], pointed out that the chaotic nature of corrosion process might require
  different mathematical treatments, although they haven't gave any
  identification.</p>
<p>&sect;5 Wavelets [7-11] are mathematical functions that cut up data into different
  frequency components, and then study each component with a resolution matched
  to its scale. They have advantages over traditional Fourier methods in
  analyzing physical situations where the signal contains discontinuities and
  sharp spikes. Wavelet analysis has been widely used in the field of digital
  signal processing.</p>
<p>&sect;6 Based on the above, the Wavelet Transform was tried to solve the problem.
  Unlike the common used &quot;Mallat Algorithm&quot;, our attention was given
  to the Continuous Wavelet Transform (CWT).</p>
<SCRIPT>comment(7)</SCRIPT>  <h3 align="left">2. Theory</h3>
  <p>We can define a family of functions</p>
  <p><img src="{{ $htmURL }}image25.gif" width="76" height="34"><img src="{{ $htmURL }}image26.gif" width="14" height="26">= <img src="{{ $htmURL }}image27.gif" width="150" height="63"><img src="{{ $htmURL }}image28.gif" width="16" height="33"><sup><img src="{{ $htmURL }}image28.gif" width="16" height="33"><img src="{{ $htmURL }}image29.gif" width="144" height="30"></p>
  </sup>
  <p>as continuous wavelets, with <img src="{{ $htmURL }}image30.gif" width="58" height="30"> as its &quot;mother
  wavelet&quot; if <img src="{{ $htmURL }}image30.gif" width="58" height="30"> is in the space of square integrable
  functions, and fulfills the equation</p>
  <p><img src="{{ $htmURL }}image31.gif" width="218" height="88"></p>
  <p>Here, <img src="{{ $htmURL }}image32.gif" width="56" height="48"> refers to the Fourier Transform of <img src="{{ $htmURL }}image30.gif" width="58" height="30">
  .</p>
<p>&sect;8 Therefore, we can define the continuous wavelet transform of a function as</p>
  <p> <i>Wf</i>(a,b) = <img src="{{ $htmURL }}image34.gif" width="281" height="39"></p>
  <p>We find that the analysis produces wavelet coefficients <i>Wf</i>(a,b)
  which are a function of scale and position, where scale represents the
  constant by which the wavelet is uniformly stretched or compressed and where
  position represents the constant by which the onset of wavelets is shifted
  (delayed or accelerated). This can be shown in the time-frequency phase plane
  which is illustrated as below:</>
  <dir>
    <p><img src="{{ $htmURL }}fig1.gif" alt="fig1.gif (6608 bytes)" width="664" height="391"></p>
  </dir>
<p>&sect;9 <b>Fig1 Basis functions and the corresponding time-frequency resolution of
  Wavelet Transform: (a) basis functions, (b) the relevant representation of
  time-frequency phase plane map</b></p>
<p>&sect;10 The Continuous Wavelet Transform both has a deep mathematical background
  and is a practical algorithm with wide application in various fields. The
  above is just a very brief introduction.</p>
<h3>&sect;11 3. Experimental setup</h3>
  <p>Electrochemical current noise was measured in a freely corroding system.
  The probe consisted of two identical reinforcing mild steel rods in a concrete
  specimen submerged in tap water.</p>
<p>&sect;12 The basis of the measuring system was a multi-meter connected to a personal
  computer using an IEEE 488 bus. Input impedance was 100&Omega;.
  Resolution was 1nA and the sampling rate was 1Hz. In one test period,1024
  current values were collected. CWT computer program was written with Matlab
  programming language.</p>
<p>&sect;13 <b>Table 1 Composition of Cements (Oxide content, wt-%)</b></p>
  <center>
  <table border="1" cellspacing="2" bordercolor="#000000" cellpadding="9" width="717">
    <tr>
      <td width="10%" valign="TOP"><b>
        <p>CaO</b></td>
      <td width="10%" valign="TOP"><b>
        <p>SiO<sub>2</sub></b></td>
      <td width="10%" valign="TOP"><b>
        <p>Al<sub>2</sub>O<sub>3</sub></b></td>
      <td width="10%" valign="TOP"><b>
        <p>Fe<sub>2</sub>O<sub>3</sub></b></td>
      <td width="10%" valign="TOP"><b>
        <p>SO<sub>3</sub></b></td>
      <td width="10%" valign="TOP"><b>
        <p>MgO</b></td>
      <td width="10%" valign="TOP"><b>
        <p>Na<sub>2</sub>O</b></td>
      <td width="10%" valign="TOP"><b>
        <p>K<sub>2</sub>O</b></td>
      <td width="10%" valign="TOP"><b>
        <p>Ignition loss</b></td>
    </tr>
    <tr>
      <td width="10%" valign="TOP">
        <p>63.4</td>
      <td width="10%" valign="TOP">
        <p>20.2</td>
      <td width="10%" valign="TOP">
        <p>7.3</td>
      <td width="10%" valign="TOP">
        <p>2.3</td>
      <td width="10%" valign="TOP">
        <p>3.1</td>
      <td width="10%" valign="TOP">
        <p>1.2</td>
      <td width="10%" valign="TOP">
        <p>0.4</td>
      <td width="10%" valign="TOP">
        <p>0.5</td>
      <td width="10%" valign="TOP">
        <p>0.9</td>
    </tr>
  </table>
  </center>
<p>&sect;14 <b>Table 2 Compositon of Steel</b></p>
  <center>
  <table border="1" cellspacing="2" bordercolor="#000000" cellpadding="9" width="717">
    <tr>
      <td width="11%" valign="TOP"><b>
        <p>C</b></td>
      <td width="11%" valign="TOP"><b>
        <p>Si</b></td>
      <td width="11%" valign="TOP"><b>
        <p>Mn</b></td>
      <td width="11%" valign="TOP"><b>
        <p>P</b></td>
      <td width="11%" valign="TOP"><b>
        <p>S</b></td>
      <td width="11%" valign="TOP"><b>
        <p>Cr</b></td>
      <td width="11%" valign="TOP"><b>
        <p>Mo</b></td>
      <td width="11%" valign="TOP"><b>
        <p>Ni</b></td>
    </tr>
    <tr>
      <td width="11%" valign="TOP">
        <p>0.14</td>
      <td width="11%" valign="TOP">
        <p>0.20</td>
      <td width="11%" valign="TOP">
        <p>0.87</td>
      <td width="11%" valign="TOP">
        <p>0.018</td>
      <td width="11%" valign="TOP">
        <p>0.028</td>
      <td width="11%" valign="TOP">
        <p>0.2</td>
      <td width="11%" valign="TOP">
        <p>0.05</td>
      <td width="11%" valign="TOP">
        <p>0.18</td>
    </tr>
  </table>
  </center>
<SCRIPT>comment(15)</SCRIPT>  <h3 align="left">4. Results and discussion</h3>
  <p>The original ECN signal was shown as Fig.2 as below.</p>
  <p><img src="{{ $htmURL }}fig2a.gif" alt="fig2a.gif (9937 bytes)" width="537" height="358"></p>
<p>&sect;16 <b>Fig.2 The ECN signal recorded for the corrosion of steel in reinforced
  concrete specimen in tap water</b></p>
<p>&sect;17 From Fig.2,We can see that due to the complicated and non-stationary nature
  of corrosion process, the recorded ECN signal is very complicated. It was very
  difficult to get any useful information from it.</p>
  <p><img src="{{ $htmURL }}fig3mor.jpg" alt="fig3mor.jpg (64403 bytes)" width="560" height="420"></p>
<p>&sect;18 <b>Fig.3 The time-frequency phase plane representation for the recorded ECN
  signal of Fig.2</b></p>
<p>&sect;19 Fig.3 is the time-frequency phase plane representation for the recorded ECN
  signal of Fig.2. Here, the x axis represents time (scaled as 1, standing for
  1024 seconds), y axis represents frequency (scaled as log(1/a), with a high
  value standing for high frequency). The coefficients of CWT were represented
  as colors: black, yellow, red and white accorded with increasing values.</p>
<p>&sect;20 From figure 3, it is seen that, when the scale is large, there are only few
  frequency components; while zoomed in, the frequency components of the noise
  signal add up increasingly, and show complicated bifurcation structure
  [12,13]; and in the end, infinite frequency components appear and the system
  enters a chaotic state. There are only few bifurcation undergoing from
  large-scale periodic state to small-scale chaotic state.</p>
<p>&sect;21 On the other hand, from figure 3, it is also seen that the signal has a
  self-similarity structure [7,14]. It's a kind of fractal structure. Any
  local structure was the same as that of the whole. From this, we can further
  infer that the changing of those state parameters has a &quot;chaotic
  attractor [12,13] &quot; characteristic.</p>
<p>&sect;22 From the above, we can see that corrosion process is most complicated, the
  changing of its state parameters are random, seemed non-deterministic.
  However, behind the randomness, there are inner rules and determinacy.</p>
<SCRIPT>comment(23)</SCRIPT>  <h3 align="left">5. Conclusion</h3>
  <p>The Continuous Wavelet Transform is a promising method for the data
  analysis of ECN signal. With this, we can draw information from the
  non-stationary signal because of its time-frequency trade-offs. The results
  showed that the process of metal corrosion has a chaotic characteristic and
  determinacy. It is deterministic random. Further work is now under
  consideration.</p>
<SCRIPT>comment(24)</SCRIPT>  <h3 align="left">Acknowledgements</h3>
  <p>This work was founded by National Natural Science Foundation and the open
  found of National Key Laboratory for Metal Corrosion and Protection of
  P.R.China.</p>
<SCRIPT>comment(25)</SCRIPT>  <h3 align="left">References</h3>
  <p>1.&nbsp;&nbsp;&nbsp;&nbsp; U. Bertrocci and F. Huet,Corrosion, 51, 131
  (1995)</p>
  <p>2.&nbsp;&nbsp;&nbsp;&nbsp; P.R. Roberge, J. Applied Electrochem. Chem., 23,
  1223 (1993)</p>
  <p>3.&nbsp;&nbsp;&nbsp;&nbsp; A. Legat, V. Dolecek, Corrosion, 51, 295 (1995)</p>
  <p>4.&nbsp;&nbsp;&nbsp;&nbsp; J.F. Chen and W.F. Bogaerts, Corrosion Science,
  37, 1839 (1995)</p>
  <p>5.&nbsp;&nbsp;&nbsp;&nbsp; H. Xiao and F. Mansfeld, J. Electrochem. Soc.,
  141, 1155 (1994)</p>
  <p>6.&nbsp;&nbsp;&nbsp;&nbsp; U. Bertocci, C. Gabrielli, F. Huet, et.al, J.
  Electrochem. Soc., 144, 31 (1997)</p>
  <p>7.&nbsp;&nbsp;&nbsp;&nbsp; H. Stark, Fractal graphs and wavelet series,
  Physics Letters A. Vol. 43, pp. 443-447, 1990</p>
  <p>8.&nbsp;&nbsp;&nbsp;&nbsp; I. Daubechies, The wavelet transform,
  time-frequency localization and signal analysis, IEEE Trans. on Inform.
  theory, Vol. 36, No.5, pp 961-1006, 1990</p>
  <p>9.&nbsp;&nbsp;&nbsp;&nbsp; Charles Chiu, An Introduction on Wavelets,
  Academic Press, Boston, 1991</p>
  <p>10.&nbsp;&nbsp; Charles Chiu et al., Wavelets: A Tutorial in Theory and
  Applications, Academic Press, Boston, 1991</p>
  <p>11.&nbsp;&nbsp;&nbsp; Amara Graps, IEEE Computational science and Engineering, Vol. 2, No. 2, Summer 1995, pp 50-61</p>
  <p>12.&nbsp;&nbsp;&nbsp; R.L. Devancy, An introduction to chaotic dynamical
  system, Addison-Wesley Publishing Company, 1989.</p>
  <p>13.&nbsp;&nbsp;&nbsp; C. Sparow, The Lorenz equations, bifurcations, chaos
  and strange attractors, Appl. Math. Sci., 38, 1982.</p>
  <p>14.&nbsp;&nbsp;&nbsp; B.B. Mandelbrot, The fractal geometry of nature,
  Freeman Company, California, 1982.</p>
  </SCRIPT>