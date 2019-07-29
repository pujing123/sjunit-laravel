<?php
/**
 * Created by PhpStorm.
 * User: 王鹏
 * Date: 2019/7/26
 * Time: 9:03
 */
namespace  ShineYork\SjunitLaravel\Http\Controllers;
use Illuminate\Routing\Controller;

class TeController extends Controller
{
    public function index()
    {
        return '这是一个sjunit 的一个人测试控制器 目标是与Laravel进行融合';
    }
}