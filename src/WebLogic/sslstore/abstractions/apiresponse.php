<?php

namespace WebLogic\sslstore\abstractions;

class apiresponse
{
   public $isError = false;
   public $Message;
   public $Timestamp = '';
   public $ReplayToken = '';
   public $InvokingPartnerCode='';
   public function __toString()
   {
       return var_export($this,true);
   }
}