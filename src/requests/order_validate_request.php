<?php

namespace WebLogic\sslstore\requests;

use WebLogic\sslstore\abstractions\baserequest;

class order_validate_request extends baserequest
{
    public $CSR;
    public $ProductCode;
    public $ServerCount;
    public $ValidityPeriod;
    public $WebServerType;
}