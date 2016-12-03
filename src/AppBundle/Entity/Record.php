<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="records")
 */
class Record
{
    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=100)
     */
    private $hostname;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=100)
     */
    private $ipAddress;

    /**
     * @var bool
     *
     * @ORM\Column(type="boolean")
     */
    private $isEnabled;

    /**
     * @var int
     *
     * @ORM\Column(type="integer", nullable=true)
     */
    private $lastUsed = null;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $useCount = 0;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getHostname()
    {
        return $this->hostname;
    }

    /**
     * @param string $hostname
     */
    public function setHostname($hostname)
    {
        $this->hostname = $hostname;
    }

    /**
     * @return string
     */
    public function getIpAddress()
    {
        return $this->ipAddress;
    }

    /**
     * @param string $ipAddress
     */
    public function setIpAddress($ipAddress)
    {
        $this->ipAddress = $ipAddress;
    }

    /**
     * @return boolean
     */
    public function isIsEnabled()
    {
        return $this->isEnabled;
    }

    /**
     * @param boolean $isEnabled
     */
    public function setIsEnabled($isEnabled)
    {
        $this->isEnabled = $isEnabled;
    }

    /**
     * @return int
     */
    public function getLastUsed()
    {
        return $this->lastUsed;
    }

    /**
     * @param int $lastUsed
     */
    public function setLastUsed($lastUsed)
    {
        $this->lastUsed = $lastUsed;
    }

    /**
     * @return int
     */
    public function getUseCount()
    {
        return $this->useCount;
    }

    /**
     * @param int $useCount
     */
    public function setUseCount($useCount)
    {
        $this->useCount = $useCount;
    }

    /**
     * @return null|\DateTimeImmutable
     */
    public function getLastUsedAsDate()
    {
        if ($this->lastUsed === null){
            return null;
        }

        $datetime = new \DateTimeImmutable();
        $datetime->setTimestamp($this->lastUsed);

        return $datetime;
    }
}
