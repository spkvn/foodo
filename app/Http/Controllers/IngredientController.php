<?php

namespace Foodo\Http\Controllers;

use Foodo\Models\Ingredient;
use Illuminate\Http\Request;

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


    public function store(Request $request)
    {
        $ingredient = Ingredient::create([
            'name' => $request->name,
            'user_id' => auth()->user()->id
        ]);

        return redirect()
            ->route("$this->base.index")
            ->with('flashNotice', "$ingredient->name Created");
    }
}
