<?php
// +----------------------------------------------------------------------
// | BaseTest.php [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2016-2017 limingxinleo All rights reserved.
// +----------------------------------------------------------------------
// | Author: limx <715557344@qq.com> <https://github.com/limingxinleo>
// +----------------------------------------------------------------------
namespace Tests\EagerLoad;

use Tests\App\Models\User;
use Tests\App\SqlCount;
use Tests\TestCase;

class BaseTest extends TestCase
{
    public function testExample()
    {
        $user = User::findFirst();
        dd(SqlCount::getInstance()->count);
    }
}