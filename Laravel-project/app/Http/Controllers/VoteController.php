<?php
/**
 * Created by PhpStorm.
 * User: Daan
 * Date: 21/01/2018
 * Time: 16:57
 */

namespace App\Http\Controllers;

use App\User;
use App\Post;
use App\Vote;
use Illuminate\Http\Request;
use Auth;
use Session;
use DB;
class VoteController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('show');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function upVote(Request $request, Post $post)
    {


        $vote = new Vote;

        $vote->updateOrCreate(array('user_id' => Auth::user()->id, 'post_id' => $post->id, 'value' => 0 ), array('hasUpvoted' => 0, 'hasDownvoted' => 1));
        // $vote->update();



        $count = $post->vote_count;
        $count++;
        $post->vote_count = $count;
        $post->update();


        Session::flash('upvote', $post->title);
        return redirect()->back();


    }

    public function downVote(Request $request, Post $post)
    {

        $vote = new Vote;

        $vote->updateOrCreate(array('user_id' => Auth::user()->id, 'post_id' => $post->id, 'value' => 0), array('hasUpvoted' => 1, 'hasDownvoted' => 0));
        // $vote->update();
        $count = $post->vote_count;
        $count--;
        $post->vote_count = $count;
        $post->update();

        Session::flash('downvote', $post->title);

        return redirect()->back();

    }


}
