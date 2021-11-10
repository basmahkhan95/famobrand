<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Package extends Model
{
    use SoftDeletes;

    public $table = 'packages';

    public $fillable = ['name', 'description', 'amount', 'package_type', 'status'];

    public $with = ['package_type'];

    public function package_type(){
        return $this->belongsTo('App\PackageType', 'package_type');
    }

}
