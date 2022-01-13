<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function list(Request $req) {
        return Pizza::all();
    }

    public function detail($id) {
        return Pizza::where($id,"id")->first();
    }

    public function create(Request $req) {
        $pizzaData = json_decode($req->getContent());

        $pizza = new Pizza;

        $pizza->name_pizza=$pizzaData->name_pizza;
        $pizza->photo_pizza=$pizzaData->photo_pizza;
        $pizza->price_pizza=$pizzaData->price_pizza;
        $pizza->dough_pizza=$pizzaData->dough_pizza;
        $pizza->allergens_pizza=$pizzaData->allergens_pizza;
        $pizza->description=$pizzaData->description;

        $pizza->save();

        return response()->json($pizza,201);
    }

    public function edit(Request $req, $id) {
        
        $pizzaData = json_decode($req->getContent());

        $pizza = Pizza::where($id,"id")->first();

        $pizza->name_pizza=$pizzaData->name_pizza;
        $pizza->photo_pizza=$pizzaData->photo_pizza;
        $pizza->price_pizza=$pizzaData->price_pizza;
        $pizza->dough_pizza=$pizzaData->dough_pizza;
        $pizza->allergens_pizza=$pizzaData->allergens_pizza;
        $pizza->description=$pizzaData->description;

        $pizza->save();

        return response()->json($pizza,200);
    }

}
