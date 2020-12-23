<?php

namespace WebLogic\sslstore\requests;

use WebLogic\sslstore\abstractions\baserequest;

class product_query_request extends baserequest
{
    public $ProductCode;
    public $ProductType;
    public $NeedSortedList;
}