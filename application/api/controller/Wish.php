<?php
namespace app\api\controller;

use app\common\model\Wish as WishModel;
use Api;

class Wish extends Api
{
    public function getList() {
        $wishModel = new WishModel();
        return json($this->setData($wishModel->getList())->getResult());
    }
}
