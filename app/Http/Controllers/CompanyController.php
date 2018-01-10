<?php

namespace App\Http\Controllers;

use DataTables;
use App\Company;

class CompanyController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function create()
    {
        return view('companies.create');
    }

    public function show(Company $company)
    {
        return view('companies.show', compact('company'));
    }

    /**
     * Save the company
     */
    public function store(){
        // Validation
        $this->validate(request(), [
            'name'  => 'required',
            'cnpj'  => 'required'
        ]);

        // Save the company
         Company::create([
             'name'     =>  request('name'),
             'cnpj'     =>  request('cnpj'),
             'user_id'  =>  auth()->id()
         ]);

        // Redirect to the dashboard
        return redirect('/dashboard');
    }

    /**
     * Return the current user's companies
     */
    public function getCompaniesData()
    {
        $companies = auth()->user()->companies()
            ->get(['name', 'cnpj', 'id']);

        return DataTables::of($companies)->make(true);
    }
}
