<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\CarRule;

class CarRuleController extends Controller
{
    public function index()
    {
        return (new Response(CarRule::all()->toJSON(), 200))->header('Content-Type', 'application/json');
    }

     public function show($carId,$ruleId)
    {
        $carRule = CarRule::where('car_id', '=', $carId)
                    ->where('rule_id', '=', $ruleId)
                    ->first();

        if($carRule==null) {
            return response()->json([
            'success' => false,
            'message' => 'CarRule not found'
            ], 404)->header('Content-Type', 'application/json');
        }
        return (new Response($carRule->toJSON(), 200))->header('Content-Type', 'application/json');
    }
    
    public function store(Request $request){
        $validator = Validator::make($request->all(), [
        'car_id' => 'required',
        'rule_id' => 'required',
        'values' => 'required|json'
        ]);
        
        if ($validator->fails()) {
            $errors = $validator->errors();
            $errors =  json_decode($errors);
            
            return response()->json([
            'success' => false,
            'message' => $errors
            ], 422)->header('Content-Type', 'application/json');
        }
        
        $carRule = new CarRule;
        
        $carRule->car_id = $request->car_id;
        $carRule->rule_id = $request->rule_id;
        $carRule->values = $request->values;
        
        $carRule->save();
        
        return (new Response($carRule->toJSON(), 201))->header('Content-Type', 'application/json');
    }
    
    public function update(Request $request, $carId, $ruleId){
        $validator = Validator::make($request->all(), [
        'values' => 'required|json'
        ]);
        
        if ($validator->fails()) {
            $errors = $validator->errors();
            $errors =  json_decode($errors);
            
            return response()->json([
            'success' => false,
            'message' => $errors
            ], 422)->header('Content-Type', 'application/json');
        }
        
        $carRule = CarRule::where('car_id', '=', $carId)
                    ->where('rule_id', '=', $ruleId)
                    ->first();

         if($carRule==null) {
            return (new Response(json([
            'success' => false,
            'message' => 'CarRule not found'
            ]), 404))->header('Content-Type', 'application/json');
        }
        
        $carRule->values = $request->values;
        
        $carRule->save();
        
        return (new Response($carRule->toJSON(), 201))->header('Content-Type', 'application/json');
    }
}