<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employees;
use App\Models\OfficeEmployees;

use Auth;

class EmployeesController extends Controller
{
    public function index(Request $request ,Employees $id)
    {
    $employees_details = Employees::with('company')->where('is_active', $request->query('is_active', 1))->get();   
    // dd($employees_details);   
    return view('employees',compact('employees_details'));
    }
    
}
