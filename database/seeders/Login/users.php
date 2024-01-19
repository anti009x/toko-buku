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
                'alamat'=>'The Old Schools, Trinity Ln, Cambridge CB2 1TN, Inggris Raya',
                'password'=>bcrypt(12345),
                
            ]);

            DB::table('users')->insert([
                'name' => 'riski',
                'level'=>'pengguna',
                'email' =>'gateng123ke@gmail.com',
                'alamat'=>'Wellington Square, Oxford OX1 2JD, Inggris Raya',
                'password'=>bcrypt(12345),
                
            ]);

            DB::table('users')->insert([
                'name' => 'admin',
                'level'=>'admin',
                'email' =>'riskisuleman2011@gmail.com',
                'alamat'=>'Exhibition Rd, South Kensington, London SW7 2BX, Inggris Raya',
                'password'=>bcrypt(12345),
                
            ]);
    
    
            
            
        }
    }
}
