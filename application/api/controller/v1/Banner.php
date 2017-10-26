<?php
/**
 * Created by PhpStorm.
 * User: yangjianxun
 * Date: 2017/10/18
 * Time: 13:14
 */

namespace app\api\controller\v1;


use app\api\validate\IDMustBePostiveInt;
use app\api\model\Banner as BannerModel;
use think\Exception;

class Banner
{
    public function getBanner($id)
    {
        (new IDMustBePostiveInt())->goCheck();

        $banner = BannerModel::getBannerByID($id);

        return $banner;
    }
}