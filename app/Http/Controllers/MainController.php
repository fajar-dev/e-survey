<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        $data = [
            'title' => 'Beranda',
            'subTitle' => null,
            'page_id' => null,
        ];
        return view('main.index',  $data);
    }
}
