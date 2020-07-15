<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use App\category;
use App\gallery;
use DB;

class homeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }

    public function getList(){

        $pro= product::where('id_type',6)->paginate(8);
        $cate=DB::select('select * from categories');
        return view('page.homePage',compact('pro','cate'));
    }

}
