<?php

namespace WebLogic\sslstore\abstractions;

class baseresponse
{
    public $AuthResponse;
    public function __construct()
    {
        $this->AuthResponse = new apiresponse();
    }
    public function __toString()
	{
		return var_export($this,true);
	}
}