<?php

namespace AppBundle\Repository;

/**
 * OrderUserRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class OrderUserRepository extends \Doctrine\ORM\EntityRepository
{
    function existingOrderUser($userId, $token) {
        return $this->createQueryBuilder('u')
            ->select('u')
            ->innerJoin("u.orderGroup", "g")
            ->where('u.id = :userid')
            ->andWhere('g.token = :token')
            ->setParameter('userid', $userId)
            ->setParameter('token', $token)
            ->getQuery()
            ->getResult();
    }
}
