<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\companies;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    public function show()
    {
        $companies = companies::all();
        return view('signup', ['companies' => $companies]);
    }
    public function store(Request $request)
    {
        $logo = $request->file('com_logo');
        $logoext = $logo->getClientOriginalName();
        $logoname = time() . '.' . $logoext;
        $logo->move(public_path('images'), $logoname);
        $employe =
            DB::table('companies')
            ->insert([
                'com_name' => $request->com_name,
                'com_email' =>  $request->com_email,
                'com_logo' => $logoname,
                'com_website' =>  $request->com_website
            ]);
        return redirect('showcompany');
    }

    public function carddetails()
    {
        $data = DB::table('companies')->paginate(10);
        return view('showcompany', ['emp_data' => $data]);
    }

    public function edit(Request $request)
    {
        $id = $request->com_id;
        $data = DB::table('companies')->where('com_id', '=', $id)->get();
        return  view('editcom', ['companies' => $data]);
    }

    public function update(Request $request)
    {   //Inside controller’s method

        
        $logo = $request->file('com_logo');
        $logoext = $logo->getClientOriginalName();
        $logoname = time() . '.' . $logoext;
        $logo->move(public_path('images'), $logoname);
        $employe = companies::where('com_id', $request->com_id)
            ->update([
                'com_name' => $request->com_name,
                'com_email' =>  $request->com_email,
                'com_logo' =>  $logoname,
                'com_website' =>  $request->com_website
            ]);

        return redirect('showcompany');
    }

    public function delete(Request $request)
    {
        $id = $request->com_id;
        $employe = DB::table('companies')->where('com_id', $id)->delete();

        return redirect('showcompany');
    }
}
