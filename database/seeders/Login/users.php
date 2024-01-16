<?php

namespace Database\Seeders\Login;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class users extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        {   
            DB::table('users')->insert([
                'name' => 'sule',
                'level'=>'pengguna',
                'email' =>'riskisuleman76@gmail.com',
                'password'=>bcrypt(12345),
                
            ]);

            DB::table('users')->insert([
                'name' => 'admin',
                'level'=>'admin',
                'email' =>'riskisuleman2011@gmail.com',
                'password'=>bcrypt(12345),
                
            ]);
    
    
            
            
        }
    }
}
