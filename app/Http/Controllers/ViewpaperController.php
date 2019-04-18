<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Paper;
use App\Models\Comment;


class ViewpaperController extends Controller
{
    //
    public function viewPaper($vol, $pap, $rev=null)
    {
        if ($rev==null) {
            // find highest revision
            // get paper record
            $paper = Paper::where([['volume', '=', $vol], ['paperNumber', '=', $pap]])
                ->orderBy('revisionNumber','desc')
                ->first();
            //return view('varDump',['s'=>$paper]);
            if ($paper == null) {
                // no such paper go process the error
                return view('error', ['msg' => 'vpMessages.VP_NO_ID', 'param' => ['type' => 'Paper or Preprint']]);
            }
            // $paper should have highest revision number
            $rev=$paper['revisionNumber'];
        }
        else
        {
            $paper = Paper::where([['volume', '=', $vol], ['paperNumber', '=', $pap], ['revisionNumber','=',$rev]])
                ->first();
            if ($paper == null) {
                // no such paper go process the error
                return view('error', ['msg' => 'vpMessages.VP_NO_ID', 'param' => ['type' => 'Paper or Preprint with that revision']]);
            }
        }
        // uncomment next line to check contents of $paper
        // return view('viewParams', ['paper'=>$paper]);
        // check whether there are any comments
        $commentCount = Comment::where([['paper_id',$paper['id']],['editorConfirmed',1]])->count();
        // Check for Paper or Preprint published
        if ($paper['paperPublished'] || $paper['preprintPublished']) {
            // check for PDF, HTML and TEXT files and pass appropriate filenames for view
            if ($paper['paperPublished']) {
                $typ = 'paper';
                $htmltyp = 'p';
            } else {
                $typ = 'preprint';
                $htmltyp = $typ;
            }
            $pdfname = base_path() . sprintf('/pdf/%02d/JCSE_Volume_%02d_' . ucfirst($typ) .
                    '_%03d_Rev_%02d.pdf', $paper['volume'], $paper['volume'], $paper['paperNumber'], $rev);
            $htmlname = resource_path() . sprintf('/views/htm/v%02d%s%03d.blade.php', $vol, $htmltyp, $pap);
            $txtdir = base_path().sprintf('/txt/%02d',$vol);
            $txtname = $txtdir . sprintf('/JCSE_Volume_%02d_%s_%03d_Rev_%02d.txt', $vol, ucfirst($typ), $pap, $rev);
            //return view('showString',['s'=>'HTMLname ='.$htmlname.'; pdfname ='.$pdfname]);
            $pdfExists = file_exists($pdfname);
            if (!$pdfExists) {
                $pdfname = '';
                $pdfURL = '';
            } else {
                $pdfURL = route('showPDF',['typ'=>$typ, 'vol'=>$vol, 'pap'=>$pap, 'rev'=>$rev]);
            }
            $htmlExists = file_exists($htmlname);
            if (!$htmlExists && !$pdfExists) {
                // no PDF file, so there should be an HTML file
                $htmlExists = $this->convertHTML($htmlname, $htmltyp, $vol, $pap );
                //return view('varDump',['s'=>$htmlExists]);
                //return view('showString',['s'=>$htmlExists]);
            }
            if (!$htmlExists) {
                $htmlname = '';
                $htmlURL = '';
            } else {
                $htmlURL = route('showHTML', ['typ'=>$typ, 'vol'=>$vol, 'pap'=>$pap, 'pap_id'=>$paper['id'],'count'=>$commentCount ]);
            }
            $txtExists = file_exists($txtname);
            if (!$txtExists) {
                if ($pdfExists) {
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
                    // but make sure
                    if ($htmlExists) {
                        $doc = file_get_contents($htmlname);
                        $txtdoc = strip_tags($doc);
                    }
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

            if ($htmlExists || $pdfExists) {
                // one or both files exist - go to display them
                // return view('varDump', ['s'=>['paper' => $paper, 'htmlURL' => $htmlURL, 'pdfURL' => $pdfURL, 'txtname' => $txtname, 'typ' => $typ, 'count'=>$commentCount]]);
                if ($htmlExists) {$pageOrPara = 'Paragraph';} else {$pageOrPara = 'Page';}
                return view('viewPaper', ['paper' => $paper, 'htmlURL' => $htmlURL, 'pdfURL' => $pdfURL, 'txtname' => $txtname, 'typ' => $typ, 'pageOrPara'=>$pageOrPara,'count'=>$commentCount]);
            } else {
                //return view('showString',['s'=>'File '.$pdfname.' found']);
                // PDF exists - check for TEXT file for guests
                // neither paper nor preprint published - issue error message
                return view('error', ['msg' => 'vpMessages.VP_PAPER_MISSING', 'param' => ['type' => $typ]]);
            }
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
        $pathToFile = base_path() . sprintf('/pdf/%02d/JCSE_Volume_%02d_%s_%03d_Rev_%02d.pdf', $vol, $vol,ucfirst($typ), $pap, $rev);
        return response()->download($pathToFile);
    }

    public function showHTML($typ, $vol, $pap, $pap_id, $commentCount)
    {
        // show HTML file
        // files stored at /resource/views/htm
        // file location is /resource/views/htm/(vnnpnnn.blade.php)
        //      where x is the revision number starting at 1.
        // $pathToFile = resource_path() . sprintf('/views/htm/v%02d%s%03d.blade.php', $vol, $htmltyp, $pap);
        if ($typ=="paper") {$typ = 'p';}
        $fname = (sprintf('htm.v%02d%s%03d', $vol, $typ, $pap));
        //return $fname;
        // need to construct comment list to append to HTML

        $comments=\DB::table('comments')->
            where([['editorConfirmed',1],['paper_id',$pap_id]])->
            join('users','comments.author_id','=','users.id')->
            select('users.givenName as givenName','users.familyName as familyName','comments.subject as subject',
            'comments.paragraph as paragraph','comments.commentText as text','comments.paper_id as pap_id',
            'comments.created_at as creationDate','comments.updated_at as updateDate')->
            get();
        // return view('varDump',['s'=>$comments]);
        return view('showHTML',['fname'=>$fname,'comments'=>$comments]);
    }

    protected function convertHTML($htmlname, $htmltyp, $vol, $pap)
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
    }
}
