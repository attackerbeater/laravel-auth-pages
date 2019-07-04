<?php

namespace App;


use App\Test;
use App\User;
use Illuminate\Database\Eloquent\Model;
use App\Traits\TestTrait;

class Employee extends Model
{
    use TestTrait;

    protected $fillable = ['first_name', 'last_name', 'test_id', 'email', 'phone', 'creator_id'];

    protected $perPage = 10;

    // public function creator()
    // {
    //     return $this->belongsTo(User::class);
    // }

    // public function company()
    // {
    //     return $this->belongsTo(Test::class);
    // }
}
