<?php
/**
 * Created by IntelliJ IDEA.
 * User: mm
 * Date: 2019/6/25
 * Time: 下午3:26
 */
namespace app\test\controller;
use think\Controller;

class Test extends Controller{
    public function index(){
        $s = 123;
        $s+=8;
        echo 'hellokk'.$s;
    }
}