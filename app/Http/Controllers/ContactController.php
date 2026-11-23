<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Company;

class ContactController extends Controller
{
    // Return the contacts index view
    function index() {
        $contacts = Contact::all();
        return view('contacts.index',compact('contacts'));
    }

    // Return the contacts create view
    function create() {
        $companies = Company::orderBy('name')->pluck('name','id')->prepend('Select Company','');
        return view('contacts.create',compact('companies'));
    }

    function store(Request $request){
        //first validate
        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required|email',
            'address'=>'required',
            'company_id'=>'required|exists:companies,id'       
        ]);
        dd($request->all());
    }

    function show($id) {
        $contact = Contact::find($id);
        return view('contacts.show', compact('contact'));
    }
}