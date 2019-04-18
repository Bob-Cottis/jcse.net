<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class dbXferController extends Controller
{
    // transfers data from old JCSE database to jcseNew

    // Before running this need to set up jcseNew by running migrations
    // use php artisan migrate:fresh

    // Start with tables of constant values
    public function xfr()

    {
        \DB::statement('SET FOREIGN_KEY_CHECKS=0');

            $sql = 'select * from categories;';
            $rst = \DB::connection('mysql_old')->select($sql);
            // change column names in new catergory to match old columns
            $newRst = [];
            foreach ($rst as $r) {
                array_push($newRst, ['id' => $r->ID, 'category' => $r->Category]);
            }
            \DB::table('categories')->delete();
            \DB::table('categories')->insert($newRst);

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

            $sql = 'select * from languages;';
            $rst = \DB::connection('mysql_old')->select($sql);
            // change column names in new table to match old columns
            $newRst = [];
            foreach ($rst as $r) {
                array_push($newRst, ['id' => $r->ID, 'language' => $r->Language, 'code' => '']);
            }
            \DB::table('languages')->delete();
            \DB::table('languages')->insert($newRst);

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

            $sql = 'select * from titles;';
            $rst = \DB::connection('mysql_old')->select($sql);
            // change column names in new table to match old columns

            $newRst = [];
            foreach ($rst as $r) {
                // OLD -> Title	ID
                // NEW -> id 	title
                array_push($newRst, ['id' => $r->ID, 'title' => $r->Title]);
            }
            \DB::table('titles')->delete();
            \DB::table('titles')->insert($newRst);

            \DB::table('users')->delete();
            \DB::table('userprofiles')->delete();

            \DB::connection('mysql_old')->table('mailing_list')->where('ValidEmail', '1')->orderBy('PrimaryKey')->chunk(5, function ($mailing_list) {
                $newRst = [];
                $newRst2 = [];
                foreach ($mailing_list as $r) {
                    // OLD -> PrimaryKey Initials	Surname	Salutation	Address	Organization	Address1	Address2	Address3	Post Code	Telephone	Telex	email
                    //Fax	UMIST_Student	Send_RIP	Comment	Deletion_Year	Categories_ID	Titles_ID	Organization_Types_ID	Countries_ID	Languages_ID
                    //Sources_ID	JCSEPassword	JCSEReg	JCSEConfirm	JCSEMail	JCSEAdminUser	CPCMail	AlumniMail	JCSEEditor	rev_reg	ValidationCode	upsize_ts
                    //ecg_comon	ValidEmail	remember_token
                    // NEW user -> id 	created_at 	updated_at 	email 	password 	remember_token 	userProfile_id
                    // New USer_profile -> id 	created_at 	updated_at 	initials 	surname 	salutation 	organization 	address1 	address2
                    //address3 	postCode 	telephone 	telex 		fax 	category_id 	title_id 	orgType_id 	country_id 	language_id 	source_id 	jrnlMail
                    // if ($r->Titles_ID === null) {$r->Titles_ID = 1;}
                    if ($r->Categories_ID === null) {
                        $r->Categories_ID = 1;
                    }
                    if ($r->Languages_ID === null) {
                        $r->Languages_ID = 1;
                    }
                    // $hashedPassword = Hash::make($r->JCSEPassword);
                    // if ($r->email === null) {$r->email = '';}
                    // if ($r->JCSEPassword === null) {$r->JCSEPassword = '';}

                    array_push($newRst, ['id' => $r->PrimaryKey, 'email' => $r->email, 'plainTextPassword' => $r->JCSEPassword,
                        'userprofile_id' => $r->PrimaryKey, 'organisation' => $r->Organization, 'givenName' => $r->Initials,
                        'familyName' => $r->Surname, 'country_id' => $r->Countries_ID, 'title_id' => $r->Titles_ID]);
                    array_push($newRst2, ['id' => $r->PrimaryKey, 'salutation' => $r->Salutation,
                        'address1' => $r->Address1, 'address2' => $r->Address2, 'address3' => $r->Address3, 'postCode' => $r->{'Post Code'},
                        'telephone' => $r->Telephone, 'telex' => $r->Telex, 'fax' => $r->Fax, 'category_id' => $r->Categories_ID,
                        'orgType_id' => $r->Organization_Types_ID, 'language_id' => $r->Languages_ID, 'source_id' => $r->Sources_ID, 'jrnlMail' => $r->JCSEMail]);
                }
                \DB::table('userProfiles')->insert($newRst2);
                \DB::table('users')->insert($newRst);
            });

            $sql = 'select * from special_volumes;';
            $rst = \DB::connection('mysql_old')->select($sql);

            $newRst = [];
            foreach ($rst as $r) {
                // OLD -> id	vol_name	vol_desc	vol_year	vol_num
                // NEW -> id 	created_at 	updated_at 	name 	description 	year 	number

                array_push($newRst, ['id' => $r->id + 1, 'name' => $r->vol_name, 'description' => $r->vol_desc, 'year' => $r->vol_year, 'number' => $r->vol_num,]);
            }

        \DB::table('specialVolumes')->delete();
        \DB::table('specialVolumes')->insert($newRst);

        \DB::table('papers')->delete();
        \DB::connection('mysql_old')->table('papers')->orderBy('PaperID')->chunk(100, function ($papers) {
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
                array_push($newRst, ['id' => $r->PaperID, 'volume' => $r->Volume, 'paperNumber' => $r->PaperNumber, 'title' => $r->Title, 'authors' => $r->Authors,
                    'authorEmail' => $r->AuthorEmail, 'editor_id' => $r->Editor, 'submissionDate' => $r->SubmissionDate, 'preprintDate' => $r->PreprintDate,
                    'preprintPublished' => $r->PreprintPublished, 'publicationDate' => $r->PublicationDate, 'paperPublished' => $r->PaperPublished,
                    'enableComments' => $r->EnableComments, 'acknowledgedPreprint' => $r->AcknowlegedPreprint,
                    'revisionRequired' => $r->RevisionRequired, 'preprintURL' => $r->PreprintURL, 'paperURL' => $r->PaperURL, 'keywords' => $r->Keywords, 'revisionMessage' => $r->RevisionMessage,
                    'notes' => $r->Notes, 'abstract' => $r->abstract, 'status' => $r->status, 'admin_attn_rqd' => $r->admin_attn_rqd, 'ed_attn_rqd' => $r->ed_attn_rqd,
                    'pp_conf_date' => $r->pp_conf_date, 'revisionReceived' => $r->RevisionReceived, 'refs_assigned' => $r->refs_assigned]);
            }
            \DB::table('papers')->insert($newRst);
        });

        $sql = 'select * from paperauthors;';
        $rst = \DB::connection('mysql_old')->select($sql);
        // change column names in new table to match old columns
        $newRst = [];
        foreach ($rst as $r) {
            // OLD -> PAID	PaperID	AuthorNum	AuthorID	Notes
            // NEW -> id 	created_at 	updated_at 	paper_id 	author_id 	notes 	authorNum
            array_push($newRst, ['id' => $r->PAID, 'paper_id' => $r->PaperID, 'author_id' => $r->AuthorID, 'notes' => $r->Notes, 'authorNum' => $r->AuthorNum]);
        }
        \DB::table('paperauthors')->delete();
        \DB::table('paperauthors')->insert($newRst);


        \DB::table('referees')->delete();

        \DB::connection('mysql_old')->table('refereelink')->orderBy('ID')->chunk(100, function ($refereelink) {
            $newRst = [];
            foreach ($refereelink as $r) {
                // OLD -> ID	Paper	Referee	Date_Sent	Date_Responded	Notes	source	ref_info
                //date_reminded	agreed	completed	dropped	date_completed	recommendation	author_comments	editor_comments
                //referenced	methods	errors	clarity	correct	deleted	file
                // NEW -> id 	created_at 	updated_at 	paper_id 	user_id 	dateSent 	dateResponded 	source 	notes
                //dateReminded 	reminderCount 	agreed 	completed 	dateDropped 	dateCompleted 	recommendation 	authorComments
                //editorComments 	referenced 	method 	errors 	clarity 	correctness 	deleted 	file
                if ($r->recommendation == 'major revision') {
                    $r->recommendation = 'major_revision';
                } elseif ($r->recommendation == 'minor revision') {
                    $r->recommendation = 'minor_revision';
                };
                array_push($newRst, ['id' => $r->ID, 'paper_id' => $r->Paper, 'user_id' => $r->Referee, 'dateSent' => $r->Date_Sent, 'dateResponded' => $r->Date_Responded,
                    'source' => $r->source, 'notes' => $r->Notes, 'dateReminded' => $r->date_reminded, 'agreed' => $r->agreed,
                    'completed' => $r->completed, 'dateDropped' => $r->dropped, 'dateCompleted' => $r->date_completed, 'recommendation' => $r->recommendation, 'authorComments' => $r->author_comments,
                    'editorComments' => $r->editor_comments, 'referenced' => $r->referenced, 'method' => $r->methods, 'errors' => $r->errors, 'clarity' => $r->clarity,
                    'correctness' => $r->correct, 'deleted' => $r->deleted, 'file' => $r->file]);
            }
            \DB::table('referees')->insert($newRst);
        });


        \DB::table('comments')->delete();
        \DB::connection('mysql_old')->table('comm')->orderBy('PaperID')->chunk(100, function ($comm) {
            $newRst = [];
            foreach ($comm as $r) {
                // OLD -> ID	Author	Subject	CommentText	PaperID	Paragraph	CommAuthReg	AuthorConfirmed
                //AuthorObjected	Editor	EditorAccepted	EditorRejected	CreationDate	AuthorConfDate	EditorConfDate
                //PAODate	ConfirmCode	AuthComment	EditorComment	ed_attn_rqd	admin_attn_rqd	upsize_ts

                // NEW ->
                //	id 	created_at 	updated_at 	author_id 	subject 	paper_id 	paragraph 	commAuthReg 	authorConfirmed
                //authorRejected 	editor_id 	editorConfirmed 	editorRejected 	editorAttnReqd 	adminAttnReqd 	editorConfDate
                //authConfDate 	PAODate 	confirmCode 	authorComment 	editorComment 	commentText
                array_push($newRst, ['id' => $r->ID, 'author_id' => $r->Author, 'subject' => $r->Subject, 'paper_id' => $r->PaperID,
                    'paragraph' => $r->Paragraph, 'commAuthReg' => $r->CommAuthReg, 'authorConfirmed' => $r->AuthorConfirmed,
                    'authorRejected' => $r->AuthorObjected, 'editor_id' => $r->Editor, 'editorConfirmed' => $r->EditorAccepted,
                    'editorRejected' => $r->EditorRejected, 'editorAttnReqd' => $r->ed_attn_rqd, 'adminAttnReqd' => $r->admin_attn_rqd,
                    'editorConfDate' => $r->EditorConfDate, 'authConfDate' => $r->AuthorConfDate, 'PAODate' => $r->PAODate,
                    'confirmCode' => $r->ConfirmCode, 'authorComment' => $r->AuthComment, 'editorComment' => $r->EditorComment,
                    'commentText' => $r->CommentText]);
            }
            \DB::table('comments')->insert($newRst);
        });

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
        \DB::statement('SET FOREIGN_KEY_CHECKS=1');

        return view('phpInfo');
    }

}


