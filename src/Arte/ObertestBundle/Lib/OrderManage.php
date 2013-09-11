<?php

namespace Arte\ObertestBundle\Lib;


use Arte\ObertestBundle\Entity\TBOrder;
use Arte\ObertestBundle\Entity\TBOrderProduct;
use Arte\ObertestBundle\Entity\TBProduct;

class OrderManage {

    /**
     * @var \Doctrine\ORM\EntityManager
     */
    private $em;

    function __construct($em)
    {
        $this->em = $em;
    }


    /**
     * @param $id
     * @return TBOrder
     */
    public function getOrder($id)
    {

        /* @var $queryBuilder \Doctrine\ORM\QueryBuilder */
        $queryBuilder = $this->em
            ->getRepository('ArteObertestBundle:TBOrder')
            ->createQueryBuilder('o')
            ->Join('o.TBOrderProductsOrderId', 'o2p')
            ->Join('o2p.TBProductProductId', 'p')
            ->select(array(
                'o',
                'o2p',
                'p',
            ))
            ->andWhere('o.id = :id')
            ->setParameter('id', $id)
        ;
        /** @var $tbOrders TBOrder */
        $tbOrder = $queryBuilder->getQuery()->getSingleResult();

        return $tbOrder;
    }

}