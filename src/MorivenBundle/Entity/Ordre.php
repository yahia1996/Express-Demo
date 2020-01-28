<?php

namespace MorivenBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ordre
 *
 * @ORM\Table(name="ordre")
 * @ORM\Entity(repositoryClass="MorivenBundle\Repository\OrdreRepository")
 */
class Ordre
{
    /**
     * @ORM\Id()
     * @ORM\Column(name="id", type="integer", nullable=false)
     */
    public $id;

    /**
     * @var string
     *
     * @ORM\Column(name="n_bor", type="string", length=255, nullable=true)
     */
    public $nbor;

    /**
     * @var string
     *
     * @ORM\Column(name="exp", type="string", length=255, nullable=false)
     */
    public $exp;

    /**
     * @var string
     *
     * @ORM\Column(name="destinataire", type="string", length=255, nullable=false)
     */
    public $destinataire;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=255, nullable=false)
     */

    public $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu", type="string", length=255, nullable=false)
     */
    public $lieu;

    /**
     * @var string
     *
     * @ORM\Column(name="nature", type="string", length=255, nullable=false)
     */
    public $nature;

    /**
     * @var string
     *
     * @ORM\Column(name="nbr", type="string", length=255, nullable=false)
     */
    public $nbr;

    /**
     * @var string
     *
     * @ORM\Column(name="tel", type="string", length=255, nullable=true)
     */
    public $tel;

    /**
     * @var string
     *
     * @ORM\Column(name="montant", type="string", length=255, nullable=false)
     */
    public $montant;

    /**
     * @var string
     *
     * @ORM\Column(name="espece", type="string", length=255, nullable=true)
     */
    public $espece;

    /**
     * @var string
     *
     * @ORM\Column(name="tentative", type="string", length=255, nullable=true)
     */
    public $tentative;

    /**
     * @var string
     *
     * @ORM\Column(name="motif", type="string", length=255, nullable=true)
     */
    public $motif;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255, nullable=true)
     */
    public $status;

    /**
     * @var string
     *
     * @ORM\Column(name="rdv_next_date", type="string", length=255, nullable=true)
     */
    public $next_date;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    public $description;

    /**
     * Ordre constructor.
     * @param int $id
     * @param string $nbor
     * @param string $exp
     * @param string $destinataire
     * @param string $ville
     * @param string $lieu
     * @param string $nature
     * @param string $nbr
     * @param string $tel
     * @param string $montant
     * @param string $espece
     * @param string $tentative
     * @param string $motif
     * @param string $status
     */
    public function __construct(int $id, string $nbor, string $exp, string $destinataire, string $ville, string $lieu, string $nature, string $nbr, string $tel, string $montant, string $espece, string $tentative, string $motif, string $status = null)
    {
        $this->id = $id;
        $this->nbor = $nbor;
        $this->exp = $exp;
        $this->destinataire = $destinataire;
        $this->ville = $ville;
        $this->lieu = $lieu;
        $this->nature = $nature;
        $this->nbr = $nbr;
        $this->tel = $tel;
        $this->montant = $montant;
        $this->espece = $espece;
        $this->tentative = $tentative;
        $this->motif = $motif;
        $this->status = $status;
    }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getNbor(): string
    {
        return $this->nbor;
    }

    /**
     * @param string $nbor
     */
    public function setNbor(string $nbor)
    {
        $this->nbor = $nbor;
    }

    /**
     * @return string
     */
    public function getExp(): string
    {
        return $this->exp;
    }

    /**
     * @param string $exp
     */
    public function setExp(string $exp)
    {
        $this->exp = $exp;
    }

    /**
     * @return string
     */
    public function getDestinataire(): string
    {
        return $this->destinataire;
    }

    /**
     * @param string $destinataire
     */
    public function setDestinataire(string $destinataire)
    {
        $this->destinataire = $destinataire;
    }

    /**
     * @return string
     */
    public function getVille(): string
    {
        return $this->ville;
    }

    /**
     * @param string $ville
     */
    public function setVille(string $ville)
    {
        $this->ville = $ville;
    }

    /**
     * @return string
     */
    public function getLieu(): string
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
    public function getNature(): string
    {
        return $this->nature;
    }

    /**
     * @param string $nature
     */
    public function setNature(string $nature)
    {
        $this->nature = $nature;
    }

    /**
     * @return string
     */
    public function getNbr(): string
    {
        return $this->nbr;
    }

    /**
     * @param string $nbr
     */
    public function setNbr(string $nbr)
    {
        $this->nbr = $nbr;
    }

    /**
     * @return string
     */
    public function getTel(): string
    {
        return $this->tel;
    }

    /**
     * @param string $tel
     */
    public function setTel(string $tel)
    {
        $this->tel = $tel;
    }

    /**
     * @return string
     */
    public function getMontant(): string
    {
        return $this->montant;
    }

    /**
     * @param string $montant
     */
    public function setMontant(string $montant)
    {
        $this->montant = $montant;
    }

    /**
     * @return string
     */
    public function getEspece(): string
    {
        return $this->espece;
    }

    /**
     * @param string $espece
     */
    public function setEspece(string $espece)
    {
        $this->espece = $espece;
    }

    /**
     * @return string
     */
    public function getTentative(): string
    {
        return $this->tentative;
    }

    /**
     * @param string $tentative
     */
    public function setTentative(string $tentative)
    {
        $this->tentative = $tentative;
    }

    /**
     * @return string
     */
    public function getMotif(): string
    {
        return $this->motif;
    }

    /**
     * @param string $motif
     */
    public function setMotif(string $motif)
    {
        $this->motif = $motif;
    }

    /**
     * @return string
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus(string $status)
    {
        $this->status = $status;
    }

    /**
     * @return string
     */
    public function getNextDate(): string
    {
        return $this->next_date;
    }

    /**
     * @param string $next_date
     */
    public function setNextDate(string $next_date): void
    {
        $this->next_date = $next_date;
    }

    /**
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }
}
