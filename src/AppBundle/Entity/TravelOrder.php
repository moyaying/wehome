<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TravelOrder
 *
 * @ORM\Table(name="travel_order")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TravelOrderRepository")
 */
class TravelOrder
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
     * @ORM\Column(name="destination", type="string", length=255)
     */
    private $destination;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="setOutTime", type="datetimetz")
     */
    private $setOutTime;

    /**
     * @var int
     *
     * @ORM\Column(name="seats", type="integer")
     */
    private $seats;

    /**
     * @var int
     *
     * @ORM\Column(name="status", type="integer")
     */
    private $status;

    /**
     * @var int
     *
     * @ORM\Column(name="score", type="integer", nullable=true)
     */
    private $score;

    /**
     * @var bool
     *
     * @ORM\Column(name="isPublic", type="boolean")
     */
    private $isPublic;

    /**
     * @var bool
     *
     * @ORM\Column(name="isFinish", type="boolean")
     */
    private $isFinish;

    /**
     * @var User
     *
     * @ORM\OneToOne(targetEntity="User", inversedBy="travelOrders")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;

    /**
     * @var TravelService
     *
     * @ORM\ManyToOne(targetEntity="TravelService", inversedBy="travelOrders")
     */
    private $travelService;

    /**
     * @var array
     *
     * @ORM\OneToMany(targetEntity="TravelOrderMessage", mappedBy="travelOrder")
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
     * Set destination
     *
     * @param string $destination
     *
     * @return TravelOrder
     */
    public function setDestination($destination)
    {
        $this->destination = $destination;

        return $this;
    }

    /**
     * Get destination
     *
     * @return string
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * Set setOutTime
     *
     * @param \DateTime $setOutTime
     *
     * @return TravelOrder
     */
    public function setSetOutTime($setOutTime)
    {
        $this->setOutTime = $setOutTime;

        return $this;
    }

    /**
     * Get setOutTime
     *
     * @return \DateTime
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
     * @return TravelOrder
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
     * Set status
     *
     * @param integer $status
     *
     * @return TravelOrder
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
     * Set score
     *
     * @param integer $score
     *
     * @return TravelOrder
     */
    public function setScore($score)
    {
        $this->score = $score;

        return $this;
    }

    /**
     * Get score
     *
     * @return int
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Set public
     *
     * @param boolean $isPublic
     *
     * @return TravelOrder
     */
    public function setPublic($isPublic)
    {
        $this->isPublic = $isPublic;

        return $this;
    }

    /**
     * Get public
     *
     * @return bool
     */
    public function getPublic()
    {
        return $this->isPublic;
    }

    /**
     * Set finish
     *
     * @param boolean $isFinish
     *
     * @return TravelOrder
     */
    public function setFinish($isFinish)
    {
        $this->isFinish = $isFinish;

        return $this;
    }

    /**
     * Get finish
     *
     * @return bool
     */
    public function getFinish()
    {
        return $this->isFinish;
    }

    /**
     * Set isPublic
     *
     * @param boolean $isPublic
     *
     * @return TravelOrder
     */
    public function setIsPublic($isPublic)
    {
        $this->isPublic = $isPublic;

        return $this;
    }

    /**
     * Get isPublic
     *
     * @return boolean
     */
    public function getIsPublic()
    {
        return $this->isPublic;
    }

    /**
     * Set isFinish
     *
     * @param boolean $isFinish
     *
     * @return TravelOrder
     */
    public function setIsFinish($isFinish)
    {
        $this->isFinish = $isFinish;

        return $this;
    }

    /**
     * Get isFinish
     *
     * @return boolean
     */
    public function getIsFinish()
    {
        return $this->isFinish;
    }

    /**
     * Set user
     *
     * @param \AppBundle\Entity\User $user
     *
     * @return TravelOrder
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
     * Set travelService
     *
     * @param \AppBundle\Entity\TravelService $travelService
     *
     * @return TravelOrder
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
     * Add travelOrderMessage
     *
     * @param \AppBundle\Entity\TravelOrderMessage $travelOrderMessage
     *
     * @return TravelOrder
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
        $this->travelOrderMessages = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
