<?php

namespace WebLogic\sslstore\requests;

use WebLogic\sslstore\abstractions\baserequest;

class free_claimfree_request extends baserequest
{
    public function __construct()
    {
        $this->NewOrderRequest = new order_neworder_request_freeproduct();
        parent::__construct();
    }
    public $ProductCode;
    public $RelatedTheSSLStoreOrderID;
    public $NewOrderRequest;
}