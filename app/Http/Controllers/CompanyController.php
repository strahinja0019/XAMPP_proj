<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
    // Return the contacts index view
    function index() {
        return view('companies.index');
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
