<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //here we create the methods to call the views

    public function home(){
        return view('pages.home');
    }

    public function about(){
        return view('pages.about');

    }

    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['Website Development','Sky Diving','Fishing']
        );
        return view('pages.services')->with($data);
    }
}
