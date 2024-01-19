<?php

namespace App\Models\Admin;

use App\Models\Donation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    use HasFactory;
    protected $table = 'buku';
    
    protected $fillable = [
        'id',
        'title',
        'author',
        'publisher',
        'publication_year',
        'category',
        'isbn',
        'price',
        'pages',
        'description',
        'stock',
        'cover_image_url',
    ];

    public static function getValidationRules()
    {
        return [
            'title' => 'required|string',
            'author' => 'required|string',
            'publisher' => 'required|string',
            'publication_year' => 'required|integer',
            'category' => 'required|string',
            'isbn' => 'required|string',
            'price' => 'required|integer',
            'pages' => 'required|integer',
            'description' => 'required|string',
            'stock' => 'required|integer',
            'cover_image_url' => 'required|string',
        ];
    }

    public function donations()
    {
        return $this->hasMany(Donation::class, 'price', 'amount');
    }

    


    

}
