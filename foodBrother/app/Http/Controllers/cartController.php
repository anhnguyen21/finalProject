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
        $cart=DB::select('select o.id ,p.title, p.unit_price, p.description, p.image, o.quantity, u.name from products as p , order_items as o , users as u where p.id =o.product_id and o.user_id=u.id and o.user_id='.session()->get('customer'));
        $total=DB::select('select sum(p.unit_price) as tota from products as p , order_items as o where p.id =o.product_id and o.user_id='.session()->get('customer'));
        // $total =DB::table('products')
        // ->join('order_items', 'products.id', '=', 'order_items.product_id')
        // ->select('products.unit_price as total')
        // ->get();
        echo var_dump($total[0]->tota);
        // $articles =DB::table('articles')
        //         ->join('categories', 'articles.id', '=', 'categories.id')
        //         ->join('users', 'users.id', '=', 'articles.user_id')
        //         ->select('articles.id','articles.title','articles.body','users.username', 'category.name')
        //         ->get();
        return view('page.cart',compact('cart','total'));
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
