<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\employees;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    public function store(Request $request){
        
        $employe = new employees($request->except('_token'));
        $employe->save();
        return redirect('/home');
    }
}
