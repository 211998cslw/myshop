<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Tools\Tools;
class studentController extends Controller
{
	public $tools;
	public function __construct(Tools $tools){
	$this->tools=$tools;
	}
    public function index(request $request)
	{
		// die();
		$redis=$this->tools->getRedis();
		$redis->incr('num');
		$req=$request->all();
		// var_dump($req);
		// var_dump(isset($req['find_name']));
		if(isset($req['find_name'])){
			$data=DB::table('student')->where('username','like','%'.$req['find_name'].'%')->paginate(1);
		}else{
			$req['find_name']='';
			$data=DB::table('student')->paginate(1);
		}
		// var_dump($data->toArray());
		$stu_info=$data->toArray();
		$stu_json=json_encode($stu_info);
		// var_dump($stu_json);
		$redis->set('stu_info',$stu_info,10);
		return view('student.index',['data'=>$data,'find_name'=>$req['find_name']]);
	}

	public function add()
	{
		$redis=new \Redis();
		$redis->connect('127.0.0.1','6379');
		$num=$redis->get('num');
		echo $num."</br>";
		return view('student.add');
	}

	public function do_add(Request $request)
	{
		$data=$request->all();
		 $res=DB::table('student')->insert([
		 'username'=>$data['username'],
	 	 'sex'=>$data['sex'],
		 'age'=>$data['age'],
		 'create_time'=>$data['create_time']
		 ]);
		
	}

	public function update(request $request)
	{
		// echo 1111;die;
		$data=$request->all();
		// dd($data);die;
		$res=DB::table('student')->where(['id'=>$data['id']])->first();
		// dd($res);
		return view('student.update',['res'=>$res]);
	}

	public function do_update(request $request)
	{
		$data=$request->all();
		// dd($data);
		$res=DB::table('student')->where(['id'=>$data['id']])->update([
			'username'=>$data['username'],
		 	 'sex'=>$data['sex'],
			 'age'=>$data['age'],
			 'create_time'=>$data['create_time']
		]);
		if(!empty($res)){
			return redirect('/add_student');
		}
	}

	public function del(request $request)
	{
		$data=$request->all();
		// dd($data);
		$res=DB::table('student')->where(['id'=>$data['id']])->delete();
		if(!empty($res)){
			return redirect('/add_student');
		}
	}

}
