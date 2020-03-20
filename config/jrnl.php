<?php
/**
 * Created by PhpStorm.
 * User: mjpssrc
 * Date: 15/02/2019
 * Time: 14:43
 */
return ['url'=>env('JRNL_URL','http://127.0.0.1:8080'),
    'shortName'=>env('JRNL_SHORT','JCSE'),
    'longName'=>env('JRNL_LONG','Journal of Corrosion Science and Engineering'),
    'issn'=>env('JRNL_ISSN','1466-8858'),
    'description'=>env('JRNL_DESC','The electronic journal for all aspects of corrosion'),
    'mailToAdmin'=>env('JRNL_MAIL_TO_ADMIN','<a href="mailto:Admin@jcse.org">JCSE Administration</a>'),
    'adminEmail'=>'admin@jcse.org',
    'mailToEditor'=>env('JRNL_MAIL_TO_EDITOR','<a href="mailto:Editor@jcse.org">Editor in Chief</a>'),
    'maxVol'=>env('JRNL_MAX_VOL','22'),
    'reviewQuestions'=>['referencing'=>[2,2,3,3,4,5,6],
        'method'=>[1,1,2,3,4,5,6],
        'error'=>[1,1,2,3,4,5,6], //must be error, not errors to avoid conflict with errors in form
        'correctness'=>[1,1,2,3,4,5,6],
        'clarity'=>[2,2,3,3,4,5,6],
        'plagiarism'=>[0,0,0,0,4,5,6],
        'legal'=>[0,0,0,0,4,5,6]],
    'recommendations'=>['suspend','reject','major_revision','minor_revision','accept','not able to judge','not relevant'],
    'noReplyID'=>env('JRNL_NOREPLYID','1'),
    'adminID'=>env('JRNL_ADMINID','2'),
    'editorID'=>env('JRNL_EDITORID','3')
];

