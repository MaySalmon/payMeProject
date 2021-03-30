<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sale;

class SaleController extends Controller
{
    function show()
    {
        
    //that will show all the data from mysql Sale table
       $data= Sale::all();
       return view('table', ['sales'=>$data]);
    }
}
