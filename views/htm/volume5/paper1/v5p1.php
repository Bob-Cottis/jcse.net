<?php 
session_start();
include_once('jrnl_subs.php');
$logged_in=is_loggedin();
?>
<html>
<head>
<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
<title>JCSE Volume 5 Paper 1</title> 
<SCRIPT src="/getcomm.php?vol=5&pap=1"></SCRIPT>
<SCRIPT src="/jsinc/jcsesubs.js.php"></SCRIPT>
<SCRIPT>getcommentmode();</SCRIPT></head>

<body link=blue vlink=purple>
    <script src="/jsinc/writeheader.js"></script><?php ggl_ad(); ?>

<div>

<div>

<h6>ISSN <strong>1466-8858</strong></h6>

<h2>Volume 5 Paper 1</h2><script>ifnotmode(3,'<p>Submitted 6th July 2003, final version submitted 1st Febraury 2004<br>');</script>

<div align=center>

<hr size=2 width="100%" align=center>

</div>

<h2><b>ATMOSPHERIC CORROSION OF METALS</b></h2>

<p>Sabah A. Abdul-Wahab<sup>*,1</sup>,
Charles S. Bakheit<sup>2</sup>, R.A. Siddiqui<sup>1</sup>, Saleh
M. Al-Alawi<sup>1</sup><br>
<sup>1</sup><i>Sultan Qaboos University, College of
Engineering, P.O. Box 33, Al Khoud, P.C. 123, Muscat,
Sultanate of Oman,<br>
</i><sup>2</sup><i>Sultan Qaboos University, Department
of Mathematics and Statistics, College of Science, P.O. Box 36, Al Khoud, P.C. 123, Muscat, Sultanate of Oman</i></p>

<SCRIPT>notify();</SCRIPT><h3>Abstract</h3>

<script>comment();</script><p>This work is dealing essentially with atmospheric corrosion to assess the
degrading effects of air pollutions on various metals that are mostly used in
the engineering systems.&nbsp; The exposure study was conducted in <st1:country-region><st1:place><st1:country-region><st1:place>Oman</st1:place></st1:country-region></st1:place></st1:country-region>.
The common materials like aluminum, brass, copper, epoxy,
galvanized, mild steel and stainless steel were used for investigation.&nbsp;
The sites of exposure were chosen at five locations where the metals are likely
to be used. Additive models using median polish were used to investigate the
patterns of corrosion by metal type and location.&nbsp; Regression analysis was
also used to develop a number of predictor models for corrosion, based on metal
type, location, number of months of exposure, and number of degrading
pollutants in the air. The results of the additive models showed that copper
and mild steel were the most corrosive metals while stainless steel and epoxy
were the least corrosive. Of the locations, Sohar
came out as the site with the worst corrosion record. Carbonates were the main
component of corrosion, followed by chlorides and sulphates. The site at Al-Rusail had the highest level of carbonates corrosion, while
the Airport and Al-Fahl showed the highest level of
chlorides and sulphates corrosion, respectively.</p>

<script>comment();</script><p><b>Keywords: </b>Atmospheric corrosion, nitrates, chlorides, median polish</p>

<h3>Introduction</h3>

<script>comment();</script><p>Atmospheric corrosion is probably the most common form of corrosion and is
defined as the corrosion or degradation of material exposed to the air and its
pollutants.&nbsp; Therefore, it is important to know the specific corrosion
rate in a given application environment in order to affectively use metals in
outdoor structures.&nbsp; A common method for estimating the life of metals has
been the use of various types of metals and alloys for the different types of
atmospheres.&nbsp; Recognition of marked differences in corrosivity
has made it convenient to divide atmospheres into types.&nbsp; The major types
are rural, urban, industrial, marine, or a combination of these. </p>

<script>comment();</script><p>Many investigators have examined the corrosion rates of various metals
exposed to different atmospheres [1-4].&nbsp; These exposure studies were
conducted to evaluate the relative corrosion resistance of various metals to
different atmospheric environmental conditions.&nbsp; A metal resisting one
atmosphere may lack effective resistance elsewhere, and hence, relative
performance of metals changes with location.&nbsp; For example, galvanized iron
performs well in rural atmospheres but it is relatively less resistant to
industrial atmospheres [5].</p>

<script>comment();</script><p>The term corrosion products refer to the substances produced during a
corrosion reaction.&nbsp; These can be soluble or insoluble compounds.&nbsp;
The presence of corrosion products is the way in which corrosion is detected
(e.g. rust).&nbsp; In general, the properties of the corrosion product are often
the determining factors in the atmospheric corrosion behaviour of metals.</p>

<script>comment();</script><p>Models for predicting the corrosion damage of metals in the atmosphere are
useful for answering questions regarding the durability of metallic structures,
determining the economic costs of damages associated with the degradation of
materials, and acquiring knowledge about the effect of environmental variables
on corrosion kinetics [6,7].&nbsp; These models have
been shown to be effective in these areas:</p>

<script>comment();</script>
<ul>
  <li>Determination of the influence
of pollutants in corrosion or degradation rate by obtaining regression
equations between the different variables.</li>
</ul>

<script>comment();</script>
<ul>
  <li>Predictions about corrosion aggressivity of the atmosphere can be made based on the
characteristics of the environment and the materials.</li>
</ul>

<script>comment();</script><p>Both deterministic and statistical models have been developed for better
understanding the environment.&nbsp; Deterministic models are based on
fundamental mathematical descriptions of atmospheric processes, in which
effects (air pollution) are generated by causes (emissions).&nbsp; Examples of
the deterministic types are Euler and Gaussian models [8,9].&nbsp; On
the other hand, statistical models are based on semi-emprical
statistical relations among available data and measurements.&nbsp; They do not
necessarily reveal any relation between cause and effect. &nbsp;They attempt to
determine the underlying relationship between sets of input data (predictors)
and targets (predictands).&nbsp; Examples of
statistical models are regression analysis [10], time series analysis [11] and
artificial neural networks [12-13].&nbsp; </p>

<script>comment();</script><p>Most of the predictive models used are regression models that fit the data
such that the root mean square error is minimized.&nbsp; They are used to
express the relation between the quantity of corrosion and the reasons, and the
predicting equation is obtained by multiple regression analysis.&nbsp;
Generally, multiple regression analysis modeling is
effective to identify areas of risk, i.e., correlating among the corrosive
factors in an environment and the resultant corrosion and finally obtaining a
regression equation for the prediction of corrosion risk [14,15].&nbsp;
It is most properly performed on an independent random sample of data.&nbsp;
The effect of inputs on the output can be studied using regression
coefficients, standard errors of regression coefficients, and the level of
significance of the regression coefficients [16].&nbsp; It serves three major
purposes: (i) description of the relation between
variables; (ii) control of predictor variables for a given value of a response
variable; and (iii) prediction of a response based on predictor variables [17,18].&nbsp; Atmospheric corrosion phenomena and statistical
models based on regression analysis have been developed by many investigators
[2,19-22].</p>

<script>comment();</script><p>The objective of this paper is to use regression analysis to predict
corrosion rates of various metals at specific locations in <st1:country-region><st1:place><st1:country-region><st1:place>Oman</st1:place></st1:country-region></st1:place></st1:country-region>.&nbsp;
The atmospheric corrosion of common metals was studied at five locations.&nbsp;
The study was designed to be conduced for three years.&nbsp; However, the paper
is presenting the preliminary results of the first 8 months exposure periods
that extend from August 2000 through March 2001. </p>

<h3>Materials and Methods</h3>

<script>comment();</script><p>Atmospheric exposure tests were conducted at 5 test stations in <st1:country-region><st1:place><st1:country-region><st1:place>Oman</st1:place></st1:country-region></st1:place></st1:country-region>.&nbsp;
The locations of these sites along the <st1:place><st1:PlaceType><st1:place>
<st1:PlaceType>Gulf</st1:PlaceType></st1:PlaceType>
 of <st1:PlaceName><st1:PlaceName>Oman</st1:PlaceName></st1:place></st1:PlaceName></st1:place>
coast are shown in Figure 1.&nbsp; The distances of each site from seacoast
together with the heights above the sea level are also given in this
Figure.&nbsp; All the sites are located within the city limits of <st1:City><st1:place>
<st1:City><st1:place>Muscat</st1:place></st1:City></st1:place></st1:City>
except one, Sohar, which is located about 200 km
northwest.&nbsp; These sites vary considerably with respect to moisture
content, temperature and contaminants (e.g. dust content and gaseous
impurities).&nbsp; </p>

<script>comment();</script><p>These sites, therefore, have been divided into types.&nbsp; Airport was
classified as marine which is expected to be affected by particles of sea salt
(e.g. chlorides) carried by wind and deposited on materials.&nbsp; Al-Khod was classified as urban site.&nbsp; It is subjected to
normal precipitation patterns and typical urban contaminants emitted by
traffic.&nbsp; Al-Rusail was classified as industrial
area.&nbsp; It is identified with heavy industrial manufacturing
facilities.&nbsp; The atmosphere of Al-Rusail can
contain concentrations of SO<sub>2</sub>, chlorides, nitrates or other specific
industrial emissions that are released from sources located nearby.&nbsp; Sohar is a heavily industrial area that is located close to
the seacoast and hence it is both marine and industrial area.</p>

<script>comment();</script><p align="center">
<img border=0 id="_x0000_i1026"
src="v1p5_files/image002.jpg" width="464" height="588"></p>

<script>comment();</script><p align="center">Fig. 1.&nbsp; Location of the exposure sites in
relation to <st1:City><st1:place><st1:City><st1:place>Muscat</st1:place></st1:City></st1:place></st1:City>
city and other areas of <st1:country-region><st1:place><st1:country-region><st1:place>Oman</st1:place></st1:country-region></st1:place></st1:country-region>.</p>

<script>comment();</script><p>Scope and methodology of conducting the corrosion studies were similar for
all five locations.&nbsp; Aluminum, brass, copper, epoxy, galvanized, mild
steel and stainless steel were selected for exposure at each test
location.&nbsp; <font size="3" face="Times New Roman">
<span lang="EN-GB" style="font-size: 12.0pt; font-family: Times New Roman">Epoxy 
was painted on mild steel surface</span></font>.&nbsp; It is one of the most effective methods for corrosion protection
of mild steel.&nbsp; Like other metals, <font size="3" face="Times New Roman">
<span lang="EN-GB" style="font-size: 12.0pt; font-family: Times New Roman">the 
degradation of epoxy takes place </span></font>at certain rates
depending on the environmental conditions. </p>

<script>comment();</script><p>For each metal type, flat specimens measuring 100 x 40 mm were taken from
0.01 mm thick sheets, which were obtained from the same lot to insure uniform
composition.&nbsp; Specimens exposed in Sohar,
Airport, fahal and Russeel
are orientated in such away that they face the most corrosive 
<font size="3" face="Times New Roman">
<span lang="EN-GB" style="font-size: 12.0pt; font-family: Times New Roman">
environment</span></font>.&nbsp;
This convection was used since all these four exposure sites are close to a
source of pollutants such as seawater, refinery stacks or power stacks.&nbsp;
However, specimens exposed in Khod are orientated in
such away that they face south.&nbsp; This orientation was selected since <st1:country-region><st1:place><st1:country-region><st1:place>Oman</st1:place></st1:country-region></st1:place></st1:country-region>
is located in the northern hemisphere.&nbsp; Moreover, the specimens were
exposed at an angle equal to the latitude of the site.&nbsp; This convention
was selected because maximum exposure to sunlight is desired.</p>

<script>comment();</script><p>Specimens were mounted on a test reclined rack as shown in Figure 2.&nbsp;
The rack is made of wood and attached to a frame or stand.&nbsp; In order to
identify the exposed specimens, stamped code numbers are used.&nbsp; The
exposure racks are located in cleared areas such that the exposed specimens
will be subjected to the full effects of the atmosphere.&nbsp; Shadows of
trees, buildings, or structures should not fall on the specimens and local
contamination of the atmosphere was avoided.</p>

<script>comment();</script><p>Seven specimens (Aluminum, brass, copper, epoxy, galvanized
<font size="3" face="Times New Roman">
<span lang="EN-GB" style="font-size: 12.0pt; font-family: Times New Roman">steel</span></font>, mild steel and
stainless steel) were removed from each site after exposure periods of
1,2,3,4,5,6,7 and 8 months.&nbsp; Guidelines from American
Society for Testing and Materials (<st1:stockticker><st1:stockticker>ASTM</st1:stockticker></st1:stockticker>),
the National Association of Corrosion Engineers (NACE) and the International
Organization for Standardization (ISO) was used for the cleaning
procedures required before exposure and for cleaning and evaluation after
exposure.</p>

<script>comment();</script><p>The amount of metallic corrosion was determined by the weight-loss
method.&nbsp; This involved cleaning and weighing each test specimen prior to
exposure. Then after the exposure period, the product of corrosion from each
specimen is carefully removed and the specimen is reweighed.&nbsp; The average
weight loss per unit area provided a measure of the amount of metal lost by
corrosion.&nbsp; The corrosion products of the exposed metals were then analyzed chemically to determine the concentration values
of sulphates, nitrates, chlorides and carbonates.&nbsp; Each one of these
variables exerts an influence on the corrosion rate of metals and so it is
important in determining the test site corrosivity.&nbsp;
</p>

<script>comment();</script><p align="center">
<img border=0 id="_x0000_i1027"
src="v1p5_files/image004.jpg" width="336" height="372"><img border=0 id="_x0000_i1028"
src="v1p5_files/image006.jpg" width="195" height="276"></p>

<script>comment();</script><p align="center">Fig. 2.&nbsp; Atmospheric-corrosion
test rack.</p>

<script>comment();</script><p>It should be noted that the weight loss in the epoxy coated sample was due
to mass loss caused by degradation process of the coating.&nbsp; The thickness
of the coating varies from 0.65 to 0.85 mm. </p>

<h3>Results and Discussion</h3>

<h4>Model fitting by median polish </h4>

<script>comment();</script><p>An additive model, fitted to a two-way table, was used to investigate the
patterns of corrosion, and the various chemical components of the corrosion,
with the metals and the locations as the factors. The method applied here is
known as median polish, and involves first subtracting the median of a row from
all the numbers in the row, for each row, followed by a similar operation for
each column, using these medians as partial descriptions for the corresponding
rows and columns, respectively. The procedure is repeated until the medians of
all the rows and columns are effectively zero. Finally, the process splits the
data in the table into a common value, a set of row effects, a set of column
effects and a matrix of residuals, all of which sum to the original data
values. That is, a given data value for the cell in row i
and column j is split as follows:</p>

<script>comment();</script><p>Data<sub>ij</sub> = common term + row<sub>i</sub>
effect + column<sub>j</sub> effect + residual<sub>ij</sub></p>

<script>comment();</script><p>The row effects account for differences in the data values between rows,
relative to the common value. The column effects are similarly defined. Any
extraordinary data value would leave a large residual.&nbsp;&nbsp; The Median
polish was used in this study because the data are in a form in
which&nbsp;formal rigid hypothesis testing is not necessary. For more details
of the methods see Velleman and Hoaglin
[23].</p>

<script>comment();</script><p>Table 1a shows the sum of the corrosion rates over the eight months of
exposure, by metal type and location, and Table 1b is the final result of the
median polish for the same data set. The row effects show that mild steel and
copper (at 147 mg/cm<sup>2</sup> and 105 mg/cm<sup>2</sup> above the common
level, 63 mg/cm<sup>2</sup>, respectively) were clearly the most corroded of
the seven metals, irrespective of the locations. The least corroded were
stainless steel (-42 mg/cm<sup>2</sup>), aluminum
(-22 mg/cm<sup>2</sup>) and epoxy (-20 mg/cm<sup>2</sup>). In between are
galvanized steel (at 79 mg/cm<sup>2</sup> above the common rate) and brass (0.0 mg/cm<sup>2</sup>). The effects for locations were much
smaller, with differences from the common value ranging from only �11 to 26
mg/cm<sup>2</sup>.&nbsp; From these effects, it seems that, compared to the
other locations, Sohar (at 26 above the common value)
had the worst record of corrosion. The sites at the Airport and Al-fahl were the least affected. </p>

<script>comment();</script><p>There were substantial differences in the common values obtained from
fitting additive models by median polish to the data on the amounts of the four
major chemical components (Tables 2a-5b) causing the corrosion.</p>

<script>comment();</script><p>Using the metal types and locations as the two factors, the highest common
value was found to be that of carbonates (138 ppm),
and the least was of nitrates (33 ppm). The common
values for chlorides and sulphates were about equal (83 and 73 ppm, respectively).&nbsp; This indicates that a typical
metallic corrosion consisted of about 42% carbonates, 25% chlorides, 22%
sulphates and 10% nitrates. For carbonates, the effects for metal type were
very small relative to the common value, and ranged from �8 to 11.&nbsp;
Galvanized steel seemed to have the highest carbonates level, and the least
were copper and stainless steel.</p>

<script>comment();</script><p align="center">Table 1a. The sum of corrosion rates (mg/cm<sup>2</sup>)
over the study period by metal type and location</p>

<div align="center">
  <center>

<table border=1 cellspacing=0 cellpadding=0 width=583 style="border-collapse: collapse" bordercolor="#111111">
 <tr>
  <td width=115 valign=top>
  <p>&nbsp;</p>
  </td>
  <td width=72 valign=top>
  <p align=center>Airport</p>
  </td>
  <td width=72 valign=top>
  <p align=center>Al-Fahl</p>
  </td>
  <td width=84 valign=top>
  <p align=center>Al-Khod</p>
  </td>
  <td width=84 valign=top>
  <p align=center>Al-Rusail</p>
  </td>
  <td width=60 valign=top>
  <p align=center>Sohar</p>
  </td>
  <td width=96 valign=top>
  <p align=center><b>Raw effect </b></p>
  </td>
 </tr>
 <tr>
  <td width=115 valign=top>
  <p>Aluminum</p>
  </td>
  <td width=72 valign=top>
  <p align=center>37</p>
  </td>
  <td width=72 valign=top>
  <p align=center>41</p>
  </td>
  <td width=84 valign=top>
  <p align=center>36</p>
  </td>
  <td width=84 valign=top>
  <p align=center>42</p>
  </td>
  <td width=60 valign=top>
  <p align=center>56</p>
  </td>
  <td width=96 valign=top>
  <p align=center>41</p>
  </td>
 </tr>
 <tr>
  <td width=115 valign=top>
  <p>Brass</p>
  </td>
  <td width=72 valign=top>
  <p align=center>63</p>
  </td>
  <td width=72 valign=top>
  <p align=center>79</p>
  </td>
  <td width=84 valign=top>
  <p align=center>62</p>
  </td>
  <td width=84 valign=top>
  <p align=center>42</p>
  </td>
  <td width=60 valign=top>
  <p align=center>126</p>
  </td>
  <td width=96 valign=top>
  <p align=center>63</p>
  </td>
 </tr>
 <tr>
  <td width=115 valign=top>
  <p>Copper</p>
  </td>
  <td width=72 valign=top>
  <p align=center>146</p>
  </td>
  <td width=72 valign=top>
  <p align=center>147</p>
  </td>
  <td width=84 valign=top>
  <p align=center>168</p>
  </td>
  <td width=84 valign=top>
  <p align=center>174</p>
  </td>
  <td width=60 valign=top>
  <p align=center>230</p>
  </td>
  <td width=96 valign=top>
  <p align=center>168</p>
  </td>
 </tr>
 <tr>
  <td width=115 valign=top>
  <p>Epoxy</p>
  </td>
  <td width=72 valign=top>
  <p align=center>43</p>
  </td>
  <td width=72 valign=top>
  <p align=center>24</p>
  </td>
  <td width=84 valign=top>
  <p align=center>12</p>
  </td>
  <td width=84 valign=top>
  <p align=center>45</p>
  </td>
  <td width=60 valign=top>
  <p align=center>67</p>
  </td>
  <td width=96 valign=top>
  <p align=center>43</p>
  </td>
 </tr>
 <tr>
  <td width=115 valign=top>
  <p>Galvanized</p>
  </td>
  <td width=72 valign=top>
  <p align=center>90</p>
  </td>
  <td width=72 valign=top>
  <p align=center>88</p>
  </td>
  <td width=84 valign=top>
  <p align=center>165</p>
  </td>
  <td width=84 valign=top>
  <p align=center>142</p>
  </td>
  <td width=60 valign=top>
  <p align=center>195</p>
  </td>
  <td width=96 valign=top>
  <p align=center>142</p>
  </td>
 </tr>
 <tr>
  <td width=115 valign=top>
  <p>Mild steel</p>
  </td>
  <td width=72 valign=top>
  <p align=center>144</p>
  </td>
  <td width=72 valign=top>
  <p align=center>225</p>
  </td>
  <td width=84 valign=top>
  <p align=center>207</p>
  </td>
  <td width=84 valign=top>
  <p align=center>210</p>
  </td>
  <td width=60 valign=top>
  <p align=center>210</p>
  </td>
  <td width=96 valign=top>
  <p align=center>210</p>
  </td>
 </tr>
 <tr>
  <td width=115 valign=top>
  <p>Stainless steel</p>
  </td>
  <td width=72 valign=top>
  <p align=center>10</p>
  </td>
  <td width=72 valign=top>
  <p align=center>13</p>
  </td>
  <td width=84 valign=top>
  <p align=center>21</p>
  </td>
  <td width=84 valign=top>
  <p align=center>28</p>
  </td>
  <td width=60 valign=top>
  <p align=center>47</p>
  </td>
  <td width=96 valign=top>
  <p align=center>21</p>
  </td>
 </tr>
</table>

  </center>
</div>

<script>comment();</script><p align="center">Table 1b. The final result of the median polish for
the corrosion rates (mg/cm<sup>2</sup>) over the study period by metal type and
location</p>

<div align="center">
  <center>

<table border=1 cellspacing=0 cellpadding=0 width=595 style="border-collapse: collapse" bordercolor="#111111">
 <tr>
  <td width=127 valign=top>
  <p>&nbsp;</p>
  </td>
  <td width=72 valign=top>
  <p align=center>Airport</p>
  </td>
  <td width=72 valign=top>
  <p align=center>Al-Fahl</p>
  </td>
  <td width=96 valign=top>
  <p align=center>Al-Khod</p>
  </td>
  <td width=84 valign=top>
  <p align=center>Al-Rusail</p>
  </td>
  <td width=60 valign=top>
  <p align=center>Sohar</p>
  </td>
  <td width=84 valign=top>
  <h5>Raw effect</h5>
  </td>
 </tr>
 <tr>
  <td width=127 valign=top>
  <p>Aluminum</p>
  </td>
  <td width=72 valign=top>
  <p align=center>7</p>
  </td>
  <td width=72 valign=top>
  <p align=center>8</p>
  </td>
  <td width=96 valign=top>
  <p align=center>-4</p>
  </td>
  <td width=84 valign=top>
  <p align=center>0</p>
  </td>
  <td width=60 valign=top>
  <p align=center>-11</p>
  </td>
  <td width=84 valign=top>
  <p align=center><b>-22</b></p>
  </td>
 </tr>
 <tr>
  <td width=127 valign=top>
  <p>Brass</p>
  </td>
  <td width=72 valign=top>
  <p align=center>11</p>
  </td>
  <td width=72 valign=top>
  <p align=center>24</p>
  </td>
  <td width=96 valign=top>
  <p align=center>0</p>
  </td>
  <td width=84 valign=top>
  <p align=center>-22</p>
  </td>
  <td width=60 valign=top>
  <p align=center>37</p>
  </td>
  <td width=84 valign=top>
  <p align=center><b>0</b></p>
  </td>
 </tr>
 <tr>
  <td width=127 valign=top>
  <p>Copper</p>
  </td>
  <td width=72 valign=top>
  <p align=center>-11</p>
  </td>
  <td width=72 valign=top>
  <p align=center>-13</p>
  </td>
  <td width=96 valign=top>
  <p align=center>1</p>
  </td>
  <td width=84 valign=top>
  <p align=center>5</p>
  </td>
  <td width=60 valign=top>
  <p align=center>36</p>
  </td>
  <td width=84 valign=top>
  <p align=center><b>105</b></p>
  </td>
 </tr>
 <tr>
  <td width=127 valign=top>
  <p>Epoxy</p>
  </td>
  <td width=72 valign=top>
  <p align=center>11</p>
  </td>
  <td width=72 valign=top>
  <p align=center>-11</p>
  </td>
  <td width=96 valign=top>
  <p align=center>-30</p>
  </td>
  <td width=84 valign=top>
  <p align=center>1</p>
  </td>
  <td width=60 valign=top>
  <p align=center>-2</p>
  </td>
  <td width=84 valign=top>
  <p align=center><b>-20</b></p>
  </td>
 </tr>
 <tr>
  <td width=127 valign=top>
  <p>Galvanized</p>
  </td>
  <td width=72 valign=top>
  <p align=center>-41</p>
  </td>
  <td width=72 valign=top>
  <p align=center>-46</p>
  </td>
  <td width=96 valign=top>
  <p align=center>24</p>
  </td>
  <td width=84 valign=top>
  <p align=center>-1</p>
  </td>
  <td width=60 valign=top>
  <p align=center>27</p>
  </td>
  <td width=84 valign=top>
  <p align=center><b>79</b></p>
  </td>
 </tr>
 <tr>
  <td width=127 valign=top>
  <p>Mild steel</p>
  </td>
  <td width=72 valign=top>
  <p align=center>-55</p>
  </td>
  <td width=72 valign=top>
  <p align=center>23</p>
  </td>
  <td width=96 valign=top>
  <p align=center>-2</p>
  </td>
  <td width=84 valign=top>
  <p align=center>-1</p>
  </td>
  <td width=60 valign=top>
  <p align=center>-26</p>
  </td>
  <td width=84 valign=top>
  <p align=center><b>147</b></p>
  </td>
 </tr>
 <tr>
  <td width=127 valign=top>
  <p>Stainless steel</p>
  </td>
  <td width=72 valign=top>
  <p align=center>0</p>
  </td>
  <td width=72 valign=top>
  <p align=center>0</p>
  </td>
  <td width=96 valign=top>
  <p align=center>1</p>
  </td>
  <td width=84 valign=top>
  <p align=center>6</p>
  </td>
  <td width=60 valign=top>
  <p align=center>0.0</p>
  </td>
  <td width=84 valign=top>
  <p align=center><b>-42</b></p>
  </td>
 </tr>
 <tr>
  <td width=127 valign=top>
  <p><b>Column effect</b></p>
  </td>
  <td width=72 valign=top>
  <p align=center><b>-11</b></p>
  </td>
  <td width=72 valign=top>
  <p align=center><b>-8</b></p>
  </td>
  <td width=96 valign=top>
  <p align=center><b>1</b></p>
  </td>
  <td width=84 valign=top>
  <p align=center><b>1</b></p>
  </td>
  <td width=60 valign=top>
  <p align=center><b>26</b></p>
  </td>
  <td width=84 valign=top>
  <p align=center><b>63</b></p>
  </td>
 </tr>
</table>

  </center>
</div>

<script>comment();</script><p align="center">Table 2a. The sum of sulphates (ppm)
over the study period by metal type and location</p>

<div align="center">
  <center>

<table border=1 cellspacing=0 cellpadding=0 width=583 style="border-collapse: collapse" bordercolor="#111111">
 <tr>
  <td width=115 valign=top>
  <p>&nbsp;</p>
  </td>
  <td width=72 valign=top>
  <p align=center>Airport</p>
  </td>
  <td width=72 valign=top>
  <p align=center>Al-Fahl</p>
  </td>
  <td width=84 valign=top>
  <p align=center>Al-Khod</p>
  </td>
  <td width=84 valign=top>
  <p align=center>Al-Rusail</p>
  </td>
  <td width=60 valign=top>
  <p align=center>Sohar</p>
  </td>
  <td width=96 valign=top>
  <p align=center><b>Raw Effect </b></p>
  </td>
 </tr>
 <tr>
  <td width=115 valign=top>
  <p>Aluminum</p>
  </td>
  <td width=72 valign=top>
  <p align=center>39</p>
  </td>
  <td width=72 valign=top>
  <p align=center>101</p>
  </td>
  <td width=84 valign=top>
  <p align=center>56</p>
  </td>
  <td width=84 valign=top>
  <p align=center>60</p>
  </td>
  <td width=60 valign=top>
  <p align=center>49</p>
  </td>
  <td width=96 valign=top>
  <p align=center>56</p>
  </td>
 </tr>
 <tr>
  <td width=115 valign=top>
  <p>Brass</p>
  </td>
  <td width=72 valign=top>
  <p align=center>73</p>
  </td>
  <td width=72 valign=top>
  <p align=center>160</p>
  </td>
  <td width=84 valign=top>
  <p align=center>49</p>
  </td>
  <td width=84 valign=top>
  <p align=center>77</p>
  </td>
  <td width=60 valign=top>
  <p align=center>71</p>
  </td>
  <td width=96 valign=top>
  <p align=center>73</p>
  </td>
 </tr>
 <tr>
  <td width=115 valign=top>
  <p>Copper</p>
  </td>
  <td width=72 valign=top>
  <p align=center>105</p>
  </td>
  <td width=72 valign=top>
  <p align=center>227</p>
  </td>
  <td width=84 valign=top>
  <p align=center>74</p>
  </td>
  <td width=84 valign=top>
  <p align=center>82</p>
  </td>
  <td width=60 valign=top>
  <p align=center>88</p>
  </td>
  <td width=96 valign=top>
  <p align=center>88</p>
  </td>
 </tr>
 <tr>
  <td width=115 valign=top>
  <p>Epoxy</p>
  </td>
  <td width=72 valign=top>
  <p align=center>33</p>
  </td>
  <td width=72 valign=top>
  <p align=center>109</p>
  </td>
  <td width=84 valign=top>
  <p align=center>47</p>
  </td>
  <td width=84 valign=top>
  <p align=center>51</p>
  </td>
  <td width=60 valign=top>
  <p align=center>55</p>
  </td>
  <td width=96 valign=top>
  <p align=center>51</p>
  </td>
 </tr>
 <tr>
  <td width=115 valign=top>
  <p>Galvanized</p>
  </td>
  <td width=72 valign=top>
  <p align=center>38</p>
  </td>
  <td width=72 valign=top>
  <p align=center>95</p>
  </td>
  <td width=84 valign=top>
  <p align=center>43</p>
  </td>
  <td width=84 valign=top>
  <p align=center>50</p>
  </td>
  <td width=60 valign=top>
  <p align=center>72</p>
  </td>
  <td width=96 valign=top>
  <p align=center>50</p>
  </td>
 </tr>
 <tr>
  <td width=115 valign=top>
  <p>Mild steel</p>
  </td>
  <td width=72 valign=top>
  <p align=center>238</p>
  </td>
  <td width=72 valign=top>
  <p align=center>511</p>
  </td>
  <td width=84 valign=top>
  <p align=center>98</p>
  </td>
  <td width=84 valign=top>
  <p align=center>171</p>
  </td>
  <td width=60 valign=top>
  <p align=center>190</p>
  </td>
  <td width=96 valign=top>
  <p align=center>190</p>
  </td>
 </tr>
 <tr>
  <td width=115 valign=top>
  <p>Stainless steel</p>
  </td>
  <td width=72 valign=top>
  <p align=center>62</p>
  </td>
  <td width=72 valign=top>
  <p align=center>207</p>
  </td>
  <td width=84 valign=top>
  <p align=center>55</p>
  </td>
  <td width=84 valign=top>
  <p align=center>106</p>
  </td>
  <td width=60 valign=top>
  <p align=center>110</p>
  </td>
  <td width=96 valign=top>
  <p align=center>106</p>
  </td>
 </tr>
</table>

  </center>
</div>

<script>comment();</script><p align="center">Table 2b. The final result of the median polish for
the sulphates (ppm) over the study period by metal
type and location</p>

<div align="center">
  <center>

<table border=1 cellspacing=0 cellpadding=0 width=583 style="border-collapse: collapse" bordercolor="#111111">
 <tr>
  <td width=115 valign=top>
  <p>&nbsp;</p>
  </td>
  <td width=72 valign=top>
  <p align=center>Airport</p>
  </td>
  <td width=72 valign=top>
  <p align=center>Al-Fahl</p>
  </td>
  <td width=84 valign=top>
  <p align=center>Al-Khod</p>
  </td>
  <td width=84 valign=top>
  <p align=center>Al-Rusail</p>
  </td>
  <td width=60 valign=top>
  <p align=center>Sohar</p>
  </td>
  <td width=96 valign=top>
  <h5>Raw Effect </h5>
  </td>
 </tr>
 <tr>
  <td width=115 valign=top>
  <p>Aluminum</p>
  </td>
  <td width=72 valign=top>
  <p align=center>-5</p>
  </td>
  <td width=72 valign=top>
  <p align=center>-42</p>
  </td>
  <td width=84 valign=top>
  <p align=center>14</p>
  </td>
  <td width=84 valign=top>
  <p align=center>4</p>
  </td>
  <td width=60 valign=top>
  <p align=center>-7</p>
  </td>
  <td width=96 valign=top>
  <p align=center><b>-17</b></p>
  </td>
 </tr>
 <tr>
  <td width=115 valign=top>
  <p>Brass</p>
  </td>
  <td width=72 valign=top>
  <p align=center>12</p>
  </td>
  <td width=72 valign=top>
  <p align=center>0</p>
  </td>
  <td width=84 valign=top>
  <p align=center>-10</p>
  </td>
  <td width=84 valign=top>
  <p align=center>4</p>
  </td>
  <td width=60 valign=top>
  <p align=center>-2</p>
  </td>
  <td width=96 valign=top>
  <p align=center><b>0</b></p>
  </td>
 </tr>
 <tr>
  <td width=115 valign=top>
  <p>Copper</p>
  </td>
  <td width=72 valign=top>
  <p align=center>29</p>
  </td>
  <td width=72 valign=top>
  <p align=center>52</p>
  </td>
  <td width=84 valign=top>
  <p align=center>0</p>
  </td>
  <td width=84 valign=top>
  <p align=center>-6</p>
  </td>
  <td width=60 valign=top>
  <p align=center>0</p>
  </td>
  <td width=96 valign=top>
  <p align=center><b>15</b></p>
  </td>
 </tr>
 <tr>
  <td width=115 valign=top>
  <p>Epoxy</p>
  </td>
  <td width=72 valign=top>
  <p align=center>-6</p>
  </td>
  <td width=72 valign=top>
  <p align=center>-29</p>
  </td>
  <td width=84 valign=top>
  <p align=center>10</p>
  </td>
  <td width=84 valign=top>
  <p align=center>0</p>
  </td>
  <td width=60 valign=top>
  <p align=center>4</p>
  </td>
  <td width=96 valign=top>
  <p align=center><b>-22</b></p>
  </td>
 </tr>
 <tr>
  <td width=115 valign=top>
  <p>Galvanized</p>
  </td>
  <td width=72 valign=top>
  <p align=center>0</p>
  </td>
  <td width=72 valign=top>
  <p align=center>-42</p>
  </td>
  <td width=84 valign=top>
  <p align=center>7</p>
  </td>
  <td width=84 valign=top>
  <p align=center>0</p>
  </td>
  <td width=60 valign=top>
  <p align=center>22</p>
  </td>
  <td width=96 valign=top>
  <p align=center><b>-23</b></p>
  </td>
 </tr>
 <tr>
  <td width=115 valign=top>
  <p>Mild steel</p>
  </td>
  <td width=72 valign=top>
  <p align=center>60</p>
  </td>
  <td width=72 valign=top>
  <p align=center>234</p>
  </td>
  <td width=84 valign=top>
  <p align=center>-78</p>
  </td>
  <td width=84 valign=top>
  <p align=center>-19</p>
  </td>
  <td width=60 valign=top>
  <p align=center>0</p>
  </td>
  <td width=96 valign=top>
  <p align=center><b>117</b></p>
  </td>
 </tr>
 <tr>
  <td width=115 valign=top>
  <p>Stainless steel</p>
  </td>
  <td width=72 valign=top>
  <p align=center>-32</p>
  </td>
  <td width=72 valign=top>
  <p align=center>14</p>
  </td>
  <td width=84 valign=top>
  <p align=center>-37</p>
  </td>
  <td width=84 valign=top>
  <p align=center>0</p>
  </td>
  <td width=60 valign=top>
  <p align=center>4</p>
  </td>
  <td width=96 valign=top>
  <p align=center><b>33</b></p>
  </td>
 </tr>
 <tr>
  <td width=115 valign=top>
  <p><b>Column effect</b></p>
  </td>
  <td width=72 valign=top>
  <p align=center><b>-12</b></p>
  </td>
  <td width=72 valign=top>
  <p align=center><b>87</b></p>
  </td>
  <td width=84 valign=top>
  <p align=center><b>-14</b></p>
  </td>
  <td width=84 valign=top>
  <p align=center><b>0</b></p>
  </td>
  <td width=60 valign=top>
  <p align=center><b>0</b></p>
  </td>
  <td width=96 valign=top>
  <p align=center><b>73</b></p>
  </td>
 </tr>
</table>

  </center>
</div>

<script>comment();</script><p align="center">Table 3a. The sum of chlorides (ppm)
over the study period by metal type and location </p>

<div align="center">
  <center>

<table border=1 cellspacing=0 cellpadding=0 width=583 style="border-collapse: collapse" bordercolor="#111111">
 <tr>
  <td width=115 valign=top>
  <p>&nbsp;</p>
  </td>
  <td width=72 valign=top>
  <p align=center>Airport</p>
  </td>
  <td width=72 valign=top>
  <p align=center>Al-Fahl</p>
  </td>
  <td width=78 valign=top>
  <p align=center>Al-Khod</p>
  </td>
  <td width=90 valign=top>
  <p align=center>Al-Rusail</p>
  </td>
  <td width=60 valign=top>
  <p align=center>Sohar</p>
  </td>
  <td width=96 valign=top>
  <p align=center><b>Raw effect </b></p>
  </td>
 </tr>
 <tr>
  <td width=115 valign=top>
  <p>Aluminum</p>
  </td>
  <td width=72 valign=top>
  <p align=center>97</p>
  </td>
  <td width=72 valign=top>
  <p align=center>88</p>
  </td>
  <td width=78 valign=top>
  <p align=center>91</p>
  </td>
  <td width=90 valign=top>
  <p align=center>87</p>
  </td>
  <td width=60 valign=top>
  <p align=center>105</p>
  </td>
  <td width=96 valign=top>
  <p align=center>91</p>
  </td>
 </tr>
 <tr>
  <td width=115 valign=top>
  <p>Brass</p>
  </td>
  <td width=72 valign=top>
  <p align=center>80</p>
  </td>
  <td width=72 valign=top>
  <p align=center>83</p>
  </td>
  <td width=78 valign=top>
  <p align=center>81</p>
  </td>
  <td width=90 valign=top>
  <p align=center>88</p>
  </td>
  <td width=60 valign=top>
  <p align=center>90</p>
  </td>
  <td width=96 valign=top>
  <p align=center>83</p>
  </td>
 </tr>
 <tr>
  <td width=115 valign=top>
  <p>Copper</p>
  </td>
  <td width=72 valign=top>
  <p align=center>80</p>
  </td>
  <td width=72 valign=top>
  <p align=center>77</p>
  </td>
  <td width=78 valign=top>
  <p align=center>78</p>
  </td>
  <td width=90 valign=top>
  <p align=center>80</p>
  </td>
  <td width=60 valign=top>
  <p align=center>90</p>
  </td>
  <td width=96 valign=top>
  <p align=center>80</p>
  </td>
 </tr>
 <tr>
  <td width=115 valign=top>
  <p>Epoxy</p>
  </td>
  <td width=72 valign=top>
  <p align=center>93</p>
  </td>
  <td width=72 valign=top>
  <p align=center>87</p>
  </td>
  <td width=78 valign=top>
  <p align=center>79</p>
  </td>
  <td width=90 valign=top>
  <p align=center>84</p>
  </td>
  <td width=60 valign=top>
  <p align=center>101</p>
  </td>
  <td width=96 valign=top>
  <p align=center>87</p>
  </td>
 </tr>
 <tr>
  <td width=115 valign=top>
  <p>Galvanized</p>
  </td>
  <td width=72 valign=top>
  <p align=center>91</p>
  </td>
  <td width=72 valign=top>
  <p align=center>77</p>
  </td>
  <td width=78 valign=top>
  <p align=center>82</p>
  </td>
  <td width=90 valign=top>
  <p align=center>78</p>
  </td>
  <td width=60 valign=top>
  <p align=center>88</p>
  </td>
  <td width=96 valign=top>
  <p align=center>82</p>
  </td>
 </tr>
 <tr>
  <td width=115 valign=top>
  <p>Mild steel</p>
  </td>
  <td width=72 valign=top>
  <p align=center>99</p>
  </td>
  <td width=72 valign=top>
  <p align=center>87</p>
  </td>
  <td width=78 valign=top>
  <p align=center>81</p>
  </td>
  <td width=90 valign=top>
  <p align=center>81</p>
  </td>
  <td width=60 valign=top>
  <p align=center>87</p>
  </td>
  <td width=96 valign=top>
  <p align=center>87</p>
  </td>
 </tr>
 <tr>
  <td width=115 valign=top>
  <p>Stainless steel</p>
  </td>
  <td width=72 valign=top>
  <p align=center>75</p>
  </td>
  <td width=72 valign=top>
  <p align=center>84</p>
  </td>
  <td width=78 valign=top>
  <p align=center>81</p>
  </td>
  <td width=90 valign=top>
  <p align=center>81</p>
  </td>
  <td width=60 valign=top>
  <p align=center>89</p>
  </td>
  <td width=96 valign=top>
  <p align=center>81</p>
  </td>
 </tr>
</table>

  </center>
</div>

<script>comment();</script><p align="center">Table 3b. The final result of the median polish for
the chlorides (ppm) over the study period by metal
type and location</p>

<div align="center">
  <center>

<table border=1 cellspacing=0 cellpadding=0 width=583 style="border-collapse: collapse" bordercolor="#111111">
 <tr>
  <td width=123 valign=top>
  <p>&nbsp;</p>
  </td>
  <td width=77 valign=top>
  <p align=center>Airport</p>
  </td>
  <td width=72 valign=top>
  <p align=center>Al-Fahl</p>
  </td>
  <td width=84 valign=top>
  <p align=center>Al-Khod</p>
  </td>
  <td width=84 valign=top>
  <p align=center>Al-Rusail</p>
  </td>
  <td width=60 valign=top>
  <p align=center>Sohar</p>
  </td>
  <td width=84 valign=top>
  <h5>Raw effect </h5>
  </td>
 </tr>
 <tr>
  <td width=123 valign=top>
  <p>Aluminum</p>
  </td>
  <td width=77 valign=top>
  <p align=center>0</p>
  </td>
  <td width=72 valign=top>
  <p align=center>-3</p>
  </td>
  <td width=84 valign=top>
  <p align=center>0</p>
  </td>
  <td width=84 valign=top>
  <p align=center>-1</p>
  </td>
  <td width=60 valign=top>
  <p align=center>6</p>
  </td>
  <td width=84 valign=top>
  <p align=center><b>8</b></p>
  </td>
 </tr>
 <tr>
  <td width=123 valign=top>
  <p>Brass</p>
  </td>
  <td width=77 valign=top>
  <p align=center>-9</p>
  </td>
  <td width=72 valign=top>
  <p align=center>0</p>
  </td>
  <td width=84 valign=top>
  <p align=center>2</p>
  </td>
  <td width=84 valign=top>
  <p align=center>8</p>
  </td>
  <td width=60 valign=top>
  <p align=center>-1</p>
  </td>
  <td width=84 valign=top>
  <p align=center><b>0</b></p>
  </td>
 </tr>
 <tr>
  <td width=123 valign=top>
  <p>Copper</p>
  </td>
  <td width=77 valign=top>
  <p align=center>-4</p>
  </td>
  <td width=72 valign=top>
  <p align=center>-1</p>
  </td>
  <td width=84 valign=top>
  <p align=center>0</p>
  </td>
  <td width=84 valign=top>
  <p align=center>5</p>
  </td>
  <td width=60 valign=top>
  <p align=center>4</p>
  </td>
  <td width=84 valign=top>
  <p align=center><b>-5</b></p>
  </td>
 </tr>
 <tr>
  <td width=123 valign=top>
  <p>Epoxy</p>
  </td>
  <td width=77 valign=top>
  <p align=center>0</p>
  </td>
  <td width=72 valign=top>
  <p align=center>0</p>
  </td>
  <td width=84 valign=top>
  <p align=center>-8</p>
  </td>
  <td width=84 valign=top>
  <p align=center>0</p>
  </td>
  <td width=60 valign=top>
  <p align=center>6</p>
  </td>
  <td width=84 valign=top>
  <p align=center><b>4</b></p>
  </td>
 </tr>
 <tr>
  <td width=123 valign=top>
  <p>Galvanized</p>
  </td>
  <td width=77 valign=top>
  <p align=center>4</p>
  </td>
  <td width=72 valign=top>
  <p align=center>-4</p>
  </td>
  <td width=84 valign=top>
  <p align=center>1</p>
  </td>
  <td width=84 valign=top>
  <p align=center>0</p>
  </td>
  <td width=60 valign=top>
  <p align=center>-1</p>
  </td>
  <td width=84 valign=top>
  <p align=center><b>-2</b></p>
  </td>
 </tr>
 <tr>
  <td width=123 valign=top>
  <p>Mild steel</p>
  </td>
  <td width=77 valign=top>
  <p align=center>9</p>
  </td>
  <td width=72 valign=top>
  <p align=center>3</p>
  </td>
  <td width=84 valign=top>
  <p align=center>-3</p>
  </td>
  <td width=84 valign=top>
  <p align=center>0</p>
  </td>
  <td width=60 valign=top>
  <p align=center>-5</p>
  </td>
  <td width=84 valign=top>
  <p align=center><b>1</b></p>
  </td>
 </tr>
 <tr>
  <td width=123 valign=top>
  <p>Stainless steel</p>
  </td>
  <td width=77 valign=top>
  <p align=center>-12</p>
  </td>
  <td width=72 valign=top>
  <p align=center>3</p>
  </td>
  <td width=84 valign=top>
  <p align=center>0</p>
  </td>
  <td width=84 valign=top>
  <p align=center>3</p>
  </td>
  <td width=60 valign=top>
  <p align=center>0</p>
  </td>
  <td width=84 valign=top>
  <p align=center><b>-1</b></p>
  </td>
 </tr>
 <tr>
  <td width=123 valign=top>
  <p><b>Column effect</b></p>
  </td>
  <td width=77 valign=top>
  <p align=center><b>6</b></p>
  </td>
  <td width=72 valign=top>
  <p align=center><b>0</b></p>
  </td>
  <td width=84 valign=top>
  <p align=center><b>0</b></p>
  </td>
  <td width=84 valign=top>
  <p align=center><b>-3</b></p>
  </td>
  <td width=60 valign=top>
  <p align=center><b>8</b></p>
  </td>
  <td width=84 valign=top>
  <p align=center><b>83</b></p>
  </td>
 </tr>
</table>

  </center>
</div>

<script>comment();</script><p align="center">Table 4a. The sum of carbonates (ppm) over the study period by metal type and location </p>

<div align="center">
  <center>

<table border=1 cellspacing=0 cellpadding=0 width=583 style="border-collapse: collapse" bordercolor="#111111">
 <tr>
  <td width=115 valign=top>
  <p>&nbsp;</p>
  </td>
  <td width=72 valign=top>
  <p align=center>Airport</p>
  </td>
  <td width=72 valign=top>
  <p align=center>Al-Fahl</p>
  </td>
  <td width=84 valign=top>
  <p align=center>Al-Khod</p>
  </td>
  <td width=84 valign=top>
  <p align=center>Al-Rusail</p>
  </td>
  <td width=60 valign=top>
  <p align=center>Sohar</p>
  </td>
  <td width=96 valign=top>
  <p align=center><b>Raw effect </b></p>
  </td>
 </tr>
 <tr>
  <td width=115 valign=top>
  <p>Aluminum</p>
  </td>
  <td width=72 valign=top>
  <p align=center>136</p>
  </td>
  <td width=72 valign=top>
  <p align=center>126</p>
  </td>
  <td width=84 valign=top>
  <p align=center>138</p>
  </td>
  <td width=84 valign=top>
  <p align=center>141</p>
  </td>
  <td width=60 valign=top>
  <p align=center>145</p>
  </td>
  <td width=96 valign=top>
  <p align=center>138</p>
  </td>
 </tr>
 <tr>
  <td width=115 valign=top>
  <p>Brass</p>
  </td>
  <td width=72 valign=top>
  <p align=center>134</p>
  </td>
  <td width=72 valign=top>
  <p align=center>106</p>
  </td>
  <td width=84 valign=top>
  <p align=center>126</p>
  </td>
  <td width=84 valign=top>
  <p align=center>145</p>
  </td>
  <td width=60 valign=top>
  <p align=center>143</p>
  </td>
  <td width=96 valign=top>
  <p align=center>134</p>
  </td>
 </tr>
 <tr>
  <td width=115 valign=top>
  <p>Copper</p>
  </td>
  <td width=72 valign=top>
  <p align=center>129</p>
  </td>
  <td width=72 valign=top>
  <p align=center>105</p>
  </td>
  <td width=84 valign=top>
  <p align=center>122</p>
  </td>
  <td width=84 valign=top>
  <p align=center>138</p>
  </td>
  <td width=60 valign=top>
  <p align=center>142</p>
  </td>
  <td width=96 valign=top>
  <p align=center>129</p>
  </td>
 </tr>
 <tr>
  <td width=115 valign=top>
  <p>Epoxy</p>
  </td>
  <td width=72 valign=top>
  <p align=center>147</p>
  </td>
  <td width=72 valign=top>
  <p align=center>140</p>
  </td>
  <td width=84 valign=top>
  <p align=center>136</p>
  </td>
  <td width=84 valign=top>
  <p align=center>162</p>
  </td>
  <td width=60 valign=top>
  <p align=center>134</p>
  </td>
  <td width=96 valign=top>
  <p align=center>140</p>
  </td>
 </tr>
 <tr>
  <td width=115 valign=top>
  <p>Galvanized</p>
  </td>
  <td width=72 valign=top>
  <p align=center>155</p>
  </td>
  <td width=72 valign=top>
  <p align=center>139</p>
  </td>
  <td width=84 valign=top>
  <p align=center>100</p>
  </td>
  <td width=84 valign=top>
  <p align=center>158</p>
  </td>
  <td width=60 valign=top>
  <p align=center>142</p>
  </td>
  <td width=96 valign=top>
  <p align=center>142</p>
  </td>
 </tr>
 <tr>
  <td width=115 valign=top>
  <p>Mild steel</p>
  </td>
  <td width=72 valign=top>
  <p align=center>135</p>
  </td>
  <td width=72 valign=top>
  <p align=center>141</p>
  </td>
  <td width=84 valign=top>
  <p align=center>130</p>
  </td>
  <td width=84 valign=top>
  <p align=center>138</p>
  </td>
  <td width=60 valign=top>
  <p align=center>139</p>
  </td>
  <td width=96 valign=top>
  <p align=center>138</p>
  </td>
 </tr>
 <tr>
  <td width=115 valign=top>
  <p>Stainless steel</p>
  </td>
  <td width=72 valign=top>
  <p align=center>130</p>
  </td>
  <td width=72 valign=top>
  <p align=center>119</p>
  </td>
  <td width=84 valign=top>
  <p align=center>119</p>
  </td>
  <td width=84 valign=top>
  <p align=center>139</p>
  </td>
  <td width=60 valign=top>
  <p align=center>131</p>
  </td>
  <td width=96 valign=top>
  <p align=center>130</p>
  </td>
 </tr>
</table>

  </center>
</div>

<script>comment();</script><p align="center">Table 4b. The final result of the median polish for
the carbonates (ppm) over the study period by metal
type and location</p>

<div align="center">
  <center>

<table border=1 cellspacing=0 cellpadding=0 width=583 style="border-collapse: collapse" bordercolor="#111111">
 <tr>
  <td width=127 valign=top>
  <p>&nbsp;</p>
  </td>
  <td width=72 valign=top>
  <p align=center>Airport</p>
  </td>
  <td width=72 valign=top>
  <p align=center>Al-Fahl</p>
  </td>
  <td width=84 valign=top>
  <p align=center>Al-Khod</p>
  </td>
  <td width=84 valign=top>
  <p align=center>Al-Rusail</p>
  </td>
  <td width=60 valign=top>
  <p align=center>Sohar</p>
  </td>
  <td width=84 valign=top>
  <h5>Raw effect </h5>
  </td>
 </tr>
 <tr>
  <td width=127 valign=top>
  <p>Aluminum</p>
  </td>
  <td width=72 valign=top>
  <p align=center>-1</p>
  </td>
  <td width=72 valign=top>
  <p align=center>0</p>
  </td>
  <td width=84 valign=top>
  <p align=center>9</p>
  </td>
  <td width=84 valign=top>
  <p align=center>-5</p>
  </td>
  <td width=60 valign=top>
  <p align=center>7</p>
  </td>
  <td width=84 valign=top>
  <p align=center><b>-1</b></p>
  </td>
 </tr>
 <tr>
  <td width=127 valign=top>
  <p>Brass</p>
  </td>
  <td width=72 valign=top>
  <p align=center>0</p>
  </td>
  <td width=72 valign=top>
  <p align=center>-17</p>
  </td>
  <td width=84 valign=top>
  <p align=center>0</p>
  </td>
  <td width=84 valign=top>
  <p align=center>2</p>
  </td>
  <td width=60 valign=top>
  <p align=center>8</p>
  </td>
  <td width=84 valign=top>
  <p align=center><b>-4</b></p>
  </td>
 </tr>
 <tr>
  <td width=127 valign=top>
  <p>Copper</p>
  </td>
  <td width=72 valign=top>
  <p align=center>0</p>
  </td>
  <td width=72 valign=top>
  <p align=center>-13</p>
  </td>
  <td width=84 valign=top>
  <p align=center>1</p>
  </td>
  <td width=84 valign=top>
  <p align=center>0</p>
  </td>
  <td width=60 valign=top>
  <p align=center>12</p>
  </td>
  <td width=84 valign=top>
  <p align=center><b>-9</b></p>
  </td>
 </tr>
 <tr>
  <td width=127 valign=top>
  <p>Epoxy</p>
  </td>
  <td width=72 valign=top>
  <p align=center>0</p>
  </td>
  <td width=72 valign=top>
  <p align=center>4</p>
  </td>
  <td width=84 valign=top>
  <p align=center>-3</p>
  </td>
  <td width=84 valign=top>
  <p align=center>6</p>
  </td>
  <td width=60 valign=top>
  <p align=center>-14</p>
  </td>
  <td width=84 valign=top>
  <p align=center><b>9</b></p>
  </td>
 </tr>
 <tr>
  <td width=127 valign=top>
  <p>Galvanized</p>
  </td>
  <td width=72 valign=top>
  <p align=center>6</p>
  </td>
  <td width=72 valign=top>
  <p align=center>1</p>
  </td>
  <td width=84 valign=top>
  <p align=center>-41</p>
  </td>
  <td width=84 valign=top>
  <p align=center>0</p>
  </td>
  <td width=60 valign=top>
  <p align=center>-8</p>
  </td>
  <td width=84 valign=top>
  <p align=center><b>11</b></p>
  </td>
 </tr>
 <tr>
  <td width=127 valign=top>
  <p>Mild steel</p>
  </td>
  <td width=72 valign=top>
  <p align=center>-3</p>
  </td>
  <td width=72 valign=top>
  <p align=center>14</p>
  </td>
  <td width=84 valign=top>
  <p align=center>0</p>
  </td>
  <td width=84 valign=top>
  <p align=center>-9</p>
  </td>
  <td width=60 valign=top>
  <p align=center>0</p>
  </td>
  <td width=84 valign=top>
  <p align=center><b>0</b></p>
  </td>
 </tr>
 <tr>
  <td width=127 valign=top>
  <p>Stainless steel</p>
  </td>
  <td width=72 valign=top>
  <p align=center>0</p>
  </td>
  <td width=72 valign=top>
  <p align=center>0</p>
  </td>
  <td width=84 valign=top>
  <p align=center>-3</p>
  </td>
  <td width=84 valign=top>
  <p align=center>0</p>
  </td>
  <td width=60 valign=top>
  <p align=center>0</p>
  </td>
  <td width=84 valign=top>
  <p align=center><b>-8</b></p>
  </td>
 </tr>
 <tr>
  <td width=127 valign=top>
  <p><b>Column effect</b></p>
  </td>
  <td width=72>
  <p align=center><b>0</b></p>
  </td>
  <td width=72>
  <p align=center><b>-11</b></p>
  </td>
  <td width=84>
  <p align=center><b>-8</b></p>
  </td>
  <td width=84>
  <p align=center><b>9</b></p>
  </td>
  <td width=60>
  <p align=center><b>1</b></p>
  </td>
  <td width=84>
  <p align=center><b>138</b></p>
  </td>
 </tr>
</table>

  </center>
</div>

<script>comment();</script><p align="center">Table 5a. The sum of nitrates (ppm)
over the period of study by metal type and location </p>

<div align="center">
  <center>

<table border=1 cellspacing=0 cellpadding=0 width=583 style="border-collapse: collapse" bordercolor="#111111">
 <tr>
  <td width=123 valign=top>
  <p>&nbsp;</p>
  </td>
  <td width=65 valign=top>
  <p align=center>Airport</p>
  </td>
  <td width=72 valign=top>
  <p align=center>Al-Fahl</p>
  </td>
  <td width=79 valign=top>
  <p align=center>Al-Khod</p>
  </td>
  <td width=89 valign=top>
  <p align=center>Al-Rusail</p>
  </td>
  <td width=60 valign=top>
  <p align=center>Sohar</p>
  </td>
  <td width=96 valign=top>
  <p align=center><b>Raw Effect </b></p>
  </td>
 </tr>
 <tr>
  <td width=123 valign=top>
  <p>Aluminum</p>
  </td>
  <td width=65 valign=top>
  <p align=center>32</p>
  </td>
  <td width=72 valign=top>
  <p align=center>30</p>
  </td>
  <td width=79 valign=top>
  <p align=center>31</p>
  </td>
  <td width=89 valign=top>
  <p align=center>32</p>
  </td>
  <td width=60 valign=top>
  <p align=center>44</p>
  </td>
  <td width=96 valign=top>
  <p align=center>32</p>
  </td>
 </tr>
 <tr>
  <td width=123 valign=top>
  <p>Brass</p>
  </td>
  <td width=65 valign=top>
  <p align=center>36</p>
  </td>
  <td width=72 valign=top>
  <p align=center>36</p>
  </td>
  <td width=79 valign=top>
  <p align=center>36</p>
  </td>
  <td width=89 valign=top>
  <p align=center>41</p>
  </td>
  <td width=60 valign=top>
  <p align=center>47</p>
  </td>
  <td width=96 valign=top>
  <p align=center>36</p>
  </td>
 </tr>
 <tr>
  <td width=123 valign=top>
  <p>Copper</p>
  </td>
  <td width=65 valign=top>
  <p align=center>49</p>
  </td>
  <td width=72 valign=top>
  <p align=center>50</p>
  </td>
  <td width=79 valign=top>
  <p align=center>61</p>
  </td>
  <td width=89 valign=top>
  <p align=center>45</p>
  </td>
  <td width=60 valign=top>
  <p align=center>55</p>
  </td>
  <td width=96 valign=top>
  <p align=center>50</p>
  </td>
 </tr>
 <tr>
  <td width=123 valign=top>
  <p>Epoxy</p>
  </td>
  <td width=65 valign=top>
  <p align=center>30</p>
  </td>
  <td width=72 valign=top>
  <p align=center>35</p>
  </td>
  <td width=79 valign=top>
  <p align=center>31</p>
  </td>
  <td width=89 valign=top>
  <p align=center>33</p>
  </td>
  <td width=60 valign=top>
  <p align=center>37</p>
  </td>
  <td width=96 valign=top>
  <p align=center>33</p>
  </td>
 </tr>
 <tr>
  <td width=123 valign=top>
  <p>Galvanized</p>
  </td>
  <td width=65 valign=top>
  <p align=center>28</p>
  </td>
  <td width=72 valign=top>
  <p align=center>28</p>
  </td>
  <td width=79 valign=top>
  <p align=center>30</p>
  </td>
  <td width=89 valign=top>
  <p align=center>30</p>
  </td>
  <td width=60 valign=top>
  <p align=center>35</p>
  </td>
  <td width=96 valign=top>
  <p align=center>30</p>
  </td>
 </tr>
 <tr>
  <td width=123 valign=top>
  <p>Mild steel</p>
  </td>
  <td width=65 valign=top>
  <p align=center>117</p>
  </td>
  <td width=72 valign=top>
  <p align=center>61</p>
  </td>
  <td width=79 valign=top>
  <p align=center>93</p>
  </td>
  <td width=89 valign=top>
  <p align=center>82</p>
  </td>
  <td width=60 valign=top>
  <p align=center>72</p>
  </td>
  <td width=96 valign=top>
  <p align=center>82</p>
  </td>
 </tr>
 <tr>
  <td width=123 valign=top>
  <p>Stainless steel</p>
  </td>
  <td width=65 valign=top>
  <p align=center>29</p>
  </td>
  <td width=72 valign=top>
  <p align=center>31</p>
  </td>
  <td width=79 valign=top>
  <p align=center>36</p>
  </td>
  <td width=89 valign=top>
  <p align=center>28</p>
  </td>
  <td width=60 valign=top>
  <p align=center>37</p>
  </td>
  <td width=96 valign=top>
  <p align=center>31</p>
  </td>
 </tr>
</table>

  </center>
</div>

<script>comment();</script><p align="center">Table 5b. The final result of the median polish for
the nitrates (ppm) over the study period by metal
type and location</p>

<div align="center">
  <center>

<table border=1 cellspacing=0 cellpadding=0 width=595 style="border-collapse: collapse" bordercolor="#111111">
 <tr>
  <td width=127 valign=top>
  <p>&nbsp;</p>
  </td>
  <td width=72 valign=top>
  <p align=center>Airport</p>
  </td>
  <td width=72 valign=top>
  <p align=center>Al-Fahl</p>
  </td>
  <td width=84 valign=top>
  <p align=center>Al-Khod</p>
  </td>
  <td width=84 valign=top>
  <p align=center>Al-Rusail</p>
  </td>
  <td width=60 valign=top>
  <p align=center>Sohar</p>
  </td>
  <td width=96 valign=top>
  <h5>Raw Effect </h5>
  </td>
 </tr>
 <tr>
  <td width=127 valign=top>
  <p>Aluminum</p>
  </td>
  <td width=72 valign=top>
  <p align=center>1</p>
  </td>
  <td width=72 valign=top>
  <p align=center>-2</p>
  </td>
  <td width=84 valign=top>
  <p align=center>0</p>
  </td>
  <td width=84 valign=top>
  <p align=center>0</p>
  </td>
  <td width=60 valign=top>
  <p align=center>7</p>
  </td>
  <td width=96 valign=top>
  <p align=center><b>-1</b></p>
  </td>
 </tr>
 <tr>
  <td width=127 valign=top>
  <p>Brass</p>
  </td>
  <td width=72 valign=top>
  <p align=center>1</p>
  </td>
  <td width=72 valign=top>
  <p align=center>0</p>
  </td>
  <td width=84 valign=top>
  <p align=center>1</p>
  </td>
  <td width=84 valign=top>
  <p align=center>5</p>
  </td>
  <td width=60 valign=top>
  <p align=center>6</p>
  </td>
  <td width=96 valign=top>
  <p align=center><b>3</b></p>
  </td>
 </tr>
 <tr>
  <td width=127 valign=top>
  <p>Copper</p>
  </td>
  <td width=72 valign=top>
  <p align=center>0</p>
  </td>
  <td width=72 valign=top>
  <p align=center>0</p>
  </td>
  <td width=84 valign=top>
  <p align=center>12</p>
  </td>
  <td width=84 valign=top>
  <p align=center>-5</p>
  </td>
  <td width=60 valign=top>
  <p align=center>0</p>
  </td>
  <td width=96 valign=top>
  <p align=center><b>17</b></p>
  </td>
 </tr>
 <tr>
  <td width=127 valign=top>
  <p>Epoxy</p>
  </td>
  <td width=72 valign=top>
  <p align=center>-2</p>
  </td>
  <td width=72 valign=top>
  <p align=center>2</p>
  </td>
  <td width=84 valign=top>
  <p align=center>-1</p>
  </td>
  <td width=84 valign=top>
  <p align=center>0</p>
  </td>
  <td width=60 valign=top>
  <p align=center>-1</p>
  </td>
  <td width=96 valign=top>
  <p align=center><b>0</b></p>
  </td>
 </tr>
 <tr>
  <td width=127 valign=top>
  <p>Galvanized</p>
  </td>
  <td width=72 valign=top>
  <p align=center>-1</p>
  </td>
  <td width=72 valign=top>
  <p align=center>-2</p>
  </td>
  <td width=84 valign=top>
  <p align=center>1</p>
  </td>
  <td width=84 valign=top>
  <p align=center>0</p>
  </td>
  <td width=60 valign=top>
  <p align=center>0</p>
  </td>
  <td width=96 valign=top>
  <p align=center><b>-3</b></p>
  </td>
 </tr>
 <tr>
  <td width=127 valign=top>
  <p>Mild steel</p>
  </td>
  <td width=72 valign=top>
  <p align=center>36</p>
  </td>
  <td width=72 valign=top>
  <p align=center>-21</p>
  </td>
  <td width=84 valign=top>
  <p align=center>12</p>
  </td>
  <td width=84 valign=top>
  <p align=center>0</p>
  </td>
  <td width=60 valign=top>
  <p align=center>-15</p>
  </td>
  <td width=96 valign=top>
  <p align=center><b>49</b></p>
  </td>
 </tr>
 <tr>
  <td width=127 valign=top>
  <p>Stainless steel</p>
  </td>
  <td width=72 valign=top>
  <p align=center>1</p>
  </td>
  <td width=72 valign=top>
  <p align=center>0</p>
  </td>
  <td width=84 valign=top>
  <p align=center>6</p>
  </td>
  <td width=84 valign=top>
  <p align=center>-3</p>
  </td>
  <td width=60 valign=top>
  <p align=center>1</p>
  </td>
  <td width=96 valign=top>
  <p align=center><b>-2</b></p>
  </td>
 </tr>
 <tr>
  <td width=127 valign=top>
  <p><b>Column effect</b></p>
  </td>
  <td width=72 valign=top>
  <p align=center><b>-1</b></p>
  </td>
  <td width=72 valign=top>
  <p align=center><b>0</b></p>
  </td>
  <td width=84 valign=top>
  <p align=center><b>-1</b></p>
  </td>
  <td width=84 valign=top>
  <p align=center><b>0</b></p>
  </td>
  <td width=60 valign=top>
  <p align=center><b>5</b></p>
  </td>
  <td width=96 valign=top>
  <p align=center><b>33</b></p>
  </td>
 </tr>
</table>

  </center>
</div>

<script>comment();</script><p>There was equally not much difference with regard to the sites. The
corrosion levels at the sites by the Al-Fahl and Al-Khod had the least levels of carbonates, while those from
the industrial site of Al-Rusail had the highest. The
effects by metal types of the amount of chlorides had very little variation,
ranging between �5 and 8 about the common value.&nbsp; </p>

<script>comment();</script><p>Corrosion from aluminum had a slightly high
chlorides level, and the least from copper. The corrosion effects by sites were
also very small, relative to the common value. Due to their locations close to
the sea, Sohar and the Airport area showed slightly
high chlorides level, with Al-Rusail, which is somewhat in the interior, having the least.&nbsp;
The largest departures from the common value were found in sulphates level. The
effects by metal types varied substantially from the common value (73) and
ranged from -23 to 117.&nbsp; The mild steel was the worst affected, especially
at the Al-Fahl site. The least affected metals were aluminum, Epoxy and galvanized steel. Copper and stainless
steel were only moderately affected. Overall, the site at Al-fahl had the highest levels of sulphates corrosion. In the
case of nitrates, substantial differences were found only in the effects of
metal types. Mild steel had the highest difference (at 49 ppm
above the common value of 33 ppm), especially at the
site by the Airport, with copper (17) a distant second. The metals least
corroded by nitrates substance were stainless steel, epoxy, aluminum,
and galvanized steel.</p>

<h4>Fitting regression models to the data</h4>

<script>comment();</script><p>To further determine what relationships exist between the corrosion, the
locations and the times of exposure of the metals, multiple linear regression
models were fitted to the data. The corrosion rates and their chemical components
were fitted separately, and for each metal type, using the locations as
indicator variable, and the time in months as the independent variables. The
months of exposure were split into two variables with the first four months as
one variable and the last four as another. This is because initial examination
of the plots of the data indicated a distinct difference in rates of change for
the two periods of time. </p>

<h4>The corrosion rates</h4>

<script>comment();</script><p>The regression equations for predicting the corrosion rates (mg/cm<sup>2</sup>)
by the type of metal are shown in Table 6.&nbsp; The results for aluminum showed significantly high rate of corrosion in Sohar area compared to the other four locations.&nbsp; With
respect to time, the rate of corrosion increased by 1.23 mg/cm<sup>2</sup> per
month in the first four months, then dropped to 1.19
mg/cm<sup>2</sup> per month during the fifth to the eighth month. Sohar area also recorded very high corrosion for copper
(8.95 mg/cm<sup>2</sup>) and brass (8.10 mg/cm<sup>2</sup>). During the first
four months, the corrosion rates for the two metals increased at the rates of
5.62 mg/cm<sup>2</sup> and 1.18 mg/cm<sup>2</sup> per month, respectively,
indicating the very fast build-up in corrosion rate in copper during these
months, compared to the other metals. No further corrosion appeared to take
place in either brass or copper after the fourth month of exposure, at all
locations.</p>

<script>comment();</script><p align="center">Table 6. The multiple linear regression equations
for the corrosion rate (mg/cm<sup>2</sup>) by type of metal</p>

<div align="center">
  <center>

<table border=1 cellpadding=2 style="border-collapse: collapse" bordercolor="#111111">
 <tr>
  <td nowrap valign=bottom>
  <p>No.</p>
  </td>
  <td valign=top>
  <p align=center>Metal type</p>
  </td>
  <td nowrap valign=bottom>
  <p align=center>Model</p>
  </td>
  <td nowrap>
  <p align=center>R<sup>2</sup></p>
  </td>
 </tr>
 <tr>
  <td nowrap>
  <p align=center>1</p>
  </td>
  <td>
  <p>Aluminum</p>
  </td>
  <td nowrap>
  <p>-0.62 + 2.09 (Sohar) + 1.23 (month14) + 1.19(month58)</p>
  </td>
  <td nowrap>
  <p align=center>0.572</p>
  </td>
 </tr>
 <tr>
  <td nowrap>
  <p align=center>2</p>
  </td>
  <td>
  <p>Brass</p>
  </td>
  <td nowrap>
  <p>0.92 + 8.10 (Sohar) + 1.81 (month14)</p>
  </td>
  <td nowrap>
  <p align=center>0.443</p>
  </td>
 </tr>
 <tr>
  <td nowrap>
  <p align=center>3</p>
  </td>
  <td>
  <p>Copper</p>
  </td>
  <td nowrap>
  <p>-1.22 + 8.95 (Sohar) + 5.62 (month14) </p>
  </td>
  <td nowrap>
  <p align=center>0.611</p>
  </td>
 </tr>
 <tr>
  <td nowrap>
  <p align=center>4</p>
  </td>
  <td>
  <p>Epoxy</p>
  </td>
  <td nowrap>
  <p>1.18 � 2.52 (Al-Fahl) � 4.032 (Al-Khod) + 2.93 (Sohar) + 1.15
  (momth14)</p>
  </td>
  <td nowrap>
  <p align=center>0.535</p>
  </td>
 </tr>
 <tr>
  <td nowrap>
  <p align=center>5</p>
  </td>
  <td>
  <p>Galvanized</p>
  </td>
  <td nowrap>
  <p>4.29 + 9.56 (Al-Khod) + 6.59 (Al-Rusail) + 13.31 (Sohar) + 1.817
  (month14)</p>
  </td>
  <td nowrap>
  <p align=center>0.427</p>
  </td>
 </tr>
 <tr>
  <td nowrap>
  <p align=center>6</p>
  </td>
  <td>
  <p>Mild steel</p>
  </td>
  <td nowrap>
  <p>26.59 � 8.58 (Airport) + 2.87 (month58)</p>
  </td>
  <td nowrap>
  <p align=center>0.277</p>
  </td>
 </tr>
 <tr>
  <td nowrap>
  <p align=center>7</p>
  </td>
  <td>
  <p>Stainless steel</p>
  </td>
  <td nowrap>
  <p>2.23 + 3.70 (Sohar)</p>
  </td>
  <td nowrap>
  <p align=center>0.283</p>
  </td>
 </tr>
</table>

  </center>
</div>

<script>comment();</script><p>The epoxy specimens exposed in Al-Fahl and in Al Khod area showed the least degradation compared to either
Al Rusail or Sohar. The
later contributed about 3 mg/cm<sup>2</sup> of the corrosion rate. The rate of
degradation per month for the first four months was about the same as that of
brass, with no further change with time thereafter. </p>

<script>comment();</script><p>There were marked variations in corrosion rates of galvanized steel by
locations. The specimens of the metal in Sohar area
accumulated a maximum corrosion rate of 13.31 mg/cm<sup>2</sup>, compared to
those either in Al Khod or Al-Rusail,
which were 9.56 mg/cm<sup>2</sup> and 6.<span
dir=RTL>59</span>
mg/cm<sup>2</sup>, respectively.&nbsp; The overall corrosion rate grew by 1.817
mg/cm<sup>2</sup> per month, for the first four months, with no further
increase in the months that followed.</p>

<script>comment();</script><p>Mild steel showed the highest rate of corrosion among the seven metals under
investigation. With the exception of the specimens in the airport area that had
relatively low rates, the average corrosion rate for mild steel appeared to
have risen very quickly to about 26 mg/cm<sup>2</sup> from the start of the
exposure, and then increased at the monthly rate of 2.9 mg/cm<sup>2</sup>
during the fifth to the eighth month. Stainless steel showed the best corrosion
resistance property among all the metals. Its corrosion rate averaged 2.23 mg/cm<sup>2</sup>
for all locations, except for Sohar for which the
average rose to 5.9 mg/cm<sup>2</sup>.&nbsp; There was no discernable effect of
time on the material.</p>

<script>comment();</script><p>Overall, except for mild steel, Sohar industrial
area had the highest degradation impact on the metal specimens, contributing to
corrosion rates ranging from 2.1 mg/cm<sup>2</sup> for aluminum
to a high of 9.0 mg/cm<sup>2</sup> for copper. For most metals the rates
increased monthly for the first four months and remained unchanged by time
thereafter. This could be due to the fact that, after the first few months
build-up, the crusts of the corrosion may coat the metal specimens in such a
way as to reduce their chance of further degradation. The coefficients of
determination �R2� for the regression equations ranged from as low as 0.28 for
mild and stainless steel to 0.61 for copper, indicating much of the variations
in the data are due to some variables not included in the analysis.</p>

<h4>The chemical components of the corrosion</h4>

<script>comment();</script><p>Tables 7 to 10 present the linear regression equations of the amounts of
sulphates (ppm), chloride (ppm),
carbonates (ppm) and nitrates (ppm)
found on the different metals, as functions of locations and times of
degradation. The highest deposit of sulphates, when adjusted for locations and
length of exposure, was that of mild steel (21.8 ppm).
For the other metal specimens, the deposits ranged from 10.9 ppm for copper, to 6.4 ppm for
galvanized steel. The deposits due to locations were entirely from Al-Fahl.&nbsp; Here again, the deposit of sulphates for mild
steel was the highest, at 42.0 ppm. Copper and
stainless were next, with 17.5 ppm and 15.5 ppm, above the other locations, respectively (Table
7).&nbsp;&nbsp; There were drops of about 2.3 ppm per
month for aluminum and epoxy, after the fourth month
of exposure. However, in all cases, the coefficients of determination of the
regression equations were generally low, especially for galvanized steel.</p>

<script>comment();</script><p align="center">Table 7. The multiple linear regression equations
for the sulphates (ppm) by type of metal</p>

<div align="center">
  <center>

<table border=1 style="border-collapse: collapse" bordercolor="#111111">
 <tr>
  <td nowrap valign=bottom>
  <p>No.</p>
  </td>
  <td valign=top>
  <p align=center>Metal type</p>
  </td>
  <td nowrap valign=bottom>
  <p align=center>Model</p>
  </td>
  <td nowrap>
  <p align=center>R<sup>2</sup></p>
  </td>
 </tr>
 <tr>
  <td nowrap>
  <p align=center>1</p>
  </td>
  <td>
  <p>Aluminum</p>
  </td>
  <td nowrap>
  <p>8.06 + 6.25 (Al-Fahl) � 2.25(month58)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
  </td>
  <td nowrap>
  <p align=center>0.207</p>
  </td>
 </tr>
 <tr>
  <td nowrap>
  <p align=center>2</p>
  </td>
  <td>
  <p>Brass</p>
  </td>
  <td nowrap>
  <p>8.46 + 11.49 (Al-Fahl) </p>
  </td>
  <td nowrap>
  <p align=center>0.343</p>
  </td>
 </tr>
 <tr>
  <td nowrap>
  <p align=center>3</p>
  </td>
  <td>
  <p>Copper</p>
  </td>
  <td nowrap>
  <p>10.89 + 17.53 (Al-Fahl) </p>
  </td>
  <td nowrap>
  <p align=center>0.403</p>
  </td>
 </tr>
 <tr>
  <td nowrap>
  <p align=center>4</p>
  </td>
  <td>
  <p>Epoxy</p>
  </td>
  <td nowrap>
  <p>7.51 + 7.86 (Al-Fahl) � 2.32 (month58) </p>
  </td>
  <td nowrap>
  <p align=center>0.254</p>
  </td>
 </tr>
 <tr>
  <td nowrap>
  <p align=center>5</p>
  </td>
  <td>
  <p>Galvanized</p>
  </td>
  <td nowrap>
  <p>6.35 + 5.49 (Al-Fahl) </p>
  </td>
  <td nowrap>
  <p align=center>0.095</p>
  </td>
 </tr>
 <tr>
  <td nowrap>
  <p align=center>6</p>
  </td>
  <td>
  <p>Mild steel</p>
  </td>
  <td nowrap>
  <p>21.79 + 42.02 (Al-Fahl) </p>
  </td>
  <td nowrap>
  <p align=center>0.510</p>
  </td>
 </tr>
 <tr>
  <td nowrap>
  <p align=center>7</p>
  </td>
  <td>
  <p>Stainless steel</p>
  </td>
  <td nowrap>
  <p>10.41 + 15.51 (Al-Fahl)</p>
  </td>
  <td nowrap>
  <p align=center>0.452</p>
  </td>
 </tr>
</table>

  </center>
</div>

<script>comment();</script><p align="center">Table 8. Multiple linear regression equations for
chlorides (ppm) by type of metal (Only metals that
have an equation appear in the table)</p>

<div align="center">
  <center>

<table border=1 cellspacing=0 cellpadding=0 width=541 style="border-collapse: collapse" bordercolor="#111111">
 <tr>
  <td width=49 nowrap valign=bottom>
  <p>No.</p>
  </td>
  <td width=120 valign=top>
  <p align=center>Metal type</p>
  </td>
  <td width=312 nowrap valign=bottom>
  <p align=center>Model</p>
  </td>
  <td width=60 nowrap>
  <p align=center>R<sup>2</sup></p>
  </td>
 </tr>
 <tr>
  <td width=49 nowrap>
  <p align=center>1</p>
  </td>
  <td width=120>
  <p>Epoxy</p>
  </td>
  <td width=312 nowrap>
  <p>10.19 + 1.88 (Sohar) + 0.70 (month58) </p>
  </td>
  <td width=60 nowrap>
  <p align=center>0.273</p>
  </td>
 </tr>
 <tr>
  <td width=49 nowrap>
  <p align=center>2</p>
  </td>
  <td width=120>
  <p>Mild steel</p>
  </td>
  <td width=312 nowrap>
  <p>9.88 + 1.83 (Airport) + 0.82 (month58)</p>
  </td>
  <td width=60 nowrap>
  <p align=center>0.418</p>
  </td>
 </tr>
 <tr>
  <td width=49 nowrap>
  <p align=center>3</p>
  </td>
  <td width=120>
  <p>Stainless steel</p>
  </td>
  <td width=312 nowrap>
  <p>9.78 + 0.67 (Al-Fahl)</p>
  </td>
  <td width=60 nowrap>
  <p align=center>0.159</p>
  </td>
 </tr>
</table>

  </center>
</div>

<script>comment();</script><p align="center">Table 9.&nbsp; Multiple linear regression equations
for carbonates (ppm) by type of metal (Only metals
that have an equation appear in the table)</p>

<div align="center">
  <center>

<table border=1 cellspacing=0 cellpadding=0 width=469 style="border-collapse: collapse" bordercolor="#111111">
 <tr>
  <td width=49 nowrap valign=bottom>
  <p>No.</p>
  </td>
  <td width=108 valign=top>
  <p align=center>Metal type</p>
  </td>
  <td width=204 nowrap valign=bottom>
  <p align=center>Model</p>
  </td>
  <td width=108 nowrap>
  <p align=center>R<sup>2</sup></p>
  </td>
 </tr>
 <tr>
  <td width=49 nowrap>
  <p align=center>1</p>
  </td>
  <td width=108>
  <p>Galvanized</p>
  </td>
  <td width=204 nowrap>
  <p>18.58 � 6.04 (Al-Khodl) </p>
  </td>
  <td width=108 nowrap>
  <p align=center>0.162</p>
  </td>
 </tr>
 <tr>
  <td width=49 nowrap>
  <p align=center>2</p>
  </td>
  <td width=108>
  <p>Mild steel</p>
  </td>
  <td width=204 nowrap>
  <p>22.24 � 1.38 (month14) </p>
  </td>
  <td width=108 nowrap>
  <p align=center>0.125</p>
  </td>
 </tr>
</table>

  </center>
</div>

<script>comment();</script><p align="center">Table 10. Multiple linear regression equations for
nitrates (ppm) by type of metal</p>

<div align="center">
  <center>

<table border=1 style="border-collapse: collapse" bordercolor="#111111">
 <tr>
  <td nowrap valign=bottom>
  <p>No.</p>
  </td>
  <td valign=top>
  <p align=center>Metal type</p>
  </td>
  <td nowrap valign=bottom>
  <p align=center>Model</p>
  </td>
  <td nowrap>
  <p align=center>R<sup>2</sup></p>
  </td>
 </tr>
 <tr>
  <td nowrap>
  <p align=center>1</p>
  </td>
  <td>
  <p>Aluminum</p>
  </td>
  <td nowrap>
  <p>2.33 + 1.61 (Sohar) + 0.31 (month14) + 0.51
  (month58)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </p>
  </td>
  <td nowrap>
  <p align=center>0.639</p>
  </td>
 </tr>
 <tr>
  <td nowrap>
  <p align=center>2</p>
  </td>
  <td>
  <p>Brass</p>
  </td>
  <td nowrap>
  <p>2.92 + 0.60 (Al-Rusail) + 1.36 (Sohar) + 0.31 (month14) + 0.56 (month58)</p>
  </td>
  <td nowrap>
  <p align=center>0.710</p>
  </td>
 </tr>
 <tr>
  <td nowrap>
  <p align=center>3</p>
  </td>
  <td>
  <p>Copper</p>
  </td>
  <td nowrap>
  <p>5.4 + 1.68 (Al-Khod) + 0.87 (Sohar)
  + 0.81 (month58) </p>
  </td>
  <td nowrap>
  <p align=center>0.518</p>
  </td>
 </tr>
 <tr>
  <td nowrap>
  <p align=center>4</p>
  </td>
  <td>
  <p>Epoxy</p>
  </td>
  <td nowrap>
  <p>3.76 + 0.52 (Sohar) + 0.39 (month58) </p>
  </td>
  <td nowrap>
  <p align=center>0.862</p>
  </td>
 </tr>
 <tr>
  <td nowrap>
  <p align=center>5</p>
  </td>
  <td>
  <p>Galvanized</p>
  </td>
  <td nowrap>
  <p>2.76 + 0.77 (Sohar) + 0.38 (month58)</p>
  </td>
  <td nowrap>
  <p align=center>0.678</p>
  </td>
 </tr>
 <tr>
  <td nowrap>
  <p align=center>6</p>
  </td>
  <td>
  <p>Mild steel</p>
  </td>
  <td nowrap>
  <p>12.87 + 5.68 (Airport) + 2.69 (Al-Khod) � 1.05
  (month14) </p>
  </td>
  <td nowrap>
  <p align=center>0.419</p>
  </td>
 </tr>
 <tr>
  <td nowrap>
  <p align=center>7</p>
  </td>
  <td>
  <p>Stainless steel</p>
  </td>
  <td nowrap>
  <p>3.34 + 0.81 (Al-Khod) + 0.97 (Sohar) + 0.48 (month58)</p>
  </td>
  <td nowrap>
  <p align=center>0.517</p>
  </td>
 </tr>
</table>

  </center>
</div>

<script>comment();</script><p>Except for epoxy, mild steel, and to a less extent, stainless steel, there
appeared to be no linear relationship between deposits of
chlorides and either the locations or the length of times of exposure on the
other metals (Table 8).&nbsp; Sohar and airport areas
gave above average deposits of chlorides (ppm) for
epoxy and mild steel specimens, respectively, and only small increase in the
quantities per month, beginning from the fifth month of exposure.&nbsp; The
coefficients of determination were again low especially for stainless
steel.&nbsp; The results for carbonates were similar, indicating no linear
relationship between carbonates deposit and the other variables for all metals,
except for galvanized and mild steel, for which the strengths of the
relationship were negligible (Table 9).&nbsp; The result is indication that the
carbonate deposits were essentially constant, and only slightly higher for
galvanized and mild steel, and in conformation with that found by the median
polish method</p>

<script>comment();</script><p>Strong to moderate relationships was found to exist between the amounts of
nitrate deposits (ppm) and the locations and the
length of time of exposure, for all the seven metals (Table 10). Once again,
mild steel tended to have the highest deposits, especially in the airport and
Al-Khod areas. The levels for Sohar
industrial area were slightly elevated for the other metals. There were also
discernable increases per month of nitrate deposits over the two parts of the
eight months period of exposure. These ranged from about 0.4 ppm to 0.8 ppm.&nbsp; The
coefficient of determination, �R2�, is highest for epoxy coated steel specimens
(0.86) and lowest for mild steel (0.42). </p>

<h3>Summary and Conclusions</h3>

<script>comment();</script><p>The atmospheric corrosion of seven common metals was studied at five
different sites in <st1:country-region><st1:place><st1:country-region><st1:place>Oman</st1:place></st1:country-region></st1:place></st1:country-region>.&nbsp;
The work was undertaken to investigate the corrosive effects on various types
of the metals, of the type of locations, the length of time of exposure, and
the pollutants. The results of the study indicated a wide variability of
corrosion rates among the different metals.&nbsp;&nbsp; Mild steel and copper
were found to be the most corroded of the seven metals, irrespective of the
locations.&nbsp; The most resistant metals to corrosion were stainless steel, aluminum and epoxy, whereas galvanized iron and brass were
found to have moderate corrosion rates.&nbsp; The geographical locations of
test sites had much smaller impact on the rates.&nbsp; However, Sohar industrial area was the most corrosive site, relative
to the other locations.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </p>

<script>comment();</script><p>The study also showed that the corrosion for galvanized steel had the
highest carbonates level, and the least levels were found in copper and
stainless steel.&nbsp; In general, corrosion in both Al-Fahl
and Al-Khod had the least levels of carbonates,
whereas the industrial area of Al-Rusail had the
highest. Overall, carbonates contents of corrosion were the highest for all the
metals compared to those of the other chemical components present.</p>

<script>comment();</script><p>Corrosion from aluminum had slightly high amounts
of chlorides relative to other metals, and the least were from copper.&nbsp;
The results also showed a clear relationship between the amounts of chlorides
and proximity to the coast.&nbsp; Slightly higher concentrations of chlorides
were observed in the Airport and Sohar area which are
close to the sea shore. </p>

<script>comment();</script><p>The atmosphere at Al-fahl appeared to have been
heavily polluted by sulphur compounds. Corrosion of all metals at Al-Fahl contained high amounts of suplates,
especially for mild steel.&nbsp; In the case of nitrates, substantial
differences were found only in the effects of metal types.&nbsp; The metals
least corroded by nitrates were stainless steel, epoxy, aluminum,
and galvanized steel.</p>

<script>comment();</script><p>Further confirmation of these results were obtained by using the multiple
linear regression techniques, this time by including the effect of lengths of
period of exposure as independent variables in addition to location.&nbsp; For
most metals, it was found that the rates of corrosion tended to increase
monthly for the first four months and then remained unchanged thereafter.&nbsp;
However, the coefficients of determination for the regression equations obtained
were generally low.&nbsp;&nbsp; This may be attributed to other unknown
variables that influence corrosion and were not considered in the statistical
treatment.&nbsp; Regression equations, with locations and times of exposure as
independent variables, were also obtained for the four chemical components,
yielding results along the line summarized above.&nbsp; </p>

<script>comment();</script><p>Overall, the results of both analyses indicated that, stainless steel, aluminum and epoxy were the most suitable metals to use in
the locations considered in the study, as they are the least corrosive under
the atmospheric conditions prevailing in those sites.&nbsp; In the case of
copper, it was found that the severity of corrosion in marine atmosphere is
somewhat less than that in industrial atmosphere.&nbsp; The results
for epoxy suggests that it can play an important role in lowering the
corrosion level of mild steel.</p>

<script>comment();</script><p>The results of this study can prove useful in establishing the basis for
future monitoring of locations following, for instance, a program of reduction
in pollutant emissions.&nbsp; Furthermore, planners may use the results in
carrying out major construction projects. Relevant authorities may also find
the results of some use to determine the type of metals in constructing outdoor
structures.</p>

<h3>References</h3>

<p>1. �Atmospheric corrosion studies in two metropolitan areas�, J.B. Upham, <i>Journal of the Air Pollution Control Association</i>,<b>17</b>, 6, pp398-402, 1967.</p>

<p>2. �Effect of acidification on atmospheric corrosion of structural metals in
<st1:place><st1:place>Europe</st1:place></st1:place>�, D. Knotkova,
P. Boschek, K. Kreislova, <i>Water,
Air and Soil Pollution</i>, <b>85</b>, pp2661-2666, 1995.</p>

<p>3. �Direct and indirect air pollution effects on materials including
cultural monuments�, V. Kucera, S. Fitz, <i>Water, Air and Soil Pollution</i>, <b>85</b>,
pp153-165, 1995.</p>

<p>4. �Environmental aspects of atmospheric corrosion�, A.A. Mikhailov, M.N., Suloeva,
E.G.&nbsp; Vasilieva, <i>Water, Air and Soil Pollution</i>, <b>85</b>, pp2673-2678,
1995.</p>

<p>5. �Corrosion and Corrosion Control�, H.H. Uhlig,
R.W. Revie, Third Edition.&nbsp; John Wiley &amp;
Sons, Inc., 1985</p>

<p>6. �The prediction of atmospheric corrosion from meteorological and
pollution parameters- II. long term forecast�, <st1:place><st1:place>S.
 Feliu</st1:place></st1:place>, M.&nbsp; Morcillo, <i>Corrosion Science</i>, <b>34</b>, 3,
pp415-422, 1993.</p>

<p>7. �The prediction of atmospheric corrosion from meteorological and
pollution <st1:place><st2:Sn>parameters-</st2:Sn><st2:Sn>I.</st2:Sn></st1:place>Annual corrosion�, <st1:place>S. Feliu</st1:place>, M. Morcillo, S.&nbsp; Feliu, <i>Corrosion
Science</i>, <b>34</b>, 3, pp403-414, 1993.</p>

<p>8. �Air pollution monitoring system for the residential area around Shuaiba Industrial Area�, P. Zannetti,
Study submitted to Environmental Protection <st1:place><st1:City><st1:place>
<st1:City>Council</st1:City></st1:City>,
 <st1:country-region><st1:country-region>Kuwait</st1:country-region></st1:place></st1:country-region></st1:place>,
1983. </p>

<p>9. �Air Pollution Modelling:&nbsp; Theories, Computational Methods and
Available Software�, P. Zannetti, Van <st1:place><st1:City><st1:place><st1:City>Nostrand Reinhold</st1:City></st1:City>, 
<st1:State><st1:State>New
  York</st1:State></st1:place></st1:State></st1:place>, 1990.</p>

<p>10. �Development of statistical model for prediction of ozone levels in Shuaiba Industrial Area in Kuwait�, S.A. Abdul-Wahab, W. Bouhamra, H. Ettouney, B. Sowerby, B.D. Crittenden, <i>Environmental Science and Pollution Research</i>,
3, pp195-204, 1996.</p>

<p>11. �Time series analysis of the interdependence among air pollutants�, K.J.
Hsu, <i>Atmospheric Environment</i>, <b>26</b>, 4, pp491-503, 1992.</p>

<p>12. �Assessment and prediction of tropospheric
ozone concentration levels using artificial neural networks�, S. A. Abdul-Wahab, S. Al-Alawi, <i>Environmental
Modelling and Software</i>, <b>17</b>, 6, pp563-570, 2002.</p>

<p>13. �Measurement and prediction of ozone levels around a heavily
industrialized area:&nbsp; a neural network approach�, A. Elkamel,
S. A. Abdul-Wahab, W. Bouhamra,
E. Alper, <i>Advances in Environmental Research</i>,
5, pp47-59, 2001.</p>

<p>14. S.F. Mughabghab, T.M. Sullivan, <i>Waste
Management</i>, <b>9</b>, pp239, 1989.</p>

<p>15. F. Kajiyama, Y. Koyama, <i>Corrosion</i>, <b>53</b>,
pp156, 1997.</p>

<p>16. J.L. Devore, R. Peck, Statistics:&nbsp; The Exploration and Analysis of
Data. Third Edition.&nbsp; Brooks/Cole Publishing
Company:&nbsp; <st1:place><st1:City><st1:place><st1:City>London</st1:City></st1:City>,
 <st1:country-region><st1:country-region>England</st1:country-region></st1:place></st1:country-region></st1:place>,
1996.</p>

<p>17. A. Sen, M. Srivastava,
Regression Analysis:&nbsp; Theory, Methods, and Applications,&nbsp;
Sprinnger-Verlag:&nbsp;
<st1:State><st1:place><st1:State><st1:place>New York</st1:place></st1:State></st1:place></st1:State>,
1990.&nbsp; </p>

<p>18. J. Neter, M.H.&nbsp; Kutner,
C.J. Nachtsheim, <st1:place><st1:place>W. Wasserman</st1:place></st1:place>,
Applied Linear Statistical Models, <st1:place><st1:place>Forth</st1:place></st1:place>
Edition, McGraw-Hill:&nbsp; <st1:place><st1:City><st1:place><st1:City>Chicago</st1:City></st1:City>,
 <st1:State><st1:State>IL</st1:State></st1:place></st1:State></st1:place>,
1996.</p>

<p>19. �Effect of height on the marine atmospheric corrosion of steel�, S.S. Sawant, A.B. Wagh, <i>Corrosion
Prevention and Control</i>, June, pp75-77, 1991.</p>

<p>20. �Atmospheric corrosion model for galvanized steel structures�, J.W.
Spence, F.H. Haynie, <i>Corrosion</i>, <b>48</b>, 12,
pp1009-1019, 1992.</p>

<p>21. �Effect of air pollution on atmospheric corrosion of zinc�, J.M. Costa,
M. Vilarrasa, <i>British Corrosion Journal</i>, <b>28</b>,
2, pp117-120, 1993.</p>

<p>22. �Mapping of urban material degradation from available data�, S.E. Haagenrud, J.F. Henriksen, T. Skancke, <i>Water, Air and Soil Pollution</i>, <b>85</b>,
pp2667-2672, 1995.</p>

<p>23. P.F. Velleman, D.C. Hoaglin, Applications, Basics, and Computing of Exploratory
Data Analysis.Duxbury Press, <st1:place><st1:City><st1:place><st1:City>Boston</st1:City></st1:City>, 
<st1:State><st1:State>Massachusetts</st1:State></st1:place></st1:State></st1:place>, 1981.</p>

</div>

</div>

<SCRIPT>footer()</SCRIPT></body>

</html>