@extends('layouts.layout')
@section('title','h5商城登录')
@section('content')

	<!-- login -->
	<div class="pages section">
		<div class="container">
			<div class="pages-head">
				<h3>登录</h3>
			</div>
			<div class="login">
				<div class="row">
                    <form action="{{url('login/login')}}" method="post" class="col s12">
                        @csrf
						<div class="input-field">
							<input type="text" class="validate" placeholder="用户名" required name="name">
						</div>
						<div class="input-field">
							<input type="password" class="validate" placeholder="密码" required name="pwd">
						</div>
                        {{-- <a href=""><h6>Forgot Password ?</h6></a> --}}
                        <input type="submit" value="登录" class="btn button-default">
					</form>
				</div>
			</div>
		</div>
	</div>
    @endsection
