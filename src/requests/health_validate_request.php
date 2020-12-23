<?php

namespace WebLogic\sslstore\requests;

use WebLogic\sslstore\abstractions\baserequest;

class health_validate_request
{
    public $PartnerCode;
    public $AuthToken;
    public $ReplayToken;
    public $UserAgent;
}