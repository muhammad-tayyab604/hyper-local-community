<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class commentController extends Controller
{
    public function submitComment(Request $request)
    {
        try {
            $request->validate([
                "name" => ["required", "string"],
                'email' => ['required', 'string'],
                'comment' => ['required', 'string'],
            ]);
            $comment = new Comment();
            $comment->blog_id = $request->blog_id;
            $comment->name = $request->name;
            $comment->email = $request->email;
            $comment->comment = $request->comment;
            $comment->save();
            return redirect()->back()->with('commentSubmit', 'Comment submitted');
        } catch (\Exception $ex) {
            return redirect()->back()->with('commentNotSubmit', $ex->getMessage());
        }
    }
}
