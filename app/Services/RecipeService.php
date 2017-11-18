<?php

namespace Foodo\Services;

use Foodo\Models\Recipe;
use Foodo\Http\Requests\RecipeRequest;
class RecipeService
{
    public static function save(RecipeRequest $request, Recipe $recipe = null)
    {
        if(!isset($recipe))
        {
            $recipe = new Recipe();
        }

        $recipe->name = $request->name;
        $recipe->user_id = auth()->user()->id;

        if(isset($request->cooking_time))
        {
            $recipe->cooking_time = $request->cooking_time;
        }

        if(isset($request->prep_time))
        {
            $recipe->prep_time = $request->prep_time;
        }

        $recipe->save();

        return $recipe;
    }
}