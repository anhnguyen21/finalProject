<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
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
    // public function getList(){
    //     $pro=DB::select('select p.id,title,image from galleries as g, products as p where g.product_id=p.id');
    //     return view('page.homePage',compact('pro'));
    // }
    public function getList(){
        $pro=DB::select('select p.id,title,unit_price, image from galleries as g, products as p where g.product_id=p.id ');
        return view('page.homePage',compact('pro'));
    }

}
