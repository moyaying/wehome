<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserRepository")
 */
class User// extends BaseUser
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
     * @var int
     *
     * @ORM\Column(name="qq", type="integer")
     */
    private $qq;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, unique=true)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="age", type="integer", nullable=true)
     */
    private $age;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=255, unique=true)
     */
    private $phone;

    /**
     * @var int
     *
     * @ORM\Column(name="gender", type="integer", nullable=true)
     */
    private $gender;

    /**
     * @var array
     *
     * @ORM\OneToMany(targetEntity="Card", mappedBy="user")
     */
    private $cards;

    /**
     * @var array
     *
     * @ORM\OneToMany(targetEntity="TravelService", mappedBy="user")
     */
    private $travelServices;

    /**
     * @var array
     *
     * @ORM\OneToMany(targetEntity="TravelOrder", mappedBy="user")
     */
    private $travelOrders;

    /**
     * @var TravelScore
     *
     * @ORM\OneToOne(targetEntity="TravelScore", mappedBy="user")
     */
    private $travelScore;

    /**
     * @var array
     *
     * @ORM\OneToMany(targetEntity="TravelOrderMessage", mappedBy="user")
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
     * Set name
     *
     * @param string $name
     *
     * @return User
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set age
     *
     * @param integer $age
     *
     * @return User
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return int
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set phone
     *
     * @param string $phone
     *
     * @return User
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set gender
     *
     * @param integer $gender
     *
     * @return User
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return int
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @return int
     */
    public function getQq()
    {
        return $this->qq;
    }

    /**
     * @param int $qq
     */
    public function setQq($qq)
    {
        $this->qq = $qq;
    }

    /**
     * Add card
     *
     * @param \AppBundle\Entity\Card $card
     *
     * @return User
     */
    public function addCard(\AppBundle\Entity\Card $card)
    {
        $this->cards[] = $card;

        return $this;
    }

    /**
     * Remove card
     *
     * @param \AppBundle\Entity\Card $card
     */
    public function removeCard(\AppBundle\Entity\Card $card)
    {
        $this->cards->removeElement($card);
    }

    /**
     * Get cards
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCards()
    {
        return $this->cards;
    }

    /**
     * Add travelService
     *
     * @param \AppBundle\Entity\TravelService $travelService
     *
     * @return User
     */
    public function addTravelService(\AppBundle\Entity\TravelService $travelService)
    {
        $this->travelServices[] = $travelService;

        return $this;
    }

    /**
     * Remove travelService
     *
     * @param \AppBundle\Entity\TravelService $travelService
     */
    public function removeTravelService(\AppBundle\Entity\TravelService $travelService)
    {
        $this->travelServices->removeElement($travelService);
    }

    /**
     * Get travelServices
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTravelServices()
    {
        return $this->travelServices;
    }

    /**
     * Add travelOrder
     *
     * @param \AppBundle\Entity\TravelOrder $travelOrder
     *
     * @return User
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
     * Get travelOrders
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTravelOrders()
    {
        return $this->travelOrders;
    }

    /**
     * Set travelScore
     *
     * @param \AppBundle\Entity\TravelScore $travelScore
     *
     * @return User
     */
    public function setTravelScore(\AppBundle\Entity\TravelScore $travelScore = null)
    {
        $this->travelScore = $travelScore;

        return $this;
    }

    /**
     * Get travelScore
     *
     * @return \AppBundle\Entity\TravelScore
     */
    public function getTravelScore()
    {
        return $this->travelScore;
    }

    /**
     * Add travelOrderMessage
     *
     * @param \AppBundle\Entity\TravelOrderMessage $travelOrderMessage
     *
     * @return User
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
        $this->cards = new \Doctrine\Common\Collections\ArrayCollection();
        $this->travelServices = new \Doctrine\Common\Collections\ArrayCollection();
        $this->travelOrders = new \Doctrine\Common\Collections\ArrayCollection();
        $this->travelOrderMessages = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return get_object_vars($this);
    }

}
