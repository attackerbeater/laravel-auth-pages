<?php 
namespace App\Traits;

use App\Test;


Trait TestTrait {

    public function addNameToTestTable($data) {  
        return Test::create($data);  
    }
}
