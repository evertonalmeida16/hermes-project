<?php

namespace App\Http\Services;

use App\Form;

use Illuminate\Database\Eloquent\Builder;

use Illuminate\Http\Request;

class Api
{	
    public function get()
    {
     try {
        $roles = Form::all();

        } catch (\Exception $e) {
            return response()->json(['data'=> null, 'msg' => [$e->getMessage()], 'statusCode' => 500],500);
        }

        return response()->json(['data' => $roles, 'msg' => ['OK'], 'statusCode' => 200]);
    }
    
}
