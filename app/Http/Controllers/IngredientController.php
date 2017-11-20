<?php

namespace Foodo\Http\Controllers;

use Foodo\Models\Ingredient;
use Foodo\Services\IngredientService;
use Illuminate\Http\Request;
use Foodo\Http\Requests\IngredientRequest;

class IngredientController extends Controller
{
    protected $base = 'ingredient';

    public function index()
    {
        $ingredients = Ingredient::all();

        return view("$this->base.list")
            ->with("records",$ingredients)
            ->with("base", $this->base);
    }

    public function create()
    {
        return view("$this->base.edit")
        ->with("base", $this->base);
    }


    public function store(IngredientRequest $request)
    {
        $ingredient = IngredientService::save($request);

        return redirect()
            ->route("$this->base.index")
            ->with('flashNotice', "$ingredient->name Created");
    }

    public function search(Request $request)
    {
        $ingredients = IngredientService::search((string)$request->input('query'));

        return $ingredients;
    }

    public function getQuantityCard(Ingredient $ingredient)
    {
        return view("$this->base.quantityCard")
            ->with("ingredient",$ingredient);
    }
}
