<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GoodsController extends Controller
{
    public function add()
    {
    	return view('admin.GoodsController.add');
    }

    public function do_add_good(request $request)
    {
    	$path = $request->file('goods_name')->store('goods');
    	// "goods/5mrwr0bQ8CoASf29Um29oc96agrAtkKvXJXeGnOr.jpeg"
    	dd($path);

    	// echo asset('storage').'</br>';
    	// echo env('APP_URL');
    }
}
