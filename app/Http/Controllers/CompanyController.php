<?php

namespace App\Http\Controllers;

use Gate;
use DataTables;
use App\Order;
use App\Company;
use Illuminate\Support\Facades\DB;
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

    public function showOrders(Company $company)
    {
        // Abort if user not owns the company
        if (Gate::denies('company.orders', $company)) {
            abort(401, 'Ação não autorizada.');
        }

        // Get the company orders
        $orders = Order::with('products')
            ->where('company_id', '=', $company->id)
            ->orderBy('created_at', 'DESC')
            ->get();

        return view('companies.show-orders', compact(['company', 'orders']));
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
        $id = auth()->user()->id;

        $companies = DB::table('companies')
            ->leftJoin('orders', 'company_id', '=', 'companies.id')
            ->select('companies.id', 'name', 'cnpj', DB::raw("COALESCE(COUNT(orders.id), 0) as qtd"))
            ->where('companies.user_id', '=', $id)
            ->groupBy('company_id', 'companies.id', 'name', 'cnpj')
            ->get();

        return DataTables::of($companies)->make(true);
    }

    public function getCompaniesSelect()
    {
        $id = auth()->user()->id;

        $companies['results']  = DB::table('companies')
            ->select('id', 'name as text')
            ->where('user_id', '=', $id)
            ->orderBy('name', 'ASC')
            ->get();
        return $companies;
    }
}
