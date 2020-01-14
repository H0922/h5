    @extends('layouts.layout')
    @section('title','h5商城登录')
    @section('content')
	<div class="pages section">
		<div class="container">
			<div class="error404">
				<h4 style="color:red">{{$link['error']??''}}</h4>
				<h2>{{$link['msg']??''}}</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus quis temporibus, illum alias deserunt enim velit odit, soluta assumenda voluptatibus? Totam nam excepturi praesentium, soluta nisi id consectetur sapiente laborum.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum eos praesentium doloribus, odio cupiditate facilis, necessitatibus ab error, officiis quas ea exercitationem distinctio, nostrum ratione laboriosam. Architecto ratione explicabo, perferendis?</p>
			</div>
		</div>
    </div>
    @endsection
    