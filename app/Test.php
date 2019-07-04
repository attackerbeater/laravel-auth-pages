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

    protected $perPage = 10;

    // public function creator()
    // {
    //     return $this->belongsTo(User::class);
    // }

    // public function employees()
    // {
    //     return $this->hasMany(Employee::class);
    // }

    // public function scopeAddNameToTestTable($data) {
    //     $device = new Device();
 
    //     $device->name = request('name');
    //     $device->description = request('description');
 
    //     $device->save();
    // }
}
