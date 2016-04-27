<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Address
 *
 * @ORM\Table(name="address")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AddressRepository")
 */
class Address
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
     * @ORM\Column(name="Str", type="string", length=100)
     */
    private $str;

    /**
     * @var string
     *
     * @ORM\Column(name="Nr", type="string", length=10)
     */
    private $nr;

    /**
     * @var string
     *
     * @ORM\Column(name="Floor", type="string", length=10)
     */
    private $floor;
    
    /**
     * @var int
     *
     * @ORM\Column(name="Ap", type="integer")
     */
    private $ap;


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
     * Set str
     *
     * @param string $str
     *
     * @return Address
     */
    public function setStr($str)
    {
        $this->str = $str;

        return $this;
    }

    /**
     * Get str
     *
     * @return string
     */
    public function getStr()
    {
        return $this->str;
    }

    /**
     * Set nr
     *
     * @param string $nr
     *
     * @return Address
     */
    public function setNr($nr)
    {
        $this->nr = $nr;

        return $this;
    }

    /**
     * Get nr
     *
     * @return string
     */
    public function getNr()
    {
        return $this->nr;
    }

    /**
     * Set ap
     *
     * @param integer $ap
     *
     * @return Address
     */
    public function setAp($ap)
    {
        $this->ap = $ap;

        return $this;
    }

    /**
     * Get ap
     *
     * @return int
     */
    public function getAp()
    {
        return $this->ap;
    }

    /**
     * Set floor
     *
     * @param string $floor
     *
     * @return Address
     */
    public function setFloor($floor)
    {
        $this->floor = $floor;

        return $this;
    }

    /**
     * Get floor
     *
     * @return string
     */
    public function getFloor()
    {
        return $this->floor;
    }
}
