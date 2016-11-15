<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Car;


class CarController extends Controller
{
    public function index()
    {
        return (new Response(Car::all()->toJSON(), 200))->header('Content-Type', 'application/json');
    }
    
    public function store(Request $request){
        $validator = Validator::make($request->all(), [
        'name' => 'required|max:255'
        ]);
        
        if ($validator->fails()) {
            $errors = $validator->errors();
            $errors =  json_decode($errors);
            
            return response()->json([
                'success' => false,
                'message' => $errors
            ], 422);
        }
        
        $car = new Car;
        
        $car->name = $request->name;
        
        $car->save();
        
        return (new Response($car->toJSON(), 201))->header('Content-Type', 'application/json');
    }
}