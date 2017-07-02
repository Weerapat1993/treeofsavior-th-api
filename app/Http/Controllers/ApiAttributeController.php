<?php

namespace App\Http\Controllers;

use App\Attribute;
use Input;
use Image;
use Illuminate\Http\Request;

class ApiAttributeController extends Controller
{
    public function index()
    {
        $attributes = Attribute::join('class_db','class_db.id','=','attribute.class_id')
                    ->join('skill_db','skill_db.id','=','attribute.skill_id')
                    ->select(
                        'attribute.*',
                        'class_db.name as class_name',
                        'class_db.rank',
                        'skill_db.name as skill_name'
                    )->get();

        return response()->json(['data' => $attributes]);
    }

    public function store(Request $request)
    {
        // $attribute = new Attribute;

        // $attribute->att_name = $request->att_name;
        // $attribute->att_description = $request->att_description;
        // $attribute->att_max_lv = $request->att_max_lv;
        // $attribute->skill_id = $request->skill_id;
        // $attribute->class_id = $request->class_id;

        // $attribute->save();

        if($request->att_icon != null)
        {
            // Upload Image -------------------------------------------------------------------
            $image = Input::file('att_icon');
            $filename = '.png';
            //$filename = '.' . $image->getClientOriginalExtension();
            $asset = 'images/icon-attribute/test' . $filename;
            $path = public_path($asset);
            //Image::make($image->getRealPath())->encode('jpg', 75)->save($path);
            // Image Encode & Resize ---------------------------------------------------
            $img = Image::make($image->getRealPath())->encode('png');
            $img->save($path);
            //----------------------------------------------------------------------------------
        }

        return response()->json([
            'data' => [],
            'code' => 200,
            'status' => 'OK',
        ]);
    }

    public function update(Request $request)
    {
        $update = Attribute::where('id','=',$request->id)->update([
            'att_name' => $request->att_name,
            'att_description' => $request->att_description,
            'att_max_lv' => $request->att_max_lv,
            // 'skill_id' => $request->skill_id,
            // 'class_id' => $request->class_id,
        ]);

        $attribute = Attribute::where('id','=', $request->id)->firstOrFail();
        return response()->json([
            'data' => $attribute,
            'code' => 200,
            'status' => 'OK',
        ]);
    }

    public function delete(Request $request) 
    {
        $delete = Attribute::where('id','=',$request->id)->delete();
        return response()->json([
            'data' => [],
            'code' => 200,
            'status' => 'OK',
        ]);
    }
}
