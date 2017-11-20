<?php

namespace Foodo\Http\Controllers;

use Foodo\Http\Requests\RecipeRequest;
use Foodo\Models\Ingredient;
use Foodo\Services\RecipeService;
use Foodo\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    protected $base = 'recipe';

    public function index()
    {
        $recipes = auth()->user()->recipes;
        return view("$this->base.list")
            ->with('base', $this->base)
            ->with('records', $recipes);
    }

    public function create()
    {
        return view("$this->base.edit")
            ->with('base', $this->base);
    }

    public function store(RecipeRequest $request)
    {
        RecipeService::save($request);

        return redirect()
            ->route("$this->base.index")
            ->with('flashNotice', "Recipe Created");
    }

    public function edit(Recipe $recipe)
    {
        return view("$this->base.edit")
            ->with('record', $recipe)
            ->with('base', $this->base);
    }

    public function update(Recipe $recipe, RecipeRequest $request)
    {
        RecipeService::save($request, $recipe);


        return redirect()
            ->route("$this->base.index")
            ->with('flashNotice', "Recipe Updated");
    }

    public function destroy(Recipe $recipe)
    {
        $recipe->delete();

        return redirect()
            ->route("$this->base.index")
            ->with('flashNotice', "Recipe Deleted");
    }

    public function listIngredients(Recipe $recipe)
    {
        $ingredients = $recipe->ingredients;

        return view("$this->base.ingredient.list")
            ->with("parent", $recipe)
            ->with("records", $ingredients)
            ->with("base", $this->base);
    }

    public function getQuantityCard(Recipe $recipe, Ingredient $ingredient)
    {
        return view("$this->base.ingredient.quantityCard")
            ->with("recipe", $recipe)
            ->with("ingredient",$ingredient);
    }

    public function addIngredients(Request $request, Recipe $recipe, Ingredient $ingredient)
    {
        $ingredient->recipes()->save($recipe, [
            'quantity' => $request->quantity,
            'unit' => $request->unit
        ]);

        return redirect()
            ->route("$this->base.ingredient.list", ['recipe' => $recipe->id, 'ingredient' => $ingredient->id])
            ->with('flashNotice', "$ingredient->name added");
    }
}
