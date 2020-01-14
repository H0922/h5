@extends('layouts.layout')
@section('title','h5商城注册')
@section('content')
	<div class="pages section">
		<div class="container">
			<div class="pages-head">
				<h3>会员注册</h3>
			</div>
			<div class="register">
				<div class="row">
                    <form action="{{url('reg/insert')}}" method="post" class="col s12">
                        @csrf
						<div class="input-field">
							<input type="text" class="validate" placeholder="用户名" required name="pass_name">
						</div>
						<div class="input-field">
							<input type="email" placeholder="邮箱" class="validate" required name="pass_email">
                        </div>
                        <div class="input-field">
							<input type="tel" placeholder="手机号" class="validate" required name="pass_tel">
						</div>
						<div class="input-field">
							<input type="password" placeholder="密码" class="validate" required name="pass_pwd">
                        </div>
                        <div class="input-field">
							<input type="password" placeholder="确认密码" class="validate" required name="pwds">
						</div>
                        <input type="submit" value="点击注册"  class="btn button-default">
					</form>
				</div>
			</div>
		</div>
	</div>
	    @endsection