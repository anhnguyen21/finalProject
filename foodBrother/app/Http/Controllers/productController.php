<?php

namespace App\Http\Controllers;
use App\product;
use App\order;
use App\order_item;
use Illuminate\Http\Request;
use App\Http\Requests\editProduct;
use DB;

class productController extends Controller
{
    public function getEdit($id){
        $pro=product::find($id);
        return view("editProduct");
    }
    public function posEdit($id,editProduct $edit){
        $order=order::find($id);
        $pro=product::find($order->id_pro);
        $file_name = $edit->file('image')->getClientOriginalName();
        $pro->name=$edit->input('name');
        $pro->description=$edit->input('description');
        $pro->unit_price=$edit->input('price');
        $pro->image='public/img_food/'.$file_name;
        $edit->file('image')->move('public/img_food/',$file_name);
        echo
        $pro->save();
        return redirect()->route('cart.show')->with(['flash_level' => 'success','flash_message' =>'Thêm sản phẩm thành công']);
    }
    public function getDetail(Request $req,$id){
        $sanpham=product::where('id',$id)->first();
        return view('page/detail',compact('sanpham'));
    }
    public function deleteProduct(Request $req,$id){
        order_item::find($id)->delete();

        return redirect()->route('cart.show');
    }
    public function addCart(Request $request,$id){
        $quan=order_item::where('product_id',$id)->first()->quantity;
        DB::table('order_items')
            ->where('product_id', $id)
            ->update(['quantity' =>$quan+1]);
        return redirect()->route('cart.show');
    }
}
