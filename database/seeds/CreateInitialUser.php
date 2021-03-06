<?php

use Fsociety\Models\User;
use Illuminate\Database\Seeder;

class CreateInitialUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create user
        User::firstOrCreate([
            'nick'  =>  'IronY',
            'email' =>  'dave@ir0ny.com',
            'password'  => Hash::make(env('adminUserInitialPass','p@ssw0rd')),
        ]);
    }
}
