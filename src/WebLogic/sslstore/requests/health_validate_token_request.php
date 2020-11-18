<?php

namespace WebLogic\sslstore\requests;

use WebLogic\sslstore\abstractions\baserequest;

class health_validate_token_request
{
    public $Token;
    public $TokenID;
    public $TokenCode;
    public $IsUsedForTokenSystem = true;
}