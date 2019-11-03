<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{

    public function departments()
    {
        return $this->belongsToMany('App\Department', 'dept_emp','emp_no', 'dept_no', 'dept_no');
    }

    public function salaries()
    {
        return $this->hasMany('App\Salary', 'emp_no','emp_no');
    }

    public function titles()
    {
        return $this->hasMany('App\Title', 'emp_no','emp_no');
    }
}
