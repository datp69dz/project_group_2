<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    // Bật timestamps
    public $timestamps = true; 
    
    protected $table = 'comments'; // Tên bảng trong database

    protected $primaryKey = 'comment_id'; // Khóa chính của bảng
    protected $fillable = [
        'movie_id',
        'account_id',
        'content',
        'comment_date',
        'admin_id',
        'comment_update',
    ];
    public function admin()
    {
        return $this->belongsTo(Admin::class, 'admin_id');
    }

    public function accounts()
    {
        return $this->belongsTo(Account::class, 'account_id');
    }
    
    public function movies()
    {
        return $this->belongsTo(movies::class, 'movies_id');
    }
}
