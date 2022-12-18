<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApicallController extends Controller
{
    //
    function fetchapi()
    {
        $apidata    =   Http::get("https://reqres.in/api/users?page=2");
        return view('apicall',['datas'=>$apidata['data']]);
    }
}
