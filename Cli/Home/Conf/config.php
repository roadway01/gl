<?php
return array(
	//'配置项' =>'配置值'
	'MODULE_ALLOW_LIST' =>    array('Home','Admin',),
	//我们用了入口版定 所以下面这行可以注释掉
	//'DEFAULT_MODULE'    =>    'Home',  // 默认模块	
	'SHOW_PAGE_TRACE'   =>  true, 
	'LOAD_EXT_CONFIG'   => 'db,wechat,oauth', 
	'URL_CASE_INSENSITIVE'  =>  true,  //url不区分大小写
	'URL_MODEL'   =>0,
	'URL_HTML_SUFFIX'  =>'html',
	//'DEFAULT_FILTER'        => 'htmlspecialchars',
	'SUPER_ADMIN_ID'=>1,  //超级管理员id 删除用户的时候用这个禁止删除
	'SHOW_ERROR_MSG'        =>  true, 
	//用户注册默认信息
	'DEFAULT_SCORE'=>100,
	'LOTTERY_NUM'=>3,  //每天最多的抽奖次数
	
	'TMPL_CACHE_ON'=>false,
	'HTML_CACHE_ON'=>false,
	'ACTION_CACHE_ON'=>false,
	
	//极光推送配置
	'JPUSH_CONFIG' => array(
		'app_key' => 'fae05a2b934e82a997c52404',
		'master_secret' => 'e0cdf0bb20fe51dfa299072b',
	),
);