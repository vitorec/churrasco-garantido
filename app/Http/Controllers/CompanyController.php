<?php

namespace App\Http\Controllers;

use DataTables;
use App\Company;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function create()
    {
        return view('companies.create');
    }

    public function store(Request $request){

        // Validation
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'cnpj' => [
                'required',
                'regex:(\d{2}\.\d{3}\.\d{3}\/\d{4}-\d{2})',
            ],
        ])->setAttributeNames(['name' => 'Nome fantasia']);

        $validator->validate($request->all());

        // Save the company
         Company::create([
             'name'     =>  request('name'),
             'cnpj'     =>  request('cnpj'),
             'user_id'  =>  auth()->id()
         ]);

        // Redirect to the dashboard
        return redirect('dashboard')->with('success', 'Informações salvas com sucesso!');
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
