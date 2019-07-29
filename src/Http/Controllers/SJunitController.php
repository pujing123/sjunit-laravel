<?php
/**
 * Created by PhpStorm.
 * User: 王鹏
 * Date: 2019/7/25
 * Time: 22:27
 */
namespace ShineYork\SJunitLaravel\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SJunitController extends Controller
{

    public function index()
  {
     // var_dump(view());

      return view('sjunit::index');

  }

    // 如下内容，想要丰富就自个完善吧
    public function store(Request $request)
    {
        $namespace  = $request->input('namespace');
        $className  = $request->input('className');
        $action     = $request->input('action');
        $param      = $request->input('param');
        $class = ($className == "") ? $namespace : $namespace.'\\'.$className;
        // 要提换的值  需要的结果
        $class = str_replace("/", "\\", $class);
        $object = new $class();
        $param = ($param == "") ? [] : explode('|', $param) ;
        $data = call_user_func_array([$object, $action], $param);
        return (is_array($data)) ? json_encode($data) : dd($data);
    }

}