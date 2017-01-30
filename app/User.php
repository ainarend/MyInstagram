<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Get the pictures for the user.
     *
     */
    public function pictures()
    {
        return $this->hasMany('App\Picture');
    }


    /**
     * Who is the user following
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function followers()
    {
        return $this->belongsToMany(
            self::class,
            'follows',
            'followee_id',
            'follower_id'
        );
    }

    /**
     * Who are user's followers
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function followees()
    {
        return $this->belongsToMany(
            self::class,
            'follows',
            'follower_id',
            'followee_id'
        );
    }
}
