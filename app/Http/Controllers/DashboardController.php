<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Assessment;
use App\Models\Achievement;
use App\Models\Organization;
use App\Models\Result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        $data = [
            'title' => 'Dashboard',
            'subTitle' => null,
            'page_id' => null,

        ];
        // dd($data);
        return view('pages.dashboard',  $data);
    }
}
