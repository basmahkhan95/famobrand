<?php

namespace App;

use App\Traits\CustomDateTimeFormat;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AdminNotification extends Model
{
    use SoftDeletes, CustomDateTimeFormat;

    public $table = 'admin_notifications';

    public $fillable = ['admin_id', 'title', 'description', 'url', 'is_read'];

    public function getUrlAttribute($value){
        return url($value);
    }

    public function getCreatedAtAttribute($value){
        return Carbon::parse($value)->diffForHumans();
    }
}
