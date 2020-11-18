<?php
namespace WebLogic\sslstore\responses;

use WebLogic\sslstore\abstractions\baseresponse;

class ssl_validation_response extends baseresponse
{
    public $DomainName;
    public $CommonName;
    public $ChainRoot;
    public $Subject;
    public $Organization;
    public $OrganizationUnit;
    public $Country;
    public $State;
    public $Location;
    public $SerialNumber;
    public $PublicKey;
    public $KeySize;
    public $Issuer;
    public $IssuerName;
    public $KeyAlgorithmParameters;
    public $KeyAlgorithm;
    public $HashCode;
    public $Format;
    public $ExpirationDate;
    public $EffectiveDate;
    public $SANs;
    public $Version;
    public $ThumbPrint;
    public $SignatureAlgorithm;
    public $CertHash;
    public $CertificateType;
    public $Verify;
    
}