<?php
/**
 * Created by IntelliJ IDEA.
 * User: moo
 * Date: 16/5/4
 * Time: 下午10:24
 */

namespace AppBundle\Controller\Api;

use AppBundle\Common\Code;
use AppBundle\Common\WHResponse;
use AppBundle\Entity\Card;
use AppBundle\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;


/**
 * Class UserController
 * @package AppBundle\Controller\Api
 *
 * @Route("/user")
 */
class UserController extends BaseApiController
{
    /**
     * @Route("/", name="user.index")
     *
     * @return WHResponse
     */
    public function index(){
        return new WHResponse("hello");
    }

    /**
     *
     * @Route("/login", name="user.login")
     *
     * @param $account
     * @param $password
     * @return User
     */
    public function login(Request $request)
    {
        $account = $request->query->get("account");
        $user = new User();
        $user->setPhone($account);
        $user->setName("moo");
        $user->setAge(19);
        $card = new Card();
        $card->setName("雷凌");
        $user->addCard($card);
        $card = new Card();
        $card->setName("悍马");
        $user->addCard($card);
//        var_dump($user->showEverything());
        return new WHResponse($user, Code::SUCCESS, "login success");
    }
}