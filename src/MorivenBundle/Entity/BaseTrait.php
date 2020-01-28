<?php

namespace MorivenBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * BaseTrait
 *
 * @ORM\MappedSuperclass
 */
trait BaseTrait
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(name="id", type="integer", nullable=false)
     */
    public $id;

    /**
     * @ORM\Column(name="created", type="datetime", nullable=true)
     */
    public $created;

    /**
     * @ORM\PrePersist
     *
     * {@inheritDoc}
     */
    public function setTimestamps()
    {
        $this->created = $this->updated = new \DateTime;
    }

    /**
     * @ORM\Column(name="updated", type="datetime", nullable=true)
     */
    public $updated;

    /**
     * @return mixed
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param mixed $created
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

    /**
     * @return mixed
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * @param mixed $updated
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }
}