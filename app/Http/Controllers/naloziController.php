<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\nalozi;

class naloziController extends Controller
{
    public function show($ime){

        return view('nalozi',[
            'lista'=>nalozi::where('ime',$ime)->firstOrFail()
        ]);
    }
}
