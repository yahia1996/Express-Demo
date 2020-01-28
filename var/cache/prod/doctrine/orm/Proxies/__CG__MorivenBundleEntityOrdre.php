<?php

namespace Proxies\__CG__\MorivenBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Ordre extends \MorivenBundle\Entity\Ordre implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = ['nbor' => NULL, 'exp' => NULL, 'destinataire' => NULL, 'ville' => NULL, 'lieu' => NULL, 'nature' => NULL, 'nbr' => NULL, 'tel' => NULL, 'montant' => NULL, 'espece' => NULL, 'tentative' => NULL, 'motif' => NULL, 'status' => NULL, 'next_date' => NULL, 'description' => NULL];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {
        unset($this->nbor, $this->exp, $this->destinataire, $this->ville, $this->lieu, $this->nature, $this->nbr, $this->tel, $this->montant, $this->espece, $this->tentative, $this->motif, $this->status, $this->next_date, $this->description);

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }

    /**
     * 
     * @param string $name
     */
    public function __get($name)
    {
        if (array_key_exists($name, $this->__getLazyProperties())) {
            $this->__initializer__ && $this->__initializer__->__invoke($this, '__get', [$name]);

            return $this->$name;
        }

        trigger_error(sprintf('Undefined property: %s::$%s', __CLASS__, $name), E_USER_NOTICE);
    }

    /**
     * 
     * @param string $name
     * @param mixed  $value
     */
    public function __set($name, $value)
    {
        if (array_key_exists($name, $this->__getLazyProperties())) {
            $this->__initializer__ && $this->__initializer__->__invoke($this, '__set', [$name, $value]);

            $this->$name = $value;

            return;
        }

        $this->$name = $value;
    }

    /**
     * 
     * @param  string $name
     * @return boolean
     */
    public function __isset($name)
    {
        if (array_key_exists($name, $this->__getLazyProperties())) {
            $this->__initializer__ && $this->__initializer__->__invoke($this, '__isset', [$name]);

            return isset($this->$name);
        }

        return false;
    }

    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', 'id', 'nbor', 'exp', 'destinataire', 'ville', 'lieu', 'nature', 'nbr', 'tel', 'montant', 'espece', 'tentative', 'motif', 'status', 'next_date', 'description'];
        }

        return ['__isInitialized__', 'id'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Ordre $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

            unset($this->nbor, $this->exp, $this->destinataire, $this->ville, $this->lieu, $this->nature, $this->nbr, $this->tel, $this->montant, $this->espece, $this->tentative, $this->motif, $this->status, $this->next_date, $this->description);
        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setId($id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setId', [$id]);

        return parent::setId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function getNbor(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNbor', []);

        return parent::getNbor();
    }

    /**
     * {@inheritDoc}
     */
    public function setNbor(string $nbor)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNbor', [$nbor]);

        return parent::setNbor($nbor);
    }

    /**
     * {@inheritDoc}
     */
    public function getExp(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExp', []);

        return parent::getExp();
    }

    /**
     * {@inheritDoc}
     */
    public function setExp(string $exp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setExp', [$exp]);

        return parent::setExp($exp);
    }

    /**
     * {@inheritDoc}
     */
    public function getDestinataire(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDestinataire', []);

        return parent::getDestinataire();
    }

    /**
     * {@inheritDoc}
     */
    public function setDestinataire(string $destinataire)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDestinataire', [$destinataire]);

        return parent::setDestinataire($destinataire);
    }

    /**
     * {@inheritDoc}
     */
    public function getVille(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVille', []);

        return parent::getVille();
    }

    /**
     * {@inheritDoc}
     */
    public function setVille(string $ville)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVille', [$ville]);

        return parent::setVille($ville);
    }

    /**
     * {@inheritDoc}
     */
    public function getLieu(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLieu', []);

        return parent::getLieu();
    }

    /**
     * {@inheritDoc}
     */
    public function setLieu(string $lieu)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLieu', [$lieu]);

        return parent::setLieu($lieu);
    }

    /**
     * {@inheritDoc}
     */
    public function getNature(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNature', []);

        return parent::getNature();
    }

    /**
     * {@inheritDoc}
     */
    public function setNature(string $nature)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNature', [$nature]);

        return parent::setNature($nature);
    }

    /**
     * {@inheritDoc}
     */
    public function getNbr(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNbr', []);

        return parent::getNbr();
    }

    /**
     * {@inheritDoc}
     */
    public function setNbr(string $nbr)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNbr', [$nbr]);

        return parent::setNbr($nbr);
    }

    /**
     * {@inheritDoc}
     */
    public function getTel(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTel', []);

        return parent::getTel();
    }

    /**
     * {@inheritDoc}
     */
    public function setTel(string $tel)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTel', [$tel]);

        return parent::setTel($tel);
    }

    /**
     * {@inheritDoc}
     */
    public function getMontant(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMontant', []);

        return parent::getMontant();
    }

    /**
     * {@inheritDoc}
     */
    public function setMontant(string $montant)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMontant', [$montant]);

        return parent::setMontant($montant);
    }

    /**
     * {@inheritDoc}
     */
    public function getEspece(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEspece', []);

        return parent::getEspece();
    }

    /**
     * {@inheritDoc}
     */
    public function setEspece(string $espece)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEspece', [$espece]);

        return parent::setEspece($espece);
    }

    /**
     * {@inheritDoc}
     */
    public function getTentative(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTentative', []);

        return parent::getTentative();
    }

    /**
     * {@inheritDoc}
     */
    public function setTentative(string $tentative)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTentative', [$tentative]);

        return parent::setTentative($tentative);
    }

    /**
     * {@inheritDoc}
     */
    public function getMotif(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMotif', []);

        return parent::getMotif();
    }

    /**
     * {@inheritDoc}
     */
    public function setMotif(string $motif)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMotif', [$motif]);

        return parent::setMotif($motif);
    }

    /**
     * {@inheritDoc}
     */
    public function getStatus(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStatus', []);

        return parent::getStatus();
    }

    /**
     * {@inheritDoc}
     */
    public function setStatus(string $status)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatus', [$status]);

        return parent::setStatus($status);
    }

    /**
     * {@inheritDoc}
     */
    public function getNextDate(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNextDate', []);

        return parent::getNextDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setNextDate(string $next_date): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNextDate', [$next_date]);

        parent::setNextDate($next_date);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription(string $description): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        parent::setDescription($description);
    }

}