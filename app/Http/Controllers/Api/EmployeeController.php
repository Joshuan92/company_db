<?php

namespace App\Http\Controllers\Api;

use App\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{

    public function index()
    {
        $employees = Employee::orderBy('emp_no')->limit(50)->with('salaries')->with('titles')->get();

        return $employees;

    }

    public function show()
    {
        $employees = Employee::orderBy('emp_no')->limit(10)->with('departments')->get();

        return $employees;

    }
    
}
