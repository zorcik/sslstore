<?php

namespace WebLogic\sslstore\requests;

use WebLogic\sslstore\abstractions\baserequest;

class setting_settemplate_request extends baserequest
{
    public $EmailSubject;
    public $EmailMessage;
    public $isDisabled;
    public $EmailTemplateTypes;
}