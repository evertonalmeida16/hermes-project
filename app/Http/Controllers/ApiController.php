<?php

namespace App\Http\Controllers;

use App\Http\Services\Api;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function get()
    {
        $data = new Api;
        return $data->get();
    }
    
}
