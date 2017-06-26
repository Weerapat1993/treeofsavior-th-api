<?php

namespace App\Http\Controllers;

use App\Classes;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function index()
    {
        $skills = Classes::join('class_type','class_db.class_type','=','class_type.id') 
                        ->select('class_db.id','class_db.name','class_db.rank','class_db.img_url','class_type.name as class_type')->get();

        return response()->json(['data' => $skills]);
    }
}
