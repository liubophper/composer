<?php
/**
 * email 291868060@qq.com.
 * User: Mr.liu
 * Date: 2020/3/22
 * Time: 18:34
 */

namespace Composer\Son;

use Composer\ComposerDemo;

class Son
{
    public function son()
    {
        $composerDemo = new ComposerDemo();
        $data = [
            '这是son返回数据',
            $composerDemo->composerDemo()
        ];
        return $data;
    }
}