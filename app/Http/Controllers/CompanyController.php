<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
    // Return the contacts index view
    function index() {
        $companies = Company::all();
        return view('companies.index',compact('companies'));
    }

    // Return the contacts create view
    function create() {
        return view('companies.create');
    }

    function show($id) {
        $company = Company::find($id);
        return view('companies.show', compact('company'));
    }
}
