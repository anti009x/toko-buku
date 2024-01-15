<?php

namespace Database\Seeders\Admin;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class buku extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('buku')->insert([
            'title' => 'Sample Book Title',
            'author' => 'John Doe',
            'publisher' => 'ABC Publications',
            'publication_year' => 2024, 
            'category' => 'Fiction',
            'isbn' => '978-1234567890', 
            'price' => 25000, 
            'pages' => 300, 
            'description' => 'This is a sample book description.',
            'stock' => 50, 
            'cover_image_url' => 'https://e1.pxfuel.com/desktop-wallpaper/213/398/desktop-wallpaper-icons-elaina-elaina-aesthetic-thumbnail.jpg', 
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('buku')->insert([
            'title' => 'Sample Book Title',
            'author' => 'John Doe',
            'publisher' => 'ABC Publications',
            'publication_year' => 2024, 
            'category' => 'Fiction',
            'isbn' => '978-1234567890', 
            'price' => 25000, 
            'pages' => 300, 
            'description' => 'This is a sample book description.',
            'stock' => 50, 
            'cover_image_url' => 'https://e1.pxfuel.com/desktop-wallpaper/213/398/desktop-wallpaper-icons-elaina-elaina-aesthetic-thumbnail.jpg', 
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
