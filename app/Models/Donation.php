<?php

namespace App\Models;

use App\Models\Admin\buku;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;
    protected $table = 'donations';
    protected $fillable = [
        'id',
        'judul',
        'code',
        'name',
        'alamat',
        'email',
        'amount',
        'note',
        'status',
        'snap_token',
    ];

    public function buku()
    {
        return $this->belongsTo(buku::class, 'amount', 'price');
    }

    public function User()
    {
        return $this->belongsTo(User::class, 'name', 'name');
    }

    
}
