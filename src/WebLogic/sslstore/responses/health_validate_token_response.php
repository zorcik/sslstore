<?php
namespace WebLogic\sslstore\responses;

use WebLogic\sslstore\abstractions\baseresponse;
use WebLogic\sslstore\abstractions\orderStatus;

class health_validate_token_response extends baseresponse
{
    public function __construct()
    {
        $this->OrderStatus = new orderStatus();
        parent::__construct();
    }
    public $ProductName;
    public $ProductCode;
    public $San;
    public $OrderStatus;
    public $NumberOfMonths;
    public $ServerCount;
    public $isRenewalOrder;
    public $ProductType;
    public $VendorName;
}