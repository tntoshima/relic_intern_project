<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class money_managerController extends Controller
{
    //
    public function showList(){
        return view('money_manager.list');
    }
}
