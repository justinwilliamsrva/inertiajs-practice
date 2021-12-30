<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function __invoke()
    {



        $users = User::select('id', 'name', 'email')->get();




        return view('datatable', compact("users"));
    }
}
