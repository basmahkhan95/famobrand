<?php

namespace App;

use App\Traits\CustomDateTimeFormat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Testimonial extends Model
{
    use SoftDeletes, CustomDateTimeFormat;

    public $fillable = ['client_name', 'testimonial'];
}
