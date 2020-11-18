<?php

namespace WebLogic\sslstore\requests;

use WebLogic\sslstore\abstractions\baserequest;

class user_account_detail_request extends baserequest
{
    public $PartnerCode;
    public $AuthToken;
    public $ReplayToken;
    public $UserAgent;
    public $IPAddress;
}