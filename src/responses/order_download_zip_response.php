<?php
namespace WebLogic\sslstore\responses;

use WebLogic\sslstore\abstractions\baseresponse;

class order_download_zip_response extends baseresponse
{
    public $PartnerOrderID;
    public $CertificateStatus;
    public $ValidationStatus;
    public $Zip;
    public $pkcs7zip;
    public $CertificateStartDate;
    public $CertificateEndDate;
    public $CertificateStartDateInUTC;
    public $CertificateEndDateInUTC;
}