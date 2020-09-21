<?php

declare(strict_types = 1);

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contacts';

    protected $fillable = ['name', 'email', 'body'];
}
