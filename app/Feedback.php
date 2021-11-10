<?php

namespace App;

use App\Traits\CustomDateTimeFormat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Feedback extends Model
{
    use SoftDeletes, CustomDateTimeFormat;

    public $fillable = ['name', 'email', 'phone_no', 'subject', 'message', 'is_read'];
}
