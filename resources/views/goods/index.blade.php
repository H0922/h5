@extends('layouts.layout')
@section('title','h5商城商品列表')
@section('content')
	<div class="section product product-list">
		<div class="container">
			<div class="pages-head">
				<h3>商品列表</h3>
			</div>
			<div class="input-field">
				<select>
					<option value="">Popular</option>
					<option value="1">New Product</option>
					<option value="2">Best Sellers</option>
					<option value="3">Best Reviews</option>
					<option value="4">Low Price</option>
					<option value="5">High Price</option>
				</select>
			</div>
			<div class="row">
                @foreach ($data as $v)
                <div class="col s6">
                        <div class="content">
                            <img src="{{env('APP_URL').'/storage/'.$v->goods_img}}" alt="">
                            <h6><a href="{{url('goods/list').'/'.$v->goods_id}}">{{$v->goods_name}}</a></h6>
                            <div class="price">
                                ￥{{$v->goods_price}} <span>￥{{$v->goods_price*1.2}}</span>
                            </div>
                            <button class="btn button-default">添加购物车</button>
                        </div>
                    </div>
                @endforeach
				
				{{-- <div class="col s6">
					<div class="content">
						<img src="/img/product-new2.png" alt="">
						<h6><a href="">Fashion Men's</a></h6>
						<div class="price">
							$20 <span>$28</span>
						</div>
						<button class="btn button-default">ADD TO CART</button>
					</div>
				</div> --}}
			</div>
			{{-- <div class="row margin-bottom">
				<div class="col s6">
					<div class="content">
						<img src="/img/product-new3.png" alt="">
						<h6><a href="">Fashion Men's</a></h6>
						<div class="price">
							$20 <span>$28</span>
						</div>
						<button class="btn button-default">ADD TO CART</button>
					</div>
				</div>
				<div class="col s6">
					<div class="content">
						<img src="/img/product-new4.png" alt="">
						<h6><a href="">Fashion Men's</a></h6>
						<div class="price">
							$20 <span>$28</span>
						</div>
						<button class="btn button-default">ADD TO CART</button>
					</div>
				</div>
			</div> --}}
			{{-- <div class="row">
				<div class="col s6">
					<div class="content">
						<img src="/img/product-new3.png" alt="">
						<h6><a href="">Fashion Men's</a></h6>
						<div class="price">
							$20 <span>$28</span>
						</div>
						<button class="btn button-default">ADD TO CART</button>
					</div>
				</div>
				<div class="col s6">
					<div class="content">
						<img src="/img/product-new4.png" alt="">
						<h6><a href="">Fashion Men's</a></h6>
						<div class="price">
							$20 <span>$28</span>
						</div>
						<button class="btn button-default">ADD TO CART</button>
					</div>
				</div> --}}
			</div>	
			<div class="pagination-product">
				<ul>
					<li class="active">1</li>
					<li><a href="">2</a></li>
					<li><a href="">3</a></li>
					<li><a href="">4</a></li>
					<li><a href="">5</a></li>
				</ul>
			</div>
		</div>
	</div>
	<!-- end product -->
    @endsection
