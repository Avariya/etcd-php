<?php

namespace LinkORB\Tests\Component\Etcd;

use GuzzleHttp\ClientInterface;
use LinkORB\Component\Etcd\GuzzlessClient;
use \PHPUnit_Framework_TestCase;
use \PHPUnit_Framework_MockObject_MockObject as Mock;

class GuzzlessClientTest extends PHPUnit_Framework_TestCase
{
    /**
     * @param Mock|null $client
     * @param string $version
     * @param string $root
     * @return GuzzlessClient
     */
    private function getClientMock(
        Mock $client = null,
        $version = GuzzlessClient::DEFAULT_API_VERSION,
        $root = GuzzlessClient::DEFAULT_ROOT
    ) {
        if (!$client) {
            /** @var ClientInterface $client */
            $client = $this->getMockBuilder(ClientInterface::class)
                ->disableOriginalConstructor()
                ->getMock();
        }

        return new GuzzlessClient($client, $version, $root);
    }

    public function testSetRoot()
    {
        $this->assertTrue(true);
    }
}