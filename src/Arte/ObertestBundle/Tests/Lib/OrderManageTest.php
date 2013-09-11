<?php
namespace Arte\ObertestBundle\Tests\Lib;

use Arte\ObertestBundle\Entity\TBProduct;
use Arte\ObertestBundle\Lib\OrderManage;
use Doctrine\ORM\NoResultException;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Input\StringInput;
use Symfony\Component\Console\Output\ConsoleOutput;
use Symfony\Component\Console\Output\NullOutput;
use Arte\ObertestBundle\Entity\TBOrderProduct;
use Arte\ObertestBundle\Entity\TBOrder;

class OrderManageTest extends WebTestCase {

    /**
     * @var \Doctrine\ORM\EntityManager
     */
    private $em;
    /**
     * @var \Arte\ObertestBundle\Lib\OrderManage
     */
    private $orderManage;

    /**
     * @test
     * @group debug
     */
    public function 注文一覧()
    {
        //
        $this->deleteAllRawData();
        $data = $this->createData1();

        //
        $tbOrder = $this->orderManage->getOrder($data->getId());

        $datas = array();
        foreach($tbOrder->getTBOrderProductsOrderId() as $value)
        {
            /** @var $value \Arte\ObertestBundle\Entity\TBOrderProduct */
            $datas[] = $value->getTBProductProductId()->getName();
        }
    }

    /**
     * データ作成
     * @return TBOrder
     * @throws \Exception
     */
    public function createData1()
    {
        $this->em->getConnection()->beginTransaction();
        try {

            $tbProduct1 = new TBProduct();
            $tbProduct1->setName("product01");
            $this->em->persist($tbProduct1);
            $this->em->flush();

            $tbProduct2 = new TBProduct();
            $tbProduct2->setName("product02");
            $this->em->persist($tbProduct2);
            $this->em->flush();

            $tbOrder1 = new TBOrder();
            $tbOrder1->setTitle("order01");
            $this->em->persist($tbOrder1);
            $this->em->flush();

            $tbOrder2 = new TBOrder();
            $tbOrder2->setTitle("order02");
            $this->em->persist($tbOrder2);
            $this->em->flush();

            $tbOrderProduct1 = new TBOrderProduct();
            $tbOrderProduct1->setTBProductProductId($tbProduct1);
            $tbOrderProduct1->setProductId($tbProduct1->getId());
            $tbOrderProduct1->setTBOrderOrderId($tbOrder1);
            $tbOrderProduct1->setOrderId($tbOrder1->getId());
            $tbOrderProduct1->setFlag(1);
            $this->em->persist($tbOrderProduct1);
            $this->em->flush();

            $tbOrderProduct2 = new TBOrderProduct();
            $tbOrderProduct2->setTBProductProductId($tbProduct2);
            $tbOrderProduct2->setProductId($tbProduct2->getId());
            $tbOrderProduct2->setTBOrderOrderId($tbOrder1);
            $tbOrderProduct2->setOrderId($tbOrder1->getId());
            $tbOrderProduct2->setFlag(1);
            $this->em->persist($tbOrderProduct2);
            $this->em->flush();

            $this->em->getConnection()->commit();

        }catch (\Exception $e){
            $this->em->getConnection()->rollBack();
            $this->em->close();
            throw $e;
        }

        $this->em->clear();

        return $tbOrder1;
    }

    /**
     * データ削除
     */
    private function deleteAllRawData()
    {

        $connection = $this->em->getConnection();
        $platform   = $connection->getDatabasePlatform();

        $connection->executeQuery('SET FOREIGN_KEY_CHECKS = 0;');

//        $truncateSql = $platform->getTruncateTableSQL('TBDepartment');
//        $connection->executeUpdate($truncateSql);
        $truncateSql = $platform->getTruncateTableSQL('TBOrder');
        $connection->executeUpdate($truncateSql);
        $truncateSql = $platform->getTruncateTableSQL('TBOrderProduct');
        $connection->executeUpdate($truncateSql);
        $truncateSql = $platform->getTruncateTableSQL('TBProduct');
        $connection->executeUpdate($truncateSql);
//        $truncateSql = $platform->getTruncateTableSQL('TBSystemUser');
//        $connection->executeUpdate($truncateSql);

        $connection->executeQuery('SET FOREIGN_KEY_CHECKS = 1;');
    }

    protected function setUp()
    {
        $kernel = static::createKernel();
        $kernel->boot();
        $this->em = $kernel->getContainer()->get('doctrine.orm.entity_manager');
        $this->orderManage = new OrderManage($this->em);
    }
}
