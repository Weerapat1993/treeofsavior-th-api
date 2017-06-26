<?php

namespace App\Http\Controllers;

use App\Skill;
use Illuminate\Http\Request;

class ApiSkillController extends Controller
{
    public function index()
    {
        $skills = Skill::all();

        return response()->json(['data' => $skills]);
    }

    public function store(Request $request)
    {
        $count = Skill::where('name','=', $request->name)->count();

        if ($count) {
            return response()->json([
                'data' => ([
                    'message' => 'Internal Server Error'
                ]),
                'code' => 500,
                'status' => 'Internal Server',
            ]);
        }

        $skill = new Skill;

        $skill->name = $request->name;
        $skill->description = $request->description;
        $skill->max_level = $request->max_level;
        $skill->circle = $request->circle;
        $skill->url = $request->url;
        $skill->class_id = $request->class_id;

        $skill->save();

        return response()->json([
            'data' => $skill,
            'code' => 200,
            'status' => 'OK',
        ]);
    }

    public function update(Request $request)
    {
        $update = Skill::where('id','=',$request->id)->update([
            'description' => $request->description,
        ]);

        $skill = Skill::where('name','=', $request->name)->firstOrFail();
        return response()->json([
            'data' => $skill,
            'code' => 200,
            'status' => 'OK',
        ]);
    }

    public function delete(Request $request) 
    {
        $update = Skill::where('id','=',$request->id)->delete();
        return response()->json([
            'data' => [],
            'code' => 200,
            'status' => 'OK',
        ]);
    }
}
