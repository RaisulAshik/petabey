<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecentHistoryController extends Controller
{
   public function showAllHistory(){
       return view('history');
   }
}
