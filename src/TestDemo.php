<?php
/**
 * email 291868060@qq.com.
 * User: Mr.liu
 * Date: 2020/3/22
 * Time: 18:30
 */

namespace Composer;

class TestDemo
{
    public function TestDemo()
    {
        $composerDemo = new ComposerDemo();
        $data = [
            '这是test返回数据',
            $composerDemo->composerDemo()
        ];
        return $data;
    }
}