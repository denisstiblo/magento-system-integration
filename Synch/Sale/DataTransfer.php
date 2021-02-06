<?php
namespace Mage\MagentoSystemIntegration\Synch\Sale;

use Mage\MagentoSystemIntegration\Synch\Sale\DataTransferInterface;

class DataTransfer implements DataTransferInterface
{
    public $order;

    public function getOrder()
    {
        return $this->order;
    }

    public function setOrder($order)
    {
        $this->order = $order;
    }
}
