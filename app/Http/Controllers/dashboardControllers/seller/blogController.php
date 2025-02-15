<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogContent;
use App\Models\Comment;
use Illuminate\Http\Request;

class blogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('admin.blog.index', compact('blogs'));
    }

    public function create()
    {
        return view('admin.blog.create');
    }
    public function show($id)
    {
        $comments = Comment::where('blog_id', $id)->get();
        $totalComments = $comments->count();
        $blog = Blog::findOrFail($id);
        $subBlogs = BlogContent::where('blog_id', $id)->get();
        return view('admin.blog.show', compact('blog', 'subBlogs', 'comments', 'totalComments'));
    }

    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        $subBlogs = BlogContent::where('blog_id', $id)->get();
        return view('admin.blog.edit', compact('blog', 'subBlogs'));
    }
    public function store(Request $request)
    {
        try {
            $request->validate([
                'title' => 'required',
                'content' => 'required',
            ]);

            // Create the main blog entry
            $blog = new Blog();
            $blog->title = $request->title;
            $blog->content = $request->content;

            if ($request->file('image')) {
                $file = $request->file('image');
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('Image/blog/'), $filename);
                $blog->image = $filename;
            }

            $blog->save();

            // Handle Dynamic Content if provided
            if ($request->has('sub_title')) {
                $subTitles = $request->input('sub_title');
                $subImages = $request->file('sub_image');
                $subDescriptions = $request->input('sub_description');

                foreach ($subTitles as $index => $subTitle) {
                    $blogContent = new BlogContent();
                    $blogContent->blog_id = $blog->id;
                    $blogContent->sub_title = $subTitle;

                    // Check if a corresponding image is provided
                    if (isset($subImages[$index])) {
                        $file = $subImages[$index];
                        if ($file !== null) { // Check if the file exists
                            $filename = date('YmdHi') . $file->getClientOriginalName();
                            $file->move(public_path('Image/blog/'), $filename);
                            $blogContent->sub_image = $filename;
                        }
                    }

                    // Check if sub_description exists
                    if (isset($subDescriptions[$index])) {
                        $blogContent->sub_description = $subDescriptions[$index];
                    }

                    $blogContent->save();
                }
            }

            return redirect()->back()->with('success', 'Blog added successfully');

        } catch (\Exception $ex) {
            return redirect()->back()->with('Error', $ex->getMessage());
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'title' => 'required',
                'content' => 'required',
            ]);

            // Create the main blog entry
            $blog = Blog::find($id);
            $blog->title = $request->title;
            $blog->content = $request->content;

            if ($request->file('image')) {
                $file = $request->file('image');
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('Image/blog/'), $filename);
                $blog->image = $filename;
            }

            $blog->update();

            // Handle Dynamic Content if provided
            if ($request->has('sub_title')) {
                $subTitles = $request->input('sub_title');
                $subImages = $request->file('sub_image');
                $subDescriptions = $request->input('sub_description');

                foreach ($subTitles as $index => $subTitle) {
                    $blogContent = BlogContent::find($id);
                    $blogContent->blog_id = $blog->id;
                    $blogContent->sub_title = $subTitle;

                    // Check if a corresponding image is provided
                    if (isset($subImages[$index])) {
                        $file = $subImages[$index];
                        if ($file !== null) { // Check if the file exists
                            $filename = date('YmdHi') . $file->getClientOriginalName();
                            $file->move(public_path('Image/blog/'), $filename);
                            $blogContent->sub_image = $filename;
                        }
                    }

                    // Check if sub_description exists
                    if (isset($subDescriptions[$index])) {
                        $blogContent->sub_description = $subDescriptions[$index];
                    }

                    $blogContent->update();
                }
            }

            return redirect()->back()->with('success', 'Blog Updated successfully');

        } catch (\Exception $ex) {
            return redirect()->back()->with('Error', $ex->getMessage());
        }
    }

    public function delete(Request $request)
    {
        $blog = Blog::find($request->deleted_id);
        $blog->delete();
        return redirect('/blog-index')->with('success', 'Blog deleted successfully');

    }

    public function commentDelete(Request $request)
    {
        $comment = Comment::find($request->deleted_id);

        if ($comment) {
            $comment->delete();
            return redirect()->back()->with('success', 'Comment deleted successfully');
        } else {
            return redirect()->back()->with('error', 'Comment not found or already deleted');
        }
    }

}
