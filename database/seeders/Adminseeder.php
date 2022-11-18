<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;

class Adminseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = [
            'name'=>'Admin',
            'email'=>'admin@admin.com',
            'password'=>bcrypt('12345678'),
        ]; 
        Admin::create($admin);
    
    }
}
