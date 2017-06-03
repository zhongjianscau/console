<?php
// +----------------------------------------------------------------------
// | Get Everybody Coding [ CODE CHANGES THE WORLD ]
// +----------------------------------------------------------------------
// | Author: Jean
// +----------------------------------------------------------------------
// | Date: 2017/6/3
// +----------------------------------------------------------------------
// | Time: 17:30
// +----------------------------------------------------------------------
namespace app\index\command;

use think\console\Command;
use think\console\Input;
use think\console\Output;

class Test extends Command
{
    protected function configure()
    {
        $this->setName('test')->setDescription('Command Test');
    }

    protected function execute(Input $input, Output $output)
    {
        $startTime = time();
        $startDate = date('Y-m-d H:i:s', $startTime);
        for ($i = 1; $i <= 5000; $i++) {
            if ($i % 100 == 0) {
                $output->writeln($i);
                $msg = '能被100整除，延迟1分钟';
                $msg = iconv('UTF-8', 'GB2312', $msg);
                $output->writeln($msg);
                $currentTime = time();
                $msg = '开始时间：' . $startDate . '，当前时间：' . date('Y-m-d H:i:s', $currentTime);
                $msg = iconv('UTF-8', 'GB2312', $msg);
                $use = '耗费时间：' . ($currentTime - $startTime) . '秒';
                $use = iconv('UTF-8', 'GB2312', $use);
                $output->writeln($msg);
                $output->writeln($use);
                sleep(60);
            } else {
                $output->writeln($i);
            }
        }
        $endTime = time();
        $endDate = date('Y-m-d H:i:s', $endTime);
        $msg = '开始时间：' . $startDate . '，结束时间：' . date('Y-m-d H:i:s', $endDate);
        $use = $endTime - $startTime;
        $use = '耗时总时间：' . $use . '秒';
        $output->writeln($msg);
        $output->writeln($use);
    }
}