<?php

declare(strict_types = 1);

namespace App;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    public $timestamps = false;

    protected $table = 'people';

    protected $fillable = ['name','phone'];
}
