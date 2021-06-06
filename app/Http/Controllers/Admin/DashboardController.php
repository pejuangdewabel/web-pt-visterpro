<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Property;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $jual = Property::where('status2', '1')->count();
        $sewa = Property::where('status2', '2')->count();

        return view('pages.admin.dashboard',[
            'jual' => $jual,
            'sewa' => $sewa
        ]);
    }
}
