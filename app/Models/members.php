<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class members extends Model
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

    public function books()
    {
        return $this->belongsToMany(Book::class, 'borrow_records');
    }
}
