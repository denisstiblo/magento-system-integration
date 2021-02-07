<?php
namespace Mage\MagentoSystemIntegration\Synch\Sale;

use \Exception;
use Mage\MagentoSystemIntegration\Synch\Sale\DataTransfer;

class OrderConsumer
{
    public function __construct()
    {

    }

    /**
     * @param DataTransfer $message
     * @return void
     * @throws Exception
     */
    public function processMessage($message)
    {
        throw new Exception('Testing how dlx works for us');
    }
}
