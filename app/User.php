<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
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
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function blogs()
    {
        return $this->hasMany('App\Blog');
    }

    public function followers()
    {
        return $this->belongsToMany('App\User' , 'followers' , 'user_id' , 'follower_id');
    }

    public function following()
    {
        return $this->belongsToMany('App\User' , 'followers' ,'follower_id', 'user_id');
    }

    public function is_following($user_id)
    {
        return $this->following()
                    ->where('user_id', $user_id)
                    ->count() > 0;
    }

    


}
