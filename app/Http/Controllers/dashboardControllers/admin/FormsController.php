<?php

namespace App\Http\Controllers\dashboardControllers\admin;

use App\Http\Controllers\Controller;
use App\Models\EnquiryValuation;
use App\Models\InfoForm;
use Illuminate\Http\Request;

class FormsController extends Controller
{
    public function formIndex()
    {
        $formIndex = InfoForm::all();
        return view('admin.Form.index', compact('formIndex'));
    }

    public function delete(Request $request)
    {
        $form = InfoForm::find($request->deleted_id);
        $form->delete();
        return redirect()->back()->with('success', 'Form deleted successfully');
    }

    public function show($id)
    {
        $showForm = InfoForm::findOrFail($id);
        return view('admin.Form.show', compact('showForm'));
    }


    // Enquiry Valuation forms
    public function EnquiryValuationForm()
    {
        $formIndex = EnquiryValuation::all();
        return view('admin.Enquiry_Valuation_Forms.index', compact('formIndex'));
    }

    public function EnquiryValuationFormDelete(Request $request)
    {
        $enqValuationform = EnquiryValuation::find($request->deleted_id);
        $enqValuationform->delete();
        return redirect()->back()->with('success', 'Form deleted successfully');
    }
}
