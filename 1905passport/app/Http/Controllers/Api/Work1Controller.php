<?php 
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Login;
use Illuminate\Support\Facades\Redis;
use DB;
class Work1Controller extends Controller
{
	//加密
	function jiami(Request $request){
		$str=$request->input('str');
		$arr=range("a", "z");
		//$str='hello';
		//$c=$request->$_GET['str'];
		$c=strlen($str);
		$new_str='';
		for ($i=0; $i <=strlen($str)-1; $i++)
		{ 
		    $n=array_search($str[$i],$arr);
			$n=$n+3;
			if ($n>25) {
				$n=$n-26;
			}
			$new_str.=$arr[$n];
		}
		return $new_str;

	}


	//echo "<br>";
	//解密
	function jiemi(Request $request){
		$str=$request->input('str');
		$arr=range("a","z");
		$old_str='';
		for ($i=0; $i <=strlen($str)-1; $i++)
		{ 
			$n=array_search($str[$i],$arr);
			 $n=$n-3;
			if ($n<0) {
				$n=$n+26;
			}
			 $old_str.=$arr[$n];
			 //echo "<br>";
			 //echo $old_str;
		}
		return $old_str;
	}
}
?>