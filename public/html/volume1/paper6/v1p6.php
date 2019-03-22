<?php 
session_start();
include_once('/home/jcsete5/public_html/jcse.org/jcse/php_inc/jrnl_subs.php');
$logged_in=is_loggedin();
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>JCSE Volume 1 Paper 6</title>
<SCRIPT src="/getcomm.php?vol=1&pap=6"></SCRIPT>
<SCRIPT src="/jsinc/jcsesubs.js.php"></SCRIPT>
<SCRIPT>
getcommentmode();</SCRIPT></HEAD><body>
<script>var lgi=<?php if ($logged_in) { echo('true');} else { echo('false');} ?>;</script>
<script src="/jsinc/writeheader.js"></script><?php ggl_ad(); ?>
  <h2>Volume 1 Paper 6</h2>
  <script>ifnotmode(3,'<p><em>Submitted 6 February 1997, published 18 March 1999</em></p>');</script>
  <h2>A Neural Network Model for CO<sub>2</sub> Corrosion of Carbon Steel</h2>
  <p>Srdjan Nesic<sup>1</sup> and Miran Vrhovac<sup>2</sup><br>
  <em><sup>1</sup>Department of Mechanical Engineering, University of Queensland,
  Brisbane Qld 4072, Australia.<br>
  <sup>2</sup>Research, Development and Training Department, ISQ - Instituto de
  Soldadura e Qualidade, Portuguese Welding Institute, EN249 - Km 3, Cabanas -
  Leião, Tagus Park, Apartado 119, 2781 Oeiras - Codex, Portugal</em><sup></p>
  </sup>
  <hr>
<SCRIPT>notify();</SCRIPT><SCRIPT>comment(1)</SCRIPT><h3>Abstract</h3>
  <p>A model for &quot;worst case&quot; CO<sub>2</sub> corrosion using a neural
  network approach was developed in this study. The performance of the model was
  validated against a large experimental database and has demonstrated superior
  fitting of the experimental data compared to one mechanistic and two well
  known semi-empirical models from the open literature.</p>
<SCRIPT>comment(2)</SCRIPT><h3>Introduction</h3>
  <p>Although much work has been done in the area of CO<sub>2</sub> corrosion
  particularly in the past two decades, modelling of this process was seriously
  hampered by the lack of understanding. For example, even the basic
  electrochemical reaction mechanisms still remain obscure. When a number of
  complicating factors, which are normally present in industrial situations,
  such as:
  <ul>
    <li>formation of protective surface films,</li>
    <li>presence of the hydrocarbon phase,</li>
    <li>presence of corrosion inhibitors,</li>
    <li>presence of glycol or methanol,</li>
    <li>condensation in wet gas transport,</li>
    <li>multi-phase flow,</li>
    <li>steel type,</li>
    <li>corrosion history,</li>
  </ul>
  <p>are added, the complexity of the problem exceeds our ability to understand
  it. Consequently, we have been unable so far to construct mechanistic,
  theoretically based, models for prediction of CO<sub>2</sub> corrosion. The
  exception is the laboratory case of bare steel corroding in pure CO<sub>2</sub>
  saturated water (&quot;worst-case&quot; corrosion) for which a few models can
  be found in the open literature.<sup>1, 2, 3</sup></p>
<SCRIPT>comment(3)</SCRIPT>  <p>There is a number of semi-empirical models which attempt to bridge the gap
  between our lack of understanding and the need to have an operating CO<sub>2</sub>
  corrosion model.<sup>4, 5</sup><font face="Times" size="1"> </font>These
  models rely partly on theory, and when it fails to give the right answer, they
  introduce so called &quot;correction factors&quot; which in a purely empirical
  way adjust the answer to fit the limited experimental observations. Most often
  these semi-empirical models have reasonable fitting capabilities but are very
  poor when used for extrapolation outside the boundaries of parameters with
  which they were calibrated.</p>
<SCRIPT>comment(4)</SCRIPT>  <p>Since there are a lot of scattered experimental data on CO<sub>2</sub>
  corrosion in the literature (albeit much of it of poor quality), an attempt
  has been made in the present study to construct a purely empirical model for
  CO<sub>2</sub> corrosion, using the state-of-the-art artificial intelligence
  (AI) modelling techniques. The result is a CO<sub>2</sub> corrosion model
  based on neural networks described below. It is, in its present stage, also
  just another model of &quot;worst case&quot; corrosion. However given enough
  reliable experimental data it can be easily extended to account for many of
  the relevant factors listed above.</p>
<SCRIPT>comment(5)</SCRIPT>  <p>Not many purely empirical models exist in the open literature. A
  statistical <sup>6</sup> and a Markov description stochastic approach <sup>7</sup>
  were presented for modelling of pitting corrosion, however, this topic is
  outside the scope of this paper. Another example is the linear multiple
  regression model shown by Adams et al.<sup>8</sup> , however, it is doubtful
  that one such simple linear model (even if it is multivariable) can represent
  a satisfactory description of the highly nonlinear and coupled processes
  occurring in CO<sub>2</sub> corrosion.</p>
<SCRIPT>comment(6)</SCRIPT>  <p>Before the neural network model is described below, a brief description of
  the CO<sub>2</sub> corrosion process is given followed by an outline of the AI
  techniques used, with references to further reading.</p>
<SCRIPT>comment(7)</SCRIPT>  <h3>A Brief Description of the CO<sub>2</sub> Corrosion Process</h3>
  <p>There is a number of detailed studies where the process of CO<sub>2</sub>
  corrosion is described in detail.<sup>3, 9, 10</sup> Here only an outline of
  the main reactions is presented.</p>
<SCRIPT>comment(8)</SCRIPT>  <p>Aqueous CO<sub>2</sub> corrosion of carbon steel is an electrochemical
  process involving the anodic dissolution of iron and the cathodic evolution of
  hydrogen. The overall reaction is:</p>
  <p align="center"><img src="image84.gif" width="254" height="28"> (1<a name="overall"></a>)</p>
<SCRIPT>comment(9)</SCRIPT>  <p align="JUSTIFY">The electrochemical reactions are often accompanied by the
  formation of films of FeCO<sub>3</sub> (and/or Fe<sub>3</sub>O<sub>4</sub>)
  which can be protective or non protective depending on the conditions under
  which they are formed.</p>
<SCRIPT>comment(10)</SCRIPT>  <p>The anodic dissolution of iron in acid solutions:</p>
  <p align="center"><img src="image85.gif" width="146" height="26"> (2<a name="anofe"></a>)</p>
  <p>has been studied extensively with several multi-step mechanisms suggested
  to explain the various experimental results.<sup>11, 12</p>
  </sup>
<SCRIPT>comment(11)</SCRIPT>  <p align="JUSTIFY">On the cathodic side, it has been assumed that the presence
  of CO<sub>2 </sub>increases the rate of the hydrogen evolution reaction. In
  strong acids, which are completely dissociated, the rate of hydrogen evolution
  cannot exceed the rate at which H<sup>+</sup> ions can be transported to the
  surface from the bulk solution. In solutions with a pH &gt;4 this mass
  transfer controlled limiting current is small, however the presence of H<sub>2</sub>CO<sub>3</sub>
  (hydrated CO<sub>2</sub>) enables hydrogen evolution at a much higher rate.
  Thus at a given pH the presence of CO<sub>2</sub> leads to a much higher
  corrosion rate than would be found in a solution of a strong acid. It is not
  known whether H<sub>2</sub>CO<sub>3</sub> is reduced directly (as assumed by
  many workers in the field)<font face="Times" size="1"> </font><sup>2, 9</sup>
  or the final step in the reaction follows the dissociation of the H<font size="1">2</font>CO<font size="1">3
  </font>.<sup>13</sup> Many have assumed that the two reactions are independent
  and the net cathodic current is the sum of the currents for the two reactions:<sup>2</sup></p>
  <dir>
    <p align="center"><img src="image86.gif" width="133" height="30">(3<a name="hplusred"></a>)</p>
    <p align="center"><img src="image87.gif" width="243" height="31">(4<a name="carbacidred"></a>)</p>
    </dir>
<SCRIPT>comment(12)</SCRIPT>  <p align="JUSTIFY">It has been suggested<sup>14</sup> that in CO<sub>2</sub>
  solutions at higher pH the direct reduction of the bicarbonate ion becomes
  important:</p>
  <p align="center"><img src="image88.gif" width="244" height="30"><font face="Times"> (5<a name="bicarbred"></a>
  )</p>
  </font>
<SCRIPT>comment(13)</SCRIPT>  <h3>A Brief Description of the Artificial Intelligence Techniques Used</h3>
  <h4>Evolved Descriptors Approach</h4>
  <p align="JUSTIFY">In this approach<sup>15</sup> it is assumed that the actual
  problem is depicted by a known (measurable) set of input parameters, called
  here <i>primitive descriptors</i> and a set of output parameters. Often, the
  direct correlation between the problem <i>input</i> and the <i>output</i> is
  poor. Hence, it is necessary to complement such a description of the problem
  with the so called <i>evolved descriptors</i>, which are non-linear
  combinations of the primitive descriptors and which capture important causal
  relations between them, expressing implicitly the actual problem physics. For
  example a well known evolved descriptor in hydrodynamics, obtained from
  dimensional analyses, is the Reynolds number. In general a solution of a
  particular problem depends on a set of specific evolved descriptors, which
  have to be defined <u>before</u> a development of a model is attempted.
  However, it is not always possible to define the evolved descriptors
  beforehand in an explicit analytical form, especially when the problem at hand
  is not fully understood. This paper shows, among other things, how they can
  still be defined indirectly by using combined Artificial Intelligence
  techniques: Neural Networks and Genetic Algorithms.</p>
<SCRIPT>comment(14)</SCRIPT>  <h4>Neural Network</h4>
  <p align="JUSTIFY">Generally, neural networks are aimed at prediction or
  pattern recognition problems, for which it is difficult to develop a suitable
  analytical model. In addition, neural networks are a convenient tool for
  testing the suitability of different evolved descriptors. The best set of
  chosen evolved descriptors is the one for which the neural network performs
  most accurate interpretation of independent test data.</p>
<SCRIPT>comment(15)</SCRIPT>  <p align="JUSTIFY">Neural networks can &quot;learn&quot; to forecast,
  developing a correlation between a known set of input and output problem
  descriptors. The learning capability is achieved through its architecture,
  structured as a network of interconnected non-linear computational units
  called &quot;neurones&quot;, organised in multiple layers just like biological
  neural cells. Each neurone is characterised by a sigmoidal transfer function
  (other types of transfer functions can also be used), responsible for
  non-linear interpretation (&quot;learning&quot;) of input signals, scaled
  between 0 and 1. Each connection between the neurones is given a numerical
  weight, which represents a conductivity of the connection. When the neural
  network is &quot;learning&quot;, the weights are iteratively recalculated
  until the error of prediction is minimised.</p>
<SCRIPT>comment(16)</SCRIPT>  <p align="JUSTIFY">Neural network methods typically excel over traditional
  computational or rule based methods at the problems where pattern recognition
  is important and precise computational answers are not required. Further, when
  a neural network&#146;s inputs and/or outputs contain evolved parameters, its
  computational precision and prediction ability significantly increases. In
  that case, as it is shown in a comparisons below, a neural network outperforms
  other more traditional modelling approaches.</p>
  <p align="center"><img src="image89.gif" width="550" height="401"></p>
<SCRIPT>comment(17)</SCRIPT>  <p align="CENTER"><a name="_Ref378048808">Figure 1</a>. Back Propagation
  neural network.</p>
<SCRIPT>comment(18)</SCRIPT>  <p align="JUSTIFY">A Back Propagation neural network, used in the present
  model, consists of three interconnected neurone layers: input, hidden and
  output layers, as shown in Figure 1. The network learns by adjusting the
  connection weights (<i>w<sub>i</sub></i> and <i>w<sub>h</sub></i>). using the
  so called Generalised Delta Rule (GDR) algorithm. GDR is a gradient-descent
  technique based on minimisation of squared network errors, obtained in
  comparison between network interpretation of training input patterns and known
  training outputs. During the training, the network adjusts its weights to
  obtain better answers simultaneously with a backward error propagation through
  the network layers. The training efficiency depends on interaction between
  neurone transfer functions and typical training patterns.</p>
<SCRIPT>comment(19)</SCRIPT>  <p align="JUSTIFY">A complete set of training patterns presented to the neural
  network during the training process is called an epoch. Usually, the training
  patterns within one epoch are processed by the neural network in a randomly
  ordered sequence to avoid learning by memorisation. This can happen when there
  is an excessive number of nodes and particularly when a fixed order of
  patterns is given repeatedly to the neural network during the training
  sequence.<sup>18</sup> There is a simple way to avoid this problem, which
  amounts to reshuffling of the patterns every time a new set of patterns is
  presented to the network.<sup>19</sup> When this is done, the memorisation of
  the individual patterns can be reduced.</p>
<SCRIPT>comment(20)</SCRIPT>  <p align="JUSTIFY">The unknown analytical form of evolved problem descriptors
  and their correlation to the output are approximated by introduction of
  additional network inputs and their non-linear processing through the neural
  network architecture. The neural network inputs, initially consisting of
  scaled primitive descriptors <i>p<sub>i</i>=<i>1</i>,..,<i>n</i></sub> are
  extended with the harmonics of one-dimensional Fourier cosine series <i><font face="Symbol">S</font>{A<sub>j<font face="Symbol">×</font>
  </sub>cos((2<font face="Symbol">×</font> j-1)<font face="Symbol">×</font> 2<font face="Symbol">×</font>
  <font face="Symbol">p× </font>p<sub>i=1,..,n</sub>)}<sub>j=1,..,r.</sub>,</i>
  where <i>r</i> is total number of harmonics in each of the series. After being
  scaled by <i>(cos(2<font face="Symbol">×</font> <font face="Symbol">p× </font>p<sub>i</sub>)+1)/2=cos<sup>2</sup>(<font face="Symbol">p×
  </font>p<sub>i</sub>),</i> the additional inputs are presented to the network
  in the increasing harmonic order as:</p>
  <i>
  <p>p<sub>n+1</sub>=cos<sup>2</sup>(<font face="Symbol">p× </font>p<sub>1</sub>),
  p<sub>n+2</sub>=cos<sup>2</sup>(3<font face="Symbol">×</font> <font face="Symbol">p×
  </font>p<sub>1</sub>), p<sub>n+3</sub>= cos<sup>2</sup>(5<font face="Symbol">×</font>
  <font face="Symbol">p× </font>p<sub>1</sub>),&#133;, p<sub>n+r</sub>=cos<sup>2</sup>((2<font face="Symbol">×</font>
  r-1)<font face="Symbol">×</font> <font face="Symbol">p× </font>p<sub>1</sub>),
  &#133; ,</p>
  <p>p<sub>n<font face="Symbol">×</font> (r-1)+1</sub>=cos<sup>2</sup>(<font face="Symbol">p×
  </font>p<sub>2</sub>), p<sub>n<font face="Symbol">×</font> (r-1)+2</sub>=cos<sup>2</sup>(3<font face="Symbol">×</font>
  <font face="Symbol">p× </font>p<sub>2</sub>), p<sub>n<font face="Symbol">×</font>
  (r-1)+3</sub>=cos<sup>2</sup>(5<font face="Symbol">×</font> <font face="Symbol">p×
  </font>p<sub>2</sub>), &#133;, p<sub>n<font face="Symbol">×</font> (r-1)+r</sub>=cos<sup>2</sup>((2<font face="Symbol">×</font>
  r-1)<font face="Symbol">×</font> <font face="Symbol">p× </font>p<sub>n</sub>).</p>
  </i>
<SCRIPT>comment(21)</SCRIPT>  <p align="JUSTIFY">Hence, the total number of input neurons <i>I</i> increases
  from &quot;<i>n</i>&quot; to &quot;<i>n<font face="Symbol">×</font> (1+r</i>)&quot;.
  The number of hidden neurons <i>H</i> can be selected by using recommendations
  found in.<sup>20</sup> Therefore the total number of network connections<i> </i>becomes
  <i>(I+1)*H+(H+1)*O</i> and should be smaller than the number of training
  patterns. <i>O</i> is a number of outputs and the &quot;<i>+1</i>&quot; stands
  for a bias neuron in input and hidden network layers.</p>
<SCRIPT>comment(22)</SCRIPT>  <h4>Genetic Algorithms</h4>
  <p align="JUSTIFY">During the training, the network can operate interactively
  with a genetic algorithm. Genetic algorithms are stochastic search tools for
  determination of the fittest problem solution according to a pre-defined
  criteria. The main purpose of the genetic algorithm in this work was to
  enhance the network training efficiency.</p>
<SCRIPT>comment(23)</SCRIPT>  <p align="JUSTIFY">M. Vrhovac<sup>16</sup> reported that selection of the
  proper sequence of patterns for each training epoch considerably influences
  the training efficiency. The genetic algorithm is used here to determine the
  fittest sequence of patterns for the given set of training epochs. The fittest
  training sequence generates the minimal standard deviation of the neural
  network output. The standard deviation is calculated for the complete set of
  patterns in each training epoch. The sequence of training patterns is defined
  as a string of concatenated pattern order numbers, such as |127|022|239|&#133;|004|,
  representing a chromosome in the genetic population with each number having
  fixed three digits length. The sequence was allowed to repeat the order number
  of patterns.</p>
<SCRIPT>comment(24)</SCRIPT>  <p align="JUSTIFY">Genetic algorithms encode initial input data set
  information into strings, analogous to living being cellular chromosomes. A
  population of strings competes according to predefined solution fitness
  criteria, so that the fittest among them &quot;procreate&quot; and the rest
  eventually dies &quot;childless&quot;. As with biological parents, two strings
  combine by simulated genetic operations: <i>crossover</i> and <i>mutation</i>,
  contributing part of their characteristics to two new-born offspring strings.
  In this case, the genetic operations on chromosomes were performed on
  individual pattern numbers, here treated as genes. The crossover was performed
  by random exchange of entire numbers between selected parent strings. The
  mutation was performed individually on the each parent by substitution of the
  randomly chosen number (gene) from the given sequence with another number
  (gene) randomly chosen from the complete set of pattern order numbers. Both
  operations were controlled by stipulated rates. The new-born offspring join
  the string population taking the place of their parents and compete further
  until an acceptable problem solution is found.</p>
<SCRIPT>comment(25)</SCRIPT>  <p align="JUSTIFY">Genetic algorithms are robust. They perform well on
  problems whose complexity increases exponentially with number of input
  parameters. Also, they possess the ability of implicit parallelism, to
  evaluate simultaneously many possible problem solutions, the feature largely
  exploited in this case.</p>
<SCRIPT>comment(26)</SCRIPT>  <h3>The Present Model</h3>
  <p>The experimental database of Dugstad et al.<sup>5</sup> described below was
  used for training of the neural network (courtesy of Institute for Energy
  Technology, Norway). It was not easy to find a sufficiently wide and reliable
  experimental CO<sub>2</sub> corrosion database where most of the relevant
  parameters were measured and controlled, so that it could be used as a
  training database for the neural network model. The study of Dugstad et al.<sup>5</sup>
  satisfies this criterion to the largest extent. It covers a broad range of
  experimental conditions: temperature t=20-90 <sup>o</sup>C, pipe velocity <i>v</i>=0.1-13
  m/s, pH 3.5 -7, CO<sub>2</sub> partial pressure <img src="image90.gif" width="41" height="30">=0.3-26
  bar, ferrous ion concentration Fe<font size="1">++</font> =1-230 ppm. The
  corrosion rate was measured on flat diagonally mounted St52 steel coupons
  using a radioactive measuring technique in experiments which lasted from a few
  days to a few weeks. Long duration experiments were needed to obtain stable
  corrosion rates due to growth of iron carbide films.</p>
<SCRIPT>comment(27)</SCRIPT>  <p>Most of the experiments were conducted under conditions where protective
  films did not form, however, in some of the high temperature experiments
  precipitation of iron carbonate scales may have occurred. For more details of
  the experimental techniques and the results see the original paper.<sup>5</p>
  <p align="center"></sup>
  <img src="image91.gif" alt="image91.gif (39662 bytes)" width="323" height="455"></p>
  <b>
<SCRIPT>comment(28)</SCRIPT>  <p align="center"><a name="_Ref378064611">Figure 2</a>. Artificial
  intelligence model for determination of the <i>V<sub>cor</sub></i> correlation</p></b>
<SCRIPT>comment(29)</SCRIPT>  <p>The total number of experiments presented by the authors<font face="Times" size="1">
  </font>was 328. The present neural network model was actually trained with 308
  of the 328 cases. The remaining cases were randomly sampled and extracted in
  order to perform a preliminary test of the neural network ability to
  generalise by comparing the predictions with an &quot;unknown&quot; data-set.</p>
<SCRIPT>comment(30)</SCRIPT>  <p>The model, consisted of a neural network and a genetic algorithm (Figure
  2).<sup>16, 17</sup> After it was determined that the effect of <i>Fe<font size="1">2+</font></i>
  on the corrosion rate is small, the model was constructed having four
  primitive descriptors (inputs):</p>
    <i>
    <p>t</i> - temperature,<br>
    <img src="image92.gif" width="39" height="30">- partial pressure of CO<sub>2</sub>,<br>
    <i>v</i> - velocity<br>
    pH</p>
  <p>and one output:</p>
    <i>
    <p>V<sub>cor</sub></i> - corrosion rate.</p>
<SCRIPT>comment(31)</SCRIPT>  <p align="JUSTIFY">Including the evolved descriptors, the final neural network
  architecture was defined by 32 input neurones, 8 hidden neurones and one
  output neurone. The genetic population contained 100 chromosomes.</p>
<SCRIPT>comment(32)</SCRIPT>  <p align="JUSTIFY">The training of the model was achieved in the following
  manner:</p>
  <ol>
    <li>Initially, the network performed training without the genetic algorithm,
      for certain number of epochs, until an approximately steady decreasing
      rate of the network output standard deviation was established.</li>
    <li>Then, the genetic algorithm was started by random generation of
      chromosomes for the initial set of training sequences in the genetic
      population.</li>
    <li>The network continued to train attributing calculated standard deviation
      to the corresponding chromosome of the actual training sequence at the end
      of each completed training epoch.</li>
    <li>After characterisation of all chromosomes by the corresponding standard
      deviation, they were sorted by fitness. The genetic operations were
      applied.</li>
    <li>The network continued to train with the new generation of chromosomes
      repeating the current and the previous step until the network output
      standard deviation reached relative but not complete stagnation.</li>
  </ol>
<SCRIPT>comment(33)</SCRIPT>  <p align="JUSTIFY">Instead of randomly varying the order of patterns presented
  to the neural network during training, the genetic algorithm intelligently
  selected the fittest sequences of training patterns from the random generated
  pool of epochs and improve them.</p>
<SCRIPT>comment(34)</SCRIPT>  <h3>Performance of the Model</h3>
  <p>Once the model was constructed it was interesting to compare its
  performance to the performance of some of the other well known mechanistic and
  semi-empirical models from the open literature. Three other models were
  selected for this task:
  <ul>
    <li>the mechanistic (electrochemical) model of Nesic et al.<sup>3</sup> (in
      further text referred to as EC model),</li>
    <li>the semi-empirical model of de Waard et al.<sup>21</sup> (SHELL model)
      and</li>
    <li>the semi-empirical model of Dugstad et al.<sup>5</sup> (IFE model).</li>
  </ul>
<SCRIPT>comment(35)</SCRIPT>  <p>It should be pointed out that the selected empirical database<font face="Times" size="1">5</font>
  used for training of the neural network was actually also used by both the
  SHELL and IFE models for calibration of the model constants. In that sense the
  comparisons shown below can be seen primarily as a test of the ability of
  these models to describe the experimental data. The mechanistic EC model was
  not calibrated against this database and the presented comparison represents
  an extrapolation prediction for this model.</p>
<SCRIPT>comment(36)</SCRIPT>  <p>As shown in Figures 3-5, the SHELL, IFE and neural network models all show
  reasonable predictive capabilities. The best agreement between the predictions
  and the KSC2 experimental values was obtained for the neural network model
  with a correlation coefficient of <i>r<sup>2</sup></i>=0.98. The IFE model was
  second best (<i>r<sup>2</sup></i>=0.82) followed by the SHELL model (<i>r<sup>2</sup></i>=0.72).
  The main discrepancies for the latter two models come from the high
  temperature experiments where protective films probably formed. With these
  points removed from the analysis (along with some other outliers) de Waard et
  al.<sup>21</sup> reported an improved agreement (<i>r<sup>2</sup></i>=0.91)
  for the SHELL model.</p>
<SCRIPT>comment(37)</SCRIPT>  <p>It is interesting that the predictions of the neural network for the
  extracted 20 test cases was also rather successful: <i>r<sup>2</sup></i>=0.88
  (Figure 5). The extrapolation predictions made with the EC model (Figure 6)
  showed a worse agreement with the experimental data (<i>r<sup>2</sup></i>=0.62).
  This is not really surprising since the model constants were calibrated with a
  different database. There, relatively short glass cell experiments were used
  (a few days), where lower corrosion rates were measured than in the KSC2
  experiments due to the absence of iron carbide films normally developed during
  more prolonged corrosion tests.</p>
  <p align="center"><img src="image93.gif" width="671" height="559"></p>
  <b>
<SCRIPT>comment(38)</SCRIPT>  <p align="CENTER"><a name="_Ref348955993">Figure 3</a>. Comparison of the
  SHELL model with the KSC2 experimental data.</p>
  </b>
  <p align="center"><img src="image94.gif" width="671" height="561"></p>
  <b>
<SCRIPT>comment(39)</SCRIPT>  <p align="CENTER"><a name="_Ref348955997">Figure 4</a>. Comparison of the IFE
  model with the KSC2 experimental data.</p>
    </b>
    <p align="center"><img src="image95.gif" width="647" height="568"></p>
  <b>
<SCRIPT>comment(40)</SCRIPT>  <p align="CENTER"><a name="_Ref348955999">Figure 5</a>. Comparison of the
  neural network model with the KSC2 experimental data.</p>
    </b>
    <p align="center"><img src="image96.gif" width="671" height="561">&nbsp;</p>
  <b>
<SCRIPT>comment(41)</SCRIPT>  <p align="CENTER"><a name="_Ref350576341">Figure 6</a>. Comparison of the EC
  model with the KSC2 experimental data.</p>
  </b>
<SCRIPT>comment(42)</SCRIPT>  <h3>Conclusions</h3>
<p align="JUSTIFY">A purely empirical CO<sub>2</sub> corrosion model based on
  a neural network coupled with a genetic algorithm and an evolved parameter
  approach was developed in this study. The performance of the neural network
  model validated against a large experimental database has demonstrated
  superior predictive performance compared to two other well known
  semi-empirical models from the open literature. The neural network model also
  demonstrated better predictive capabilities when compared to a purely
  mechanistic electrochemical CO<sub>2</sub> corrosion model (although the
  latter model was calibrated with a different data set, and is therefore
  extrapolating outside the bounds for which it was developed).</p>
<SCRIPT>comment(43)</SCRIPT>  <h3>Future Work</h3>
  <p>A few different directions are envisioned for further development of the
  neural network model:
  <ul>
    <li>Enlargement of the empirical database to include cases with different
      steels, protective films, hydrocarbon phase, inhibitors, glycol, etc.</li>
    <li>Special emphasis will be placed on acquiring reliable field data.</li>
    <li>Further development of the evolved descriptor approach, where physically
      important correlations between different parameters will be sought.</li>
    <li>General improvements of the neural network model.</li>
  </ul>
<SCRIPT>comment(44)</SCRIPT>  <h3>Acknowledgements</h3>
  <p>The experimental database and initial support for this project was provided
  by the Institute for Energy Technology in Norway. Their contribution to this
  project is greatly appreciated. Funds for further development of the neural
  network have been obtained from the Australian Research Council. The current
  research program is open for new participants. If you are interested please
  contact <SCRIPT>mailto2('srdjan','mech.uq.edu.au');</SCRIPT><i>.</p>
  </i>
<SCRIPT>comment(45)</SCRIPT>  <h3>References</h3>
  <dir>
    <p>1. C. de Waard and D. E. Milliams, &quot;Prediction of Carbonic Acid
    Corrosion in Natural Gas Pipelines&quot;, First International Conference on
    the Internal and External Corrosion of Pipes, paper F1, University of
    Durham, UK, 1975.</p>
    <p align="JUSTIFY">2. </font>L. G. S. Gray, B. G. Anderson, M. J. Danysh, P.
    G. Tremaine, &quot;Mechanism of Carbon Steel Corrosion in Brines Containing
    Dissolved Carbon Dioxide at pH 4&quot;, Corrosion/89, paper no. 464,
    (Houston, TX: NACE International, 1989).</p>
    <p align="JUSTIFY">3. S. Nesic, J. Postlethwaite and S. Olsen,<b> &quot;</b>An
    Electrochemical Model for Prediction of CO<sub>2</sub>Corrosion&quot;, 
    Corrosion/95, paper no. 131, (Houston, TX: NACE International, 1995)</p>
    <p align="JUSTIFY">4. C. de Waard and U. Lotz, &quot;Prediction of CO<sub>2</sub>
    Corrosion of Carbon Steel&quot;, Corrosion/93, paper no. 69,
    (Houston, TX: NACE International, 1993).</p>
    <p align="JUSTIFY">5. A. Dugstad, L. Lunde and K. Videm &quot;Parametric
    Study of CO<sub>2</sub>
    Corrosion of Carbon Steel&quot;, Corrosion/94, paper no. 14,
    (Houston, TX: NACE International, 1994).</p>
    <p align="JUSTIFY">6. A. K. Sheikh, J. K. Boah and D. A. Hansen, Corrosion,
    46 (1990) p. 190.</p>
    <p align="JUSTIFY">7. J. W. Provan and E. S. Rodriguez III, Corrosion 45
    (1989) p. 178.</p>
    <p align="JUSTIFY">8. C. D. Adams, J. D. Garber, F. H. Walters, C. Singh,
    &quot;Verification of Computer Modelled Tubing Life Predictions by Field
    Data&quot;, Corrosion/93, paper no. 82, (Houston, TX: NACE
    International, 1993).</p>
    <p align="JUSTIFY">9. C. de Waard and D. E. Milliams, Corrosion, 31
    (1975): p.131.</p>
    <p align="JUSTIFY">10. G. Schmitt and B. Rothman, Werkstoffe und
    Korrosion, 28 (1977): p.816.</p>
    <p align="JUSTIFY">11. J. O .M. Bockris, D. Drazic and A. R. Despic,
    Electrochimica Acta, 4 (1961): p.325.</p>
    <p>12. S. Nesic, N. Thevenot, and J. L. Crolet, &quot;Electrochemical
    Properties of Iron Dissolution in CO<sub>2</sub> solutions - basics
    revisited&quot;, Corrosion/96, paper no. 3, (Houston, TX: NACE
    International, 1996).</p>
    <p align="JUSTIFY">13. M. R. Bonis and J. L. Crolet, &quot;Basics of the
    Prediction of the Risks of CO<sub>2</sub>
    Corrosion in Oil and Gas Wells&quot;, Corrosion/89, paper no. 466,
    (Houston, TX: NACE International, 1989).</p>
    <p align="JUSTIFY">14. L. G. S. Gray, B. G. Anderson, M. J. Danysh and P. R.
    Tremaine, &quot;Effect of pH and Temperature on the Mechanism of Carbon
    Steel Corrosion by Aqueous Carbon Dioxide&quot;, Corrosion/90, paper
    no. 40, (Houston, TX: NACE International, 1990).</p>
    <p align="JUSTIFY">15. J. Zarka, and P. Navidi, &quot;Clever Optimal Design
    of Materials and Structures&quot;, Proceedings, French-Korean Conference on
    Numerical Analysis of Structures, Seoul, Korea, 1993.</p>
    <p align="JUSTIFY">16. M. Vrhovac, &quot;Combined Empirical and Analytical
    Modelling of Hardness Softening Due to Particle Coarsening Using Artificial
    Intelligence Tools&quot;, ASME 95 Congress, IMECE Proceedings, MD-Vol. 69-2,
    San Francisco, California, USA, November 12-17, 1995.</p>
    <p align="JUSTIFY">17. M. Vrhovac, C. R. João and R. Rodrigues,
    &quot;Automation of Microstructure Analysis by Artificial Intelligence Image
    Processing &quot;, Int. Conf. SMIRT 13, Post Conference Seminar:
    &quot;Applications of Intelligent Software Systems in Power Plant, Process
    Plant and Structural Engineering&quot;, São Paolo, Brasil, August 21-23,
    1995.</p>
    <p align="JUSTIFY">18. P. Simpson, &quot;Artificial Neural Systems&quot;,
    Pergamon Press, New York, 1990.</p>
    <p align="JUSTIFY">19. P. Wasserman, &quot; Neural Computing, Theory and
    Practice&quot;, Van Norstrand Reinhold, New York, 1989.</p>
    <p align="JUSTIFY">20. W. C. Carpenter, and M. E. Hoffman,
    &quot;Training Backprop Neural Networks&quot;, Journal &quot;AI
    Expert&quot;, p.30-33, A Miller Freeman Publication, USA, 1995</p>
    <p align="JUSTIFY">21. C. de Waard, U. Lotz and A. Dugstad, &quot;Influence
    of Liquid Flow Velocity on CO<sub>2</sub>
    Corrosion a Semi-Empirical Model&quot;, Corrosion/95, paper no. 128,
    (Houston, TX: NACE International, 1995).</p>
  </dir>
  <SCRIPT>footer()</SCRIPT></html>