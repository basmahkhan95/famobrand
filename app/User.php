<?php

namespace App;

use App\Traits\CustomDateTimeFormat;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable, CustomDateTimeFormat;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'image', 'email', 'phone_no', 'email_verified_at', 'password', 'remember_token', 'is_block'
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

    /**
     * Scope a query to only include blocked users.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeBlocked($query)
    {
        return $query->where('is_block', 1);
    }

    /**
     * Scope a query to only include Unblocked users.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeUnblocked($query)
    {
        return $query->where('is_block', 0);
    }

    public function subscription()
    {
        return $this->hasMany('App\Subscription', 'user_id')->orderBy('id', 'desc');
    }

    public function getImageAttribute($value)
    {
        return asset('storage/images/' . $value);
    }

}
