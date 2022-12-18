<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    function logincheck(Request $req)
    {
        $post_data  = $req->input();
        $req->session()->put("test_user_name",$post_data['username']);
        return redirect('profile');
    }
}
