<?php
namespace Mage\MagentoSystemIntegration\Synch\Sale;

interface DataTransferInterface{

    /**
     * @return string
     */
    public function getOrder();

    /**
     * @param string $order
     * @return void
     */
    public function setOrder($order);
}
