<?php

namespace App\Http\Controllers;

use App\Respondent;
use Illuminate\Http\Request;

class RespondentController extends Controller
{
    public function index()
    {
        $respondents = Respondent::orderBy('created_at', 'asc')->get();
        return view('respondent.index' , compact('respondents'));
    }

    public function create()
    {
        return view('respondent.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name'    => 'required|min:3',
            'phone'   => 'required',
            'address' => 'required'
        ]);

        // insert to respondents table
        Respondent::create($request->all());
        return redirect('/respondent')->with('status', 'Data Responden Berhasil Ditambahkan');
    }
}
