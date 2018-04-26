<?php
namespace app\common\model;

use think\Model;

class Wish extends Model
{
    protected $json = ['images'];

    public function getList()
    {
        return $this->where('uid',1)->order('id', 'DESC')->page(0,10)->select();
    }
}