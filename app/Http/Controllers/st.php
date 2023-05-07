<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\data;

class st extends Controller
{
    public function insert_st()
    {
        $info=new data;
        $info->feedback1=$req->feedback1;
        $info->feedback2=$req->feedback2;
        $info->feedback3=$req->feedback3;
        $info->save();
        return view('st');
    }
}
