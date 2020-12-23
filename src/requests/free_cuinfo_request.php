<?php

namespace WebLogic\sslstore\requests;

use WebLogic\sslstore\abstractions\baserequest;
use WebLogic\sslstore\abstractions\OrganizationInfo;
use WebLogic\sslstore\abstractions\OrganizationAddress;
use WebLogic\sslstore\abstractions\contact;

class free_cuinfo_request extends baserequest
{
    public function __construct()
    {
        $this->OrganizationInfo = new OrganizationInfo();
        $this->OrganizationInfo->OrganizationAddress = new OrganizationAddress();
        $this->AdminContact = new contact();
        $this->TechnicalContact = new contact();
        parent::__construct();
    }

    public $CustomOrderID;
    public $ProductCode;
    public $ExtraProductCodes;
    public $OrganizationInfo;
    public $ValidityPeriod;
    public $ServerCount;
    public $CSR;
    public $DomainName;
    public $WebServerType;
    public $DNSNames;
    public $isCUOrder;
    public $isRenewalOrder;
    public $SpecialInstructions;
    public $RelatedTheSSLStoreOrderID;
    public $isTrialOrder;
    public $AdminContact;
    public $TechnicalContact;
    public $ApproverEmail;
    public $ReserveSANCount;
    public $AddInstallationSupport;
    public $EmailLanguageCode;
    public $FileAuthDVIndicator;
    public $CNAMEAuthDVIndicator;
    public $HTTPSFileAuthDVIndicator;
    public $SignatureHashAlgorithm;
}