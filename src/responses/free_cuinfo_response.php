<?php
namespace WebLogic\sslstore\responses;

use WebLogic\sslstore\abstractions\baseresponse;

class free_cuinfo_response extends baseresponse
{
    public $isSupported;
    public $Months;
    public $SerialNumber;
    public $ExpirationDate;
    public $Issuer;
}