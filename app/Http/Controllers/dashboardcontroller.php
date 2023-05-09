<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class dashboardcontroller extends Controller
{
    //
    public function index(Request $request){
    return view('test', [
    'title' => $request ->query(key: 'title', default: 'valor default' )
            ]);
            
    }
}
