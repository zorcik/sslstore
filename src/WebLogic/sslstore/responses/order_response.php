<?php
namespace WebLogic\sslstore\responses;

use WebLogic\sslstore\abstractions\baseresponse;
use WebLogic\sslstore\abstractions\orderStatus;
use WebLogic\sslstore\abstractions\contact;

class order_response extends baseresponse
{
    public function __construct()
    {
        $this->OrderStatus = new orderStatus();
        $this->AdminContact = new contact();
        $this->TechnicalContact = new contact();
        parent::__construct();
    }
    public $PartnerOrderID;
    public $CustomOrderID;
    public $TheSSLStoreOrderID;
    public $VendorOrderID;
    public $RefundRequestID;
    public $isRefundApproved;
    public $TinyOrderLink;
    public $OrderStatus;
    public $OrderAmount;
    public $PurchaseDate;
    public $CertificateStartDate;
    public $CertificateEndDate;
    public $CommonName;
    public $DNSNames;
    public $SANCount;
    public $ServerCount;
    public $Validity;
    public $Organization;
    public $OrganizationalUnit;
    public $State;
    public $Country;
    public $Locality;
    public $OrganizationPhone;
    public $OrganizationAddress;
    public $OrganizationPostalcode;
    public $DUNS;
    public $WebServerType;
    public $ApproverEmail;
    public $ProductName;
    public $AdminContact;
    public $TechnicalContact;
    public $ReissueSuccessCode;
    public $AuthFileName;
    public $AuthFileContent;
    public $PollStatus;
    public $PollDate;
    public $CustomerLoginName;
    public $CustomerPassword;
    public $CustomerID;
    public $TokenID;
    public $TokenCode;
    public $SiteSealurl;
    public $CNAMEAuthName;
    public $CNAMEAuthValue;
    public $SignatureEncryptionAlgorithm;
    public $SignatureHashAlgorithm;
    public $VendorName;
    public $SubVendorName;
    public $Token;
    public $SerialNumber;
    public $CertificateStartDateInUTC;
    public $CertificateEndDateInUTC;
    public $PurchaseDateInUTC;
    public $PollDateInUTC;
}