<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    public function store() {

        //restituisco un json true
        return response()->json([
            'success' => true,
        ]);

        
    }
}
