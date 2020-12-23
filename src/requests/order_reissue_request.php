<?php

namespace WebLogic\sslstore\requests;

use WebLogic\sslstore\abstractions\baserequest;

class order_reissue_request extends baserequest
{
    public function __construct()
    {
        $this->EditSAN = array();
        $this->DeleteSAN = array();
        $this->AddSAN = array();
        parent::__construct();
    }
    public $TheSSLStoreOrderID;
    public $CSR;
    public $WebServerType;
    public $DNSNames;
    public $SpecialInstructions;
    public $EditSAN;
    public $DeleteSAN;
    public $AddSAN;
    public $isWildCard;
    public $ReissueEmail;
    public $PreferEnrollmentLink;
    public $SignatureHashAlgorithm;
    public $FileAuthDVIndicator;
    public $HTTPSFileAuthDVIndicator;
    public $CNAMEAuthDVIndicator;
    public $ApproverEmails;
    public $CertTransparencyIndicator;
    public $DateTimeCulture;
    public $CSRUniqueValue;
}