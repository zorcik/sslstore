<?php

namespace WebLogic\sslstore\requests;

use WebLogic\sslstore\abstractions\baserequest;
use WebLogic\sslstore\abstractions\OrganizationAddress;
use WebLogic\sslstore\abstractions\OrganizationInfo;

class order_agreement_request extends baserequest
{
    public function __construct()
    {
        $this->OrganizationInfo = new OrganizationInfo();
        $this->OrganizationInfo->OrganizationAddress = new OrganizationAddress();
        parent::__construct();
    }
    public $CustomOrderID;
    public $ProductCode;
    public $ExtraProductCodes;
    public $OrganizationInfo;
    public $ValidityPeriod;
    public $ServerCount;
    public $CSR;
    public $DomainName;
    public $WebServerType;
}