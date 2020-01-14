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
        // $url='http://passport.com/pass/login'
        $res=$this->post($url,$data);
        $a=json_decode($res,true);
        if($a['error']!='ok'){
            return view('er.index',['link'=>$a]);
        }else{
            $s=[
                'token'=>$a['token'],
                'name'=>$data['name']
            ];
            session(['name'=>$data['name']]);
            session(['token'=>$s]);
            return redirect('index');
        }
       
    }
    //个人中心
    public function user(){
        $data=session('token');
        if(empty($data)){
            echo "您还没有登录，请先登录，正在为您跳转.......";
            header('refresh:3,url=index');
            die;
        }
        $name=$data['name'];
        $token=[
            'token:'.$data['token']
        ];
        $url='http://passport.bianaoao.top/token?name='.$name;
        $ch=curl_init();
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_HTTPHEADER,$token);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
        $response = curl_exec($ch);
        curl_close($ch);
        dump(json_decode($response,true));
    }


      //post 请求
   public function post($url,$data){
    //数据
    $ch=curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_POST,1);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
    $request=curl_exec($ch);
    curl_close($ch);
   return $request;
}

}
