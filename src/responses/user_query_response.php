<?php
namespace WebLogic\sslstore\responses;

use WebLogic\sslstore\abstractions\baseresponse;

class user_query_response extends baseresponse
{
    public $PartnerCode;
    public $CustomePartnerCode;
    public $AuthenticationToken;
    public $PartnerEmail;
    public $isEnabled;
}