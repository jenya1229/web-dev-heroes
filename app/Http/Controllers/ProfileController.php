<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends BaseController
{
    public function index()
    {
        $user = Auth::user();
//        dd($user);

        return view('profile', [
            'user' => $user,
        ]);
    }
}
