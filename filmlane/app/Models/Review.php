<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{

    protected $table = 'reviews'; // Tên bảng trong database

    protected $primaryKey = 'review_id'; // Khóa chính của bảng

    protected $fillable = [
        'account_id',
        'movie_id',
        'rating',
        'review_date',
        'review_update',
    ];
    public function accounts()
    {
        return $this->belongsTo(Account::class, 'account_id');
    }
    public function movies()
    {
        return $this->belongsTo(movies::class, 'movies_id');
    }
}
