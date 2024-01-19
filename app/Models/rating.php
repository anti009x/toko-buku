<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rating extends Model
{
    use HasFactory;

    protected $table='rating';

    protected $fillable=[
        'name',
        'rating',
        'deskripsi'
        
    ];

    public function User()
    {
        return $this->hasMany(User::class, 'name', 'name');
    }
    

}
