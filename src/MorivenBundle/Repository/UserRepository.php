<?php

namespace MorivenBundle\Repository;

use MorivenBundle\Entity\User;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

/**
 * Class UserRepository
 * @package MorivenBundle\Repository
 */
class UserRepository extends Repository
{
    /**
     * @param array $content
     * @throws \Doctrine\ORM\OptimisticLockException
     */
    public function create(array $content)
    {
        $user = new User();
        $this->update($user, $content);
    }

    /**
     * @param User $user
     * @param array $content
     *
     * @throws \InvalidArgumentException
     * @throws \Doctrine\ORM\OptimisticLockException
     */
    public function update(User $user, array $content)
    {
        foreach ($content as $property => $value) {
            $user->{$property} = $value;
        }
        if (null === $user->language) {
            throw new \InvalidArgumentException();
        }
        $this->store($user);
    }

    /**
     * @param User $user
     * @param bool $refresh
     * @return void
     *
     * @throws \Doctrine\ORM\ORMInvalidArgumentException
     * @throws \Doctrine\ORM\OptimisticLockException
     */
    public function store(User $user, bool $refresh = false)
    {
        $this->_em->persist($user);
        $this->_em->flush();
        if ($refresh) {
            $this->_em->refresh($user);
        }
    }

    /**
     * @param int $id
     *
     * @return User
     * @throws \ReflectionException
     */
    public function load(int $id) : User
    {
        /** @var User|null $user */
        if (null === ($user = $this->find($id))) {
            throw new NotFoundHttpException(
                (new \ReflectionClass($this->getClassName()))->getShortName() . ' not found with given Id.'
            );
        }
        return $user;
    }
}