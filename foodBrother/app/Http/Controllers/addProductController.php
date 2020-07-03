<?php

namespace App\Http\Controllers;
use App\order;
use App\customer;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class addProductController extends Controller
{
    public function postAdd(Request $request){
        $id=$request->input('addCart');
        $id_use=customer::where('name',Session::get('UserName'))->first();
        if((DB::select('select id_pro from orders where id_pro='.$id.' and id_order ='.$id_use->id))==true){
            // $quan=DB::select('select quantity from orders where id_pro=3');
            $quan=order::where('id_pro',$id)->first();
            // $quan=(int)($quan)+1;
            DB::table('orders')
              ->where('id_pro', $id)
              ->update(['quantity' =>$quan->quantity+1]);

        }else{
            $order= new order();
            $order->id_pro=$id;

            $order->id_order=$id_use->id;
            $order->quantity=1;
            $order->save();
        }
        return redirect()->route('food.show');
    }
}
