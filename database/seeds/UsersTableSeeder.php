<?php
use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'           => 'Administrator',
            'email'          => 'admin@admin.com',
            'password'       => bcrypt('password'),
            'remember_token' => str_random(10),
        ]);
    }
}
