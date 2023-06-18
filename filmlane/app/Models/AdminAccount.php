<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdminAccount extends Model
{
    protected $table ='admin_accounts';
    protected $primaryKey = 'admin_id';
    public $timestamps = false;

    protected $fillable = ['username', 'password', 'email', 'image' , 'admin_date' , 'admin_update'];

    protected $dates = [
        'admin_date',
        'admin_update',
    ];

    public function movies()
    {
        return $this->hasMany(Movie::class, 'admin_id', 'admin_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'admin_id', 'admin_id');
    }
}
