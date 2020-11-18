<?php

namespace WebLogic\sslstore\abstractions;

class apirequest
{
	public $PartnerCode = '';
	public $AuthToken = '';
    public $ReplayToken = '';
    public $UserAgent = '';
    public $TokenID = '';
    public $TokenCode = '';
    public $IPAddress = '';
    public $IsUsedForTokenSystem = false;
    public $Token = '';
}