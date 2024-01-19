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
            'title' => 'Spiderman',
            'author' => 'John Doe',
            'publisher' => 'ABC Publications',
            'publication_year' => 2024, 
            'category' => 'Fiction',
            'isbn' => '978-1234567890', 
            'price' => 50000, 
            'pages' => 300, 
            'description' => 'This is a sample book description.',
            'stock' => 50, 
            'cover_image_url' => 'https://d28hgpri8am2if.cloudfront.net/book_images/onix/cvr9781608873968/marvel-comics-9781608873968_hr.jpg', 
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
            'cover_image_url' => 'https://d28hgpri8am2if.cloudfront.net/book_images/onix/cvr9781608873968/marvel-comics-9781608873968_hr.jpg', 
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('buku')->insert([
            'title' => 'What If Spiderman Join Thanos',
            'author' => 'John Doe',
            'publisher' => 'ABC Publications',
            'publication_year' => 2024, 
            'category' => 'Fiction',
            'isbn' => '978-1234567890', 
            'price' => 10000, 
            'pages' => 300, 
            'description' => 'This is a sample book description.',
            'stock' => 50, 
            'cover_image_url' => 'https://d28hgpri8am2if.cloudfront.net/book_images/onix/cvr9781608873968/marvel-comics-9781608873968_hr.jpg', 
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('buku')->insert([
            'title' => 'What If Captain America Villains',
            'author' => 'John Doe',
            'publisher' => 'ABC Publications',
            'publication_year' => 2024, 
            'category' => 'Fiction',
            'isbn' => '978-1234567890', 
            'price' => 30000, 
            'pages' => 300, 
            'description' => 'This is a sample book description.',
            'stock' => 50, 
            'cover_image_url' => 'https://i.pinimg.com/736x/d7/5c/3f/d75c3f1490d2ef4e17ea7e2504d03f15.jpg', 
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
