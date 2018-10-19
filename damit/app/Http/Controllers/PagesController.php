<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getuserdetails($id, $key, $hash){
        $data = array(
            'userid' => $id    
        );
        return view('pages.getuserdetails')->with($data);
    }
}
