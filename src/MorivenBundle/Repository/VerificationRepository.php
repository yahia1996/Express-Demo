<?php

namespace MorivenBundle\Repository;
use MorivenBundle\Entity\Verification;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

/**
 * VerificationRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class VerificationRepository extends Repository
{
    /**
     * @param array $content
     * @throws \Doctrine\ORM\OptimisticLockException
     */
    public function create(array $content)
    {
        $verification = new Verification();
        $this->update($verification, $content);
    }

    /**
     * @param Verification $verification
     * @param array $content
     *
     * @throws \Doctrine\ORM\OptimisticLockException
     */
    public function update(Verification $verification, array $content)
    {
        foreach ($content as $property => $value) {
            $verification->{$property} = $value;
        }

        $this->store($verification);
    }

    /**
     * @param Verification $verification
     * @param bool $refresh
     * @return void
     *
     * @throws \Doctrine\ORM\ORMInvalidArgumentException
     * @throws \Doctrine\ORM\OptimisticLockException
     */
    public function store(Verification $verification, bool $refresh = false)
    {
        $this->_em->persist($verification);
        $this->_em->flush();
        if ($refresh) {
            $this->_em->refresh($verification);
        }
    }

    /**
     * @param int $id
     *
     * @return Verification
     * @throws \ReflectionException
     */
    public function load(int $id) : Verification
    {
        /** @var Verification|null $verification */
        if (null === ($verification = $this->find($id))) {
            throw new NotFoundHttpException(
                (new \ReflectionClass($this->getClassName()))->getShortName() . ' not found with given Id.'
            );
        }
        return $verification;
    }

    /**
     * @param int $verificationId
     * @throws \Doctrine\ORM\OptimisticLockException
     * @throws \Doctrine\ORM\ORMInvalidArgumentException
     * @throws \Doctrine\ORM\NonUniqueResultException
     * @throws \Symfony\Component\HttpKernel\Exception\NotFoundHttpException
     * @throws \ReflectionException
     */
    public function remove(int $verificationId)
    {
        $verification = $this->load($verificationId);
        $this->_em->remove($verification);
        $this->_em->flush($verification);
    }
}
