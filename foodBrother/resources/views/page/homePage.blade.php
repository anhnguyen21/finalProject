@extends('../page/master')
@section('content')
    <section id="home" class="slide_scroll" data-parallax="scroll" data-image-src="public/img_food/pa.jpg">
        <div class="slide_text_centrer">
            <h2 class="h2_text" >Đặt món cùng</h2>
        </div>
        <img src="public/img_food/clouds.png" alt="">
    </section>
    <section>
        <div class="top_restaurent">
            <h5>Website for Restaurant and Cafe</h5>
            <h3>TOP RESTAURANTS</h3>
            <p><span>that get tricky are things like burgers and fries, or things that are deep-fried.</span><span> We do have a couple of burger restaurants that are capable of doing a good job</span><span> transporting but it's Fries are almost impossible.</span></p>
        </div>
    </section>
    <section id="product" class="main_contain">
        <div class="container">
            <div class="row">
                <div class="col-sm-2 sidebar_menu">
                    <h5>mục sản phẩm</h5>
                    <ul>
                        <li><a href="">Cơm chiên</a><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                        <li><a href="">Lẩu hải sản</a><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                        <li><a href="">123</a><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                        <li><a href="">123</a><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                        <li><a href="">123</a><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                        <li><a href="">123</a><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                    </ul>
                </div>
                <div class="col-sm-10">
                    <div class="container">
                        <div class="row">
                            @foreach($pro as $product)
                                <div class="col-md-3 margin_cart">
                                    <div class="container cart_content">
                                    <img src="{{ $product->image }}" alt="">
                                    <h2>{{$product->title}}</h2>
                                    <ul>
                                        <li>
                                            <a href="{{ route('themgiohang',$product->id) }}"><i class="fa fa-shopping-cart" aria-hidden="true"></i></i></a>
                                        </li>
                                        <li>
                                            <a href="{{ route('chitietsanpham',$product->id) }}"><i class="fa fa-reddit-alien" aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-heart" aria-hidden="true"></i></i></a>
                                        </li>
                                    </ul>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </section>
@endsection

