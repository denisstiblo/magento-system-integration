<?php
namespace Mage\MagentoSystemIntegration\Observer;

use Mage\MagentoSystemIntegration\Synch\Sale\OrderPublisher;
use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\Event\Observer;
use Magento\Sales\Model\Order;
use Mage\MagentoSystemIntegration\Synch\Sale\DataTransferInterface;
use Mage\MagentoSystemIntegration\Synch\Sale\DataTransfer;


class OrderPlaceAfter implements ObserverInterface
{
    protected $_logger;
    protected $_publisher;

    /**
     * @param \Psr\Log\LoggerInterface $_logger
     * @param OrderPublisher $publisher
     */

    public function __construct(
        \Psr\Log\LoggerInterface $_logger,
        OrderPublisher $publisher
    )
    {
        $this->_logger = $_logger;
        $this->_publisher = $publisher;
    }


    /**
     * Send order data to message queue
     * @param Observer $observer
     * @return $this|void
     */
    public function execute(Observer $observer)
    {
        $order = $observer->getEvent()->getOrder();

        $dataTransfer = new DataTransfer();

        $dataTransfer->setOrder($order->getData());

        $this->_publisher->execute($dataTransfer);
    }
}
