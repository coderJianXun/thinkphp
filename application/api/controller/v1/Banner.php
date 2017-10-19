<?php
/**
 * Created by PhpStorm.
 * User: yangjianxun
 * Date: 2017/10/18
 * Time: 13:14
 */

namespace app\api\controller\v1;


use app\api\validate\IDMustBePostiveInt;

class Banner
{
    public function getBanner($id)
    {
        $data = ['id' => $id];
        // $validate = new Validate(['id' => 'max:2']);
        $validate = new IDMustBePostiveInt();
        $validate->batch()->check($data);
        var_dump($validate->getError());
    }
}