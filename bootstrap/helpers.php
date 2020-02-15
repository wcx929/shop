<?php

	/*自定义辅助函数*/



	//此方法会将当前请求的路由名称转换为 CSS 类名称，作用是允许我们针对某个页面做页面样式定制。在后面的章节中会用到。
	function route_class()
	{
	    return str_replace('.', '-', Route::currentRouteName());
	}