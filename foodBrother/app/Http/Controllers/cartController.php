<?php

namespace App\Http\Controllers;
use App\order;
use App\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use session;
class cartController extends Controller
{
    public function getCart(Request $request){
        // $pro=DB::select('select p.id,title,unit_price, image from galleries as g, products as p where g.product_id=p.id ');
        $cart=DB::select('select o.id ,p.title, p.unit_price,p.description, o.quantity, u.name ,g.image from galleries as g, products as p,order_items as o , users as u where g.product_id=p.id and p.id =o.product_id and u.id='.session()->get('customer'));

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
