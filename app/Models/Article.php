<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Article extends Model
{
    public function user() : HasOne {
        return $this->hasOne(User::class);
    }
}
