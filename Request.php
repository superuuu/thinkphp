<?php
namespace app\index\controller;

use think\Request;

class Index
{
    public function index(Request $request)
    {
        //获取浏览器输入框的值
        dump($request->domain());   //返回域名
        dump($request->pathinfo());
        dump($request->path()); //去除后缀

        //判断请求类型
        dump($request->method());       //返回当前的请求方式
        dump($request->isGet());        //判断当前请求方式是否为get     return true or not
        dump($request->isPost());       //false
        dump($request->isAjax());       //false

        //请求参数
        dump($request->get());          //获取当前get参数，返回数组形式
        //5.0以后的版本中无法获取到pathinfo中的值
        dump($request->param());        //返回get到的值和path中的值
        //param可以获取 path、post、get、session、request、file、patch等方式传递的参数
        session('name','liubang');
        dump($request->session());
        dump($request->cookie());

        //获取模块、控制器、方法
        dump($request->module());
        dump($request->controller());
        dump($request->action());

        //自己研究玩耍时间
        dump($request->url());
        dump($request->baseUrl());
    }
}
