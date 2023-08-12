<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class movies extends Model
{
    protected $table = 'movies'; // Tên bảng trong database

    protected $primaryKey = 'movie_id'; // Khóa chính của bảng

    protected $fillable = [
        'title',
        'description',
        'release_date',
        'category_id',
        'trailer_url',
        'movies_url',
        'time',
        'director',
        'main_actor',
        'status',
        'nation',
        'quality',
        'year_manufacture',
        'view',
        'admin_id',
        'movie_date',
        'movie_update',
    ];

    // Không sử dụng timestamps
    public $timestamps = false;

    // Định nghĩa quan hệ với bảng Category
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    // Định nghĩa quan hệ với bảng Admin
    public function admin()
    {
        return $this->belongsTo(Admin::class, 'admin_id');
    }
    //
    public function getMoviesByCategory($categoryId)
    {
    return $this->where('category_id', $categoryId)->get();
    }

}
// Gọi đến class admin // Khó ngoại
    /*public function admin_accounts()
    {
        return $this->belongsTo(admin_accounts::class, 'admin_id', 'id');
    }
    public function categories()
    {
        return $this->belongsTo(category_id::class, 'category_id', 'id');
    }*/
