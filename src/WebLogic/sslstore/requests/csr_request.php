<?php

namespace WebLogic\sslstore\requests;

use WebLogic\sslstore\abstractions\baserequest;

class csr_request extends baserequest
{
    public $ProductCode = '';
    public $CSR = '';
}