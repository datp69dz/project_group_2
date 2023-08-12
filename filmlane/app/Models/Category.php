<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $primaryKey = 'category_id'; // Khai báo khóa chính

    protected $fillable = [
        'category_name',
        'description',
        'category_date',
        'category_update',
    ];
}
