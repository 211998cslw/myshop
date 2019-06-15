<?php 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class IndexController extends Controller
{
	// 商城主页【商品list】
	public function index(Request $request){
		// echo 111;
		return view('index');
	}
}
	
 ?>