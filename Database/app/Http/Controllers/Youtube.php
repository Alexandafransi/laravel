<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Youtube extends Controller
{
    //

    public function index(){

        // echo "database is here";
        $result=DB::select('select * from users');
        print_r($result);
    }
}
