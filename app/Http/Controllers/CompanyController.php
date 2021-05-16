<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company = Company::all();

        return $company ;
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            "NIP"=>"required",
            "REGON"=>"required",
            "NAZWA"=>"required",
            "VAT"=>"sometimes ",
            "ULICA"=>"required",
            "NUMER_DOMU"=>"required",
            "NUMER_MIESZKANIA"=>"required",
        ]);

        Company::create($data);

        return 'created sucesfuly' ;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
       return Company::find(request()->id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        $data = request()->validate([
            "NIP"=>"required",
            "REGON"=>"required",
            "NAZWA"=>"required",
            "VAT"=>"sometimes ",
            "ULICA"=>"required",
            "NUMER_DOMU"=>"required",
            "NUMER_MIESZKANIA"=>"required",
        ]);

        $company = Company::find(request()->id);

        $company->update($data);

        return 'updated';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        $company = Company::find(request()->id);

        $company->delete();
    }
}
