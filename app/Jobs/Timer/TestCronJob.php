<?php

namespace App\Jobs\Timer;

use Hhxsv5\LaravelS\Swoole\Timer\CronJob;
use Illuminate\Support\Facades\Log;

class TestCronJob extends CronJob
{
    protected $i = 0;

    // 该方法可类比为 Swoole 定时器中的回调方法
    public function run()
    {
        Log::info('start');
        Log::info(__METHOD__, ['start', $this->i, microtime(true)]);
        $this->i++;
        Log::info(__METHOD__, ['end', $this->i, microtime(true)]);
        Log::info('end');
        if ($this->i == 3) { // 总共运行3次
            Log::info(__METHOD__, ['stop', $this->i, microtime(true)]);
            $this->stop(); // 清除定时器
        }
    }

    // 每隔 1000ms 执行一次任务
    public function interval()
    {
        return 1000;   // 定时器间隔，单位为 ms
    }

    // 是否在设置之后立即触发 run 方法执行
    public function isImmediate()
    {
        return false;
    }
}