<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Contact;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function index()
    {
        return view('contacts.index');
    }

    public function confirm(Request $request)
    {
        $request->validate([
            'fullname'       => 'required',
            'gender'         => 'required',
            'email'          => 'required|email',
            'postcode'       => 'required',
            'address'        => 'required',
            'building_name'  => 'nullable',
            'opinion'        => 'required|max:120',
        ]);

        $inputs = $request->all();

        return view('contacts.confirm', ['inputs' => $inputs]);
    }

    public function process(Request $request)
    {
        $action = $request->get('action', 'return');
        $input  = $request->except('action');

        if($action === 'submit') {

            $contact = new Contact();
            $contact->fill($input);
            $contact->save();

            return redirect()->route('complete');
        } else {
            return redirect()->route('contact')->withInput($input);
        }
    }

    public function complete()
    {
        return view('contacts.complete');
    }
}
