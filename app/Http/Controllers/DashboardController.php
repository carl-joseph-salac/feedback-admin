<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class DashboardController extends Controller
{
    public function viewCC(Request $request)
    {
        $year = $request->year ?? Carbon::now()->year;

        $cc1 = DB::table('tbl_feedback')->whereYear('feedback_date', $year)
            ->selectRaw(
                'SUM(CASE WHEN cc1 LIKE "%I know what a CC is and I saw%" THEN 1 ELSE 0 END) AS choices1_count,
                 SUM(CASE WHEN cc1 LIKE "%I know what a CC is but did NOT see%" THEN 1 ELSE 0 END) AS choices2_count,
                 SUM(CASE WHEN cc1 LIKE "%I learned of the CC only when I saw%" THEN 1 ELSE 0 END) AS choices3_count,
                 SUM(CASE WHEN cc1 = "I do not know what a CC is and I did not see one in this office." THEN 1 ELSE 0 END) AS choices4_count',
            )
            ->first();

        $cc2 = DB::table('tbl_feedback')->whereYear('feedback_date', $year)
            ->selectRaw(
                'SUM(CASE WHEN cc2 = "Easy to see" THEN 1 ELSE 0 END) AS choices1_count,
                 SUM(CASE WHEN cc2 = "Somewhat easy to see" THEN 1 ELSE 0 END) AS choices2_count,
                 SUM(CASE WHEN cc2 = "Difficult to see" THEN 1 ELSE 0 END) AS choices3_count,
                 SUM(CASE WHEN cc2 = "Not visible at all" THEN 1 ELSE 0 END) AS choices4_count',
            )
            ->first();
        $cc3 = DB::table('tbl_feedback')->whereYear('feedback_date', $year)
            ->selectRaw(
                'SUM(CASE WHEN cc3 = "Helped very much" THEN 1 ELSE 0 END) AS choices1_count,
                 SUM(CASE WHEN cc3 = "Somewhat helped" THEN 1 ELSE 0 END) AS choices2_count,
                 SUM(CASE WHEN cc3 = "Did not help" THEN 1 ELSE 0 END) AS choices3_count',
            )
            ->first();

        $yearlyFeedbacks = DB::table('tbl_feedback')->whereYear('feedback_date', $year)->count();
        $totalFeedbacks = DB::table('tbl_feedback')->count();
        $alldata = [ $cc1, $cc2, $cc3, $totalFeedbacks, $yearlyFeedbacks ];
        $currentYear = Carbon::now()->year;
        // $currentYear = 2023;
        $startYear = 2024;
        $years = [];

        for ($i = 0; $i <= (int) $currentYear - $startYear; $i++) {
            $years[] = (int) $startYear + $i;
        }
        // dd($years);

        if ($request->ajax()) {
            return response()->json($alldata);
        } else {
            return view('cc', compact('cc1', 'cc2', 'cc3', 'currentYear', 'years', 'totalFeedbacks', 'yearlyFeedbacks'));
        }
    }

    public function viewSQD()
    {
        $sqd0 = DB::table('tbl_feedback')
            ->selectRaw(
                'SUM(CASE WHEN sqd0 = "Strongly Disagree" THEN 1 ELSE 0 END) AS strongly_disagree_count,
                     SUM(CASE WHEN sqd0 = "Disagree" THEN 1 ELSE 0 END) AS disagree_count,
                     SUM(CASE WHEN sqd0 = "Neither Agree nor Disagree" THEN 1 ELSE 0 END) AS neutral_count,
                     SUM(CASE WHEN sqd0 = "Agree" THEN 1 ELSE 0 END) AS agree_count,
                     SUM(CASE WHEN sqd0 = "Strongly Agree" THEN 1 ELSE 0 END) AS strongly_agree_count',
            )
            ->first();
        $sqd1 = DB::table('tbl_feedback')
            ->selectRaw(
                'SUM(CASE WHEN sqd1 = "Strongly Disagree" THEN 1 ELSE 0 END) AS strongly_disagree_count,
                     SUM(CASE WHEN sqd1 = "Disagree" THEN 1 ELSE 0 END) AS disagree_count,
                     SUM(CASE WHEN sqd1 = "Neither Agree nor Disagree" THEN 1 ELSE 0 END) AS neutral_count,
                     SUM(CASE WHEN sqd1 = "Agree" THEN 1 ELSE 0 END) AS agree_count,
                     SUM(CASE WHEN sqd1 = "Strongly Agree" THEN 1 ELSE 0 END) AS strongly_agree_count',
            )
            ->first();
        $sqd2 = DB::table('tbl_feedback')
            ->selectRaw(
                'SUM(CASE WHEN sqd2 = "Strongly Disagree" THEN 1 ELSE 0 END) AS strongly_disagree_count,
                     SUM(CASE WHEN sqd2 = "Disagree" THEN 1 ELSE 0 END) AS disagree_count,
                     SUM(CASE WHEN sqd2 = "Neither Agree nor Disagree" THEN 1 ELSE 0 END) AS neutral_count,
                     SUM(CASE WHEN sqd2 = "Agree" THEN 1 ELSE 0 END) AS agree_count,
                     SUM(CASE WHEN sqd2 = "Strongly Agree" THEN 1 ELSE 0 END) AS strongly_agree_count',
            )
            ->first();
        $sqd3 = DB::table('tbl_feedback')
            ->selectRaw(
                'SUM(CASE WHEN sqd3 = "Strongly Disagree" THEN 1 ELSE 0 END) AS strongly_disagree_count,
                     SUM(CASE WHEN sqd3 = "Disagree" THEN 1 ELSE 0 END) AS disagree_count,
                     SUM(CASE WHEN sqd3 = "Neither Agree nor Disagree" THEN 1 ELSE 0 END) AS neutral_count,
                     SUM(CASE WHEN sqd3 = "Agree" THEN 1 ELSE 0 END) AS agree_count,
                     SUM(CASE WHEN sqd3 = "Strongly Agree" THEN 1 ELSE 0 END) AS strongly_agree_count',
            )
            ->first();
        $sqd4 = DB::table('tbl_feedback')
            ->selectRaw(
                'SUM(CASE WHEN sqd4 = "Strongly Disagree" THEN 1 ELSE 0 END) AS strongly_disagree_count,
                     SUM(CASE WHEN sqd4 = "Disagree" THEN 1 ELSE 0 END) AS disagree_count,
                     SUM(CASE WHEN sqd4 = "Neither Agree nor Disagree" THEN 1 ELSE 0 END) AS neutral_count,
                     SUM(CASE WHEN sqd4 = "Agree" THEN 1 ELSE 0 END) AS agree_count,
                     SUM(CASE WHEN sqd4 = "Strongly Agree" THEN 1 ELSE 0 END) AS strongly_agree_count',
            )
            ->first();
        $sqd5 = DB::table('tbl_feedback')
            ->selectRaw(
                'SUM(CASE WHEN sqd5 = "Strongly Disagree" THEN 1 ELSE 0 END) AS strongly_disagree_count,
                     SUM(CASE WHEN sqd5 = "Disagree" THEN 1 ELSE 0 END) AS disagree_count,
                     SUM(CASE WHEN sqd5 = "Neither Agree nor Disagree" THEN 1 ELSE 0 END) AS neutral_count,
                     SUM(CASE WHEN sqd5 = "Agree" THEN 1 ELSE 0 END) AS agree_count,
                     SUM(CASE WHEN sqd5 = "Strongly Agree" THEN 1 ELSE 0 END) AS strongly_agree_count',
            )
            ->first();
        $sqd6 = DB::table('tbl_feedback')
            ->selectRaw(
                'SUM(CASE WHEN sqd6 = "Strongly Disagree" THEN 1 ELSE 0 END) AS strongly_disagree_count,
                     SUM(CASE WHEN sqd6 = "Disagree" THEN 1 ELSE 0 END) AS disagree_count,
                     SUM(CASE WHEN sqd6 = "Neither Agree nor Disagree" THEN 1 ELSE 0 END) AS neutral_count,
                     SUM(CASE WHEN sqd6 = "Agree" THEN 1 ELSE 0 END) AS agree_count,
                     SUM(CASE WHEN sqd6 = "Strongly Agree" THEN 1 ELSE 0 END) AS strongly_agree_count',
            )
            ->first();
        $sqd7 = DB::table('tbl_feedback')
            ->selectRaw(
                'SUM(CASE WHEN sqd7 = "Strongly Disagree" THEN 1 ELSE 0 END) AS strongly_disagree_count,
                     SUM(CASE WHEN sqd7 = "Disagree" THEN 1 ELSE 0 END) AS disagree_count,
                     SUM(CASE WHEN sqd7 = "Neither Agree nor Disagree" THEN 1 ELSE 0 END) AS neutral_count,
                     SUM(CASE WHEN sqd7 = "Agree" THEN 1 ELSE 0 END) AS agree_count,
                     SUM(CASE WHEN sqd7 = "Strongly Agree" THEN 1 ELSE 0 END) AS strongly_agree_count',
            )
            ->first();
        $sqd8 = DB::table('tbl_feedback')
            ->selectRaw(
                'SUM(CASE WHEN sqd8 = "Strongly Disagree" THEN 1 ELSE 0 END) AS strongly_disagree_count,
                     SUM(CASE WHEN sqd8 = "Disagree" THEN 1 ELSE 0 END) AS disagree_count,
                     SUM(CASE WHEN sqd8 = "Neither Agree nor Disagree" THEN 1 ELSE 0 END) AS neutral_count,
                     SUM(CASE WHEN sqd8 = "Agree" THEN 1 ELSE 0 END) AS agree_count,
                     SUM(CASE WHEN sqd8 = "Strongly Agree" THEN 1 ELSE 0 END) AS strongly_agree_count',
            )
            ->first();

        $currentYear = Carbon::now()->year;
        $startYear = 2024;
        $years = [];

        for ($i = 0; $i <= (int) $currentYear - $startYear; $i++) {
            $years[] = (int) $startYear + $i;
        }

        $currentYear = Carbon::now()->year;
        return view('sqd', compact('sqd0', 'sqd1', 'sqd2', 'sqd3', 'sqd4', 'sqd5', 'sqd6', 'sqd7', 'sqd8', 'currentYear', 'years'));
    }

    public function viewReport()
    {
        $currentYear = Carbon::now()->year;
        return view('report', compact('currentYear'));
    }

}
