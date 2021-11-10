<?php

namespace App;

use App\Traits\CustomDateTimeFormat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subscription extends Model
{
    use SoftDeletes, CustomDateTimeFormat;

    public $table = 'subscriptions';

    protected $with = ['package', 'user'];

    public function package(){
        return $this->belongsTo('App\Package', 'package_id');
    }

    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }
}
