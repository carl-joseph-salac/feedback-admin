<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function viewDashboard(){
        $sqQuestion = DB::table('tbl_sqd_question')->get();
        return view('dashboard', compact('sqQuestion'));
    }
}


