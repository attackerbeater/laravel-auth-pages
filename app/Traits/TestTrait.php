<?php 
namespace App\Traits;

use App\Test;


Trait TestTrait {

    public function addNameToTestTable($data) {
        // return Test::create(['user_employee_name' => 'xxxxxxxx']);   
        return Test::create($data);  
    }

    public function scopeActive($query){
    	// return $query->where('email', 'admin@aadmin.com');
    	return $query->where('user_employee_name', 'lando');
    }

}
