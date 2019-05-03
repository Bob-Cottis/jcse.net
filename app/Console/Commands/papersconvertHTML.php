<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class papersconvertHTML extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'papers:convertHTML';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Updates html papers';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //
        $papers = \App\Models\Paper::distinct('volume','paperNumber')->get();
        foreach ($papers as $paper) {
            $vol = $paper->volume;
            $pap = $paper->paperNumber;
            $oldHtmlPaperName = base_path(sprintf('resources/views/htm/volume%d/paper%d/v%dp%d.php',$vol,$pap,$vol,$pap));
            $oldHtmlPreprintName = base_path(sprintf('resources/views/htm/volume%d/paper%d/v%dpreprint%d.php',$vol,$pap,$vol,$pap));
            $newHtmlPaperName = base_path(sprintf('htm/%03d/%03d/JCSE_Volume_%03d_Paper_%03d_Rev_01.pdf',$vol,$pap,$vol,$pap));
            $newHtmlPreprintName =  base_path(sprintf('htm/%03d/%03d/JCSE_Volume_%03d_Preprint_%03d_Rev_01.pdf',$vol,$pap,$vol,$pap));
            if (!file_exists($oldHtmlPaperName)) {
                // mark format as not html
                $paper->paperHTML = 0;
            } else {
                // mark format as HTML
                $paper->paperHTML = 1;

                // now convert paper
                $this->convertHTML($newHtmlPaperName,$oldHtmlPaperName);
            }
            if (!file_exists($oldHtmlPreprintName)) {
                // mark format as not html
                $paper->preprintHTML = 0;
            } else {
                // mark format as HTML
                $paper->preprintHTML = 1;

                // now convert paper
                $this->convertHTML($newHtmlPreprintName, $oldHtmlPreprintName);
            }

        }
    }

    protected function convertHTML($htmlname, $oldName)
    {
        // load file
        $doc = file_get_contents($oldName);
        //return $doc;
        if (!$doc)
        {
            return false;
        }
        // handle empty comments
        $search = '>comment();<';
        $count = 1;
        $newdoc='';
        $pos = strpos($doc,$search);
        while ($pos !== false) {
            $newdoc = $newdoc.substr($doc,0,$pos+9).'&sect;'.$count;
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
