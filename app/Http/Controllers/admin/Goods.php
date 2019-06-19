<?php
namespace App\Http\Controllers\admin;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Goods extends Controller
{
	public function goods_add()
	{
		return view('admin/goods/goods_add');
	}

	public function do_add(request $request)
	{
		$data=$request->all();
		// dd($data);
		// $path=$request->file('goods_pic')->store('goods');
		// dd($path);
		$res=DB::table('Goods')->insert([
			'goods_name'=>$data['goods_name'],
			// 'goods_pic'=>asset('storage'.'/'.$path),
			'goods_price'=>$data['goods_price'],
			'add_time'=>$data['add_time']
		]);
	}

		/*public function goods_pic(Request $request,$file)
    {
        if ($request->file($file)->isValid()){
            $photo = $request->file($file);
            $store_result = $photo->store(date('Ymd'));
            return ['code'=>1,'imgurl'=>$store_result];
        }else{
            return ['code'=>0,'message'=>'上传过程出错'];
        }

    }*/

	public function goods_index()
	{
		$data=DB::table('Goods')->orderBy('goods_name','desc')->get()->toArray()->;
		// dd($data);
		return view('admin/goods/goods_index',compact('data'));
	}

	public function goods_del(request $request)
	{
		$data=$request->all();
		// dd($data);
		$res=DB::table('Goods')->where(['id'=>$data['id']])->delete();
		if(!empty($res)){
			return redirect('Goods/goods_index');
		}
	}

	public function goods_update(request $request)
	{
		$data=$request->all();
		$res=DB::table('Goods')->where(['id'=>$data['id']])->first();
		return view('admin/goods/goods_update',['res'=>$res]);
	}

	public function do1_update(request $request)
	{
		$data=$request->all();
		$path=$request->file('goods_pic')->store('goods');
		$res=DB::table('Goods')->where(['id'=>$data['id']])->update([
			'goods_name'=>$data['goods_name'],
			'goods_pic'=>asset('storage'.'/'.$path),
			'goods_price'=>$data['goods_price'],
			'add_time'=>$data['add_time']
		]);
		if(!empty($res)){
			return redirect('Goods/goods_index');
		}
	}

}