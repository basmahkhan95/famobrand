<?php

namespace App;

use App\Traits\CustomDateTimeFormat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DomainSearch extends Model
{
    use SoftDeletes, CustomDateTimeFormat;

    public $table = 'domain_search';

    public $fillable = ['user_id', 'keyword'];

    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }
}
