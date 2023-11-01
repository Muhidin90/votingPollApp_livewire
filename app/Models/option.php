<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class option extends Model
{
    use HasFactory;

    protected $fillable = ['name'];
    
    public function pool():BelongsTo{
        return $this->belongsTo(pool::class);
    }

    public function vote():HasMany 
    {
        return $this->hasMany(vote::class);
    }
}
