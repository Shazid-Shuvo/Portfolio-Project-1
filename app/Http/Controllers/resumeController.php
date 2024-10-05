<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class resumeController extends Controller
{
    function page(Request $request)
    {
        return view('pages.resume');
    }
    function resumeLink(Request $request)
    {
        return DB::table('resumes')->first();
    }
    function experiencesData(Request $request)
    {
        return DB::table('experience')->get();
    }
    function educationalData(Request $request)
    {
        return DB::table('educations')->get();
    }
    function skillsData(Request $request)
    {
        return DB::table('skill')->get();
    }
    function languagesData(Request $request)
    {
        return DB::table('languages')->get();
    }
}
