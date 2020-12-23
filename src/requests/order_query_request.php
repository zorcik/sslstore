<?php

namespace WebLogic\sslstore\requests;

use WebLogic\sslstore\abstractions\baserequest;

class order_query_request extends baserequest
{
    public $StartDate;
    public $EndDate;
    public $CertificateExpireToDate;
    public $CertificateExpireFromDate;
    public $DomainName;
    public $SubUserID;
    public $ProductCode;
    public $DateTimeCulture;
    public $PageNumber;
    public $PageSize;
}