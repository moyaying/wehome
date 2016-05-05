<?php
/**
 * Created by IntelliJ IDEA.
 * User: moo
 * Date: 16/5/5
 * Time: 下午7:53
 */

namespace AppBundle\Common;


class WHResponseEntity
{
    /**
     * @var int
     */
    private $code;
    /**
     * @var string
     */
    private $msg;
    /**
     * @var mixed
     */
    private $data;

    public function __construct($data = null, $code = Code::SUCCESS, $msg = '')
    {
        $this->data = $data;
        $this->code = $code;
        $this->msg = $msg;
    }

    /**
     * @return int
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param int $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @return string
     */
    public function getMsg()
    {
        return $this->msg;
    }

    /**
     * @param string $msg
     */
    public function setMsg($msg)
    {
        $this->msg = $msg;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param mixed $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }


}