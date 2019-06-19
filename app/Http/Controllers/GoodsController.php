<?php
namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Http\Tools\Tools;
class Goods1Controller extends Controller
{
	public $tools;
	public function __construct(Tools $tools){
	$this->tools=$tools;
	}
	public function add()
	{
		$redis=new \Redis();
		$redis->connect('127.0.0.1','6379');
		$num=$redis->get('num');
		echo $num."</br>";
		return view('Goods1/add');
	}

	public function gadd(request $request)
	{
		$data=$request->all();
		// dd($data);
		$path=$request->file('goods_img')->store('goods');
		$res=DB::table('Goods1')->insert([
			'goods_name'=>$data['goods_name'],
			'goods_img'=>asset('storage'.'/'.$path),
			'goods_num'=>$data['goods_num'],
			'create_time'=>time(),
		]);
	}

	public function goods_img(Request $request,$file)
    {
        if ($request->file($file)->isValid()){
            $photo = $request->file($file);
            $store_result = $photo->store(date('Ymd'));
            return ['code'=>1,'imgurl'=>$store_result];
        }else{
            return ['code'=>0,'message'=>'上传过程出错'];
        }

    }

	public function index(Request $request)
    {    
        
        $redis=$this->tools->getRedis();
        
        $num= $redis->incr('num');
         echo $num; 
        $req=$request->all();
        //  var_dump($req);
        // $student_info=DB::table('student')->get()->toArray();
        // dd($student_info);die;
        if(isset($req['find_name'])){
            $student_info=DB::table('goods1')->where('goods_name','like','%'.$req['find_name'].'%')->paginate(1);
        }else{
            $req['find_name']='';
            $student_info=DB::table('goods1')->paginate(2);
        }
        $stu_info=$student_info->toArray();
        // dd($stu_info);
        $stu_json=json_encode($stu_info);
        //var_dump($stu_json);
        $redis->set('stu_info',$stu_info,10);
        return view('goods1/index',['student_info'=>$student_info,'find_name'=>$req['find_name']]);
    }

	public function del(request $request)
	{
		$data=$request->all();
		// dd($data);
		$res=DB::table('Goods1')->where(['id'=>$data['id']])->delete();
		if(!empty($res)){
			return redirect('Goods1/index');
		}
	}

	public function update(Request $request)
	{
		$data=$request->all();
		// dd($data);die;
		$res=DB::table('Goods1')->where(['id'=>$data['id']])->first();
		// dd($res);die;
		return view('Goods1/update',['res'=>$res]);
	}

	public function do_update(Request $request)
	{
		$data=$request->all();
		$res=DB::table('Goods1')->where(['id'=>$data['id']])->update([
			'goods_name'=>$data['goods_name'],
			'goods_num'=>$data['goods_num'],
			'create_time'=>$data['create_time']
		]);
		if(!empty($res)){
			return redirect('Goods1/index');
		}
	}
}
