<?php

namespace Food\StoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="shop")
 */
class Shop {
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    /**
     * @ORM\Column(type="string", length=30)
     */
    protected $name;
    /**
     * @ORM\Column(type="integer")
     */
    //protected $firstcategory;
    /**
    * @ORM\Column(type="string")
    */
    protected $title;
    /**
     * @ORM\Column(type="string")
     */
    //protected $logosrc;
    /**
     * @ORM\Column(type="text")
     */
    protected $motto;
    /**
     * @ORM\Column(type="text")
     */
    protected $worktime;
    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $phone_number;

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setLogoSrc($logo_src)
    {
        $this->logo_src = $logo_src;
    }

    public function getLogoSrc()
    {
        return $this->logo_src;
    }

    public function setMotto($motto)
    {
        $this->motto = $motto;
    }

    public function getMotto()
    {
        return $this->motto;
    }

    public function setPhoneNumber($phone_number)
    {
        $this->phone_number = $phone_number;
    }

    public function getPhoneNumber()
    {
        return $this->phone_number;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setWorktime($worktime)
    {
        $this->worktime = $worktime;
    }

    public function getWorktime()
    {
        return $this->worktime;
    }

    protected $logo_src;

}