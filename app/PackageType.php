<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PackageType extends Model
{

    protected $table = 'package_types';

    public $fillable = ['name'];

    public function packages(){
        return $this->hasMany('App\Package', 'package_type');
    }
}
