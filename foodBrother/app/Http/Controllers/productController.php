<?php

namespace App\Http\Controllers;
use App\product;
use App\order;
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
        $pro=DB::select('select p.id,title,image from galleries as g, products as p where g.product_id=p.id and p.id='.$id);
        // echo json_encode($pro->products->title);
        return view('welcome',compact('pro'));
    }
}
