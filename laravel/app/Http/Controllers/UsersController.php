<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function getInfos()
    {
        return view('createUser');
    }

    public function postInfos(Request $request)
    {
        return 'Ton pseudo est ' . $request->input('pseudo');
    }
}
