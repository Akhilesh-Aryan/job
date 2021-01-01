<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Company;
use App\Models\Role;
use App\Models\Job;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        $data["company"] = Company::where("user_id",Auth::id())->first();
        return view('work.company_profile',$data);
    }

   
    public function jobView()
    {   $data['company'] =  Company::where("user_id",Auth::id())->first();
        $data['roles'] = Role::all();
        return view("work.job_post",$data);
        
    }

    public function jobViewCreate(Request $request){
        
        $company =  Company::where("user_id",Auth::id())->first();

        $request->validate([
            'title' => 'required',
            'role_id' => 'required',
            'job_type' => 'required',
            'skills' => 'required',
            'eligibility' => 'required',
            'description' => 'required',
           // 'experience' => 'required',
            'salary' => 'required',
           
        ]);

        $c = new Job();
        $c->title = $request->title;
        $c->role_id = $request->role_id;
        $c->job_type = $request->job_type;
        $c->skills = $request->skills;
        $c->eligibility = $request->eligibility;
        $c->description = $request->description;
        $c->experience = $request->experience;
        $c->salary = $request->salary;
        $c->company_id = $company->id;
        $c->save();


        return redirect()->back();
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'cin' => 'required',
            'address' => 'required',
            'industry_type' => 'required',
            'logo' => 'mimes:jpg,png',
        ]);

        //image insertion
        $filename = time() . "." . $request->logo->extension();
        $request->logo->move(public_path("company_logo"),$filename);


        $c = new Company();
        $c->title = $request->title;
        $c->cin = $request->cin;
        $c->est_year = $request->est_year;
        $c->address = $request->address;
        $c->industry_type = $request->industry_type;
        $c->logo = $filename;
        $c->description = $request->description;
        $c->user_id = Auth::id();
        $c->save();

        return redirect()->back();

        
    }

    public function show(Request $request)
    {   
        $search = $request->search;
        $data['jobs'] = Job::where('title','like',"%$search%")->get();
        $data['roles'] = Role::all();
        return view('work.search',$data);
    }

    public function edit(Company $company)
    {
    
    }

    public function update(Request $request, Company $company)
    {
        
    }

    public function destroy(Job $job)
    {
        $job->delete();
        return redirect()->back();
    }
}