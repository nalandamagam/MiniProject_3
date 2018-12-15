<?php

namespace App\Http\Controllers;

use App\NumLogin;
use App\QuestionCount;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class QuestionCountController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = QuestionCount::orderBy('count'. 'desc')->limit(5)->get();

        $array[] = ['name', 'count'];

        foreach($data as $key => $value)
        {
            $array[++$key] = [(string)$value->question_id, (int)$value->count];
        }
        return view('questionCount')->with('questionCount', json_encode($array));
    }
}
