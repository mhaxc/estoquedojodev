<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Alternative;

class AlternativeController extends Controller
{
   
    public function index()
    {
        return Alternative::all();  
    }


    public function store(Request $request)
    {
        
    }

  
    public function show($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

  
    public function destroy($id)
    {
        //
    }
}
