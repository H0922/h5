<?php

namespace App\Http\Controllers\Goods;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\ApigoodsModel as Goods;
class GoodsController extends Controller
{
    public function index(){
        $data=Goods::get();
        // dd($data);
        return view('goods.index',['data'=>$data]);
    }   

}
