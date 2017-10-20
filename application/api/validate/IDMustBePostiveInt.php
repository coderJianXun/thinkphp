<?php
/**
 * Created by PhpStorm.
 * User: yangjianxun
 * Date: 2017/10/19
 * Time: 13:21
 */

namespace app\api\validate;


class IDMustBePostiveInt extends BaseValidate
{
    protected $rule = [
      'id' => 'require|max:2|isPositiveInteger'
    ];


    protected function isPositiveInteger($value,$rule='',$data='',$field='')
    {
        if(is_numeric($value) && is_int($value + 0) && ($value + 0) > 0){
            return true;
        }else{
            return $field.'不是正整数';
        }
    }
}