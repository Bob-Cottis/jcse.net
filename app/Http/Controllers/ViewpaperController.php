<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Paper;
use App\Models\Comment;


class ViewpaperController extends Controller
{
    //
    public function viewPaper($vol, $pap, $typ=null, $rev=null )
    {
        // if $vol == "ID" then get paper/preprint with id = $pap
        // else get Paper $pap in Volume $vol
        if ($vol == "ID") {
            $paper = Paper::where('id',$pap)->orderBy('revisionNumber','desc')->first();
            $rev = $paper->revisionNumber;
        }
        else {
            if ($rev == null) {
                // find highest revision
                // get paper record
                $paper = Paper::where([['volume', '=', $vol], ['paperNumber', '=', $pap]])
                    ->orderBy('revisionNumber', 'desc')
                    ->first();
                //return view('varDump',['s'=>$paper]);
                if ($paper == null) {
                    // no such paper go process the error
                    dd($paper);
                    return view('error', ['msg' => __('vpMessages.VP_NO_ID',['type' => 'Paper or Preprint','mailAdmin'=>config('mailToAdmin')])]);
                }
                // $paper should have highest revision number
                $rev = $paper['revisionNumber'];
            } else {
                $paper = Paper::where([['volume', '=', $vol], ['paperNumber', '=', $pap], ['revisionNumber', '=', $rev]])
                    ->first();
                if ($paper == null) {
                    // no such paper go process the error
                    // dd($paper);
                    return view('error', ['msg' => __('vpMessages.VP_NO_ID',['type' => 'Paper or Preprint with that revision','mailAdmin'=>config('mailToAdmin')])]);
                }
            }
        }
        $vol = $paper['volume'];
        $pap = $paper['paperNumber'];
        // check whether there are any comments
        $commentCount = Comment::where([['paper_id',$paper['id']],['editorConfirmed',1]])->count();
        // Check for Paper or Preprint published
        if ($typ == null) {
            // show paper if available
            if ($paper['paperPublished']) {
                $typ = 'paper';
            } elseif ($paper['preprintPublished']) {
                    $typ = 'preprint';
            } else {
                return view('error', ['msg' => __('vpMessages.VP_FILE_NOT_FOUND')]);
            }
        }
        //return view('showString',['s'=>'$typ = '.$typ]);
        $txtdir = base_path().sprintf('/txt/');
        $jrnlName = config('jrnl.shortName');
        if ($typ == 'paper') {
            if ($paper['paperHTML']) {
                $htmlname = resource_path() . sprintf('/views/htm/%03d/%s_Volume_%03d_Paper_%03d_Rev_%02d.blade.php',$vol, config('jrnl.shortName'), $vol, $pap, $rev);
                $txtname = $txtdir . sprintf('%03d/JCSE_Volume_%03d_Paper_%03d_Rev_%02d.txt', $vol, $vol, $pap, $rev);
                $URL = route('showHTML', ['typ' => $typ, 'vol' => $vol, 'pap' => $pap, 'rev'=>$rev, 'pap_id' => $paper['id'], 'count' => $commentCount]);
            } else {
                // must be pdf
                $pdfname = base_path() . sprintf('/pdf/%03d/%s_Volume_%03d_Paper_%03d_Rev_%02d.pdf',
                        $vol, $jrnlName, $vol, $pap, $rev);
                $txtname = $txtdir . sprintf('%03d/%s_Volume_%03d_Paper_%03d_Rev_%02d.txt', $vol, $jrnlName, $vol, $pap, $rev);
                $URL = route('showPDF', ['typ' => $typ, 'vol' => $vol, 'pap' => $pap, 'rev' => $rev]);
            }
        }
        else {
            // must be preprint
            if ($paper['preprintHTML']) {
                $htmlname = resource_path() . sprintf('/views/htm/%03d/%s_Volume_%03d_Preprint_%03d_Rev_%02d.blade.php', $vol, $jrnlName, $vol, $pap,$rev);
                $txtname = $txtdir . sprintf('%03d/%s_Volume_%03d_Preprint_%03d_Rev_%02d.txt', $vol, $jrnlName, $vol, $pap, $rev);
                $URL = route('showHTML', ['typ' => $typ, 'vol' => $vol, 'pap' => $pap, 'pap_id' => $paper['id'], 'count' => $commentCount]);
            } else {
                $pdfname = base_path() . sprintf('/pdf/%03d/%s_Volume_%03d_Preprint_%03d_Rev_%02d.pdf',
                        $vol, $jrnlName, $vol, $pap, $rev);
                $txtname = $txtdir . sprintf('%03d/%s_Volume_%03d_Preprint_%03d_Rev_%02d.txt', $vol, $jrnlName, $vol, $pap, $rev);
                $URL = route('showPDF', ['typ' => $typ, 'vol' => $vol, 'pap' => $pap, 'rev' => $rev]);
            }
        }
        //return view('showString',['s'=>$pdfname.'; typ = '.$typ]);
        $txtExists = file_exists($txtname);
        if (!$txtExists) {
            if (!$paper[$typ.'HTML']) {
                $pdf = base_path() . '/uploads/raw_preprint' . $paper['id'] . '.pdf';
                if (!file_exists($pdf)) {
                    $pdf = $pdfname;
                }
                //return view('showString', ['s' => 'txtname=' . $txtname]);
                $pdffile = new \App\Libraries\Pdftotext\PdfToText ($pdf);
                $txtdoc = $pdffile->Text;
            }
            else {
                // html must exist
                $doc = file_get_contents($htmlname);
                $txtdoc = strip_tags($doc);
            }
            if ($txtdoc == '') {
                $txtname = '';
            } else {
                // check that directory exists
                if (!file_exists($txtdir)) {
                    mkdir($txtdir);
                }
                file_put_contents($txtname, $txtdoc);
            }
        };
        // return view('showString',['s'=>'$pdfname='.$pdfname.'; $pdfExists='.$pdfExists.';\n$txtname='.$txtname.'; $txtExists='.$txtExists.';\n$htmlname='.$htmlname.'; $htmlExists='.$htmlExists]);
        if ($paper[$typ.'HTML']) {
            return view('viewPaper', ['html' => 1, 'paper' => $paper, 'URL' => $URL, 'txtname' => $txtname, 'typ' => $typ, 'count'=>$commentCount]);
        } else {
            // dd(['html' => 0, 'paper' => $paper, 'URL' => $URL, 'txtname' => $txtname, 'typ' => $typ, 'count'=>$commentCount]);
            return view('viewPaper', ['html' => 0, 'paper' => $paper, 'URL' => $URL, 'txtname' => $txtname, 'typ' => $typ, 'count'=>$commentCount]);
        }
        // nothing published
        return view('error', ['msg' => 'vpmessages.VP_PAPER_MISSING', 'param' => ['type' => 'Paper or Preprint']]);
    }

    // show paper or preprint for PDF versions
    public function showPDF($typ, $vol, $pap, $rev=1)
    {
        // download pdf file
        // files stored at /storage/pdf
        // file location is /storage/pdf/(vol as nn)/(vnnnpannnrx.pdf for paper or vnnnprnnnrx.pdf for preprint)
        //      where x is the revision number starting at 1.
        $pathToFile = base_path() . sprintf('/pdf/%03d/JCSE_Volume_%03d_%s_%03d_Rev_%02d.pdf', $vol, $vol,ucfirst($typ), $pap, $rev);
        return response()->download($pathToFile);
    }

    public function showHTML($typ, $vol, $pap, $rev, $commentCount)
    {
        // show HTML file
        // files stored at /resource/views/htm
        // file location is /resource/views/htm/vvv/JCSE_Volume_vvv_Paper_nnn_Rev_rr.blade.php
        $fname = sprintf('htm.%03d.JCSE_Volume_%03d_%s_%03d_Rev_%02d',$vol,$vol,ucfirst($typ),$pap,$rev);
        // return $fname;
        // need to construct comment list to append to HTML
        $paper = Paper::select('id as pap_id')->where('volume',$vol)->where('paperNumber',$pap)->first();
        $pap_id = $paper->pap_id;
        $comments=\DB::table('comments')->
            where([['editorConfirmed',1],['paper_id',$pap_id]])->
            join('users','comments.commAuthor_id','=','users.id')->
            select('users.givenName as givenName','users.familyName as familyName','comments.subject as subject',
            'comments.paragraph as paragraph','comments.commentText as text','comments.paper_id as pap_id',
            'comments.created_at as creationDate','comments.updated_at as updateDate')->
            get();
        // return view('varDump',['s'=>$comments]);
        return view('showHTML',['fname'=>$fname]);
    }

/*    protected function convertHTML($htmlname, $htmltyp, $vol, $pap)
    {
        // called if PDF file doesn't exists and HTML file has not yet been converted
        $oldfname = public_path() . sprintf('/html/volume%d/paper%d/v%d%s%d.php', $vol, $pap, $vol, $htmltyp, $pap);
        if (!file_exists($oldfname)) {
            return view('error',['msg' => 'vpMessages.VP_PAPER_MISSING', 'param' => ['type' => $htmltyp]]);
        }
        // convert old file to new format
        // load file
        $doc = file_get_contents($oldfname);
        //return $doc;
        if (!$doc)
        {
            return false;
        }
        // delete laravel info
        $st = strpos($doc, 'content)');
        $doc = substr($doc, $st + 8);
        // and @endsection
        $doc = substr($doc, 0, -11);
        // handle 'empty' comments
        $search = '>comment();<';
        $count = 1;
        $newdoc='';
        $pos = strpos($doc,$search);
        while ($pos !== false) {
            $newdoc = $newdoc.substr($doc,0,$pos+9).$count;
            $doc = substr($doc,$pos+9);
            $pos = strpos($doc,$search);
            $count++;
        }
        $doc = $newdoc.$doc;
        //return $doc;
        $search = ['~(.*)(<h2>volume)~isU',
            '~<SCRIPT>notify();</SCRIPT>~i',
            '~<script>var lgi=.*false\'\\);\\} \?>;</script>~',
            '~<script src="/jsinc/writeh.*ggl_ad\\(\\); \?>~',
            '~<SCRIPT>comment\\(([0-9]+)\\);?</SCRIPT>\\s*(<H\\d>|<p[^>]*>|<br>|<br />)~si',
            '~(<img.*src=")(.*)(")~siU',
            "~<script>ifnotmode\\(3,\'(.*)\'\\);</script>~i",
            '~<script>.?footer\(\).*~isU',
            '~<SCRIPT src="http://www.jcse.org/jsinc/authnote.js"></SCRIPT>~',
            '~<SCRIPT>notify\\(\\);</SCRIPT>~',
            '~</body>~isU',
            '~</html>~isU'];

        $replace = [
            '<h2>JCSE Volume',
            '',
            '',
            '',
            '$2&sect;$1 ',
            '$1' . asset(sprintf('/html/volume%d/paper%d', $vol, $pap)) . '/$2$3',
            '$1',
            '',
            '',
            '',
            '',
            ''];
        //return ['s'=>['search' => $search, 'replace' => $replace]];
        $doc = preg_replace($search, $replace, $doc);
        //return $doc;
        return file_put_contents($htmlname, $doc);
    }*/
}
