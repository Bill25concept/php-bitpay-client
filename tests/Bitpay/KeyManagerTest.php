<?php

namespace Bitpay;

class KeyManagerTest extends \PHPUnit_Framework_TestCase
{

    public function testConstruct()
    {
        $storage = $this->getMockStorage();
        $manager = new KeyManager($storage);
    }

    /**
     * @depends testConstruct
     */
    public function testPersist()
    {
        $storage = $this->getMockStorage();
        $manager = new KeyManager($storage);
        $manager->persist($this->getMockKey());
    }

    /**
     * @depends testConstruct
     */
    public function testLoad()
    {
        $storage = $this->getMockStorage();
        $manager = new KeyManager($storage);
        $manager->load($this->getMockKey());
    }

    private function getMockKey()
    {
        return new \Bitpay\PublicKey('/tmp/mock.key');
    }

    private function getMockStorage()
    {
        return new \Bitpay\Storage\MockStorage();
    }
}
