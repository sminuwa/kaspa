<?php

namespace App\Http\Controllers;

use App\Models\AgroDealer;
use Illuminate\Http\Request;

class AgroDealerController extends Controller
{
    //
    public function index(){
        $agroDealers = AgroDealer::all();
        return view('pages.agro-dealers.index', compact('agroDealers'));
    }

    public function store(Request $request){
        $agroDealer_id = $request->agroDealer_id;
        $code = $request->code;
        $name = $request->name;
        $phone = $request->phone;
        $agroDealer = AgroDealer::find($agroDealer_id);
        if(!$agroDealer)
            $agroDealer = new AgroDealer();
        $agroDealer->code = $code;
        $agroDealer->name = $name;
        $agroDealer->phone = $phone;
        if($agroDealer->save())
            return back()->with('success', 'Record deleted successfully');
        return back()->with('error', 'Something went wrong');
    }

    public function show(Request $request, AgroDealer $agroDealer){
        return view('pages.agro-dealers.show', compact('agroDealer'));
    }

    public function destroy(AgroDealer $agroDealer){
        if($agroDealer->delete())
            return back()->with('success', 'Record deleted successfully');
        return back()->with('error', 'Something went wrong');
    }
}
