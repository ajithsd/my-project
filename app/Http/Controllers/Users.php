<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    //
    public function index()
    {
        echo "My First Controller";
    }
    public function userid($id)
    {
        echo "My First Controller with id = ".$id;
    }
    public function userapi()
    {
        return (['name'=>'ajith','id'=>25]);
    }
}
