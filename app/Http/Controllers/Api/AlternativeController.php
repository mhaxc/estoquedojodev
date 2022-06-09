<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Alternative;

class AlternativeController extends Controller
{
    private $alternative;

    public function __construct(Alternative $store)
    {
        $this->alternative = $alternative;


    }
   
    public function index()
    {
        $alternatives = $this->alternative->paginate(10);
        
        return response()->json($alternatives);
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
