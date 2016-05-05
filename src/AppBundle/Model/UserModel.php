<?php
/**
 * Created by IntelliJ IDEA.
 * User: moo
 * Date: 16/4/12
 * Time: 下午8:37
 */

namespace AppBundle\Model;


class UserModel
{
    /**
     * @var string
     */
    private $name;
    /**
     * @var int
     */
    private $age;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param int $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

}