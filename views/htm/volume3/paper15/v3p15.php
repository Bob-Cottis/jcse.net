<?php 
session_start();
require_once('/home/jcsete5/public_html/jcse.org/jcse/php_inc/jrnl_subs.php');
$logged_in=is_loggedin();
?>
<html>
<head>
<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
<title>JCSE Volume 3, Paper 15</title>
<SCRIPT src="/getcomm.php?vol=3&pap=15"></SCRIPT>
<SCRIPT src="/jsinc/jcsesubs.js.php"></SCRIPT>
<SCRIPT>
getcommentmode();</SCRIPT>
</HEAD>
<body>
<script>var lgi=<?php if ($logged_in) { echo('true');} else { echo('false');} ?>;</script>
<script src="/jsinc/writeheader.js"></script><?php ggl_ad(); ?>
<h2>Volume 3, Paper 15 </h2>

<script>ifnotmode(3,'<p>Submitted 27th November 2001<br>');</script>
<hr>

<div>

<h2 align=left>Evanescent Microwave Sensor Scanning for
Detection of Sub-Coating Corrosion</h2>

<p align=left>William C. Fitzgerald,
Michael N. Davis, James L. Blackshire, John F. Maguire, and David B. Mast*</p>

<p>Air Force Research Laboratory (AFRL),
Materials and Manufacturing Directorate (ML), Bldg. 653, Rm 14, 2977 P Street,
Wright-Patterson Air Force Base, 45433-7746, 937-255-8787, <i><script>mailto2('william.fitzgerald','ml.afrl.af.mil')</script></i></p>

<p>*Department of Physics,
University of Cincinnati, Cincinnati, Ohio�
45221-0011</p>

</div>

<div>
<SCRIPT>notify();</SCRIPT><SCRIPT>comment(1)</SCRIPT><h3>Abstract </h3>

<p>Evanescent
Microwave Probe (EMP) scanning spectroscopy has the capability to image
sub-surface features through poorly conducting or dielectric materials, such as
aircraft paint.� This makes EMP scanning
a valuable option for detecting corrosion of aircraft primary structural
members without removing paint from the area to be inspected. Evanescent
microwave probes measure resonance frequency shift and power loss as functions
of the conductivity, dielectric response, and topography of a material. Because
each of these�� materials� properties
can be changed locally by surface and near-surface defects, a change in
measured parameters occurs when the probe passes over an area of
corrosion.� This new nondestructive
evaluation technique produces sensitive and highly resolved spatial
measurements of corrosion on aircraft structures through layers of paint, thus
saving time and money on aircraft maintenance. </p>

<p><b>Keywords</b>:&nbsp; Non-destructive evaluation, Microwave
imaging, Near-field imaging.</p>

<h3 align=left>Introduction</h3>

<SCRIPT>comment(2)</SCRIPT><p>Corrosion
of aging aircraft has recently become an expensive and safety-critical problem.
[<script>crossref(1)</script>,<script>crossref(2)</script>,<script>crossref(3)</script>].� The annual direct cost of
aircraft corrosion in the U.S. alone has been estimated to be in excess of $13
billion dollars [<script>crossref(2)</script>].� These high costs
are, in part, due to the current inability of inspection techniques to detect,
characterize, and classify corrosion processes before significant damage has
occurred.� Although military and
civilian agencies have slightly different classification systems [<script>crossref(4)</script>,<script>crossref(5)</script>], both
agree that an effective corrosion maintenance program is one that detects and
controls corrosion as close to the initiation stage as possible.� This would require a very sensitive
detection system, with high spatial resolutions, allowing for the detection of
corrosion defects with less than 5% material loss [<script>crossref(6)</script>].� Such a system would lead to minimized
downtime and repair costs, and a reduced risk of incurring additional damage to
essential aircraft structures [<script>crossref(7)</script>].� </p>

<SCRIPT>comment(3)</SCRIPT><p>Dramatic
improvements in corrosion nondestructive evaluation (NDE) system capabilities
have been made over the last 10 years [<script>crossref(8)</script>,<script>crossref(9)</script>,<script>crossref(10)</script>].� Some of the most notable NDE techniques include advanced
ultrasonic, eddy current, and thermo graphic techniques. For example,
ultrasonic systems have recently been developed that are very sensitive, and
are capable of detecting corrosion sheet thinning at levels approaching 5%
[<script>crossref(8)</script>].� Pulsed eddy current systems have
also been developed with similar sensitivity levels[<script>crossref(9)</script>].� Both of these techniques, however, are still
limited in lateral spatial resolution to approximately 1 cm. Although
thermography systems provide increased spatial resolutions of 10 to 100
microns, environmental noise and difficulties in interpreting results currently
restrict widespread use of� this� technique. [<script>crossref(10)</script>]</p>

<SCRIPT>comment(4)</SCRIPT><p>A relatively
new NDE technique that shows great promise for detecting <i>corrosion at initiation</i> involves
evanescent microwave probes (EMP).� The
unique feature of the evanescent microwave probe is its ability to sense the
complex <i>local</i>
microwave permittivity of a material [<script>crossref(11)</script>,<script>crossref(12)</script>].�
Because the permittivity at microwave frequency of a metallic substrate
and an oxidized or corroded area can be quite different, the local corrosion
level can be detected and mapped with high spatial resolution and
sensitivity.� The corrosion can be
probed at the surface, in the sub-surface, and under coatings, primers, and
topcoats used on typical aircraft structures. Additionally, the material can be
probed with very high spatial resolutions.�
Since the evanescent or near-field, EM fields of the probe provide
typical spatial resolutions of &lt;10 microns. Therefore, the evanescent
microwave probe is well suited for detecting and assessing very low levels of
hidden corrosion and material loss.</p>

<SCRIPT>comment(5)</SCRIPT><p>The
primary objective of the work reported here is to describe a microwave probe
resonant structure that has been used to non-destructively detect sub-surface
corrosion in metallic samples. This paper describes the relatively simple
resonant probe along with some preliminary results obtained from painted samples.</p>

<h3 align=left>Discussion</h3>

<h4>Principles of Operation</h4>

<SCRIPT>comment(6)</SCRIPT><p>In
applying evanescent field imaging, the fields are intentionally limited to
regions that are significantly smaller than the wavelength of the incident
electromagnetic radiation. The fields in these regions are� unable to propagate freely, so they
evanesce, or attenuate, exponentially. However, these evanescent fields can
couple to, material features much smaller than the wavelength of the
propagating wave, and are thus capable of affecting the resonance conditions of
the EMP probe. In effect, this methodology enables detection of features
smaller than the classical limit (Abbe barrier). This limit on the spatial
resolution, or minimum resolvable size is 1/2 of the wavelength, &lambda;, of the electromagnetic excitation
fields. The evanescent wave will decay exponentially and contain spatial
frequencies above 1/&lambda;. To
recover a signal, one must recover all the spatial frequency components
contained within that signal, so the Abbe barrier is a spatial interpretation
of the sampling theorem.� The
fundamental concept is to closely scan a point like field source over a
material object so that the evanescent field is still powerful enough to
interact with the properties of the material. This will result in an image with
resolved features smaller than the Abbe limit.</p>

<SCRIPT>comment(7)</SCRIPT><p>The types
of evanescent field probes which have traditionally been used for near-field
imaging similar to that described in this article are: coaxial transmission
line resonator with aperture [<script>crossref(13)</script>], the center conductor of coaxial transmission
line [<script>crossref(14)</script>], [<script>crossref(15)</script>], rectangular wave-guide with end-plane aperture [<script>crossref(16)</script>], and
micro-strip resonators utilizing wire probes or loops [<script>crossref(11)</script>].� The open-circuit coaxial probe with a
sharpened center conductor protruding slightly beyond its outer shield length
can be treated as an electrically short and insulated dipole antenna. The
length of the dipole is much shorter than the exciting microwave wavelength and
the insulator is supplied from the free-space gap between sample and probe tip.� When the resonator tip is placed in close
proximity to an object to be imaged, the resonator�s reflection coefficient S11
at resonant frequency will shift as depicted in Figure 1. The amount of shift
in the resonant frequency F<sub>r</sub> and the quality factor of the
resonator, Q, are determined by the free-space gap between sample and probe tip
and the microwave properties of the sample. The effective area of the probe tip
is fixed once the resonator is fabricated. Holding constant the air gap
distance from tip to sample, and the resonant frequency, F<sub>r</sub>,
variations in the samples� microwave properties can be mapped as the probe tip
is scanned over the sample. </p>

<SCRIPT>comment(8)</SCRIPT><p>The
microwave response of a material is a function of local permittivity, &epsilon;<sub>r</sub>,
permeability &mu;<sub>r</sub>,
and free carrier concentration [<script>crossref(11)</script>]. The
evanescent fields decay exponentially from the probe tip, and as a material
enters this near field region, it will perturb these evanescent fields,
resulting in the loading of the resonator. A loss-less dielectric or a good
conductor will increase the probe�s effective capacitance resulting in a lower
resonant frequency with the same Q as the unperturbed probe. Sensing these
variations in the resonant frequency and the magnitude of reflection
coefficient of the resonant probe allows an extensive range of material
parameters to be measured or inferred.</p>

<SCRIPT>comment(9)</SCRIPT><p>The
easiest method for measuring the microwave resistivity of a sample is to
measure the change in the reflection coefficient of the resonator at fixed
operating frequency. Figure 1 shows the resonant plots of the reflection
coefficient for the sample perturbing the evanescent field and the resonant
plot with the sample at a distance from the probe tip in the far field. If the
disturbance of the probe�s resonance is small, the maximum frequency
sensitivity can be obtained by the difference of the resonant spectra, with and
without the sample, and by observing the frequency at which the difference is
the largest. This will allow the highest possible sensitivity and best detection
resolution in scanning materials with small resistivity changes. </p>

<SCRIPT>comment(10)</SCRIPT><p>When
microwave properties of the samples cause large resonant shifts, the reflection
amplitude at a set frequency of operation is not linear. Therefore, operation
at fixed excitation amplitude, but variable frequency is favored.� This variable frequency method requires a
feedback loop to track and shift the resonant frequency. However, due to the
morphology of the sample, the resistivity and the dielectric response of the
sample may change simultaneously with the distance of the probe over the
sample. It is, therefore, necessary to differentiate between sample
sample-probe-tip distance variations and non-uniformity of the sample�s
microwave properties. In both of the fixed frequency methods, when the sample
to probe distance varies with the sample topography, a measurement of this
distance variation is required to differentiate between the sample parameter
variations and topography variations.</p>

<SCRIPT>comment(11)</SCRIPT><p>In this
work, the changes in the probe�s resonant frequency F<sub>r</sub> and quality
factor Q are tracked by a frequency modulation technique. Figure 2 depicts the
evanescent microwave probe resonant curve in air. The microwave excitation
frequency of the resonant probe can be in the bandwidth of 1 to 40 GHz and is
the center frequency, Fc, of the resonant curve, or Fc = F<sub>r</sub>. The
excitation signal of the probe is modulated at F1=100 Hz and the width of the
resonant curve, or quality factor, is determined by the amplitude of the
detector signal at twice the modulation frequency F<sub>2 </sub>= 200 Hz.
Figure 3 shows the resonant curve shift due to the probe moving to a new
position above the sample. The 100 Hz modulated signal now sweeps further up
one side of the broadened resonant curve, so that the amplitude of the detector
signal now contains frequency components at F<sub>1 </sub>and F<sub>2.� </sub>The frequency of the microwave
excitation center frequency, Fr, is then changed so that the magnitude of the F<sub>1
</sub>component in the detected signal is reduced to zero; the excitation
frequency is then shifted back to the center frequency of the resonant response
of the probe tip.� The DC component of
the detected signal can be determined by the average of the lowest 10 points of
the modulated response.� The F<sub>1</sub>,
F<sub>2</sub>, and DC data are determined at each position over the sample,
generating the frequency shift (&epsilon;<sub>r</sub> or &mu;<sub>r</sub>
changes), energy loss� (change in
resistance) and DC (complex combination of change in resistance and &epsilon;<sub>r</sub>
or �<sub>r</sub>
changes) image plots, respectively.</p>

<SCRIPT>comment(12)</SCRIPT><p>There are
a variety of advantages, characteristics, and applications, which demonstrate
the versatility of the evanescent microwave imaging. The technique is
non-contact, and therefore is not invasive on the samples it characterizes.
There is no sample preparation required, and testing can be accomplished in
air, vacuum or submersed in a liquid media. There are no temperature
limitations associated with microwaves, so samples at elevated temperatures as
well as objects moving at a moderate rate of velocity can be imaged. The image
resolution is easily adjusted by changing the sample to probe tip distance.
There are reports of image studies showing the versatility of the EMP and its
potential application in many apparently unrelated areas such as imaging
defects in composite materials, imaging moisture variations in botanical
samples, and imaging impurities and residual stress in semiconductors [<script>crossref(12)</script>],
[<script>crossref(17)</script>], [<script>crossref(18)</script>]. In this paper, we report on using EMP imaging in order to
investigate the presence of corrosion under painted surfaces.</p>

<h3>Experimental Procedure</h3>

<SCRIPT>comment(13)</SCRIPT><p>Before
measurements were made, the X � Y stage was plane-leveled with a standard dial
indicator to remove any tip to sample distance variation during scanning.� Figure 1 shows the shift in the experimental
resonance frequency with an aluminum plate placed near the probe. The presence
of the aluminum plate close to the probe tip versus the probe tip in air shifts
the resonant frequency.</p>

<SCRIPT>comment(14)</SCRIPT><p>The
actual painted aluminum sample suspected of corrosion was then mounted on the X
� Y stage and scanned with a probe tip to sample standoff distance of 20 &mu;m.� The probe was operated at a fixed frequency of 6.835 GHz and a
set of raster-scan images was obtained for the resonant frequency shift and
resonant frequency loss.� The area
suspected of corrosion was then chemically stripped of its paint and primer
coating to verify the existence of corrosion. Finally, the sample area was
inspected visually with a digital microscope to verify the existence of
corrosion. </p>

<SCRIPT>comment(15)</SCRIPT><p>Since the
thickness of the original paint layers could not be determined prior to
stripping, the actual depth of penetration of the evanescent fields was not
known.� In order to gauge the probing
depth, the corroded sample was recoated with standard military specification primer
and paint to a total coating thickness of approximately 4.7 mils (119 &mu;m). The recoated
sample area was scanned again with the same microwave parameters to verify
sensitive corrosion measurement capabilities through a known paint and primer
thickness.</p>

<h3>Description of Results</h3>

<SCRIPT>comment(16)</SCRIPT><p>The
initial sample was Al7075-T6 aluminum with primer and topcoat paint, taken from
a C-130 aircraft.� Although no visible
signs of corrosion were apparent, it was suspected that sub-surface (below
paint) corrosion was present somewhere on the sample surface.� Figure 5 shows an evanescent microwave probe
power loss plot of the 7075-T6 sample, scanned in an area of the sample that
was suspected of having corrosion. The area indicated in red-yellow is where
the sub-surface corrosion was detected.�
Similar results are shown in Figure 6, which depicts the evanescent
microwave probe frequency shift plot of the suspected area of corrosion</p>

<SCRIPT>comment(17)</SCRIPT><p>Figure 7
depicts a photomicrograph of the paint stripped Al7075-T6 sample at the
location where subsurface corrosion was indicated by the evanescent microwave
probe scans. The photo was taken, using dark field illumination, and clearly shows the area of pitted corrosion that existed below the
paint coating prior to stripping.� The
corroded area was approximately 100 microns x 100microns
in size and was likely in the initiation stage.� The EMP data provided in Figures 5 and 6 clearly showed sensitive
and highly resolved measurement capabilities for this small, paint-covered
corrosion pit. </p>

<SCRIPT>comment(18)</SCRIPT><p>Figures 8
and 9 show evanescent microwave probe scans depicting power loss and frequency
shift plots respectively. This is the identical area previously imaged, but
re-coated with 4.7 mils&nbsp; (119 &mu;m) of primer and topcoat. The images appear as before, and
give an indication of penetration depth through the primer/topcoat in excess of
125 microns.</p>

<h3 align=left>Conclusion</h3>

<SCRIPT>comment(19)</SCRIPT><p>It has
been shown that a near-field coupled, coaxial, microwave resonator can be
constructed and used to measure hidden corrosion under paint in aluminum with
high sensitivity and spatial resolutions. �Changes in microwave resonance frequency shift, and power loss
both showed evidence of the corrosion.�
The evanescent microwave imaging technique was able to measure a small, 100
microns x 100 microns, corrosion pit in a sample of Al7075-T6 aluminum that was
hidden under 4.7 mils&nbsp; (119 &mu;m) of primer/topcoat and not visible to the naked eye.� The system has the potential for measuring
hidden corrosion close to the initiation stage, with high spatial resolutions,
and with sensitivities greater than that needed to detect defects smaller than
the threshold limit of 5% in material loss. The use of this new and novel
corrosion detection technique should lead to reduced downtime and repair costs,
and a reduced risk of incurring additional damage to essential aircraft structures.</p>

<h3 align=left>References</h3>

<p><script>defref(1)</script>
�Corrosion Detection Technologies, Sector Study�, Final Report, Prepared for
the North American technology and Industrial Base Organization (NATIBO), March
1998.</p>

<p><script>defref(2)</script> Reference deleted as it is no longer accesible.<!--
internet document: <a
href="http://www.afcpo.com/htdocs/alt/front/corrosion_bas/more_corrosion.html"><b>http://www.afcpo.com/htdocs/alt/front/corrosion_bas/more_corrosion.html</b></a>,
US Air Force Corrosion Program Office, April 1998.--></p>

<p><script>defref(3)</script> �U.S.
Combat Air Power: Aging Refueling Aircraft are Costly to Maintain and Operate�.
�General Accounting Office, Washington,
D.C. National Security and International Affairs Div.; Report
GAO/NSIAD-96-1608, August 1996.</p>

<p><script>defref(4)</script> D.
Hoeppner, L. Grimes, A. Hoeppner, J. Ledesma, T. Mills, and A. Shah, �Corrosion
and Fretting as Critical Aviation Safety Issues: Case Studies, Facts, and
Figures From US Aircraft Accidents and Incidents,� Estimation, Enhancement and
Control of Aircraft Fatigue Performance, Volume I, Editors: J. Grandage, G.
Jost, Proceedings of the 18<sup>th</sup> Symposium of the International Committee
on Aeronautical Fatigue, 3-5 May, 1995, Melbourne, Australia.</p>

<p><script>defref(5)</script> D.
Curtis, �Corrosion and Fatigue in the Aging Fleet,� Federal Aviation
Administration (FAA), North West Mountain Region, 1992. </p>

<p><script>defref(6)</script> J.
Komorowski, D. Forsyth, D. Simpson, and R. Gould, �Probability of Detection of
Corrosion in Aircraft Structures�, </p>

<p><script>defref(7)</script> R.
Bailey, R. Pidaparti, S. Jayanti, and M. Palakal, �Corrosion Prediction in
Aging Aircraft materials using Neural Networks,� AIAA �2000-1762.</p>

<p><script>defref(8)</script> S.
Hansen, B. Mossawir, A. Ergun, F. Degertekin, B. Khuri-Yakub, �Air-Coupled
Nondestructive Evaluation using Micromachined Ultrasonic Transducers,� IEEE
Ultrasonics Symposium, 1999.</p>

<p><script>defref(9)</script> Y.
Sun, T. Ouyang, and S. Udpa, �Multi-Layer Aircraft Structure Inspection using
Super-Sensitive Remote-Field Eddy-Current System,� Review of Progress in
Quantitative Nondestructive Evaluation, Editors: D. Thompson, and D. Chimenti,
Ames, Iowa, 16-20 July, 2000.</p>

<p><script>defref(10)</script> X.
Han, L. Favro, L. Li, Z. Ouyang, G. Sun, R. Thomas, and D. Ashbaugh,
�Quantitative Thermal Wave Corrosion Measurements on a DC-9 Belly Skin in the
irregular paint Thickness variations,� Review of Progress in Quantitative
Nondestructive Evaluation, Editors: D. Thompson, and D. Chimenti, Ames, Iowa,
16-20 July, 2000.</p>

<p><script>defref(11)</script> M.
Tabib-Azar, N.S. Shoemaker, and S. Harris, �Non-destructive characterization of
materials by evanescent microwaves,� Meas. Sci. Technol., vol. 4 , Jan.
1993,� pp. 583-590.</p>

<p><script>defref(12)</script> M.
Tabib-Azar, P.S. Pathak, G. Ponchak, and S.R. LeClair, �Nondestructive
super-resolution imaging of defects and non-uniformity�s in metals,
semiconductors, dielectrics, composites, and plants using evanescent
microwaves,� Review of Scientific Instruments, 70 (6), pp. 2783-2792.</p>

<p><script>defref(13)</script> T.
Wei, X. Xiang, and P.G. Shultz, �Scanning Tip Microwave Near-Field Microscope,�
Appl. Phys. Lett., 68(24), June 10, 1996, pp.3506-3508.</p>

<p><script>defref(14)</script> C.
P. Vlahacos, R.C. Black, S. M. Anlage, A. Amar, and F.C. Wellstood, �Near-
field scanning microwave microscope with 100 mm resolution,� Appl. Phys. Lett.,
69(21), Nov. 18 1996, pp. 3272-3274.</p>

<p><script>defref(15)</script> B.
J. Feenstra, C. P. Vlahacos, A.S. Thanawalla, D.E. Steinhauer, S. K. Dutta, and
S. M. Anlage, �Near- field scanning microwave microscopy: measuring local
microwave properties and electric field distributions,� 1998 IEEE� MTTS Int. Microwave Symp. Dig., Baltimore,
MD., June 7-12, 1998, pp. 965-968.</p>

<p><script>defref(16)</script> A.
F. Lann, M. Golosovsky, D. Davidov, and A. Frankel, �Mapping the thickness of
conducting layers by a mm-wave near-field microscope,� 1998 IEEE� MTTS Int. Microwave Symp. Dig., Baltimore,
MD, June 7-12, 1998, pp. 1337-1340.</p>

<p><script>defref(17)</script> M.
Tabib-Azar, S. Bunrerraj, J.L. Katz, and S.H. You, �Evanescent
electromagnetics: a novel, super-resolution, non-intrusive imaging technique
for biological applicatons,� Biomedical Microdevices, 2 (1), 1999, pp. 73-80.</p>

<p><script>defref(18)</script> M.
Tabib-Azar, D. Akinwande, G.E. Ponchak, and S.R. LeClair, �Evanescent microwave
probes on high-resistivity silicon and its application in characterization of
semiconductors,� Review of Scientific Instruments, 1999, 70 (7), pp. 3083-3086.</p>

<p align="center"><img border="0" src="Fig.1.jpg" width="518" height="377"></p>

<SCRIPT>comment(17)</SCRIPT><p align=center><b>Fig 1. The S11
resonance curve and its modification due to the presence of aluminum sample
near probe tip.&nbsp;</b></p>

<p align=center><img border="0" src="Fig.%202.jpg" width="514" height="445">&nbsp;</p>

<SCRIPT>comment(17)</SCRIPT><p align=center><b>Fig 2.� Resonant curve showing F1= 100 Hz modulating
signal and F2 = 200 Hz detector signal.</b></p>

<p align=center><img border="0" src="Fig.%203.jpg" width="489" height="448"></p>

<SCRIPT>comment(17)</SCRIPT><p align=center><b>Fig 3. Resonant
curve showing F1 = 100 Hz modulation signal with detector signals F1 = 100Hz
and F2 = 200 Hz</b></p>

<p align=center><img border="0" src="Fig.%204.jpg" width="520" height="390">&nbsp;</p>

<SCRIPT>comment(17)</SCRIPT><p align=left>&nbsp;<b>Fig 4. System
setup</b></p>

<p align=center><a href="Fig.%205.jpg"><img border="1" src="Fig.%205%20small.jpg" width="355" height="338"></a></p>

<SCRIPT>comment(17)</SCRIPT><p align=center><b>Fig 5. Loss scan
of potential corrosion area (click for a full-size image)</b></p>

<p align=center><a href="Fig.%206.jpg"><img border="1" src="Fig.%206%20small.jpg" width="369" height="339"></a></p>

<SCRIPT>comment(17)</SCRIPT><p align="center"><b>Fig 6. Shift scan of
potential corrosion area (click for a full-size image)</b></p>

<p align="center"><img border="0" src="Fig.%207.jpg" width="640" height="480"></p>

<SCRIPT>comment(17)</SCRIPT><p align=center><b>Fig 7.
Photomicrograph (original magnification 100x) of 7075-T6 aluminum stripped of paint</b></p>

<p align=center><a href="Fig.%208.jpg"><img border="1" src="Fig.%208%20small.jpg" width="355" height="344"></a></p>

<SCRIPT>comment(17)</SCRIPT><p align=center><b>&nbsp;Fig 8. Loss scan of
corrosion area after 4.7 mils of paint (click for a full-size image)</b></p>

<p align="center">
 <a href="Fig.%209.jpg"><img border="1" src="Fig.%209%20small.jpg" width="370" height="342"></a>

<SCRIPT>comment(17)</SCRIPT><p align="center"><b>Fig 9. Shift scan of
corrosion area after 4.7 mils of paint (click for a full-size image)</b></p>

</div>
<SCRIPT>footer()</SCRIPT>
</body>

</html>