<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index(Request $request){
        $email = $request->email;
        $password = $request->password;
        if($email != "aquagric@gmail.com" && $password != "123456")
            return back()->with('error', 'Invalid email or password');
        return view('pages.dashboards.index');
    }
}
