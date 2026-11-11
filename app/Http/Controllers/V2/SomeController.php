<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SomeController
{
    public function index(){
        return response()->json([
            'data' => 'some json'
        ]);
    }
}
