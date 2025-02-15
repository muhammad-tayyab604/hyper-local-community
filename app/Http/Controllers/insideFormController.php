<?php

namespace App\Http\Controllers;

use App\Models\EnquiryValuation;
use App\Models\InfoForm;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class insideFormController extends Controller
{
    public function formSubmit(Request $request)
    {
        try {
            $request->validate([
                'date' => 'required',
                'time' => 'required',
                'name' => 'required',
                'phone' => 'required',
                'email' => 'required',
                'message' => 'required',
            ]);

            $form = new InfoForm();
            $form->date = $request->date;
            $form->time = $request->time;
            $form->name = $request->name;
            $form->phone = $request->phone;
            $form->email = $request->email;
            $form->message = $request->message;
            $form->save();
            return redirect()->back()->with('success', 'Tour Request Submitted Successfully');
        } catch (\Exception $ex) {
            return redirect()->back()->with('Error', $ex->getMessage());

        }
    }

    public function enqValuationForm(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required',
                'email' => 'required',
                'phone_number' => 'required',
            ]);

            $form = new EnquiryValuation();
            $form->name = $request->name;
            $form->email = $request->email;
            $form->phone_number = $request->phone_number;
            $form->save();
            return redirect()->back()->with('success', 'Form Submitted Successfully');
        } catch (\Exception $ex) {
            return redirect()->back()->with('Error', $ex->getMessage());

        }
    }
}
