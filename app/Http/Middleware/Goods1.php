<?php 
namespace App\Http\Middleware;
use Closure;
class Goods
{
	public function handle($request,Closure $next)
	{
		$start=strtotime('6:00:00');
		$end=strtotime('22:00:00');
		$now=time();
		if($now<$start||$now>$end){
			echo '不可修改';die;
		}
		return $next($request);
	}
}

?>