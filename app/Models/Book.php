<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'author',
        'genre',
    ];
    public function borrowRecords()
    {
        return $this->hasMany(BorrowRecord::class);
    }
    public function members()
    {
        return $this->belongsToMany(Member::class);
    }
    
}
