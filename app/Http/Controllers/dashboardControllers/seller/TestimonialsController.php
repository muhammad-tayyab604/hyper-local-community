<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialsController extends Controller
{

    /**
     * Display a listing of the testimonials.
     */
    public function index()
    {
        $testimonials = Testimonial::all();
        return view('admin.testimonials.index', compact('testimonials'));
    }


    /**
     * Show the form for creating a new testimonial.
     */

    public function create()
    {
        return view('admin.testimonials.create');
    }

    /**
     * Store a newly created testimonial in database.
     */

    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required',
                'address' => 'required',
                'description' => 'required',
            ]);

            $testimonial = new Testimonial();
            $testimonial->name = $request->name;
            $testimonial->address = $request->address;
            $testimonial->description = $request->description;
            if ($request->file('image')) {
                $file = $request->file('image');
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('Image/testimonial/'), $filename);
                $testimonial->image = $filename;
            }
            $testimonial->save();
            return redirect()->back()->with('success', 'Testimonial Created successfully');

        } catch (\Exception $ex) {
            return redirect()->back()->with('Error', $ex->getMessage());

        }
    }

    /**
     * Update the specific testimonial from database.
     */
    public function edit($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        return view('admin.testimonials.edit', compact('testimonial'));
    }


    /**
     * Update the specific testimonial from database.
     */
    public function update(Request $request, string $id)
    {
        try {
            $request->validate([
                'name' => 'required',
                'address' => 'required',
                'description' => 'required',
            ]);

            $testimonial = Testimonial::find($id);
            $testimonial->name = $request->name;
            $testimonial->address = $request->address;
            $testimonial->description = $request->description;
            if ($request->file('image')) {
                $file = $request->file('image');
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('Image/testimonial/'), $filename);
                $testimonial->image = $filename;
            }
            $testimonial->update();
            return redirect()->back()->with('success', 'Testimonial Updated successfully');

        } catch (\Exception $ex) {
            return redirect()->back()->with('Error', $ex->getMessage());

        }
    }


    /**
     * Display the specified testimonial.
     */

    public function show(string $id)
    {
        $testimonial = Testimonial::findOrFail($id);
        return view('admin.testimonials.show', compact('testimonial'));
    }

    /**
     * Remove the specified testimonial from database.
     */
    public function delete(Request $request)
    {
        $testimonial = Testimonial::find($request->deleted_id);
        $testimonial->delete();
        return redirect('/index-testimonials')->with('success', 'testimonial deleted successfully');

    }


    // Fetching testimonial in home page
    public function fetchNewTestimonials()
    {

        // Fetch new testimonials from the database
        $newTestimonials = Testimonial::where('created_at', '>', now()->subDays(7))->get();

        // Generate HTML for the new testimonials (you can create a Blade view for this)
        $newTestimonialsHtml = view('partials.testimonials', compact('newTestimonials'))->render();

        return $newTestimonialsHtml;
    }
}