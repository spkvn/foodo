<?php

namespace Foodo\Services;

use Foodo\Http\Requests\IngredientRequest;
use Foodo\Models\Ingredient;

class IngredientService
{
    public static function save(IngredientRequest $request, Ingredient $ingredient = null )
    {
        if(!isset($ingredient))
        {
            $ingredient = new Ingredient();
        }

        $ingredient->name = $request->name;
        $ingredient->user_id = auth()->user()->id;

        $ingredient->save();
        return $ingredient;
    }

    public static function search($name)
    {
        if(strlen($name) > 0)
        {
            $ingredients = Ingredient::where('name', 'like', "%$name%")->get();
            return $ingredients->toJson();
        }
        else
        {
            return null;
        }
    }
}