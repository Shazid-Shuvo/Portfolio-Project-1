<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class projectController extends Controller
{
    function page(Request $request){
        return view('pages.project');
    }
    function projectsData(Request $request){
        return DB::table('products')->get();
    }
}
