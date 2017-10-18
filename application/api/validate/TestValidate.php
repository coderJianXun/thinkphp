<?php

namespace app\api\validate;

use think\Validate;

class TestValidate extends validate
{
    protected $rule = [
        'id' => 'require|max:2'
    ];
}