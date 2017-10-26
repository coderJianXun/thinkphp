<?php
/**
 * Created by PhpStorm.
 * User: yangjianxun
 * Date: 2017/10/24
 * Time: 13:45
 */

namespace app\lib\exception;


class BannerMissException extends BaseException
{
    public $code = 404;

    public $mag = '请求的Banner不存在';

    public $errorCode = 40000;
}