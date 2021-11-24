<?php

namespace WebLogic\sslstore\requests;

use WebLogic\sslstore\abstractions\baserequest;

class order_inviteorder_request extends baserequest
{
//    public $PreferVendorLink;
    public $ProductCode;
//    public $ExtraProductCode;
//    public $ServerCount;
    public $RequestorEmail;
//    public $ExtraSAN;
    public $CustomOrderID;
    public $ValidityPeriod;
//    public $AddInstallationSupport;
//    public $SignatureHashAlgorithm;
//    public $EmailLanguageCode;
    public $PreferSendOrderEmails;
//    public $CertTransparencyIndicator;
//    public $DateTimeCulture;
}