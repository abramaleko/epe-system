<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $comments=Comment::all();
        return view('settings.comments')->with('comments',$comments);
    }

    public function addComment(Request $request)
    {
        Comment::firstOrCreate([
            'name' => $request->name,
            'comment_weight' =>$request->comment_weight
        ]);

        return back();
    }

    public function updateComment($id, Request $request)
    {
        $comment = Comment::find($id);
        $comment->name = $request->name;
        $comment->comment_weight = $request->comment_weight;
        $comment->save();

        return back();
    }

    public function deleteComment($id)
    {
        Comment::destroy($id);

        return back();
    }
}
