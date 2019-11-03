<?php

namespace App\Http\Controllers\Api;

use App\Department;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index()
    {
        $departments = Department::all();

        return $departments;

    }
}
