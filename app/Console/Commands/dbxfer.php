<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Paper;
use App\Models\User;
use App\Models\Userprofile;
use App\Models\Keyword;
use App\Models\Review;
use App\Helpers\Keywords;
use App\Helpers\Users;

class dbxfer extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:dbxfer {table=All}';

    /**
     * The console command description.
     *
     * @var string
     */

    protected $titles_array = [];

    protected $bar=null;

    protected $description = 'Transfers JCSE database from jcse_old to jcse_new';

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

    // transfers data from old JCSE database to jcseNew

    // Before running this need to set up jcseNew by running migrations
    // use php artisan migrate:fresh

    // Start with tables of constant values
    public function handle()

    {
        $table = $this->argument('table');
        switch ($table) {
            case 'Categories':
                $this->info($this->processCategories());
                break;
            case 'Countries':
                $this->info($this->processCountries());
                break;
            case 'Languages':
                $this->info($this->processLanguages());
                break;
            case 'OrganizationTypes':
                $this->info($this->processOrganizationTypes());
                break;
            case 'Sources':
                $this->info($this->processSources());
                break;
            case 'Titles':
                $this->info($this->processTitles());
                break;
            case 'Users':
                $this->info($this->processUsers());
                break;
            case 'SpecialVolumes':
                $this->info($this->processSpecialVolumes());
                break;
            case 'Papers':
                $this->info($this->processPapers());
                break;
            case 'PaperAuthors':
                $this->info($this->processPaperAuthors());
                break;
            case 'Reviews':
                $this->info($this->processReviews());
                break;
            case 'Comments':
                $this->info($this->processComments());
                break;
            case 'Notify':
                $this->info($this->processNotify());
                break;
/*            case 'Topics':
                $this->info($this->processTopics());
                break;*/
            case 'ProcRefInfo':
                $this->info($this->processRefInfo());
                break;
            case 'Keywords':
                $this->info($this->processKeywords());
                break;
            case 'CleanKeywords':
                $this->info($this->cleanKeywords());
                break;
            case 'DeDuplicateKeywords':
                $this->info(Keywords::de_dupe().';');
                break;
            case 'SetAdminEditors':
                $this->info($this->addAdminEditors());
                break;
            case 'CleanPapers':
                $this->cleanPapers();
                break;
            case 'CleanReviews':
                $this->cleanReviews();
                break;
            case 'AddAuthors':
                $this->addAuthors();
                break;
            case 'AddNoReply':
                $this->addNoReply();
                break;
            case'UpdatePaperFormat':
                $this->processPaperFormat();
                break;
            case 'All':
                $this->info('Starting conversion of database');
                /* $confirm = $this->ask('database will be completely cleared - are you sure you want to proceed y/N');
                if($confirm != 'y') {
                    break;
                }
                $this->info('migrate:fresh will be run to clear the database and update migrations.');
                $confirm = $this->ask('Are you really sure you want to do this? y/N');
                if($confirm != 'y') {
                    $this->info('Aborting.');
                    break;
                }

                $this->info($this->clearDatabase());*/
                $this->info($this->processCategories());
                $this->info($this->processCountries());
                $this->info($this->processLanguages());
                $this->info($this->processOrganizationTypes());
                $this->info($this->processSources());
                $this->info($this->processTitles());
                $this->info($this->processUsers());
            case 'SpecialVolumesOn':
                $this->info($this->processSpecialVolumes());
            case 'PapersOn':
                $this->info($this->processPapers());
                $this->info($this->processPaperAuthors());
            case 'RefOn':
                $this->info($this->processReviews());
                $this->info($this->processComments());
                $this->info($this->processNotify());
                $this->info($this->processKeywords());
                $this->info($this->processRefInfo());
                $this->info($this->cleanKeywords());
                $this->info($this->addAdminEditors());
                $this->info($this->addNoReply());
                $this->info($this->processPaperFormat());
                $this->info($this->cleanReviews());
                break;
        }
    }

    function clearDatabase() {
        $exitCode = Artisan::call('migrate:fresh');
        if($exitCode != 0) {
            $this->error('php artisan migrate:fresh failed - check state of database, ensure that it contains no tables and try again.');
            exit(['status'=>'Migrate failed']);
        }

    }

    function processCategories() {
        $this->info('Starting processing categories');
        $sql = 'select * from categories;';
        $rst = \DB::connection('mysql_old')->select($sql);
        // change column names in new catergory to match old columns
        $newRst = [];
        foreach ($rst as $r) {
            array_push($newRst, ['id' => $r->ID, 'category' => $r->Category]);
        }
        \DB::table('categories')->delete();
        \DB::table('categories')->insert($newRst);

        return 'Categories transferred';
    }
    function processCountries()
    {
        $this->info('Starting processing countries');
        $sql = 'select * from countries;';
        $rst = \DB::connection('mysql_old')->select($sql);
        // change column names in new table to match old columns
        $newRst = [];
        foreach ($rst as $r) {
            if ($r->Code === null) {
                $r->Code = 'XX';
            }
            array_push($newRst, ['id' => $r->ID, 'country' => $r->Country, 'telCode' => $r->Code, 'code' => $r->CCode]);
        }
        \DB::table('countries')->delete();
        \DB::table('countries')->insert($newRst);
        return 'Countries transferred';
    }

    function processLanguages() {
        $this->info('Starting processing languages');
        $sql = 'select * from languages;';
        $rst = \DB::connection('mysql_old')->select($sql);
        // change column names in new table to match old columns
        $newRst = [];
        foreach ($rst as $r) {
            array_push($newRst, ['id' => $r->ID, 'language' => $r->Language, 'code' => '']);
        }
        \DB::table('languages')->delete();
        \DB::table('languages')->insert($newRst);

        return 'Languages transferred';
    }
    function processOrganizationTypes() {
        $this->info('Starting processing organization_types');

        $sql = 'select * from organization_types;';
        $rst = \DB::connection('mysql_old')->select($sql);
        // change column names in new table to match old columns
        $newRst = [];
        foreach ($rst as $r) {
            // Organization Type	ID
            array_push($newRst, ['id' => $r->ID, 'organizationType' => $r->{'Organization Type'}]);
        }
        \DB::table('organizationtypes')->delete();
        \DB::table('organizationtypes')->insert($newRst);

       return 'Organizationtypes transferred';
    }

    function processSources() {
        $this->info('Starting processing sources');

        $sql = 'select * from sources;';
        $rst = \DB::connection('mysql_old')->select($sql);
        // change column names in new table to match old columns
        $newRst = [];
        foreach ($rst as $r) {
            // OLD -> Source	ID
            // NEW -> id 	created_at 	updated_at 	source
            array_push($newRst, ['id' => $r->ID, 'source' => $r->Source]);
        }
        \DB::table('sources')->delete();
        \DB::table('sources')->insert($newRst);

        return 'Sources transferred';
    }

    function processTitles() {
        $this->info('Starting processing titles');

        $newRst = [];
        $this->titles_array = [];
        $sql = 'select * from titles;';
        $rst = \DB::connection('mysql_old')->select($sql);
        // change column names in new table to match old columns
        foreach ($rst as $r) {
            // OLD -> Title	ID
            // NEW -> id 	title
            array_push($newRst, ['id' => $r->ID, 'title' => $r->Title]);
            $this->titles_array = $this->titles_array + [$r->ID => $r->Title];
        }
        \DB::table('titles')->delete();
        \DB::table('titles')->insert($newRst);

        return 'Titles transferred';
    }

    function processUsers() {
        $this->info('Starting processing users');

        \DB::table('users')->delete();
        \DB::table('userprofiles')->delete();

        //$count = \DB::connection('mysql_old')->table('mailing_list')->count();
        //$this->bar = $this->output->createProgressBar($count);
        //$this->bar->start();

        $count = 1;
        \DB::connection('mysql_old')->table('mailing_list')->orderBy('PrimaryKey')->chunk(500, function ($mailing_list) use (&$count) {
            $newRst = [];
            $newRst2 = [];
            foreach ($mailing_list as $r) {
                $email = $r->email;
                if (!strpos($email, "@") || empty($email)) {
                    // skip email
                } else {
                    // OLD -> PrimaryKey Initials	Surname	Salutation	Address	Organization	Address1	Address2	Address3	Post Code	Telephone	Telex	email
                    //Fax	UMIST_Student	Send_RIP	Comment	Deletion_Year	Categories_ID	Titles_ID	Organization_Types_ID	Countries_ID	Languages_ID
                    //Sources_ID	JCSEPassword	JCSEReg	JCSEConfirm	JCSEMail	JCSEAdminUser	CPCMail	AlumniMail	JCSEEditor	rev_reg	ValidationCode	upsize_ts
                    //ecg_comon	ValidEmail	remember_token
                    // NEW user -> id 	created_at 	updated_at 	email 	password 	remember_token 	userprofile_id
                    // New USer_profile -> id 	created_at 	updated_at 	initials 	surname 	salutation 	organization 	address1 	address2
                    //address3 	postCode 	telephone 	telex 		fax 	category_id 	title_id 	orgType_id 	country_id 	language_id 	source_id 	jrnlMail
                    // if ($r->Titles_ID === null) {$r->Titles_ID = 1;}
                    $r->Titles_ID  = $r->Titles_ID ?? 1;
                    // make space at the beginning for special users
                    if($r->PrimaryKey == 2) {
                        $r->PrimaryKey = 6;
                    }
                    $hashedPassword = Hash::make($r->JCSEPassword);
                    // if ($r->email === null) {$r->email = '';}
                    // if ($r->JCSEPassword === null) {$r->JCSEPassword = '';}

                    // clean emails (already done)
                    // $email = $r->email;
                    // if (!strpos($email, "@")) {
                    //     $email = null;

                    $email = str_replace('"', '', $email);
                    array_push($newRst, ['id' => $r->PrimaryKey, 'email' => $email, 'plainTextPassword' => $r->JCSEPassword,
                        'password' => $hashedPassword, 'userprofile_id' => $r->PrimaryKey, 'organization' => $r->Organization, 'givenName' => $r->Initials,
                        'familyName' => $r->Surname, 'country_id' => ($r->Countries_ID ?? 1), 'title_id' => $r->Titles_ID]);
                    array_push($newRst2, ['id' => $r->PrimaryKey, 'user_id' => $r->PrimaryKey, 'salutation' => ($r->Salutation ?? $this->titles_array[$r->Titles_ID] . ' ' . $r->Surname),
                        'address1' => $r->Address1, 'address2' => $r->Address2, 'address3' => $r->Address3, 'postCode' => $r->{'Post Code'},
                        'telephone' => $r->Telephone, 'telex' => $r->Telex, 'fax' => $r->Fax, 'category_id' => ($r->Categories_ID ?? 1),
                        'orgType_id' => $r->Organization_Types_ID, 'language_id' => ($r->Languages_ID ?? 1), 'source_id' => $r->Sources_ID, 'jrnlMail' => $r->JCSEMail]);
                    //$this->bar->advance();
                }
            }
            $recs = $count*500;
            $this->output->write("\r".$recs.' records transferred');
            $count++;
            \DB::statement('SET FOREIGN_KEY_CHECKS=0;');
            \DB::table('userprofiles')->insert($newRst2);
            \DB::table('users')->insert($newRst);
            //$this->bar->finish();
            \DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        });

        return 'Users transferred';

    }

    function processSpecialVolumes() {
        $this->info('Starting processing Special Volumes');

        $sql = 'select * from special_volumes;';
        $rst = \DB::connection('mysql_old')->select($sql);

        $newRst = [];
        foreach ($rst as $r) {
            // OLD -> id	vol_name	vol_desc	vol_year	vol_num
            // NEW -> id 	created_at 	updated_at 	name 	description 	year 	number

            array_push($newRst, ['id' => $r->id + 1, 'name' => $r->vol_name, 'description' => $r->vol_desc, 'year' => $r->vol_year, 'number' => $r->vol_num,]);
        }

        \DB::table('specialvolumes')->delete();
        \DB::table('specialvolumes')->insert($newRst);

        return 'Special Volumes transferred';

    }

    function processPapers() {
        $this->info('Starting processing papers');
        \DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        \DB::table('papers')->delete();
        \DB::connection('mysql_old')->table('papers')
            ->where('PreprintPublished',1)
            ->orWhere('PaperPublished',1)
            ->orWhereNotNull('PreprintDate')
            ->orWhereNotNull('PublicationDate')
            ->orderBy('PaperID')
            ->chunk(100, function ($papers) {
            $newRst = [];
            foreach ($papers as $r) {
                // OLD -> PaperID	Volume	PaperNumber	Title	Authors	AuthorEmail	Editor	SubmissionDate	PreprintDate
                //PreprintPublished	PublicationDate	PaperPublished	EnableComments	AcknowlegedPreprint	RevisionRequired
                //RevisionReceived	Printer	PreprintURL	PaperURL	Keywords	RevisionMessage	Notes	abstract
                //refs_assigned	ed_attn_rqd	admin_attn_rqd	status	pp_conf_date

                // NEW -> id	created_at	updated_at	volume	paperNumber	title	authors	authorEmail	editor_id	submissionDate
                //preprintDate	preprintPublished	publicationDate	paperPublished	enableComments	acknowledgedPreprint
                //revisionRequired	preprintURL	paperURL	keywords	revisionMessage	notes	abstract	status	admin_attn_rqd
                //ed_attn_rqd pp_conf_date	revisionReceived	refs_assigned
                if ($r->Editor == 0) {
                    $r->Editor = null;
                }
                $state = 'submitted';
                if($r->PaperPublished) {
                    $state = 'published';
                }
                elseif($r->PreprintPublished) {
                    $state = 'revApproved';
                }
                $log = now()." Database entry transferred from V1.0\n";
                $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                $permitted_chars .= $permitted_chars;
                $confirmCode = substr(str_shuffle($permitted_chars), 0, 30);
                array_push($newRst, ['id' => $r->PaperID, 'volume' => $r->Volume, 'paperNumber' => $r->PaperNumber,
                    'title' => $r->Title, 'authors' => $r->Authors, 'authorEmail' => $r->AuthorEmail, 'editor_id' => $r->Editor,
                    'submissionDate' => $r->SubmissionDate, 'preprintDate' => $r->PreprintDate, 'preprintPublished' => $r->PreprintPublished,
                    'publicationDate' => $r->PublicationDate, 'paperPublished' => $r->PaperPublished, 'enableComments' => $r->EnableComments,
                    'acknowledgedPreprint' => $r->AcknowlegedPreprint, 'revisionRequired' => $r->RevisionRequired,
                    'preprintURL' => $r->PreprintURL, 'paperURL' => $r->PaperURL, 'keywords' => $r->Keywords,
                    'revisionMessage' => $r->RevisionMessage, 'notes' => $r->Notes, 'abstract' => $r->abstract, 'status' => $r->status,
                    'admin_attn_rqd' => $r->admin_attn_rqd, 'ed_attn_rqd' => $r->ed_attn_rqd, 'pp_conf_date' => $r->pp_conf_date,
                    'revisionReceived' => $r->RevisionReceived, 'refs_assigned' => $r->refs_assigned,'version'=>2, 'state'=>$state,
                    'confirmCode'=>$confirmCode,'log' => $log]);
                }
            \DB::table('papers')->insert($newRst);
        });
        \DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        return 'Papers transferred';
    }

    function processPaperAuthors() {
        $this->info('Starting paper authors');
        $sql = 'select * from paperauthors;';
        $rst = \DB::connection('mysql_old')->select($sql);
        // change column names in new table to match old columns
        $newRst = [];
        foreach ($rst as $r) {
            // OLD -> PAID	PaperID	AuthorNum	AuthorID	Notes
            // NEW -> id 	created_at 	updated_at 	paper_id 	author_id 	notes 	authorNum
            array_push($newRst, ['id' => $r->PAID, 'paper_id' => $r->PaperID, 'author_id' => $r->AuthorID, 'notes' => $r->Notes, 'authorNum' => $r->AuthorNum]);
        }
        \DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        \DB::table('paperauthors')->delete();
        \DB::table('paperauthors')->insert($newRst);
        \DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        return 'Paper Authors transferred';
    }

    function processReviews() {
        $this->info('Started transferring reviews');
        \DB::table('reviews')->delete();

        \DB::connection('mysql_old')->table('refereelink')->orderBy('ID')->chunk(100, function ($refereelink) {
            $newRst = [];

            $recs = ['suspend','reject','major revision','minor revision','accept'];
            foreach ($refereelink as $r) {
                // OLD -> ID	Paper	Review	Date_Sent	Date_Responded	Notes	source	ref_info
                //date_reminded	agreed	completed	dropped	date_completed	recommendation	author_comments	editor_comments
                //referenced	methods	errors	clarity	correct	deleted	file
                // NEW -> id 	created_at 	updated_at 	paper_id 	user_id 	dateSent 	dateResponded 	source 	notes
                //dateReminded 	reminderCount 	agreed 	completed 	dateDropped 	dateCompleted 	recommendation 	authorComments
                //editorComments 	referenced 	method 	errors 	clarity 	correctness 	deleted 	file

                if(is_null($r->recommendation)) {
                    $r->recommendation = -1;
                }
                else {
                    $r->recommendation = array_search($r->recommendation,$recs);
                }
                if(is_null($r->methods)) {$r->methods = -1;}
                if(is_null($r->errors)) {$r->errors = -1;}
                if(is_null($r->clarity)) {$r->clarity = -1;}
                if(is_null($r->correct)) {$r->correct = -1;}
                if(is_null($r->referenced)) {$r->referenced = -1;}
               array_push($newRst, ['id' => $r->ID, 'paper_id' => $r->Paper, 'user_id' => $r->Referee, 'dateSent' => $r->Date_Sent, 'dateResponded' => $r->Date_Responded,
                    'source' => $r->source, 'notes' => $r->Notes, 'dateReminded' => $r->date_reminded, 'agreed' => $r->agreed,
                    'completed' => $r->completed, 'dateDropped' => $r->dropped, 'dateCompleted' => $r->date_completed, 'recommendation' => $r->recommendation, 'authorComments' => $r->author_comments,
                    'editorComments' => $r->editor_comments, 'referencingRating' => $r->referenced, 'methodRating' => $r->methods, 'errorRating' => $r->errors, 'clarityRating' => $r->clarity,
                    'correctnessRating' => $r->correct, 'deleted' => $r->deleted, 'file' => $r->file]);
            }
            \DB::statement('SET FOREIGN_KEY_CHECKS=0;');
            \DB::table('reviews')->insert($newRst);
            \DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        });
        return 'Reviews transferred';
    }

    function processRefInfo() {
        $this->info('Started processing RefInfo table');
        // get distinct referee entries that have a non-zero ref_info field
        $sql = "SELECT refereelink.ref_info, refereelink.ID, refereelink.Referee, mailing_list.email, mailing_list.surname, mailing_list.PrimaryKey "
            . "FROM refereelink "
            . "JOIN mailing_list on refereelink.Referee = mailing_list.Primarykey "
            . "WHERE mailing_list.Surname is NULL AND refereelink.ref_info <>'' AND refereelink.ID in (select max(ID) from refereelink group by Referee)";
        $refs = \DB::connection('mysql_old')->select($sql);
        // return print_r($refs);
        foreach ($refs as $ref) {
            $user = \App\Models\User::where('id',$ref->Referee)->first();
            if (!is_null($user)) {
                if ($ref->ref_info <> 'name=&address=') {
                    preg_match('#name=(.*)&addr=(.*)#', $ref->ref_info, $matches);
                    if ($matches[1] <> '') {
                        $m = $matches[1];
                        if (preg_match('#^(Professor|Dr\.|Dr|Prof\. Dr\.|Prof\.Dr\.|Prof Dr|Assoc\. Prof\.|Mr\.|Mr)(.*)#', $matches[1], $m) == 1) {
                            switch ($m[1]) {
                                case 'Professor':
                                case 'Prof':
                                case 'Prof.':
                                    $user->title_id = 20;
                                    break;
                                case 'Dr':
                                case 'Dr.':
                                    $user->title_id = 5;
                                    break;
                                case 'Prof Dr':
                                case 'Prof. Dr.':
                                case 'Prof.Dr.':
                                    $user->title_id = 21;
                                    break;
                                case 'Assoc. Prof.':
                                    $user->title_id = 3;
                                    break;
                                case 'Mr.':
                                case 'Mr':
                                    $user->title_id = 17;
                                    break;
                            }
                            $name = $m[2];      // remove any leading space
                        } else {
                            $name = $matches[1];
                        }
                        $name = trim($name);
                        $lastSpacePosition = strrpos($name, ' ');
                        if ($lastSpacePosition==0) {
                            $user->familyName = $name;
                        }
                        else {
                            $user->givenName = substr($name, 0, $lastSpacePosition);
                            $user->familyName = substr($name, $lastSpacePosition + 1);
                        }
                    }
                    if ($matches[2] <> '') {
                        $user->organization = $matches[2];
                    }
                }
                $user->source = 'ref_info';
                $user->save();
            }
        }
        return 'ref_info processed - scan users table [SQL = SELECT id, familyName FROM `users` WHERE source=\'ref_info\' and title_id=1] to check for odd results';
        }

    function processComments() {
        $this->info('Started transferring comments');
        \DB::table('comments')->delete();
        \DB::connection('mysql_old')->table('comm')->orderBy('PaperID')->chunk(100, function ($comm) {
            $newRst = [];
            foreach ($comm as $r) {
                // OLD -> ID	Author	Subject	CommentText	PaperID	Paragraph	CommAuthReg	AuthorConfirmed
                //AuthorObjected	Editor	EditorAccepted	EditorRejected	CreationDate	AuthorConfDate	EditorConfDate
                //PAODate	ConfirmCode	AuthComment	EditorComment	ed_attn_rqd	admin_attn_rqd	upsize_ts

                // NEW ->
                //	id 	created_at 	updated_at 	commAuthor_id 	subject 	paper_id 	paragraph 	commAuthReg 	authorConfirmed
                //authorRejected 	editor_id 	editorConfirmed 	editorRejected 	editorAttnReqd 	adminAttnReqd 	editorConfDate
                //authConfDate 	PAODate 	confirmCode 	authorComment 	editorComment 	commentText
                array_push($newRst, ['id' => $r->ID, 'commAuthor_id' => $r->Author, 'subject' => $r->Subject, 'paper_id' => $r->PaperID,
                    'paragraph' => $r->Paragraph, 'commAuthReg' => $r->CommAuthReg, 'authorConfirmed' => $r->AuthorConfirmed,
                    'authorRejected' => $r->AuthorObjected, 'editor_id' => $r->Editor, 'editorConfirmed' => $r->EditorAccepted,
                    'editorRejected' => $r->EditorRejected, 'editorAttnReqd' => $r->ed_attn_rqd, 'adminAttnReqd' => $r->admin_attn_rqd,
                    'editorConfDate' => $r->EditorConfDate, 'authConfDate' => $r->AuthorConfDate, 'PAODate' => $r->PAODate,
                    'confirmCode' => $r->ConfirmCode, 'authorComment' => $r->AuthComment, 'editorComment' => $r->EditorComment,
                    'commentText' => $r->CommentText]);
            }
            \DB::statement('SET FOREIGN_KEY_CHECKS=0;');
            \DB::table('comments')->insert($newRst);
            \DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        });

        return 'Comments transferred';
    }

    function processNotify() {
        $this->info('Started transferring notify table');
        \DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        $sql = 'select * from notify;';
        $rst = \DB::connection('mysql_old')->select($sql);
        // change column names in new table to match old columns
        $newRst = [];
        $count = 1;
        foreach ($rst as $r) {
            array_push($newRst, ['id' => $count, 'paper_id' => $r->PaperID, 'user_id' => $r->PersonID]);
            $count += 1;
        }
        \DB::table('notifies')->delete();
        \DB::table('notifies')->insert($newRst);
        \DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        return 'Notify transferred';
    }

/*    function processTopics()
    {
        $newRst = [];
        $i = 0;
        $newRst = [['id' => ++$i, 'synonym' => $i,'topic' => 'Atmosphere', 'topicGroup' => 'Environment'],
            ['id' => ++$i, 'synonym' => $i,'topic' => 'Soil', 'topicGroup' => 'Environment'],
            ['id' => ++$i, 'synonym' => $i,'topic' => 'Natural Waters', 'topicGroup' => 'Environment'],
            ['id' => ++$i, 'synonym' => $i,'topic' => 'Acids', 'topicGroup' => 'Environment'],
            ['id' => ++$i, 'synonym' => $i,'topic' => 'Alkalis', 'topicGroup' => 'Environment'],
            ['id' => ++$i, 'synonym' => $i,'topic' => 'High Temperature', 'topicGroup' => 'Environment'],
            ['id' => ++$i, 'synonym' => $i,'topic' => 'Molten Salt', 'topicGroup' => 'Environment'],
            ['id' => ++$i, 'synonym' => $i,'topic' => 'Uniform ', 'topicGroup' => 'Corrosion Type'],
            ['id' => ++$i, 'synonym' => $i,'topic' => 'Pitting', 'topicGroup' => 'Corrosion Type'],
            ['id' => ++$i, 'synonym' => $i,'topic' => 'Crevice', 'topicGroup' => 'Corrosion Type'],
            ['id' => ++$i, 'synonym' => $i,'topic' => 'Erosion', 'topicGroup' => 'Corrosion Type'],
            ['id' => ++$i, 'synonym' => $i,'topic' => 'Stress Corrosion Cracking', 'topicGroup' => 'Corrosion Type'],
            ['id' => ++$i, 'synonym' => $i,'topic' => 'Corrosion Fatigue', 'topicGroup' => 'Corrosion Type'],
            ['id' => ++$i, 'synonym' => $i,'topic' => 'Differential Aeration', 'topicGroup' => 'Corrosion Type'],
            ['id' => ++$i, 'synonym' => $i,'topic' => 'Microbial', 'topicGroup' => 'Corrosion Type'],
            ['id' => ++$i, 'synonym' => $i,'topic' => 'Materials Selection', 'topicGroup' => 'Protection Methods'],
            ['id' => ++$i, 'synonym' => $i,'topic' => 'Organic Coatings', 'topicGroup' => 'Protection Methods'],
            ['id' => ++$i, 'synonym' => $i,'topic' => 'Inorganic Coatings', 'topicGroup' => 'Protection Methods'],
            ['id' => ++$i, 'synonym' => $i,'topic' => 'Cathodic Protection', 'topicGroup' => 'Protection Methods'],
            ['id' => ++$i, 'synonym' => $i,'topic' => 'Anodic Protection', 'topicGroup' => 'Protection Methods'],
            ['id' => ++$i, 'synonym' => $i,'topic' => 'Inhibitors', 'topicGroup' => 'Protection Methods'],
            ['id' => ++$i, 'synonym' => $i,'topic' => 'Microscopy', 'topicGroup' => 'Experimental Methods'],
            ['id' => ++$i, 'synonym' => $i,'topic' => 'Electrochemistry', 'topicGroup' => 'Experimental Methods'],
            ['id' => ++$i, 'synonym' => $i,'topic' => 'Modelling', 'topicGroup' => 'Experimental Methods'],
            ['id' => ++$i, 'synonym' => $i,'topic' => 'Scanning Methods', 'topicGroup' => 'Experimental Methods'],
            ['id' => ++$i, 'synonym' => $i,'topic' => 'Exposure Testing', 'topicGroup' => 'Experimental Methods'],
            ['id' => ++$i, 'synonym' => $i,'topic' => 'Oil and Gas', 'topicGroup' => 'Industry'],
            ['id' => ++$i, 'synonym' => $i,'topic' => 'Marine', 'topicGroup' => 'Industry'],
            ['id' => ++$i, 'synonym' => $i,'topic' => 'Chemical', 'topicGroup' => 'Industry'],
            ['id' => ++$i, 'synonym' => $i,'topic' => 'Water Treatment', 'topicGroup' => 'Industry'],
            ['id' => ++$i, 'synonym' => $i,'topic' => 'Corrosion Engineering', 'topicGroup' => 'Industry'],
            ['id' => ++$i, 'synonym' => $i,'topic' => 'Monitoring', 'topicGroup' => 'Industry'],
            ['id' => ++$i, 'synonym' => $i,'topic' => 'Nuclear', 'topicGroup' => 'Industry'],
            ['id' => ++$i, 'synonym' => $i,'topic' => 'Cast Iron', 'topicGroup' => 'Material'],
            ['id' => ++$i, 'synonym' => $i,'topic' => 'Carbon Steel', 'topicGroup' => 'Material'],
            ['id' => ++$i, 'synonym' => $i,'topic' => 'Low Alloy Steel', 'topicGroup' => 'Material'],
            ['id' => ++$i, 'synonym' => $i,'topic' => 'Stainless steel', 'topicGroup' => 'Material'],
            ['id' => ++$i, 'synonym' => $i,'topic' => 'Light Alloy', 'topicGroup' => 'Material'],
            ['id' => ++$i, 'synonym' => $i,'topic' => 'Copper-base Alloy', 'topicGroup' => 'Material'],
            ['id' => ++$i, 'synonym' => $i,'topic' => 'Superalloy', 'topicGroup' => 'Material'],
            ['id' => ++$i, 'synonym' => $i,'topic' => 'Other Alloy', 'topicGroup' => 'Material'],
            ['id' => ++$i, 'synonym' => $i,'topic' => 'Education', 'topicGroup' => 'Industry'],
            ['id' => ++$i, 'synonym' => $i,'topic' => 'Other Topic', 'topicGroup' => 'Miscellaneous'],
            ['id' => ++$i, 'synonym' => $i,'topic' => 'Non-metal', 'topicGroup' => 'Material'],
            ['id' => ++$i, 'synonym' => $i,'topic' => 'Cavitation', 'topicGroup' => 'Corrosion Type'],
            ['id' => ++$i, 'synonym' => $i,'topic' => 'Liquid Metal', 'topicGroup' => 'Environment']
            ];

        \DB::table('topics')->insert($newRst);

        $this->info('Topic created');
    }*/

    function processKeywords()
    {
        $this->info('Started processing Keywords');
        // empty relevant tables
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        \App\Models\Keyword::truncate();
        DB::statement('TRUNCATE keyword_user;');
        DB::statement('TRUNCATE keyword_paper;');
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $newRst = [];
        $i = 0;
        $newRst = [['id' => ++$i, 'synonym_id' => $i,'keyword' => 'soil','log'=>'Added at database transfer by Admin','preferred'=>1],
            ['id' => ++$i, 'synonym_id' => $i,'keyword' => 'natural water','log'=>'Added at database transfer by Admin','preferred'=>1],
            ['id' => ++$i, 'synonym_id' => $i,'keyword' => 'acid','log'=>'Added at database transfer by Admin','preferred'=>1],
            ['id' => ++$i, 'synonym_id' => $i,'keyword' => 'alkali','log'=>'Added at database transfer by Admin','preferred'=>1],
            ['id' => ++$i, 'synonym_id' => $i,'keyword' => 'high temperature','log'=>'Added at database transfer by Admin','preferred'=>1],
            ['id' => ++$i, 'synonym_id' => $i,'keyword' => 'molten salt','log'=>'Added at database transfer by Admin','preferred'=>1],
            ['id' => ++$i, 'synonym_id' => $i,'keyword' => 'uniform corrosion','log'=>'Added at database transfer by Admin','preferred'=>1],
            ['id' => ++$i, 'synonym_id' => $i,'keyword' => 'pitting corrosion','log'=>'Added at database transfer by Admin','preferred'=>1],
            ['id' => ++$i, 'synonym_id' => $i,'keyword' => 'crevice corrosion','log'=>'Added at database transfer by Admin','preferred'=>1],
            ['id' => ++$i, 'synonym_id' => $i,'keyword' => 'erosion corrosion','log'=>'Added at database transfer by Admin','preferred'=>1],
            ['id' => ++$i, 'synonym_id' => $i,'keyword' => 'stress corrosion cracking','log'=>'Added at database transfer by Admin','preferred'=>1],
            ['id' => ++$i, 'synonym_id' => $i,'keyword' => 'corrosion fatigue','log'=>'Added at database transfer by Admin','preferred'=>1],
            ['id' => ++$i, 'synonym_id' => $i,'keyword' => 'differential aeration','log'=>'Added at database transfer by Admin','preferred'=>1],
            ['id' => ++$i, 'synonym_id' => $i,'keyword' => 'microbial corrosion','log'=>'Added at database transfer by Admin','preferred'=>1],
            ['id' => ++$i, 'synonym_id' => $i,'keyword' => 'materials selection','log'=>'Added at database transfer by Admin','preferred'=>1],
            ['id' => ++$i, 'synonym_id' => $i,'keyword' => 'organic coating','log'=>'Added at database transfer by Admin','preferred'=>1],
            ['id' => ++$i, 'synonym_id' => $i,'keyword' => 'inorganic coating','log'=>'Added at database transfer by Admin','preferred'=>1],
            ['id' => ++$i, 'synonym_id' => $i,'keyword' => 'cathodic protection','log'=>'Added at database transfer by Admin','preferred'=>1],
            ['id' => ++$i, 'synonym_id' => $i,'keyword' => 'anodic protection','log'=>'Added at database transfer by Admin','preferred'=>1],
            ['id' => ++$i, 'synonym_id' => $i,'keyword' => 'corrosion inhibitor','log'=>'Added at database transfer by Admin','preferred'=>1],
            ['id' => ++$i, 'synonym_id' => $i,'keyword' => 'microscopy','log'=>'Added at database transfer by Admin','preferred'=>1],
            ['id' => ++$i, 'synonym_id' => $i,'keyword' => 'electrochemistry','log'=>'Added at database transfer by Admin','preferred'=>1],
            ['id' => ++$i, 'synonym_id' => $i,'keyword' => 'modelling','log'=>'Added at database transfer by Admin','preferred'=>1],
            ['id' => ++$i, 'synonym_id' => $i,'keyword' => 'scanning method','log'=>'Added at database transfer by Admin','preferred'=>1],
            ['id' => ++$i, 'synonym_id' => $i,'keyword' => 'exposure testing','log'=>'Added at database transfer by Admin','preferred'=>1],
            ['id' => ++$i, 'synonym_id' => $i,'keyword' => 'oil and gas industry','log'=>'Added at database transfer by Admin','preferred'=>1],
            ['id' => ++$i, 'synonym_id' => $i,'keyword' => 'marine industry','log'=>'Added at database transfer by Admin','preferred'=>1],
            ['id' => ++$i, 'synonym_id' => $i,'keyword' => 'chemical industry','log'=>'Added at database transfer by Admin','preferred'=>1],
            ['id' => ++$i, 'synonym_id' => $i,'keyword' => 'water treatment','log'=>'Added at database transfer by Admin','preferred'=>1],
            ['id' => ++$i, 'synonym_id' => $i,'keyword' => 'corrosion engineering','log'=>'Added at database transfer by Admin','preferred'=>1],
            ['id' => ++$i, 'synonym_id' => $i,'keyword' => 'corrosion monitoring','log'=>'Added at database transfer by Admin','preferred'=>1],
            ['id' => ++$i, 'synonym_id' => $i,'keyword' => 'nuclear industry','log'=>'Added at database transfer by Admin','preferred'=>1],
            ['id' => ++$i, 'synonym_id' => $i,'keyword' => 'cast iron','log'=>'Added at database transfer by Admin','preferred'=>1],
            ['id' => ++$i, 'synonym_id' => $i,'keyword' => 'carbon steel','log'=>'Added at database transfer by Admin','preferred'=>1],
            ['id' => ++$i, 'synonym_id' => $i,'keyword' => 'low alloy steel','log'=>'Added at database transfer by Admin','preferred'=>1],
            ['id' => ++$i, 'synonym_id' => $i,'keyword' => 'stainless steel','log'=>'Added at database transfer by Admin','preferred'=>1],
            ['id' => ++$i, 'synonym_id' => $i,'keyword' => 'light alloy','log'=>'Added at database transfer by Admin','preferred'=>1],
            ['id' => ++$i, 'synonym_id' => $i,'keyword' => 'copper-base alloy','log'=>'Added at database transfer by Admin','preferred'=>1],
            ['id' => ++$i, 'synonym_id' => $i,'keyword' => 'superalloy','log'=>'Added at database transfer by Admin','preferred'=>1],
            ['id' => ++$i, 'synonym_id' => $i,'keyword' => 'education','log'=>'Added at database transfer by Admin','preferred'=>1],
            ['id' => ++$i, 'synonym_id' => $i,'keyword' => 'polymer','log'=>'Added at database transfer by Admin','preferred'=>1],
            ['id' => ++$i, 'synonym_id' => $i,'keyword' => 'cavitation','log'=>'Added at database transfer by Admin','preferred'=>1],
            ['id' => ++$i, 'synonym_id' => $i,'keyword' => 'liquid metal','log'=>'Added at database transfer by Admin','preferred'=>1],
            ['id' => ++$i, 'synonym_id' => $i,'keyword' => 'ceramic','log'=>'Added at database transfer by Admin','preferred'=>1],
            ['id' => ++$i, 'synonym_id' => $i,'keyword' => 'glass','log'=>'Added at database transfer by Admin','preferred'=>1],
        ];
        \DB::table('keywords')->insert($newRst);


        $papers = Paper::select('id', 'keywords', 'volume', 'paperNumber')->where('preprintPublished',1)->get();
        //$this->info(print_r($papers,1));
        foreach ($papers as $paper) {
            Keywords::store($paper);
        }
        $this->info('Keywords added');
    }

    function cleanKeywords()
    {
        $this->info('Started Cleaning Keywords');

        $ignore = [""," ","test", "corrosion", "introduction", "1", "&#34", "experiments", "ace premium enamel", "5cu", "l water extract (TTWE)"];

        $this->info(Keywords::delete($ignore));

        $plural = ["micro fracture events", "cu alloys", "coatings", "dc measurements", "reactor materials",
            "cu-ni alloys", "galvanic interactions", "stainless steels", "non-isothermal systems", "hydrocarbonate solutions",
            "nickel-copper alloys", "corrosion inhibitors", "steels", "zn-al alloy coated steels", "chloride ions", "fuels",
            "compositionally modulated coatings", "layered coatings", "zinc alloys", "deep wells", "chemical additives",
            "hydrate inhibitors", "scale inhibitors", "environmental barrier coatings", "alumina scales", "mcraly coatings",
            "two-phase alloys", "ni-base alloys", "hp-modified alloys", "iii-v semiconductors", "surface-analytical techniques",
            "overlay coatings", "cr-ni-fe-o isotherms", "aluminide coatings", "platinum aluminide coatings", "nickel-superalloys",
            "iron aluminides", "plasma spray coatings", "deposits", "solid fuels", "refractory ceramics", "electrodes", "nickel powders",
            "alloys", "titanium aluminides", "heat-resistant steels", "thermal barrier coatings", "alumina-forming alloys",
            "intermetallics", "oxidation mechanisms", "gold corrosion potentials", "sacrificial anodes", "tanks", "pipelines",
            "ships", "solar powered systems", "on-potentials", "off-potentials", "offshore structures", "zinc coatings",
            "zinc-nickel coatings", "copper alloys", "titanium alloys", "harmonic currents", "organic surfactants",
            "hydrazide derivatives", "corrosive resistant coatings", "thermal treatments", "nuclear power stations",
            "concrete composites", "electrochemically active compounds", "cathodic protection simulations", "pipeline networks",
            "corrosion products", "microstructure parameters", "thermal spray anodes", "anodes", "historic buildings",
            "stray currents", "corrosion-related signatures", "inhibitors", "carrageenas compounds", "conducting polymers",
            "phosphoric irons", "electrochemical parameters", "potentiodynamic and cyclic polarisation curves",
            "high temperatures", "adsorption isotherms", "plant products", "schiff bases", "thiazolidinones",
            "polyurethane dispersion paints", "304l stainless steels", "surfactants", "isotherms", "green inhibitors",
            "aluminium alloys", "soluble salts", "film defects", "zn-ni alloys", "hybrid resins", "corrosion protective coatings",
            "organic inhibitors", "nontraditional oils", "mixed fatty acid thiosemicarbazides", "copper-nickel alloys", "acids",
            "ionic liquids", "acid solutions", "amino acids", "anti-sulfur steels", "phenylazolawsone derivatives",
            "anodic coatings", "micrographs", "pipeline steels", "mirrors", "polymer coatings", "passive films", "nickel-based alloys",
            "vapor phase corrosion inhibitors", "phosphonic acids", "steel pipelines", "metal matrix composites", "ni-cu-co coatings",
            "anti-corrosion pigments", "organic coatings", "trivalent chromium coatings", "zinc-rich paints", "ni-cr coatings",
            "microstructures", "cast aluminium alloys", "thio compounds", "impedance measurements", "manganese germanides",
            "electrochemical equilibrium diagrams", "polarization curves", "a7n01p-t4 aluminum alloys", "welded joints",
            "second phases", "antibiotic compounds", "phytochemical constituents", "ac interferences", "electrochemical tests",
            "weight loss measurements", "loss factors", "intermetallic phases", "primer coatings", "phytochemicals"];

        $this->info(Keywords::singular($plural));

        $replace = ["modelling" => "corrosion modelling", "Cr2O3" => "chromic oxide", "friction stir welds" => "friction stir welding",
            "FSW" => "friction stir welding (FSW)", "h<sub>2</sub>so<sub>4</sub>" => "sulfuric acid", "hcl" => "hydrochloric acid",
            "pitting" => "pitting corrosion", "pt-modified aluminide caotings" => "pt-modified aluminide coating",
            "al alloy" => "aluminium alloy", "sulphate" => "sulfate", "sulphur" => "sulfur", "cr-ni-fe-o isotherms" => "cr-ni-fe-o isotherm",
            "? phase" => "κ phase", "electrodes" => "electrode", "H2S" => "hydrogen sulfide", "cu2o" => "cuprous oxide",
            "al2o3 scales" => "alumina scale", "electro chemical" => "electrochemical", "3-diaminopropane" => "1,3-diaminopropane",
            "onoff&#34" => '"on-off" potential', "and sodium sulphite" => "sodium sulfite", "and oxide barrierÃ¢â‚¬â€œfilm measurement" => "oxide barrier-film measurement",
            "CO2" => "carbon dioxide", "mechanical propertis" => "mechanical properties", "ilamentous carbon" => "filamentous carbon",
            "sulphide and film" => "sulfide film", "and sodium sulphite" => "sodium sulfite", "langmuirâ€™s isotherm" => "Langmuir isotherm",
            "Al-4" => "Al-4.5Cu", "temkinâ€™s adsorption isotherm" => "Temkin adsorption isotherm", "tribulus terrestris" => "Tribulus terrestris .L water extract (TTWE)",
            "trans-4-hydroxy-4â€™-stilbazole" => "trans-4-hydroxy-4'-stilbazole", "ni-moâ€“tio2 nanocomposite" => "Ni-Mo-TiO2 nanocomposite",
            "sulphate nickel" => "sulfate nickel", "keywords al-si/sic composite" => "Al-Si/SiC composite","ac-impedance"=>"AC impedance",
            "hastelloyc"=>"Hastelloy C","al (6063) â€“ sicp composite"=>"Al (6063) - SiCP composite","ss316l"=>"316L SS",
            "carbenicillin(cbn)"=>"carbenicillin (CBN)","mn â€“ ge â€“ o system state diagram"=>"Mn-Ge-O system state diagram",
            "mn â€“ ge â€“ o system"=>"Mn-Ge-O system","potential â€“ ph diagram of mn â€“ ge â€“ h2o system"=>"potential-pH diagram of Mn-Ge-H2O system",
            "sulphuric acid"=>"sulfuric acid","Temkin's adsorption isotherm"=>"Temkin adsorption isotherm","1mh2s04"=>"1M H2SO4",
            "carbenicillin( cbn)"=>"carbenicillin (CBN)","mn â€“ ge system"=>"Mn-Ge system"];

        $this->info(Keywords::replace($replace));

        $split = ["henryÃ¢â‚¬â„¢s law and seawater" => ["Henry's Law", "seawater"],
            "pitting and electrochemical noise" => ["pitting corrosion", "electrochemical noise"],
            "rare earth la2o3" => ["rare earth", "lanthanum oxide"],
            "rare-earth ceo2" => ["rare earth", "cerium oxide"],
            "boro-aluminizing corrosion and steam oxidation resistance" => ["boro-aluminizing corrosion", "steam oxidation resistance"],
            "high velocity oxy fuel spray and atmospheric plasma spray" => ["high velocity oxy fuel spray", "atmospheric plasma spray"],
            "in situ study by high temperature x-ray diffraction" => ["in situ", "high temperature x-ray diffraction"],
            "chromia and alumina" => ["chromia", "alumina"],
            "hno<sub>3</sub> and h<sub>2</sub>so<sub>4</sub>" => ["nitric acid", "sulfuric acid"],
            "sem&eds" => ["SEM", "EDS"],
            "oxidation-reduction and blanching degradation" => ["oxidation-reduction", "blanching degradation"],
            "lacl3 time" => ["LaCl3", "time"]
        ];

        $this->info(Keywords::split($split));

        $capital = ["Tafel", "Langmuir", "hepta dentate thio Schiff base","Schiff base", "Schiff bases adsorption",
            "Daqing oilfield", "von Mises stress", "Ni-base alloy", "Cu alloy","Cu-Ni alloy","Ni-Cu-Co coating",
            "DC measurement", "zn-al alloy coated steel","MCrAlY", "HP-modified alloy", "Cr-Ni-Fe-O isotherm",
            "Zn-Ni alloy", "Ni-Cr coating", "A7N01P-T4 aluminum alloy", "AC interference", "III-V semiconductor", "Cu-Cr",
            "304L", "316L", "317L", "254-SMO", "Al-6XN", "Al29-4C", "acidic NaCl", "Al-Li alloy", "Al 2014 alloy", "EBSD", "HVOF",
            "BTA", "AISI 304L", "EIS", "XPS", "API 5l-X52 steel", "Nd-YAG laser", "Lorenz force", "Hurst exponent",
            "Mn-enrichment", "27SiMn","Co-Ta", "TBC lifing", "LPPS", "TGO", "Fe-Al", "Fe-Cr", "NiAl", "InAlP", "PM2000",
            "TiAl", "C", "Nb", "Ni-20Cr coating", "Y segregation and distribution", "Cr-Mo steel", "Ni-Cr coating", "Al coating", "Ni-based alloy",
            "AISI 685", "TEM", "UHV", "Co content", "SOFC", "energy dispersive X-ray analysis", "high temperature x-ray diffraction",
            "x-ray diffraction","MEIS", "RBS", "Al-Cu alloy", "FTIR", "NMR", "XRD",
            "FeCrAl(RE)", "lacl3", "AZ63 magnesium alloy", "CIPS", "3-D svet", "LPR", "HEDP electroplating", "Zn-Ni alloy",
            "3-hydroxy-2-methyl-4-pyrone (HMP)", "tetra-n-butylammonium iodide (TBAI)", "NCBSA", "CVN impact test", "Armco-Fe",
            "Pb melt", "DCVG", "DGPS", "ECDA", "AC corrosion", "BEM", "Langmuir", "SEM", "EDX", "FT-IR", "Al-Mg alloy", "AC impedance",
            "316L stainless steel", "AFM", "ZrSiO4", "JP-8", "B-52", "EGME", "DIEGME", "TRIEGME", "N80", "P110", "X52C", "13Cr",
            "Pt-Ru/C electrode catalyst", "direct ethanol proton exchange membrane fuel cell (DEPEMFC)", "HCl solution",
            "UV-curing", "MgCO3", "Temkin adsorption isotherm", "R", "EFM", "CMC", "CO2/H2S corrosion", "HNO3", "EIP",
            "MMA", "SCC", "H2SO4 solution", "HSLA", "HE", "SSCC", "CO2 corrosion", "linear polarization resistance (LPR)",
            "scanning electron microscopy (SEM)", "X-52 carbon steel", "9Cr-1Mo","316L SS",
            "304L stainless steel", "Eschke test", "Reynolds number", "Inconel 625", "Incoloy 800h", "AISI 316 L powder",
            "N80 steel", "ANOVA", "AISI 304", "AISI 430", "AISI H13 steel", "Freundlich adsorption isotherm", "A", "B",
            "IR spectroscopy", "Taber abrasion", "DFT method", "Al 2024", "steel S275", "FDM-RP", "Taguchi method",
            "ABS M30", "CuAlBe", "Karachi harbour", "manihot esculentum", "Adejo-Ekwenchi isotherm",
            "Incoloy 800 H", "CCS", "supercritical CO2", "A356", "steel Cr13", "NS4 soil solution",
            "tungsten inert gas (TIG)", "shielded metal arc welding (SMAW)", "GRA1 boiler tube steel", "SS 314", "Al+REM",
            "FEM", "SA-516 (grade-70)", "Cr3C2-25NiCr coating", "SEM/EDS morphology", "Al5052", "Al1100", "SiC nano composite",
            "CNG cylinder", "SEM & EDS morphology", "CNG gas tank", "senna auriculata flower extract (SAFE)", "UV",
            "density functional theory (DFT)", "QSAR", "fuzzy analytic hierarchy process (AHP)", "MCDM",
            "technique for order performance by similarity to ideal solutions (TOPSIS)", "pH","ToF SIMS","Zn-Al alloy coated steel",
            "Pt-modified aluminide coating","3-D SVET","Tafel plot","XRF analysis","Tafel method","Weibull distribution",
            "Gumbel distribution","SEM/EDAX analysis","Temkin isotherm","BTA  derivatives","Rockwell hardness",
            "LaCl3","MCrAlY coating"];

        $this->info(Keywords::capitalize($capital));

        $this->info(Keywords::de_dupe());

        $synonyms = ["atmospheric corrosion" => ["atmospheric exposure"],
            "corrosion inhibitor" => ["corrosion inhibitors", "corrosion inhibition", "inhibitor", "inhibitors", "inhibitor concentration"],
            "microbial corrosion" => ["microbiologically influenced corrosion"],
            "electrochemistry" => ["electrochemical techniques", "electrochemical behaviour", "electrochemical studies", "electrochemical"],
            "organic coating" => ["paint"],
            "inorganic coating" => ["anodisation", "anodizing", "anodic coatings"],
            "electrochemical impedance spectroscopy" => ["eis", "electrochemical impedance", "ac-impedance"],
            "sacrificial anode" => ["galvanic anode"],
            "copper-base alloy" => ["copper alloys"],
            "scanning electron microscopy" => ["sem"],
            "hydrogen sulfide" => ["H2S"],
            "304L stainless steel"=>["AISI 304L","304L"],
            "316L stainless steel"=>["316L SS","316L"]
        ];

        $this->info(Keywords::synonyms($synonyms));


        $this->info('Keyword cleaning completed - NOTE THSI DOES NOT CHECK KEYWORDS ADDED AFTER 17th JULY 2019');
        //$this->info('IT ALSO DOES NOT CHECK FOR DUPLICATED KEYWORDS (NEEDS TO BE ADDED)');
    }

    function addAdminEditors() {
        $this->info('Starting adding Administrator and Editors');
        $user = User::where('email','bob.cottis@ntlworld.com')->first();
        $user->userprofile->admin = 1;
        $user->push();
        $users = User::whereIn('title_id',[2,3,20,21])->get();
        // dd($users);
        $count = 1;
        foreach($users as $user) {
            $user->userprofile->editor = 1;
            $user->push();
            $count++;
        }
        return "Admin and Editors have been set for testing, ".$count." records updated";
    }

    function cleanReviews() {
        $this->info('Starting cleanReviews');
        // first remove reviews for deleted papers
        $papers = Paper::select('id')->get()->toArray();
        $papers = array_column($papers,'id');
        $reviews = Review::whereNotIn('paper_id',$papers)->delete();
        $ret = "Reviewer selection for non-existent papers deleted";
        // now go through remaining reviews and sort out duplicates
        $reviews = Review::orderBy('id')->get();
        $last_user_id = -1;
        $last_paper_id = -1;
        foreach($reviews as $review) {
            if($review->paper_id == $last_paper_id && $review->user_id == $last_user_id) {
                // process duplicate line, assume higher id implies entry unused, so delete, but check for non-null dateSent
                if(is_null($review->dataSent)) {
                    $review->delete();
                }
            }
            $last_user_id = $review->user_id;
            $last_paper_id = $review->paper_id;
        }
        return "Reviews cleaned";
    }

    function addAuthors()
    {
        $papers = Paper::get();
        foreach ($papers as $paper) {
            $this->info('Starting addAuthor');
            $authors = $paper->authors;
            $authArray = preg_split("/\,|and/", $authors);
            $count = 1;
            $cleanArray = [];
            foreach ($authArray as $a) {
                if ($a <> "") {
                    $a = trim($a, "12345678910* ");
                    $cleanArray[$count] = ['name'=>$a,'email'=>preg_replace('/\s/', '', $a).'.unknown@example.com'];
                    $count++;
                }
            }
            // dd($cleanArray);
            $authorCollection = $paper->authorCollection;
            $ac = "";
            foreach ($authorCollection as $a) {
                //dd($authorCollection);
                $regArray[$a->pivot->authorNum] = ['name'=>$a->givenName . ' ' . $a->familyName,'email'=>$a->email];
            }
            $la = [];
            foreach($cleanArray as $keyca=>$valca) {
                foreach($regArray as $keyra=>$valra) {
                    $la[$keyca][$keyra] =  levenshtein ( $valca['name'] ,$valra['name'] );
                }
            }
            dd($cleanArray,$regArray,$la);
            $this->info($ac);
            /*if(count($cleanArray)<>count($authorCollection)) {
                $this->info($s = implode("|", $cleanArray) . '::', $ac);
            }*/
        }
    }

    function addNoReply() {
        // first move record with id 2 - now done in addUsers
        \DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        // Add 'special' users
        $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $password = substr(str_shuffle($permitted_chars), 0, 12);
        $password2 = substr(str_shuffle($permitted_chars), 0, 12);
        $password3 = substr(str_shuffle($permitted_chars), 0, 12);
        $password4 = substr(str_shuffle($permitted_chars), 0, 12);
        $hashedPassword = Hash::make($password);
        $hashedPassword2 = Hash::make($password2);
        $hashedPassword3 = Hash::make($password3);
        $hashedPassword3 = Hash::make($password3);
        $newRst = [['id'=>1,'email'=>'no-reply@jcse.org','plainTextPassword' => $password,
            'password' => $hashedPassword, 'userprofile_id' => 1, 'organization' => 'JCSE', 'givenName' => 'JCSE',
            'familyName' => 'no-reply', 'country_id' => 1, 'title_id' => 1],['id'=>2,'email'=>'admin@jcse.org','plainTextPassword' => $password2,
            'password' => $hashedPassword2, 'userprofile_id' => 2, 'organization' => 'JCSE', 'givenName' => 'JCSE',
            'familyName' => 'Admin', 'country_id' => 1, 'title_id' => 1],['id'=>3,'email'=>'editor@jcse.org','plainTextPassword' => $password3,
            'password' => $hashedPassword3, 'userprofile_id' => 3, 'organization' => 'JCSE', 'givenName' => 'JCSE',
            'familyName' => 'Editor', 'country_id' => 1, 'title_id' => 1],['id'=>4,'email'=>'JCSEBot@jcse.org','plainTextPassword' => $password4,
            'password' => $hashedPassword3, 'userprofile_id' => 3, 'organization' => 'JCSE', 'givenName' => 'JCSE',
            'familyName' => 'Robot', 'country_id' => 1, 'title_id' => 1]];
        $newRst2 = [['id' => 1, 'user_id' => 1, 'salutation' => '','address1' => '', 'address2' => '', 'address3' => '', 'postCode' => '',
            'telephone' => '', 'telex' => '', 'fax' => '', 'category_id' => 1,'orgType_id' => 1, 'language_id' => 1, 'source_id' => 1, 'jrnlMail' => 0],
            ['id' => 2, 'user_id' => 2, 'salutation' => 'Administrator','address1' => '', 'address2' => '', 'address3' => '', 'postCode' => '',
            'telephone' => '', 'telex' => '', 'fax' => '', 'category_id' => 1,'orgType_id' => 1, 'language_id' => 1, 'source_id' => 1, 'jrnlMail' => 0],
            ['id' => 3, 'user_id' => 3, 'salutation' => 'Editor','address1' => '', 'address2' => '', 'address3' => '', 'postCode' => '',
            'telephone' => '', 'telex' => '', 'fax' => '', 'category_id' => 1,'orgType_id' => 1, 'language_id' => 1, 'source_id' => 1, 'jrnlMail' => 0],
            ['id' => 4, 'user_id' => 4, 'salutation' => 'Robot','address1' => '', 'address2' => '', 'address3' => '', 'postCode' => '',
                'telephone' => '', 'telex' => '', 'fax' => '', 'category_id' => 1,'orgType_id' => 1, 'language_id' => 1, 'source_id' => 1, 'jrnlMail' => 0]];
        \DB::table('userprofiles')->insert($newRst2);
        \DB::table('users')->insert($newRst);

        \DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        return 'Completed adding special users with ID 1-4';
    }

    function processPaperFormat() {
        $papers = Paper::where('paperPublished',1)->
            orWhere('preprintPublished',1)->
            get();
        foreach($papers as $paper) {
            //dump($pap);
            $vol = $paper->volume;
            $pap = $paper->paperNumber;
            $rev = $paper->revisionNumber;
            $htmlPaperFileName = resource_path() . sprintf('/views/htm/%03d/JCSE_Volume_%03d_Paper_%03d_Rev_%02d.blade.php',$vol, $vol, $pap, $rev);
            $htmlPreprintFileName = resource_path() . sprintf('/views/htm/%03d/JCSE_Volume_%03d_Preprint_%03d_Rev_%02d.blade.php', $vol, $vol, $pap,$rev);
            $paper->paperHTML = file_exists($htmlPaperFileName);
            $paper->preprintHTML = file_exists($htmlPreprintFileName);
            $paper->save();
        }
    }

}

