<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        // I'm India so my timezone is Asia/Calcutta
        date_default_timezone_set('Asia/Calcutta');

        // 24-hour format of an hour without leading zeros (0 through 23)
        $Hour = date('G');
        $user = 10;
        return view('welcome',[
            'name' => 'Vinoth',
            'company' => 'Deanta Publishing',
            'hours' => $Hour,
            'userID' => $user,
        ]);
        
    }

    public function homeindex()
    {
        return view('Pages.home');
    }

    public function aboutus()
    {
        return view('Pages.aboutus');
    }

    public function contact()
    {
        return view('Pages.contact');
    }
}
