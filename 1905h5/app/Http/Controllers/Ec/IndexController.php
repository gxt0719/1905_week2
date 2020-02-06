<?php
namespace App\Http\Controllers\Ec;
use App\Http\Controllers\Controller;
use App\Model\UserPubKeyModel;
use App\Model\Sign;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class IndexController extends Controller
{
   public function index(){
   	return view('index/index');
   }
   public function login(){
   	return view('index/login');
   }
   /**
     * 登录
     */
    public function doLogin()
    {
        unset($_POST['_token']);
        //echo '<pre>';print_r($_POST);echo '</pre>';
        $url = 'http://passport.1905.com/api/user/login';
        $client = new Client();
        $response = $client->request('post',$url,[
            'form_params'   => $_POST
        ]);
        $json_data = $response->getBody();
        $info = json_decode($json_data,true);
        //echo '<pre>';print_r($info);echo '</pre>';
        //判断结果
        if($info['errno']){
            //header('Refresh:2;url=/user/reg');            //页面跳转
            echo "错误信息：" . $info['msg'] . " 正在跳转>>>>";
            die;
        }
        $uid = $info['data']['uid'];
        $token = $info['data']['token'];
        //将 token 保存至 客户端 cookie 中
        Cookie::queue('token',$token,600);
        Cookie::queue('uid',$uid,600);
        //登录成功 
        header('Refresh:2;url=/user/center');
        echo "登录成功，正在跳转至个人中心";
    }
   public function setting(){
   	return view('index/setting');
   }
   public function about(){
   	return view('index/about');
   }
   public function contact(){
   	return view('index/contact');
   }
   public function register(){
   	return view('index/register');
   }
}