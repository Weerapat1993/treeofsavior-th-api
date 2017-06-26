<?php

namespace App\Http\Controllers;

use App\Attribute;
use Illuminate\Http\Request;

class AttributeController extends Controller
{
    public function index()
    {
        $skills = Attribute::join('class_db','class_db.id','=','attribute.class_id')
                    ->select('attribute.*','class_db.name as class_name','class_db.rank')->get();

        return response()->json(['data' => $skills]);
    }
}
