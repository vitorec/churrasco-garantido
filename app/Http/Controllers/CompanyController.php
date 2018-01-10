<?php

namespace App\Http\Controllers;

use DataTables;

class CompanyController extends Controller
{
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
