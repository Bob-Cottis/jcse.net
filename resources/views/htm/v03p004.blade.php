<h2>JCSE Volume 3 Paper 4</h2>
  <p>Submitted 10th June 2000<br>
  <hr>
  <h2>Simulation of Electrochemical Noise Due to Metastable Pitting</h2>
  <p>R.A. Cottis<br>
  <i>Corrosion and Protection Centre, UMIST, P.O. Box 88, Manchester M60 1QD, UK<br>
  <script>mailto2('Bob.Cottis','manchester.ac.uk')</script></i></p>
  <h3>&sect;1 Abstract</h3>
  <p>This paper presents a program that simulates electrochemical noise time
  records for a process that produces pulses of charge. The output from the
  simulation is discussed in relation to a range of criteria that have been
  proposed for the interpretation of electrochemical noise data, and, in
  particular, for the identification of localized corrosion. The nature of the
  simulation introduces some artificial limitations, and the results do not
  adequately test parameters relating to the shape of power spectra. Of the
  other parameters, the characteristic charge and characteristic frequency are
  proposed as useful general purpose parameters for the interpretation of
  electrochemical noise data, while the skew and kurtosis may be useful single
  parameters for the identification of localized corrosion in well-characterized
  situations.</p>
  <p><b>Keywords:</b> Electrochemical noise, pitting corrosion, simulation.</p>
  <h3>&sect;2 Introduction</h3>
  <p>The measurement of electrochemical noise has received considerable
  attention for corroding systems since the original publication of Iverson [<script>crossref(1)</script>]
  (Tyagai published earlier work on a basic shot noise analysis [<script>crossref(2)</script>], but this
  has rarely been read or referenced by corrosion workers, probably because it
  is mostly in Russian). The theoretical basis of the analysis of
  electrochemical noise is relatively well-established for general corrosion,
  where the electrochemical noise resistance and impedance techniques appear
  valid under most circumstances [<script>crossref(3)</script>]. However, electrochemical noise
  measurements for general corrosion offer little that cannot be achieved by
  conventional dc or ac methods, and the most interesting application is to the
  identification and quantification of localized corrosion. Several parameters
  have been suggested as being indicators of localized corrosion, but relatively
  little agreement has been reached about their validity. One factor that has
  contributed to this has been the lack of good quality electrochemical noise
  data with known corrosion properties. Thus many workers who have nominally
  been studying the application of EN techniques to the identification of
  localized corrosion have compared the analytical parameters to a visual
  interpretation of the EN time record, rather than testing them against
  independent measures of the type of corrosion. The objective of this paper is
  to present a simple simulation of corrosion occurring according to a
  well-defined physical process, thereby providing artificial data that can be
  used to investigate the behaviour of the range of possible parameters.&nbsp;</p>
  <h3>&sect;3 The Model</h3>
  <p>The simulation is based on the conventional three-electrode method in which
  potential and current noise are measured simultaneously. The current noise is
  measured as the current between two nominally identical working electrodes
  (using a zero-resistance ammeter to eliminate potential differences), and the
  potential noise is measured relative to a quiet reference electrode (in the
  case of this simulation the reference electrode is, of course, ideally
  quiet!).</p>
  <p>&sect;4 
  A shot noise model is assumed for the corrosion process. The anodic
  reaction is assumed to consist of instantaneous pulses of charge
  (mathematically they are Dirac delta functions, current pulses with zero width
  and infinite height, but finite charge). The amplitude of these pulses may be
  constant, or it may have an exponential distribution (i.e. there will be many
  small pulses and few large pulses). The pulses are assumed to be independent
  of one another (i.e. this is a Poisson process), such that the interval
  between pulses will have an exponential distribution. The probability of a
  pulse being emitted, expressed as the mean inter-pulse interval, <font face="Symbol">l</font>
  (s), is assumed to depend on the electrode potential according to a Tafel type
  law. In order to permit the examination of the effects of asymmetry of the two
  working electrodes, the mean inter-pulse interval on one electrode may differ
  from that for the other electrode (this is expressed as the relative
  probability of a pulse occurring on working electrode 1). The cathodic
  reaction is assumed to occur at a constant current, as would be the case for
  mass-transport limited oxygen reduction. This is probably not very realistic,
  but it allows for a simple analytical solution for the integration of the
  potential and current, and thereby provides faster computation. The immediate
  effect of the anodic pulses of charge is to change the potential of the
  electrode on which they occur by adding charge to the double-layer
  capacitance. This leads to a difference in potential of the two working
  electrodes and the current between them will be a result of the potential
  difference applied across the solution resistance.</p>
  <p>&sect;5 In order to avoid artefacts associated with aliasing (due to sampling at a
  single time) and quantization (due to always starting a pulse at a fixed time
  relative to the sample time), a relatively complex calculation procedure is
  used. From a given starting point the time to the next pulse on each of the
  two working electrodes is computed as a sample from an exponential
  distribution with the mean inter-pulse time being determined by the electrode
  potential (the two electrodes are treated independently to allow for the
  possibility that they may be at significantly different potentials). The
  potential and current are then integrated analytically up to the next pulse or
  the next sample time. This minimizes the extent of aliasing of frequencies
  above the Nyquist frequency into the sample.</p>
  <p>&sect;6 The estimate of the time to the next pulse is based on the assumption that
  the potential will not change significantly (and thereby change the
  probability of emitting a pulse) before the next pulse occurs. In many
  circumstances (particularly with a large cathodic current or a long mean
  inter-pulse interval) this assumption will not be valid. It is difficult to
  solve this problem in a general way. The ideal approach would be to modify the
  distribution used to account for the change in potential; this may be possible
  for a single electrode, but it is inherently not possible when the potential
  of the other electrode may change and thereby change the potential of the
  coupled working electrode pair. As a simple, though imperfect, solution the
  time to the next pulse is recalculated at every sample interval. This is valid
  because the probability of the time to the next pulse is independent of the
  history of the electrode (given the assumptions made in this model); it may
  not be valid for other distributions.</p>
  <h3>&sect;7 Implementation</h3>
  <p>The simulation has been programmed in Object Pascal (Delphi V5.0 - Inprise
  Corporation). The <a href="v3p4a.php#Source">source code</a> for the main
  module and two supplementary modules forms a part of this paper, as does the <a href="v3p4a.php#Program">complete
  program</a>.</p>
  <h3>&sect;8 Performance</h3>
  <p>The simulation can potentially process very many pulses in a time record,
  with the worst case being very frequent pulses in a very long time record. For
  large numbers of pulses relative to the number of samples the algorithm is
  first order in the number of pulses processed, and Figure 1 shows the
  processing time as a function of the expected number of pulses for a fixed
  time record duration of 65536 seconds. These results were obtained using a
  computer based on a 350 MHz Pentium II running Windows NT.</p>
  <p><a href="v3p4_fig1.gif"><img border="2" src="http://192.168.10.10/html/volume3/paper4/v3p4_fig1_small.gif" width="400" height="273"></a></p>
  <p>&sect;9 <b>Figure 1 Processing time for a simulation over 65536 seconds as a
  function of the expected number of pulses for a constant pulse amplitude. </b>(click
  on the image for an enlarged view)</p>
  <h3>&sect;10 Results</h3>
  <p>The simulation has been used to investigate the applicability of a range of
  parameters that may be able to identify whether a given corrosion process is
  localized or not. These results have been presented in greater detail
  elsewhere [<script>crossref(4)</script>], but some of the main conclusions are summarized here.</p>
  <h4>&sect;11 Coefficient of Variation</h4>
  <p>The coefficient of variation suffers from its dependence on the mean
  current, which is a largely arbitrary result of the asymmetry of the two
  electrodes. Thus Figure 2 shows the effect of electrode asymmetry on the
  coefficient of variation. This result is to be expected, since the coefficient
  of variation is only valid for a variable that can only have values that are
  one side of zero. One solution to this problem is to use the corrosion
  current, <i>I</i><sub><i>corr</i></sub>, rather than the mean current. This
  can be done by estimating <i>I</i><sub><i>corr</i></sub> from <i>R</i><sub><i>n</i></sub>,
  which leads to the conclusion that the standard deviation of potential should
  be a good indicator of localized corrosion (see also the characteristic
  frequency below).</p>
  <p><a href="v3p4_fig2a.gif"><img border="2" src="http://192.168.10.10/html/volume3/paper4/v3p4_fig2a_small.gif" width="400" height="245"></a></p>
  <p>&sect;12 <b>Figure 2a Effect of electrode asymmetry on coefficient of
  variation&nbsp;</b></p>
  <p><a href="v3p4_fig2b.gif"><img border="2" src="http://192.168.10.10/html/volume3/paper4/v3p4_fig2b_small.gif" width="400" height="245"></a></p>
  <p>&sect;13 <b>Figure 2b Effect of electrode asymmetry on coefficient of variation
  (enlargement of y axis)</b></p>
  <h4>&sect;14 Localization Index</h4>
  <p>The localization index is a simple transformation of the coefficient of
  variation [<script>crossref(3)</script>], and suffers from the same limitations.</p>
  <h4>&sect;15 Characteristic Charge</h4>
  <p>The characteristic charge may be deduced from a shot-noise analysis [<script>crossref(3)</script> -
  but see the <a href="../../../CPC/STAFF/RAC/RAC_CTME_Addenda.htm">addendum</a>],
  and is identical to the charge used in this simulation. It is hardly
  surprising, therefore, that the calculation provides an accurate estimate.
  Note, however, that the analysis is based on the low frequency limit of the
  potential and current noise, and an erroneous value will be obtained if data
  containing too high a frequency are used (figure 3). The term 'characteristic
  charge' is suggested to cover the general situation where the data may not be
  derived from a shot noise process, and where it is not strictly valid to talk
  in terms of individual events that have a particular charge. In the more
  general case the large amplitude of both potential and current noise that is
  required to obtain a large characteristic charge are still expected to be an
  indicator of the severity of the corrosion process.</p>
  <p><a href="v3p4_fig3.gif"><img border="2" src="http://192.168.10.10/html/volume3/paper4/v3p4_fig3_small.gif" alt="v3p4_fig3.gif (9427 bytes)" width="400" height="245"></a>&nbsp;</p>
  <p>&sect;16 <b>Figure 3 Effect on sampling frequency (and hence measurement bandwidth)
  on estimated charge and pulse frequency</b></p>
  <p>&sect;17 Note that a large characteristic charge does not, of itself, indicate that
  localized corrosion is occurring as it may equally well indicate a very high
  rate of general corrosion. It should therefore be taken as an indicator of the
  severity or intensity of the corrosion, and it is suggested that it may
  correlate with the maximum penetration rate.</p>
  <h4>&sect;18 Characteristic Frequency</h4>
  <p>As it is possible to calculate the characteristic charge (from the shot
  noise analysis) and the corrosion rate (from <i>R</i><sub><i>n</i></sub>), it
  is also possible to calculate a characteristic frequency - the number of
  characteristic charges per second that are equal to the corrosion current
  (i.e. <i>I</i><sub><i>corr</i></sub>/<i>q</i>). It can be shown [<script>crossref(4)</script>] that this
  is inversely proportional to the variance of potential. Then a large
  characteristic frequency (of the order of 1000 Hz/cm<sup>2</sup> or above)
  implies a relatively uniform corrosion process, while a lower frequency
  implies a more localized corrosion process. Note that the frequency is
  expected to be proportional to the specimen area, as implied in the units
  above (see [<script>crossref(3)</script>] and [<script>crossref(4)</script>] for a general discussion of the area dependence of
  electrochemical noise parameters).</p>
  <p>&sect;19 When coupled with the estimate of the characteristic charge, the
  characteristic frequency provides the ability to discriminate a range of
  corrosion types. Thus experimental work to be reported elsewhere [<script>crossref(4)</script>] has shown
  that uniform corrosion, pitting corrosion and passivity can be distinguished
  for a specific system by using these parameters.</p>
  <h4>&sect;20 Roll-off Slope</h4>
  <p>The roll-off slope has been found in relatively narrow sets of experiments
  to be an indicator of localized corrosion, with a larger slope corresponding
  to localized corrosion. However, more general comparisons tend to show
  considerable overlap for the various corrosion types [<script>crossref(5)</script>]. This simulation
  effectively fixes the roll-off slope by the assumptions made, and does not
  provide a valid test of this parameter.</p>
  <h4>&sect;21 Skew</h4>
  <p>Providing the pitting process produces distinct uni-directional transients
  (as it does for the potential noise in some situations and for the current
  noise when the electrodes are asymmetrical), then the resultant distribution
  of values will be skewed, and the skew may be a useful parameter for the
  identification of localized corrosion processes. However, when bi-directional
  transients occur, or when there are many overlapping transients, then the skew
  will tend to zero, and will not be a reliable indicator. This is illustrated
  in Figures 4 and 5. The measured skew is also strongly sensitive to the nature
  of any drift in the signal [<script>crossref(6)</script>].&nbsp;</p>
  <p><a href="v3p4_fig4.gif"><img border="2" src="http://192.168.10.10/html/volume3/paper4/v3p4_fig4_small.gif" width="400" height="245"></a></p>
  <p>&sect;22 <b>Figure 4 Effect of electrode asymmetry on skew&nbsp;</b></p>
  <p><a href="v3p4_fig5.gif"><img border="2" src="http://192.168.10.10/html/volume3/paper4/v3p4_fig5_small.gif" width="400" height="246"></a></p>
  <p>&sect;23 <b>Figure 5 Effect of mean inter-pulse interval on skew&nbsp;</b></p>
  <p>Where the skew does provide information about a localized corrosion process
  (e.g. in the case of potential noise), it does have interesting
  characteristics. By optimizing the sampling frequency, and hence the
  measurement bandwidth (or by taking the PSD at a specific frequency) skew due
  to high frequency transients that may be attributable to relatively uniform
  processes may be lost (in effect this is the central limit theorem at work),
  while lower frequency transients will show up as a significant skew.</p>
  <h4>&sect;24 Kurtosis</h4>
  <p>The normalized kurtosis (the kurtosis with 3 subtracted from it to make it
  zero for a normal distribution) will typically be positive for signals showing
  distinct transients (whether uni- or bi-directional), and it has been used as
  an indicator of localized corrosion [<script>crossref(7)</script>]. It can be seen from figures 7 that
  the kurtosis is not much affected by the electrode asymmetry, and in Figure 8
  it can be seen that the kurtosis is strongly affected by the frequency of
  transients. This is particularly true for the current kurtosis in this
  simulation (since the potential wave transient shape tends not to lead to a
  large effect on the kurtosis, even when there are few large transients). The
  current kurtosis (if measured over the optimal frequency range) is effectively
  an indicator of few, large transients, and as such appears to be a good
  indicator of the occurrence of localized corrosion.&nbsp;</p>
  <p><a href="v3p4_fig6.gif"><img border="2" src="http://192.168.10.10/html/volume3/paper4/v3p4_fig6_small.gif" width="400" height="245"></a></p>
  <p>&sect;25 <b>Figure 6 Effect of electrode asymmetry on normalized kurtosis</b></p>
  <p><a href="v3p4_fig7a.gif"><img border="2" src="http://192.168.10.10/html/volume3/paper4/v3p4_fig7a_small.gif" width="400" height="246"></a></p>
  <p>&sect;26 <b>Figure 7a Effect of mean inter-pulse interval on kurtosis</b></p>
  <p><a href="v3p4_fig7b.gif"><img border="2" src="http://192.168.10.10/html/volume3/paper4/v3p4_fig7b_small.gif" width="400" height="246"></a></p>
  <p>&sect;27 <b>Figure 7b Effect of mean inter-pulse interval on kurtosis (enlarged y
  axis)</b></p>
  <h4>&sect;28 Noise Resistance and Impedance</h4>
  <p>The electrochemical noise resistance and impedance are not expected to
  reveal useful information about localized corrosion, but it is interesting to
  see how the results obtained for this simulation compare with that predicted
  from simple theory. Note that the model does not incorporate an explicit
  charge transfer resistance, this being provided indirectly by the response of
  the pulse emission process to potential. This model therefore provides a
  slightly more complete test of the relationship between <i>R<sub>n</sub></i>
  and <i>R<sub>p</sub></i> than is provided by most previous theoretical
  analyses, which assume either explicitly or implicitly that the current noise
  is described by the effect of the potential noise on the metal-solution
  impedance (or vice versa).&nbsp;</p>
  <p>&sect;29 Figure 8 shows a comparison of the measured electrochemical noise
  impedance, the set value of the double-layer capacitance, <i>C</i><sub><i>dl</i></sub>,
  and the expected value of <i>R<sub>ct</sub></i>.</p>
  <p><a href="v3p4_fig8.gif"><img border="2" src="http://192.168.10.10/html/volume3/paper4/v3p4_fig8_small.gif" width="400" height="245"></a></p>
  <p>&sect;30 <b>Figure 8 Comparison of amplitude of impedance (average of 6 MEM spectra
  with order 50) derived from electrochemical noise analysis and from equivalent
  circuit analysis</b></p>
  <h3>Conclusions</h3>
  <ul>
    <SCRIPT>comment(31)</SCRIPT><li>This simulation has&nbsp;allowed the examination of a range of
      electrochemical noise parameters where the true properties of the noise
      signal are known. While some of the assumptions made in the simulation are
      questionable, it has provided a clarification of the validity of the
      various parameters.</li>
    <SCRIPT>comment(32)</SCRIPT><li>The electrochemical noise resistance and impedance methods have been
      confirmed for this simulation as giving equivalent results to conventional
      measurements for symmetrical working electrodes.</li>
    <SCRIPT>comment(33)</SCRIPT><li>Of the various parameters that have been proposed for the identification
      of localized corrosion, the characteristic charge and frequency appear to
      be particularly useful, both because of their theoretical basis for shot
      noise processes, and because the two parameters combine to allow the
      discrimination of a wider range of corrosion types and severities.</li>
    <SCRIPT>comment(34)</SCRIPT><li>Skew and kurtosis are somewhat more system specific than the
      characteristic charge and frequency, but can give useful indications of
      the occurrence of localized corrosion for well-defined situations.</li>
  </ul>
  <h3>&sect;35 References</h3>
  <p><script>defref(1)</script> &quot;Transient Voltage Changes Produced in Corroding
  Metals&quot;,&nbsp; W.P. Iverson, J. Electrochem. Soc., vol. 115, p.617, 1968.</p>
  <p><script>defref(2)</script> &quot;Faradaic Noise of Complex Electrochemical
  Reactions&quot;, V.A. Tyagai, Electrochimica Acta, vol. 16, 1647-1654 (1971).</p>
  <p><script>defref(3)</script> &quot;Corrosion Testing Made Easy : Electrochemical
  Impedance and Electrochemical Noise&quot;, S. Turgoose and R.A. Cottis, NACE
  International, February 2000. (see also the <a href="http://www.umist.ac.uk/corrosion/CPC/STAFF/RAC/RAC_CTME_Addenda.htm"> Addendum Web
  page</a>)</p>
  <p><script>defref(4)</script> &quot;Electrochemical Noise Analysis of Carbon Steel
  in Sodium Chloride Solution with Sodium Nitrite as an Inhibitor&quot;, H.A.
  Al-Mazeedi, R.A. Cottis and S.Turgoose, to be presented to EuroCorr 2000,
  London, September 2000</p>
  <p><script>defref(5)</script> G. Bagley, PhD Thesis, UMIST, 1999</p>
  <p><script>defref(6)</script> &quot;Higher order measures for the analysis of
  electrochemical noise&quot;, G. Bagley, R.A. Cottis and P.J. Laycock, Paper
  191 Corrosion 1999, NACE International, 1999.</p>
  <p><script>defref(7)</script> &quot;Noise monitoring at Canada's Simonette Sour Oil
  Processing Facility&quot;, E.E. Barr, R. Goodfellow and L.M. Rosenthal, Paper
  414, Corrosion 2000, NACE International, 2000.</p>
  </SCRIPT>
  