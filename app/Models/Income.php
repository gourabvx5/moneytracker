<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    public function expenses()
    {
        return $this->hasMany(Expense::class);
    }
}
