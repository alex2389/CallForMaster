<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Routing\Controller;
use App\Models\Company;

class CompaniesController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin_group');
    }

    public function index()
    {

        $companies = Company::paginate(2);

        return view('adminpanel.companies.index')->with([
            'companies' => $companies,
            'title' => 'All Companies',
        ]);
    }

    public function newCompanies()
    { // to complete
        $companies = Company::paginate(2);

        return view('adminpanel.companies.index')->with([
            'companies' => $companies,
            'title' => 'New Companies (not completed)',
            'about' => 'This page display new companies for this week.'
        ]);
    }
}
