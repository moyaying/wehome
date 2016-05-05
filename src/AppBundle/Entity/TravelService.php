<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TravelService
 *
 * @ORM\Table(name="travel_service")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TravelServiceRepository")
 */
class TravelService
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
     * @ORM\Column(name="path", type="string", length=255)
     */
    private $path;

    /**
     * @var string
     *
     * @ORM\Column(name="setOutTime", type="string", length=255)
     */
    private $setOutTime;

    /**
     * @var int
     *
     * @ORM\Column(name="seats", type="integer")
     */
    private $seats;

    /**
     * @var float
     *
     * @ORM\Column(name="money", type="float")
     */
    private $money;

    /**
     * @var int
     *
     * @ORM\Column(name="status", type="integer")
     */
    private $status;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createTime", type="datetimetz")
     */
    private $createTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updateTime", type="datetimetz")
     */
    private $updateTime;

    /**
     * @var User
     *
     * @ORM\ManyToOne(targetEntity="User", inversedBy="travelServices")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;

    /**
     * @var Card
     *
     * @ORM\OneToOne(targetEntity="Card")
     * @ORM\JoinColumn(name="card_id", referencedColumnName="id")
     */
    private $card;

    /**
     * @var array
     *
     * @ORM\OneToMany(targetEntity="TravelOrder", mappedBy="travelService")
     */
    private $travelOrders;

    /**
     * @var array
     * @ORM\OneToMany(targetEntity="TravelOrderMessage", mappedBy="travelService")
     */
    private $travelOrderMessages;

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
     * Set path
     *
     * @param string $path
     *
     * @return TravelService
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set setOutTime
     *
     * @param string $setOutTime
     *
     * @return TravelService
     */
    public function setSetOutTime($setOutTime)
    {
        $this->setOutTime = $setOutTime;

        return $this;
    }

    /**
     * Get setOutTime
     *
     * @return string
     */
    public function getSetOutTime()
    {
        return $this->setOutTime;
    }

    /**
     * Set seats
     *
     * @param integer $seats
     *
     * @return TravelService
     */
    public function setSeats($seats)
    {
        $this->seats = $seats;

        return $this;
    }

    /**
     * Get seats
     *
     * @return int
     */
    public function getSeats()
    {
        return $this->seats;
    }

    /**
     * Set money
     *
     * @param float $money
     *
     * @return TravelService
     */
    public function setMoney($money)
    {
        $this->money = $money;

        return $this;
    }

    /**
     * Get money
     *
     * @return float
     */
    public function getMoney()
    {
        return $this->money;
    }

    /**
     * Set status
     *
     * @param integer $status
     *
     * @return TravelService
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set createTime
     *
     * @param \DateTime $createTime
     *
     * @return TravelService
     */
    public function setCreateTime($createTime)
    {
        $this->createTime = $createTime;

        return $this;
    }

    /**
     * Get createTime
     *
     * @return \DateTime
     */
    public function getCreateTime()
    {
        return $this->createTime;
    }

    /**
     * Set updateTime
     *
     * @param \DateTime $updateTime
     *
     * @return TravelService
     */
    public function setUpdateTime($updateTime)
    {
        $this->updateTime = $updateTime;

        return $this;
    }

    /**
     * Get updateTime
     *
     * @return \DateTime
     */
    public function getUpdateTime()
    {
        return $this->updateTime;
    }

    /**
     * @ORM\PrePersist()
     */
    public function prePersist()
    {
        if ($this->getCreateTime() == null) {
            $this->setCreateTime(new \DateTime('now'));
        }
    }

    /**
     * @ORM\PreUpdate()
     */
    public function preUpdate()
    {
        $this->setUpdateTime(new \DateTime('now'));
    }

    /**
     * Set user
     *
     * @param \AppBundle\Entity\User $user
     *
     * @return TravelService
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

    /**
     * Set card
     *
     * @param \AppBundle\Entity\Card $card
     *
     * @return TravelService
     */
    public function setCard(\AppBundle\Entity\Card $card = null)
    {
        $this->card = $card;

        return $this;
    }

    /**
     * Get card
     *
     * @return \AppBundle\Entity\Card
     */
    public function getCard()
    {
        return $this->card;
    }

    /**
     * Set travelOrders
     *
     * @param \AppBundle\Entity\TravelOrder $travelOrders
     *
     * @return TravelService
     */
    public function setTravelOrders(\AppBundle\Entity\TravelOrder $travelOrders = null)
    {
        $this->travelOrders = $travelOrders;

        return $this;
    }

    /**
     * Get travelOrders
     *
     * @return \AppBundle\Entity\TravelOrder
     */
    public function getTravelOrders()
    {
        return $this->travelOrders;
    }
    

    /**
     * Add travelOrder
     *
     * @param \AppBundle\Entity\TravelOrder $travelOrder
     *
     * @return TravelService
     */
    public function addTravelOrder(\AppBundle\Entity\TravelOrder $travelOrder)
    {
        $this->travelOrders[] = $travelOrder;

        return $this;
    }

    /**
     * Remove travelOrder
     *
     * @param \AppBundle\Entity\TravelOrder $travelOrder
     */
    public function removeTravelOrder(\AppBundle\Entity\TravelOrder $travelOrder)
    {
        $this->travelOrders->removeElement($travelOrder);
    }

    /**
     * Add travelOrderMessage
     *
     * @param \AppBundle\Entity\TravelOrderMessage $travelOrderMessage
     *
     * @return TravelService
     */
    public function addTravelOrderMessage(\AppBundle\Entity\TravelOrderMessage $travelOrderMessage)
    {
        $this->travelOrderMessages[] = $travelOrderMessage;

        return $this;
    }

    /**
     * Remove travelOrderMessage
     *
     * @param \AppBundle\Entity\TravelOrderMessage $travelOrderMessage
     */
    public function removeTravelOrderMessage(\AppBundle\Entity\TravelOrderMessage $travelOrderMessage)
    {
        $this->travelOrderMessages->removeElement($travelOrderMessage);
    }

    /**
     * Get travelOrderMessages
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTravelOrderMessages()
    {
        return $this->travelOrderMessages;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->travelOrders = new \Doctrine\Common\Collections\ArrayCollection();
        $this->travelOrderMessages = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
