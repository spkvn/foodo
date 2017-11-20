<?php

namespace Foodo\Models;

use Foodo\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Recipe extends Model
{
    use SoftDeletes;

    public function author()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function ingredients()
    {
        return $this->belongsToMany(Ingredient::class)
            ->withPivot(['quantity', 'unit'])
            ->withTimestamps();
    }
}
