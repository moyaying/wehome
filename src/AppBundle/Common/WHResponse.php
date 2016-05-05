<?php
/**
 * Created by IntelliJ IDEA.
 * User: moo
 * Date: 16/5/4
 * Time: 下午10:16
 */

namespace AppBundle\Common;

use Symfony\Component\HttpFoundation\Response;

class WHResponse extends Response
{
    public function __construct($data = null, $code = Code::SUCCESS, $message = '', $status = 200, $headers = array())
    {
        $entity = new WHResponseEntity($data, $code, $message);
        parent::__construct(Utils::json_instance($entity), $status, $headers);
    }

}