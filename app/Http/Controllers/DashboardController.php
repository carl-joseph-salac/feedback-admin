<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function viewDashboard(){
        // $sqdFeedback = DB::table('tbl_feedback')->select('sqd0')->where('sqd0', 'Agree')->get()->count();

        $sqd0 = DB::table('tbl_feedback')
        ->selectRaw('SUM(CASE WHEN sqd0 = "Strongly Agree" THEN 1 ELSE 0 END) AS strongly_agree_count,
                     SUM(CASE WHEN sqd0 = "Agree" THEN 1 ELSE 0 END) AS agree_count,
                     SUM(CASE WHEN sqd0 = "Neither Agree nor Disagree" THEN 1 ELSE 0 END) AS neutral_count,
                     SUM(CASE WHEN sqd0 = "Disagree" THEN 1 ELSE 0 END) AS disagree_count,
                     SUM(CASE WHEN sqd0 = "Strongly Disagree" THEN 1 ELSE 0 END) AS strongly_disagree_count')->first();

        $sqd1 = DB::table('tbl_feedback')
        ->selectRaw('SUM(CASE WHEN sqd1 = "Strongly Agree" THEN 1 ELSE 0 END) AS strongly_agree_count,
                     SUM(CASE WHEN sqd1 = "Agree" THEN 1 ELSE 0 END) AS agree_count,
                     SUM(CASE WHEN sqd1 = "Neither Agree nor Disagree" THEN 1 ELSE 0 END) AS neutral_count,
                     SUM(CASE WHEN sqd1 = "Disagree" THEN 1 ELSE 0 END) AS disagree_count,
                     SUM(CASE WHEN sqd1 = "Strongly Disagree" THEN 1 ELSE 0 END) AS strongly_disagree_count')->first();

        $sqd2 = DB::table('tbl_feedback')
        ->selectRaw('SUM(CASE WHEN sqd2 = "Strongly Agree" THEN 1 ELSE 0 END) AS strongly_agree_count,
                     SUM(CASE WHEN sqd2 = "Agree" THEN 1 ELSE 0 END) AS agree_count,
                     SUM(CASE WHEN sqd2 = "Neither Agree nor Disagree" THEN 1 ELSE 0 END) AS neutral_count,
                     SUM(CASE WHEN sqd2 = "Disagree" THEN 1 ELSE 0 END) AS disagree_count,
                     SUM(CASE WHEN sqd2 = "Strongly Disagree" THEN 1 ELSE 0 END) AS strongly_disagree_count')->first();

        $sqd3 = DB::table('tbl_feedback')
        ->selectRaw('SUM(CASE WHEN sqd3 = "Strongly Agree" THEN 1 ELSE 0 END) AS strongly_agree_count,
                     SUM(CASE WHEN sqd3 = "Agree" THEN 1 ELSE 0 END) AS agree_count,
                     SUM(CASE WHEN sqd3 = "Neither Agree nor Disagree" THEN 1 ELSE 0 END) AS neutral_count,
                     SUM(CASE WHEN sqd3 = "Disagree" THEN 1 ELSE 0 END) AS disagree_count,
                     SUM(CASE WHEN sqd3 = "Strongly Disagree" THEN 1 ELSE 0 END) AS strongly_disagree_count')->first();

        $sqd4 = DB::table('tbl_feedback')
        ->selectRaw('SUM(CASE WHEN sqd4 = "Strongly Agree" THEN 1 ELSE 0 END) AS strongly_agree_count,
                     SUM(CASE WHEN sqd4 = "Agree" THEN 1 ELSE 0 END) AS agree_count,
                     SUM(CASE WHEN sqd4 = "Neither Agree nor Disagree" THEN 1 ELSE 0 END) AS neutral_count,
                     SUM(CASE WHEN sqd4 = "Disagree" THEN 1 ELSE 0 END) AS disagree_count,
                     SUM(CASE WHEN sqd4 = "Strongly Disagree" THEN 1 ELSE 0 END) AS strongly_disagree_count')->first();

        $sqd5 = DB::table('tbl_feedback')
        ->selectRaw('SUM(CASE WHEN sqd5 = "Strongly Agree" THEN 1 ELSE 0 END) AS strongly_agree_count,
                     SUM(CASE WHEN sqd5 = "Agree" THEN 1 ELSE 0 END) AS agree_count,
                     SUM(CASE WHEN sqd5 = "Neither Agree nor Disagree" THEN 1 ELSE 0 END) AS neutral_count,
                     SUM(CASE WHEN sqd5 = "Disagree" THEN 1 ELSE 0 END) AS disagree_count,
                     SUM(CASE WHEN sqd5 = "Strongly Disagree" THEN 1 ELSE 0 END) AS strongly_disagree_count')->first();

        $sqd6 = DB::table('tbl_feedback')
        ->selectRaw('SUM(CASE WHEN sqd6 = "Strongly Agree" THEN 1 ELSE 0 END) AS strongly_agree_count,
                     SUM(CASE WHEN sqd6 = "Agree" THEN 1 ELSE 0 END) AS agree_count,
                     SUM(CASE WHEN sqd6 = "Neither Agree nor Disagree" THEN 1 ELSE 0 END) AS neutral_count,
                     SUM(CASE WHEN sqd6 = "Disagree" THEN 1 ELSE 0 END) AS disagree_count,
                     SUM(CASE WHEN sqd6 = "Strongly Disagree" THEN 1 ELSE 0 END) AS strongly_disagree_count')->first();

        $sqd7 = DB::table('tbl_feedback')
        ->selectRaw('SUM(CASE WHEN sqd7 = "Strongly Agree" THEN 1 ELSE 0 END) AS strongly_agree_count,
                     SUM(CASE WHEN sqd7 = "Agree" THEN 1 ELSE 0 END) AS agree_count,
                     SUM(CASE WHEN sqd7 = "Neither Agree nor Disagree" THEN 1 ELSE 0 END) AS neutral_count,
                     SUM(CASE WHEN sqd7 = "Disagree" THEN 1 ELSE 0 END) AS disagree_count,
                     SUM(CASE WHEN sqd7 = "Strongly Disagree" THEN 1 ELSE 0 END) AS strongly_disagree_count')->first();

        $sqd8 = DB::table('tbl_feedback')
        ->selectRaw('SUM(CASE WHEN sqd8 = "Strongly Agree" THEN 1 ELSE 0 END) AS strongly_agree_count,
                     SUM(CASE WHEN sqd8 = "Agree" THEN 1 ELSE 0 END) AS agree_count,
                     SUM(CASE WHEN sqd8 = "Neither Agree nor Disagree" THEN 1 ELSE 0 END) AS neutral_count,
                     SUM(CASE WHEN sqd8 = "Disagree" THEN 1 ELSE 0 END) AS disagree_count,
                     SUM(CASE WHEN sqd8 = "Strongly Disagree" THEN 1 ELSE 0 END) AS strongly_disagree_count')->first();
        // dd($sqd0);
        return view('dashboard', compact('sqd0', 'sqd1', 'sqd2', 'sqd3', 'sqd4', 'sqd5', 'sqd6', 'sqd7', 'sqd8'));
    }

    public function viewReport(){
        return view('report');
    }
}


