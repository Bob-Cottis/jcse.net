<?php 

session_start();

require_once('/home/jcsete5/public_html/jcse.org/jcse/php_inc/jrnl_subs.php');

$logged_in=is_loggedin();

?>

<html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">

<meta name="ProgId" content="FrontPage.Editor.Document">

<meta name="Generator" content="Microsoft FrontPage 6.0">

<title>JCSE Volume 2, Paper 15</title>

<SCRIPT src="/getcomm.php?vol=2&pap=15"></SCRIPT>

<SCRIPT src="/jsinc/jcsesubs.js.php"></SCRIPT>

<SCRIPT>

getcommentmode();</SCRIPT></HEAD><body>

<script>var lgi=<?php if ($logged_in) { echo('true');} else { echo('false');} ?>;</script>

<script src="/jsinc/writeheader.js"></script><?php ggl_ad(); ?>



  <h2>Volume 2 Paper 15</h2>

<script>ifnotmode(3,'<p><b><i>Submitted 13<sup>th</sup> September 1999</i></b></p>')</script>

  <hr>

  <h2>Short Term Testing and Real Time Exposure</h2>

  <p><b>James Maxted</b><br>

  Akzo Nobel Nippon Paint , North Woolwich Road , Silvertown , London . E16 2AP<br>

  <SCRIPT>mailto2('James.Maxted','uk.akzonobel.com');</SCRIPT></p>

<SCRIPT>notify();</SCRIPT><SCRIPT>comment(1)</SCRIPT>  <h3>Abstract</h3>

  <p>Three case studies are used to illustrate the difficulties in determining

  long term corrosion performance and in-service early failure of pre-coated,

  galvanised steel by the use of laboratory accelerated techniques. Variants of

  cyclic exposure tests tend to provide better realism in terms of the mode of

  corrosion, especially at the cut edge of the coated sheet. However, even these

  do not replicate the exact mode of failure, particularly with regard to the

  later stages of cut edge corrosion, namely the corrosion of the steel itself.

  The examples chosen also illustrate the importance of accelerating factors on

  the initiation and propagation stages of cut edge corrosion, arising from

  elements such as building design, orientation, and macro / micro-climates. An

  integrated, corrosion prediction methodology is suggested, combining the

  response data from fundamental tests, from a broad spectrum of accelerated

  tests and from a number of outdoor exposure series. These are then linked

  together in a central model to provide a reliable, predictive guide of

  performance.&nbsp;&nbsp;</p>

  <SCRIPT>comment(2)</SCRIPT><p><b>Keywords:</b> Cut edge corrosion, Coil Coating, Accelerated testing,

  Cyclic corrosion tests, UV exposure, Hot dipped galvanised steel, Chromate

  free primers, Outdoor exposure, Service life prediction.</p>

  <h3>Introduction</h3>

  <SCRIPT>comment(3)</SCRIPT><p>Organically pre-coated metal sheeting is a well established product for the

  construction industry, comprising about 20% of all roof and wall cladding

  areas in the UK and probably more so in mainland Europe [1]. The corrosion

  performance of these coated metals is controlled by the combined effects of a

  galvanic coating, a pretreatment of a controlled metal oxide/ chromic acid

  rinse, and finally by the application of organic coatings. These organic

  coatings themselves perform a number of different functions from the point of

  view of corrosion protection. The primer layer has to be formulated so as to

  maximise adhesion to both the pretreated substrate and the overlying topcoat.

  At the same time this coating also has to function as the vehicle in which to

  carry the inhibitive pigments. Finally, in combination with the topcoat, the

  coating system functions as an ionic barrier coating (Figure 1).</p>

  <SCRIPT>comment(4)</SCRIPT><p>A recent survey of UK installations [2,3] suggested that failures of such

  materials within their product lifetimes probably amount to no more than 0.25&#150;0.5%

  of the total area usage of such precoated, materials in the UK. That said,

  more than 75% of these failures were linked to corrosion problems and

  specifically those related to critical areas such as the exposed cut edges of

  sheets in roofing and side cladding situations shown in Figure 2.</p>

  <SCRIPT>comment(5)</SCRIPT><p>The issue that is of most concern to the coating&#146;s formulator and user is

  that of trying to understand and model such corrosion processes. In many cases

  the type of failure will not have been predicted in the development and

  quality checks that the same organic coatings were subjected to in the

  laboratory.</p>

  <SCRIPT>comment(6)</SCRIPT><p>Another important concern to be addressed is that of predicting the service

  life of coatings, particularly in environments where there is no exposure

  history of the system. The coatings and painted sheets are often supplied to

  the end user with a guaranty of the time to first maintenance [4]. Similarly,

  international performance standards are also calling for a minimum level of

  performance [5] and so some means of determining the coated system&#146;s

  performance over the broadest range of environmental stresses has to be

  established. Again neither the traditional test methods nor a limited range of

  severe, natural exposures can be anything other than an approximation of

  performance.</p>

  <SCRIPT>comment(7)</SCRIPT><p>A further issue to face the coating&#146;s formulator is that of choosing

  suitable techniques to use in product development. New demands in the coil

  industry mean the development of more environmentally compliant coatings for

  the future [6]. This in turn means a move away from traditional pretreatments

  based on chromic acid, away from primers containing&nbsp; hexavalent chromate

  and from thick film, barrier coatings based on polyvinylchloride, all of which

  have been the mainstay for corrosion protection for so long. To avoid

  erroneous and untimely conclusions from unreliable tests being made, a new

  approach to performance assessment has had to be developed alongside the

  development of the formulations themselves.</p>

  <SCRIPT>comment(8)</SCRIPT><p>Several examples are used in this paper to illustrate these issues. The

  focus is placed upon the performance of zinc galvanised steel at the critical

  area of sheet cut edge, concentrating on the mode, rather than mechanism of

  corrosion in the field compared to that generated by accelerated tests.</p>

  <h3>Case Study 1. Agricultural Building Roof, North West England.</h3>

  <h4>Observation of Corrosion</h4>

  <SCRIPT>comment(9)</SCRIPT><p>This building was erected in 1988 on the north west coastal area of the UK

  and by 1993 cut edge corrosion was observed at the gutter drip edge of the

  roof sheeting on the westerly facing pitch of the roof (Figure 3). This side

  of the roof faced towards the Morecambe Bay estuary, about 20 metres away. The

  other side of the roof showed no such signs of deterioration (Figure 4).</p>

  <SCRIPT>comment(10)</SCRIPT><p>The edge defect comprised peel back of the organic coating to a maximum of

  7mm up the sheet. On the surface of the exposed substrate both zinc and steel

  corrosion could be observed. The zinc corrosion product was seen as a light

  deposition in a tidemark fashion. At the very edge and, in some cases

  extending up to 4 mm, the zinc anode had been totally consumed and steel

  corrosion was occurring.</p>

  <SCRIPT>comment(11)</SCRIPT><p>The first response was to review the results of the same coated product on

  other exposure sites and accelerated tests. In short could this type of

  failure have been predicted?</p>

  <SCRIPT>comment(12)</SCRIPT><p>Saltspray performance, conducted according to ASTM B117 &#150; 90 (Figure 5a),

  showed only slight edge corrosion after 1000 hours of continuous testing. At

  the exposed cut edge there was no visible peel back of the coating, rather

  only very slight blistering (&lt;2/2 according to ISO 4628-2 82) The only

  other evidence of corrosion was that of dense, compact, white zinc corrosion

  product accumulated on top of, rather than underneath the coating. Where

  blisters could be removed, a slightly yellow liquid was released and the

  substrate underneath found to be a dull metallic colour with little or no

  visible, white zinc corrosion products. This is similar to that reported by

  others [7,8]&nbsp;</p>

  <SCRIPT>comment(13)</SCRIPT><p>Like saltspray testing, Prohesion<sup>�</sup> cyclic testing (conducted

  according to ASTM G85-94), resulted in little corrosion at 1000 hours of total

  testing (Figure 5b). However the cyclic testing conditions resulted in primer

  edge peel and lift rather than blistering at the exposed cut edge. There was

  also some build-up of solid corrosion product under the coating. This was

  beginning to form a wedge and so lift the coating further. However the degree

  of delamination was still slight at the end of test (&lt;2mm from the edge).

  There was no evidence of anything other than zinc corrosion products, albeit

  they had a different, more open and voluminous morphology to that produced in

  the saltspray test. Importantly there was no evidence of red rust and

  associated steel corrosion products.</p>

  <SCRIPT>comment(14)</SCRIPT><p>After 3� years of Scab Corrosion testing [9] (Figure 5c), considerably

  more corrosion was seen on the panels, particularly at the exposed cut edges.

  This comprises a heavy deposition of zinc corrosion products underneath the

  coating and (at the extreme edge) on top it. Red rust was also visible at the

  edge and below the zinc corrosion layer. In places the organic coating had

  become embrittled and had peeled back or flaked off. On a macro scale this

  test shows all the components of corrosion seen on the roof of the building.

  However the pattern is still not quite the same, particularly in the

  morphology and quantity of solid, zinc corrosion product formed, which

  differed considerably from the &#145;tide mark effect&#146; seen in the field.</p>

  <SCRIPT>comment(15)</SCRIPT><p>5 years Hook of Holland Exposure performance is shown in Figure 5d. These

  panels do show the same type of mechanism of failure albeit on reduced scale

  over a similar time period. Although the pitch was similar at 5<font face="Symbol">�</font>

  from the horizontal, the test panel didn&#146;t face the prevailing wind

  direction during exposure and only the overlap rather then the drip edge was

  corroded. That said the corrosion was characterised by organic coating peel

  back and flaking, tidemark lines of the zinc and some red rust at the extreme

  edge. Unlike the corrosion products generated by the Prohesion<sup>�</sup>

  test, on this exposure they were not voluminous and did not appear to form a

  wedge. This infers that other processes were also responsible for the initial

  loss of adhesion.&nbsp;&nbsp;&nbsp;&nbsp;</p>

  <SCRIPT>comment(16)</SCRIPT><p>Figure 5e shows the corroded edge of the product after 1500 hours testing

  on a combined Cyclic Fog /UV Exposure test. This new test follows the

  procedure outlined for testing of other exterior coatings [10,11,12] and which

  has recently been embodied in the ASTM D5894-96 standard [13]. At the end of

  test the coating had peeled back and flaked from the edge as seen on natural

  exposure in Holland and on the building. The zinc corrosion product was not as

  voluminous as that generated by the Prohesion<sup>�</sup> test on its own and

  there was evidence of red rust developing at the extreme panel edge.</p>

  <h4>Discussion</h4>

  <SCRIPT>comment(17)</SCRIPT><p>It is clear that the older, established tests were not able to predict and

  or replicate the type of field failure observed. This example evidences the

  well documented shortcomings of the continuously wet, saltspray test [14] In

  this test, the conditions used (95-98% relative humidity, 5 % by weight NaCl

  at pH of 6.5 &#150; 7.5 and 35<font face="Symbol">�</font>C) result in a pattern

  of corrosion and morphology of corrosion products rarely seen in natural

  exposures. In particular, the very high concentration of sodium and chloride

  ions, in conjunction with the constant high relative humidity, result in

  clearly defined anodic and cathodic sites being set up on the principle of the

  oxygen concentration cell. The result is that as the pH in the cathodic

  regions rises, in some instances to as much as 12 or 13 [15], the zinc surface

  becomes passivated. The high pH would also mean that any corrosion product

  would likely remain in solution rather than precipitate as solid corrosion

  product to form a wedge. Furthermore this high cathodic pH can also result in

  base catalysed hydrolysis and saponification of the organic binder at the

  interface leading to wet adhesion loss. The overlying zinc corrosion product

  is predominantly made up of dense plate-like structures of hydrated, basic

  zinc chloride, Zn<sub>5</sub>(OH)<sub>8</sub>Cl<sub>2</sub><sup>.</sup>2H<sub>2</sub>O

  (pseudo-hexagonal crystals), rather than the zinc hydroxy carbonates seen on

  natural exposure [16]. Thus both the anodic products and cathodic mechanisms

  fall somewhat short of reality and, not surprisingly, do not reproduce or

  predict the pattern of corrosion seen on the roof.</p>

  <SCRIPT>comment(18)</SCRIPT><p>By contrast the wet/dry cycling conditions of the Prohesion<sup><font face="Symbol">�</font></sup>

  test result in quite a different pattern of corrosion to that of the saltspray.

  The inclusion of wet and dry cycling periods is now well recognised [17] as

  significantly influencing the corrosion process. The increase in ionic

  concentrations during the drying periods results in some solid species being

  formed as precipitates or evaporites, accumulating as a wedge between the

  anode and cathode regions. The example here demonstrates further the effect of

  cyclic conditions in the formation of solid corrosion products that can

  mechanically damage the film [18]. This process, allowing free access of

  oxygen and CO<sub>2</sub>, together with the use of a more dilute electrolyte

  fog (0.35wt% (NH<sub>4</sub>)<sub>2</sub>SO<sub>4</sub> and 0.05 wt % NaCl)

  will favour the build-up of different corrosion products from the salt spray;

  predominantly the complex salt of zinc hydroxy sulphato chloro hydrate; Zn<sub>12</sub>(OH)<sub>15</sub>(SO<sub>4</sub>)<sub>3</sub>Cl<sub>3</sub>

  (H<sub>2</sub>O)<sub> 5</sub>. [19]. Equally the cyclic test conditions favour

  the formation of compact rust layers consisting of <font face="Symbol">�</font>-FeOOH

  and <font face="Symbol">g</font>-FeOOH similar to that found on outdoor

  exposure testing [19,20]. That said, the standard test conditions used were

  not able to produce the less voluminous corrosion products or the degree of

  steel corrosion as seen on the cut edge of the roof. It is likely that the

  salts used in the test still overwhelm the buffering effect of surface

  moisture containing bicarbonate ions which would otherwise lead to the

  formation of basic zinc carbonates such as Zn<sub>5</sub>(OH)<sub>6</sub>(CO<sub>3</sub>)<sub>2</sub>.</p>

  <SCRIPT>comment(19)</SCRIPT><p>Even though the test represents a more realistic one than the continuous

  salt fog , the overall performance on this test would still not predict the

  extent of cut edge corrosion and particularly anode depletion leading to steel

  corrosion, seen in the field.</p>

  <SCRIPT>comment(20)</SCRIPT><p>Both the Scab corrosion test and the outdoor tests at the Hook of Holland

  exposure site demonstrate the same type of corrosion performance as seen on

  the roof. The former test is the more aggressive. The Dutch exposure was the

  closest in terms of the amount of solid corrosion products and the mode of

  coating delamination and degradation although this occurred to a smaller

  extent and in the area of panel overlap rather than at the free drip edge. The

  mode of failure appeared to be the same although it is significantly less in

  degree (2 mm total creep against 7 mm for the roof in the same time period).

  This suggests that the corrosion process be accelerated by a number of

  different factors. In the case of the west facing roof pitch of the building

  it may be the combination of more frequent and rapid rates of wetting and

  drying and the build up of debris and dirt at the edge that lie behind the

  cause of the failure.</p>

  <SCRIPT>comment(21)</SCRIPT><p>For those panels exposed at the Hook of Holland the features and processes

  involved in corrosion of overlap regions may also provide a clue to the drip

  edge problem. The accelerating influences in the former instance could be

  longer wet times (because of entrapped water), crevice corrosion and even

  differential aeration cells. It is possible that the same factors may be

  operating on the very exposed and wet conditions on the gutter edge of the

  roof.</p>

  <SCRIPT>comment(22)</SCRIPT><p>&nbsp;Of the laboratory tests the combined cyclic fog/ UV exposure test was

  the only one which began to demonstrate the same pattern of performance as

  seen on roof. In many ways the edge corrosion appeared similar in basic

  morphology and, in particular, less voluminous than that produced by the

  Prohesion<sup><font face="Symbol">�</font></sup> test. It was also the only

  accelerated technique, which caused the topcoat to loose gloss and become matt

  in a similar fashion to that seen on natural exposure. Loss of gloss is a

  common feature related to photolysis and/or photo-oxidation of the surface

  layers of polyester coatings. The reduction in gloss renders the surface more

  hydrophilic, lowering the critical RH for the onset of corrosion. The same

  processes can also produce microcracking and micropores, further facilitating

  the uptake of moisture and thereby aggressive ions [21]. That said, the test

  still did not give the same degree of steel corrosion (visible as red rust) as

  seen on the roof, even after completing 1500 hours of testing. It is possible

  that a modified wet/dry regime, to encourage more rapid drying and a different

  concentration and combination of electrolytes may better replicate the

  failure.</p>

  <SCRIPT>comment(23)</SCRIPT><p>Thus it is clear that this type of edge corrosion failure could not be

  anticipated by the accelerated tests employed. However, the example does

  demonstrate the importance of introducing combined stresses into the

  accelerated corrosion protocols, rather than just using those of a

  continuously wet nature. It would seem that wetting and drying of the panel

  together with photodegradation are some of the more important ones to utilise.</p>

  <h3>Case Study 2. Packaging Factory, South West England.</h3>

  <h4>Observation of Corrosion</h4>

  <SCRIPT>comment(24)</SCRIPT><p>This building was erected in 1987 in the Bristol area and by 1991 showed

  the type of overlap edge corrosion shown in Figure 6a and 6b. The following

  points were noted regarding the occurrence of this phenomenon and were felt to

  be significant with respect to the nature of this corrosion:</p>

  <SCRIPT>comment(25)</SCRIPT><p>a)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Corrosion was limited to the roof only and

  occurred in the trough valleys of the profile.</p>

  <SCRIPT>comment(26)</SCRIPT><p>b)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The sheet gauge used on the roof was

  heavier (1.1mm) than the side cladding (0.7mm)</p>

  <SCRIPT>comment(27)</SCRIPT><p>c)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Corrosion was limited to the south west

  facing pitch main roof. Neither the north east pitch nor roofs of smaller

  outbuildings showed a similar problem. See Figure 6b.</p>

  <SCRIPT>comment(28)</SCRIPT><p>d)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Corrosion was limited to strip overlap

  areas. The drip edges of the same sheets at the gutter were corrosion free.</p>

  <SCRIPT>comment(29)</SCRIPT><p>e)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;In the troughs there were significant

  deposits of extract from the factory ovens. When wet this material formed a

  sludge or poultice over the coated steel in places up to 0.5 &#150; 0.75 mm

  thick.</p>

  <SCRIPT>comment(30)</SCRIPT><p>A detailed investigation of the defect was undertaken both in-situ and back

  in the laboratory. This lead to the identification of a number of factors

  which differed between material that had failed prematurely and that which was

  in a good condition. These findings are summarised in Table 1.</p>

  <h4>Discussion</h4>

  <SCRIPT>comment(31)</SCRIPT><p>Again, none of the traditional laboratory testing techniques predicted that

  this type of failure would occur. Salt spray [22] and high humidity [23]

  testing showed the coated sheets to be giving the level of performance

  anticipated for the product. Even the severe, accelerated, outdoor scab

  corrosion test [9] indicated that the pre-coated coil performance was in line

  with expectations. Therefore this example demonstrates further the dangers of

  relying on short term testing to predict real time performance. It also

  illustrates other variables and influences to consider when relating short

  term, accelerated testing results to premature in-service failure. Some act as

  confirmation of those influences already discussed, but there are others that

  require consideration:</p>

  <SCRIPT>comment(32)</SCRIPT><p>a)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The importance of mixed electrolytes and

  their respective concentrations are a significant influence on the mode of

  corrosion. This has been argued for a long time [24] and the results from

  Table 1 clearly support the use of sulphate rich electrolyte solutions. It is

  interesting to compare the measured ppm levels of sulphates, and chlorides

  with those commonly used in the saltspray and&nbsp; Prohesion<sup>�</sup>

  tests. The levels of chloride ion present at the overlap are two orders of

  magnitude less than that employed in the saltspray (50,000 ppm of NaCl).

  However the Prohesion<sup>� </sup>test deposits quantities of NaCl and (NH<sub>4</sub>)<sub>2</sub>SO<sub>4&nbsp;

  </sub>(500 ppm and 3500 ppm respectively) almost identical to that measured in

  the uncorroded overlaps and 2 &#150;3 times lower than in the problem areas.</p>

  <SCRIPT>comment(33)</SCRIPT><p>b)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The effect of the high cathode: anode ratio

  significantly effected the rate of anode depletion. Our own work with

  accelerated tests supports this, although the picture is less clear cut with

  the thinnest gauges. The general trend for the tests was similar at gauges

  between 0.5 &#150; 1.3 mm, even though the mechanisms of corrosion clearly were

  not. On the roof this ratio was ~27:1 compared with ~10:1 for the previous

  example. Whatever the specific process it is clear that the larger the cathode

  area the harder the anode is driven at the cut edge. The PUCAT test devised by

  Walters[25] can provide a means of assessing the coating&#146;s response as this

  factor is varied by increasing the effective cathodic area.</p>

  <SCRIPT>comment(34)</SCRIPT><p>c)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The comparatively low Tg (+15�C) of the

  topcoat exacerbated the degree of permanent deposition of the factory extract.

  This resulted in a rapid and significant build-up of debris at the cut edge

  and immediately below it forming a poultice. This, in turn acted rather like a

  sponge, to trap and accelerate the concentration of aggressive ions. Current

  accelerated tests have no means of determining the effects of either coating

  Tg or poultices on the overall corrosion performance.</p>

  <SCRIPT>comment(35)</SCRIPT><p>d)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Both the low pitch of the roof (&lt;10�)

  and the design of the sheet overlap and fixings combined to cause ponding and

  lengthen the wet times at the edge. Additionally no sealant had been used at

  the overlap, so allowing moisture to be trapped underneath. This will promote

  the set up of differential aeration conditions, setting up conditions which

  favour crevice corrosion. These may also have contributed to the premature

  corrosion at the cut edge. Whilst recognised as significant influences on the

  corrosion process [26], these influences are not routinely exerted into tests

  in the laboratory</p>

  <SCRIPT>comment(36)</SCRIPT><p>In addition to incorporating combined or co-acting stresses during the

  accelerated testing, this example argues for careful selection of electrolytes

  and concentrations. It also underlines the significant influence of building

  design and construction which can result in a coating failing prematurely.</p>

  <h3>Case Study 3. Comparison of Exposure Results at Two Different European

  Sites.</h3>

  <h4>Observation of Corrosion</h4>

  <SCRIPT>comment(37)</SCRIPT><p>A final example from the field illustrates the influence of location and

  elevation of the exposure on the corrosion resistance of coil coated systems.

  The effect is quite an obvious one to discuss but it is important to

  demonstrate just what sort of differences can be seen even with the same

  coating system. In this example the coating was applied under commercial

  coating conditions on hot dipped galvanised steel (0.5 mm gauge), galvanised

  with 250 g/m<sup>2</sup> of zinc. The organic coating comprised a primer and

  topcoat .The former was an epoxy melamine based primer with strontium chromate

  as the inhibitive pigment. The latter was a polyvinylidene flouride coating;

  considered to be the most durable generic type used commonly for coil

  coatings. Panels of this system were also exposed in the accelerated

  environments detailed in Table 2.</p>

  <SCRIPT>comment(38)</SCRIPT><p>The overall patterns for the edge corrosion of each of these tests is shown

  in Figures 7a &#150; 7h inclusive. The principal issue is again, not in the

  details of the corrosion mechanism, but rather the mode of corrosion generated

  by each exposure and to what extent the short term tests replicate this.</p>

  <SCRIPT>comment(39)</SCRIPT><p>From the photographs a number of features are worth commenting on:</p>

  <SCRIPT>comment(40)</SCRIPT><p>a)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;There are quite distinct differences

  between the natural exposure panels on the basis of both geographic location

  and orientation. The exposures on the 90 �, north-facing orientation at

  Hendaye gave the greatest degree of degradation. However the degradation here

  is characterised by significant face blistering and, at the cut edge, the

  build up of voluminous zinc corrosion product <i>overlying</i> as well as

  undermining the organic coating. In places the coating has embrittled and

  flaked but there is surprisingly little evidence of steel corrosion /red rust

  considering the severity of the exposure.</p>

  <SCRIPT>comment(41)</SCRIPT><p>b)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;At the Hook of Holland site on 90�, north

  facing exposure the same material shows quite a different corrosion mechanism

  and seems to follow the more usual edge disbondment, peel and flake off of the

  organic coating. There is considerably less zinc corrosion product and some

  bare, presumably passivated zinc exposed. There are traces of red rust at the

  extreme cut edge.</p>

  <SCRIPT>comment(42)</SCRIPT><p>c)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The exposures on the 45�, south

  facing orientation at Hendaye correspond closely with those at the Hook of

  Holland at 45�, both showing the beginnings of edge peel after 5 years.</p>

  <SCRIPT>comment(43)</SCRIPT><p>d)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The pattern of corrosion of the system

  exposed at Hendaye on 90�, north facing elevation is best replicated by the

  scab corrosion test and to a much lesser extent the saltspray. As before the

  other natural exposures seem better replicated by the laboratory cyclic tests

  and in particular the Prohesion<sup>� </sup>and Cyclic salt fog/ UV exposure

  test.</p>

  <h4>Discussion</h4>

  <SCRIPT>comment(44)</SCRIPT><p>The results show clearly that the outdoor environment, even in the two

  locations chosen here, is neither uniform in the mode or, quite probably, the

  mechanism of corrosion. Equally as interesting is that all the various

  accelerated tests seem to have relevance depending on location, with the

  possible exception of the salt fog test.</p>

  <SCRIPT>comment(45)</SCRIPT><p>Table 3 shows the principal climatological differences between the two

  sites [27]. The severe marine site at Hendaye is obviously the more aggressive

  of the two, evidenced by the corrosion rates of zinc and steel. The reason for

  this difference is most likely found in the combination of high Cl<sup>-</sup>

  levels, higher average annual temperatures and radiation levels.</p>

  <SCRIPT>comment(46)</SCRIPT><p>Being sheltered and north facing, the 90� exposed&nbsp; panels at Hendaye

  are likely to experience the longest wet times of any natural exposure,

  especially at the horizontal cut edge. It may be postulated that at this edge,

  conditions above critical RH will persist and ionic concentrations build most

  rapidly. Corrosion products will be more formed more rapidly, will be denser

  (possibly containing more of the hydrated zinc hydroxy chloride (Zn<sub>5</sub>(OH)<sub>8</sub>Cl<sub>2</sub><b><sup>.

  </sup></b>2H<sub>2</sub>O)), and more strongly isolating.</p>

  <SCRIPT>comment(47)</SCRIPT><p>A likely consequence will be that the zinc is less able to function

  sacrificially, hence anodic depletion will stall, evidenced by the lack of

  further coating peel back and red rust.</p>

  <SCRIPT>comment(48)</SCRIPT><p>&nbsp;Being outdoors and sheltered 90� and facing north, the scab

  corrosion test conditions are clearly very similar to this, albeit that the

  greater Cl<sup>-</sup> content in the spray appears to accelerate the

  degradation. Saltspray testing takes this a step further still, but fails to

  produce the same, more open corrosion product morphology.</p>

  <SCRIPT>comment(49)</SCRIPT><p>At other angles of exposure on the same site the effects of more rapid,

  wet/dry cycling, direct sunlight and greater temperature cycling would explain

  why such exposures are better replicated by the cyclic tests with lower

  chloride concentrations and periods of UV irradiation. The resultant, thinner,

  less dense and thus more permeable corrosion products are more likely to

  contain more hydrated zinc hydroxy carbonate salts. The mode of edge corrosion

  in this case and replication of it is shown in Figures 8 and 9 respectively.</p>

  <SCRIPT>comment(50)</SCRIPT><p>This case demonstrates the dangers of assuming that a more severe marine

  environment like Hendaye just serves to accelerate the <i>rate</i> <i>of

  corrosion</i>. Clearly the mode, rate and mechanism can differ profoundly

  between geographic location and elevation. This underlines the importance of

  understanding not only the macro and micro climates of chosen test sites, but

  also the specific climate of any building before offering advice or guaranties

  of performance.</p>

  <h3>An Integrated Model for Corrosion Performance Prediction.</h3>

  <SCRIPT>comment(51)</SCRIPT><p>The case studies used here illustrate and reinforce the fact that the

  nature of corrosion in the environment where pre-coated steels are used is

  complex and variable. They also serve to emphasise the influence of product

  and application design and the accelerating effects of atmospheric

  contaminants and pollutants. Clearly these all contribute towards the overall

  corrosion performance of the product in a <i>combined</i> rather than isolated

  fashion.</p>

  <SCRIPT>comment(52)</SCRIPT><p>This being the case it is unlikely any single test will be capable of

  reproducing the corrosion process in its many forms and simultaneously take

  into account the various design and orientation influences. The demand for a

  generally applicable corrosion test is therefore, as Funke put it &#145;rather

  like the demand for a medicine, which cures all ills&#146;. [28]</p>

  <SCRIPT>comment(53)</SCRIPT><p>This dilemma can be resolved by two possible approaches. The first is to

  use laboratory proving tests which do not necessarily accurately model

  atmospheric attack mechanisms but which are consistently reproducible. They

  must obviously also&nbsp; produce an adequate acceleration of corrosion. Such

  an approach is ideal for quality control and ranking evaluations. Considerable

  work has been undertaken by both the SSPC and CSCT in this area, utilising

  rank correlation statistics to determine the reliability of an such approach.

  [29,30,31]. The key to this approach is to preserve the outdoor, ranked

  performance of known systems in a reliable range of accelerated tests. Having

  done so, the performance of an untried, new product can then be assessed and

  ranked with confidence within this matrix.</p>

  <SCRIPT>comment(54)</SCRIPT><p>The other approach supported here is based on one suggested for the

  automotive industry [32]. This entails the integration of information relating

  to the corrosion process derived from three sources; firstly, that from

  standard, natural exposure sites, secondly from a broad spectrum of laboratory

  accelerated performance tests and finally, from measuring system&#146;s response

  to the fundamental processes involved in corrosion.</p>

  <SCRIPT>comment(55)</SCRIPT><p>Implicit in this methodology is the recognition that any particular

  accelerated or outdoor test will often overstress particular elements of the

  corrosion process. The advantage of this approach is that it both recognises

  and exploits these emphasised stresses. By integrating the responses from all

  three sources into a central model, it then becomes possible to both predict

  service life in untested environments and to understand and rectify early

  failures.</p>

  <SCRIPT>comment(56)</SCRIPT><p>Information from the field is predominantly a question of careful

  observation of any failure mode, in particular how it is initiated and how it

  proceeds. This should be&nbsp; supported by characterisation of the process

  using in-situ, scanning techniques such as SRET, potential mapping or Kelvin

  probe analyses. Such techniques and the information about the real time

  processes are then utilised to validate the other two approaches in the

  methodology. A broad range of exposure sites with detailed information on

  their climatological characteristics helps to put the corrosion modes

  recognised into the context of the environment of exposure.</p>

  <SCRIPT>comment(57)</SCRIPT><p>The accelerated tests chosen, are done so as to provide a means of

  assessing the sensitivity of materials to one or more of the specific

  degradation influences outlined below.&nbsp; Ideally these should be applied

  at a number of different levels in order to generate a response surface for

  the coating.</p>

  <SCRIPT>comment(58)</SCRIPT><p>a)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mixed electrolytes , pH and concentration,

  buffering effects</p>

  <SCRIPT>comment(59)</SCRIPT><p>b)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Influence of wetting and drying rates and

  cycle durations</p>

  <SCRIPT>comment(60)</SCRIPT><p>c)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Influence of photodegradation of the

  organic coating</p>

  <SCRIPT>comment(61)</SCRIPT><p>d)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Influence of design &#150;overlaps, drip ends,

  scratches and bends, composite panels.</p>

  <SCRIPT>comment(62)</SCRIPT><p>e)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Influence of orientation and exposure angle

  (90�, 45�, 5� from the horizontal).</p>

  <SCRIPT>comment(63)</SCRIPT><p>f)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Influence of temperature

  fluctuations (-25�C<font face="Symbol">�</font> + 70�C)</p>

  <SCRIPT>comment(64)</SCRIPT><p>g)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Influence of panel moisture/wet time

  and&nbsp; RH</p>

  <SCRIPT>comment(65)</SCRIPT><p>h)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Influence of substrate thickness</p>

  <SCRIPT>comment(66)</SCRIPT><p>Clearly this list is not exhaustive but in an industrial development

  laboratory some balance between time, resource and depth of study has to be

  struck. A number of these influences are already covered in existing

  assessment standards. What is necessary is to utilise a broad range of testing

  techniques, each one emphasising one or more of the particular parameters

  listed above.&nbsp; Like the jigsaw puzzle it is the combination of the

  responses of the system to each individual influence that enables the

  formulator to gain the overall picture. Each piece on its own is not only

  uninformative but has the potential to be misleading.</p>

  <SCRIPT>comment(67)</SCRIPT><p>The purpose of the fundamental studies are to link up the coated system&#146;s

  macro corrosion performance characteristics with its response to

  electrochemical and physical stresses, which have been identified and

  characterised on examples in the field. These will be the essential chemical

  and physical mechanisms lying at the heart of the corrosion processes. The

  techniques&nbsp; should be employed to characterise the basic adhesion,

  barrier and inhibitive properties of the coating under a variety of different

  conditions. The best tools to use here are likely to be those that evaluate

  the coating in-situ rather than as a free-film [33]. Electro chemical

  &nbsp;impedance spectroscopy (EIS) has been successfully used to measure ionic

  barrier properties, water uptake rates through the coating and wet adhesion at

  the substrate interface[34]. The protective action of the coating and the

  efficiency of the inhibition process at the cut edge has also been be studied

  with EIS , atomic absorption spectroscopy and scanning reference electrode

  techniques [35]. Measurements of microhardness and adhesion at temperatures

  around and exceeding the Tg of the coating will also be of value.</p>

  <SCRIPT>comment(68)</SCRIPT><p>These fundamental, mechanistic responses then need to be integrated with

  the responses of the system to the accelerated stresses/artificial

  environments of laboratory tests and the information relating to real life

  failure modes and service conditions.&nbsp; This is done through the central

  predictive model as shown in Figure 10.</p>

  <h3>Case Study 4: Development of Chromate Free Primer Systems.</h3>

  <h4>Description of the Programme</h4>

  <SCRIPT>comment(69)</SCRIPT><p>The integrated testing methodology suggested is particularly suited to the

  determination of service life performance of new, chromate free systems.

  Typically traditional, accelerated techniques discriminate against such

  products and this last example is an illustration of how the proposed

  methodology can be used to avoid falsely condemning promising materials. In

  this project, fundamental and exterior evaluations are still in progress, but

  the accelerated testing protocols and the coating&#146;s responses are worth

  reviewing.</p>

  <SCRIPT>comment(70)</SCRIPT><p>All the coated materials in this example were factory applied under

  standard commercial conditions. Their general compositions are shown in Table

  4a.</p>

  <SCRIPT>comment(71)</SCRIPT><p>Panels were against a selection of accelerated tests, the specifications of

  which are shown in Table 4b.</p>

  <h4>Results and Discussion</h4>

  <SCRIPT>comment(72)</SCRIPT><p>On accelerated testing the major point of degradation, as expected, is the

  exposed cut edge. Edge creep performance, summarised in terms of degree and

  mode for the various accelerated methods, is shown in Table 5. The key to

  interpretation of the results is now not the performance against a particular

  specified, standard test such as ASTM B117, but rather performance of the

  material on application of a particular stress or set of conditions. More work

  needs to be done in the resolving each procedure into its component stresses.

  However, by way of illustration, some tentative conclusions on edge creep

  performance of the chromate and chromate-free primers can be deduced.</p>

  <SCRIPT>comment(73)</SCRIPT><p>a)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i>Wet Adhesion and effect of Base

  Catalysed Hydrolysis</i> &#150; System A shows the better resistance, especially

  in terms of degree of edge delamination.</p>

  <SCRIPT>comment(74)</SCRIPT><p>b)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i>Wet Adhesion and Influence of High RH

  under condensing and immersed conditions</i> &#150; Good osmotic resistance and

  wet adhesion is demonstrated by both System A and B.</p>

  <SCRIPT>comment(75)</SCRIPT><p>c)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i>Influence of cycling conditions</i> &#150;

  These produce edge peel and corrosion product wedges in Prohesion<sup>�</sup>

  and Cyclic Fog/UV Exposure. The cyclic PUCAT test does not seem sufficiently

  progressed and the cycling conditions of CCT-1 are masked by the high NaCl

  concentrations. At this stage System A demonstrates more resistance to the

  stresses built up by the cycling conditions than System B.</p>

  <SCRIPT>comment(76)</SCRIPT><p>d)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i>Influence of increased cathode and anode

  ratio</i>. At 750 hours the Cyclic PUCAT test did not produce a high degree of

  anodic depletion and red rust was not yet observed. This suggests that both

  primers provide good protection for the galvanised substrate and that both

  exhibit good wet adhesion and inhibitive properties. System A shows some edge

  peel and System B blistering as a response to this applied stress.&nbsp;</p>

  <SCRIPT>comment(77)</SCRIPT><p>e)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i>Influence of UV Degradation</i>. Whilst

  the topcoat and its degradation remain the same for both systems the increased

  effects of wetting and ionic transport through the film are exerting a

  slightly more delamination effect on System A than System B. Both show the

  start of steel corrosion at the cut edge.</p>

  <SCRIPT>comment(78)</SCRIPT><p>f)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i>Influence of electrolytes-</i>

  System A and System B respond similarly to the NaCl and (NH<sub>4</sub>)<sub>2</sub>SO<sub>4

  </sub>electrolyte mix used in Prohesion<sup>�</sup>, Cyclic PUCAT and Cyclic

  Fog/UV exposure tests.</p>

  <SCRIPT>comment(79)</SCRIPT><p>Using this response data coupled with an understanding of the specific,

  applied stresses and influences involved, a combined picture of accelerated

  performance can be built up. With further evaluations and the required

  integration of responses from the field and fundamental studies it will be

  possible to confidently construct a comparative model of predictive

  performance of this chromate free system.</p>

  <h3>Summary and Conclusions</h3>

  <SCRIPT>comment(80)</SCRIPT><p>The objective of this paper has not been to promote any single, new test to

  replace salt fog or other existing laboratory based accelerated techniques. It

  is clear that whilst the adoption of cyclic tests such as ASTM D5894-96

  represent a move in the right direction they are unlikely to be able to

  reproduce all aspects of real time corrosion performance.</p>

  <SCRIPT>comment(81)</SCRIPT><p>Rather the purpose has been to support, on the evidence of real time, field

  exposures, the adoption of a more coherent approach to predicting both early

  failure and long term service life. This methodology entails the <i>integration</i>

  of response data from three different, but complimentary approaches, into a

  central predictive model. No one of them stands on its own as an indicator of

  performance, contrary to the traditional method of corrosion assessment and

  prediction.</p>

  <SCRIPT>comment(82)</SCRIPT><p>In all but sheltered marine environments, the edge corrosion process for

  zinc galvanised, organically pre-coated steel appears to follow a common mode.

  It is characterised by peel back and embrittlement of the organic coating , by

  relatively thin layers of zinc corrosion product and&nbsp; by an apparently

  high rate of anodic reaction and consequently corrosion of the steel to form

  red rust. The process&nbsp; is initiated by adhesion loss (electrochemical or

  mechanical disbondment) of the organic coating and is accelerated by a number

  of factors not necessarily related to the coating itself. These may include

  the substrate gauge, the nature of the electrolytes and any contaminant, the

  rate and duration of wet and dry and temperature cycles. Propagation can be

  similarly accelerated by external influences such as the orientation and

  attitude of the coated sheet on the structure (hence wet and dry

  characteristics and resultant stresses).To date most, common accelerated tests

  do not reproduce this phenomenon.</p>

  <h3>Acknowledgements</h3>

  <SCRIPT>comment(83)</SCRIPT><p>The author wishes to thank the management of Akzo Nobel Nippon Paint Ltd,

  for their permission to use their data and Dr Scantlebury, Dr R Howard and Dr

  A Darwin of the corrosion protection centre at UMIST for their help and

  co-operation in certain aspects of corrosion protection assessment.</p>

  <h3>References</h3>

  <SCRIPT>comment(84)</SCRIPT><p>1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Metal Cladding and Roofing Mfgs.

  Association. Statistics.1991</p>

  <p>2.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;Ryan,P.A., Wolstenholme,R.P,

  Howell,D.M., &#145;<i>The Durability of Cladding, A State of The Art Report</i>&#146;.

  Thomas Telford, W.S.Atkins 1994. ISBN 07277 20120</p>

  <p>3.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Cox,R.N., Kempster,J.A., Bassi,R., &#145;<i>A

  Survey of the Performance of Organic Caoted Metal Roof Sheeting&#146;, </i>BRE

  Report. Watford 1993.</p>

  <p>4.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; BS 5427 .<i>&#146;Code of Practice for&nbsp;

  Performance and Loading Criteria for Profiled Sheeting in Building</i>&#146;.

  Clause 19.BSi.1996.</p>

  <p>5.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pr EN10169-2. &#145;<i>Continuously Organic

  Coated Steel Flat products Part 2 &#150; Products for Building Applications&#146;</i>

  .Draft Version. BSi, 1995.</p>

  <p><i>6.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </i>Asher, J.M.B., ECCA General

  Meeting, Conf. Trans. 1998. &#145;<i>Future Ctgs, The Changing Face of the

  Industry&#146;.</i></p>

  <p>7.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;Dickie,R.A., Smith,A.G., Chemtech.

  Vol.10 , 31, 1980</p>

  <p>8.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Skerry, B.S., Simpson,C.H., Corrosion, Vol

  49, 8 ,1993</p>

  <p>9.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; SS 11 72 11, &#145;<i>Accelerated Outdoor

  Test By Intermittent Spraying of a salt solution (Scab Test)</i>&#146;. Draft ,

  Swedish Standards Institute, 1992.</p>

  <p>10.&nbsp;&nbsp;&nbsp; &nbsp;Skerry,B.S.,Simpson,C.H.,Ray,C.J., J.Prot.Ctgs.&amp;

  Linings.,Vol.8, 5, 1991.</p>

  <p>11.&nbsp;&nbsp;&nbsp; &nbsp;Skerry,B.S., Alavi,A., Lindgren,K.I., J.

  Coat.Tech.,Vol.60, 765, Oct. 1988.</p>

  <p>12.&nbsp;&nbsp;&nbsp; Gardner,G., J. Protect. Ctgs.&amp; Linings, 50-62,

  Sept.1998</p>

  <p>13.&nbsp;&nbsp;&nbsp; ASTM D 5894-96. &#145;<i>Standard Practice for Cyclic

  Fog/UV Exposure of Painted Metal</i>&#146;, ASTM Annual Book of Standards, Volume

  6.02, Paint &#150;Tests for Formulated Products and Applied Coatings. ASTM

  1996.&nbsp;</p>

  <p>14.&nbsp;&nbsp;&nbsp; Appleman,B.R., Campbell,P.G., J. Coat.Tech.,Vol.54,

  686 ,March 1982.</p>

  <p>15.&nbsp;&nbsp;&nbsp; Shrier,L.L, &#145;Corrosion&#146;, Shrier (ed), 2<sup>nd</sup>

  Edn, UK Newnes-Butterworths, London. 1976 , 1-138.</p>

  <p>16.&nbsp;&nbsp;&nbsp; Pereira,D., Almeida,E., Figueiredo,O., Prog. In

  Org.Ctgs., 17, 175 &#150;189, 1989</p>

  <p>17.&nbsp;&nbsp;&nbsp; Stratmann,M., Bohenkamp,K.,Ramchandran,T.,Corrosion

  Sci., 27, 905, 1987.</p>

  <p>18.&nbsp;&nbsp;&nbsp; Standish,J.V., Ind.Eng.Chem.Prod.Res.Dev., 24,

  357-361, 1985 .</p>

  <p>19.&nbsp;&nbsp;&nbsp;

  Lyon,S.B.,Thompson,G.E.,Johnson,J.B.,Wood,G.C.,Ferguson,J.M., Corrosion NACE,

  Vol.43, 12, 719-726, Dec. 1987.</p>

  <p>20.&nbsp;&nbsp;&nbsp; Graedel,T.E., Frankenthal,R.P., J.Electrochem.Soc.,

  137 , 2385, 1990.</p>

  <p>21.&nbsp;&nbsp;&nbsp; Skerry,B.S., Simpson,C.H., Procs. &#145;Corrosion &#145;91&#146;,

  Paper 412, NACE Annual Conf. 1991, Mar. 11-15.</p>

  <p>22.&nbsp;&nbsp;&nbsp; ASTM B117-97, &#145;<i>Standard Practice for Operating

  Salt Spray Testing Apparatus</i>&#146;, ASTM Annual Book of Standards, Volume

  03.02, Wear and Erosion; Metal Corrosion. ASTM 1998.&nbsp;</p>

  <p>23.&nbsp;&nbsp;&nbsp; BS 3900: Part F2: April 1973, &#145;Determination of

  Resistance to Humidity Under Continuous Conditions&#146;, BSi, London, 1973.</p>

  <p>24.&nbsp;&nbsp;&nbsp; Harrison,J.B., Tickle, T.C.K., J. Oil &amp; Col.

  Chem. Ass. 45 , 571, 1962</p>

  <p>25.&nbsp;&nbsp;&nbsp; Walter,G.W., Corrosion Sci., Vol 35 , No. 5-8. 1391

  &#150; 1404. 1993</p>

  <p>26.&nbsp;&nbsp;&nbsp; Lyon, S.B.,Lyon,J.D., Johnson,J.B., &#145;Realism in

  Cyclic Cabinet Corrosion Testing of Coil Coated Steel for BUILDING

  Applications&#146;, Cyclic Corrosion Testing, ASTM STP 1238, Haynes,G.S.,

  Tellefsan,K.,(eds),ASTM Philadelphia. 1994.</p>

  <p>27.&nbsp;&nbsp;&nbsp; Almeida,E., Santos,D., ECCA Conf. Trans. ECCA General

  Meeting May 25-28, 1997, &#145;<i>ECCA Own Programme, Its First Few Years&#146;.</i></p>

  <p>28.&nbsp;&nbsp;&nbsp; Funke, W.,&nbsp; J. Oil &amp; Col. Chem. Ass. 67, 3,

  71 ,1984.</p>

  <p>29.&nbsp;&nbsp;&nbsp; Boocock,S.K., J. Protect. Ctgs.&amp; Linings . 51-58,

  Oct.1994.</p>

  <p>30.&nbsp;&nbsp;&nbsp; Cleveland Society for Ctgs. Technol. Tech. Com., J.

  Coat.Tech. 66, 837, 49-67, Oct.1994.</p>

  <p>31.&nbsp;&nbsp;&nbsp; Cleveland Society for Ctgs. Technol. Tech. Com., J.

  Coat.Tech. 68, 858, 47-61, July 1996.</p>

  <p>32.&nbsp;&nbsp;&nbsp; Dickie,R.A., J. Coat.Tech., 64, 809, 61-63 , June

  1992.</p>

  <p>33.&nbsp;&nbsp;&nbsp; Funke,W.,et al, J. Coat.Tech. 58, 741, 79-86, Oct.

  1986.</p>

  <p>34.&nbsp;&nbsp;&nbsp; Deflorian,F., Fedrizzi,L.,J.Adh.Sci.Tech., 13, 5,

  629-645, 1999</p>

  <p>35.&nbsp;&nbsp;&nbsp; Zin,I.M.,Howard,R.L., Badger,S.J.,Lyon,S.B., &#145;<i>The

  Mode of Action of Chromate Inhibitor in Epoxy Primer on Galvanised Steel</i>&#146;

  Prog. in Org. Ctgs, <i>in press</i>.</p>

  <h3>Figures</h3>

  <p><img border="0" src="{{ $htmURL }}v2p15f1.gif" width="767" height="544"></p>

  <SCRIPT>comment(85)</SCRIPT><p><b>Figure 1 : Section Through&nbsp; Edge of Pre- Coated Steel Sheet (Not to

  scale)</b></p>

  <p><img border="0" src="{{ $htmURL }}v2p15f2.gif" width="789" height="691"></p>

  <SCRIPT>comment(86)</SCRIPT><p><b>Figure 2 : Failure modes on Precoated Steel .Source [2]</b></p>

  <p><img border="0" src="{{ $htmURL }}v2p15f3.jpg" width="901" height="585"></p>

  <SCRIPT>comment(87)</SCRIPT><p><b>Figure 3 : Drip Edge, West Pitch</b></p>

  <p><img border="0" src="{{ $htmURL }}v2p15f4.jpg" width="895" height="595"></p>

  <SCRIPT>comment(88)</SCRIPT><p><b>Figure 4 : Drip Edge, East Pitch</b></p>

  <p><img border="0" src="{{ $htmURL }}v2p15f5a.jpg" width="446" height="308"></p>

  <SCRIPT>comment(89)</SCRIPT><p>Figure 5a : Saltspray 1000 hours</p>

  <p><img border="0" src="{{ $htmURL }}v2p15f5b.jpg" width="441" height="336"></p>

  <SCRIPT>comment(90)</SCRIPT><p>Figure 5b : Prohesion<sup>�</sup> 1000 hours</p>

  <p><img border="0" src="{{ $htmURL }}v2p15f5c.jpg" width="441" height="331"></p>

  <SCRIPT>comment(91)</SCRIPT><p>Figure 5c : 3 � Years Scab Corrosion Test</p>

  <p><img border="0" src="{{ $htmURL }}v2p15f5d.jpg" width="445" height="339"></p>

  <SCRIPT>comment(92)</SCRIPT><p>Figure 5d : Hook of Holland&nbsp; 5 Years</p>

  <p><img border="0" src="{{ $htmURL }}v2p15f5e.jpg" width="443" height="321"></p>

  <SCRIPT>comment(93)</SCRIPT><p>Figure 5e :&nbsp; Cyclic Fog/UV Exposure Test,&nbsp;&nbsp; 1500&nbsp; hours

  total exposure</p>

  <SCRIPT>comment(94)</SCRIPT><p><b>Figure 5 : Accelerated Testing : Edge Corrosion Patterns (x 8

  magnification)</b></p>

  <p><img border="0" src="{{ $htmURL }}v2p15f6a.jpg" width="598" height="391"></p>

  <SCRIPT>comment(95)</SCRIPT><p>Figure 6a&nbsp; Roof South West Pitch, Overlap Edge

  <p><img border="0" src="{{ $htmURL }}v2p15f6b.jpg" width="589" height="389"></p>

  <SCRIPT>comment(96)</SCRIPT><p>Figure 6b&nbsp; Roof North East, Overlap Edge</p>

  <SCRIPT>comment(97)</SCRIPT><p><b>Table 1 :&nbsp; Characteristics of&nbsp; Different Roof Pitches</b></p>

<div align="center">

  <center>

  <table border="2">

    <tr>

      <td>

        <p><b>Measurement</b></p>

      </td>

      <td>

        <p><b>South West Pitch</b></p>

      </td>

      <td>

        <p><b>North East Pitch</b></p>

      </td>

    </tr>

    <tr>

      <td>

        <p>Organic Coating Thickness</p>

      </td>

      <td>

        <p>36-40 micrometres</p>

      </td>

      <td>

        <p>37-42 micrometres</p>

      </td>

    </tr>

    <tr>

      <td>

        <p>Galvanised Layer Thickness</p>

      </td>

      <td>

        <p>18-21 micrometres</p>

      </td>

      <td>

        <p>18-21 micrometres</p>

      </td>

    </tr>

    <tr>

      <td>

        <p>Metal Gauge</p>

      </td>

      <td>

        <p>1.05 milimetres</p>

      </td>

      <td>

        <p>1.05 milimetres</p>

      </td>

    </tr>

    <tr>

      <td>

        <p>Extent of Red Rust (from edge)</p>

      </td>

      <td>

        <p>30-35 milimetres</p>

      </td>

      <td>

        <p>none</p>

      </td>

    </tr>

    <tr>

      <td>

        <p>Extent of Coating Peelback (from edge)</p>

      </td>

      <td>

        <p>40-45 milimetres</p>

      </td>

      <td>

        <p>none</p>

      </td>

    </tr>

    <tr>

      <td>

        <p>Cross Hatch Adhesion</p>

      </td>

      <td>

        <p>100%</p>

      </td>

      <td>

        <p>100%</p>

      </td>

    </tr>

    <tr>

      <td>

        <p>Pencil Hardness (Faber Castell)</p>

      </td>

      <td>

        <p>F minimum</p>

      </td>

      <td>

        <p>F minimum</p>

      </td>

    </tr>

    <tr>

      <td>

        <p>Coin Scratch</p>

      </td>

      <td>

        <p>Good</p>

      </td>

      <td>

        <p>Good</p>

      </td>

    </tr>

    <tr>

      <td>

        <p>Solvent Resistance(methylethyl ketone)</p>

      </td>

      <td>

        <p>40-45 double rubs</p>

      </td>

      <td>

        <p>29-45 double rubs</p>

      </td>

    </tr>

    <tr>

      <td>

        <p>pH at the overlap edge</p>

      </td>

      <td>

        <p>6-7</p>

      </td>

      <td>

        <p>6-7</p>

      </td>

    </tr>

    <tr>

      <td>

        <p>Cl <sup>-</sup> ppm(w/w)</p>

      </td>

      <td>

        <p>&nbsp;</p>

      </td>

      <td>

        <p>&nbsp;</p>

      </td>

    </tr>

    <tr>

      <td>

        <p>Drip Edge</p>

      </td>

      <td>

        <p>40</p>

      </td>

      <td>

        <p>60</p>

      </td>

    </tr>

    <tr>

      <td>

        <p>Top of Overlap</p>

      </td>

      <td>

        <p>880</p>

      </td>

      <td>

        <p>400</p>

      </td>

    </tr>

    <tr>

      <td>

        <p>Bottom of Overlap</p>

      </td>

      <td>

        <p>1200</p>

      </td>

      <td>

        <p>730</p>

      </td>

    </tr>

    <tr>

      <td>

        <p>NO<sub>3</sub><sup>-</sup> ppm(w/w)</p>

      </td>

      <td>

        <p>&nbsp;</p>

      </td>

      <td>

        <p>&nbsp;</p>

      </td>

    </tr>

    <tr>

      <td>

        <p>Drip Edge</p>

      </td>

      <td>

        <p>&lt;10</p>

      </td>

      <td>

        <p>&lt;15</p>

      </td>

    </tr>

    <tr>

      <td>

        <p>Top of Overlap</p>

      </td>

      <td>

        <p>&lt;70</p>

      </td>

      <td>

        <p>&lt;50</p>

      </td>

    </tr>

    <tr>

      <td>

        <p>Bottom of Overlap</p>

      </td>

      <td>

        <p>&lt;60</p>

      </td>

      <td>

        <p>&lt;70</p>

      </td>

    </tr>

    <tr>

      <td>

        <p>SO<sub>4</sub><sup>2-</sup> ppm(w/w)</p>

      </td>

      <td>

        <p>&nbsp;</p>

      </td>

      <td>

        <p>&nbsp;</p>

      </td>

    </tr>

    <tr>

      <td>

        <p>Drip Edge</p>

      </td>

      <td>

        <p>220</p>

      </td>

      <td>

        <p>410</p>

      </td>

    </tr>

    <tr>

      <td>&nbsp;</td>

      <td>

        <p>6800</p>

      </td>

      <td>

        <p>4000</p>

      </td>

    </tr>

    <tr>

      <td>

        <p>Bottom of Overlap</p>

      </td>

      <td>

        <p>9500</p>

      </td>

      <td>

        <p>1300</p>

      </td>

    </tr>

  </table>

  </center>

</div>

  <p><img border="0" src="{{ $htmURL }}v2p15f7a.jpg" width="450" height="339">

  <SCRIPT>comment(98)</SCRIPT><p>Figure 7a. Saltspray Test - 1000 hours Continuous Fog</p>

  <p><img border="0" src="{{ $htmURL }}v2p15f7b.jpg" width="432" height="322"></p>

  <SCRIPT>comment(99)</SCRIPT><p>Figure 7b. Prohesion<sup>� </sup>Test 1000 hours wet/dry cycling</p>

  <p><img border="0" src="{{ $htmURL }}v2p15f7c.jpg" width="259" height="302"></p>

  <SCRIPT>comment(100)</SCRIPT><p>Figure 7c. Cyclic Wet Dry/ UV Exposure Test 1500 hours&nbsp;</p>

  <p><img border="0" src="{{ $htmURL }}v2p15f7d.jpg" width="440" height="323"></p>

  <SCRIPT>comment(101)</SCRIPT><p>Figure 7d. SCAB Corrosion Test 5 years Exposure</p>

  <SCRIPT>comment(102)</SCRIPT><p><b>Figure 7 : Case Study 3 : Accelerated Exposure Tests&nbsp; (x 0.54)</b></p>

  <p><img border="0" src="{{ $htmURL }}v2p15f7e.jpg" width="426" height="305"></p>

  <SCRIPT>comment(103)</SCRIPT><p>Figure 7e&nbsp; Hook of Holland, 90� North Facing 5 Years</p>

  <p><img border="0" src="{{ $htmURL }}v2p15f7f.jpg" width="429" height="329"></p>

  <SCRIPT>comment(104)</SCRIPT><p>Figure 7f&nbsp; Hook of Holland, 5� South Facing&nbsp; 5 Years</p>

  <p><img border="0" src="{{ $htmURL }}v2p15f7g.jpg" width="435" height="341"></p>

  <SCRIPT>comment(105)</SCRIPT><p>Figure 7g&nbsp; Hendaye, France, 90� North Facing&nbsp; 5 Years</p>

  <p><img border="0" src="{{ $htmURL }}v2p15f7h.jpg" width="436" height="314"></p>

  <SCRIPT>comment(106)</SCRIPT><p>Figure 7h&nbsp; Hendaye, France, 5� South Facing&nbsp; 5 Years</p>

  <SCRIPT>comment(107)</SCRIPT><p><b>Figure 7 : Case Study 3 : Natural Exposure Tests . (x 0.54)</b></p>

  <SCRIPT>comment(108)</SCRIPT><p><b>Table 2 :&nbsp; Case Study 3 : Corrosion Test Details</b></p>

  <p>1)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Saltspray according to ASTM B117 &#150;97</p>

  <p>2)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Prohesion<sup><font face="Symbol">�</font>

  </sup>according to ASTM B117 &#150;97</p>

  <p>3)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Cyclic Fog / uv Exposure according to ASTM

  D5894 &#150; 96</p>

  <p>4)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Scab Corrosion according to SS 11 72 11</p>

  <p>5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Hook of Holland 90�, North Facing Natural

  Exposure (ECCA T19.5.2)</p>

  <p>6)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Hook of Holland 5�, South Facing Natural

  Exposure (ECCA T19.5.3)</p>

  <p>7)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Hendaye, France.&nbsp; 90�, North Facing

  Natural Exposure (ECCA T19.5.2)</p>

  <p>8)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Hendaye, France 5�, South Facing Natural

  Exposure (ECCA T19.5.3)</p>

  <p>&nbsp;</p>

  <p><b>Table 3 : Climatological Data Comparison 1995-1996 (Source Reference 27)</b></p>

<div align="center">

  <center>

  <table>

    <tr>

      <td>

        <p><b>Characteristic </b><b><font face="Symbol">�</font></b></p>

      </td>

      <td>

        <p><b>Hook of Holland</b></p>

      </td>

      <td>

        <p><b>Hendaye</b></p>

      </td>

    </tr>

    <tr>

      <td>

        <p>Location</p>

      </td>

      <td>

        <p>&nbsp;51� 59' N</p>

      </td>

      <td>

        <p>&nbsp;43� 28' N</p>

      </td>

    </tr>

    <tr>

      <td>

        <p>Average Annual Temperature (�C)</p>

      </td>

      <td>

        <p>10</p>

      </td>

      <td>

        <p>15</p>

      </td>

    </tr>

    <tr>

      <td>

        <p>Average Annual Relative Humidity (%)</p>

      </td>

      <td>

        <p>82</p>

      </td>

      <td>

        <p>77</p>

      </td>

    </tr>

    <tr>

      <td>

        <p>Global Radiation (hJcm<sup>-2</sup> )</p>

      </td>

      <td>

        <p>3820</p>

      </td>

      <td>

        <p>4612</p>

      </td>

    </tr>

    <tr>

      <td>

        <p>Average Annual rain mm</p>

      </td>

      <td>

        <p>58</p>

      </td>

      <td>

        <p>117</p>

      </td>

    </tr>

    <tr>

      <td>

        <p>Average annual Wind Speed</p>

      </td>

      <td>

        <p>5</p>

      </td>

      <td>

        <p>-</p>

      </td>

    </tr>

    <tr>

      <td>

        <p>Predominant Wind Direction</p>

      </td>

      <td>

        <p>SW</p>

      </td>

      <td>

        <p>W</p>

      </td>

    </tr>

    <tr>

      <td>

        <p>Average annual Deposition Rate</p>

      </td>

      <td>

        <p>&nbsp;</p>

      </td>

      <td>

        <p>&nbsp;</p>

      </td>

    </tr>

    <tr>

      <td>

        <p>SO<sub>2 </sub>(<font face="Symbol">m</font>g.m<sup>-3</sup>)</p>

      </td>

      <td>

        <p>12</p>

      </td>

      <td>

        <p>-</p>

      </td>

    </tr>

    <tr>

      <td>

        <p>Cl<sup>- </sup>(mg.day<sup>-1</sup>.m<sup>-2</sup>)</p>

      </td>

      <td>

        <p>-</p>

      </td>

      <td>

        <p>163</p>

      </td>

    </tr>

    <tr>

      <td>

        <p>Steel Corrosion Rate&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

        (g.m<sup>-2</sup>.yr<sup>-1</sup>)</p>

      </td>

      <td>

        <p>390-410</p>

      </td>

      <td>

        <p>420-580</p>

      </td>

    </tr>

    <tr>

      <td>

        <p>Zinc Corrosion Rate&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

        (g.m<sup>-2</sup>.yr<sup>-1</sup>)</p>

      </td>

      <td>

        <p>7-10</p>

      </td>

      <td>

        <p>16-25</p>

        <p>&nbsp;</p>

      </td>

    </tr>

    <tr>

      <td>

        <p>UV Category</p>

      </td>

      <td>

        <p>R<sub>UV</sub> 2</p>

      </td>

      <td>

        <p>R<sub>UV</sub> 3</p>

      </td>

    </tr>

    <tr>

      <td>

        <p>Corrosivity Category</p>

      </td>

      <td>

        <p>C3</p>

      </td>

      <td>

        <p>C4</p>

        <p>&nbsp;</p>

      </td>

    </tr>

  </table>

  </center>

</div>

  <p><img border="0" src="{{ $htmURL }}v2p15f8.jpg" width="462" height="339"></p>

  <SCRIPT>comment(109)</SCRIPT><p><b>Figure 8 :&nbsp; Cut Edge Corrosion Mode (x 8 magnification)</b></p>

  <p><b>&nbsp;&nbsp; b) Edge peel /Zn Corrosion</b></p>

  <b>&nbsp;&nbsp; c)&nbsp; Fe Corrosion &nbsp;Exposure</b>

  <p><b>&nbsp;&nbsp; a) Initiation</b></p>

  <p><b>&nbsp; d)&nbsp; Coating detachment</b></p>

  <p><img border="0" src="{{ $htmURL }}v2p15f9.jpg" width="463" height="343"></p>

  <SCRIPT>comment(110)</SCRIPT><p>Figure 9 :&nbsp; Reproducing Cut Edge Corrosion (x 8 magnification)</p>

  <p>Scab Corrosion&nbsp; Test&nbsp; 3 Yrs</p>

  <p>Hook of Holland 6 Yrs</p>

  <p>Scab Corrosion&nbsp; Test Exposure</p>

  <p>Prohesion<sup>�</sup>&nbsp; Test 1000 hrs</p>

  <p>Saltspray&nbsp; Test 1000 hours</p>

  <p><img border="0" src="{{ $htmURL }}v2p15f10.gif" width="641" height="818"></p>

  <SCRIPT>comment(111)</SCRIPT><p><b>Figure 10 : Corrosion Prediction Methodology</b></p>

  <SCRIPT>comment(112)</SCRIPT><p><b>Table 4a&nbsp; Case Study 4 : Systems Evaluated</b></p>

  <p><b><u>System A</u></b><u>: <i>Chromate-free Polyester primer on HDG</i>:</u></p>

  <p>Substrate: HDG, 0.5 mm gauge, Zn coating thickness 17-24 microns&nbsp;

  (250gsm)<br>

  Pre-treatment : Bonderite 1303 /Parcolene 62.(Chromic acid based)<br>

  Primer : No chromate pigments, 6-8 microns. Polyester/amino binder<br>

  Topcoat : Brown polyester/amino topcoat of 18-20 microns dry film thickness</p>

  <p><b><u>System B</u></b><u>: <i>Chromated Polyester primer on HDG</i> :</u></p>

  <p>Substrate : HDG, 0.5 mm gauge , Zn coating thickness 20 microns&nbsp;

  (250gsm)<br>

  Pre-treatment : Bonderite 1303 /Parcolene 62. (Chromic acid based)<br>

  Primer : Strontium chromate containing, 6-8 microns. Polyester/amino binder<br>

  Topcoat : Brown polyester/amino topcoat of 18-20 microns dry film thickness</p>

  <p><b>Table 4b Case Study 4 : Accelerated Corrosion Test Detail</b></p>

  <p>1) Saltspray according to ASTM B117 &#150;97<br>

  2) Prohesion<sup><font face="Symbol">� </font></sup>according to ASTM B117

  &#150;97<br>

  3) Condensing Humidity according to BS 3900 : Part F2<br>

  4) Total Water Immersion according to ASTM D870 &#150;92<br>

  5) Cyclic Fog / UV Exposure according to ASTM D5894 &#150; 96<br>

  6) Scab Corrosion according to SS 11 72 11, exposed as ECCA T19.5.2<br>

  6) Cyclic PUCAT<br>

  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1 hr immersion in

  3500ppm (NH<sub>4</sub>)<sub>2</sub>SO<sub>4</sub> ,500ppm NaCl&nbsp;

  solution.&nbsp;&nbsp;<br>

  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;1 hr drying at

  ambient<br>

  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;200mm<sup>2</sup>

  coupled SS Cathode coupled to 30mm x 0.5mm Coated Edge<br>

  7) CCT &#150; 1 Cyclic Corrosion Cabinet (Automotive Test CCT - A)<br>

  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Cycle 1 : 4

  hours&nbsp; 5% NaCl Fog @ 35<font face="Symbol">�</font>

  C&nbsp;&nbsp;&nbsp;&nbsp;<br>

  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Cycle 2 : 2

  hours&nbsp; drying&nbsp; @ 60<font face="Symbol">�</font> C<br>

  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Cycle 3 : 30 mins.

  drying @ 40<fonr face="Symbol">�C<br>

  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Cycle 4 : 2 hours

  condensing humidity @ 50<fonr face="Symbol">� C, &gt;95%RH</p>

  <SCRIPT>comment(113)</SCRIPT><p><b>Table 5 : Case Study 4&nbsp; Evaluations &#150; Edge Corrosion Results</b></p>

<div align="center">

  <center>

  <table border="2">

    <tr>

      <td width="166">

        <p><b>Test</b></p>

      </td>

      <td width="58">

        <p><b>System</b></p>

      </td>

      <td width="108">

        <p><b>Edge Corrosion (mm from edge)</b></p>

      </td>

      <td width="95">

        <p><b>Coating Peel Back (mm from edge)</b></p>

      </td>

      <td width="112">

        <p><b>&nbsp;Edge Blistering </b>(ISO 4628-2 82) Quantity/Size</p>

      </td>

      <td width="146">

        <p><b>&nbsp;Zinc&nbsp;&nbsp; Corr.</b></p>

      </td>

      <td width="97">

        <p><b>&nbsp;Red Rust</b></p>

      </td>

    </tr>

    <tr>

      <td width="166">

        <p>Saltspray 1000hrs</p>

      </td>

      <td width="58">

        <p>A</p>

      </td>

      <td width="108">

        <p>4 - 6</p>

      </td>

      <td width="95">

        <p>0</p>

      </td>

      <td width="112">

        <p>2 / 4</p>

      </td>

      <td width="146">

        <p>Overlying Dense</p>

      </td>

      <td width="97">

        <p>None</p>

      </td>

    </tr>

    <tr>

      <td width="166">

        <p>&nbsp;</p>

      </td>

      <td width="58">

        <p>B</p>

      </td>

      <td width="108">

        <p>4 - 9</p>

      </td>

      <td width="95">

        <p>0</p>

      </td>

      <td width="112">

        <p>3/4</p>

      </td>

      <td width="146">

        <p>Overlying Dense</p>

      </td>

      <td width="97">

        <p>None</p>

      </td>

    </tr>

    <tr>

      <td width="166">

        <p>Prohesion 1000 hrs</p>

      </td>

      <td width="58">

        <p>A</p>

      </td>

      <td width="108">

        <p>

      <td width="95">

        <p>1 - 1.5</p>

      </td>

      <td width="112">

        <p>2/2</p>

      </td>

      <td width="146">

        <p>Wedge, Dense</p>

      </td>

      <td width="97">

        <p>Very Slight</p>

      </td>

    </tr>

    <tr>

      <td width="166">

        <p>&nbsp;</p>

      </td>

      <td width="58">

        <p>B</p>

      </td>

      <td width="108">

        <p>2 - 2.5</p>

      </td>

      <td width="95">

        <p>2 - 2.5</p>

      </td>

      <td width="112">

        <p>3/2</p>

      </td>

      <td width="146">

        <p>Wedge, Dense</p>

      </td>

      <td width="97">

        <p>Very Slight</p>

      </td>

    </tr>

    <tr>

      <td width="166">

        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

        1000 hrs</p>

      </td>

      <td width="58">

        <p>A</p>

      </td>

      <td width="108">

        <p>0</p>

      </td>

      <td width="95">

        <p>None</p>

      </td>

      <td width="112">

        <p>2/2</p>

      </td>

      <td width="146">

        <p>None</p>

      </td>

      <td width="97">

        <p>None</p>

      </td>

    </tr>

    <tr>

      <td width="166">

        <p>&nbsp;</p>

      </td>

      <td width="58">

        <p>B</p>

      </td>

      <td width="108">

        <p>0</p>

      </td>

      <td width="95">

        <p>None</p>

      </td>

      <td width="112">

        <p>2/2</p>

      </td>

      <td width="146">

        <p>None</p>

      </td>

      <td width="97">

        <p>None</p>

      </td>

    </tr>

    <tr>

      <td width="166">

        <p>Water Soak 1000 hrs</p>

      </td>

      <td width="58">

        <p>A</p>

      </td>

      <td width="108">

        <p>0</p>

      </td>

      <td width="95">

        <p>None</p>

      </td>

      <td width="112">

        <p>0</p>

      </td>

      <td width="146">

        <p>Very Slight</p>

      </td>

      <td width="97">

        <p>None</p>

      </td>

    </tr>

    <tr>

      <td width="166">

        <p>&nbsp;</p>

      </td>

      <td width="58">

        <p>B</p>

      </td>

      <td width="108">

        <p>0 - 0.5</p>

      </td>

      <td width="95">

        <p>0 - 0.5</p>

      </td>

      <td width="112">

        <p>0</p>

      </td>

      <td width="146">

        <p>Very Slight</p>

      </td>

      <td width="97">

        <p>None</p>

      </td>

    </tr>

    <tr>

      <td width="166">

        <p>Cyclic Fog / UV&nbsp; 1320 hrs</p>

      </td>

      <td width="58">

        <p>A</p>

      </td>

      <td width="108">

        <p>3 - 6</p>

      </td>

      <td width="95">

        <p>3 &#150; 6</p>

      </td>

      <td width="112">

        <p>0</p>

      </td>

      <td width="146">

        <p>Wedge, Dense</p>

      </td>

      <td width="97">

        <p>Some on edge</p>

      </td>

    </tr>

    <tr>

      <td width="166">

        <p>&nbsp;</p>

      </td>

      <td width="58">

        <p>B</p>

      </td>

      <td width="108">

        <p>3 - 5</p>

      </td>

      <td width="95">

        <p>3 &#150; 5</p>

      </td>

      <td width="112">

        <p>0</p>

      </td>

      <td width="146">

        <p>Wedge, Dense</p>

      </td>

      <td width="97">

        <p>Some on edge</p>

      </td>

    </tr>

    <tr>

      <td width="166">

        <p>Cyclic PUCAT&nbsp; 750 hrs</p>

      </td>

      <td width="58">

        <p>A</p>

      </td>

      <td width="108">

        <p>1.5</p>

      </td>

      <td width="95">

        <p>1</p>

      </td>

      <td width="112">

        <p>2/2</p>

      </td>

      <td width="146">

        <p>Slight</p>

      </td>

      <td width="97">

        <p>None</p>

      </td>

    </tr>

    <tr>

      <td width="166">

        <p>&nbsp;</p>

      </td>

      <td width="58">

        <p>B</p>

      </td>

      <td width="108">

        <p>1 - 2</p>

      </td>

      <td width="95">

        <p>None</p>

      </td>

      <td width="112">

        <p>3/4</p>

      </td>

      <td width="146">

        <p>Moderate</p>

      </td>

      <td width="97">

        <p>None</p>

      </td>

    </tr>

    <tr>

      <td width="166">

        <p>CCT- 1&nbsp;&nbsp;&nbsp;&nbsp; 937hrs</p>

      </td>

      <td width="58">

        <p>A</p>

      </td>

      <td width="108">

        <p>6 - 10</p>

      </td>

      <td width="95">

        <p>None</p>

      </td>

      <td width="112">

        <p>Obscured</p>

      </td>

      <td width="146">

        <p>Very dense&nbsp; Overlying</p>

      </td>

      <td width="97">

        <p>None</p>

      </td>

    </tr>

    <tr>

      <td width="166">

        <p>&nbsp;</p>

      </td>

      <td width="58">

        <p>B</p>

      </td>

      <td width="108">

        <p>9 - 12</p>

      </td>

      <td width="95">

        <p>None</p>

      </td>

      <td width="112">

        <p>Obscured</p>

      </td>

      <td width="146">

        <p>Very dense&nbsp; Overlying</p>

      </td>

      <td width="97">

        <p>None</p>

      </td>

    </tr>

    <tr>

      <td width="166">

        <p>Scab Corrosion&nbsp; 6700 hrs</p>

      </td>

      <td width="58">

        <p>A</p>

      </td>

      <td width="108">

        <p>1-2</p>

      </td>

      <td width="95">

        <p>None</p>

      </td>

      <td width="112">

        <p>2/2</p>

      </td>

      <td width="146">

        <p>Overlying Dense</p>

      </td>

      <td width="97">

        <p>Very Slight</p>

      </td>

    </tr>

    <tr>

      <td width="166">

        <p>&nbsp;</p>

      </td>

      <td width="58">

        <p>B</p>

      </td>

      <td width="108">

        <p>1 - 1.5</p>

      </td>

      <td width="95">

        <p>None</p>

      </td>

      <td width="112">

        <p>2/2</p>

      </td>

      <td width="146">

        <p>Overlying Dense</p>

      </td>

      <td width="97">

        <p>Very Slight</p>

      </td>

    </tr>

  </table>



  </center>

</div>



<SCRIPT>footer()</SCRIPT></html>
