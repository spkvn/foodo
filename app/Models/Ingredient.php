<?php

namespace Foodo\Models;

use Foodo\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ingredient extends Model
{
    use SoftDeletes;
    protected $guarded = ['id'];

    public function recipes()
    {
        return $this->belongsToMany(Recipe::class);
    }

    public function created_by()
    {
        return $this->belongsTo(User::class);
    }
}
