<?php

use Illuminate\Support\Facades\Storage;

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

	/**
	 * 上传图片到阿里云
	 *
	 * @param   $path   要保存的路径
	 * @param   $file   上传的文件
	 * @param   $drive  要使用的驱动
	 * @return  url     图片完全路径
	 */
	function upload_image($path, $file, $drive = 'oss')
	{
	    $disk = Storage::disk($drive);

	    //将图片上传到OSS中，并返回图片路径信息 值如:avatar/WsH9mBklpAQUBQB4mL.jpeg
	    $path = $disk->put($path, $file);

	    //由于图片不在本地，所以我们应该获取图片的完整路径，
	    //值如：https://test.oss-cn-hongkong.aliyuncs.com/avatar/8GdIcz1NaCZ.jpeg
	    return $disk->url($path);
	}