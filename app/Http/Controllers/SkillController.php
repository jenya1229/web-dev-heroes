<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
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
}
