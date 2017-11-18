<?php

namespace Foodo\Http\Controllers;

use Foodo\Http\Requests\RecipeRequest;
use Foodo\Services\RecipeService;
use Foodo\Models\Recipe;

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
}
