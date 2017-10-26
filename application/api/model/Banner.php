<?php
/**
 * Created by PhpStorm.
 * User: yangjianxun
 * Date: 2017/10/23
 * Time: 13:11
 */

namespace app\api\model;

use think\Exception;

class Banner
{
    public static function getBannerByID($id)
    {
        //TODO: 根据Banner ID号获取Banner信息
        try{
            1/0;
        }catch(Exception $ex){
            throw $ex;
        }
        return 'this is banner info';
    }
}