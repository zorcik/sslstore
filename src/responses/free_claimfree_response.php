<?php
namespace WebLogic\sslstore\responses;

use WebLogic\sslstore\abstractions\baseresponse;

class free_claimfree_response extends baseresponse
{
    public $isAllowed;
    public $PartnerOrderID;
    public $TheSSLStoreOrderID;
    public $VendorOrderID;
    public $LoginName;
    public $LoginPassword;
}