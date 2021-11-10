<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new \App\Admin();
        $admin->name = 'Admin';
        $admin->email = 'charlestsmith888@gmail.com';
        $admin->password = \Illuminate\Support\Facades\Hash::make("admin123");
        $admin->save();
    }
}
