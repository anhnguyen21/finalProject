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
    <section id="slider"><!--slider-->
		<div class="container">
            <div class="center-title-area">
                <h2 class="center-title">Sản phẩm bán chạy</h2>
            </div>
			<div class="row">
				<div class="col-sm-12">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                           <div class="row">
                            @foreach($pro as $product)
                                <div class="col-md-3 margin_cart" >
                                    <img src="{{ $product->image }}" alt="" width="270px" height="250px">
                                </div>

                            @endforeach
                           </div>
                          </div>
                          <div class="carousel-item">
                            <div class="row">
                                <div class="col-sm-6">
                                    <img class="d-block w-100" src="public/img_food/food_content/3.jfif" alt="First slide">

                                </div>
                                <div class="col-sm-6">
                                    <img class="d-block w-100" src="public/img_food/food_content/1.jfif" alt="First slide">
                                </div>
                            </div>
                          </div>
                          <div class="carousel-item">
                           <div class="row">
                            <div class="col-sm-6">
                                <img class="d-block w-100" src="public/img_food/food_content/3.jfif" alt="First slide">

                            </div>
                            <div class="col-sm-6">
                                <img class="d-block w-100" src="public/img_food/food_content/1.jfif" alt="First slide">
                            </div>
                           </div>
                          </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>
				</div>
			</div>
		</div>
	</section>
    <div class="container">
       <div class="row" style="margin-bottom: 20px">
            <div class="col-sm-4">
                <img src="public/img_food/food_content/1.jfif" alt="" width="400px" height="250px">
            </div>
            <div class="col-sm-4">
                <img src="public/img_food/food_content/2.jfif" alt="" width="400px" height="250px">
            </div>
            <div class="col-sm-4">
                <img src="public/img_food/food_content/3.jfif" alt="" width="300px" height="125px">
                <img src="public/img_food/food_content/1.jfif" alt="" width="300px" height="125px">
            </div>
       </div>
    </div>
    <section id="product" class="main_contain">
        <div class="container">
            <div class="row">
                <div class="col-sm-2 sidebar_menu">
                    <h5>mục sản phẩm</h5>
                    <ul>
                        @foreach($cate as $item)
                            <li><a href="">{{$item->type}}</a><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-sm-10">
                    <div class="container">
                        <div class="center-title-area">
                            <h2 class="center-title">Sản phẩm bán chạy</h2>
                        </div>
                        <div class="row">
                            @foreach($pro as $product)

                                <div class="col-md-3 margin_cart" >
                                    <div class="container cart_content">
                                    <img src="{{ $product->image }}" alt="">
                                    <h2><span>{{$product->title}}</span><span>{{$product->unit_price}} đ</span></h2>

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

