<?php
/**
 * Created by PhpStorm.
 * User: Daan
 * Date: 21/01/2018
 * Time: 16:54
 */

namespace App\Http\Controllers;

use App\Comment;
use App\User;
use App\Post;
use Illuminate\Http\Request;
use Auth;
use Session;

class CommentsController extends Controller
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

    public function show($id)
    {
        $post = Post::with('comments.user')->findOrFail($id);

        $comments = $post->comments;

        return view('comments', compact('post', 'comments'));
    }

    public function addComment(Request $request)
    {
        $this->validate($request, [
            'text' => 'required|min:5'
        ]);
        $comment = new Comment;
        $comment->user_id = Auth::user()->id;
        $comment->post_id = $request->post_id;
        $comment->text = $request->text;
        $comment->save();
        return back();
    }
    public function editComment(Comment $comment) {

        return view('edit_comment', compact('comment'));

    }

    public function updateComment(Request $request, Comment $comment)
    {
        $comment->update($request->all());
        Session::flash('comment', $comment->id);

        return back();
    }
    public function deleteComment(Comment $comment ){

        Session::flash('status', $comment->id);
        return back();

    }

    public function deleteCommentSure(Request $request, Comment $comment){

        if (isset($request->cancel)) {
            $comment = Comment::findOrFail($request->cancel);
            return back();
        }
        elseif (isset($request->delete)) {
            $comment->delete();

            Session::flash('deleted', $comment->id);
            return redirect(url('/comments', $comment->post_id));

        }

    }
}