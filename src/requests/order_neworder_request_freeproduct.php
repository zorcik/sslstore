<?php

namespace WebLogic\sslstore\requests;

use WebLogic\sslstore\abstractions\baserequest;
use WebLogic\sslstore\abstractions\contact;

class order_neworder_request_freeproduct extends baserequest
{
    public function __construct()
    {
        $this->TechnicalContact= new contact();
        parent::__construct();
    }
    
    public $TechnicalContact;
    
}