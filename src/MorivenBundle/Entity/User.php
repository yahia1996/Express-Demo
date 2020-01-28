<?php

namespace MorivenBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;
use MorivenBundle\Entity\BaseTrait;

/**
 * User
 *
 * @ORM\Table(name="users", uniqueConstraints={
 *     @ORM\UniqueConstraint(name="users_email_unique", columns={"email"})
 * })
 * @ORM\Entity(repositoryClass="MorivenBundle\Repository\UserRepository")
 */
class User extends BaseUser
{
    use BaseTrait;

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(name="id", type="integer", nullable=false)
     */
    public $id;


    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=255, nullable=true)
     */
    public $ville = '';


    /**
     * @var string
     *
     * @ORM\Column(name="lieu", type="string", length=255, nullable=true)
     */
    public $lieu = '';

    /**
     * @var string
     *
     * @ORM\Column(name="avatar", type="string", length=255, nullable=true)
     */
    public $avatar = '';

    /**
     * @var string
     *
     * @ORM\Column(name="timezone", type="string", length=255, nullable=false)
     */
    public $timezone = 'Europe/Berlin';

    /**
     * @var string
     *
     * @ORM\Column(name="language", type="string", length=255, nullable=false)
     */
    public $language = 'en';

    /**
     * User constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->roles = ['ROLE_USER'];
        $this->lieu = 'tunis';
        $this->nature = 'tunis';
    }

    /**
     * @return string
     */
    public function getLieu(): ?string
    {
        return $this->lieu;
    }

    /**
     * @param string $lieu
     */
    public function setLieu(string $lieu)
    {
        $this->lieu = $lieu;
    }

    /**
     * @return string
     */
    public function getVille(): ?string
    {
        return $this->ville;
    }

    /**
     * @param string $nature
     */
    public function setVille(string $nature)
    {
        $this->ville = $nature;
    }
}