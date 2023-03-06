<?php

namespace App\Http\Controllers;

use App\Models\Farmer;
use Illuminate\Http\Request;

class FarmerController extends Controller
{
    //
    public function index(){
        $farmers = Farmer::all();
        return view('pages.farmers.index', compact('farmers'));
    }

    public function store(Request $request){
        $farmer_id = $request->farmer_id;
        $code = $request->code;
        $name = $request->name;
        $phone = $request->phone;
        $farmer = Farmer::find($farmer_id);
        if(!$farmer)
            $farmer = new Farmer();
        $farmer->code = $code;
        $farmer->name = $name;
        $farmer->phone = $phone;
        if($farmer->save())
            return back()->with('success', 'Record deleted successfully');
        return back()->with('error', 'Something went wrong');
    }

    public function show(Request $request, Farmer $farmer){
        return view('pages.farmers.show', compact('farmer'));
    }

    public function destroy(Farmer $farmer){
        if($farmer->delete())
            return back()->with('success', 'Record deleted successfully');
        return back()->with('error', 'Something went wrong');
    }
}
