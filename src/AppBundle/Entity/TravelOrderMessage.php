<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TravelOrderMessage
 *
 * @ORM\Table(name="travel_order_message")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TravelOrderMessageRepository")
 */
class TravelOrderMessage
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="action", type="string", length=255)
     */
    private $action;

    /**
     * @var string
     *
     * @ORM\Column(name="data", type="string", length=255)
     */
    private $data;

    /**
     * @var TravelService
     *
     * @ORM\ManyToOne(targetEntity="TravelService", inversedBy="travelOrderMessages")
     * @ORM\JoinColumn(name="travel_service_id", referencedColumnName="id")
     */
    private $travelService;

    /**
     * @var TravelOrder
     *
     * @ORM\ManyToOne(targetEntity="TravelOrder", inversedBy="travelOrderMessages")
     * @ORM\JoinColumn(name="travel_order_id", referencedColumnName="id")
     */
    private $travelOrder;

    /**
     * @var User
     *
     * @ORM\ManyToOne(targetEntity="User", inversedBy="travelOrderMessages")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set action
     *
     * @param string $action
     *
     * @return TravelOrderMessage
     */
    public function setAction($action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * Get action
     *
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Set data
     *
     * @param string $data
     *
     * @return TravelOrderMessage
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get data
     *
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set travelService
     *
     * @param \AppBundle\Entity\TravelService $travelService
     *
     * @return TravelOrderMessage
     */
    public function setTravelService(\AppBundle\Entity\TravelService $travelService = null)
    {
        $this->travelService = $travelService;

        return $this;
    }

    /**
     * Get travelService
     *
     * @return \AppBundle\Entity\TravelService
     */
    public function getTravelService()
    {
        return $this->travelService;
    }

    /**
     * Set travelOrder
     *
     * @param \AppBundle\Entity\TravelOrder $travelOrder
     *
     * @return TravelOrderMessage
     */
    public function setTravelOrder(\AppBundle\Entity\TravelOrder $travelOrder = null)
    {
        $this->travelOrder = $travelOrder;

        return $this;
    }

    /**
     * Get travelOrder
     *
     * @return \AppBundle\Entity\TravelOrder
     */
    public function getTravelOrder()
    {
        return $this->travelOrder;
    }

    /**
     * Set user
     *
     * @param \AppBundle\Entity\User $user
     *
     * @return TravelOrderMessage
     */
    public function setUser(\AppBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }
}
