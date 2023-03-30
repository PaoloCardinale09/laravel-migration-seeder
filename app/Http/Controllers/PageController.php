<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class PageController extends Controller
{
    public function homepage(){

        $trains = Train::all();
        // dd($trains);
        $trains = Train::where('data_partenza','LIKE', '2023-03-30')->get();
    
        return view('index',compact('trains'));

       
    }
}