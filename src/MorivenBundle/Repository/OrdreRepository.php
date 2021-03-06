<?php

namespace MorivenBundle\Repository;
use MorivenBundle\Entity\{Ordre};

/**
 * OrdreRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class OrdreRepository extends Repository
{
    /**
     * @param array $content
     * @throws \Doctrine\ORM\OptimisticLockException
     */
    public function create(array $content)
    {
        $ordre = new Ordre();
        $this->update($ordre, $content);
    }

    /**
     * @param Ordre $ordre
     * @param array $content
     *
     * @throws \InvalidArgumentException
     * @throws \Doctrine\ORM\OptimisticLockException
     */
    public function update(Ordre $ordre, array $content)
    {
        foreach ($content as $property => $value) {
            $ordre->{$property} = $value;
        }
        $this->store($ordre);
    }

    /**
     * @param Ordre $order
     * @param bool $refresh
     * @return void
     *
     */
    public function store(Ordre $order, bool $refresh = false)
    {
        $this->_em->persist($order);
        $this->_em->flush();
        if ($refresh) {
            $this->_em->refresh($order);
        }
    }
}
