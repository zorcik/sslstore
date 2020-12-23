<?php
namespace WebLogic\sslstore\responses;

use WebLogic\sslstore\abstractions\baseresponse;

class csr_response extends baseresponse
{
    public $DomainName;
    public $DNSNames;
    public $Country;
    public $Email;
    public $Locality;
    public $Organization;
    public $OrganizationUnit;
    public $State;
    public $hasBadExtensions = false;
    public $isValidDomainName = false;
    public $isWildcardCSR = false;
    public $MD5Hash;
    public $SHA1Hash;
    public $sha256;
    public $RegionSpecificOrderIndicator;
}