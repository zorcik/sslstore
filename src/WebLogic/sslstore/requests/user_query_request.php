<?php

namespace WebLogic\sslstore\requests;

use WebLogic\sslstore\abstractions\baserequest;

class user_query_request extends baserequest
{
    public $SubUserID;
    public $StartDate;
    public $EndDate;
}