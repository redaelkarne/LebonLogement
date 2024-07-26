<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    function  index(){
        $properties=Property::all();
        return view('frontend.search',compact('properties'));
    }
    function filter(Request $request){
        $location=$request->location;
        $type=$request->type;
        $bhk=$request->bhk;
        $minimum=$request->minimum;
        $maximum=$request->maximum;
        $offer=$request->offer;
        $status=$request->status;
        $furnished=$request->furnished;
        $properties=DB::table('property')->where('address','like',"%".$location."%")
            ->orWhere('type','like','%'.$type.'%')
            ->Where('bnk','like','%'.$bhk.'%')
            ->Where('offer','=',"$offer")
            ->Where('status','=',"$status")
            ->Where('furnished','=',"$furnished")
            ->whereBetween('price',[$minimum,$maximum])
            ->orderBy('created_at','desc')
            ->get();

        return view('frontend.search',compact('properties'));
    }
}
