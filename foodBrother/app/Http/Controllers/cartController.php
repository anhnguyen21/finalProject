<?php

namespace App\Http\Controllers;
use App\order;
use App\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class cartController extends Controller
{
    public function getCart(Request $request){
        $cart=DB::select('select * from products as p , orders as o where p.id=o.id_pro');
        return view('page.cart',compact('cart'));
    }
    public function delCart(Request $request){
        $delete=$request->input('delete');
        $order = order::find($delete);
        $order->delete();
        return redirect()->route('cart.show')->with(['flash_level' => 'success','flash_message' =>'Xóa sản phẩm thành công']);
    }
    public function editCart(Request $request){
        $id=$request->input('delete');
        // echo $delete;
        $bill = product::find(1);
        $bill->payment=$request->input('payment');
        $bill->total=$request->input('total');
        $bill->note=$request->input('note');
        $bill->save();
    }
}
