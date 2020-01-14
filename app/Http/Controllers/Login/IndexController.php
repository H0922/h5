<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //登录
    public function index(){
        return view('login.index');
    }
    public function login(){
        $data=request()->except('_token');
        $url='http://passport.bianaoao.top/pass/login';
        $res= $this->post($url,$data);
    }
      //post 请求
   public function post($url,$data){
    //数据
    $ch=curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_POST,1);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
    curl_exec($ch);
    curl_close($ch);
}

}
