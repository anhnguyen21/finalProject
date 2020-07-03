@extends('master')
@section('content')
    <section id="home" class="slide_scroll" data-parallax="scroll" data-image-src="public/img_food/pa.jpg">
        <div class="slide_text_centrer">
            <h2 class="h2_text" >Order Food Online From the Best Restaurants</h2>
        </div>
        <img src="public/img_food/clouds.png" alt="">
    </section>
    <section>
        <div class="container item">
            <div class="row">
                <div class="col-sm-2">
                    <div class="content_item">
                        <img src="public/img_food/food_item/restaurant1.png" alt="">
                        <h5>Cơm</h5>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="content_item">
                        <img src="public/img_food/food_item/restaurant2.png" alt="">
                        <h5>Gà</h5>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="content_item">
                        <img src="public/img_food/food_item/restaurant3.png" alt="">
                        <h5>Lẩu</h5>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="content_item">
                        <img src="public/img_food/food_item/restaurant4.png" alt="">
                        <h5>Hải sản</h5>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="content_item">
                        <img src="public/img_food/food_item/restaurant5.png" alt="">
                        <h5>Nướng</h5>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="content_item">
                        <img src="public/img_food/food_item/restaurant1.png" alt="">
                        <h5>Luộc</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="top_restaurent">
            <h5>Website for Restaurant and Cafe</h5>
            <h3>TOP RESTAURANTS</h3>
            <p><span>that get tricky are things like burgers and fries, or things that are deep-fried.</span><span> We do have a couple of burger restaurants that are capable of doing a good job</span><span> transporting but it's Fries are almost impossible.</span></p>
        </div>
    </section>
    <section id="product" class="main_contain">
        <div class="type_product">Sản phẩm bán chạy</div>
        <div class="container product">
            <div class="row ">
                @foreach($pro as $product)
                <div class="col-md-3">
                    <div class="content_pro">

                        <div class="imgBx">
                            <img src="{{ $product->image }}" alt="">
                        </div>
                        <div class="details">
                            <div>
                                <h2>{{ $product->title }}</h2>
                            </div>
                        </div>
                        <div class="form">

                                <button name="addCart" value="{{ $product->id }}" class="btn btn-secondary"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>
                                <button value="{{ $product->id }}" class="btn btn-secondary"><i class="fa fa-product-hunt" aria-hidden="true"><a href="{{ route('chitietsanpham',$product->id) }}"></a></i></button>
                                <a href="{{ route('chitietsanpham',$product->id) }}"><i class="fa fa-product-hunt" aria-hidden="true"></i></a>

                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

