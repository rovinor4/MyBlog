<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    public function Users()
    {
        $this->hasOne(User::class, "id", "user_id");
    }
}
