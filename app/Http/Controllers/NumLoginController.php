<?php

namespace App\Http\Controllers;

use App\NumLogin;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class NumLoginController extends Controller
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
        $data = NumLogin::orderBy('count'. 'desc')->limit(5)->get();

        $array[] = ['name', 'count'];

        foreach($data as $key => $value)
        {
            $profile = $value->user->profile;
            $name = $profile->fname . ' ' . $profile->lname;
            $array[++$key] = [$name, (int)$value->count];
        }
        return view('numLogin')->with('loginCount', json_encode($array));
    }
}
