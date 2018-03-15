<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Type;

class typeController extends Controller
{
    public function index()
    {
    	return Type::all();
    }


    public function show($id)
    {
    	return Type::find($id);
    }

    public function destroy($id)
    {
        return Type::destroy($id);
    }

   public function store(Request $request)
    {
            $type = new Type();
            $type->type = $request->type;
            $type->save();
            return Type::find($type->id);       
    }

    public function update(Request $request, $id)
    {
    	$type = Evenements::find($id);
        $type->type = $request->type;
        $type->save();
        return $type;
    }
}