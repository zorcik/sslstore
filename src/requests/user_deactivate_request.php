<?php

namespace WebLogic\sslstore\requests;

use WebLogic\sslstore\abstractions\baserequest;

class user_deactivate_request extends baserequest
{
    public $PartnerCode;
    public $CustomPartnerCode;
    public $AuthenticationToken;
    public $PartnerEmail;
    public $isEnabled;
}