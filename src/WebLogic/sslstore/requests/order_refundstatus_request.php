<?php

namespace WebLogic\sslstore\requests;

use WebLogic\sslstore\abstractions\baserequest;

class order_refundstatus_request extends baserequest
{
    public $CustomOrderID;
    public $TheSSLStoreOrderID;
    public $ResendEmailType;
    public $ResendEmail;
    public $RefundReason;
    public $RefundRequestID;
    public $ApproverMethod;
    public $DomainNames;
    public $SerialNumber;
}