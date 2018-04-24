<?php
/**
 * Created by PhpStorm.
 * HTTPAPI基类
 * User: XiaoYi.Haung
 * Date: 2018/4/11
 * Time: 13:40
 */

class Api
{
    protected $result = null;

    function __construct()
    {
        $this->result = new stdClass();
    }

    /**
     * 将status设为0
     * @return $this
     */
    protected function setFail()
    {
        $this->result->status = 0;
        return $this;
    }

    /**
     * 将status设为1
     * @return $this
     */
    protected function setSuccess()
    {
        $this->result->status = 1;
        return $this;
    }

    /**
     * 设定msg消息
     * @param string $msg 消息内容
     * @return $this
     */
    protected function setMessage($msg = "")
    {
        $this->result->msg = $msg;
        return $this;
    }

    /**
     * 设定数据体
     * @param mixed $data 需要返回的数据
     * @return $this
     */
    protected function setData($data = [])
    {
        //  data解析为单独的json字符串
        $this->result->data = json_encode($data);
        return $this;
    }

    /**
     * 获取返回参数
     * @return stdClass
     */
    protected function getResult()
    {
        if (isset($this->result->status) || empty($this->result->status)){
            $this->result->status = 1;
        }
        if (isset($this->result->msg) || empty($this->result->msg)){
            $this->result->msg = "";
        }
        return $this->result;
    }
}