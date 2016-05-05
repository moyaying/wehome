<?php
/**
 * Created by IntelliJ IDEA.
 * User: moo
 * Date: 16/4/3
 * Time: 下午10:18
 */

namespace AppBundle\Controller\Api;

use AppBundle\Common\Code;
use AppBundle\Common\WHResponse;
use AppBundle\Model\UserModel;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class Api
 * @package AppBundle\Controller\Api
 *
 * @Route("/api")
 */
class ApiController extends BaseApiController
{
    /**
     * @Route("/", name="api.index")
     */
    public function index()
    {
        $userModel = new UserModel();
        $userModel->setName("moo");
        $userModel->setAge(19);
//        $s = serialize($userModel);
//        var_dump($s);
//
//        $a = unserialize($s);
//        var_dump($a);

        return new WHResponse($userModel, Code::SUCCESS, "login success");
    }
    
    /**
     * 获取首页数据
     *
     * @Route("/mainpage", name="api.mainpage")
     */
    public function mainPageAction()
    {
        $cardRepository = $this->getTravelOrderRepository();
        $cardList = $cardRepository->findAll();
        var_dump($cardList);
//        $repository = $this->getMessageLogRepository();
//        var_dump($repository);
        return new Response("main pange data");
    }
}