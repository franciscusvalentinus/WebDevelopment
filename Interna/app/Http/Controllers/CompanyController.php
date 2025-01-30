<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;
use App\Models\Company;
use App\Models\Period;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $auth = DB::table('role_user')->where('user_id', '=', Auth::id())->get();
        foreach ($auth as $a)
        {
            $au = $a->role_id;
        }

        if ($au == 1) {
            $gg = [];
            $roles = DB::table('role_user')->where('role_id', '=', 2)->get();
            foreach ($roles as $a)
            {
                $gg[] = $a->user_id;
            }

            $departments = DB::table('interna_study_programs')->where('id', '=', Auth::user()->study_program_id)->get();
            foreach ($departments as $d)
            {
                $wp = $d->id;
            }

            $users = DB::table('users')->whereIn('id', $gg)->where('study_program_id', '=', $wp)->get();
            $periods = Period::all();

            return view('admin-company.index', compact('users', 'periods'));
        }
        else {
            $id = null;
            $name = null;
            $address = null;
            $email = null;
            $company_phone = null;
            $supervisor = null;
            $supervisor_phone = null;
            $npwp = null;
            $siup = null;
            $status = null;
            $companies = Company::with('users')->where('user_id', '=', Auth::id())->get();

            foreach ($companies as $c)
            {
                $id = $c->id;
                $name = $c->name;
                $address = $c->address;
                $email = $c->email;
                $company_phone = $c->company_phone;
                $supervisor = $c->supervisor;
                $supervisor_phone = $c->supervisor_phone;
                $npwp = $c->npwp;
                $siup = $c->siup;
                $status = $c->status;
            }
            return view('company.index',[
                'id' => $id,
                'name' => $name,
                'address' => $address,
                'email' => $email,
                'company_phone' => $company_phone,
                'supervisor' => $supervisor,
                'supervisor_phone' => $supervisor_phone,
                'npwp' => $npwp,
                'siup' => $siup,
                'status' => $status,
                'companies' => $companies,
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort_if(Gate::denies('company_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('company.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCompanyRequest $request)
    {
        Company::create($request->validated());

        return redirect()->route('company.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $companies = Company::where('user_id', '=', $id)->get();

        return view('admin-company.show', compact('companies'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        abort_if(Gate::denies('company_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('company.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCompanyRequest $request, Company $company)
    {
        $data = $request->validated();

        $company->update([
            'name' => $data['name'],
            'address' => $data['address'],
            'email' => $data['email'],
            'company_phone' => $data['company_phone'],
            'supervisor' => $data['supervisor'],
            'supervisor_phone' => $data['supervisor_phone'],
            'npwp' => $data['npwp'],
            'siup' => $data['siup'],
            'status' => 0,
        ]);

        return redirect()->route('company.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        //
    }

    public function markasapproved(Company $company)
    {
        $company->status = 1;
        $company->save();

        return redirect()->route('company.index');
    }

    public function markasrejected(Company $company)
    {
        $company->status = 2;
        $company->save();

        return redirect()->route('company.index');
    }
}
