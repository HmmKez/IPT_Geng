<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class books extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'year_level',
    ];
    public function borrowRecords()
    {
        return $this->hasMany(BorrowRecord::class);
    }
    public function members()
    {
        return $this->belongsToMany(Member::class, 'borrow_records');
    }
    
}
