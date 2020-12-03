<?php

namespace App\Http\Controllers;

use App\Respondent;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $total_respondents = Respondent::all()->count();
        return view('dashboard', compact('total_respondents'));
    }
}
