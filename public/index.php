<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2015 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// [ 应用入口文件 ]

// 定义应用目录
define('APP_PATH', __DIR__ . '/../application/');
if(!file_exists(APP_PATH.'database.php')){
	header('Content-Type:text/html;charset=UTF-8');
	echo '请先安装本程序！运行public目录下，install文件夹即可安装！';exit;
}
// 加载框架引导文件
require __DIR__ . '/../thinkphp/start.php';


