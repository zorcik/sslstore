<?php

namespace WebLogic\sslstore\abstractions;

class baserequest
{
    public $AuthRequest;
    public function __construct()
    {
        $this->AuthRequest = new apirequest();
    }
    public function __toString()
   	{
   		return var_export($this,true);
   	}
}