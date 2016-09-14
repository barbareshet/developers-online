<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends BaseController{
    public function index(){
        self::$data['title'] = 'Developers Online';
        return view('content.home' , self::$data);
        
    }
}
