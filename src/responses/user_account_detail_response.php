<?php
namespace WebLogic\sslstore\responses;

use WebLogic\sslstore\abstractions\baseresponse;

class user_account_detail_response extends baseresponse
{
    public $PartnerCode;
    public $CompanyName;
    public $FullName;
    public $Email;
    public $AlternateEmail;
    public $AccountType;
    public $AccountBalance;
    public $CurrentPlan;
    public $AllowCredit;
}