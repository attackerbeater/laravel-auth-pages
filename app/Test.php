<?php

namespace App;

use App\Employee;
use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Traits\TestTrait;

class Test extends Model
{
    use TestTrait;

    protected $fillable = ['user_employee_name'];

}
