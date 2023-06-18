<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;

class Account extends Model implements Authenticatable
{
    protected $table = 'accounts';

    protected $primaryKey = 'account_id';
    protected $fillable = [
        'username',
        'password',
        'email',
        'account_type',
        'image',
        'account_date',
        'account_update',
    ];

     public function payments()
    {
        return $this->hasMany(Payment::class, 'account_id', 'account_id');
    }

    public function favorites()
    {
        return $this->belongsToMany(Movie::class, 'favorites', 'account_id', 'movie_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'account_id', 'account_id');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class, 'account_id', 'account_id');
    }

    public $timestamps = false; // Vô hiệu hóa các trường timestamps mặc định (created_at, updated_at)

    protected $dates = [
        'account_date',
        'account_update',
    ];

    // Định dạng ngày tháng cho các trường thời gian
    protected $dateFormat = 'Y-m-d H:i:s';

    /**
     * Get the name of the unique identifier for the user.
     *
     * @return string
     */
    public function getAuthIdentifierName()
    {
        return 'account_id';
    }

    /**
     * Get the unique identifier for the user.
     *
     * @return mixed
     */
    public function getAuthIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Get the password for the user.
     *
     * @return string
     */
    public function getAuthPassword()
    {
        return $this->password;
    }

    /**
     * Get the remember token for the user.
     *
     * @return string|null
     */
    public function getRememberToken()
    {
        return $this->remember_token;
    }

    /**
     * Set the remember token for the user.
     *
     * @param  string|null  $value
     * @return void
     */
    public function setRememberToken($value)
    {
        $this->remember_token = $value;
    }

    /**
     * Get the column name for the "remember me" token.
     *
     * @return string
     */
    public function getRememberTokenName()
    {
        return 'remember_token';
    }
}
