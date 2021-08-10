<?php

namespace App\Http\Controllers;

use App\Relawan;
use Illuminate\Http\Request;

class RelawanApiController extends Controller
{
    public function upRelawan(Request $request){
        $relawan = new Relawan;

        $relawan->relawan_id=$request->relawan_id;
        $relawan->lapakbaca_id=$request->lapakbaca_id;
        $relawan->status=0;
        $relawan->save();

        return response()->json($relawan, 200);
    }
}
