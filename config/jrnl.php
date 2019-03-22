<?php
/**
 * Created by PhpStorm.
 * User: mjpssrc
 * Date: 15/02/2019
 * Time: 14:43
 */
return ['url'=>env('JRNL_URL','http://www.jcse.org'),
    'shortName'=>env('JRNL_SHORT','JCSE'),
    'longName'=>env('JRNL_LONG','Journal of Corrosion Science and Engineering'),
    'issn'=>env('JRNL_ISSN','1466-8858'),
    'description'=>env('JRNL_DESC','The electronic journal for all aspects of corrosion'),
    'mailToAdmin'=>env('JRNL_MAIL_TO_ADMIN','<a href="mailto:Admin@jcse.org">JCSE Administration</a>'),
    'mailToEditor'=>env('JRNL_MAIL_TO_EDITOR','<a href="mailto:Editor@jcse.org">Bob Cottis</a>'),
    'maxVol'=>env('JRNL_MAX_VOL','22')];