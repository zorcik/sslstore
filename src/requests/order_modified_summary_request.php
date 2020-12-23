<?php

namespace WebLogic\sslstore\requests;

use WebLogic\sslstore\abstractions\baserequest;

class order_modified_summary_request extends baserequest
{
    public $SubUserID;
    public $StartDate;
    public $EndDate;
    public $PageNumber;
    public $PageSize;
}