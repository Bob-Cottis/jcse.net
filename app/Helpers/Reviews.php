<?php
namespace App\Helpers;

use App\Models\Paper;
use App\Models\Review;
use Carbon\Carbon;

class Reviews
{
    public static function completed()
    {
        $completed = \DB::table('reviews')
            ->select('paper_id', \DB::raw('count(*) as count'))
            ->where('completed', 1)
            ->groupBy('paper_id')
            ->having('count', '>', 1)
            ->get()
            ->toArray();
        $completed = array_column($completed, 'paper_id');
        // dd($completed);
        $completedArray = \DB::table('papers')
            ->select('id', 'title', 'authors')
            ->whereIn('id', $completed)
            ->where('paperPublished', 0)
            ->get()
            ->toArray();
        // dd($completedArray);
        return $completedArray;
    }

    /**
     * @return array - papers awaiting nomination of reviewers
     */
    public static function awaingNomination()
    {
        // for now rely on paper state, but should check for 4 reviewers nominated and not rejected
        $awaitingNomination = Paper::where('state', 'submitted')
            ->select('title', 'authors', 'id', 'volume', 'paperNumber')
            ->get()
            ->toArray();
        return $awaitingNomination;
    }

    public static function reviewOverdue()
    {
        $ro = \DB::table('reviews')
            ->join('users', 'reviews.user_id', '=', 'users.id')
            ->join('titles', 'users.title_id', '=', 'titles.id')
            ->join('papers', 'reviews.paper_id', '=', 'papers.id')
            ->where('reviews.agreed', 1)
            ->where('reviews.completed', 0)
            ->whereNull('reviews.dateDropped')
            ->whereRaw("DATEDIFF('" . Carbon::now() . "',reviews.dateResponded)  > 60")
            ->select('papers.title as paperTitle', 'papers.volume as vol', 'papers.paperNumber as pap', 'papers.authors',
                'titles.title', 'users.givenName', 'users.familyName',
                'reviews.id')
            ->get();
        // dd($ro);
        return $ro;
    }

    /**
     * @return array of reviews awaiting reply from reviewer
     */
    public static function notResponded()
    {
        $reviews = \DB::table('reviews')
            ->join('users', 'reviews.user_id', '=', 'users.id')
            ->join('titles', 'users.title_id', '=', 'titles.id')
            ->join('papers', 'reviews.paper_id', '=', 'papers.id')
            ->whereNotNull('dateSent')
            ->whereNull('dateResponded')
            ->select('papers.title as paperTitle', 'papers.authors', 'papers.volume as vol', 'papers.paperNumber as pap',
                'titles.title', 'users.givenName', 'users.familyName', 'reviews.id')
            ->get();
        //dd($reviews);
        return $reviews;
    }

}
