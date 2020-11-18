<?php
namespace WebLogic\sslstore\responses;

use WebLogic\sslstore\abstractions\baseresponse;

class order_download_response extends baseresponse
{
    public $PartnerOrderID;
    public $CertificateStatus;
    public $ValidationStatus;
    public $Certificates;
    public $CertificateStartDate;
    public $CertificateEndDate;
    public $CertificateStartDateInUTC;
    public $CertificateEndDateInUTC;
}