<?php

namespace Core\Base;

use Monolog\Logger;
use Psr\Container\ContainerInterface;
use Psr\Log\LoggerInterface;

class Controller
{

    /** @var LoggerInterface $logger description */
    protected $logger;

    /** @var ContainerInterface $container description */
    protected $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
        $this->logger = $container->get("logger");
        $this->onLoad();
    }

    public function onLoad()
    {
    }

    public function __destruct()
    {
        $body = App::$response->getBody();
        $body->rewind();
        $data = json_decode($body->getContents(), true);
        if (!is_null($data))
            $this->logger->info("Response : ", $data);
        App::$logger->info("Finish");
        App::$logger->info("--------------------------------------------------");
    }
}
