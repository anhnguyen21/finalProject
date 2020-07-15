<?php

namespace App\Http\Controllers;

use App\order;
use Illuminate\Http\Request;
use App\order_item;
use App\product;
use DB;

class admin extends Controller
{
    public function getAdmin(){
        $order=DB::select('select p.title, p.unit_price, o.quantity, u.name from products as p,order_items as o , users as u,accounts as a where p.id =o.product_id and o.user_id=a.id and a.user_id=u.id');
        return view('admin/pageAdmin/admin',compact('order'));
    }
}

?>
