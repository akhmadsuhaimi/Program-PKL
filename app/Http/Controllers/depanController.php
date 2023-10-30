<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class depanController extends Controller
{
    public function Tampilhalamandepan(){

        return view('tools_user.main');
    }
}
