<?php
namespace Mage\MagentoSystemIntegration\Synch\Sale;

use Magento\Framework\MessageQueue\PublisherInterface;
use Mage\MagentoSystemIntegration\Synch\Sale\DataTransferInterface;

class OrderPublisher
{
    const TOPIC_NAME = 'mage.order.place';

    /**
    * @var PublisherInterface
    */
    private $publisher;

    /**
    * @param PublisherInterface $publisher
    */
    public function __construct(PublisherInterface $publisher)
    {
        $this->publisher = $publisher;
    }

    /**
    * {@inheritdoc}
    */
    public function execute(DataTransferInterface $data)
    {
        $this->publisher->publish(self::TOPIC_NAME, $data);
        return $this;
    }
}
