<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\companies;
use App\Models\employees;
use Illuminate\Http\Request;


class CardController extends Controller
{
    public function show()
    {
        $data = DB::table('employees')->join('companies', 'emp_com', '=', 'com_id')->paginate(10);
        return view('home', ['emp_data' => $data]);
    }
    public function edit(Request $request)
    {
        $id = $request->emp_id;
        $companies = companies::all();
        $data = DB::table('employees')->where('emp_id', '=', $id)->get();
        return  view('edit', ['data' => $data, 'companies' => $companies]);
    }

    public function update(Request $request)
    {   
        $employe = employees::where('emp_id',$request->id)
        ->update([
            'emp_first_name' => $request->emp_first_name,
            'emp_last_name' => $request->emp_last_name,
            'emp_email' => $request->emp_email,
            'emp_phone' => $request->emp_phone,
            'emp_com' => $request->emp_com]);
        return redirect('/home');
    }

    public function delete(Request $request)
    {
        $id = $request->id;
        $employe = DB::table('employees')->where('emp_id', $id)->delete();
        return redirect('home');
    }
}
