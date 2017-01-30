<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'description', 'url'
    ];

    /**
     * Get the user that owns the picture.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
