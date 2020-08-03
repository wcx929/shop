<?php

	/*自定义辅助函数*/



	//此方法会将当前请求的路由名称转换为 CSS 类名称，作用是允许我们针对某个页面做页面样式定制。在后面的章节中会用到。
	function route_class()
	{
	    return str_replace('.', '-', Route::currentRouteName());
	}

	function ngrok_url($routeName, $parameters = [])
	{
	    // 开发环境，并且配置了 NGROK_URL
	    if(app()->environment('local') && $url = config('app.ngrok_url')) {
	        // route() 函数第三个参数代表是否绝对路径
	        return $url.route($routeName, $parameters, false);
	    }

	    return route($routeName, $parameters);
	}