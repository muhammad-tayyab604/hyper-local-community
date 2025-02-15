<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogContent;
use App\Models\Comment;
use App\Models\Product;
use Illuminate\Http\Request;

class insideBlogController extends Controller
{
    public function insideBlog(Request $request, $id)
    {
        $latestBlogs = Blog::all();
        $blog = Blog::find($id);
        $comments = Comment::where('blog_id', $id)->get();
        $totalComments = $comments->count();
        $sub_blogs = BlogContent::where('blog_id', $id)->get();
        $blogs = Blog::take(3)->get();

        // Handle search
        $search = $request->input('search');
        if ($search) {
            // Query the Blog model to find blogs with a title matching the search input
            $blogs = Blog::where('title', 'like', '%' . $search . '%')->get();
        }

        return view('insideblog', compact('blogs', 'blog', 'latestBlogs', 'sub_blogs', 'comments', 'totalComments'));
    }

}
