<?php
/**
 * Created by IntelliJ IDEA.
 * User: moo
 * Date: 16/4/3
 * Time: 下午10:31
 */

namespace AppBundle\Controller\Api;


use AppBundle\Entity\MessageQueue;
use AppBundle\Entity\TravelOrder;
use AppBundle\Repository\CardRepository;
use AppBundle\Repository\MessageLogRepository;
use AppBundle\Repository\MessageQueueRepository;
use AppBundle\Repository\TravelOrderMessageRepository;
use AppBundle\Repository\TravelOrderRepository;
use AppBundle\Repository\TravelScoreRepository;
use AppBundle\Repository\TravelServiceRepository;
use AppBundle\Repository\UserRepository;
use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BaseApiController extends Controller
{
    /**
     * @return EntityManager
     */
    public function getEM()
    {
        return $this->getDoctrine()->getManager();
    }

    /**
     * @param $entityName
     * @return \Doctrine\ORM\EntityRepository
     */
    public function getRepository($entityName)
    {
        return $this->getEM()->getRepository($entityName);
    }

    /**
     * @return CardRepository
     */
    public function getCardRepository()
    {
        return $this->getRepository("AppBundle:Card");
    }

    /**
     * @return MessageLogRepository
     */
    public function getMessageLogRepository()
    {
        return $this->getRepository("AppBundle:MessageLog");
    }

    /**
     * @return MessageQueueRepository
     */
    public function getMessageQueueRepository()
    {
        return $this->getRepository("AppBundle:MessageQueue");
    }

    /**
     * @return TravelOrderRepository
     */
    public function getTravelOrderRepository()
    {
        return $this->getRepository("AppBundle:TravelOrder");
    }

    /**
     * @return TravelOrderMessageRepository
     */
    public function getTravelOrderMessageRepository()
    {
        return $this->getRepository("AppBundle:TravelOrderMessage");
    }

    /**
     * @return TravelScoreRepository
     */
    public function getTravelScoreRepository()
    {
        return $this->getRepository("AppBundle:TravelScore");
    }

    /**
     * @return TravelServiceRepository
     */
    public function getTravelServiceRepository()
    {
        return $this->getRepository("AppBundle:TravelService");
    }

    /**
     * @return UserRepository
     */
    public function getUserRepository()
    {
        return $this->getRepository("AppBundle:User");
    }
}