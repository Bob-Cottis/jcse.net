<h2>JCSE Volume 1 Paper 7</h2>
  <p><em>Originally submitted 5th March 1997, revised version submitted 12th   September 1997</em></p>
  <hr>
  <h2>Stochastic Kinetics of Corrosion and Fractal Surface Evolution</h2>
  <p><strong>W. M. Mullins, *E. J. Shumaker and <sup>#</sup>G. J. Tyler<br>
  </strong><em>TMCI-Wright Laboratory, Wright-Patterson AFB, Ohio, *Wright State
  University, Dayton, Ohio and <sup>#</sup>University of Dayton, Dayton, Ohio.</em></p>
  <hr>
  <p>This paper makes considerable use of mathematical
  symbols - some browsers may not display these correctly. As a test, the letter
  that follows in brackets should be a Greek alpha (&alpha;).
  If you do not see this, you should either update your browser, or
  use the <a href="v1p7.pdf">PDF version of the paper </a>(2.9 Mb) (see the <a href="http://www.adobe.com/">Adobe</a>
  Web site if you need to obtain an Acrobat reader).</p>
<h3>&sect;1 Abstract</h3>
  <p>A kinetic model for general attack is proposed. This model predicts the
  evolution of a rough surface with a Hausdorff (fractal) dimension that
  approaches 2.5 as a limiting case. The model predicts a measurable critical
  length scale, that can be used to determine the time of exposure. Experimental
  results are shown for 2024-T3 which corroborate the model for the limiting
  case.</p>
<h3>&sect;2 Introduction</h3>
  <p>Fractal geometry has been found useful for quantitatively describing the
  irregular shapes associated with fracture surfaces [1-4] and corrosion [5,6].
  These studies, particularly those in corrosion, seek to relate the measured
  &quot;fractal&quot; dimension of the surface to the time or severity of
  exposure. Though anecdotal evidence suggests a relationship between exposure
  and &quot;fractal&quot; dimension, and experimental results reinforce this, no
  quantitative models for the formation and evolution of these surfaces have
  been proposed in the common literature.</p>
<h3>&sect;3 Analysis</h3>
  <p>From simple rate theory, the rate of the reaction of the surface is nearly
  linearly related to the chemical potential of the species on the surface,
  which is related to the local surface curvature. In addition, the
  electrochemical reaction requires electron transfer across the surface causing
  local regions of anodic and cathodic reactions. The locations of these
  reactions are random functions of time and position so that their effect on
  the overall reaction can be considered as a classical &quot;white noise&quot;
  source. The rate of surface recession can be expressed as</p>
  <p align="center"><img src="{{ $htmURL }}image61.gif" align="middle" width="219" height="54"> , (1)</p>
  <p>where <i>y</i> is the recession, <i>x</i> is a position vector on the
  surface, <i>A</i> is the classically defined rate constant for a flat surface,
  &alpha; is proportional to the surface tension, <i>A</i>
  and &beta; are assumed constants for this system and <i>W<sub>t</sub></i>(<i>x</i>)
  is an uncorrelated &quot;white noise&quot; function with zero expectation
  value [7]. Taking the Fourier transform changes the rate model to</p>
  <p align="center"><img src="{{ $htmURL }}image62.gif" align="middle" width="190" height="25"> , (2)</p>
  <p>where &omega; is the (magnitude of the) wave-vector on
  the surface,</p>
  <p align="center"><img src="{{ $htmURL }}image63.gif" align="middle" WIDTH="165" HEIGHT="50">,</p>
  <p><img src="{{ $htmURL }}image64.gif" align="bottom" width="41" height="25">is a wide-sense stationary, complex,
  uncorrelated random process [8] and &delta;(&omega;) is the Dirac delta-function. Eqn. (2) is a linear stochastic differential
  equation with the general solution</p>
  <p align="center"><img src="{{ $htmURL }}image65.gif" align="middle" WIDTH="333" HEIGHT="73"> , (3)</p>
  <p>where <i>Y</i><sub>0</sub>(&omega;) is the initial
  condition for the surface and <img src="{{ $htmURL }}image66.gif" align="bottom" WIDTH="42" HEIGHT="25">is a
  generalized, complex Brownian motion given by <img src="{{ $htmURL }}image67.gif" align="bottom" WIDTH="81" HEIGHT="41">.</p>
<p>&sect;4 The &omega; = 0 solution is the average rate of
  reaction for the system. The first term in the &omega; &ne;
  0 solution is the effect of the reaction on the initial surface profile. As
  expected, the effect of the reaction is to remove all surface asperities and
  smooth the surface with time. Eventually all surface characteristics are
  removed completely. The second term in the &omega; &ne; 0 solution is a stochastic (or Ito) integral [9] which has no closed form
  solution but can be easily estimated numerically. This term generates all of
  the interesting features of the system in the Fourier domain.</p>
<p>&sect;5 Since experimental measurements report the power spectral density of the
  surface profile, plotted on a log-log scale, it seems appropriate to calculate
  the expectation of the power spectral density (psd) of eqn. (3). Neglecting
  the initial surface profile (which is identically zero for an initially
  polished surface anyway) the psd is</p>
  <p align="center"><img src="{{ $htmURL }}image68.gif" align="middle" WIDTH="266" HEIGHT="54"> . (4)</p>
  <p>Using Ito isometry [10], or</p>
  <p align="center"><img src="{{ $htmURL }}image69.gif" align="middle" WIDTH="226" HEIGHT="58"></p>
  <p>where <i>E</i>[ ] denotes the expectation operation, for the complex
  process in eqn. (3) the result is</p>
  <p align="center"><img src="{{ $htmURL }}image70.gif" align="middle" WIDTH="170" HEIGHT="46"> . (5)</p>
<p>&sect;6 Figure 1 shows both a numerically generated solution to eqn. (4) and the
  associated analytical expectation from eqn. (5) for two different times. As
  can be seen from the figure, the &quot;white noise&quot; term in eqn. (2)
  excites uniformly across the frequency domain. The high frequency terms are
  damped by the reaction so that the steady state solution will approach a
  straight line (of slope -2) on the log-log plot. This would correspond to a
  surface with a Hausdorff dimension of 2.5.</p>
<h3>&sect;7 Discussion</h3>
  <p>As shown in Figure 1, a knee appears in the transient psd curve for the
  system. This knee is an apparent transition from slope=0 behavior at long
  length scales to slope=-2 behavior at short length scales. The position of
  this knee can be determined by extrapolating the two limiting behaviors at the
  extremes and equating them to give</p>
  <p align="center"><img src="{{ $htmURL }}image71.gif" align="middle" WIDTH="101" HEIGHT="41"> .</p>
<p>&sect;8 This transition length scale can be used as a measure of the time of
  exposure. It must be kept in mind, however, that long exposures, or for
  particularly aggressive environments, this length scale can become too long to
  practically measure. In addition, errors in evaluation of the critical length
  scale become large at longer exposure times.</p>
<p>&sect;9 Since the system is linear, any change in the spectral content of the
  &quot;white noise&quot; source will be reflected in the measured psd function.
  Specifically, if the microstructure of the surface has any texture or
  intrinsic periodicities on the scale of the measurements, then these will be
  observed as characteristic periodicities in the measured recession.</p>
<p>&sect;10 It should also be noted that the inclusion of surface curvature effects in
  the initial kinetic equation admits the possibility of negative recession
  rates (deposition) in some high curvature areas. This is considered
  unrealistic, but the inclusion of asymmetric curvature effects limits the
  tractability of the problem. Numerical simulations that include asymmetric
  curvature effects have been performed. In all cases, these simulations behave
  similarly to the model presented above and produce the same Hausdorff
  dimension for short length scales.</p>
  <p align="center"><img src="{{ $htmURL }}image72.gif" align="middle" WIDTH="404" HEIGHT="274"></p>
<p align="center">&sect;11 <strong>&nbsp;<a name="_Ref381331799">Figure 1</a>.
  Simulation (solid) and analytical expectation (dashed) of surface profile psd
  for short and long time.</strong></p>
<p>&sect;12 The samples examined in this study were tensile coupons cut from 2024-T3
  sheet. These were then subjected to an ASTM G44 stress-corrosion cracking
  test, alternate immersion in 3.5% NaCl solution, unloaded for 3 and 6 weeks.
  Following the exposure, the samples were cleaned according to the ASTM G1
  procedure, cleaning in a hot H<sub>3</sub>PO<sub>4</sub>, CrO<sub>3</sub> and
  HNO<sub>3 </sub>solution followed by a rinse in room temperature HNO<sub>3</sub>.
  The samples were then tested to failure in fatigue. The front and back surface
  of a representative sample is shown in Figure 2.</p>
<p>&sect;13 Both sides of each sample were studied using a custom-designed,
  high-precision scanning acoustic microscope (HIPSAM) [11]. The HIPSAM system
  was outfitted with a 0.635cm diameter, 100MHz transducer with a 0.5cm focal
  length and set to perform a time-of-flight C-scans to the top surface of each
  sample. The step size of each scan was 0.05mm along the scan axis and 0.02mm
  along the index axis. This resulted in a series of bit-mapped surface profile
  images that could be analyzed with conventional image analysis software.</p>
<p>&sect;14 Five representative 512x512 pixel regions were selected from each of the
  resulting surface profile maps. The 2D Fourier transforms of these regions
  were averaged and the longitudinal and transverse traces were recorded. A
  representative psd plot of the traces is shown in Figure 3. As can be seen in
  the figure, the psd follows the predicted trend except in the highest
  frequency region. These data are for spatial resolutions on the order of a few
  wavelengths of the excitation (14.9 &mu;m) and are
  likely due to defocusing and smearing of data over the frequency range.</p>
  <p align="center"><b><img src="{{ $htmURL }}fig2.jpg" align="bottom" WIDTH="212" HEIGHT="400"></b></p>
<p align="center">&sect;15 <strong><a name="_Ref381413572">Figure 2</a>. Representative
  corrosion sample (larger images of <a href="fig2l.jpg">left</a> and <a href="fig2al.jpg">right</a>
  figures)</strong></p>
<h3>&sect;16 Conclusions</h3>
  <p>A simple kinetic model for general attack has been described. This model
  predicts the evolution of a rough surface with a Hausdorff (fractal) dimension
  that approaches 2.5 as a limiting case. The model predicts a measurable
  critical length scale, that can be used to determine the time of exposure.
  Experimental results have been shown for 2024-T3 which corroborate the model
  for the limiting case.</p>
<h3>&sect;17 Acknowledgments</h3>
  <p>The corroded and fatigued samples used in this study were provided by J. N.
  Scheuring and Prof. A. F. Grandt of the Purdue University School of
  Aeronautics and Astronautics. A special thanks to L. L. Mann and R. W. Martin
  for assistance in conversion and manipulation of the HIPSAM data. This work
  was accomplished for the U. S. Air Force under contract numbers
  F33615-94-D-5801 and F33615-97-5840.</p>
<h3>&sect;18 References</h3>
  <ol>
    <li>B. B. Mandelbrot, D. E. Passoja and A. J. Paullay, Nature 308 (1984)
      721.</li>
    <li>V. Y. Milman, N. A. Stelmashenko and R. Blumenfeld, Prog. Mat.
      Sci. 38 (1994) 425.</li>
    <li>G. P. Cherepanov, A. S. Balankin and V. S. Ivanova, Eng. Frac.
      Mech. 51 (1995) 997</li>
    <li>R. H. Dauskardt, F. Haubensak and R. O. Ritchie, Acta Met. 38
      (1990) 143.</li>
    <li>F. Jin and F. P. Chiang, Res. Nondestr. Eval. 7 (1996) 229.</li>
    <li>C. Weiping, X. Chenghui, J. Mat. Sci. Let. 16 (1997) 113.</li>
    <li>A. Papoulis, Probability, <i>Random Variables and Stochastic
      Processes (2nd Ed.)</i>, McGraw-Hill Publishing, New York (1984) p217.</li>
    <li><i>ibid</i>. p301.</li>
    <li>K. Ito, J. Math. Soc. Japan 3 (1951) 157.</li>
    <li>B. Oksendal, <i>Stochastic Differential Equations: An
      Introduction with Application</i> (4th Ed.) Springer-Verlag, New York,
      1995, p23.</li>
    <li>R. W. Martin, P. Karpur, T. E. Matikas, M. J. Ruddell, J. A.
      Fox, in <i>Review of Progress in Quantitative Nondestructive Evaluation
      Vol. 15B</i>, D. O. Thompson and D. E. Chimenti (eds.), Plenum Press, New
      York, 1996, p2031.</li>
  </ol>
  <p align="center">&nbsp;<img src="{{ $htmURL }}image73.gif" align="bottom" WIDTH="486" HEIGHT="349"></p>
  <p align="center">&nbsp;<b><a name="_Ref381413634">Figure 3</a>. Power
  Spectral Density (psd) of time-of-flight data for a representative sample in
  longitudinal (short dash) and transverse (long dash) directions. The straight,
  solid line has slope=-2.</b></p>
  </SCRIPT>
