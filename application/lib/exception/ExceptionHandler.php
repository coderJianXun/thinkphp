<?php
/**
 * Created by PhpStorm.
 * User: yangjianxun
 * Date: 2017/10/24
 * Time: 13:39
 */

namespace app\lib\exception;


use think\Exception;
use think\exception\Handle;

class ExceptionHandler extends Handle
{
    public function render(Exception $ex)
    {
        return json('_____');
    }
}