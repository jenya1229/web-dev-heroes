<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends BaseController
{
    public function index()
    {
        return view('skill');
    }

    public function list()
    {
        $skills = Skill::all();

        return response()->json($skills);
    }

    public function store(Request $request)
    {
        $skill = new Skill();
        $skill->name = $request->input('name');
        $skill->save();

        return response()->json($skill);
    }
}
