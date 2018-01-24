<?php
/**
 * Created by PhpStorm.
 * User: Daan
 * Date: 21/01/2018
 * Time: 16:56
 */

namespace App\Http\Controllers;
use App\User;
use App\Post;
use App\Vote;
use Illuminate\Http\Request;
use Auth;
use Session;


class PostController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'instructies');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(){

        $posts= Post::orderBy('vote_count', 'DESC')->get();

        $votes = Vote::all();


        // $vote = $votes->all();
        //$vote = $vote2['attributes'];
        // var_dump($votes);

        return view('overview', compact('posts','votes'));

    }

    public function instructies() {

        return view('instructies');

    }

    public function addPostForm(){
        return view('add_post');
    }

    public function addPost(Request $request)
    {

        $this->validate($request, [
            'title' => 'required|max:255',
            'url' => 'required|url'
        ]);
        $post = new Post;
        $post->user_id = Auth::id();
        $post->vote_count = 0;
        $post->title = $request->title;
        $post->link = $request->url;
        $post->save();

        Session::flash('article', $post->title);
        return redirect('/');
    }

    public function editPost(Post $post) {

        return view('edit_post', compact('post'));

    }
    public function updatePost(Request $request, Post $post) {

        $post->update($request->all());

        return redirect('/');

    }


    public function deletePost( Post $post ){


        Session::flash('status', 'delete');
        return back();



    }

    public function deletePostSure(Request $request, Post $post){

        // $post = App\Post::find($id);
        if (isset($request->cancel)) {
            $post = Post::findOrFail($request->cancel);
            return back();
        }
        elseif (isset($request->delete)) {
            $post->delete();

            Session::flash('status', $post->title);
            return redirect('/');
        }


    }


}
