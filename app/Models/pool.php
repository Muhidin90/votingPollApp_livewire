<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class pool extends Model
{
    use HasFactory;
    public function option():HasMany
    {
        return $this->hasMany(option::class);
    }
}
