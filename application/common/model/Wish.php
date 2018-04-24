<?php
namespace app\common\model;

use think\Model;

class Wish extends Model
{
    protected $json = ['images'];

    public function getList()
    {
        return $this->where('uid',1)->order('create_time')->page(0,10)->select();
    }
}