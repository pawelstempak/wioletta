<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blogs extends Model
{
    use HasFactory;

    public function blogitems(): HasMany
    {
        return $this->hasMany(BlogsItems::class);
    }    
}
